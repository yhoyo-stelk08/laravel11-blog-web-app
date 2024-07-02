@extends('layouts.posts')

@section('header', $post->title)


@section('content')
  <h1 class="mb-4 text-4xl font-bold">
    {{ $post->title }}
  </h1>
  <p>
    {{ $post->content }}
  </p>
@endsection
