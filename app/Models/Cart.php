<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function buyer() {
        return $this->hasOne(Buyer::class, 'id', 'buyerId');
    }

    public function product() {
        return $this->hasOne(Product::class, 'id', 'productId');
    }
}
