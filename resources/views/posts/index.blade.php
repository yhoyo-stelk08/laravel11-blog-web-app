@extends('layouts.posts')

@section('header', 'Post Home')


@section('content')
  <div class="flex items-center justify-start">
    <a
      class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
      href="{{ route('posts.create') }}"
    >Create Post</a>
  </div>
  @forelse ($posts as $post)
    <div class="mx-auto my-4">
      <h1 class="py-4 text-2xl font-bold">
        <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
      </h1>
      <p class="text-base">
        {{ $post->content }}
      </p>
    </div>

  @empty
    <h1 class="text-2xl font-bold">
      No Post Available
    </h1>
  @endforelse
@endsection
