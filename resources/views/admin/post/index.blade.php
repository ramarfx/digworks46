<x-dashboard-layout>
  <table id="postTable"
    class="row-border hover mx-4 max-w-full table-auto rounded-lg bg-white text-left text-sm md:text-base">
    <thead class="bg-primary text-xs uppercase text-white dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">
          Judul
        </th>
        <th scope="col" class="px-6 py-3">
          Author
        </th>
        <th scope="col" class="px-6 py-3">
          Category
        </th>
        <th scope="col" class="px-6 py-3">
          Action
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
        <tr class="border dark:border-gray-700 odd:dark:bg-gray-900 even:dark:bg-gray-800">
          <td scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
            {{ $post->title }}
          </td>
          <td class="px-6 py-4">
            {{ $post->user->name }}
          </td>
          <td class="px-6 py-4">
            {{ $post->category }}
          </td>
          <td class="px-6 py-4">
            <a href="{{ route('post.edit', $post) }}"
              class="font-medium text-primary hover:underline dark:text-blue-500">Edit</a>

            <form action="{{ route('post.destroy', $post) }}" method="post">
              @csrf
              @method('delete')

              <button type="submit"
                class=" font-medium text-red-500 hover:underline dark:text-blue-500">Hapus</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

</x-dashboard-layout>
