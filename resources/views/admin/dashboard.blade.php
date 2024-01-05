<x-dashboard-layout>
  <div class="mb-4 grid grid-cols-2 gap-2 md:gap-4">
    <div class="flex h-36 flex-col items-center justify-center gap-5 rounded bg-primary dark:bg-gray-800 md:h-48">
      <p class="text-center text-base font-bold text-white md:text-xl">
        Jumlah Karya
      </p>
      <p class="text-3xl font-bold text-white md:text-5xl">{{ $postsCount }}</p>
    </div>
    <div class="flex h-36 flex-col items-center justify-center gap-5 rounded bg-sky-500 dark:bg-gray-800 md:h-48">
      <p class="text-center text-base font-bold text-white md:text-xl">
        Total User
      </p>
      <p class="text-3xl font-bold text-white md:text-5xl">{{ $usersCount }}</p>
    </div>
    <div class="col-span-2 rounded bg-white p-5 dark:bg-gray-800">
      <h1 class="mb-5 text-base font-bold dark:text-white md:text-lg lg:text-xl">Aktivitas terbaru</h1>

      <div class="w-full dark:text-white">
        @php
          $id = 1;
        @endphp

        @forelse ($posts as $post)
          <ul class="flex w-full lg:w-2/3 overflow-x-auto justify-between gap-5 border-b dark:border-b-slate-700 pt-3">
            <li class="text-base font-bold hover:text-primary md:text-lg lg:text-xl"><a
                href="{{ route('post.show', $post) }}">{{ $post->title }}</a></li>
            <li class="hidden sm:block">{{ $post->category }}</li>
            <li>{{ $post->created_at->diffForHumans() }}</li>
            <li class="text-xs text-primary hidden sm:block">{{ $post->user->name }}</li>
          </ul>
        @empty
          <h1>Tidak ada aktivitas terbaru!</h1>
        @endforelse
      </div>
    </div>
  </div>


</x-dashboard-layout>
