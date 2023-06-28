<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jersey listing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-green-600 shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="text-2xl font-bold"><img src="https://images.squarespace-cdn.com/content/v1/561c3247e4b0e7e06ea2b64d/1515953659484-FN2NMHDH9VTEPSYF5M2K/GBJS-logo-for-web-gallery.jpg" alt="" class="w-24 h-12"></a>
    
            <!-- Navigation Menu -->
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-white flex gap-2 items-center text-lg hover:text-gray-200"><i class="fa fa-user-plus"></i>Register</a></li>
                    <li><a href="#" class="text-white flex gap-2 items-center text-lg hover:text-gray-200"><i class="fa fa-sign-in"></i>Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- message --}}
        @if (session()->has('message'))
        <div x-data="{show:true}" x-init="setTimeout(()=> show =false, 5000)" x-show="show" class="fixed top-1 left-1/2 flex p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">Success alert! </span>{{session('message')}}
            </div>
          </div>
        @endif
    

    <!-- Content -->
    <main>
        @yield('content')
        
    </main>
    
    

    <!-- Footer -->
    <footer class="fixed w-full bottom-0 z-30 bg-green-600 py-4">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <p class="text-white">Jersey Listing System &copy; 2023. All rights reserved.</p>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-100 hover:text-gray-100">Terms of Service</a></li>
                    <li><a href="#" class="text-gray-100 hover:text-gray-100">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-100 hover:text-gray-100">Contact</a></li>
                </ul>
                <a href="/listings/create" class="bg-black text-white font-bold text-md px-4 py-2 border-2 border-white rounded-lg hover:bg-transparent">Post a Jersey</a>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>

</body>
</html>
