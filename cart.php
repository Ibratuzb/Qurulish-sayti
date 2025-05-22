<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
$user_id = $_SESSION['id'];
$user_products_query = "select it.id, it.name, it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
$user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
$no_of_user_products = mysqli_num_rows($user_products_result);
$sum = 0;
if ($no_of_user_products == 0) {
?>
    <script>
        window.alert("No items in the cart!!");
    </script>
<?php
} else {
    while ($row = mysqli_fetch_array($user_products_result)) {
        $sum = $sum + $row['price'];
    }
}
?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baraka Qurulish Do'koni - Savatcha</title>
    <link rel="shortcut icon" href="img/lifestyleStore.png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <!-- Cart Section -->
    <section class="pt-24 pb-12 bg-gradient-to-b from-blue-100 to-white">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-bold text-center text-blue-900 mb-8 animate-fade-in">Savatcha</h1>
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-blue-900 text-white">
                                <th class="px-4 py-2 text-left"></th>
                                <th class="px-4 py-2 text-left">Mahsulot raqami</th>
                                <th class="px-4 py-2 text-left">Mahsulot nomi</th>
                                <th class="px-4 py-2 text-left">Narxi</th>
                                <th class="px-4 py-2 text-left">Soni</th>
                                <th class="px-4 py-2 text-left">Summasi</th>
                                <th class="px-4 py-2 text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $user_products_result = mysqli_query($con, $user_products_query) or die(mysqli_error($con));
                            $no_of_user_products = mysqli_num_rows($user_products_result);
                            $counter = 1;
                            while ($row = mysqli_fetch_array($user_products_result)) {
                                $item_price = $row['price'];
                            ?>
                                <tr class="border-b">
                                    <td class="px-4 py-2"><?php echo $counter; ?></td>
                                    <td class="px-4 py-2"><?php echo $row['id']; ?></td>
                                    <td class="px-4 py-2"><?php echo $row['name']; ?></td>
                                    <td class="px-4 py-2"><?php echo number_format($row['price'], 0, ',', ' '); ?> so'm</td>
                                    <td class="px-4 py-2">
                                        <div class="flex items-center space-x-2 w-32">
                                            <button class="qty-minus bg-gray-200 text-blue-900 px-2 py-1 rounded hover:bg-gray-300 transition">-</button>
                                            <input type="text" name="quantity-<?php echo $row['id']; ?>" class="qty-input bg-white text-center border border-gray-300 rounded px-2 py-1 w-12" value="1" data-price="<?php echo $row['price']; ?>">
                                            <button class="qty-plus bg-gray-200 text-blue-900 px-2 py-1 rounded hover:bg-gray-300 transition">+</button>
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 item-total"><?php echo number_format($item_price, 0, ',', ' '); ?> so'm</td>
                                    <td class="px-4 py-2">
                                        <a href="cart_remove.php?action=remove&id=<?php echo $row['id']; ?>" class="text-red-600 hover:text-red-800 transition"><i class="fas fa-trash-alt"></i> O'chirish</a>
                                    </td>
                                </tr>
                            <?php
                                $counter++;
                            }
                            ?>
                            <tr>
                                <td class="px-4 py-2"></td>
                                <td class="px-4 py-2"></td>
                                <td class="px-4 py-2 font-semibold text-blue-900">Umumiy</td>
                                <td class="px-4 py-2 font-semibold text-blue-900" id="total-price"><?php echo number_format($sum, 0, ',', ' '); ?> so'm</td>
                                <td class="px-4 py-2"></td>
                                <td class="px-4 py-2">
                                    <a href="success.php?id=<?php echo $user_id; ?>" class="inline-block bg-yellow-400 text-blue-900 font-semibold px-4 py-2 rounded-full hover:bg-yellow-500 transition-all duration-300">Tasdiqlash</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php require 'footer.php'; ?>

    <!-- Mobile Menu Toggle and Cart Functionality Script -->
    <script>
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Cart Quantity and Total Price Update
        $(document).ready(function() {
            // Initial total price calculation
            updateTotal();

            // Quantity input change handler
            $('.qty-input').change(function() {
                updateTotal();
                updateItemTotal($(this));
            });

            // Decrease quantity
            $('.qty-minus').click(function() {
                var $input = $(this).parent().find('.qty-input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count).change();
            });

            // Increase quantity
            $('.qty-plus').click(function() {
                var $input = $(this).parent().find('.qty-input');
                var count = parseInt($input.val()) + 1;
                $input.val(count).change();
            });

            // Update total price for all items
            function updateTotal() {
                var total = 0;
                $('.qty-input').each(function() {
                    var price = parseFloat($(this).data('price'));
                    var quantity = parseInt($(this).val());
                    total += price * quantity;
                });
                $('#total-price').html(total.toLocaleString('uz-UZ') + ' so\'m');
            }

            // Update individual item total
            function updateItemTotal($input) {
                var price = parseFloat($input.data('price'));
                var quantity = parseInt($input.val());
                var newPrice = price * quantity;
                $input.closest('tr').find('.item-total').html(newPrice.toLocaleString('uz-UZ') + ' so\'m');
            }
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