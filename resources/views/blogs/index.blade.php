@extends('layouts.app')

@section('content')
<div class="container">

    <div class="content">
        <h1>Post With Slug</h1>
        <hr>
        <table class="table table-striped">
            <tr>
                <td>Url</td>
                <td>Title</td>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>
                    <a href="/blog/{{ $post->slug }}">{{ route('detail', $post->slug) }}</a></td>
                <td>{{ $post->title }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
