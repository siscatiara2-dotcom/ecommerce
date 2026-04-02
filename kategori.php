<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk - E-Commerce Profesional</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
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

    <!-- Category Header -->
    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <h1 class="text-4xl font-bold mb-4">Elektronik</h1>
            <p class="text-xl text-indigo-100">Temukan gadget dan elektronik terbaru dengan harga terbaik</p>
            
            <!-- Category Stats -->
            <div class="flex items-center space-x-8 mt-6">
                <div>
                    <span class="text-2xl font-bold">2.547</span>
                    <span class="text-indigo-200 ml-2">Produk</span>
                </div>
                <div>
                    <span class="text-2xl font-bold">128</span>
                    <span class="text-indigo-200 ml-2">Merek</span>
                </div>
                <div>
                    <span class="text-2xl font-bold">15K+</span>
                    <span class="text-indigo-200 ml-2">Ulasan</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center space-x-2 text-sm text-gray-500">
            <a href="#" class="hover:text-indigo-600">Beranda</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-gray-700 font-medium">Elektronik</span>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar Filters -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-24">
                    <h3 class="font-bold text-lg mb-4">Filter</h3>
                    
                    <!-- Category Filter -->
                    <div class="mb-6">
                        <h4 class="font-semibold mb-3">Kategori</h4>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Smartphone (856)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Laptop (423)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Tablet (234)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Aksesoris (567)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Audio (312)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Smartwatch (155)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Price Range -->
                    <div class="mb-6">
                        <h4 class="font-semibold mb-3">Rentang Harga</h4>
                        <div class="space-y-3">
                            <input type="range" min="0" max="10000000" value="5000000" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            <div class="flex justify-between text-sm text-gray-600">
                                <span>Rp 0</span>
                                <span>Rp 5 Jt</span>
                                <span>Rp 10 Jt+</span>
                            </div>
                            <div class="flex space-x-2">
                                <input type="text" placeholder="Min" class="w-1/2 px-3 py-2 border border-gray-300 rounded-lg text-sm">
                                <input type="text" placeholder="Max" class="w-1/2 px-3 py-2 border border-gray-300 rounded-lg text-sm">
                            </div>
                        </div>
                    </div>

                    <!-- Brand Filter -->
                    <div class="mb-6">
                        <h4 class="font-semibold mb-3">Merek</h4>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Samsung (234)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Apple (189)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Xiaomi (156)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Oppo (98)</span>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 rounded">
                                <span class="text-gray-700">Vivo (87)</span>
                            </label>
                        </div>
                    </div>

                    <!-- Rating Filter -->
                    <div class="mb-6">
                        <h4 class="font-semibold mb-3">Rating</h4>
                        <div class="space-y-2">
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="rating" class="form-radio h-4 w-4 text-indigo-600">
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <span class="ml-2 text-gray-600">5 (1.234)</span>
                                </div>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="rating" class="form-radio h-4 w-4 text-indigo-600">
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="far fa-star text-yellow-400"></i>
                                    <span class="ml-2 text-gray-600">4+ (2.567)</span>
                                </div>
                            </label>
                            <label class="flex items-center space-x-3">
                                <input type="radio" name="rating" class="form-radio h-4 w-4 text-indigo-600">
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="far fa-star text-yellow-400"></i>
                                    <i class="far fa-star text-yellow-400"></i>
                                    <span class="ml-2 text-gray-600">3+ (890)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex space-x-3">
                        <button class="flex-1 bg-indigo-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300">
                            Terapkan
                        </button>
                        <button class="flex-1 border border-gray-300 text-gray-600 py-2 px-4 rounded-lg font-semibold hover:bg-gray-50 transition duration-300">
                            Reset
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="lg:w-3/4">
                <!-- Sort and View Options -->
                <div class="bg-white rounded-2xl shadow-lg p-4 mb-6">
                    <div class="flex flex-col sm:flex-row justify-between items-center space-y-4 sm:space-y-0">
                        <div class="flex items-center space-x-4">
                            <span class="text-gray-600">Menampilkan 1-12 dari 2.547 produk</span>
                            <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                <option>Urutkan: Terpopuler</option>
                                <option>Urutkan: Termurah</option>
                                <option>Urutkan: Termahal</option>
                                <option>Urutkan: Terbaru</option>
                                <option>Urutkan: Rating Tertinggi</option>
                            </select>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="p-2 bg-indigo-100 text-indigo-600 rounded-lg">
                                <i class="fas fa-th-large"></i>
                            </button>
                            <button class="p-2 text-gray-400 hover:bg-gray-100 rounded-lg">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Active Filters -->
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-sm flex items-center">
                        Smartphone <i class="fas fa-times ml-2 cursor-pointer"></i>
                    </span>
                    <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-sm flex items-center">
                        Rp 1 Jt - Rp 5 Jt <i class="fas fa-times ml-2 cursor-pointer"></i>
                    </span>
                    <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-sm flex items-center">
                        Samsung <i class="fas fa-times ml-2 cursor-pointer"></i>
                    </span>
                    <span class="bg-indigo-100 text-indigo-600 px-3 py-1 rounded-full text-sm flex items-center">
                        Hapus Semua
                    </span>
                </div>

                <!-- Product Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Product Card 1 -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 group">
                        <div class="relative overflow-hidden rounded-t-2xl">
                            <img src="https://placehold.co/400x400/indigo/white?text=Smartphone" alt="Product" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            <span class="absolute top-3 left-3 bg-red-500 text-white text-xs px-2 py-1 rounded-full">-20%</span>
                            <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 transition duration-300">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2 hover:text-indigo-600">Samsung Galaxy S23 Ultra</h3>
                            <div class="flex items-center mb-2">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                                <span class="text-gray-400 text-xs ml-1">(234)</span>
                            </div>
                            <div class="flex items-center space-x-2 mb-3">
                                <span class="text-lg font-bold text-indigo-600">Rp 12.999.000</span>
                                <span class="text-sm text-gray-400 line-through">Rp 15.999.000</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500"><i class="fas fa-map-marker-alt mr-1"></i> Jakarta</span>
                                <span class="text-xs text-green-600"><i class="fas fa-check-circle mr-1"></i> Garansi Resmi</span>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <button class="flex-1 bg-indigo-600 text-white py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                    <i class="fas fa-shopping-cart mr-1"></i> Keranjang
                                </button>
                                <button class="w-10 bg-gray-100 text-gray-600 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition duration-300">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 group">
                        <div class="relative overflow-hidden rounded-t-2xl">
                            <img src="https://placehold.co/400x400/blue/white?text=iPhone" alt="Product" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            <span class="absolute top-3 left-3 bg-green-500 text-white text-xs px-2 py-1 rounded-full">New</span>
                            <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 transition duration-300">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2 hover:text-indigo-600">iPhone 15 Pro Max</h3>
                            <div class="flex items-center mb-2">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-gray-400 text-xs ml-1">(567)</span>
                            </div>
                            <div class="flex items-center space-x-2 mb-3">
                                <span class="text-lg font-bold text-indigo-600">Rp 21.999.000</span>
                                <span class="text-sm text-gray-400 line-through">Rp 24.999.000</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500"><i class="fas fa-map-marker-alt mr-1"></i> Jakarta</span>
                                <span class="text-xs text-green-600"><i class="fas fa-check-circle mr-1"></i> Garansi Resmi</span>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <button class="flex-1 bg-indigo-600 text-white py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                    <i class="fas fa-shopping-cart mr-1"></i> Keranjang
                                </button>
                                <button class="w-10 bg-gray-100 text-gray-600 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition duration-300">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 group">
                        <div class="relative overflow-hidden rounded-t-2xl">
                            <img src="https://placehold.co/400x400/purple/white?text=Laptop" alt="Product" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            <span class="absolute top-3 left-3 bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">Best</span>
                            <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 transition duration-300">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2 hover:text-indigo-600">MacBook Pro M3</h3>
                            <div class="flex items-center mb-2">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                                <span class="text-gray-400 text-xs ml-1">(189)</span>
                            </div>
                            <div class="flex items-center space-x-2 mb-3">
                                <span class="text-lg font-bold text-indigo-600">Rp 29.999.000</span>
                                <span class="text-sm text-gray-400 line-through">Rp 32.999.000</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500"><i class="fas fa-map-marker-alt mr-1"></i> Jakarta</span>
                                <span class="text-xs text-green-600"><i class="fas fa-check-circle mr-1"></i> Garansi Resmi</span>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <button class="flex-1 bg-indigo-600 text-white py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                    <i class="fas fa-shopping-cart mr-1"></i> Keranjang
                                </button>
                                <button class="w-10 bg-gray-100 text-gray-600 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition duration-300">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 group">
                        <div class="relative overflow-hidden rounded-t-2xl">
                            <img src="https://placehold.co/400x400/green/white?text=Tablet" alt="Product" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 transition duration-300">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2 hover:text-indigo-600">iPad Pro 12.9</h3>
                            <div class="flex items-center mb-2">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="far fa-star text-yellow-400 text-xs"></i>
                                <span class="text-gray-400 text-xs ml-1">(98)</span>
                            </div>
                            <div class="flex items-center space-x-2 mb-3">
                                <span class="text-lg font-bold text-indigo-600">Rp 15.999.000</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500"><i class="fas fa-map-marker-alt mr-1"></i> Jakarta</span>
                                <span class="text-xs text-green-600"><i class="fas fa-check-circle mr-1"></i> Garansi Resmi</span>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <button class="flex-1 bg-indigo-600 text-white py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                    <i class="fas fa-shopping-cart mr-1"></i> Keranjang
                                </button>
                                <button class="w-10 bg-gray-100 text-gray-600 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition duration-300">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 5 -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 group">
                        <div class="relative overflow-hidden rounded-t-2xl">
                            <img src="https://placehold.co/400x400/orange/white?text=Watch" alt="Product" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            <span class="absolute top-3 left-3 bg-red-500 text-white text-xs px-2 py-1 rounded-full">-15%</span>
                            <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 transition duration-300">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2 hover:text-indigo-600">Apple Watch Series 9</h3>
                            <div class="flex items-center mb-2">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
                                <span class="text-gray-400 text-xs ml-1">(345)</span>
                            </div>
                            <div class="flex items-center space-x-2 mb-3">
                                <span class="text-lg font-bold text-indigo-600">Rp 7.999.000</span>
                                <span class="text-sm text-gray-400 line-through">Rp 9.499.000</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500"><i class="fas fa-map-marker-alt mr-1"></i> Jakarta</span>
                                <span class="text-xs text-green-600"><i class="fas fa-check-circle mr-1"></i> Garansi Resmi</span>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <button class="flex-1 bg-indigo-600 text-white py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                    <i class="fas fa-shopping-cart mr-1"></i> Keranjang
                                </button>
                                <button class="w-10 bg-gray-100 text-gray-600 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition duration-300">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 6 -->
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 group">
                        <div class="relative overflow-hidden rounded-t-2xl">
                            <img src="https://placehold.co/400x400/red/white?text=Audio" alt="Product" class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                            <button class="absolute top-3 right-3 w-8 h-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:text-red-500 transition duration-300">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 mb-2 hover:text-indigo-600">Sony WH-1000XM5</h3>
                            <div class="flex items-center mb-2">
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <i class="fas fa-star text-yellow-400 text-xs"></i>
                                <span class="text-gray-400 text-xs ml-1">(432)</span>
                            </div>
                            <div class="flex items-center space-x-2 mb-3">
                                <span class="text-lg font-bold text-indigo-600">Rp 4.599.000</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-500"><i class="fas fa-map-marker-alt mr-1"></i> Jakarta</span>
                                <span class="text-xs text-green-600"><i class="fas fa-check-circle mr-1"></i> Garansi Resmi</span>
                            </div>
                            <div class="mt-3 flex space-x-2">
                                <button class="flex-1 bg-indigo-600 text-white py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                    <i class="fas fa-shopping-cart mr-1"></i> Keranjang
                                </button>
                                <button class="w-10 bg-gray-100 text-gray-600 rounded-lg hover:bg-indigo-100 hover:text-indigo-600 transition duration-300">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-8">
                    <nav class="flex items-center space-x-2">
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition duration-300">
                            <i class="fas fa-chevron-left text-sm"></i>
                        </button>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg bg-indigo-600 text-white">1</button>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition duration-300">2</button>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition duration-300">3</button>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition duration-300">4</button>
                        <span class="text-gray-400">...</span>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition duration-300">10</button>
                        <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-300 text-gray-600 hover:bg-indigo-600 hover:text-white hover:border-indigo-600 transition duration-300">
                            <i class="fas fa-chevron-right text-sm"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Features -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 text-center shadow-md">
                <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-truck text-indigo-600 text-xl"></i>
                </div>
                <h4 class="font-semibold mb-2">Gratis Ongkir</h4>
                <p class="text-sm text-gray-500">Min. belanja Rp 100rb</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-md">
                <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-indigo-600 text-xl"></i>
                </div>
                <h4 class="font-semibold mb-2">Garansi 100%</h4>
                <p class="text-sm text-gray-500">Barang original</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-md">
                <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-undo-alt text-indigo-600 text-xl"></i>
                </div>
                <h4 class="font-semibold mb-2">Mudah Return</h4>
                <p class="text-sm text-gray-500">30 hari pengembalian</p>
            </div>
            <div class="bg-white rounded-xl p-6 text-center shadow-md">
                <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-indigo-600 text-xl"></i>
                </div>
                <h4 class="font-semibold mb-2">Support 24/7</h4>
                <p class="text-sm text-gray-500">CS siap membantu</p>
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