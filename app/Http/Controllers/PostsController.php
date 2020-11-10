<?php


namespace App\Http\Controllers;
use DB;
use App\Models\Posts;

class PostsController
{
    public function show($slug)
    {

        return view('post', [
            'post' => Posts::where('slug', $slug) -> firstOrFail()

        ]);
    }
}
