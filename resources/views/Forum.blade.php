<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TAILWIND -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" 
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <title>HobbyNest - Hobby Disscussion</title>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <nav class="bg-teal-700 p-4 flex justify-between items-center">
        <a class="text-white text-2xl font-bold" href="#">
            <img alt="HOBYNEST logo" class="inline-block h-8 w-8 mr-2" src="img/logo.png"/> HOBBYNEST
        </a>
        <div class="flex items-center space-x-4">
            <a class="text-white hover:text-gray-300" href="#">Home</a>
            <a class="text-white hover:text-gray-300" href="#">Community</a>
            <form class="relative">
                <input class="rounded-full px-4 py-2" placeholder="Search" type="search"/>
                <button class="absolute right-0 top-0 mt-2 mr-4 text-gray-500" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <a class="text-white hover:text-gray-300 relative" href="#">
                <i class="fas fa-bell"></i>
                <span class="absolute top-0 right-0 inline-block w-2 h-2 bg-red-600 rounded-full"></span>
            </a>
            <div class="relative">
                <a class="text-white hover:text-gray-300" href="#" onclick="toggleDropdown()">
                    <i class="fas fa-user-circle fa-2x"></i>
                </a>
                <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-20">
                    <div class="p-3 border-b">
                        <p class="font-medium">{{ Auth::user()->name }}</p>
                        <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
                    </div>
                    <ul>
                        <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">Setting</a></li>
                        <li><a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">Help Center</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                @csrf
                                <button type="submit" class="w-full text-left">Log Out</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="container mx-auto flex mt-8">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white rounded-lg shadow-lg p-4">
            <a href="#" class="block py-2 px-4 hover:bg-gray-200 rounded text-gray-700">
                <i class="fas fa-user mr-2"></i> Profile
            </a>
            <a href="#" class="block py-2 px-4 hover:bg-gray-200 rounded text-gray-700">
                <i class="fas fa-comments mr-2"></i> Forum
            </a>
            <div class="ml-4">
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 rounded text-gray-700">
                    <i class="fas fa-comment-dots mr-2"></i> Discussion
                </a>
                <a href="#" class="block py-2 px-4 hover:bg-gray-200 rounded text-gray-700">
                    <i class="fas fa-store mr-2"></i> Hobby Marketplace
                </a>
            </div>
            <a href="#" class="block py-2 px-4 hover:bg-gray-200 rounded text-gray-700">
                <i class="fas fa-question-circle mr-2"></i> Help Me
            </a>
        </aside>

        <!-- Main Content -->
        <main class="w-3/4 bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold mb-4">FIND YOUR PASSION </h1>
            <img src="img/knitting.jpg" alt="Knitting" class="rounded-lg mb-6">
            <p class="text-gray-700 mb-6">
            Welcome to HobbyNest! This is a vibrant community forum dedicated to hobby enthusiasts of all kinds. Whether you’re into knitting, crochet, painting, gardening, cooking, woodworking, photography, or any other creative pursuit, this is the place for you. Here, members can share ideas, showcase projects, discuss techniques, and exchange tips and tricks for mastering their favorite hobbies. The forum is also a space to find inspiration, collaborate on projects, and support each other in developing new skills. At HobbyHaven, we celebrate creativity and connection, bringing together hobbyists from diverse backgrounds to share their passion and grow together. 
            </p>
            <div class="flex flex-col items-start space-y-4 mb-6">
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <p class="mb-0"><strong>Members:</strong> 100 Subscribers</p>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary btn-custom">Discussion Forum</button>
                    <button class="btn btn-danger btn-custom">Hobby Marketplace</button>
                </div>
            </div>

            <hr class="mb-6">
            <h2 class="text-2xl font-semibold mb-4">Recent Topics</h2>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-gray-100 rounded-lg shadow-lg p-4 text-center">
                    <img src="img/topic1.jpg" alt="Topic 1" class="rounded-lg mb-2">
                    <h3 class="text-lg font-medium"> Designs</h3>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-lg p-4 text-center">
                    <img src="img/topic2.jpg" alt="Topic 2" class="rounded-lg mb-2">
                    <h3 class="text-lg font-medium"> Tips & Tricks</h3>
                </div>
                <div class="bg-gray-100 rounded-lg shadow-lg p-4 text-center">
                    <img src="img/topic3.jpg" alt="Topic 3" class="rounded-lg mb-2">
                    <h3 class="text-lg font-medium"> Recommendations</h3>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
        <div class="social-icons flex justify-center space-x-6 mb-2">
            <a href="#" class="text-white text-2xl hover:text-gray-400">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white text-2xl hover:text-gray-400">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="text-white text-2xl hover:text-gray-400">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
        <hr class="border-gray-600 mb-2">
        <p class="text-sm">Made with ❤ HobbyNest &copy;2024</p>
    </div>
</footer>

</body>
</html>