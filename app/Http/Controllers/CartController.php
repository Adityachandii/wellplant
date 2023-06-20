<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(Request $request) {
        $carts = Cart::with('product')->where('buyerId', $request->session()->get('loginId'))->get();
        $isEmpty = count($carts) == 0;

        return view('buyer.cart', ['carts' => $carts, 'isEmpty' => $isEmpty]);
    }

    public function delete(Request $request) {
        try {
            DB::beginTransaction();
            Cart::where('id', $request['cartId'])->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return back();
    }

    public function checkout(Request $request) {
        $voucherCode = 
        $cartProducts = Cart::with('product')->where('buyerId', $request->session()->get('loginId'))->get();
        $buyer = Buyer::where('id', $request->session()->get('loginId'))->first();
        $orderSummary = 0;

        foreach ($cartProducts as $item) {
            $orderSummary += $item->product->price;
        }

        $subTotal = 0;

        return view('buyer.checkout', ['cartProducts' => $cartProducts, 'buyer' => $buyer, 'orderSummary' => $orderSummary]);
    }
}
