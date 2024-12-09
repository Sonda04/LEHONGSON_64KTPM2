<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    public function index()
    {
    $posts = Post::All();
    return view("home", compact("posts"));
    }
   
}
