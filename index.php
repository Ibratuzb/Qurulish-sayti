<?php
session_start();
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraka Qurulish Do'koni</title>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-900 via-blue-700 to-blue-500 text-white shadow-2xl fixed w-full z-20">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo with Animation -->
            <a href="index.php" class="flex items-center space-x-3 group">
                <div class="relative">
                    <i class="fas fa-hard-hat text-3xl text-yellow-400 transform group-hover:scale-110 transition-transform duration-300"></i>
                    <div class="absolute -top-1 -right-1 w-3 h-3 bg-yellow-300 rounded-full animate-ping"></div>
                </div>
                <span class="text-2xl font-extrabold tracking-wide group-hover:text-yellow-300 transition duration-300">Baraka Qurulish</span>
            </a>

            <!-- Mobile Menu Button -->
            <button id="menu-toggle" class="md:hidden focus:outline-none relative">
                <i class="fas fa-bars text-2xl transform hover:scale-110 transition-transform duration-300"></i>
            </button>

            <!-- Navigation Links -->
            <div id="nav-menu" class="hidden md:flex md:items-center space-x-8">
                <ul class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6">
                    <?php
                    if (isset($_SESSION['email'])) {
                    ?>
                        <li>
                            <a href="cart.php" class="flex items-center space-x-2 px-4 py-2 rounded-full bg-blue-800 bg-opacity-50 hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Tanlangan mahsulotlar</span>
                            </a>
                        </li>
                        <li>
                            <a href="settings.php" class="flex items-center space-x-2 px-4 py-2 rounded-full bg-blue-800 bg-opacity-50 hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fas fa-cog"></i>
                                <span>Sozlamalar</span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" class="flex items-center space-x-2 px-4 py-2 rounded-full bg-blue-800 bg-opacity-50 hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Hisobdan chiqish</span>
                            </a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li>
                            <a href="signup.php" class="flex items-center space-x-2 px-4 py-2 rounded-full bg-blue-800 bg-opacity-50 hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fas fa-user-plus"></i>
                                <span>Ro'yxatdan o'tish</span>
                            </a>
                        </li>
                        <li>
                            <a href="login.php" class="flex items-center space-x-2 px-4 py-2 rounded-full bg-blue-800 bg-opacity-50 hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300 transform hover:-translate-y-1">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Login</span>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
                <!-- Search Icon -->
                <!-- <div class="relative group">
                    <a href="search.php" class="flex items-center space-x-2 px-4 py-2 rounded-full bg-blue-800 bg-opacity-50 hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300">
                        <i class="fas fa-search"></i>
                    </a>
                    <span class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 text-xs bg-gray-800 text-white px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">Qidiruv</span>
                </div>
            </div>
        </div> -->

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-900 bg-opacity-95 text-white">
            <ul class="flex flex-col space-y-4 py-4 px-6">
                <?php
                if (isset($_SESSION['email'])) {
                ?>
                    <li>
                        <a href="cart.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Tanlangan mahsulotlar</span>
                        </a>
                    </li>
                    <li>
                        <a href="settings.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-cog"></i>
                            <span>Sozlamalar</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Hisobdan chiqish</span>
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <li>
                        <a href="signup.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-user-plus"></i>
                            <span>Ro'yxatdan o'tish</span>
                        </a>
                    </li>
                    <li>
                        <a href="login.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Login</span>
                        </a>
                    </li>
                <?php
                }
                ?>
                
            </ul>
        </div>
    </nav>

    <!-- Banner Section -->
    <section class="pt-24 pb-12 bg-gradient-to-b from-blue-100 to-white">
        <div class="container mx-auto px-4 text-center">
            <div class="relative bg-cover bg-center h-96 rounded-xl shadow-xl" style="background-image: url(https://malumot.ru/wp-content/uploads/2021/08/photo_2021-08-08_23-11-03.jpg);">
                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl flex items-center justify-center">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 animate-fade-in">Assalomu Alaykum</h1>
                        <p class="text-lg md:text-xl text-yellow-300 mb-6">Hozirda hamma mahsulotlarimizga <span class="font-bold">40% chegirma!</span> Shoshiling!</p>
                        <a href="products.php" class="inline-block px-8 py-3 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300 transform hover:-translate-y-1">Sotib olish</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-10">Bizning Mahsulotlarimiz</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="products.php">
                        <img src="img/introsement.png" alt="Sement" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Sement</h3>
                        <p class="text-gray-600">Eng sifatli sement mahsulotlari.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="products.php">
                        <img src="img/yogoch.jpg" alt="Taxta" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Taxta</h3>
                        <p class="text-gray-600">Eng sifatli taxta mahsulotlari.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="products.php">
                        <img src="img/mix.jpg" alt="Mix" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Mix</h3>
                        <p class="text-gray-600">Eng sifatli mix mahsulotlari.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="products.php">
                        <img src="img/hayat.jpg" alt="Hayat Bo'yoqlari" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Hayat Bo'yoqlari</h3>
                        <p class="text-gray-600">Eng sifatli rangli bo'yoq mahsulotlari.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="products.php">
                        <img src="img/gishtt.jpg" alt="G'isht" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">G'isht</h3>
                        <p class="text-gray-600">Eng sifatli g'isht mahsulotlari.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="products.php">
                        <img src="img/armaturaa.jpg" alt="Armatura" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Armatura</h3>
                        <p class="text-gray-600">Eng sifatli temir mahsulotlari.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form
    <section class="py-12 bg-gray-200">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-blue-900 mb-8">Biz bilan bog'laning</h2>
            <form action="contact.php" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-xl shadow-lg">
                <div class="mb-4">
                    <label for="name" class="block text-blue-900 font-semibold mb-2">Ismingiz:</label>
                    <input type="text" id="name" name="name" placeholder="Ismingizni kiriting" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-blue-900 font-semibold mb-2">Emailingiz:</label>
                    <input type="email" id="email" name="email" placeholder="@Email" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div class="mb-4">
                    <label for="subject" class="block text-blue-900 font-semibold mb-2">Savolingiz:</label>
                    <input type="text" id="subject" name="subject" placeholder="Savolingizni yozing" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <button type="submit" class="w-full bg-yellow-400 text-blue-900 font-semibold py-3 rounded-lg hover:bg-yellow-500 transition-all duration-300">Yuborish</button>
            </form>
        </div>
    </section> -->

  <?php require 'footer.php'; ?>

    <!-- Mobile Menu Toggle Script -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <!-- Animation for Fade-In -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }
    </style>
</body>
</html>