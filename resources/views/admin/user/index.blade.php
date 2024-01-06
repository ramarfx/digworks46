<x-dashboard-layout>
  <div class="overflow-x-auto">
    <table id="postTable" class="w-full max-w-full table-auto text-left text-sm dark:text-white md:text-base">
      <thead class="bg-primary text-xs uppercase text-white dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-4 py-3">
            No
          </th>
          <th scope="col" class="px-2 py-3">
            Username
          </th>
          <th scope="col" class="px-2 py-3">
            Karya
          </th>
          <th scope="col" class="px-2 py-3">
            Action
          </th>

        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr class="border dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
            <td scope="row" class="title-col px-4 py-4 font-medium text-gray-900 dark:text-white">
              {{ $loop->index + 1 }}
            </td>
            <td class="px-2 py-2">
              {{ $user->name }}
            </td>
            <td class="px-2 py-2">
              {{ $user->posts_count }}
            </td>
            <td class="px-2 py-2">
              <form action="{{ route('profile.destroy', $user) }}" method="post">
                @csrf
                @method('delete')
                <button type="button"
                  class="delete text-red-500 placeholder:font-medium hover:underline">Hapus</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="mx-auto w-fit">
    {{ $users->links() }}
  </div>

</x-dashboard-layout>
