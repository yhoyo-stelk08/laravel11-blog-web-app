<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    >
    <meta
      http-equiv="X-UA-Compatible"
      content="ie=edge"
    >
    @vite('resources/css/app.css')
    <title>Laravel Blog - @yield('header')</title>
  </head>

  <body class="container p-8">
    <nav class="bg-white shadow-lg">
      <div class="max-w-6xl px-4">
        <div class="flex justify-between">
          <div class="flex space-x-7">
            <div>
              <!-- Website Logo -->
              <a
                href="{{ route('posts.index') }}"
                class="flex items-center px-2 py-4"
              >
                <img
                  src="https://via.placeholder.com/40"
                  alt="Logo"
                  class="mr-2 h-8 w-8"
                >
                <span class="text-lg font-semibold text-gray-500">Laravel Blog</span>
              </a>
            </div>
            <!-- Primary Navbar items -->
            <div class="hidden items-center space-x-1 md:flex">
              <a
                href="{{ route('posts.index') }}"
                class="{{ request()->routeIs('posts.index') ? 'border-b-4 border-blue-500 text-blue-500' : '' }} px-2 py-4 font-semibold text-gray-500 transition duration-300 hover:text-blue-500"
              >
                Home</a>
              <a
                href="{{ route('posts.create') }}"
                class="{{ request()->routeIs('posts.create') ? 'border-b-4 border-blue-500 text-blue-500' : '' }} px-2 py-4 font-semibold text-gray-500 transition duration-300 hover:text-blue-500"
              >
                Create Post</a>
            </div>
          </div>
          {{-- <!-- Secondary Navbar items -->
          <div class="hidden items-center space-x-3 md:flex">
            <a
              href="/login"
              class="rounded px-2 py-2 font-medium text-gray-500 transition duration-300 hover:bg-gray-200"
            >Log In</a>
            <a
              href="/register"
              class="rounded bg-blue-500 px-2 py-2 font-medium text-white transition duration-300 hover:bg-blue-400"
            >Sign Up</a>
          </div> --}}
          <!-- Mobile menu button -->
          <div class="flex items-center md:hidden">
            <button class="mobile-menu-button outline-none">
              <svg
                class="h-6 w-6 text-gray-500 hover:text-blue-500"
                x-show="!showMenu"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path d="M4 6h16M4 12h16m-7 6h7"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <!-- mobile menu -->
      <div class="mobile-menu hidden">
        <ul class="">
          <li><a
              href="{{ route('posts.index') }}"
              class="block bg-blue-500 px-2 py-4 text-sm font-semibold text-white"
            >Home</a></li>
          <li><a
              href="{{ route('posts.create') }}"
              class="block px-2 py-4 text-sm transition duration-300 hover:bg-blue-500"
            >Create Post</a></li>
          {{-- <li><a
              href="/services"
              class="block px-2 py-4 text-sm transition duration-300 hover:bg-blue-500"
            >Services</a></li>
          <li><a
              href="/contact"
              class="block px-2 py-4 text-sm transition duration-300 hover:bg-blue-500"
            >Contact</a></li> --}}
        </ul>
      </div>
    </nav>
    @if (session('status'))
      <div class="bg-red-400 text-white">
        {{ session('status') }}
      </div>
    @endif
    @yield('content')
    <script>
      const btn = document.querySelector("button.mobile-menu-button");
      const menu = document.querySelector(".mobile-menu");

      btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
      });
    </script>
  </body>

</html>
