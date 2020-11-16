@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="header has-text-weight-bold is-size-4">New Article</h1>
            <form action="/articles" method="POST">
                {{-- Cross-site request forgery --}}
                @csrf 

                <div class="field">
                    <label for="title" class="label">Title</label>
                    <div class="control">
                        <input 
                            type="text" 
                            class="input 
                            @error('title') is-danger @enderror" 
                            name="title" 
                            id="title" 
                            value="{{ old('title') }}"
                            required
                        >
                        @error('title')
                            <p class="help is-danger">{{ $errors->first('title') }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="excerpt" class="label">Excerpt</label>
                    <div class="control">
                        <textarea 
                            class="textarea 
                            @error('excerpt') is-danger @enderror" 
                            name="excerpt" 
                            id="excerpt" 
                            required
                        >
                            {{ old('excerpt') }}
                        </textarea>
                        @error('excerpt')
                            <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field">
                    <label for="body" class="label">Body</label>
                    <div class="control">
                        <textarea 
                            class="textarea 
                            @error('body') is-danger @enderror" 
                            name="body" 
                            id="body" 
                            required
                        >
                            {{ old('body') }}
                        </textarea>
                        @error('body')
                            <p class="help is-danger">{{ $errors->first('body') }}</p>
                        @enderror
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