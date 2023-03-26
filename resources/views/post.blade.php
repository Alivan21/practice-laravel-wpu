@extends('layouts.main')

@section('content')
  <article>
    <h2>{{ $post->title }}</h2>
    {{-- <h5>{{ $post['author'] }}</h5> --}}
    {!! $post->body !!}
  </article>
  <a href="/posts">Back to Posts</a>
@endsection
