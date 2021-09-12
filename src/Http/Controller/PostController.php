<?php
namespace Nhatcaht\Post\Http\Controller;

use App\Http\Controllers\Controller;
use Nhatcaht\Post\Models\Posts;

class PostController extends Controller
{
    public function index()
    {
        echo test_post(); die;
        echo config('post.hoten'); die;
        $post = Posts::all(); dd($post);
        // return "Demo";
       return view('post::index');
    }
}