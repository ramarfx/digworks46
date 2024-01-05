@props(['control' => false, 'data'])

<div class="flex flex-col">
  <div class="relative w-full bg-primary">
    <img src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}"
      class="h-[150px] w-full max-w-full object-cover object-center" alt="">
    <div class="absolute left-4 top-3">
      <span class="top-3 rounded-md bg-primary px-2 py-1 text-xs text-white">{{ $data->category }}</span>
    </div>

  </div>
  <div class="rounded border bg-white px-4 pt-4 dark:border-gray-800 dark:bg-gray-800">
    <a href="{{ route('post.show', $data) }}" class="block truncate text-base font-semibold">
      {{ $data->title }}
    </a>
    <p class="text-xs font-semibold leading-8 text-primary">
      {{ $data->created_at->diffForHumans() }}
    </p>
    <div class="flex items-center justify-between border-t py-3 dark:border-t-gray-700">
      <div class="flex items-center gap-2">
        <div
          class="relative inline-flex h-6 w-6 items-center justify-center overflow-hidden rounded-full bg-primary dark:bg-gray-600">
          <span class="font-xs text-white dark:text-gray-300">{{ strtoupper(substr($data->user->name, 0, 1)) }}</span>
        </div>
        <p class="text-secondary text-sm capitalize">{{ $data->user->name }}</p>
      </div>
      @if ($control)
        <div class="flex gap-5">
          <a href="{{ route('post.edit', $data) }}">
            <i class="fa-regular fa-pen-to-square cursor-pointer text-sm hover:text-primary"></i>
          </a>
          <form action="{{ route('post.destroy', $data) }}" method="post">
            @csrf
            @method('delete')
            <button type="button" class="delete">
              <i class="fa-solid fa-trash cursor-pointer text-sm hover:text-red-500"></i>
            </button>
          </form>
        </div>
      @endif
    </div>
  </div>
</div>
