<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Cart;
use App\Models\Notification;
use App\Models\PaymentMethod;
use App\Models\ShippingMethod;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(Request $request) {
        $carts = Cart::with('product')->where('buyerId', $request->session()->get('loginId'))->get();
        $isEmpty = count($carts) == 0;

        if (!$isEmpty) {
            foreach ($carts as $cart) {
                $cart->total = $cart->product->price * $cart->quantity;
            }
        }

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
        $cartProducts = Cart::with('product')->where('buyerId', $request->session()->get('loginId'))->get();
        $buyer = Buyer::where('id', $request->session()->get('loginId'))->first();
        $shipmentMethods = ShippingMethod::all();
        $orderSummary = 0;

        foreach ($cartProducts as $item) {
            $orderSummary += $item->product->price;
        }

        $voucherCode = @$request['voucherCode'];
        $voucher = null;
        $discount = null;
        if ($voucherCode != null) {
            $voucher = Voucher::with('voucherDetail')->where('code', $voucherCode)->first();
            $discount = $orderSummary * ($voucher->voucherDetail->discount / 100);
        }

        $subTotal = $discount != null ? $orderSummary - $discount : $orderSummary;
        $totalPrice = $subTotal;
        
        $payments = PaymentMethod::all();

        return view('buyer.checkout', ['cartProducts' => $cartProducts, 'buyer' => $buyer, 'orderSummary' => $orderSummary, 'subTotal' => $subTotal, 'totalPrice' => $totalPrice, 'shipmentMethods' => $shipmentMethods, 'payments' => $payments]);
    }

    public function payment(Request $request) {
        // dd($request);
        try {
            DB::beginTransaction();
            $transaction = Transaction::create([
                'totalPrice' => $request['totalPrice'],
                'voucherId' => @$request['voucherCode'],
                'paymentMethodId' => $request['paymentMethod'],
                'shippingMethodId' => $request['shipmentType']
            ]);

            $cartProducts = json_decode($request['cartProducts']);
            foreach ($cartProducts as $cart) {
                TransactionDetail::create([
                    'productId' => $cart->productId,
                    'quantity' => $cart->quantity,
                    'transactionId' => $transaction->id
                ]);
            }
            DB::commit();
            
            Notification::create([
                'title' => 'New Transactions Made!',
                'description' => 'You bought several items recently',
                'isRead' => 0,
                'buyerId' => $request->session()->get('loginId')
            ]);

            Cart::where('buyerId', $request->session()->get('loginId'))->delete();

            return redirect()->route('home');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
