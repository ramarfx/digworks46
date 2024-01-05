<x-app-layout>
  <div class="md:mx-4">
    <div class="container">
      <div class="flex w-full flex-wrap items-center justify-between gap-3 py-5">
        <h1 class="text-3xl font-bold">Kumpulan karya</h1>

        <a href="{{ route('post.create') }}" class="rounded bg-primary px-5 py-3 text-white">tambah karya</a>
      </div>

      <x-searchbar />

      <div class="grid grid-cols-2 gap-2 py-5 md:grid-cols-3 md:gap-5 lg:grid-cols-5">
        @forelse ($posts as $post)
          <x-card :data="$post" />
        @empty
          <div class="col-span-2 bg-gray-300 bg-opacity-50 py-10 md:col-span-3 lg:col-span-5">
            <p class="text-center text-base font-bold text-gray-500 md:text-lg lg:text-xl">No posts</p>
          </div>
        @endforelse
      </div>
    </div>
  </div>
</x-app-layout>
