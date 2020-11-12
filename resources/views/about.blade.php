@extends ('layout')

@section ('about')
    <h2>About us!</h2>
    @foreach ($articles as $article)
        <li>
            <h3><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h3>
            <p>{{ $article->excerpt }}</p>
        </li>
    @endforeach
@endsection