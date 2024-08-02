<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sewa Kendaraan</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    
    <header class="bg-white shadow">
        <div class="container mx-auto px-6 py-2">
            <div class="flex items-center justify-between">
                <div class="text-xl font-semibold text-gray-700">
                    <a href="#" class="text-gray-800 hover:text-gray-600">SewaKendaraan</a>
                </div>
                <div class="flex items-center">
                    <header class="grid grid-cols-items gap-1 py-4 lg:grid-cols-6">
                        <a href="#" class="text-gray-600 hover:text-gray-800 mx-3">Home</a>
                        <a href="#" class="text-gray-600 hover:text-gray-800 mx-3">About</a>
                        <a href="#" class="text-gray-600 hover:text-gray-800 mx-3">Services</a>
                        <a href="#" class="text-gray-600 hover:text-gray-800 mx-3">Contact</a>

                        @if (Route::has('login'))
                        <nav class="text-gray-600 hover:text-gray-800 mx-3">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="text-gray-600 hover:text-gray-800 mx-3">
                                    Login
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="text-gray-600 hover:text-gray-800 mx-3">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="text-gray-600 hover:text-gray-800 mx-3">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                    </header>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('img/mobil_beranda.jpg');">
        <div class="container mx-auto px-6 py-32">
            <h1 class="text-4xl font-bold text-white mb-4">Sewa Kendaraan Mudah dan Cepat</h1>
            <p class="text-lg text-gray-300 mb-8">Temukan kendaraan yang sesuai dengan kebutuhan Anda dengan harga terjangkau</p>
            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded">Mulai Sewa Sekarang</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold">Kenapa Memilih Kami?</h2>
            <p class="text-gray-600">Kami memberikan pelayanan terbaik untuk kebutuhan kendaraan Anda</p>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded shadow p-6 text-center">
                    <img src="img/mobil_1.jpg" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Beragam Pilihan Kendaraan</h3>
                    <p class="text-gray-600">Kami menyediakan berbagai jenis kendaraan mulai dari mobil keluarga hingga mobil mewah.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded shadow p-6 text-center">
                    <img src="img/mobil_2.jpg" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Harga Terjangkau</h3>
                    <p class="text-gray-600">Harga sewa yang kompetitif dengan kualitas pelayanan yang terbaik.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded shadow p-6 text-center">
                    <img src="img/mobil_3.jpg" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-xl font-bold mb-2">Pelayanan 24/7</h3>
                    <p class="text-gray-600">Pelayanan pelanggan yang siap membantu Anda kapan saja, dimana saja.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black shadow mt-16">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-gray-600">&copy; 2024 SewaKendaraan. All rights reserved.</div>
            </div>
        </div>
    </footer>
</html>
