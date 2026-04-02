<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ShopEase Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 min-h-screen">

    <!-- Container utama dengan efek blur background -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <!-- Dekorasi lingkaran blur -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-0 left-1/2 w-96 h-96 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>

        <!-- Card Login -->
        <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl w-full max-w-md p-8 relative z-10 border border-white/20">
            
            <!-- Logo dan Header -->
            <div class="text-center mb-8">
                <div class="inline-block p-4 bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl mb-4 shadow-lg">
                    <i class="fas fa-store text-white text-3xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-2">ShopEase Admin</h2>
                <p class="text-gray-500">Masuk untuk mengelola toko Anda</p>
            </div>

            <!-- Form Login -->
            <form class="space-y-6">
                <!-- Email Input -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-400"></i>
                        </div>
                        <input type="email" 
                               class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition duration-200"
                               placeholder="admin@shopease.com"
                               value="admin@shopease.com">
                    </div>
                </div>

                <!-- Password Input -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-400"></i>
                        </div>
                        <input type="password" 
                               class="block w-full pl-10 pr-10 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-600 focus:border-transparent transition duration-200"
                               placeholder="••••••••"
                               value="password123">
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <i class="fas fa-eye text-gray-400 hover:text-indigo-600 cursor-pointer"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
                    </div>
                    <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800 font-medium">Lupa password?</a>
                </div>

                <!-- Login Button -->
                <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-xl font-semibold hover:from-indigo-700 hover:to-purple-700 transform hover:scale-[1.02] transition duration-300 shadow-lg">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Masuk ke Dashboard
                </button>

                <!-- Demo Credentials -->
                <div class="bg-indigo-50 rounded-xl p-4 border border-indigo-100">
                    <p class="text-xs font-semibold text-indigo-800 mb-2"><i class="fas fa-info-circle mr-1"></i>Demo Credentials:</p>
                    <div class="flex justify-between text-xs text-indigo-600">
                        <span>Email: admin@shopease.com</span>
                        <span>Password: password123</span>
                    </div>
                </div>

                <!-- 2FA Option -->
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">Atau masuk dengan</span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="grid grid-cols-3 gap-3">
                    <button class="flex justify-center items-center py-2.5 border border-gray-300 rounded-xl hover:bg-gray-50 transition duration-200">
                        <i class="fab fa-google text-red-500"></i>
                    </button>
                    <button class="flex justify-center items-center py-2.5 border border-gray-300 rounded-xl hover:bg-gray-50 transition duration-200">
                        <i class="fab fa-facebook-f text-blue-600"></i>
                    </button>
                    <button class="flex justify-center items-center py-2.5 border border-gray-300 rounded-xl hover:bg-gray-50 transition duration-200">
                        <i class="fab fa-microsoft text-blue-500"></i>
                    </button>
                </div>
            </form>

            <!-- Sign Up Link -->
            <p class="text-center text-sm text-gray-500 mt-6">
                Belum punya akun? 
                <a href="#" class="text-indigo-600 hover:text-indigo-800 font-semibold">Hubungi Admin</a>
            </p>
        </div>
    </div>

    <!-- CSS untuk animasi -->
    <style>
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob {
            animation: blob 7s infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>

    <!-- =========== ALTERNATIF DESAIN 2 : DARK MODE =========== -->
    <div class="min-h-screen flex items-center justify-center p-4 mt-12 bg-gray-900">
        <div class="bg-gray-800 rounded-3xl shadow-2xl w-full max-w-md p-8 border border-gray-700">
            <div class="text-center mb-8">
                <div class="inline-block p-4 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl mb-4">
                    <i class="fas fa-crown text-white text-3xl"></i>
                </div>
                <h2 class="text-3xl font-bold text-white mb-2">Welcome Back</h2>
                <p class="text-gray-400">Masuk ke akun premium Anda</p>
            </div>

            <form class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                    <input type="email" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-xl text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="your@email.com">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input type="password" class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-xl text-white focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="••••••••">
                </div>
                <button class="w-full bg-gradient-to-r from-blue-500 to-cyan-500 text-white py-3 rounded-xl font-semibold hover:from-blue-600 hover:to-cyan-600 transition duration-300">
                    <i class="fas fa-rocket mr-2"></i>Login
                </button>
            </form>
        </div>
    </div>

    <!-- =========== ALTERNATIF DESAIN 3 : MODERN MINIMALIS =========== -->
    <div class="min-h-screen flex items-center justify-center p-4 mt-12 bg-white">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-light text-gray-900 mb-2">Sign In</h1>
                <p class="text-gray-500">Masuk ke akun Anda</p>
            </div>

            <form class="space-y-6">
                <div class="space-y-4">
                    <input type="email" placeholder="Email address" class="w-full px-0 py-3 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black text-lg transition-colors">
                    <input type="password" placeholder="Password" class="w-full px-0 py-3 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black text-lg transition-colors">
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-black focus:ring-black">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-gray-600 hover:text-black">Forgot password?</a>
                </div>

                <button class="w-full bg-black text-white py-4 rounded-full font-medium hover:bg-gray-800 transition duration-300 text-lg">
                    Sign In
                </button>

                <p class="text-center text-gray-500">
                    Don't have an account? 
                    <a href="#" class="text-black font-medium">Contact admin</a>
                </p>
            </form>
        </div>
    </div>

    <!-- =========== ALTERNATIF DESAIN 4 : SPLIT SCREEN =========== -->
    <div class="min-h-screen flex mt-12">
        <!-- Left side - Branding -->
        <div class="hidden lg:block lg:w-1/2 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 text-white p-12 flex items-center justify-center">
            <div class="max-w-md text-center">
                <div class="inline-block p-6 bg-white/10 rounded-full mb-8 backdrop-blur-lg">
                    <i class="fas fa-shopping-bag text-6xl"></i>
                </div>
                <h2 class="text-4xl font-bold mb-4">ShopEase Dashboard</h2>
                <p class="text-xl text-indigo-200 mb-8">Kelola toko online Anda dengan mudah dan efisien</p>
                <div class="space-y-4 text-left bg-white/10 rounded-2xl p-6 backdrop-blur-lg">
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-check-circle text-green-300"></i>
                        <span>Manajemen produk real-time</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-check-circle text-green-300"></i>
                        <span>Analitik penjualan lengkap</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <i class="fas fa-check-circle text-green-300"></i>
                        <span>Kelola pesanan dengan mudah</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-gray-50">
            <div class="w-full max-w-md">
                <div class="text-center lg:text-left mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Welcome back</h2>
                    <p class="text-gray-500">Silakan masuk ke akun Anda</p>
                </div>

                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="nama@perusahaan.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input type="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="••••••••">
                    </div>

                    <button class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300">
                        Sign In
                    </button>
                </form>

                <!-- Testimonial -->
                <div class="mt-8 p-4 bg-white rounded-lg border border-gray-200">
                    <p class="text-sm text-gray-500 italic">"Dashboard yang sangat membantu untuk mengelola toko online. Fiturnya lengkap dan mudah digunakan."</p>
                    <div class="flex items-center mt-3">
                        <div class="w-8 h-8 bg-indigo-600 rounded-full flex items-center justify-center text-white text-xs font-bold">A</div>
                        <div class="ml-2">
                            <p class="text-sm font-semibold">Ahmad Fauzi</p>
                            <p class="text-xs text-gray-400">Owner FashionStore</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== ALTERNATIF DESAIN 5 : CARD MODERN =========== -->
    <div class="min-h-screen flex items-center justify-center p-4 mt-12 bg-gradient-to-br from-amber-100 to-orange-100">
        <div class="bg-white rounded-3xl shadow-xl w-full max-w-md overflow-hidden">
            <!-- Header dengan wave -->
            <div class="bg-gradient-to-r from-orange-500 to-red-500 p-8 text-white relative">
                <div class="absolute bottom-0 left-0 right-0">
                    <svg viewBox="0 0 1440 120" class="fill-current text-white">
                        <path d="M0,64L80,69.3C160,75,320,85,480,80C640,75,800,53,960,48C1120,43,1280,53,1360,58.7L1440,64L1440,120L1360,120C1280,120,1120,120,960,120C800,120,640,120,480,120C320,120,160,120,80,120L0,120Z"></path>
                    </svg>
                </div>
                <div class="relative z-10">
                    <i class="fas fa-store text-4xl mb-4"></i>
                    <h2 class="text-2xl font-bold">ShopEase Partner</h2>
                    <p class="text-orange-100">Portal mitra resmi</p>
                </div>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form class="space-y-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <div class="flex items-center border-2 rounded-lg px-3 py-2 border-gray-200 focus-within:border-orange-500 transition">
                            <i class="fas fa-envelope text-gray-400 mr-2"></i>
                            <input type="email" class="w-full focus:outline-none text-sm" placeholder="email@partner.com">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="flex items-center border-2 rounded-lg px-3 py-2 border-gray-200 focus-within:border-orange-500 transition">
                            <i class="fas fa-lock text-gray-400 mr-2"></i>
                            <input type="password" class="w-full focus:outline-none text-sm" placeholder="••••••••">
                        </div>
                    </div>
                    
                    <button class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white py-3 rounded-lg font-semibold hover:from-orange-600 hover:to-red-600 transition duration-300 shadow-lg">
                        Login ke Partner Portal
                    </button>

                    <div class="text-center text-sm text-gray-500">
                        <a href="#" class="text-orange-600 hover:underline">Lupa password?</a>
                    </div>
                </form>

                <div class="mt-6 pt-6 border-t border-gray-200">
                    <p class="text-xs text-center text-gray-400">
                        Dengan login, Anda menyetujui 
                        <a href="#" class="text-orange-600">Syarat & Ketentuan</a> 
                        dan 
                        <a href="#" class="text-orange-600">Kebijakan Privasi</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== ALTERNATIF DESAIN 6 : SIDEBAR LOGIN =========== -->
    <div class="min-h-screen flex mt-12">
        <!-- Sidebar dengan brand -->
        <div class="hidden md:block md:w-80 bg-indigo-900 text-white p-8">
            <div class="h-full flex flex-col">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold">ShopEase</h1>
                </div>
                <div class="flex-1">
                    <nav class="space-y-4">
                        <a href="#" class="flex items-center space-x-3 text-indigo-200 hover:text-white">
                            <i class="fas fa-home w-5"></i>
                            <span>Beranda</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-indigo-200 hover:text-white">
                            <i class="fas fa-box w-5"></i>
                            <span>Produk</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-indigo-200 hover:text-white">
                            <i class="fas fa-shopping-cart w-5"></i>
                            <span>Pesanan</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 text-white bg-indigo-800 rounded-lg p-2">
                            <i class="fas fa-sign-in-alt w-5"></i>
                            <span>Login</span>
                        </a>
                    </nav>
                </div>
                <div class="text-xs text-indigo-400">
                    © 2024 ShopEase. All rights reserved.
                </div>
            </div>
        </div>

        <!-- Login Area -->
        <div class="flex-1 flex items-center justify-center p-8 bg-gray-50">
            <div class="w-full max-w-md">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">Sign In</h2>
                    <p class="text-gray-500">Masuk untuk mengakses dashboard</p>
                </div>

                <form class="space-y-6">
                    <div>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="Email">
                    </div>
                    <div>
                        <input type="password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-600 focus:border-transparent" placeholder="Password">
                    </div>
                    
                    <button class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition duration-300">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>