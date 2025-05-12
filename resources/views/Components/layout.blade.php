<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=5, initial-scale=1.0" />
  <title>{{ $title ?? 'Página' }}</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  body {
    height: 100vh;
    background-color: #ffffff;
    overflow: hidden;
  }

  img {
    width: 100px;
    opacity: 0;
    transform: scale(0.5);
    animation: aparecer 2s forwards;
  }

  @keyframes aparecer {
    to {
      opacity: 1;
      transform: scale(1);
    }
  }
</style>
<body class="h-full">
  <div class="min-h-full">
    <!-- NAVBAR -->
    <nav class="bg-white shadow-md">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
              <img src="https://i.postimg.cc/wv0dhfHJ/ferrari-brand-logo-car-symbol-with-name-black-design-italian-automobile-illustration-free-vector.jpg" alt="Logo FERRARI" />
            </div>
            <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                <x-navigation href="/" : active="request()->is('/')">Home</x-navigation> 
                <x-navigation href="/about" : active="request()->is('/about')">About</x-navigation>  
                <x-navigation href="/contact" : active="request()->is('/contact')">Contact</x-navigation> 
                <x-navigation href="/carsales" : active="request()->is('/carsales')">Sports Cars </x-navigation>
              </div>
              
            </div>
          </div>
          <div class="hidden md:block">
            <div class="ml-4 flex items-center md:ml-6">
              <button type="button" class="relative rounded-full bg-white p-1 text-black hover:text-black focus:ring-2 focus:ring-black focus:ring-offset-2 focus:ring-offset-white">
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
              </button>
              <div class="relative ml-3">
                <button type="button" class="relative flex max-w-xs items-center rounded-full bg-white text-sm focus:ring-2 focus:ring-black focus:ring-offset-2 focus:ring-offset-white" id="user-menu-button">
                  <img class="size-8 rounded-full" src="https://i.postimg.cc/VLBg61Fb/Rainbow-Six-Siege-Dokkaebi-Stickers.jpg" alt="" />
                </button>
              </div>
            </div>
          </div>
          <div class="-mr-2 flex md:hidden">
            <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-white p-2 text-black hover:bg-gray-100">
              <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
              <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- MOBILE MENU -->
      <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
          <a href="#" class="block rounded-md bg-black px-3 py-2 text-base font-medium text-white">Dashboard</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-100 hover:text-black">Team</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-100 hover:text-black">Projects</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-100 hover:text-black">Calendar</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-100 hover:text-black">Reports</a>
        </div>
        <div class="border-t border-gray-200 pt-4 pb-3">
          <div class="flex items-center px-5">
            <div class="shrink-0">
              <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            </div>
            <div class="ml-3">
              <div class="text-base font-medium text-black">DIRECTOR </div>
              <div class="text-sm font-medium text-gray-500">DIRECTO.ADMIN@gmail.com</div>
            </div>
          </div>
          <div class="mt-3 space-y-1 px-2">
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-100">Your Profile</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-100">Settings</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-black hover:bg-gray-100">Sign out</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- HEADER -->
    <header class="bg-white shadow-sm">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $title}}</h1>

        <body> {{ $slot }} </body>
        <div>
    </header>

   <!-- MAIN -->
    <main>
    </main>
  </div>
</body>
</html>