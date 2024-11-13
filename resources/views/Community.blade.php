<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <title>HobbyNest</title>
    
</head>
<body>
    <!-- Header -->
    <header>
    <div class="min-h-full bg-white">
    <!-- NAVIGASI -->
    <nav class="bg-gray-800" x-data="{ isOpen: false }">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-22 items-center justify-between">
          
        
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <img class="logo-size" src="img/logo.png" alt="Logo HobbyNest">
            </div>
          </div>
        
          <div class="hidden md:flex items-baseline space-x-5" id="nav-item">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="Home" class="rounded-md px-3 py-2 text-sm font-medium text-white no-underline" aria-current="page">Home</a>
            <a href="/Community" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Community</a>
          </div>

          <form class="d-flex ml-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>

      <!--Logo Bell bisa di klik-->
      <a href="#notifications" role="button" aria-label="Notifications">
  <ion-icon name="notifications" class="text-white px-3 py-2" style="font-size: 2rem;"></ion-icon>
</a>
      <!--Logo User -->
      <a href="#logo" role="button" aria-label="User profile">
  <ion-icon name="person" class="text-white px-3 py-2" style="font-size: 2rem;"></ion-icon>
</a>
        
          <div class="-mr-2 flex md:hidden">
            <!-- Mobile menu button -->
            <button type="button" @click="isOpen = !isOpen"
              class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                <span class="absolute -inset-0.5"></span>
                <span class="sr-only">Open main menu</span>
                <!-- Menu open: "hidden", Menu closed: "block" -->
                <svg :class="{'hidden': isOpen, 'block': !isOpen }"
                class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <!-- Menu open: "block", Menu closed: "hidden" -->
                <svg :class="{'block': isOpen, 'hidden': !isOpen }"
                class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
        
          </div>
        </div>
        
        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
          <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white no-underline" aria-current="page">Home</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Sign In</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Sign Up</a>
          </div>
        </div>
      </nav>
    
    </header>

                <!-- Main Content -->
                <main class="container mx-auto px-4 py-8">
                  <h1 class="text-3xl font-bold text-center mb-8">Find Your Passion</h1>
                  <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
                      <!-- Row 1: Two boxes -->
                      <a href="/soccer" class="card bg-white shadow-2xl rounded-full overflow-hidden block">
                          <img src="img/soccer.jpg" alt="Soccer Mania" class="w-full h-48 object-cover">
                          <div class="p-4">
                              <h2 class="text-xl font-semibold">SoccerMania!</h2>
                              <span class="text-gray-600 bg-white bg-opacity-10 px-1 py-0.5 text-sm rounded">Sport</span>
                          </div>
                      </a>
                      <a href="/adventuria" class="card bg-white shadow-lg rounded-lg overflow-hidden block">
                          <img src="img/adventuria.jpg" alt="Adventuriaa" class="w-full h-48 object-cover">
                          <div class="p-4">
                              <h2 class="text-xl font-semibold">Adventuriaa!</h2>
                              <span class="text-gray-600">Travel</span>
                          </div>
                      </a>
                  </section>
                  <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
                      <!-- Row 2: Four boxes -->
                      <a href="/knit-krafters" class="card bg-white shadow-lg rounded-lg overflow-hidden block">
                          <img src="img/knit.jpg" alt="Knit Krafters" class="w-full h-48 object-cover">
                          <div class="p-4">
                              <h2 class="text-xl font-semibold">Knit Krafters</h2>
                              <span class="text-gray-600">Art</span>
                          </div>
                      </a>
                      <a href="/hello-world" class="card bg-white shadow-lg rounded-lg overflow-hidden block">
                          <img src="img/software.jpg" alt="Hello World!" class="w-full h-48 object-cover">
                          <div class="p-4">
                              <h2 class="text-xl font-semibold">HelloWorld!</h2>
                              <span class="text-gray-600">Software</span>
                          </div>
                      </a>
                      <a href="/foodie-zen" class="card bg-white shadow-lg rounded-lg overflow-hidden block">
                          <img src="img/kuliner.jpg" alt="Foodie Zen" class="w-full h-48 object-cover">
                          <div class="p-4">
                              <h2 class="text-xl font-semibold">FoodieZen</h2>
                              <span class="text-gray-600">Culinary</span>
                          </div>
                      </a>
                      <a href="/tuner-brozz" class="card bg-white shadow-lg rounded-lg overflow-hidden block">
                          <img src="img/carzz.jpg" alt="Tuner Brozz" class="w-full h-48 object-cover">
                          <div class="p-4">
                              <h2 class="text-xl font-semibold">Tuner Brozz</h2>
                              <span class="text-gray-600">Automotive</span>
                          </div>
                      </a>
                  </section>
              </main>
    
    <!-- FOOTER -->
    <footer class="py-3 my-4 bg-gray-800">
      <ul class="social_icon border-bottom flex justify-center space-x-4 pb-3 mb-3">
        <li><a href=""><ion-icon name="logo-twitter" class="text-white"></ion-icon></a></li>
        <li><a href="h"><ion-icon name="logo-instagram" class="text-white"></ion-icon></a></li>
        <li><a href=""><ion-icon name="logo-facebook" class="text-white"></ion-icon></a></li>
      </ul>
    
      <p class="text-center text-white font-medium">Made in ❤️ HobbyNest@2024 </p>
    </footer>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
    </html>