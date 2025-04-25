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
    <script src="https://unpkg.com/flowbite@1.6.5/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
            darkMode: 'class', // or 'media'
            theme: {
              extend: {
                colors: {
                  primary: '#1D4ED8',
                },
              },
            },
          }
        </script>
 

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
                        AVAILABLE CARS
                    </p>

                    <p class="text-xl">Choose from a wide range of vehicles,
                        tailored to your preferences and budget.
                        <br>
                        From compact cars for city drives to luxury
                        vehicles for an elegant experience,
                        <br>
                        we have options for every kind of journey.
                    </p>
                </div>


                <div class="grid grid-cols-4 justify-center gap-[5%] mx-[10%]">
                    <!-- flex flex-row-->

                    <!-- FIRST CARD -->
                    <div
                        class="max-w-md mx-auto my-auto bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
                        <div class="bg-gray-100 p-4 flex justify-center">
                            <img src="{{ asset('assets/user_carpage/car_vios.svg') }}" class="w-3/4" alt="Toyota Vios">
                        </div>
                        <div class="p-5 text-center">
                            <div class="flex items-center justify-center mb-2">
                                <img src="{{ asset('assets/user_carpage/logo_toyota.svg') }}" class="w-12 mr-2"
                                    alt="Toyota Logo">
                                <h5 class="text-2xl font-bold text-gray-900">VIOS</h5>
                            </div>
                            <div class="bg-blue-900 text-white p-4 rounded-lg grid grid-cols-2 gap-4 text-sm">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-car"></i>
                                    <span>SEDAN</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-door-open"></i>
                                    <span>4-5 DOORS</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-user-group"></i>
                                    <span>5 PEOPLE</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-snowflake"></i>
                                    <span>AC / HEATER</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mt-3">
                                <p class="text-gray-900 text-xl font-bold">₱ 500 / DAY</p>
                                <!-- Trigger Button -->
                                <button data-modal-target="carModal" data-modal-toggle="carModal"
                                    class="inline-flex items-center px-4 py-2 text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                                    RENT
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 14 10">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
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
                    </div>
                </footer>

            </div>
            <p>Explore Our Premium Car Brands for Rent
                Choose from a Wide Range of Trusted and Automakers.</p>
        </main>
    </div>

    <!-- Modal -->
<div id="carModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-7xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <div class="grid grid-cols-2">
          <!-- Left Section with Image and Logo -->
          <div class="bg-[#012E57] text-white p-6 flex flex-col items-center justify-center">
            <img src="{{ asset('assets/body3/brands/logo_toyota.svg') }}" alt="BMP Footer Logo" class="mx-auto h-15">
            <img src="{{ asset('assets/body3/car/vios.svg') }}" alt="BMP Footer Logo" class="mx-auto h-30">
          </div>
  
          <!-- Right Section with Details -->
          <div class="p-8">
            <h2 class="text-4xl font-bold text-blue-900">VIOS</h2>
            <p class="text-xl text-blue-600 font-medium mb-6">1.3 XLE CVT (Silver Metallic 1)</p>
  
            <div class="grid grid-cols-2 gap-4 text-sm text-gray-700">
              <div>
                <p class="font-semibold">Engine Type</p>
                <p>Dual VVT-i, 4-Cylinder In-Line DOHC 16V EFI</p>
              </div>
              <div>
                <p class="font-semibold">Engine Displacement (cc)</p>
                <p>1,329</p>
              </div>
              <div>
                <p class="font-semibold">Tires</p>
                <p>185/60 R15 Alloy</p>
              </div>
              <div>
                <p class="font-semibold">Seating Capacity</p>
                <p>5 Seaters</p>
              </div>
              <div>
                <p class="font-semibold">Overall Dimensions (mm)</p>
                <p>4,420 × 1,730 × 1,475</p>
              </div>
              <div>
                <p class="font-semibold">Wheelbase (mm)</p>
                <p>2,550</p>
              </div>
            </div>
  
            <div class="mt-6">
              <label for="date" class="block text-sm font-semibold text-gray-700 mb-1">Select a Date</label>
              <input type="date" id="date" class="border-gray-300 rounded px-3 py-2 text-sm w-1/2" />
            </div>
  
            <div class="mt-4 flex items-center space-x-4">
              <span class="text-sm font-semibold">Status</span>
              <span class="bg-green-600 text-white px-3 py-1 rounded text-xs">AVAILABLE</span>
            </div>
  
            <div class="mt-6 flex justify-end space-x-4">
              <button data-modal-hide="carModal" class="px-5 py-2 bg-blue-900 text-white rounded hover:bg-blue-800">
                ← Back
              </button>
              <button class="px-5 py-2 bg-blue-900 text-white rounded hover:bg-blue-800">
                Proceed →
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>


</html>