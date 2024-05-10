<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'product_id', 'transaction_id', 'quantity'
    ]; 

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    
}
