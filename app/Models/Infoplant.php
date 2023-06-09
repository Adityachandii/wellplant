<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infoplant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() {
        return $this->hasOne(User::class, 'id', 'buyerId');
    }

    public function product() {
        return $this->hasOne(Product::class, 'id', 'productId');
    }

    public function reminder() {
        return $this->hasMany(Reminder::class, 'infoPlantId', 'id');
    }
}
