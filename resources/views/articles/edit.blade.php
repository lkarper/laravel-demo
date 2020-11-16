@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <h1 class="header has-text-weight-bold is-size-4">Update Article</h1>
        <form action="/articles/{{ $article->id }}" method="POST">
            {{-- Cross-site request forgery --}}
            @csrf 
            {{-- Browser only accepts GET and POST requests in HTML, so you have to set the method with blade --}}
            @method('PUT')
            
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" class="input" name="title" id="title" value="{{ $article->title }}" required>
                </div>
            </div>
            <div class="field">
                <label for="excerpt" class="label">Excerpt</label>
                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt" required>{{ $article->excerpt }}</textarea>
                </div>
            </div>
            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <textarea class="textarea" name="body" id="body" required>{{ $article->body }}</textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
    
@endsection