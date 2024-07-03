@extends('layouts.posts')

@section('header', 'Post Home')


@section('content')
  @forelse ($posts as $post)
    <div class="mx-auto my-4">
      <h1 class="py-4 text-2xl font-bold">
        <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
      </h1>
      <p class="text-base">
        {{ $post->content }}
      </p>
    </div>
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

  @empty
    <h1 class="text-2xl font-bold">
      No Post Available
    </h1>
  @endforelse
@endsection
