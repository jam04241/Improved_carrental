<header class="fixed top-0 w-full bg-white text-black py-2 mt-2">
    <div class="container mx-auto flex justify-center items-center px-6">
        <!-- Logo -->
        <a href="#" class="flex items-center">
            <img src="{{asset('assets/bmp_logo.png')}}" alt="BMP Logo" class="h-8">
            <!-- Update with actual logo path -->
        </a>

        <!-- Navigation Menu -->
        @if (Route::has('login'))
        <nav class="flex space-x-8 uppercase font-semibold tracking-wide">
            @auth
                <a href="{{ url('/dashboard') }}" class="hover:text-gray-700 dark:hover:text-gray-300">Dashboard</a>
            @else
            <a href="{{ route('/') }}" class="hover:text-gray-700 dark:hover:text-gray-300">Home</a>
            <a href="{{ route('cars') }}" class="hover:text-gray-700 dark:hover:text-gray-300">Cars</a>
            <a href="{{ route('login') }}" class="hover:text-gray-700 dark:hover:text-gray-300">Booking</a>
            <a href="{{ route('login') }}" class="hover:text-gray-700 dark:hover:text-gray-300">Contacts</a>
            <a href="{{ route('login') }}" class="hover:text-gray-700 dark:hover:text-gray-300">
                <i class="fa-solid fa-user text-lg"></i>
            </a>
            @endif
        </nav>
        @endif
    </div>

    <div class="w-[50%] bg-[#ffff] py-10 rounded-lg">
        {{ $slot }}
    </div>

    
    <div class="flex flex-col min-h-screen bg-white">
        <!-- Footer Section -->
        <footer class="bg-white py-10 text-[#0f294c] text-sm text-center">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Quick Links -->
                <div>
                    <h3 class="font-bold text-base">QUICK LINKS</h3>
                    <ul class="space-y-2 mt-2">
                        <li><a href="#" class="hover:underline text-sm">Home</a></li>
                        <li><a href="#" class="hover:underline text-sm">Cars</a></li>
                        <li><a href="#" class="hover:underline text-sm">Bookings</a></li>
                        <li><a href="#" class="hover:underline text-sm">Contacts</a></li>
                    </ul>
                </div>

                <!-- About Us -->
                <div>
                    <h3 class="font-bold text-base">ABOUT US</h3>
                    <ul class="space-y-2 mt-2">
                        <li><a href="#" class="hover:underline text-sm">Services</a></li>
                        <li><a href="#" class="hover:underline text-sm">Rental Deals</a></li>
                        <li><a href="#" class="hover:underline text-sm">Car Brands</a></li>
                        <li><a href="#" class="hover:underline text-sm">Branches</a></li>
                    </ul>
                </div>

                <!-- Customer Support -->
                <div>
                    <h3 class="font-bold text-base">CUSTOMER SUPPORT</h3>
                    <ul class="space-y-2 mt-2">
                        <li><a href="#" class="hover:underline text-sm">Help Center</a></li>
                        <li><a href="#" class="hover:underline text-sm">Terms and Conditions</a></li>
                        <li><a href="#" class="hover:underline text-sm">Privacy Policy</a></li>
                        <li><a href="#" class="hover:underline text-sm">Damage & Return Policy</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Media and Copyright -->
            <div class="mt-10">
                <img src="{{ asset('assets/bmp_logo.png') }}" alt="BMP Footer Logo" class="mx-auto h-14">
                <div class="flex justify-center space-x-6 mt-4">
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-x-twitter text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-facebook text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-instagram text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-tiktok text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-github text-2xl"></i></a>
                </div>
                <p class="mt-5 text-sm">© 2025, BMP Car Rental. All Rights Reserved</p>
            </div>
        </footer>

    </div>


</header>