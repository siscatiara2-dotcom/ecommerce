<!-- Recommended Products -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Rekomendasi Untuk Anda</h2>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            <!-- Product Card 6 -->
             
             <?php
               $sqlmenu = $conn->query("SELECT * FROM products");
               while($datamenu = $sqlmenu->fetch_assoc()){
                ?>

            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="<?= $datamenu['image_url'] ?>" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1"><?= $datamenu['name'] ?></h3>
                    <p class="text-indigo-600 font-bold"><?= $datamenu['price'] ?></p>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star text-yellow-400 text-xs"></i>
                        <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                        <span class="text-gray-400 text-xs ml-1">(45)</span>
                    </div>
                </div>
            </div>
        <?php
               }
          ?>
        </div>
    </div>