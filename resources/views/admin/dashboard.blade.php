<x-dashboard-layout>
    <div class="mb-4 grid grid-cols-3 gap-4">
      <div class="flex h-48 flex-col items-center justify-center gap-5 rounded bg-primary dark:bg-gray-800">
        <p class="text-xl font-bold text-white">
          Jumlah Karya
        </p>
        <p class="text-5xl font-bold text-white">{{ $posts }}</p>
      </div>
      <div class="flex h-48 flex-col items-center justify-center gap-5 rounded bg-sky-500 dark:bg-gray-800">
        <p class="text-xl font-bold text-white">
          Total User
        </p>
        <p class="text-5xl font-bold text-white">{{ $users }}</p>
      </div>
      <div class="flex h-48 flex-col items-center justify-center gap-5 rounded bg-blue-500 dark:bg-gray-800">
        <p class="text-xl font-bold text-white">
          Jumlah Karya
        </p>
        <p class="text-5xl font-bold text-white">{{ $posts }}</p>
      </div>
    </div>
</x-dashboard-layout>
