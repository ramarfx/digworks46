<x-dashboard-layout>
  <div class="overflow-x-auto">
    <table id="postTable"
      class="w-full max-w-full table-auto text-left text-sm dark:text-white md:text-base">
      <thead class="bg-primary text-xs text-white dark:bg-gray-700 dark:text-gray-400 sm:text-base">
        <tr>
          <th scope="col" class="px-4 py-3">
            Judul
          </th>
          <th scope="col" class="px-2 py-3">
            Author
          </th>
          <th scope="col" class="px-2 py-3">
            Category
          </th>
          <th scope="col" class="px-2 py-3">
            Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
          <tr class="border text-xs dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800 sm:text-base">
            <td scope="row" class="title-col px-4 py-3">
             <a href="{{ route('post.show', $post) }}" class="hover:text-primary"> {{ $post->title }}</a>
            </td>
            <td class="px-2 py-2">
              {{ $post->user->name }}
            </td>
            <td class="px-2 py-2">
              {{ $post->category }}
            </td>
            <td class="py-2">
              <a href="{{ route('post.edit', $post) }}"
                class="font-medium text-primary hover:underline dark:text-blue-500">Edit</a>

              <form action="{{ route('post.destroy', $post) }}" method="post">
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
    {{ $posts->links() }}
  </div>
</x-dashboard-layout>
