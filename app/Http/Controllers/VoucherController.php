<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function use(Request $request) {
        $voucherCode = @$request['voucherCode'];
        $subTotal = @$request['subTotal'];

        if ($voucherCode == null || $subTotal == null) {
            return response()->json([
                'code' => 400,
                'message' => 'Bad Request'
            ]);
        }

        $voucher = Voucher::with('voucherDetail')->where('code', $voucherCode)->first();

        if ($voucher == null) {
            return response()->json([
                'code' => 500,
                'message' => 'Voucher tidak ditemukan'
            ]);
        }

        // dd($voucher->voucherDetail->discount);
        // dd()
        $discount = $subTotal * $voucher->voucherDetail->discount / 100;
        $subTotal = $subTotal - $discount;
        // dd($subTotal);
        return response()->json([
            'code' => 200,
            'message' => 'Success',
            'result' => [
                'subTotal' => $subTotal,
                'totalPrice' => $subTotal,
                'discount' => $discount
            ]
        ]);
    }
}
