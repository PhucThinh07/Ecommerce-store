<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{

    public function getHome(){
        return view('client.master');
    }

    public function getIndex(){
        $products = DB::table('products')
                      ->select('id', 'name', 'image', 'price', 'slug', 'color', 'size',
                          'description')
                      ->get();

        $posts = DB::table('posts')
                   ->join('categories', 'posts.category_id', '=', 'categories.id')
                   ->select('posts.name', 'posts.image', 'posts.content', 'posts.slug',
                       'categories.name as category_name')
                   ->get();

        return view('client.pages.home', ['products' => $products, 'posts' => $posts]);
    }
}
