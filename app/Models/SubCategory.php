<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category() {
        return $this->hasOne(Category::class, 'categoryId', 'id');
    }

    public function products() {
        return $this->hasOne(Product::class, 'id', 'subCategoryId');
    }
}
