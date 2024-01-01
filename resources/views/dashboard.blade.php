<x-dashboard-layout>
  <div class="rounded-lg">
    <div class="mb-4 grid grid-cols-3 gap-4">
      <div class="flex gap-5 h-48 flex-col items-center justify-center rounded bg-primary dark:bg-gray-800">
        <p class="text-xl font-bold text-white">
            Jumlah Karya
        </p>
        <p class="text-5xl font-bold text-white">{{ $posts }}</p>
      </div>
      <div class="flex gap-5 h-48 flex-col items-center justify-center rounded bg-sky-500 dark:bg-gray-800">
        <p class="text-xl font-bold text-white">
            Total User
        </p>
        <p class="text-5xl font-bold text-white">{{ $users }}</p>
      </div>
      <div class="flex gap-5 h-48 flex-col items-center justify-center rounded bg-blue-500 dark:bg-gray-800">
        <p class="text-xl font-bold text-white">
            Jumlah Karya
        </p>
        <p class="text-5xl font-bold text-white">{{ $posts }}</p>
      </div>
    </div>
  </div>
</x-dashboard-layout>
