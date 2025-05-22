<?php
require 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraka Qurulish Do'koni - Kirish</title>
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
                <div class="relative group">
                    <a href="search.php" class="flex items-center space-x-2 px-4 py-2 rounded-full bg-blue-800 bg-opacity-50 hover:bg-yellow-400 hover:text-blue-900 transition-all duration-300">
                        <i class="fas fa-search"></i>
                    </a>
                    <span class="absolute top-full left-1/2 transform -translate-x-1/2 mt-2 text-xs bg-gray-800 text-white px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity duration-300">Qidiruv</span>
                </div>
            </div>
        </div>

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
                <li>
                    <a href="search.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                        <i class="fas fa-search"></i>
                        <span>Qidiruv</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Login Form Section -->
    <section class="pt-24 pb-12 bg-gradient-to-b from-blue-100 to-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8 animate-fade-in">Tizimga kirish</h1>
            <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">
                <p class="text-center text-gray-600 mb-6">Xarid qilish uchun tizimga kiring.</p>
                <form method="post" action="login_submit.php">
                    <div class="mb-4">
                        <label for="email" class="block text-blue-900 font-semibold mb-2">Email:</label>
                        <div class="relative">
                            <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="email" id="email" name="email" placeholder="Emailingizni kiriting" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="w-full pl-10 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-blue-900 font-semibold mb-2">Parol (min. 6 belgili):</label>
                        <div class="relative">
                            <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="password" id="password" name="password" placeholder="Parolni kiriting" required pattern=".{6,}" class="w-full pl-10 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-yellow-400 text-blue-900 font-semibold py-3 rounded-lg hover:bg-yellow-500 transition-all duration-300">Kirish</button>
                </form>
                <p class="text-center mt-4 text-gray-600">Hali hisobingiz yo'qmi? <a href="signup.php" class="text-yellow-400 hover:text-yellow-500 transition duration-300">Registratsiya</a></p>
            </div>
        </div>
    </section>

    <!-- Footer -->
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