<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticlesController extends Controller
{
    public function index() {

        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            
        } else {
            $articles = Article::latest()->get();
        }

        // Render a list of a resource

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article) {
        // Show a single resource
        return view('articles.show', ['article' => $article]);
    }

    public function create() {
        // Shows a view to create a new resource
        return view('articles.create');
    }

    public function store() {
        // Persist the new resource

        Article::create($this->validateArticle());

        return redirect(route('articles.index'));
    }

    public function edit(Article $article) {
        // Shows a view to edit an existing resource 
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article) {
        // Persist an edited resource
        $article->update($this->validateArticle());
        
        return redirect($article->path());
    }

    public function destroy() {
        // Delete the resource

    }

    public function validateArticle() {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
