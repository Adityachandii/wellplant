<?php

namespace App\Http\Controllers;

use App\Models\Infoplant;
use App\Models\Product;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function index() {
        $bestSellers = Product::with('seller')->orderBy('soldQty', 'desc')->paginate(10);
        return view('index', ['bestSellers' => $bestSellers, 'routeName' => Route::currentRouteName()]);
    }

    public function home(Request $request) {
        $buyerId = $request->session()->get('loginId');
        $plantProgressQuery = Infoplant::where('buyerId', $buyerId);
        $plantProgress = $plantProgressQuery->get();
        
        $totalPlant = $plantProgressQuery->count();
        $totalWatering = 0;
        $totalFertilizered = 0;
        foreach ($plantProgress as $plant) {
            $totalWatering += $plant->watered;
            $totalFertilizered += $plant->fertilizered;
        }

        // dd([
        //     $totalPlant,
        //     $totalWatering,
        //     $totalFertilizered
        // ]);
        $vouchers = Voucher::all();

        return view('buyer.home', [
            'plantProgress' => $plantProgress, 
            'totalPlant' => $totalPlant, 
            'totalWatering' => $totalWatering, 
            'totalFertilizered' => $totalFertilizered, 
            'vouchers' => $vouchers
        ]);
    }
}
