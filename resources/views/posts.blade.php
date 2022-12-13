@extends('layouts.main')

@section('container')
    @if ($posts->count())
        @foreach ($posts as $data)
            <article class="mb-5 border-bottom pb-4">
                <h2>
                    <a href="/posts/{{ $data->slug }}" class="text-decoration-none">{{ $data->title }}</a>
                </h2>
                <h5>By : {{ $data->author }}</h5>
                <p>{{ $data->excerpt }}</p>

                <a href="/posts/{{ $data->slug }}" class="text-decoration-none">Read More...</a>
            </article>
        @endforeach
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
@endsection
