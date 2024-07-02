@extends('layouts.posts')

@section('header', $post['title'])


@section('content')
  <h1 class="text-2xl font-bold">
    {{ $post['title'] }}
  </h1>
@endsection
