<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraka Qurulish Do'koni - Mahsulotlar</title>
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

    <!-- Banner Section -->
    <section class="pt-24 pb-12 bg-gradient-to-b from-blue-100 to-white">
        <div class="container mx-auto px-4 text-center">
            <div class="relative bg-cover bg-center h-80 rounded-xl shadow-xl" style="background-image: url(https://storage.kun.uz/source/3/ABLFUWSTx_SmVnLejVpTqCrNPvDfHD27.jpg);">
                <div class="absolute inset-0 bg-black bg-opacity-50 rounded-xl flex items-center justify-center">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-extrabold text-white mb-4 animate-fade-in">Baraka Qurulish Do'konimizga Xush Kelibsiz!</h1>
                        <p class="text-lg md:text-xl text-yellow-300 mb-6">Sifatli sementlar, taxtalar, mixlar, bo'yoqlar va temir mahsulotlari.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-10">Mahsulotlarimiz</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/sement.jpg" alt="Eco 450+ sement" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Eco 450+ Sement</h3>
                        <p class="text-gray-600">Narxi: 75,000 so'm/qop</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(1)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=1" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/brxl6.jpg" alt="Standart" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Standart (450+)</h3>
                        <p class="text-gray-600">Narxi: 45,000 so'm/qop</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(2)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=2" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/fff.jpg" alt="Portlant sement" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Portlant Sement</h3>
                        <p class="text-gray-600">Narxi: 49,000 so'm/qop</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(3)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=3" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/1-9.jpg" alt="Good sement" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Good Sement</h3>
                        <p class="text-gray-600">Narxi: 50,000 so'm/qop</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(4)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=4" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/taxta0.jpg" alt="Pilomaterial" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Pilomaterial 10x15 </h3>
                        <p class="text-gray-600">Narxi: 315,000 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(5)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=5" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/taxta2.jpg" alt="Pilomaterial dyumovka" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Pilomaterial </h3>
                        <p class="text-gray-600">Narxi: 114,000 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(6)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=6" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 7 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/taxta4.jpg" alt="Reyka sifatli" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Reyka (Sifatli)</h3>
                        <p class="text-gray-600">Narxi: 58,000 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(7)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=7" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 8 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/taxta5.jpg" alt="Reyka tavrika" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Reyka (Tavrika)</h3>
                        <p class="text-gray-600">Narxi: 61,000 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(8)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=8" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 9 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/brxl1.jpg" alt="Mixlar" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Mixlar</h3>
                        <p class="text-gray-600">Narxi: 7,000 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(9)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=9" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 10 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/brxl2.jpg" alt="Mix sifatli" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Mix (Sifatli)</h3>
                        <p class="text-gray-600">Narxi: 500 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(10)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=10" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 11 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/brxl3.jpg" alt="Qurulish mixlari" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Qurulish Mixlari</h3>
                        <p class="text-gray-600">Narxi: 10,900 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(11)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=11" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 12 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/brxl4.jpg" alt="Mixlar" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Mixlar</h3>
                        <p class="text-gray-600">Narxi: 12,757 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(12)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=12" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 13 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/royxat.jpg" alt="Armatura mahsulotlari" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Armatura Mahsulotlari</h3>
                        <p class="text-gray-600">Narxi: 9,100,000 so'm/tonna</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(13)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=13" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 14 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/brxl7.jpg" alt="Hayat rangli boyoqlari" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Hayat Rangli Bo'yoqlari</h3>
                        <p class="text-gray-600">Narxi: 25,900 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(14)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=14" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 15 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/brxl8.jpg" alt="Gisht sifatli" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">G'isht Sifatli (1 dona)Bonus+</h3>
                        <p class="text-gray-600">Narxi: 2,000 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(15)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=15" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 16 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/brxl9.jpg" alt="Armatura 5 metr" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Armatura Mahsulotlari (5 metr)</h3>
                        <p class="text-gray-600">Narxi: 10,900 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(16)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=16" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 17 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/14.jpg" alt="Shifer mahsulotlari" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Shifer Mahsulotlari</h3>
                        <p class="text-gray-600">Narxi: 47,000 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(17)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=17" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 18 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/15b.jpg" alt="Metallocherepitsa" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Metallocherepitsa</h3>
                        <p class="text-gray-600">Narxi: 77,900 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(18)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=18" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 19 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/17.jpg" alt="Klinker qoplamalari" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Klinker Qoplamalari</h3>
                        <p class="text-gray-600">Narxi: 37,586 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(19)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=19" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- Product 20 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <a href="cart.php">
                        <img src="img/18.jpg" alt="Shisha qismlar" class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4 text-center">
                        <h3 class="text-xl font-semibold text-blue-900">Shisha Qismlar</h3>
                        <p class="text-gray-600">Narxi: 210,000 so'm</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Sotib olish</a>
                        <?php } else {
                            if (check_if_added_to_cart(20)) {
                                echo '<a href="#" class="inline-block w-full px-4 py-2 mt-2 bg-green-500 text-white font-semibold rounded-full opacity-75 cursor-not-allowed">Savatchaga qo\'shildi</a>';
                            } else { ?>
                                <a href="cart_add.php?id=20" class="inline-block w-full px-4 py-2 mt-2 bg-yellow-400 text-blue-900 font-semibold rounded-full hover:bg-yellow-500 transition-all duration-300">Savatchaga qo'shish</a>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

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