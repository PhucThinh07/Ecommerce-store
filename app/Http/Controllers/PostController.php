<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getBlog()
    {
        $posts = DB::table('posts')
            ->select('id', 'name', 'image', 'content', 'slug', 'category_id')
            ->get();
        $categories = DB::table('categories')
            ->select('id', 'name')
            ->get();
        return view('client.pages.blog', ['posts' => $posts, 'categories' => $categories]);
    }
}
