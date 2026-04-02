<!-- Flash Sale Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Flash Sale</h2>
            <div class="flex items-center space-x-4">
                <div class="flex space-x-2">
                    <div class="bg-red-500 text-white px-3 py-1 rounded-lg font-mono">08</div>
                    <div class="bg-red-500 text-white px-3 py-1 rounded-lg font-mono">12</div>
                    <div class="bg-red-500 text-white px-3 py-1 rounded-lg font-mono">45</div>
                </div>
                <a href="#" class="text-indigo-600 hover:text-indigo-700">Lihat Semua →</a>
            </div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            <!-- Product Card 1 -->
             <?php
$sqlProducts = $conn->query("SELECT*FROM products");
foreach ($sqlProducts as $datamenu) {

?>
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <div class="relative">
                    <img src="<?=$datamenu['image_url']?>" alt="Product" class="w-full h-48 object-cover rounded-t-lg">
                    <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded">-40%</span>
                </div>
               
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 mb-2"><?php echo $datamenu['name'] ?></h3>
                    <p class="text-gray-500 text-sm mb-2"><?php echo $datamenu['price'] ?></p>
                    <div class="flex items-center justify-between">
                        <span class="text-red-500 font-bold"><?php echo $datamenu['discount_price'] ?></span>
                        <button class="text-indigo-600 hover:text-indigo-700">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php
}
            ?>
        </div>
    </div>
    