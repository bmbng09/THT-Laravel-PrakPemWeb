<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman SignUp</title>
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

    <main class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Create an Account</h2>
            <p class="text-gray-600 text-center mb-6">Join us and explore our services</p>

            <form>
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
                    <input type="text" id="name" placeholder="Enter your full name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" id="password" placeholder="Create a password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>

                <div class="mb-4">
                    <label for="confirm-password" class="block text-gray-700 font-medium mb-2">Confirm Password</label>
                    <input type="password" id="confirm-password" placeholder="Confirm your password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>

                <div class="flex items-center mb-6">
                    <input type="checkbox" id="terms" class="form-checkbox text-yellow-500">
                    <label for="terms" class="ml-2 text-gray-600 text-sm">
                        I agree to the <a href="#" class="text-yellow-500 hover:underline">Terms and Conditions</a>
                    </label>
                </div>

                <button type="submit" class="w-full bg-yellow-400 text-gray-800 py-2 px-4 rounded-md font-medium hover:bg-yellow-500 transition duration-300">
                    Sign Up
                </button>
            </form>

            <p class="text-center text-gray-600 mt-6">
                Already have an account?
                <a href="/login" class="text-yellow-500 font-medium hover:underline">Log In</a>
            </p>
        </div>
    </main>


    <footer class="bg-gray-900 text-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
          <div class="flex justify-between items-center">
            <div class="text-lg font-bold">{Finsweet}</div>
            <nav class="space-x-6">
              <a href="/home" class="text-sm hover:underline">Home</a>
              <a href="/blog" class="text-sm hover:underline">Blog</a>
              <a href="/about" class="text-sm hover:underline">About us</a>
              <a href="/contact" class="text-sm hover:underline">Contact us</a>
              <a href="/policy" class="text-sm hover:underline">Privacy Policy</a>
              <a href="author" class="text-sm hover:underline">Author</a>
              <a href="/kategori" class="text-sm hover:underline">Category</a>
            </nav>
          </div>
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
