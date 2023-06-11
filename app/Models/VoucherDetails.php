<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherDetails extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function voucher() {
        return $this->hasOne(Voucher::class, 'voucherId', 'id');
    }
}
