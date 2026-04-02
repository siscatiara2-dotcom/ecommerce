<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - E-Commerce Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <!-- Navbar (sama dengan sebelumnya) -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <h1 class="text-2xl font-bold text-indigo-600">ShopEase</h1>
                </div>
                <div class="hidden md:flex flex-1 max-w-2xl mx-8">
                    <div class="relative w-full">
                        <input type="text" placeholder="Cari produk impian Anda..." 
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <button class="absolute right-2 top-2 text-gray-400 hover:text-indigo-600">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <button class="text-gray-600 hover:text-indigo-600 relative">
                        <i class="far fa-heart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                    </button>
                    <button class="text-gray-600 hover:text-indigo-600 relative">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-indigo-600 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">5</span>
                    </button>
                    <button class="text-gray-600 hover:text-indigo-600">
                        <i class="far fa-user-circle text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center space-x-2 text-sm text-gray-500">
            <a href="#" class="hover:text-indigo-600">Beranda</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="#" class="hover:text-indigo-600">Elektronik</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="#" class="hover:text-indigo-600">Smartphone</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gray-700 font-medium">Smartphone Pro Max 256GB</span>
        </div>
    </div>

    <!-- Product Detail Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 p-6 lg:p-8">
                
                <!-- Product Images Gallery -->
                <div class="space-y-4">
                    <div class="main-image bg-gray-100 rounded-2xl overflow-hidden">
                        <img src="https://placehold.co/600x600/indigo/white?text=Smartphone+Pro+Max" alt="Product Main" class="w-full h-auto object-cover">
                    </div>
                    <div class="grid grid-cols-4 gap-3">
                        <div class="bg-gray-100 rounded-lg overflow-hidden cursor-pointer border-2 border-indigo-600">
                            <img src="https://placehold.co/150x150/indigo/white?text=1" alt="Thumbnail 1" class="w-full h-auto">
                        </div>
                        <div class="bg-gray-100 rounded-lg overflow-hidden cursor-pointer hover:border-2 hover:border-indigo-600">
                            <img src="https://placehold.co/150x150/blue/white?text=2" alt="Thumbnail 2" class="w-full h-auto">
                        </div>
                        <div class="bg-gray-100 rounded-lg overflow-hidden cursor-pointer hover:border-2 hover:border-indigo-600">
                            <img src="https://placehold.co/150x150/purple/white?text=3" alt="Thumbnail 3" class="w-full h-auto">
                        </div>
                        <div class="bg-gray-100 rounded-lg overflow-hidden cursor-pointer hover:border-2 hover:border-indigo-600">
                            <img src="https://placehold.co/150x150/green/white?text=4" alt="Thumbnail 4" class="w-full h-auto">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="space-y-6">
                    <!-- Badge dan Brand -->
                    <div class="flex items-center space-x-3">
                        <span class="bg-red-100 text-red-600 text-xs font-semibold px-3 py-1 rounded-full">TERLARIS</span>
                        <span class="bg-green-100 text-green-600 text-xs font-semibold px-3 py-1 rounded-full">GARANSI RESMI</span>
                        <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full">BEST SELLER</span>
                    </div>

                    <!-- Product Title -->
                    <h1 class="text-3xl font-bold text-gray-800">Smartphone Pro Max 256GB</h1>
                    
                    <!-- Rating -->
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star-half-alt text-yellow-400"></i>
                            <span class="ml-2 text-gray-600">4.8 (2.456 ulasan)</span>
                        </div>
                        <span class="text-gray-300">|</span>
                        <span class="text-gray-600"><i class="far fa-check-circle text-green-500 mr-1"></i> 1.2RB Terjual</span>
                    </div>

                    <!-- Price -->
                    <div class="space-y-2">
                        <div class="flex items-center space-x-3">
                            <span class="text-3xl font-bold text-indigo-600">Rp 12.999.000</span>
                            <span class="text-lg text-gray-400 line-through">Rp 15.999.000</span>
                            <span class="bg-red-500 text-white px-2 py-1 rounded-lg text-sm font-semibold">-19%</span>
                        </div>
                        <p class="text-green-600 text-sm"><i class="fas fa-clock mr-1"></i> Hemat Rp 3.000.000</p>
                    </div>

                    <!-- Short Description -->
                    <div class="border-t border-b border-gray-200 py-4">
                        <p class="text-gray-600 leading-relaxed">
                            Smartphone flagship dengan kamera 108MP, layar Super AMOLED 120Hz, dan baterai 5000mAh. 
                            Dilengkapi dengan prosesor tercepat untuk pengalaman gaming dan multitasking yang luar biasa.
                        </p>
                    </div>

                    <!-- Variants -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Warna:</label>
                            <div class="flex space-x-3">
                                <button class="w-10 h-10 rounded-full bg-black border-2 border-indigo-600 ring-2 ring-indigo-600 ring-offset-2"></button>
                                <button class="w-10 h-10 rounded-full bg-gray-400 hover:border-2 hover:border-indigo-600"></button>
                                <button class="w-10 h-10 rounded-full bg-blue-500 hover:border-2 hover:border-indigo-600"></button>
                                <button class="w-10 h-10 rounded-full bg-red-500 hover:border-2 hover:border-indigo-600"></button>
                                <button class="w-10 h-10 rounded-full bg-purple-500 hover:border-2 hover:border-indigo-600"></button>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Penyimpanan:</label>
                            <div class="flex space-x-3">
                                <button class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-lg font-medium bg-indigo-50">128GB</button>
                                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg font-medium hover:border-indigo-600">256GB</button>
                                <button class="px-4 py-2 border border-gray-300 text-gray-700 rounded-lg font-medium hover:border-indigo-600">512GB</button>
                            </div>
                        </div>
                    </div>

                    <!-- Quantity & Actions -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <label class="text-sm font-semibold text-gray-700">Jumlah:</label>
                            <div class="flex items-center border border-gray-300 rounded-lg">
                                <button class="px-3 py-2 text-gray-600 hover:text-indigo-600"><i class="fas fa-minus"></i></button>
                                <input type="text" value="1" class="w-16 text-center border-x border-gray-300 py-2 focus:outline-none">
                                <button class="px-3 py-2 text-gray-600 hover:text-indigo-600"><i class="fas fa-plus"></i></button>
                            </div>
                            <span class="text-gray-500 text-sm">Stok: 50+ tersedia</span>
                        </div>

                        <div class="flex space-x-4">
                            <button class="flex-1 bg-indigo-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300 flex items-center justify-center space-x-2">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Tambah ke Keranjang</span>
                            </button>
                            <button class="flex-1 bg-orange-500 text-white py-3 px-6 rounded-lg font-semibold hover:bg-orange-600 transition duration-300 flex items-center justify-center space-x-2">
                                <i class="fas fa-bolt"></i>
                                <span>Beli Sekarang</span>
                            </button>
                            <button class="p-3 border border-gray-300 rounded-lg hover:border-red-500 hover:text-red-500 transition duration-300">
                                <i class="far fa-heart text-xl"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Delivery Info -->
                    <div class="bg-gray-50 rounded-xl p-4 space-y-3">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-truck text-indigo-600"></i>
                            <span class="text-sm text-gray-600">Pengiriman ke <span class="font-semibold">Jakarta Pusat</span></span>
                            <button class="text-indigo-600 text-sm hover:underline">Ubah</button>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-shield-alt text-green-600"></i>
                            <span class="text-sm text-gray-600">Garansi 1 Tahun Resmi</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-rotate-left text-blue-600"></i>
                            <span class="text-sm text-gray-600">Bebas pengembalian 30 hari</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Details Tabs -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <!-- Tab Headers -->
            <div class="border-b border-gray-200">
                <div class="flex space-x-8 px-6 overflow-x-auto">
                    <button class="py-4 px-2 border-b-2 border-indigo-600 text-indigo-600 font-semibold whitespace-nowrap">Deskripsi</button>
                    <button class="py-4 px-2 text-gray-500 hover:text-indigo-600 font-semibold whitespace-nowrap">Spesifikasi</button>
                    <button class="py-4 px-2 text-gray-500 hover:text-indigo-600 font-semibold whitespace-nowrap">Ulasan (2.456)</button>
                    <button class="py-4 px-2 text-gray-500 hover:text-indigo-600 font-semibold whitespace-nowrap">Diskusi</button>
                    <button class="py-4 px-2 text-gray-500 hover:text-indigo-600 font-semibold whitespace-nowrap">Garansi</button>
                </div>
            </div>

            <!-- Tab Content - Deskripsi -->
            <div class="p-6">
                <div class="prose max-w-none">
                    <h3 class="text-xl font-semibold mb-4">Deskripsi Produk</h3>
                    <p class="text-gray-600 mb-4">
                        Smartphone Pro Max 256GB adalah pilihan tepat bagi Anda yang menginginkan performa terbaik 
                        dalam genggaman. Dengan desain premium dan teknologi terkini, smartphone ini siap menemani 
                        aktivitas sehari-hari Anda.
                    </p>
                    
                    <h4 class="font-semibold text-gray-800 mb-2">Fitur Unggulan:</h4>
                    <ul class="list-disc pl-5 text-gray-600 space-y-1 mb-4">
                        <li>Layar Super AMOLED 6.7 inci dengan refresh rate 120Hz</li>
                        <li>Triple camera 108MP + 12MP + 12MP dengan fitur night mode</li>
                        <li>Prosesor tercepat dengan RAM 8GB</li>
                        <li>Baterai 5000mAh dengan fast charging 65W</li>
                        <li>IP68 tahan air dan debu</li>
                    </ul>

                    <h4 class="font-semibold text-gray-800 mb-2">Isi Paket:</h4>
                    <ul class="list-disc pl-5 text-gray-600 space-y-1">
                        <li>1 unit Smartphone Pro Max</li>
                        <li>1 buah charger fast charging 65W</li>
                        <li>1 buah kabel USB-C</li>
                        <li>1 buah casing silikon</li>
                        <li>Buku panduan dan kartu garansi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Spesifikasi Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h3 class="text-xl font-semibold mb-6">Spesifikasi Lengkap</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div class="flex py-2 border-b border-gray-100">
                        <span class="w-1/3 text-gray-500">Ukuran Layar</span>
                        <span class="w-2/3 text-gray-800 font-medium">6.7 inch Super AMOLED</span>
                    </div>
                    <div class="flex py-2 border-b border-gray-100">
                        <span class="w-1/3 text-gray-500">Resolusi</span>
                        <span class="w-2/3 text-gray-800 font-medium">1440 x 3200 pixels</span>
                    </div>
                    <div class="flex py-2 border-b border-gray-100">
                        <span class="w-1/3 text-gray-500">Prosesor</span>
                        <span class="w-2/3 text-gray-800 font-medium">Octa-core 3.2 GHz</span>
                    </div>
                    <div class="flex py-2 border-b border-gray-100">
                        <span class="w-1/3 text-gray-500">RAM</span>
                        <span class="w-2/3 text-gray-800 font-medium">8GB</span>
                    </div>
                </div>
                <div class="space-y-4">
                    <div class="flex py-2 border-b border-gray-100">
                        <span class="w-1/3 text-gray-500">Memori Internal</span>
                        <span class="w-2/3 text-gray-800 font-medium">256GB</span>
                    </div>
                    <div class="flex py-2 border-b border-gray-100">
                        <span class="w-1/3 text-gray-500">Kamera Belakang</span>
                        <span class="w-2/3 text-gray-800 font-medium">108MP + 12MP + 12MP</span>
                    </div>
                    <div class="flex py-2 border-b border-gray-100">
                        <span class="w-1/3 text-gray-500">Kamera Depan</span>
                        <span class="w-2/3 text-gray-800 font-medium">32MP</span>
                    </div>
                    <div class="flex py-2 border-b border-gray-100">
                        <span class="w-1/3 text-gray-500">Baterai</span>
                        <span class="w-2/3 text-gray-800 font-medium">5000 mAh</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h3 class="text-xl font-semibold">Ulasan Pembeli</h3>
                <button class="text-indigo-600 hover:text-indigo-700 font-medium">Lihat Semua <i class="fas fa-arrow-right ml-1"></i></button>
            </div>

            <!-- Rating Summary -->
            <div class="flex items-center space-x-8 mb-8 p-4 bg-gray-50 rounded-xl">
                <div class="text-center">
                    <span class="text-4xl font-bold text-gray-800">4.8</span>
                    <span class="text-gray-500 block">dari 5</span>
                    <div class="flex items-center mt-1">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star-half-alt text-yellow-400"></i>
                    </div>
                </div>
                <div class="flex-1 space-y-2">
                    <div class="flex items-center space-x-2">
                        <span class="text-sm w-12">5 Star</span>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-yellow-400" style="width: 85%"></div>
                        </div>
                        <span class="text-sm text-gray-600">85%</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm w-12">4 Star</span>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-yellow-400" style="width: 10%"></div>
                        </div>
                        <span class="text-sm text-gray-600">10%</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-sm w-12">3 Star</span>
                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="h-full bg-yellow-400" style="width: 3%"></div>
                        </div>
                        <span class="text-sm text-gray-600">3%</span>
                    </div>
                </div>
            </div>

            <!-- Review Items -->
            <div class="space-y-6">
                <!-- Review 1 -->
                <div class="border-b border-gray-100 pb-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-indigo-100 rounded-full flex items-center justify-center">
                            <span class="text-indigo-600 font-semibold">A</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold">Andi Pratama</h4>
                                <span class="text-sm text-gray-400">2 hari yang lalu</span>
                            </div>
                            <div class="flex items-center mt-1">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                            </div>
                            <p class="text-gray-600 mt-2">Produk sangat bagus, sesuai deskripsi. Pengiriman cepat, packing aman. Recommended banget!</p>
                            <div class="flex items-center space-x-4 mt-3">
                                <button class="text-sm text-gray-500 hover:text-indigo-600"><i class="far fa-thumbs-up mr-1"></i> Membantu (12)</button>
                                <button class="text-sm text-gray-500 hover:text-indigo-600"><i class="far fa-comment mr-1"></i> Balas</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="border-b border-gray-100 pb-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                            <span class="text-purple-600 font-semibold">S</span>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h4 class="font-semibold">Sarah Wijaya</h4>
                                <span class="text-sm text-gray-400">5 hari yang lalu</span>
                            </div>
                            <div class="flex items-center mt-1">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                            </div>
                            <p class="text-gray-600 mt-2">Kameranya jernih banget, cocok buat content creator. Baterai tahan seharian penuh.</p>
                            <div class="flex items-center space-x-4 mt-3">
                                <button class="text-sm text-gray-500 hover:text-indigo-600"><i class="far fa-thumbs-up mr-1"></i> Membantu (8)</button>
                                <button class="text-sm text-gray-500 hover:text-indigo-600"><i class="far fa-comment mr-1"></i> Balas</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Produk Terkait</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            <!-- Related Product 1 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/indigo/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Smartphone Pro 128GB</h3>
                    <p class="text-indigo-600 font-bold">Rp 8.999.000</p>
                </div>
            </div>

            <!-- Related Product 2 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/purple/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Smartwatch Series 5</h3>
                    <p class="text-indigo-600 font-bold">Rp 3.499.000</p>
                </div>
            </div>

            <!-- Related Product 3 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/blue/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Wireless Earbuds</h3>
                    <p class="text-indigo-600 font-bold">Rp 1.299.000</p>
                </div>
            </div>

            <!-- Related Product 4 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/green/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Power Bank 20000mAh</h3>
                    <p class="text-indigo-600 font-bold">Rp 499.000</p>
                </div>
            </div>

            <!-- Related Product 5 -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition duration-300">
                <img src="https://placehold.co/300x300/yellow/white?text=Produk" alt="Product" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-3">
                    <h3 class="font-semibold text-sm text-gray-800 mb-1">Tempered Glass</h3>
                    <p class="text-indigo-600 font-bold">Rp 89.000</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">ShopEase</h3>
                    <p class="text-gray-400">Belanja mudah, aman, dan nyaman</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Informasi</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-white">Cara Berbelanja</a></li>
                        <li><a href="#" class="hover:text-white">Kebijakan Privasi</a></li>
                        <li><a href="#" class="hover:text-white">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Layanan</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white">Bantuan</a></li>
                        <li><a href="#" class="hover:text-white">Pengembalian Barang</a></li>
                        <li><a href="#" class="hover:text-white">Cek Ongkir</a></li>
                        <li><a href="#" class="hover:text-white">Lacak Pesanan</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2"></i> 1500-123</li>
                        <li><i class="fas fa-envelope mr-2"></i> cs@shopease.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 ShopEase. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>