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

<body class="bg-white text-white">
    <header class="bg-gray-800">
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
            <a href="Home" class="rounded-md px-3 py-2 text-sm font-medium text-white underline" aria-current="page">Home</a>
            <a href="/Community" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white underline">Community</a>
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
        <div x-show="isOpen" class="md:hidden" id="mobile-menu" >
          <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white no-underline" aria-current="page">Home</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Sign In</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white no-underline">Sign Up</a>
          </div>
        </div>
      </nav>
    </header>

    <main class="container mx-auto mt-8 p-6 bg-gray-800 rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Enter Community Name</h1>
        <form>
            <div class="mb-4">
                <input type="text" class="w-full p-2 rounded bg-white text-black" placeholder="Community Name">
            </div>
            <div class="mb-4">
            <label class="block mb-2">Choose Tags</label>
                <div class="relative">
                    <select class="w-full p-2 rounded bg-white text-gray-500 appearance-none">
                        <option class="text-gray-500" value="" disabled selected>Select tags...</option>
                        <option class="text-black">Sport</option>
                        <option class="text-black">Travel</option>
                        <option class="text-black">Art & Music</option>
                        <option class="text-black">Technology</option>
                        <option class="text-black">Culinary</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-white">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </div>
                </div>
            </div>
                        <div class="mb-4">
                <label class="block mb-2">Image</label>
                <div class="flex items-center">
                    <button type="button" class="bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 rounded border border-gray-700" onclick="document.getElementById('fileInput').click();">
                        Choose File
                    </button>
                    <input type="file" id="fileInput" class="hidden" onchange="updateFileName(this)">
                    <span id="fileName" class="ml-3">No File Chosen</span>
                </div>
            </div>
            
            <script>
                function updateFileName(input) {
                    const fileName = input.files.length > 0 ? input.files[0].name : 'No File Chosen';
                    document.getElementById('fileName').textContent = fileName;
                }
            </script>
            <div class="mb-4">
                <label class="block mb-2">Enter Community Description</label>
                <textarea class="w-full p-2 rounded bg-white text-black" rows="6"></textarea>            </div>
            <div class="text-right">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                    Publish
                </button>
            </div>
        </form>
    </main>

    
<!-- FOOTER -->
<footer class="py-3 my-4 bg-gray-800 footer-no-margin">
    <ul class="nav justify-content-center mb-3">
        <li class="nav-item font-medium"><a href="#" class="nav-link px-2 text-white">Home</a></li>
        <li class="nav-item font-medium"><a href="#about-us" class="nav-link px-2 text-white">About</a></li>
        <li class="nav-item font-medium"><a href="/Community" class="nav-link px-2 text-white">Community</a></li>
        <li class="nav-item font-medium"><a href="#" class="nav-link px-2 text-white">Help Center</a></li>
    </ul>

    <ul class="social_icon border-bottom flex justify-center space-x-4 pb-3 mb-3">
        <li><a href=""><ion-icon name="logo-twitter" class="text-white"></ion-icon></a></li>
        <li><a href="h"><ion-icon name="logo-instagram" class="text-white"></ion-icon></a></li>
        <li><a href=""><ion-icon name="logo-facebook" class="text-white"></ion-icon></a></li>
    </ul>

    <p class="text-center text-white font-medium">Made in ❤️ HobbyNest@2024</p>
</footer>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>