<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function product() {
        return $this->hasOne(Product::class, 'productId', 'id');
    }

    public function transaction() {
        return $this->hasOne(Transaction::class, 'transactionId', 'id');
    }
}
