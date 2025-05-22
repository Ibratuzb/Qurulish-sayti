<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
} else {
    $user_id = $_GET['id'];
    $confirm_query = "update users_items set status='Confirmed' where user_id=$user_id";
    $confirm_query_result = mysqli_query($con, $confirm_query) or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraka Qurulish Do'koni - Buyurtma Tasdiqlandi</title>
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
                    <?php if (isset($_SESSION['email'])) { ?>
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
                    <?php } else { ?>
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
                    <?php } ?>
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
                <?php if (isset($_SESSION['email'])) { ?>
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
                <?php } else { ?>
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
                <?php } ?>
                <li>
                    <a href="search.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                        <i class="fas fa-search"></i>
                        <span>Qidiruv</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Success Message Section -->
    <section class="pt-24 pb-12 bg-gradient-to-b from-blue-100 to-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8 animate-fade-in">Buyurtma Tasdiqlandi!</h1>
            <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg text-center">
                <div class="mb-6">
                    <i class="fas fa-check-circle text-5xl text-green-500 animate-pulse"></i>
                </div>
                <p class="text-gray-600 mb-6">Mahsulotlaringiz tasdiqlandi.Adminlarimiz siz bilan bog'lanishadi. Xaridingiz uchun rahmat!</p>
                <a href="products.php" class="inline-block bg-yellow-400 text-blue-900 font-semibold px-6 py-3 rounded-full hover:bg-yellow-500 transition-all duration-300">
                    <i class="fas fa-shopping-bag mr-2"></i>Boshqa mahsulotlarni xarid qilish
                </a>
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