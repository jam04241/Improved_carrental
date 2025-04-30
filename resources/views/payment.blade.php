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
                        CONFIRMATION AND PAYMENT
                    </p>

                    {{-- <p class="text-xl">
                        Track the current state of your car rental, from pending confirmation to completion.
                    </p> --}}
                </div>
                <div class="flex flex-col mx-70 md:mx-40 flex-row items-start gap-5 p-10 bg-gray-50 min-h-screen">

                    <!-- Left Side: Booking Summary -->
                    <div class="w-full md:w-1/2 bg-white shadow-md rounded-lg p-8 text-left">
                        <h2 class="text-2xl font-bold text-[#0f294c] mb-6">Booking Summary</h2>

                        <div class="mb-4">
                            <div class="text-lg">
                                <h3 class="text-xl font-semibold text-gray-800">Car Details</h3>
                                <img src="{{ asset('assets/sample_picture.png') }}" alt="Car Image"
                                    class="w-80 h-80 object-contain rounded-md justify-center">
                                <p class=" text-gray-600">Car Model: <span class="font-medium">Toyota Vios</span>
                                </p>
                                <p class="text-gray-600">Rental Period: <span class="font-medium">April 30 - May
                                        5</span>
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- Right Side: Payment Section -->
                    <!-- Payment Method Section -->
                    <div class="w-full md:w-1/2 bg-white shadow-md rounded-lg p-8">
                        <!-- Centered Payment Banner -->
                        <img src="{{ asset('assets/payment_method.png') }}" alt="Payment Logo"
                            class="w-24 h-24 object-contain mx-auto mb-4">

                        <h2 class="text-2xl font-bold text-[#0f294c] mb-6 text-center">Payment Method</h2>

                        <form class="space-y-4">
                            <!-- Option 1: Credit/Debit Card -->
                            <label
                                class="flex items-center gap-3 p-4 border border-gray-300 rounded-lg hover:border-[#0f294c] cursor-pointer transition-all">
                                <input type="radio" name="payment" class="accent-[#0f294c]">
                                <p class="font-medium text-gray-800 flex-1">Credit or Debit Card</p>
                                <div class="flex gap-2 items-center">
                                    <img src="{{ asset('assets/bmp_logo.png') }}" class="w-6 h-6 object-contain" alt="Visa">
                                    <img src="{{ asset('assets/bmp_logo.png') }}" class="w-6 h-6 object-contain" alt="MasterCard">
                                    <img src="{{ asset('assets/bmp_logo.png') }}" class="w-6 h-6 object-contain" alt="AmEx">
                                    <img src="{{ asset('assets/bmp_logo.png') }}" class="w-6 h-6 object-contain" alt="Discover">
                                </div>
                                
                            </label>

                            <!-- Option 2: Click to Pay -->
                            <label
                                class="flex items-center gap-3 p-4 border border-gray-300 rounded-lg hover:border-[#0f294c] cursor-pointer transition-all">
                                <input type="radio" name="payment" class="accent-[#0f294c]">
                                <p class="font-medium text-gray-800 flex-1">Click to Pay</p>
                                <img src="{{ asset('assets/bmp_logo.png') }}" class="w-6 h-6 object-contain" alt="Click to Pay">
                            </label>

                            <!-- Option 3: PayPal -->
                            <label
                                class="flex items-center gap-3 p-4 border border-gray-300 rounded-lg hover:border-[#0f294c] cursor-pointer transition-all">
                                <input type="radio" name="payment" class="accent-[#0f294c]">
                                <p class="font-medium text-gray-800 flex-1">PayPal</p>
                                <img src="{{ asset('assets/bmp_logo.png') }}" class="w-6 h-6 object-contain" alt="PayPal">
                            </label>

                            <!-- Total -->
                            <div class="pt-6 border-t mt-6">
                                <div class="flex justify-between items-center">
                                    <p class="text-gray-700 font-medium text-lg">Total Amount:</p>
                                    <p class="text-xl font-bold text-[#0f294c]">$250.00</p>
                                </div>
                            </div>

                            <!-- Pay Button -->
                            <button type="submit"
                                class="w-full mt-6 bg-[#0f294c] text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-[#092136] transition">
                                Continue to Contact
                            </button>
                        </form>
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