@extends ('layout')

@section ('articles.show')
    <div class="container">
        <div class="title">
            <h2>{{ $article->title }}</h2>
        </div>
        <p>{!! $article->body !!}</p>
        <p>
            @foreach ($article->tags as $tag)
                <a href="{{ route('articles.index', ['tag'=>$tag->name]) }}">{{ $tag->name }}</a>
            @endforeach
        </p>
    </div>
@endsection