<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Blog</title>
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
                <a href="/login">
                    <button class="bg-yellow-500 text-white px-6 py-3  font-semibold hover:bg-yellow-600">
                        Subscribe
                    </button>
                </a>
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

    <header class="bg-white shadow">
        <div class="bg-gray-100 py-12">
            <div class="max-w-7xl mx-auto px-6 md:px-12 lg:flex lg:items-center lg:space-x-12">
                <!-- Bagian Kiri -->
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h4 class="text-sm text-gray-500 uppercase tracking-widest mb-2">Featured Post</h4>
                    <h1 class="text-4xl font-bold text-gray-800 mb-4 leading-tight">
                        Step-by-step guide to choosing great font pairs
                    </h1>
                    <p class="text-sm text-gray-600 mb-4">
                        By <a href="#" class="text-blue-500 hover:underline">John Doe</a> | May 23, 2022
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                    <a href="#" class="inline-block bg-yellow-400 text-gray-900 font-medium py-2 px-4 rounded shadow-md hover:bg-yellow-500">
                        Read More >
                    </a>
                </div>

                <div class="lg:w-1/2">
                    <img src="/img/fotoblog.png" alt="Blog Image" class="rounded-md shadow-lg">
                </div>
            </div>
        </div>
    </header>

    <main class="bg-white flex-grow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">All Posts</h2>
            </div>
              <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
              </div>
            </div>
            <div class="flex items-start space-x-6 mb-8 pb-9 ml-20">
                <img src="/img/stained.png" alt="Post Image" class="w-36 h-36 rounded-lg object-cover">
                <div>
                    <span class="text-sm font-semibold text-purple-600">BUSINESS</span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2">Font sizes in UI design: The complete guide to follow</h3>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="flex items-start space-x-6 ml-20 pb-9">
                <img src="/img/man.png" alt="Post Image" class="w-36 h-36 rounded-lg object-cover">
                <div>
                    <span class="text-sm font-semibold text-purple-600">ECONOMY</span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2">How to build rapport with your web design clients</h3>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="flex items-start space-x-6 ml-20 pb-9">
                <img src="/img/man.png" alt="Post Image" class="w-36 h-36 rounded-lg object-cover">
                <div>
                    <span class="text-sm font-semibold text-purple-600">ECONOMY</span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2">How to build rapport with your web design clients</h3>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="flex items-start space-x-6 ml-20 pb-9">
                <img src="/img/man.png" alt="Post Image" class="w-36 h-36 rounded-lg object-cover">
                <div>
                    <span class="text-sm font-semibold text-purple-600">ECONOMY</span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2">How to build rapport with your web design clients</h3>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>

            <div class="flex items-start space-x-6 ml-20 pb-9">
                <img src="/img/man.png" alt="Post Image" class="w-36 h-36 rounded-lg object-cover">
                <div>
                    <span class="text-sm font-semibold text-purple-600">ECONOMY</span>
                    <h3 class="text-xl font-bold text-gray-800 mt-2">How to build rapport with your web design clients</h3>
                    <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>

        <body class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="flex items-center justify-center space-x-4 text-gray-500 font-medium">
                <a href="{{ route('blog') }}"
                class="flex items-center text-black hover:text-gray-700 font-bold">
                <button id="prevBtn" class="flex items-center text-gray-300 cursor-not-allowed" disabled>
                    <span class="mr-1 text-lg">&lt;</span>
                    <span>Prev</span>
                </button>
                </a>

                <span id="pageNumber" class="text-black font-bold">Halaman 1</span>

                <a href="{{ route('blog.dua') }}"
                class="flex items-center text-black hover:text-gray-700 font-bold">
                <button id="nextBtn" class="flex items-center hover:text-gray-700 text-black font-bold">
                    <span>Next</span>
                    <span class="ml-1 text-lg">&gt;</span>
                </button>
                </a>
            </div>

            <script>
                let currentPage = 1;
                const totalPages = 2;

                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');
                const pageNumber = document.getElementById('pageNumber');

                function updatePagination() {
                    pageNumber.textContent = `Halaman ${currentPage}`;

                    if (currentPage === 1) {
                        prevBtn.classList.add('text-gray-300', 'cursor-not-allowed');
                        prevBtn.classList.remove('hover:text-gray-700');
                        prevBtn.disabled = true;
                    } else {
                        prevBtn.classList.remove('text-gray-300', 'cursor-not-allowed');
                        prevBtn.classList.add('hover:text-gray-700');
                        prevBtn.disabled = false;
                    }

                    if (currentPage === totalPages) {
                        nextBtn.classList.add('text-gray-300', 'cursor-not-allowed');
                        nextBtn.classList.remove('hover:text-gray-700');
                        nextBtn.disabled = true;
                    } else {
                        nextBtn.classList.remove('text-gray-300', 'cursor-not-allowed');
                        nextBtn.classList.add('hover:text-gray-700');
                        nextBtn.disabled = false;
                    }
                }

                prevBtn.addEventListener('click', () => {
                    if (currentPage > 1) {
                        currentPage--;
                        updatePagination();
                    }
                });

                nextBtn.addEventListener('click', () => {
                    if (currentPage < totalPages) {
                        currentPage++;
                        updatePagination();
                    }
                });

                updatePagination();
            </script>

      <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">All Categories</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Business -->
                <div class="border rounded-lg py-6 px-4 text-center hover:shadow-md">
                    <div class="inline-block mb-4">
                        <img src="/img/bisnis.png" alt="Business Icon" class="mx-auto">
                    </div>
                    <h3 class="font-bold text-lg text-gray-800">Business</h3>
                    <p class="text-gray-600 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <!-- Startup -->
                <div class="bg-yellow-300 border rounded-lg py-6 px-4 text-center hover:shadow-md">
                    <div class="inline-block mb-4">
                        <img src="/img/shuttle.png" alt="Startup Icon" class="mx-auto">
                    </div>
                    <h3 class="font-bold text-lg text-gray-800">Startup</h3>
                    <p class="text-gray-600 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <!-- Economy -->
                <div class="border rounded-lg py-6 px-4 text-center hover:shadow-md">
                    <div class="inline-block mb-4">
                        <img src="/img/ekonomi.png" alt="Economy Icon" class="mx-auto">
                    </div>
                    <h3 class="font-bold text-lg text-gray-800">Economy</h3>
                    <p class="text-gray-600 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <!-- Technology -->
                <div class="border rounded-lg py-6 px-4 text-center hover:shadow-md">
                    <div class="inline-block mb-4">
                        <img src="/img/starup.png" alt="Technology Icon" class="mx-auto">
                    </div>
                    <h3 class="font-bold text-lg text-gray-800">Technology</h3>
                    <p class="text-gray-600 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
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
