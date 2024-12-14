<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman About</title>
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
                <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About us</a>
                <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact us</a>
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

    <main class="flex-grow">

        <!-- Section About Us -->
  <section class="max-w-6xl mx-auto px-6 py-12">
    <!-- ABOUT US HEADER -->
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-8">
      <!-- Left Text -->
      <div class="max-w-lg mb-6 md:mb-0">
        <h3 class="uppercase text-gray-600 text-sm tracking-widest mb-2">About Us</h3>
        <h1 class="text-3xl md:text-4xl font-bold leading-snug mb-4">
          We are a team of <br> content writers who <br> share their learnings
        </h1>
      </div>
      <!-- Right Paragraph -->
      <div class="max-w-lg">
        <p class="text-gray-600 text-sm leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>

    <!-- Image and Stats -->
    <div class="relative w-full mb-16">
      <!-- Image -->
      <img src="/img/brng.png" alt="Team Image" class="w-full h-auto rounded-lg shadow-lg">

      <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-10/12 bg-yellow-300 rounded-lg shadow-lg p-6 grid grid-cols-3 gap-6">
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-800">12+</h2>
            <p class="text-gray-600 text-sm">Blogs Published</p>
        </div>
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-800">18K+</h2>
            <p class="text-gray-600 text-sm">Views on Finsweet</p>
        </div>
        <div class="text-center">
            <h2 class="text-2xl font-bold text-gray-800">30K+</h2>
            <p class="text-gray-600 text-sm">Total active Users</p>
        </div>
    </div>
    <div class="h-5 bg-yellow-400 w-2/4 "></div>
    <div class="h-5 bg-blue-400 w-1/5 ml-auto"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-gray-100 py-12 px-8 rounded-lg shadow-lg">
      <div>
        <h4 class="text-sm font-medium uppercase text-gray-600 mb-3">Our Mission</h4>
        <h3 class="text-lg font-semibold mb-3">Creating valuable content for creatives all around the world</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus.
        </p>
      </div>
      <div>
        <h4 class="text-sm font-medium uppercase text-gray-600 mb-3">Our Vision</h4>
        <h3 class="text-lg font-semibold mb-3">A platform that empowers individuals to improve</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non blandit massa enim nec. Scelerisque viverra mauris in aliquam sem. At risus viverra adipiscing at in tellus.
        </p>
      </div>
    </div>

     <!-- Container -->
  <div class="max-w-6xl mx-auto px-6 py-12 space-y-16">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <div>
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Our team of creatives</h2>
        <p class="font-semibold text-gray-700 mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </p>
        <p class="text-gray-600 text-sm leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
        </p>
      </div>
      <div class="relative">
        <img src="/img/tangan.png" alt="Team" class="w-full rounded-lg shadow-lg">
        <div class="absolute -left-4 -top-4 w-12 h-12 bg-yellow-400 rounded-bl-lg"></div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <div class="relative order-2 md:order-1">
        <img src="/img/tiga.png" alt="Blog Start" class="w-full rounded-lg shadow-lg">
        <div class="absolute -right-4 -bottom-4 w-12 h-12 bg-purple-600 rounded-tr-full"></div>
      </div>
      <div class="order-1 md:order-2">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Why we started this Blog</h2>
        <p class="font-semibold text-gray-700 mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
        </p>
        <p class="text-gray-600 text-sm leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.
        </p>
      </div>
    </div>

  </div>

  </section>

        <div class="max-w-6xl mx-auto px-4 py-12">
            <!-- Section: List of Authors -->
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-8">List of Authors</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                <!-- Author 1 -->
                <div class="p-6 border rounded-lg shadow-sm">
                    <img src="/img/manblack.png" alt="Author Image" class="w-20 h-20 rounded-full mx-auto mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Floyd Miles</h3>
                    <p class="text-sm text-gray-500 mb-2">Content Writer @Company</p>

                    <div class="flex space-x-4 mt-4 text-gray-600">
                        <a href="https://www.instagram.com/bmbng.i_/" class="hover:text-gray-400">
                            <img src="/img/ig.png" alt="Facebook" class="w-5 h-5 ml-10">
                        </a>
                        <a href="https://web.facebook.com/istijab.bambang.0906/?locale=id_ID" class="hover:text-gray-400">
                            <img src="/img/fb.png" alt="Facebook" class="w-5 h-5">
                        </a>
                        <a href="https://x.com/ijab09" class="hover:text-gray-400">
                            <img src="/img/x.png" alt="Facebook" class="w-5 h-5">
                        </a>
                        <a href="https://www.linkedin.com/in/bambang-istijab-596453334/" class="hover:text-gray-400">
                            <img src="/img/linkedin.png" alt="Facebook" class="w-5 h-5">
                        </a>
                    </div>

                </div>
                <!-- Author 2 -->
                <div class="p-6 border rounded-lg shadow-sm">
                    <img src="/img/cewe1.png" alt="Author Image" class="w-20 h-20 rounded-full mx-auto mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Dianne Russell</h3>
                    <p class="text-sm text-gray-500 mb-2">Content Writer @Company</p>

                    <div class="flex space-x-4 mt-4 text-gray-600">
                        <a href="https://www.instagram.com/bmbng.i_/" class="hover:text-gray-400">
                            <img src="/img/ig.png" alt="Facebook" class="w-5 h-5 ml-10">
                        </a>
                        <a href="https://web.facebook.com/istijab.bambang.0906/?locale=id_ID" class="hover:text-gray-400">
                            <img src="/img/fb.png" alt="Facebook" class="w-5 h-5">
                        </a>
                        <a href="https://x.com/ijab09" class="hover:text-gray-400">
                            <img src="/img/x.png" alt="Facebook" class="w-5 h-5">
                        </a>
                        <a href="https://www.linkedin.com/in/bambang-istijab-596453334/" class="hover:text-gray-400">
                            <img src="/img/linkedin.png" alt="Facebook" class="w-5 h-5">
                        </a>
                    </div>

                </div>
                <!-- Author 3 -->
                <div class="p-6 border rounded-lg shadow-sm">
                    <img src="/img/cewe2.png" alt="Author Image" class="w-20 h-20 rounded-full mx-auto mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Jenny Wilson</h3>
                    <p class="text-sm text-gray-500 mb-2">Content Writer @Company</p>

                    <div class="flex space-x-4 mt-4 text-gray-600">
                        <a href="https://www.instagram.com/bmbng.i_/" class="hover:text-gray-400">
                            <img src="/img/ig.png" alt="Facebook" class="w-5 h-5 ml-10">
                        </a>
                        <a href="https://web.facebook.com/istijab.bambang.0906/?locale=id_ID" class="hover:text-gray-400">
                            <img src="/img/fb.png" alt="Facebook" class="w-5 h-5">
                        </a>
                        <a href="https://x.com/ijab09" class="hover:text-gray-400">
                            <img src="/img/x.png" alt="Facebook" class="w-5 h-5">
                        </a>
                        <a href="https://www.linkedin.com/in/bambang-istijab-596453334/" class="hover:text-gray-400">
                            <img src="/img/linkedin.png" alt="Facebook" class="w-5 h-5">
                        </a>
                    </div>

                </div>
                <!-- Author 4 -->
                <div class="p-6 border rounded-lg shadow-sm">
                    <img src="/img/cewe3.png" alt="Author Image" class="w-20 h-20 rounded-full mx-auto mb-4">
                    <h3 class="text-lg font-bold text-gray-800">Leslie Alexander</h3>
                    <p class="text-sm text-gray-500 mb-2">Content Writer @Company</p>

                    <div class="flex space-x-4 mt-4 text-gray-600">
                        <a href="https://www.instagram.com/bmbng.i_/" class="hover:text-gray-400">
                            <img src="/img/ig.png" alt="Facebook" class="w-5 h-5 ml-10">
                        </a>
                        <a href="https://web.facebook.com/istijab.bambang.0906/?locale=id_ID" class="hover:text-gray-400">
                            <img src="/img/fb.png" alt="Facebook" class="w-5 h-5">
                        </a>
                        <a href="https://x.com/ijab09" class="hover:text-gray-400">
                            <img src="/img/x.png" alt="Facebook" class="w-5 h-5">
                        </a>
                        <a href="https://www.linkedin.com/in/bambang-istijab-596453334/" class="hover:text-gray-400">
                            <img src="/img/linkedin.png" alt="Facebook" class="w-5 h-5">
                        </a>
                    </div>

                </div>
            </div>
            <div class="max-w-6xl mx-auto px-4 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                    <!-- Author 1 -->
                    <div class="p-6 border rounded-lg shadow-sm">
                        <img src="/img/manblack.png" alt="Author Image" class="w-20 h-20 rounded-full mx-auto mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Floyd Miles</h3>
                        <p class="text-sm text-gray-500 mb-2">Content Writer @Company</p>

                        <div class="flex space-x-4 mt-4 text-gray-600">
                            <a href="https://www.instagram.com/bmbng.i_/" class="hover:text-gray-400">
                                <img src="/img/ig.png" alt="Facebook" class="w-5 h-5 ml-10">
                            </a>
                            <a href="https://web.facebook.com/istijab.bambang.0906/?locale=id_ID" class="hover:text-gray-400">
                                <img src="/img/fb.png" alt="Facebook" class="w-5 h-5">
                            </a>
                            <a href="https://x.com/ijab09" class="hover:text-gray-400">
                                <img src="/img/x.png" alt="Facebook" class="w-5 h-5">
                            </a>
                            <a href="https://www.linkedin.com/in/bambang-istijab-596453334/" class="hover:text-gray-400">
                                <img src="/img/linkedin.png" alt="Facebook" class="w-5 h-5">
                            </a>
                        </div>

                    </div>
                    <!-- Author 2 -->
                    <div class="p-6 border rounded-lg shadow-sm">
                        <img src="/img/cewe1.png" alt="Author Image" class="w-20 h-20 rounded-full mx-auto mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Dianne Russell</h3>
                        <p class="text-sm text-gray-500 mb-2">Content Writer @Company</p>

                        <div class="flex space-x-4 mt-4 text-gray-600">
                            <a href="https://www.instagram.com/bmbng.i_/" class="hover:text-gray-400">
                                <img src="/img/ig.png" alt="Facebook" class="w-5 h-5 ml-10">
                            </a>
                            <a href="https://web.facebook.com/istijab.bambang.0906/?locale=id_ID" class="hover:text-gray-400">
                                <img src="/img/fb.png" alt="Facebook" class="w-5 h-5">
                            </a>
                            <a href="https://x.com/ijab09" class="hover:text-gray-400">
                                <img src="/img/x.png" alt="Facebook" class="w-5 h-5">
                            </a>
                            <a href="https://www.linkedin.com/in/bambang-istijab-596453334/" class="hover:text-gray-400">
                                <img src="/img/linkedin.png" alt="Facebook" class="w-5 h-5">
                            </a>
                        </div>

                    </div>
                    <!-- Author 3 -->
                    <div class="p-6 border rounded-lg shadow-sm">
                        <img src="/img/cewe2.png" alt="Author Image" class="w-20 h-20 rounded-full mx-auto mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Jenny Wilson</h3>
                        <p class="text-sm text-gray-500 mb-2">Content Writer @Company</p>

                        <div class="flex space-x-4 mt-4 text-gray-600">
                            <a href="https://www.instagram.com/bmbng.i_/" class="hover:text-gray-400">
                                <img src="/img/ig.png" alt="Facebook" class="w-5 h-5 ml-10">
                            </a>
                            <a href="https://web.facebook.com/istijab.bambang.0906/?locale=id_ID" class="hover:text-gray-400">
                                <img src="/img/fb.png" alt="Facebook" class="w-5 h-5">
                            </a>
                            <a href="https://x.com/ijab09" class="hover:text-gray-400">
                                <img src="/img/x.png" alt="Facebook" class="w-5 h-5">
                            </a>
                            <a href="https://www.linkedin.com/in/bambang-istijab-596453334/" class="hover:text-gray-400">
                                <img src="/img/linkedin.png" alt="Facebook" class="w-5 h-5">
                            </a>
                        </div>

                    </div>
                    <!-- Author 4 -->
                    <div class="p-6 border rounded-lg shadow-sm">
                        <img src="/img/cewe3.png" alt="Author Image" class="w-20 h-20 rounded-full mx-auto mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Leslie Alexander</h3>
                        <p class="text-sm text-gray-500 mb-2">Content Writer @Company</p>

                        <div class="flex space-x-4 mt-4 text-gray-600">
                            <a href="https://www.instagram.com/bmbng.i_/" class="hover:text-gray-400">
                                <img src="/img/ig.png" alt="Facebook" class="w-5 h-5 ml-10">
                            </a>
                            <a href="https://web.facebook.com/istijab.bambang.0906/?locale=id_ID" class="hover:text-gray-400">
                                <img src="/img/fb.png" alt="Facebook" class="w-5 h-5">
                            </a>
                            <a href="https://x.com/ijab09" class="hover:text-gray-400">
                                <img src="/img/x.png" alt="Facebook" class="w-5 h-5">
                            </a>
                            <a href="https://www.linkedin.com/in/bambang-istijab-596453334/" class="hover:text-gray-400">
                                <img src="/img/linkedin.png" alt="Facebook" class="w-5 h-5">
                            </a>
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
