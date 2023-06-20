<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Reminder;
use App\Models\Infoplant;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class InfoplantController extends Controller
{
    public function buyPlant(Request $request) {
        try {
            DB::beginTransaction();
            Cart::create([
                'productId' => $request->productId,
                'quantity' => $request->quantity,
                'buyerId' => $request->session()->get('loginId')
            ]);
            DB::commit();
            return redirect()->route('cart');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with([
                'code' => 200,
                'message' => 'Add to cart fail'
            ]);
        }
    }

    public function addPlant(Request $request, $id) {
        try {
            DB::beginTransaction();
            $product = Product::where('id', $id)->first();
            Infoplant::create([
                'name' => $product->name,
                'watered' => 0,
                'fertilizered' => 0,
                'buyerId' => $request->session()->get('loginId'),
                'productId' => $id
            ]);
            DB::commit();
            return response()->json([
                'code' => 200,
                'message' => 'Add Plant Success'
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'code' => 500,
                'message' => 'Add Plant Failed'
            ]);
        }
    }

    public function plantProgress(Request $request) {
        $plants = Infoplant::with([
            'product', 'reminder'
        ])->where('buyerId', $request->session()->get('loginId'))->paginate(4);

        foreach ($plants as $plant) {
            foreach ($plant->reminder as $reminder) {
                // dd($reminder->date);
                $reminder->date = Carbon::parse($reminder->date);
                $reminder->hour = (int)$reminder->date->format('H');
                $reminder->hour = $reminder->hour >= 12 ? strval($reminder->hour.' PM') : strval($reminder->hour.' AM');
                $reminder->date = $reminder->date->format('d M Y');
                // dd($reminder->hour);
            }
        }

        // $reminder = Reminder::with('infoplant')->get();
        // dd([
        //     $plants,
        //     // $reminder
        // ]);
        return view('buyer.plant_progress', ['plants' => $plants]);
    }
}
