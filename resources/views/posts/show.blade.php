@extends('layouts.posts')

@section('header', $post->title)


@section('content')
  <div>
    <div class="mb-4">
      <a href="{{ route('posts.index') }}">
        <<
          Back
          to
          Post</a
        >
    </div>
    <h1 class="mb-4 text-4xl font-bold">
      {{ $post->title }}
    </h1>
    <p class="mb-4">
      {{ $post->content }}
    </p>
    <div class="flex items-center justify-start gap-4 py-4">
      <a
        href="{{ route('posts.edit', ['post' => $post->id]) }}"
        class="rounded bg-blue-400 px-4 py-2 text-white hover:bg-blue-600"
      >Edit Post</a>
      <form
        action="{{ route('posts.destroy', ['post' => $post->id]) }}"
        method="POST"
      >
        @csrf
        @method('DELETE')
        <input
          type="submit"
          value="Delete Post"
          class="rounded bg-red-400 px-4 py-2 text-white hover:bg-red-600"
        >
      </form>

    </div>

  </div>

@endsection
