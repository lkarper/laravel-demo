<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController2 extends Controller
{
    public function show($post) {
        return view('post', [
            'post' => $post
        ]);
    }

}
