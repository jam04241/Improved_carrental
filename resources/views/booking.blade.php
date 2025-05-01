<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>
</head>


<body class="font-sans h-screen w-full">
    <!-- MAIN BODY -->
    <div class="bg-white-100 text-black/100 h-screen w-full flex flex-col">

        <!-- HEADER LOCATE: resources/views/profile/partials/header.blade.php-->
        @section('content')
        @include('profile.partials.userheader')

        <!-- Main Content -->
        <main class="flex-1 mt-16">
            <!-- Hero Section -->
            <!-- Hero Section -->
            <!-- FIRST CONTAINER -->

            <section class="relative bg-[#0f1021] text-white py-10 mx-auto text-center">
                <div class="py-10">
                    <p class="text-4xl md:text-6xl font-bold mb-4">
                        BOOKING STATUS
                    </p>

                    <p class="text-xl">
                        Track the current state of your car rental, from pending confirmation to completion.
                    </p>
                </div>

                <!-- Search Bar and Filter Controls -->
                <div class="flex flex-col gap-6 md:flex-row md:gap-40 justify-center items-center mb-8 px-4 text-white">
                    <form class="max-w-lg mx-auto" x-data="{ open: false, selected: 'All status' }">
                        <div class="flex">
                           
                            <!-- Search Input -->
                            <div class="relative w-400">
                                <input type="search" id="search-dropdown"
                                    class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                                    placeholder="Search Car Model, Type, Available..." required />
                                <button type="submit"
                                    class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                <!-- Booking Status Card -->
                <div
                    class="max-w-2xl mx-auto bg-[#f9f9f9] border border-gray-200 rounded-lg shadow flex flex-col md:flex-row overflow-hidden">
                    <img class="w-full h-48 object-contain md:w-1/3 md:h-auto rounded-lg"
                        src="{{ asset('assets/sample_picture.png') }}" alt="Sample pic" />

                    <div class="flex flex-col justify-between p-6 md:w-2/3 text-left">
                        <div>
                            <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900">
                                Toyota - Vios 1.3 XLE CVT
                            </h5>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-gray-700 text-sm">
                                <p><span class="font-semibold">Car Type:</span> Sedan</p>
                                <p><span class="font-semibold">Seat Capacity:</span> 5</p>
                                <p><span class="font-semibold">Transmission:</span> CVT</p>
                                <p><span class="font-semibold">Available:</span> Yes</p>
                                <p><span class="font-semibold">Pickup Date:</span> 01/01/2025</p>
                                <p><span class="font-semibold">Return Date:</span> 01/02/2025</p>
                                <p><span class="font-semibold">Price:</span> ₱1,999.00</p>
                            </div>
                        </div>

                        <div class="mt-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                            <span
                                class="inline-block px-4 py-2 text-sm font-semibold text-white bg-yellow-500 rounded-full w-fit">
                                Pending
                            </span>

                            <button type="submit"
                                class="px-6 py-2 bg-red-600 text-white text-base font-semibold rounded-lg hover:bg-red-700 transition duration-200 w-full sm:w-auto">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>

            </section>


            <!-- footer -->
            <div class="flex flex-col min-h-auto bg-white">
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
                        <p>Explore Our Premium Car Brands for Rent
                            Choose from a Wide Range of Trusted and Automakers.</p>
                    </div>
                </footer>

            </div>

        </main>
    </div>
</body>

</html>