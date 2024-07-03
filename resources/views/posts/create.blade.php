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
      @include('posts.partials.form')
      <div class="flex items-center justify-end">
        <button
          type="submit"
          class="my-2 mr-16 rounded-md border-blue-200 bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
        >Submit</button>
      </div>
    </form>
  </div>
@endsection
