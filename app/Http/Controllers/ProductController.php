<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showByCategoryId(Request $request, $categoryId) {
        $products = Product::with('seller')->where('categoryId', $categoryId)->paginate(10);
        $categories = Category::all();
        $subCategories = SubCategory::where('categoryId', $categoryId)->get();

        return view('buyer.plant_and_seeds', ['products' => $products, 'categories' => $categories, 'subCategories' => $subCategories]);
    }
}
