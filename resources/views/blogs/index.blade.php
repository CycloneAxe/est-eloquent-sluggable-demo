@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Posts</h1>
    <hr>
    <ul class="list-unstyled">
    @foreach ($posts as $post)
        <li>
            <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
            <em>({{ $post->published_at }})</em>
            <p>
                {{ str_limit($post->content) }}
            </p>
        </li>
    @endforeach
    </ul>
    <hr>
    {!! $posts->render() !!}
</div>
@endsection
