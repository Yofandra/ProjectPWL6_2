<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index($id = 0)
    {
        if ($id != 1 && $id != 3) {
            return 'error';
        } else if ($id == 3) {
            return view('aulia', ['post' => Post::getById($id)]);
        } else if ($id == 1) {
            return view('yofandra', ['post' => Post::getById($id)]);
        }
    }
}
