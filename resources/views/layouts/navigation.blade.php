<nav class="border-gray-200 bg-white dark:bg-gray-900">
  <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
    <div class="flex">
      <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
        <span class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">Digworks46</span>
      </a>

      {{-- navlink --}}
      <div class="ml-10 hidden w-full items-center justify-between md:order-1 md:flex md:w-auto">
        <ul
          class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium rtl:space-x-reverse dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
          <li>
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
              {{ __('Home') }}
            </x-nav-link>
          </li>
          <li>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
              {{ __('Dashboard') }}
            </x-nav-link>
          </li>
          <li>
            <x-nav-link :href="route('posts')" :active="request()->routeIs('posts')">
              {{ __('Posts') }}
            </x-nav-link>
          </li>
        </ul>
      </div>
    </div>


    {{-- profile --}}
    <div class="flex items-center space-x-3 rtl:space-x-reverse md:order-2 md:space-x-0">
      @auth
        <button type="button"
          class="flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 md:me-0"
          id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
          data-dropdown-placement="bottom">
          <span class="sr-only">Open user menu</span>
          <img class="h-8 w-8 rounded-full" src="{{ asset('image/profile.webp') }}" alt="user photo">
        </button>
        <!-- Dropdown menu -->
        <div
          class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
          id="user-dropdown">
          <div class="px-4 py-3">
            <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
            <span class="block truncate text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</span>
          </div>
          <ul class="py-2" aria-labelledby="user-menu-button">
            <li>
              <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
              </x-dropdown-link>
            </li>
            <li>
              <x-dropdown-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                {{ __('Settings') }}
              </x-dropdown-link>
            </li>
            <li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                  {{ __('Log Out') }}
                </x-dropdown-link>
              </form>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="navbar-user" type="button"
          class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
          aria-controls="navbar-user" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 1h15M1 7h15M1 13h15" />
          </svg>
        </button>
      @else
        <ul class="flex gap-2 md:gap-5">
          <li class="group">
            <a href="{{ route('login') }}" class="flex rounded-md bg-primary px-3 md:px-6 py-2 text-sm md:text-base text-white">Login</a>
          </li>
          <li class="group hidden md:block">
            <a href="{{ route('register') }}">
              <button
                class="rounded-md border border-primary bg-transparent px-6 py-2 text-sm md:text-base text-primary">Register</a>
          </li>
        </ul>
      @endauth
    </div>


    {{-- navlink --}}
    <div class="hidden w-full items-center justify-between md:order-1 md:w-auto" id="navbar-user">
      <ul
        class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium rtl:space-x-reverse dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
        <li>
          <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
          </x-nav-link>
        </li>
        <li>
          <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
          </x-nav-link>
        </li>
      </ul>
    </div>
  </div>
</nav>
