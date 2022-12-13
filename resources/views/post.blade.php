
@extends('layouts.main')

@section('container')
    <article class="mb-5">
        <h2> {{ $posts->title }}</h2>
        <h5>By : Hanjar {{ $posts->author }}</h5>
        {!! $posts->body !!}
    </article>
<a href="/blog">Back to Post</a>

@endsection