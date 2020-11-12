@extends ('layout')

@section ('articles.show')
    <h2>{{ $article->title }}</h2>
    <p>{{ $article->body }}</p>
@endsection