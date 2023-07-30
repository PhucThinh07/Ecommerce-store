<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProduct()
    {
        $products = DB::table('products')
            ->select('id', 'name', 'image', 'price', 'slug', 'description', 'category_id', 'color', 'size')
            ->get();
        $categories = DB::table('product_categories')
            ->select('id', 'name')
            ->get();
        return view('client.pages.category', ['products' => $products, 'categories' => $categories]);
    }
    public function getProdByCat($category_id)
    {
        $products = DB::table('products')
            ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
            ->select('products.*', 'product_categories.name as category_name')
            ->where('product_categories.id', '=', $category_id)
            ->get();
        $categories = DB::table('product_categories')
            ->select('id', 'name')
            ->get();
        return view('client.pages.prodbycat', ['products' => $products, 'categories' => $categories]);
    }
    public function getDetail($slug)
    {
        $products = DB::table('products')
            ->select('slug', 'name', 'price', 'image', 'description', 'color', 'size')
            ->where('slug', $slug)
            ->first();
        return view('client.pages.detail', ['products' => $products, 'slug' => $slug]);
    }
}
