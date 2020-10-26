@extends('layout')

@section('content')
    @forelse ($posts as $post)
    <p>
        <h3>
            <a href="{{ route('posts.show', ['post'=>$post->id ]) }}">{{ $post->content }}</a>
        </h3>
    </p>
    @empty
    <p>No blog post yet!!!</p>
    @endforelse
@endsection('content')