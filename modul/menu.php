 <!-- Categories -->
    <div class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex space-x-8 overflow-x-auto py-4">
               <?php
               $sqlmenu = $conn->query("SELECT * FROM categories");
               while($datamenu = $sqlmenu->fetch_assoc()){
                ?>
                    <a href="#" class="text-gray-600 hover:text-indigo-600 whitespace-nowrap font-medium"><i class="<?php echo $datamenu['icon'] ?>"></i> <?php echo $datamenu['name'] ?></a>
                <?php
               }
                ?>
            </div>
        </div>
    </div>