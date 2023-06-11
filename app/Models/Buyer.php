<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function infoPlants() {
        return $this->hasMany(Infoplant::class, 'id', 'buyerId');
    }
}
