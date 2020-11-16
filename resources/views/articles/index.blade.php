@extends ('layout')

@section ('articles.index')
    <div class="container">
        @forelse ($articles as $article)
            <div class="content">
                <div class="title">
                    <h2><a href="{{ $article->path() }}">{{ $article->title }}</h2>
                </div>
                {!! $article->excerpt !!}
            </div>
            @empty
                <p>No relevant articles yet.</p>                
        @endforelse
    </div>
    
@endsection