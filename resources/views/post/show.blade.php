<x-app-layout>
  <div class="container">
    <div class="mt-10">
      <div
        class="mx-auto flex h-full min-h-screen w-full max-w-7xl flex-col gap-5 rounded-lg bg-white p-6 dark:bg-gray-800 lg:flex-row">
        <div class="mb-4 w-full lg:basis-80">
          {{-- media --}}
          <a href="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}" class="image-link">
            <img loading="lazy"
              src="{{ $post->media == 'placeholder' ? asset('assets/img/nomedia.png') : \Illuminate\Support\Facades\Storage::url($post->image) }}"
              class="h-auto w-full max-w-full rounded-lg"
              alt="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}">
          </a>

          {{-- bookmark --}}
          <div class="mt-2 flex w-full justify-center rounded-md bg-primary py-3">
            <form action="" method="post">
              @csrf
              <input type="hidden" name="post_id" value="{{ $post->id }}">
              <button type="submit" class="flex items-center justify-center gap-3 text-white">
                <i class="fa-regular fa-bookmark scale-150 text-white"></i>
                Bookmark
              </button>
            </form>
          </div>
        </div>

        <div class="w-full flex-1 px-2">
          <div class="mb-4">
            <div class="flex items-center justify-between">
              <h1 class="text-2xl font-bold capitalize tracking-wide lg:text-4xl">{{ $post->title }}</h1>
            </div>
            <p class="my-2 text-xs font-semibold">Diposting oleh <span
                class="text-primary">{{ $post->user->name }}</span>
              {{ $post->created_at->diffForHumans() }}</p>
            <p class="text-xs font-semibold">Kategori: <span class="text-primary">{{ $post->category }}</span></p>
          </div>
          <div class="mb-4">
            <h2 class="mb-5 text-xl font-bold md:text-2xl">Tautan</h2>
            @if (!$post->link)
              <p class="text-secondary text-sm lg:text-base">Tidak ada tautan</p>
            @endif
            <a href="{{ $post->link }}"
              class="text-sm text-primary hover:underline hover:underline-offset-2">{!! $post->link !!}</a>
          </div>
          <div class="mb-4">
            <h2 class="mb-5 text-xl font-bold md:text-2xl">Deskripsi</h2>
            @if (!$post->description)
              <p class="text-secondary text-sm md:text-base">Tidak ada deskripsi</p>
            @endif
            <p class="text-secondary text-xs md:text-base">{!! nl2br($post->description) !!}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
