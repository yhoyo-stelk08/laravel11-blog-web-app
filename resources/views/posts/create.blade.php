@extends('layouts.posts')

@section('header', 'Creating Blog Post')

@section('content')
  <div
    class="mx-auto flex w-auto max-w-2xl flex-col justify-start gap-4 rounded-lg border border-solid border-amber-300 p-4 shadow-lg"
  >
    <h1 class="text-center text-2xl font-bold">Create A Post</h1>
    <form
      action="{{ route('posts.store') }}"
      method="POST"
    >
      @csrf
      <div class="m-4 flex items-center justify-start gap-8">
        <label for="title">Post Title</label>
        <input
          type="text"
          id="title"
          name="title"
          class="w-3/4 rounded-md border-2 p-2"
        >
      </div>
      @error('title')
        <div class="items-centerp-2 ml-32 w-2/4 text-xs text-red-400">
          <label>{{ $message }}</label>
        </div>
      @enderror
      <div class="m-4 flex items-start justify-start gap-8">
        <label for="content">Content</label>
        <textarea
          rows="6"
          name="content"
          id="content"
          class="ml-2 w-3/4 rounded-md border-2 p-2"
        ></textarea>
      </div>
      @error('content')
        <div class="items-centerp-2 ml-32 w-2/4 text-xs text-red-400">
          <label>{{ $message }}</label>
        </div>
      @enderror
      <div class="flex items-center justify-end">
        <button
          type="submit"
          class="my-2 mr-16 rounded-md border-blue-200 bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
        >Submit</button>
      </div>
    </form>
  </div>
@endsection
