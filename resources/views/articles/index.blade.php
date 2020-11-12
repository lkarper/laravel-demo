@extends ('layout')

@section ('articles.index')
    @foreach ($articles as $article)
        <h2><a href="articles/{{ $article->id }}">{{ $article->title }}</h2>
        {!! $article->excerpt !!}
    @endforeach
    
@endsection