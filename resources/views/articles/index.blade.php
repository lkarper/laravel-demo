@extends ('layout')

@section ('articles.index')
    <div class="container">
        @foreach ($articles as $article)
            <div class="content">
                <div class="title">
                    <h2><a href="{{ $article->path() }}">{{ $article->title }}</h2>
                </div>
                {!! $article->excerpt !!}
            </div>
        @endforeach
    </div>
    
@endsection