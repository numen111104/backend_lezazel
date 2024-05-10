<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role == 'ADMIN') {
            $transactions = DB::table('transactions')->paginate(10);
            $users = DB::table('users')->get();
        } else {
            $transactions = DB::table('transactions')->where('user_id', auth()->user()->id)->paginate(10);
            $users = DB::table('users')->where('id', auth()->user()->id)->get();
        };
        return view('pages.transactions.index', ['type_menu' => 'dashboard'], compact('transactions', 'users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = DB::table('transactions')->where('id', $id)->first();
        $user = User::where('id', $transaction->user_id)->first();
        return view('pages.transactions.show', ['type_menu' => 'dashboard'], compact('transaction', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = DB::table('transactions')->where('id', $id)->first();
        $user = User::where('id', $transaction->user_id)->first();
        return view('pages.transactions.edit', ['type_menu' => 'dashboard'], compact('transaction', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Lakukan pengecekan apakah pengguna adalah admin atau bukan
            if (!Auth::user()->isAdmin()) {
                throw new Exception('Anda tidak memiliki izin untuk melakukan tindakan ini.');
            }
        
            // Validasi request
            $request->validate([
                'status' => 'required',
            ]);
        
            // Update transaksi
            Transaction::where('id', $id)->update([
                'status' => $request->status
            ]);
        
            // Redirect dengan pesan sukses jika berhasil
            return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil diperbarui');
        } catch (\Exception $e) {
            // Tangani eksepsi yang terjadi
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    

    
    
}
