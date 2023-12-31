<x-app-layout>
  <section id="jumbotron">
    <div class="container mx-auto px-4">
      <div class="flex h-screen md:h-[80vh] w-full items-center justify-center">
        <div class="flex flex-wrap-reverse items-center lg:px-10">
          <div class="flex w-full flex-col items-center justify-center text-center">
            <h2 class="mb-6 text-center text-3xl font-bold md:text-start lg:text-5xl">Selamat Datang di Digworks46
              <span class="font-bold text-primary">SMKN 46 Jakarta</span>
            </h2>
            <p class="text-secondary w-full text-sm leading-relaxed md:text-xl lg:w-1/2">
              Digworks46 merupakan platform yang dimana seluruh siswa dapat mempublikasikan karya buatan mereka mulai
              dari
              desain poster, figma, lukisan, videografi, website, hingga aplikasi mobile.
            </p>
            <a href="{{ route('post.index') }}"
              class="group mt-4 inline-block bg-primary px-5 py-2 text-base text-white">Lihat<i
                class="fa-solid fa-arrow-right-long ml-10"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="newPost">
    <div class="container">
      <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center"><span class="text-primary">Karya</span> Terbaru</h1>

      <div class="grid grid-cols-2 gap-2 py-5 md:grid-cols-3 md:gap-5 lg:grid-cols-5">
        @foreach ($posts as $post)
          <x-card :data="$post"/>
        @endforeach
      </div>

    </div>
  </section>

  <section id="keterangan" class="bg-primary py-5">
    <div class="w-full">
      <h1 class="text-center text-2xl font-bold text-white">Upload karya mu sekarang</h1>
    </div>
  </section>


</x-app-layout>
