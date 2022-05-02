@props(['headerTitle' => null, 'headerRight' => null])

@php
$items = [
    'admin.dashboard' => __('Dashboard'),
    'admin.artists.index' => __('Artistas'),
];
@endphp

<x-layout.app {{ $attributes }}>
  <div class="min-h-full">
    <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                alt="Workflow">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                @foreach ($items as $route => $title)
                  <a href="{{ route($route) }}" @class([
                      'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white',
                      'bg-gray-900 text-white' =>
                          $route ===
                          request()->route()->getName(),
                  ])>
                    {{ $title }}
                  </a>
                @endforeach


              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <!-- Profile dropdown -->
              <div @click.away="open = false" class="relative ml-3" x-data="{ open: false }">
                <div>
                  <button @click="open = !open" type="button"
                    class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-10 w-10 rounded-full"
                      src="https://ui-avatars.com/api/?name={{ auth()->user()->getAvatar() }}&color=FFFFFF&background=111827"
                      alt="User Avatar">
                  </button>
                </div>

                <!--
                  Dropdown menu, show/hide based on menu state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100"
                  x-transition:enter-start="transform opacity-0 scale-95"
                  x-transition:enter-end="transform opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-75"
                  x-transition:leave-start="transform opacity-100 scale-100"
                  x-transition:leave-end="transform opacity-0 scale-95"
                  class="absolute right-0 mt-2 flex w-48 origin-top-right flex-col rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dark:bg-gray-700"
                  role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                    id="user-menu-item-0">Your Profile</a> --}}

                  <button
                    class="flex px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-indigo-600 dark:hover:text-white"
                    role="menuitem" tabindex="-1" id="theme-toggle">
                    <x-heroicon-s-moon id="theme-toggle-dark-icon" class="hidden h-5 w-5" />
                    <x-heroicon-s-sun id="theme-toggle-light-icon" class="hidden h-5 w-5" />
                    <span class="ml-2">
                      Tema
                    </span>
                  </button>
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                      class="flex w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-indigo-600 dark:hover:text-white"
                      role="menuitem" tabindex="-1" id="user-menu-item-2">
                      <x-heroicon-s-logout class="h-5 w-5" />
                      <span class="ml-2">
                        Sair
                      </span>
                    </button>
                  </form>

                </div>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" @click="open = !open"
              class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
              aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <x-heroicon-o-menu x-show="!open" class="h-6 w-6" />
              <x-heroicon-s-x x-cloak x-show="open" class="h-6 w-6" />
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div x-cloak :class="{ 'block': open, 'hidden md:hidden': !open }" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->

          @foreach ($items as $route => $title)
            <a href="{{ route($route) }}" @class([
                'block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white',
                'bg-gray-900 text-white' =>
                    $route ===
                    request()->route()->getName(),
            ])>{{ $title }}</a>
          @endforeach


        </div>
        <div class="border-t border-gray-700 pt-4 pb-3">
          <div class="flex items-center px-5">
            <div class="flex-shrink-0">
              <img class="h-10 w-10 rounded-full"
                src="https://ui-avatars.com/api/?name={{ auth()->user()->getAvatar() }}" alt="User avatar">
            </div>
            <div class="ml-3">
              <div class="text-base font-medium leading-none text-white">{{ auth()->user()->name }}</div>
              <div class="text-sm font-medium leading-none text-gray-400">{{ auth()->user()->email }}</div>
            </div>
          </div>
          <div class="mt-3 space-y-1 px-2">
            <button id="theme-toggle-mobile"
              class="flex w-full items-center rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">
              <x-heroicon-s-moon id="theme-toggle-dark-icon-mobile" class="hidden h-5 w-5" />
              <x-heroicon-s-sun id="theme-toggle-light-icon-mobile" class="hidden h-5 w-5" />
              <span class="ml-2">Tema</span>
            </button>

            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit"
                class="flex w-full rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"
                role="menuitem" tabindex="-1" id="user-menu-item-2">Sair</button>
            </form>
          </div>
        </div>
      </div>
    </nav>

    <header class="bg-white text-gray-900 shadow dark:bg-gray-900 dark:text-gray-100">
      <div class="mx-auto max-w-7xl justify-between py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold sm:text-3xl">{{ $headerTitle ?? $attributes->get('pageTitle') }}</h1>
        @if ($headerRight)
          {{ $headerRight }}
        @else
          <div></div>
        @endif
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>
  </div>
  <script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
        '(prefers-color-scheme: dark)').matches)) {
      themeToggleLightIcon.classList.remove('hidden');
    } else {
      themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

      //   toggle icons inside button
      themeToggleDarkIcon.classList.toggle('hidden');
      themeToggleLightIcon.classList.toggle('hidden');

      // if set via local storage previously
      if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
          document.documentElement.classList.add('dark');
          localStorage.setItem('color-theme', 'dark');
        } else {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
      } else {
        if (document.documentElement.classList.contains('dark')) {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('color-theme', 'light');
        } else {
          document.documentElement.classList.add('dark');
          localStorage.setItem('color-theme', 'dark');
        }
      }

    });
  </script>
  <script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon-mobile');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon-mobile');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
        '(prefers-color-scheme: dark)').matches)) {
      themeToggleLightIcon.classList.remove('hidden');
    } else {
      themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle-mobile');

    themeToggleBtn.addEventListener('click', function() {

      //   toggle icons inside button
      themeToggleDarkIcon.classList.toggle('hidden');
      themeToggleLightIcon.classList.toggle('hidden');

      // if set via local storage previously
      if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
          document.documentElement.classList.add('dark');
          localStorage.setItem('color-theme', 'dark');
        } else {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('color-theme', 'light');
        }

        // if NOT set via local storage previously
      } else {
        if (document.documentElement.classList.contains('dark')) {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('color-theme', 'light');
        } else {
          document.documentElement.classList.add('dark');
          localStorage.setItem('color-theme', 'dark');
        }
      }

    });
  </script>
</x-layout.app>
