<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index() {
        // Render a list of a resource
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }

    public function show($articleId) {
        // Show a single resource
        $article = Article::find($articleId);
        return view('articles.show', ['article' => $article]);
    }

    public function create() {
        // Shows a view to create a new resource
        return view('articles.create');
    }

    public function store() {
        // Persist the new resource

        // Validation?

        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();
        return redirect('/articles');
    }

    public function edit() {
        // Shows a view to edit an existing resource

    }

    public function update() {
        // Persist an edited resource

    }

    public function destroy() {
        // Delete the resource

    }
}
