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
        <table class="w-full overflow-x-auto">
          @forelse ($posts as $post)
            <tr class="w-full border-b pt-3 dark:border-b-slate-700">
              <td class="w-1/2 px-2 text-xs font-medium hover:text-primary md:w-full md:text-lg"><a
                  href="{{ route('post.show', $post) }}">{{ $post->title }}</a></td>
              <td class="hidden self-center px-2 sm:block">{{ $post->category }}</td>
              <td class="text-nowrap self-center px-2 text-xs text-right md:text-left">{{ $post->created_at->diffForHumans() }}</td>
              <td class="hidden self-center px-2 text-xs text-primary sm:block">{{ $post->user->name }}</td>
            </tr>
          @empty
            <h1>Tidak ada aktivitas terbaru!</h1>
          @endforelse
        </table>
      </div>
    </div>

    <div class="col-span-2 rounded bg-white p-5 dark:bg-gray-800">
      <h1 class="mb-5 text-base font-bold dark:text-white md:text-lg lg:text-xl">User dengan karya terbanyak</h1>
      <div class="w-full dark:text-white">
        <table class="w-full overflow-x-auto">
          @forelse ($users as $user)
            <tr class="w-full justify-between border-b pt-3 dark:border-b-slate-700">
              <td class="px-2 w-1/2 text-xs font-medium hover:text-primary md:w-full md:text-lg">{{ $user->name }}</td>
              <td class="px-2 self-center text-right">{{ $user->posts_count }}</td>
            </tr>
          @empty
            <h1>Tidak ada aktivitas terbaru!</h1>
          @endforelse
        </table>
      </div>
    </div>
  </div>


</x-dashboard-layout>
