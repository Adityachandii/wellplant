<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function voucherDetail() {
        return $this->hasMany(VoucherDetails::class, 'id', 'voucherId');
    }
}
