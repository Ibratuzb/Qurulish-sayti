<?php
// footer.php
?>
<footer class="bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 text-white py-12 relative overflow-hidden">
    <div class="container mx-auto px-4">
        <!-- Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Brand Info -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <a href="index.php" class="flex items-center space-x-3 group mb-4">
                    <div class="relative">
                        <i class="fas fa-hard-hat text-3xl text-yellow-400 transform group-hover:scale-110 transition-transform duration-300"></i>
                        <div class="absolute -top-1 -right-1 w-3 h-3 bg-yellow-300 rounded-full animate-ping"></div>
                    </div>
                    <span class="text-2xl font-extrabold tracking-wide group-hover:text-yellow-300 transition duration-300">Baraka Qurulish</span>
                </a>
                <p class="text-gray-300">O‘zbekistonning eng ishonchli qurilish mollari do‘koni. Sifatli mahsulotlar va tezkor xizmat.</p>
            </div>

            <!-- Quick Links -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-lg font-semibold text-yellow-400 mb-4">Tez havolalar</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="index.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-home"></i>
                            <span>Bosh sahifa</span>
                        </a>
                    </li>
                    <li>
                        <a href="products.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-shopping-bag"></i>
                            <span>Mahsulotlar</span>
                        </a>
                    </li>
                    <li>
                        <a href="cart.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Savatcha</span>
                        </a>
                    </li>
                    <li>
                        <a href="settings.php" class="flex items-center space-x-2 hover:text-yellow-300 transition duration-300">
                            <i class="fas fa-cog"></i>
                            <span>Sozlamalar</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="flex flex-col items-center md:items-start">
                <h3 class="text-lg font-semibold text-yellow-400 mb-4">Bog‘lanish</h3>
                <ul class="space-y-2">
                    <li class="flex items-center space-x-2">
                        <i class="fas fa-map-marker-alt text-yellow-400"></i>
                        <span>Toshkent, O‘zbekiston</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fas fa-phone-alt text-yellow-400"></i>
                        <span>+998 71 123 45 67</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fas fa-envelope text-yellow-400"></i>
                        <span>info@barakaqurilish.uz</span>
                    </li>
                    <li class="flex items-center space-x-4 mt-4">
                        <a href="https://t.me/Ibrat_Jorayev" class="text-yellow-400 hover:text-yellow-300 transition duration-300">
                            <i class="fab fa-telegram-plane text-2xl"></i>
                        </a>
                        <a href="https://youtube.com" class="text-yellow-400 hover:text-yellow-300 transition duration-300">
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <hr class="my-8 border-gray-600">

        <!-- Copyright -->
        <div class="text-center">
            <p class="text-gray-300">&copy; 2025 O‘zbekiston <a href="https://youtube.com" class="text-yellow-400 hover:text-yellow-500 transition duration-300">Qurilish Mollari</a> do‘koni. Barcha huquqlar himoyalangan.</p>
            <p class="text-gray-300 mt-2">Bu vebsayt <a href="https://t.me/Ibrat_Jorayev" class="text-yellow-400 hover:text-yellow-500 transition duration-300">FullStack dasturchi</a> tomonidan ishlab chiqildi.</p>
        </div>
    </div>

    <!-- Background Decorative Element -->
    <div class="absolute inset-0 bg-blue-900 opacity-10 pointer-events-none" style="background-image: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 50%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0.1) 75%, transparent 75%, transparent); background-size: 60px 60px;"></div>
</footer>