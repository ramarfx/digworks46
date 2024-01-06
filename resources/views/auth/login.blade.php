<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <section class="bg-gray-50 dark:bg-gray-900">
    <div class="mx-auto flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
    <a href="{{ route('home') }}" class="mb-6 flex items-center text-2xl font-semibold text-gray-900 dark:text-white">
        <img class="mr-2 h-8 w-8" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
        Digworks46
      </a>
      <div
        class="w-full rounded-lg bg-white shadow dark:border dark:border-gray-700 dark:bg-gray-800 sm:max-w-md md:mt-0 xl:p-0">
        <div class="space-y-4 p-6 sm:p-8 md:space-y-6">
          <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-2xl">
            Login
          </h1>
          <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
            @csrf
            <div>
              <x-input-label for="email" :value="__('Email')" />
              <x-text-input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div>
              <x-input-label for="password" :value="__('Password')" />

              <x-text-input id="password" class="mt-1 block w-full" type="password" name="password" required
                autocomplete="current-password" />

              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-start">
              <div class="text-sm">
                <label for="remember_me" class="inline-flex items-center">
                  <input id="remember_me" type="checkbox"
                    class="focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 h-4 w-4 rounded border border-gray-300 bg-gray-50 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800"
                    name="remember">
                  <span class="text-gray ms-2 text-sm dark:text-white">{{ __('Remember me') }}</span>
                </label>
              </div>
            </div>
            <button type="submit"
              class="hover:bg-primary-700 focus:ring-primary-300 dark:hover:bg-primary-700 dark:focus:ring-primary-800 w-full rounded-lg bg-primary px-5 py-2.5 text-center text-sm font-medium text-white focus:outline-none focus:ring-4 dark:bg-primary">
              Login
            </button>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Belum memiliki akun?
              <a href="{{ route('register') }}"
                class="dark:text-primary-500 font-medium text-primary hover:underline">Register
                sekarang</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>
