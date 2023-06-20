<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function infoplant() {
        return $this->hasOne(Infoplant::class, 'id', 'infoPlantId');
    }
}
