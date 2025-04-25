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

            <section class="relative bg-[#0f1021] text-white py-10 text-center">
                <div class="py-10">
                    <p class="text-7xl font-bold">
                        BOOKING STATUS
                    </p>
    
                    <p class="text-xl">
                        Track the current state of your car rental, from pending confirmation to completion.
                    </p>
                </div>

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-30">
                    <table class="min-w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-2 sm:px-6 sm:py-3">Car Type</th>
                                <th scope="col" class="px-4 py-2 sm:px-6 sm:py-3">Available</th>
                                <th scope="col" class="px-4 py-2 sm:px-6 sm:py-3">Brand</th>
                                <th scope="col" class="px-4 py-2 sm:px-6 sm:py-3">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 sm:px-6 sm:py-4">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">Silver</td>
                                <td class="px-4 py-2 bg-gray-50 dark:bg-gray-800 sm:px-6 sm:py-4">Laptop</td>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">$2999</td>
                            </tr>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 sm:px-6 sm:py-4">
                                    Microsoft Surface Pro
                                </th>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">White</td>
                                <td class="px-4 py-2 bg-gray-50 dark:bg-gray-800 sm:px-6 sm:py-4">Laptop PC</td>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">$1999</td>
                            </tr>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 sm:px-6 sm:py-4">
                                    Magic Mouse 2
                                </th>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">Black</td>
                                <td class="px-4 py-2 bg-gray-50 dark:bg-gray-800 sm:px-6 sm:py-4">Accessories</td>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">$99</td>
                            </tr>
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <th scope="row" class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 sm:px-6 sm:py-4">
                                    Google Pixel Phone
                                </th>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">Gray</td>
                                <td class="px-4 py-2 bg-gray-50 dark:bg-gray-800 sm:px-6 sm:py-4">Phone</td>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">$799</td>
                            </tr>
                            <tr>
                                <th scope="row" class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 sm:px-6 sm:py-4">
                                    Apple Watch 5
                                </th>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">Red</td>
                                <td class="px-4 py-2 bg-gray-50 dark:bg-gray-800 sm:px-6 sm:py-4">Wearables</td>
                                <td class="px-4 py-2 sm:px-6 sm:py-4">$999</td>
                            </tr>
                        </tbody>
                    </table>
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
                    </div>
                </footer>

            </div>
            <p>Explore Our Premium Car Brands for Rent
                Choose from a Wide Range of Trusted and Automakers.</p>
        </main>
    </div>
</body>

</html>