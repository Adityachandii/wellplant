<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transactionDetail() {
        return $this->hasMany(TransactionDetail::class, 'id', 'transactionId');
    }

    public function paymentMethod() {
        return $this->hasOne(PaymentMethod::class, 'paymentMethodId', 'id');
    }
}
