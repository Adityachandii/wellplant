<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function index() {
        $bestSellers = Product::with('seller')->orderBy('soldQty', 'desc')->paginate(10);
        return view('index', ['bestSellers' => $bestSellers, 'routeName' => Route::currentRouteName()]);
    }
}
