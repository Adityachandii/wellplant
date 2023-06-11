<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category() {
        return $this->hasOne(Category::class, 'categoryId', 'id');
    }

    public function subCategory() {
        return $this->hasOne(SubCategory::class, 'subCategoryId', 'id');
    }

    public function infoPlants() {
        return $this->hasMany(Infoplant::class, 'id', 'productId');
    }

    public function transactionDetails() {
        return $this->hasMany(TransactionDetail::class, 'id', 'productId');
    }

    public function seller() {
        return $this->hasOne(Seller::class, 'id', 'sellerId');
    }
}
