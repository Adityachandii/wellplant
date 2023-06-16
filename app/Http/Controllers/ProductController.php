<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showByCategoryId(Request $request, $categoryId, $subCategory = null) {
        $isSubCategoryExist = @$subCategory != null;
        $subCategories = SubCategory::where('categoryId', $categoryId)->get();
        $activeSubCategory = @$subCategory != null ? SubCategory::where('id', $subCategory)->first() : $subCategories[0];
        $products = Product::with('seller')->where([
            ['categoryId', $categoryId],
            ['subCategoryId', $isSubCategoryExist ? $subCategory : $activeSubCategory->id]
        ])->paginate(10);

        return view('buyer.products_per_category', ['products' => $products, 'subCategories' => $subCategories, 'activeSubCategory' => $activeSubCategory]);
    }
}
