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
                <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About us</a>
                <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact us</a>
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
          <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
          <a href="/blog" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Blog</a>
          <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About us</a>
          <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact us</a>
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
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img src="/img/pria.png" alt="" class="absolute inset-0 -z-10 size-full object-cover object-right md:object-center">
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
              <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
              <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-2xl lg:mx-0">
                <p class="mt-8 text-pretty text-lg font-medium text-gray-300 sm:text-xl/8">Posted on <b>startup</b></p>
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Step-by-step guide to choosing great font pairs</h2>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-300 sm:text-xl/8">By<span class="text-yellow-600 font-semibold">James West </span>|  May 23, 2025 </p>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-300 sm:text-xl/8 pb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                <button class="bg-yellow-500 text-white px-6 py-3 font-semibold hover:bg-yellow-600 rounded">
                    Raed More >
                </button>
              </div>
            </div>
          </div>

    </header>

    <main class="flex-grow pt-20">
        <!-- Container Utama -->
    <div class="max-w-6xl mx-auto px-4 py-10">
    <!-- Bagian Atas: Featured Post & All Posts -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <!-- Featured Post -->
        <div class="md:col-span-2 bg-white shadow-lg rounded-lg">
            <img src="/img/bangunan.png" alt="Featured Image" class="rounded-t-lg w-full h-64 object-cover">
            <div class="p-6">
                <p class="text-sm text-gray-500">
                    By <span class="text-purple-600 font-semibold">John Doe</span> | May 23, 2025
                </p>
                <h2 class="text-2xl font-bold text-gray-800 mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </h2>
                <p class="text-gray-600 mt-2">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </p>
                <button class="mt-4 bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
                    Read More >
                </button>
            </div>
        </div>

        <!-- All Posts -->
        <div>
            <div class="flex justify-between mb-4">
                <h3 class="text-xl font-bold text-gray-800">All Posts</h3>
                <a href="#" class="text-purple-600 text-sm font-semibold hover:underline">View All</a>
            </div>
            <!-- List Post -->
            <div class="space-y-4">
                <div class="p-4 bg-gray-50 rounded-md hover:bg-yellow-100 transition">
                    <p class="text-sm text-gray-500">
                        By <span class="text-purple-600 font-semibold">John Doe</span> | Aug 23, 2025
                    </p>
                    <h4 class="font-bold text-gray-800">
                        8 Figma design systems that you can download for free today.
                    </h4>
                </div>
                <div class="p-4 rounded-md hover:bg-yellow-100 transition">
                    <p class="text-sm text-gray-500">
                        By <span class="text-purple-600 font-semibold">John Doe</span> | Aug 23, 2025
                    </p>
                    <h4 class="font-bold text-gray-800">
                        8 Figma design systems that you can download for free today.
                    </h4>
                </div>
                <div class="p-4 rounded-md hover:bg-yellow-100 transition">
                    <p class="text-sm text-gray-500">
                        By <span class="text-purple-600 font-semibold">John Doe</span> | Aug 23, 2025
                    </p>
                    <h4 class="font-bold text-gray-800">
                        8 Figma design systems that you can download for free today.
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <div class="flex mt-13 space-x-0 justify-center">
        <div class="h-5 bg-yellow-400 w-2/4"></div>
        <div class="h-5 bg-blue-400 w-1/6 ml-auto"></div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-gray-50 rounded-lg p-8">
        <!-- About Us -->
        <div>
            <h3 class="text-sm font-semibold text-purple-600">ABOUT US</h3>
            <h2 class="text-2xl font-bold text-gray-800 mt-2">
                We are a community of content writers who share their learnings
            </h2>
            <p class="text-gray-600 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" class="text-purple-600 font-semibold hover:underline mt-4 inline-block">Read More ></a>
        </div>
        <div>
            <h3 class="text-sm font-semibold text-purple-600">OUR MISSION</h3>
            <h2 class="text-2xl font-bold text-gray-800 mt-2">
                Creating valuable content for creatives all around the world
            </h2>
            <p class="text-gray-600 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 py-10">
        <!-- Section: Choose A Category -->
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Choose A Category</h2>
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

        <!-- Section: Why We Started -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <!-- Image -->
            <div>
                <img src="/img/bareng.png" alt="Why We Started" class="rounded-lg shadow-lg">
            </div>
            <!-- Text Content -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-sm font-semibold text-gray-500 tracking-widest mb-2">WHY WE STARTED</h3>
                <h2 class="text-3xl font-bold text-gray-800 mb-4 leading-tight">
                    It started out as a simple idea and evolved into our passion
                </h2>
                <p class="text-gray-600 mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
                <a href="#" class="inline-block bg-yellow-400 text-gray-800 font-bold py-3 px-6 rounded hover:bg-yellow-500 transition duration-300">
                    Discover our story >
                </a>
            </div>
        </div>
    </div>

    <!-- Container Utama -->
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
        <div class="p-6 border rounded-lg shadow-sm bg-yellow-100">
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

    <!-- Section: Featured Logos -->
    <div class="flex justify-center items-center flex-wrap mt-12 space-x-6">
        <span class="text-gray-400 text-sm">We are <strong>Featured in</strong></span>
        <img src="/img/logo 1.png" alt="Logo 1">
        <img src="/img/logo 2.png" alt="Logo 2">
        <img src="/img/logo 3.png" alt="Logo 3">
        <img src="/img/logo 4.png" alt="Logo 4">
        <img src="/img/logo 5.png" alt="Logo 5">
    </div>

    <div class="bg-yellow-50 rounded-lg shadow-lg mt-12 p-6 md:p-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <p class="text-xs uppercase tracking-widest font-semibold text-gray-500 mb-3">Testimonials</p>
                <h3 class="text-2xl font-bold text-gray-800 mb-4">What people say about our blog</h3>
                <p class="text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
            </div>
            <!-- Testimonial Author -->
            <div class="flex items-center">
                <div>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="flex items-center space-x-4">
                        <img src="/img/ngokngok.jpg" alt="User Image" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-bold text-gray-800">Bambang Istijab</h4>
                            <p class="text-sm text-gray-500">Jaksel, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Arrows -->
        <div class="flex justify-end mt-6 space-x-4">
            <button class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded-full hover:bg-gray-300">
                ←
            </button>
            <button class="w-8 h-8 flex items-center justify-center bg-gray-800 text-white rounded-full hover:bg-gray-700">
                →
            </button>
        </div>
    </div>

</div>

        <div class="flex justify-center items-center mt-1 mb-20">
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
