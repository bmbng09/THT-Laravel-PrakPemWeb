<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Home</title>
</head>
<body class="h-full">

<div class="min-h-full flex flex-col">
    <nav class="bg-gray-800" x-data="{ isOpen: false }">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
              <img class="size-8" src="/img/logo.png" alt="Your Company">
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="/home" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white"">Home</a>
                <a href="/blog" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
                <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
                <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                <button class="bg-yellow-500 text-white px-6 py-3  font-semibold hover:bg-yellow-600">
                    Subscribe
                </button>
              </div>
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">

              <!-- Profile dropdown -->
              <div class="relative ml-3">
                <div>
                  <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="size-8 rounded-full" src="/img/ngokngok.jpg" alt="">
                  </button>
                </div>

                <div x-show="isOpen"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100 outline-none", Not Active: "" -->
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
              <span class="absolute -inset-0.5"></span>
              <span class="sr-only">Open main menu</span>
              <!-- Menu open: "hidden", Menu closed: "block" -->
              <svg  :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <!-- Menu open: "block", Menu closed: "hidden" -->
              <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile menu, show/hide based on menu state. -->
      <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="/home" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
          <a href="/blog" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
          <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About</a>
          <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
          <div class="flex items-center px-5">
            <div class="shrink-0">
              <img class="size-10 rounded-full" src="/img/ngokngok.jpg" alt="">
            </div>
            <div class="ml-3">
              <div class="text-base/5 font-medium text-white">Bambang Istijab</div>
              <div class="text-sm font-medium text-gray-400">bambangistijab30@gmail.com</div>
            </div>

          </div>
          <div class="mt-3 space-y-1 px-2">
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
          </div>
        </div>
      </div>
    </nav>

    <main class="bg-white flex-grow">

        <div class="max-w-5xl mx-auto p-6 space-y-6">

            <div class="text-center space-y-2">
            <div class="flex justify-center items-center space-x-2">
                <img src="/img/ngokngok.jpg" alt="User Image" class="w-12 h-12 rounded-full">
                <div class="text-left">
                <p class="text-sm text-gray-700 font-semibold">Andrew Jonson</p>
                <p class="text-xs text-gray-500">Posted on 27th January 2022</p>
                </div>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mr-60 ml-60">
                Step-by-step guide to choosing great font pairs
            </h1>
            <p class="text-gray-600 text-sm flex items-center justify-center space-x-1">
                <span>🚀</span> <span class="font-semibold">Startup</span>
            </p>
            </div>

            <div class="w-full">
            <img src="/img/woman.png" alt="Blog Image" class="rounded-lg w-full object-cover shadow-lg">
            </div>

        </div>

        <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center pt-10">Lorem loreman</h1>
        <p class="text-sm font-medium py-5 mr-40 ml-40">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non. Sit amet nulla facilisi morbi tempus iaculis urna. Lorem sed risus ultricies tristique nulla aliquet enim. Volutpat blandit aliquam etiam erat velit. Orci eu lobortis elementum nibh. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Neque convallis a cras semper auctor neque vitae tempus quam.
        </p>
        <p class="text-sm font-medium py-5 mr-40 ml-40">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non. Sit amet nulla facilisi morbi tempus iaculis urna. Lorem sed risus ultricies tristique nulla aliquet enim. Volutpat blandit aliquam etiam erat velit. Orci eu lobortis elementum nibh. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Neque convallis a cras semper auctor neque vitae tempus quam.
        </p>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center pt-10">Lorem loreman</h1>
        <p class="text-sm font-medium py-5 mr-40 ml-40">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non. Sit amet nulla facilisi morbi tempus iaculis urna. Lorem sed risus ultricies tristique nulla aliquet enim. Volutpat blandit aliquam etiam erat velit. Orci eu lobortis elementum nibh. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Neque convallis a cras semper auctor neque vitae tempus quam.
        </p>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center pt-10">Lorem loreman</h1>
        <p class="text-sm font-medium py-5 mr-40 ml-40">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus. Sociis natoque penatibus et magnis dis parturient montes. Ridiculus mus mauris vitae ultricies leo. Neque egestas congue quisque egestas diam. Risus in hendrerit gravida rutrum quisque non. Sit amet nulla facilisi morbi tempus iaculis urna. Lorem sed risus ultricies tristique nulla aliquet enim. Volutpat blandit aliquam etiam erat velit. Orci eu lobortis elementum nibh. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci nulla. Neque convallis a cras semper auctor neque vitae tempus quam.
        </p>


        <div class="max-w-7xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-8">What to read next</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="/img/man.png" alt="Blog Image" class="w-full h-56 object-cover">

                <div class="p-4">
                    <p class="text-sm text-gray-500 mb-2">By <span class="text-blue-500">John Doe</span> | Aug 23, 2021</p>
                    <h2 class="text-xl font-bold mb-2">A UX Case Study Creating a Studious Environment for Students:</h2>
                    <p class="text-gray-600 text-sm">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="/img/fotoblog.png" alt="Blog Image" class="w-full h-56 object-cover">

                <div class="p-4">
                    <p class="text-sm text-gray-500 mb-2">By <span class="text-blue-500">John Doe</span> | Aug 23, 2021</p>
                    <h2 class="text-xl font-bold mb-2">A UX Case Study Creating a Studious Environment for Students:</h2>
                    <p class="text-gray-600 text-sm">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="/img/tiga.png" alt="Blog Image" class="w-full h-56 object-cover">

                <div class="p-4">
                    <p class="text-sm text-gray-500 mb-2">By <span class="text-blue-500">John Doe</span> | Aug 23, 2021</p>
                    <h2 class="text-xl font-bold mb-2">A UX Case Study Creating a Studious Environment for Students:</h2>
                    <p class="text-gray-600 text-sm">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    </div>
        <div class="flex justify-center items-center mt-20 mb-20">
            <div class=" text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-1">
                    Join our team to be a part<br>
                    of our story
                </h2>
                <p class="text-gray-500 text-sm md:text-base mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                </p>
                <a href="#" class="bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-6 rounded transition">
                    Join Now
                </a>
            </div>
        </div>

    </main>

    <footer class="bg-gray-900 text-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
          <!-- Bagian Atas -->
          <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="text-lg font-bold">{Finsweet}</div>
            <!-- Navigasi -->
            <nav class="space-x-6">
              <a href="#" class="text-sm hover:underline">Home</a>
              <a href="/blog" class="text-sm hover:underline">Blog</a>
              <a href="/about" class="text-sm hover:underline">About us</a>
              <a href="/contact" class="text-sm hover:underline">Contact us</a>
              <a href="/policy" class="text-sm hover:underline">Privacy Policy</a>
              <a href="/author" class="text-sm hover:underline">Author</a>
              <a href="/kategori" class="text-sm hover:underline">Category</a>
            </nav>
          </div>
          <!-- Bagian Tengah -->
          <div class="bg-gray-800 mt-8 p-6 rounded-lg flex flex-col sm:flex-row justify-between items-center">
            <p class="text-lg font-semibold text-center sm:text-left">
              Subscribe to our news letter to get <br class="sm:hidden"> latest updates and news
            </p>
            <div class="mt-4 sm:mt-0 sm:ml-6 flex">
              <input
                type="email"
                placeholder="Enter Your Email"
                class="p-3 rounded-l-lg border-none focus:outline-none text-gray-700"
              />
              <button class="bg-yellow-500 text-black px-6 py-3 rounded-r-lg font-semibold hover:bg-yellow-600">
                Subscribe
              </button>
            </div>
          </div>
          <!-- Bagian Bawah -->
          <div class="mt-8 flex justify-between items-center">
            <div>
              <p class="text-sm">Finstreet 118 2561 Fintown</p>
              <p class="text-sm">Hello@finsweet.com &nbsp; 020 7993 2905</p>
            </div>
            <!-- Ikon Sosial Media -->
            <div class="flex space-x-4">
              <a href="#" class="hover:text-gray-400">
                <img src="/img/fb.png" alt="Facebook" class="w-5 h-5">
              </a>
              <a href="https://www.instagram.com/bmbng.i_/" class="hover:text-gray-400">
                <img src="/img/ig.png" alt="Facebook" class="w-5 h-5">
              </a>
              <a href="#" class="hover:text-gray-400">
                <img src="/img/x.png" alt="Facebook" class="w-5 h-5">
              </a>
            </div>
          </div>
        </div>
      </footer>
  </div>


</body>
</html>
