<x-app-layout>
  <div class="mx-auto max-w-screen-xl py-5">
    <div class="container">
      <form action="{{ route('post.store') }}" method="post" class="w-full" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-wrap items-start">
          <div class="lg:w-1/2">
            <div class="py-5">
              <h1 class="text-3xl font-bold">Tambahkan karya milikmu</h1>
            </div>
            <div class="mb-6">
              <label for="title" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Judul</label>
              <input type="text" id="title" name="title"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 lg:w-72"
                placeholder="Title" required>
              @error('title')
                <p class="mt-0.5 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-6">
              <label for="category" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                Kategori
              </label>
              <select id="category" name="category"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 lg:w-72">
                <option value="desain">Desain</option>
                <option value="website">Website</option>
                <option value="aplikasi">Aplikasi</option>
              </select>
              @error('category')
                <p class="mt-0.5 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-6">
              <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                for="default_size">Gambar</label>
              <input
                class="mb-5 block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400 lg:w-80"
                id="inputFile" name="image" accept="image/*" type="file">
              @error('image')
                <p class="mt-0.5 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-4">
              <label for="linkCheckbox" class="ms-2 block text-sm font-medium text-gray-900 dark:text-gray-300">
                <input id="linkCheckbox" type="checkbox"
                  class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
                Apakah anda ingin mencantumkan link?
              </label>
            </div>
            <div class="mb-4">
              <input type="url" id="link" name="link"
                class="hidden w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 lg:w-72"
                placeholder="Link">
              @error('link')
                <p class="mt-0.5 text-sm text-red-500">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="lg:w-1/2">
            <img id="preview"
              class="mb-5 hidden h-[350px] w-auto max-w-full rounded-lg border-4 border-gray-300 bg-gray-200 object-contain"
              src="{{ asset('image/mading.png') }}">
          </div>
        </div>

        <div class="mb-6">
          <div class="mb-4 w-full rounded-lg border border-gray-200 bg-gray-50 dark:border-gray-600 dark:bg-gray-700">
            <div class="flex items-center justify-between border-b px-3 py-2 dark:border-gray-600">
              <div
                class="flex flex-wrap items-center divide-gray-200 dark:divide-gray-600 sm:divide-x sm:rtl:divide-x-reverse">
                <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">
                  <p>Deskripsi <span class="text-xs text-gray-500">opsional</span></p>
                </div>
              </div>
            </div>
            <div class="rounded-b-lg bg-white px-4 py-2 dark:bg-gray-800">
              <label for="editor" class="sr-only">Publish post</label>
              <textarea id="editor" rows="8" name="description"
                class="block w-full border-0 bg-white px-0 text-sm text-gray-800 focus:ring-0 dark:bg-gray-800 dark:text-white dark:placeholder-gray-400"
                placeholder="Tuliskan sebuah keterangan pada karya mu..."></textarea>
            </div>
          </div>
          @error('description')
            <p class="mt-0.5 text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <button type="submit"
          class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900">
          Publish karya
        </button>
      </form>
    </div>
  </div>
</x-app-layout>
