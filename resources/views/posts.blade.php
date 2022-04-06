@extends('layout')

@section('content')
    @foreach($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}" >
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <div>
                {!! $post->body !!}
            </div>
        </article>
    @endforeach
@endsection
