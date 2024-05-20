<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionItem;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ApiResource;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function all(Request $request)
    {
        try {
            $id = $request->input('id');
            $limit = $request->input('limit', 6);
            $status = $request->input('status');

            if ($id) {
                $transaction = Transaction::with(['items.product'])->find($id);
                if ($transaction) {
                    return new ApiResource(true, 'Get transaction successfully', $transaction, 200, 'OK', [
                        'WWW-Authenticate' => 'Bearer',
                        'Authorization' => 'Bearer',
                        'Content-Type' => 'application/json',
                        'Accept' => 'application/json',
                    ]);
                } else {
                    return new ApiResource(false, 'Transaction not found', null, 404, 'Not Found');
                }
            } else {
                throw new \Exception('Id not found');
            }

            $transaction = Transaction::with(['items.product'])->where('user_id', auth()->user()->id);
            if ($status) {
                $transaction->where('status', $status);
            }

            return new ApiResource(true, 'Get transaction successfully', $transaction->paginate($limit), 200, 'OK');
        } catch (\Throwable $th) {
            return new ApiResource(false, $th->getMessage(), null, 500, 'Internal Server Error');
        }
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'items' => 'required|array',
            'items.*.id' => 'exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
            'status' => 'required|in:PENDING,SUCCESS,CANCELLED,FAILED,SHIPPING,SKIPPED',
            'total_price' => 'required|integer',
            'shipping_price' => 'required|integer',
        ]);
    
        DB::beginTransaction();
        try {
            // Validasi total harga dan cek stok
            $calculatedTotal = 0;
            foreach ($request->items as $item) {
                $product = Product::lockForUpdate()->find($item['id']);
                if (!$product) {
                    throw new \Exception('Product not available or insufficient stock');
                }
                $calculatedTotal += $product->price * $item['quantity'];
            }
            $calculatedTotal += $request->shipping_price;
    
            if ($request->total_price != $calculatedTotal) {
                throw new \Exception('Total price not match. Expect: ' . $request->total_price . ' Actual: ' . $calculatedTotal);
            }
    
            $transaction = Transaction::create([
                'user_id' => Auth::user()->id,
                'address' => $request->address,
                'total_price' => $request->total_price,
                'shipping_price' => $request->shipping_price,
                'status' => $request->status,
            ]);
    
            foreach ($request->items as $item) {
                TransactionItem::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $item['id'],
                    'transaction_id' => $transaction->id,
                    'quantity' => $item['quantity'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Checkout failed: ' . $e->getMessage(),
                'data' => null,
            ], 422);
        }
    
        return response()->json([
            'success' => true,
            'message' => 'Checkout successfully',
            'data' => $transaction->load('items.product'),
        ], 200);
    }
    
    
}
