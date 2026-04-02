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
        
                <!-- Admin Profile -->
                

                <!-- Navigation -->
                <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
                    <!-- Dashboard -->
                    

                    <!-- Frontend Manager -->
                    

                    <!-- Content Manager -->
                    
                    <!-- Settings -->
                    

                <!-- Logout -->
                
        <!-- Main Content -->
        
                        <!-- Search -->
                        

                        <!-- Notifications -->
                        

                        <!-- Messages -->
                        

                        <!-- Profile -->
                        

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto bg-gray-100 p-6">
                <!-- Stats Cards -->
                
                <!-- Frontend Management Section -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Kelola Frontend</h3>
                    
                    <!-- Hero Banner Management -->
                    

                    <!-- Category Management -->
                   
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