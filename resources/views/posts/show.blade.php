@extends('layouts.posts')

@section('header', $post->title)


@section('content')
  <div class="mt-4">
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
    <div class="flex flex-row items-center justify-start gap-4">
      <label>{{ $post->created_at->diffForHumans() }}</label>
    </div>
    <div class="my-4 flex flex-col items-start justify-start">
      <h1>Comments</h1>
      @forelse ($post->comments as $comment)
        <div class="my-2 w-full bg-slate-100">
          <p class="mx-2 my-2 p-2">
            {{ $comment->content }}
          </p>
          <p class="mx-2 my-2 p-2 text-xs">

            commented at {{ $comment->created_at->diffForHumans() }}
          </p>
        </div>

      @empty
        <div class="my-2 w-full bg-slate-100">

          <h1 class="p-2 text-xs">No Comments Yet..!!</h1>
        </div>
      @endforelse
    </div>


  </div>

@endsection
