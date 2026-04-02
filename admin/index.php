<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - ShopEase</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100">

    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gradient-to-b from-indigo-800 to-indigo-900 text-white">
                <!-- Sidebar Header -->
                <div class="flex items-center justify-center h-16 bg-indigo-900 bg-opacity-50">
                    <h1 class="text-xl font-bold">ShopEase Admin</h1>
                </div>

                <!-- Admin Profile -->
                <div class="flex items-center space-x-3 px-6 py-4 border-b border-indigo-700">
                    <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center">
                        <span class="text-lg font-semibold">A</span>
                    </div>
                    <div>
                        <p class="font-semibold">Admin ShopEase</p>
                        <p class="text-xs text-indigo-300">admin@shopease.com</p>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                    <!-- Dashboard -->
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 bg-indigo-700 rounded-xl text-white">
                        <i class="fas fa-tachometer-alt w-5"></i>
                        <span>Dashboard</span>
                    </a>

                    <!-- Frontend Manager -->
                    <div class="pt-4">
                        <p class="px-4 text-xs font-semibold text-indigo-300 uppercase tracking-wider">Frontend Manager</p>
                    </div>
                    
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-images w-5"></i>
                        <span>Hero Banner</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-layer-group w-5"></i>
                        <span>Kategori</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 bg-indigo-700 text-white rounded-xl">
                        <i class="fas fa-box w-5"></i>
                        <span>Produk</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-tags w-5"></i>
                        <span>Flash Sale</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-star w-5"></i>
                        <span>Ulasan</span>
                    </a>

                    <!-- Content Manager -->
                    <div class="pt-4">
                        <p class="px-4 text-xs font-semibold text-indigo-300 uppercase tracking-wider">Konten</p>
                    </div>
                    
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-newspaper w-5"></i>
                        <span>Artikel</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-question-circle w-5"></i>
                        <span>FAQ</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-file-alt w-5"></i>
                        <span>Halaman Statis</span>
                    </a>

                    <!-- Settings -->
                    <div class="pt-4">
                        <p class="px-4 text-xs font-semibold text-indigo-300 uppercase tracking-wider">Pengaturan</p>
                    </div>
                    
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-palette w-5"></i>
                        <span>Tema & Tampilan</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-cog w-5"></i>
                        <span>Pengaturan Umum</span>
                    </a>
                </nav>

                <!-- Logout -->
                <div class="px-4 py-4 border-t border-indigo-700">
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 text-indigo-200 hover:bg-indigo-700 hover:text-white rounded-xl transition duration-200">
                        <i class="fas fa-sign-out-alt w-5"></i>
                        <span>Keluar</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-500 hover:text-indigo-600 md:hidden">
                            <i class="fas fa-bars text-xl"></i>
                        </button>
                        <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <!-- Search -->
                        <div class="relative hidden md:block">
                            <input type="text" placeholder="Cari..." 
                                   class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>

                        <!-- Notifications -->
                        <button class="relative text-gray-500 hover:text-indigo-600">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">3</span>
                        </button>

                        <!-- Messages -->
                        <button class="relative text-gray-500 hover:text-indigo-600">
                            <i class="fas fa-envelope text-xl"></i>
                            <span class="absolute -top-1 -right-1 bg-green-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">5</span>
                        </button>

                        <!-- Profile -->
                        <div class="flex items-center space-x-3">
                            <div class="w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center text-white">
                                <span class="text-sm font-semibold">A</span>
                            </div>
                            <span class="text-sm font-medium text-gray-700 hidden md:block">Admin</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto bg-gray-100 p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Total Produk</p>
                                <h3 class="text-2xl font-bold text-gray-800">2,547</h3>
                                <p class="text-xs text-green-500 mt-2">↑ 12% dari bulan lalu</p>
                            </div>
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-box text-indigo-600 text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Total Pesanan</p>
                                <h3 class="text-2xl font-bold text-gray-800">1,234</h3>
                                <p class="text-xs text-green-500 mt-2">↑ 8% dari bulan lalu</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-shopping-cart text-green-600 text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Total Pengguna</p>
                                <h3 class="text-2xl font-bold text-gray-800">45.6K</h3>
                                <p class="text-xs text-green-500 mt-2">↑ 23% dari bulan lalu</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-users text-blue-600 text-xl"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-500 mb-1">Pendapatan</p>
                                <h3 class="text-2xl font-bold text-gray-800">Rp 89.5Jt</h3>
                                <p class="text-xs text-green-500 mt-2">↑ 15% dari bulan lalu</p>
                            </div>
                            <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-dollar-sign text-yellow-600 text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Frontend Management Section -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Kelola Frontend</h3>
                    
                    <!-- Hero Banner Management -->
                    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-semibold text-gray-800">Hero Banner</h4>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                <i class="fas fa-plus mr-2"></i>Tambah Banner
                            </button>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Banner 1 -->
                            <div class="border rounded-lg overflow-hidden">
                                <img src="https://placehold.co/400x200/indigo/white?text=Banner+1" alt="Banner" class="w-full h-32 object-cover">
                                <div class="p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="font-semibold">Summer Sale 2024</h5>
                                        <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span>
                                    </div>
                                    <p class="text-sm text-gray-500 mb-3">Diskon hingga 70%</p>
                                    <div class="flex space-x-2">
                                        <button class="flex-1 bg-indigo-600 text-white py-1 rounded text-sm hover:bg-indigo-700">Edit</button>
                                        <button class="flex-1 border border-gray-300 text-gray-600 py-1 rounded text-sm hover:bg-gray-50">Nonaktifkan</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Banner 2 -->
                            <div class="border rounded-lg overflow-hidden">
                                <img src="https://placehold.co/400x200/purple/white?text=Banner+2" alt="Banner" class="w-full h-32 object-cover">
                                <div class="p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="font-semibold">Flash Sale</h5>
                                        <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span>
                                    </div>
                                    <p class="text-sm text-gray-500 mb-3">Hanya 24 jam!</p>
                                    <div class="flex space-x-2">
                                        <button class="flex-1 bg-indigo-600 text-white py-1 rounded text-sm hover:bg-indigo-700">Edit</button>
                                        <button class="flex-1 border border-gray-300 text-gray-600 py-1 rounded text-sm hover:bg-gray-50">Nonaktifkan</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Banner 3 -->
                            <div class="border rounded-lg overflow-hidden">
                                <img src="https://placehold.co/400x200/blue/white?text=Banner+3" alt="Banner" class="w-full h-32 object-cover">
                                <div class="p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <h5 class="font-semibold">New Arrivals</h5>
                                        <span class="bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded">Nonaktif</span>
                                    </div>
                                    <p class="text-sm text-gray-500 mb-3">Produk terbaru</p>
                                    <div class="flex space-x-2">
                                        <button class="flex-1 bg-indigo-600 text-white py-1 rounded text-sm hover:bg-indigo-700">Edit</button>
                                        <button class="flex-1 bg-green-600 text-white py-1 rounded text-sm hover:bg-green-700">Aktifkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category Management -->
                    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-semibold text-gray-800">Kategori Produk</h4>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                <i class="fas fa-plus mr-2"></i>Tambah Kategori
                            </button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Nama Kategori</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Ikon</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Jumlah Produk</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-3 text-sm">Elektronik</td>
                                        <td class="px-4 py-3"><i class="fas fa-tv text-indigo-600"></i></td>
                                        <td class="px-4 py-3 text-sm">856</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm">Fashion Pria</td>
                                        <td class="px-4 py-3"><i class="fas fa-tshirt text-indigo-600"></i></td>
                                        <td class="px-4 py-3 text-sm">623</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3 text-sm">Fashion Wanita</td>
                                        <td class="px-4 py-3"><i class="fas fa-female text-indigo-600"></i></td>
                                        <td class="px-4 py-3 text-sm">745</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Product Management -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h4 class="font-semibold text-gray-800">Produk Terbaru</h4>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                                <i class="fas fa-plus mr-2"></i>Tambah Produk
                            </button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Produk</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Kategori</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Harga</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Stok</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
                                        <th class="px-4 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://placehold.co/40x40/indigo/white" alt="Product" class="w-10 h-10 rounded">
                                                <span class="text-sm font-medium">Samsung Galaxy S23</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">Elektronik</td>
                                        <td class="px-4 py-3 text-sm">Rp 12.999.000</td>
                                        <td class="px-4 py-3 text-sm">45</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://placehold.co/40x40/blue/white" alt="Product" class="w-10 h-10 rounded">
                                                <span class="text-sm font-medium">iPhone 15 Pro</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">Elektronik</td>
                                        <td class="px-4 py-3 text-sm">Rp 21.999.000</td>
                                        <td class="px-4 py-3 text-sm">23</td>
                                        <td class="px-4 py-3"><span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div class="flex items-center space-x-3">
                                                <img src="https://placehold.co/40x40/purple/white" alt="Product" class="w-10 h-10 rounded">
                                                <span class="text-sm font-medium">MacBook Pro M3</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">Laptop</td>
                                        <td class="px-4 py-3 text-sm">Rp 29.999.000</td>
                                        <td class="px-4 py-3 text-sm">12</td>
                                        <td class="px-4 py-3"><span class="bg-yellow-100 text-yellow-600 text-xs px-2 py-1 rounded">Draft</span></td>
                                        <td class="px-4 py-3">
                                            <button class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-edit"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Flash Sale Management -->
                <div class="bg-white rounded-xl shadow-md p-6 mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-semibold text-gray-800">Flash Sale Management</h4>
                        <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-indigo-700 transition duration-300">
                            <i class="fas fa-plus mr-2"></i>Buat Flash Sale
                        </button>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Active Flash Sale -->
                        <div class="border rounded-lg p-4">
                            <div class="flex items-center justify-between mb-3">
                                <h5 class="font-semibold">Flash Sale Mingguan</h5>
                                <span class="bg-green-100 text-green-600 text-xs px-2 py-1 rounded">Aktif</span>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-gray-600 mb-3">
                                <span><i class="far fa-clock mr-1"></i> 24:00:00 tersisa</span>
                                <span><i class="fas fa-box mr-1"></i> 15 produk</span>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-indigo-600 text-white py-1 rounded text-sm hover:bg-indigo-700">Edit</button>
                                <button class="flex-1 border border-gray-300 text-gray-600 py-1 rounded text-sm hover:bg-gray-50">Akhiri</button>
                            </div>
                        </div>

                        <!-- Upcoming Flash Sale -->
                        <div class="border rounded-lg p-4">
                            <div class="flex items-center justify-between mb-3">
                                <h5 class="font-semibold">Flash Sale Akhir Bulan</h5>
                                <span class="bg-yellow-100 text-yellow-600 text-xs px-2 py-1 rounded">Jadwal</span>
                            </div>
                            <div class="flex items-center space-x-4 text-sm text-gray-600 mb-3">
                                <span><i class="far fa-calendar mr-1"></i> 30 Feb 2024</span>
                                <span><i class="fas fa-box mr-1"></i> 25 produk</span>
                            </div>
                            <div class="flex space-x-2">
                                <button class="flex-1 bg-indigo-600 text-white py-1 rounded text-sm hover:bg-indigo-700">Edit</button>
                                <button class="flex-1 border border-gray-300 text-gray-600 py-1 rounded text-sm hover:bg-gray-50">Batalkan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Theme Settings -->
                <div class="bg-white rounded-xl shadow-md p-6">
                    <h4 class="font-semibold text-gray-800 mb-4">Pengaturan Tema & Tampilan</h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Color Settings -->
                        <div>
                            <h5 class="text-sm font-medium text-gray-700 mb-3">Warna Tema</h5>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Warna Utama</span>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-indigo-600 rounded-full"></div>
                                        <input type="text" value="#4f46e5" class="border rounded px-2 py-1 text-sm w-24">
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Warna Sekunder</span>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-purple-600 rounded-full"></div>
                                        <input type="text" value="#9333ea" class="border rounded px-2 py-1 text-sm w-24">
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Warna Aksen</span>
                                    <div class="flex items-center space-x-2">
                                        <div class="w-6 h-6 bg-red-500 rounded-full"></div>
                                        <input type="text" value="#ef4444" class="border rounded px-2 py-1 text-sm w-24">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Layout Settings -->
                        <div>
                            <h5 class="text-sm font-medium text-gray-700 mb-3">Layout</h5>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Tampilan Produk per Baris</span>
                                    <select class="border rounded px-2 py-1 text-sm">
                                        <option>4 produk</option>
                                        <option>5 produk</option>
                                        <option>6 produk</option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Tampilan Sidebar</span>
                                    <select class="border rounded px-2 py-1 text-sm">
                                        <option>Kiri</option>
                                        <option>Kanan</option>
                                        <option>Hidden</option>
                                    </select>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm">Mode Tampilan</span>
                                    <select class="border rounded px-2 py-1 text-sm">
                                        <option>Light</option>
                                        <option>Dark</option>
                                        <option>System</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end space-x-3">
                        <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-semibold hover:bg-gray-50">Batal</button>
                        <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm font-semibold hover:bg-indigo-700">Simpan Perubahan</button>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>