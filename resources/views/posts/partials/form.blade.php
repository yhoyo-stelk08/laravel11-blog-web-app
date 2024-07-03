<div class="m-4 flex items-center justify-start gap-8">
  <label for="title">Post Title</label>
  <input
    type="text"
    id="title"
    name="title"
    value="{{ old('title') }}"
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
  >
  {{ old('content') }}
  </textarea>
</div>
@error('content')
  <div class="items-centerp-2 ml-32 w-2/4 text-xs text-red-400">
    <label>{{ $message }}</label>
  </div>
@enderror
