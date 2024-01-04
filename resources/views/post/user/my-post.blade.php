<x-app-layout>
  <div class="md:mx-4">
    <div class="container">
      <div class="flex w-full flex-wrap items-center justify-between gap-3 py-5">
        <h1 class="text-3xl font-bold">Karya ku</h1>

        <a href="{{ route('post.create') }}" class="rounded bg-primary px-5 py-3 text-white">tambah karya</a>
      </div>
      <form class="w-full max-w-lg">
        <div class="flex">
          <label for="search-dropdown" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
            Email</label>
          <button id="dropdown-button" data-dropdown-toggle="dropdown"
            class="z-10 inline-flex flex-shrink-0 items-center rounded-s-lg border border-gray-300 bg-gray-100 px-4 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-700"
            type="button">All <svg class="ms-2.5 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
            </svg></button>
          <div id="dropdown"
            class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
              <li>
                <button type="button"
                  class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
              </li>
              <li>
                <button type="button"
                  class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
              </li>
              <li>
                <button type="button"
                  class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
              </li>
              <li>
                <button type="button"
                  class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
              </li>
            </ul>
          </div>
          <div class="relative w-full">
            <input type="search" id="search-dropdown"
              class="z-20 block w-full rounded-e-lg border border-s-2 border-gray-300 border-s-gray-50 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:border-s-gray-700 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500"
              placeholder="Search..." required>
            <button type="submit"
              class="absolute end-0 top-0 h-full rounded-e-lg border border-blue-700 bg-blue-700 p-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
              </svg>
              <span class="sr-only">Search</span>
            </button>
          </div>
        </div>
      </form>

      <div class="grid grid-cols-2 gap-2 py-5 md:grid-cols-3 md:gap-5 lg:grid-cols-5">
        @forelse ($posts as $post)
          <div class="flex flex-col">
            <div class="relative w-full bg-primary">
              <img src="{{ \Illuminate\Support\Facades\Storage::url($post->image) }}"
                class="h-[150px] w-full max-w-full object-cover object-center" alt="">
              <div class="absolute left-4 top-3">
                <span class="top-3 rounded-md bg-primary px-2 py-1 text-xs text-white">{{ $post->category }}</span>
              </div>

            </div>
            <div class="rounded border bg-white px-4 pt-4 dark:border-gray-800 dark:bg-gray-800">
              <a href="{{ route('post.show', $post) }}" class="block truncate text-base font-semibold">
                {{ $post->title }}
              </a>
              <p class="text-xs font-semibold leading-8 text-primary">
                {{ $post->created_at->diffForHumans() }}
              </p>
              <div class="flex items-center justify-between border-t dark:border-t-gray-700 py-3">
                <div class="flex items-center gap-2">
                  <div
                    class="relative inline-flex h-6 w-6 items-center justify-center overflow-hidden rounded-full bg-primary dark:bg-gray-600">
                    <span
                      class="font-xs text-white dark:text-gray-300">{{ strtoupper(substr($post->user->name, 0, 1)) }}</span>
                  </div>
                  <p class="text-secondary text-sm capitalize">{{ $post->user->name }}</p>
                </div>
                <div class="flex gap-5">
                  <a href="{{ route('post.edit', $post) }}">
                    <i class="fa-regular fa-pen-to-square cursor-pointer text-sm hover:text-primary"></i>
                  </a>
                  <form action="{{ route('post.destroy', $post) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="button" class="delete">
                      <i class="fa-solid fa-trash cursor-pointer text-sm hover:text-red-500"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-span-2 bg-gray-300 bg-opacity-50 py-10 md:col-span-3 lg:col-span-5">
            <p class="text-center text-base font-bold text-gray-500 md:text-lg lg:text-xl">Kamu belum memposting karya
              apapun</p>
          </div>
        @endforelse
      </div>
    </div>
  </div>
</x-app-layout>
