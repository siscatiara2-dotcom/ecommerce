-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Apr 2026 pada 04.14
-- Versi server: 8.0.17
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopease_db`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `filter_products` (IN `cat_id` INT, IN `min_price` DECIMAL(15,2), IN `max_price` DECIMAL(15,2), IN `sort_type` VARCHAR(20))  BEGIN
    SELECT * FROM products 
    WHERE is_active = TRUE
        AND (cat_id IS NULL OR category_id = cat_id)
        AND (min_price IS NULL OR price >= min_price)
        AND (max_price IS NULL OR price <= max_price)
    ORDER BY 
        CASE WHEN sort_type = 'price_asc' THEN price END ASC,
        CASE WHEN sort_type = 'price_desc' THEN price END DESC,
        CASE WHEN sort_type = 'popular' THEN sold_count END DESC,
        CASE WHEN sort_type = 'newest' THEN created_at END DESC;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`, `is_active`, `created_at`) VALUES
(1, 'Elektronik', 'elektronik', 'fas fa-tv', 1, '2026-02-26 04:45:25'),
(2, 'Fashion Pria', 'fashion-pria', 'fas fa-tshirt', 1, '2026-02-26 04:45:25'),
(3, 'Fashion Wanita', 'fashion-wanita', 'fas fa-female', 1, '2026-02-26 04:45:25'),
(4, 'Sepatu', 'sepatu', 'fas fa-shoe-prints', 1, '2026-02-26 04:45:25'),
(5, 'Aksesoris', 'aksesoris', 'fas fa-gem', 1, '2026-02-26 04:45:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(15,2) NOT NULL,
  `status` enum('pending','processing','delivered','cancelled') DEFAULT 'pending',
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `total_price`, `status`, `order_date`) VALUES
(1, 2, 1, 1, '12999000.00', 'delivered', '2026-02-26 04:45:25'),
(2, 2, 3, 2, '490000.00', 'delivered', '2026-02-26 04:45:25'),
(3, 3, 5, 1, '450000.00', 'processing', '2026-02-26 04:45:25'),
(4, 3, 7, 1, '674000.00', 'pending', '2026-02-26 04:45:25'),
(5, 2, 9, 1, '999000.00', 'delivered', '2026-02-26 04:45:25'),
(6, 3, 2, 1, '22999000.00', 'processing', '2026-02-26 04:45:25'),
(7, 2, 4, 1, '382000.00', 'delivered', '2026-02-26 04:45:25'),
(8, 3, 8, 1, '999000.00', 'pending', '2026-02-26 04:45:25');

--
-- Trigger `orders`
--
DELIMITER $$
CREATE TRIGGER `update_sold_count` AFTER INSERT ON `orders` FOR EACH ROW BEGIN
    UPDATE products 
    SET sold_count = sold_count + NEW.quantity
    WHERE id = NEW.product_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(15,2) NOT NULL,
  `discount_price` decimal(15,2) DEFAULT NULL,
  `stock` int(11) DEFAULT '0',
  `image_url` varchar(255) DEFAULT NULL,
  `rating_avg` decimal(3,2) DEFAULT '0.00',
  `sold_count` int(11) DEFAULT '0',
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `price`, `discount_price`, `stock`, `image_url`, `rating_avg`, `sold_count`, `is_active`, `created_at`) VALUES
(1, 1, 'Smartphone Pro Max', 'smartphone-pro-max', 'Smartphone dengan layar AMOLED 6.7 inch', '15999000.00', '12999000.00', 50, 'https://placehold.co/600x400/indigo/white?text=Smartphone', '0.00', 120, 1, '2026-02-26 04:45:25'),
(2, 1, 'Laptop Gaming', 'laptop-gaming', 'Laptop dengan prosesor Intel i9', '25999000.00', '22999000.00', 25, 'https://placehold.co/600x400/purple/white?text=Laptop', '0.00', 45, 1, '2026-02-26 04:45:25'),
(3, 2, 'Kemeja Pria', 'kemeja-pria', 'Kemeja katun premium lengan panjang', '350000.00', '245000.00', 100, 'https://placehold.co/600x400/blue/white?text=Kemeja', '0.00', 200, 1, '2026-02-26 04:45:25'),
(4, 2, 'Celana Jeans', 'celana-jeans', 'Celana jeans bahan tebal nyaman', '450000.00', '382000.00', 75, 'https://placehold.co/600x400/green/white?text=Jeans', '0.00', 150, 1, '2026-02-26 04:45:25'),
(5, 3, 'Dress Wanita', 'dress-wanita', 'Dress modern untuk acara formal', '550000.00', '450000.00', 60, 'https://placehold.co/600x400/pink/white?text=Dress', '0.00', 80, 1, '2026-02-26 04:45:25'),
(6, 3, 'Blouse', 'blouse', 'Blouse wanita bahan satin', '250000.00', '199000.00', 90, 'https://placehold.co/600x400/red/white?text=Blouse', '0.00', 120, 1, '2026-02-26 04:45:25'),
(7, 4, 'Sepatu Running', 'sepatu-running', 'Sepatu olahraga ringan', '899000.00', '674000.00', 40, 'https://placehold.co/600x400/orange/white?text=Sepatu', '0.00', 60, 1, '2026-02-26 04:45:25'),
(8, 4, 'Sepatu Formal', 'sepatu-formal', 'Sepatu kulit pria', '1250000.00', '999000.00', 30, 'https://placehold.co/600x400/brown/white?text=Sepatu+Formal', '0.00', 25, 1, '2026-02-26 04:45:25'),
(9, 5, 'Jam Tangan', 'jam-tangan', 'Jam tangan analog klasik', '1299000.00', '999000.00', 55, 'https://placehold.co/600x400/yellow/white?text=Jam+Tangan', '0.00', 90, 1, '2026-02-26 04:45:25'),
(10, 5, 'Tas Ransel', 'tas-ransel', 'Tas ransel anti air', '450000.00', '382000.00', 65, 'https://placehold.co/600x400/gray/white?text=Tas', '0.00', 110, 1, '2026-02-26 04:45:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `role` enum('admin','customer') DEFAULT 'customer',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `full_name`, `phone`, `role`, `created_at`) VALUES
(1, 'admin', 'admin@shopease.com', 'admin123', 'Admin ShopEase', '08123456789', 'admin', '2026-02-26 04:45:25'),
(2, 'john_doe', 'john@email.com', 'password123', 'John Doe', '08123456788', 'customer', '2026-02-26 04:45:25'),
(3, 'jane_smith', 'jane@email.com', 'password123', 'Jane Smith', '08123456787', 'customer', '2026-02-26 04:45:25');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_products_discount`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_products_discount` (
`discount_percent` varchar(22)
,`discount_price` decimal(15,2)
,`id` int(11)
,`image_url` varchar(255)
,`name` varchar(255)
,`price` decimal(15,2)
,`sold_count` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_product_sales`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_product_sales` (
`id` int(11)
,`name` varchar(255)
,`price` decimal(15,2)
,`sold_count` int(11)
,`total_orders` bigint(21)
,`total_revenue` decimal(37,2)
,`total_sold` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_products_discount`
--
DROP TABLE IF EXISTS `v_products_discount`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_products_discount`  AS  select `products`.`id` AS `id`,`products`.`name` AS `name`,`products`.`price` AS `price`,`products`.`discount_price` AS `discount_price`,(case when ((`products`.`discount_price` is not null) and (`products`.`discount_price` < `products`.`price`)) then concat(round((((`products`.`price` - `products`.`discount_price`) / `products`.`price`) * 100),0),'%') else '0%' end) AS `discount_percent`,`products`.`image_url` AS `image_url`,`products`.`sold_count` AS `sold_count` from `products` where (`products`.`is_active` = true) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `v_product_sales`
--
DROP TABLE IF EXISTS `v_product_sales`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_product_sales`  AS  select `p`.`id` AS `id`,`p`.`name` AS `name`,`p`.`price` AS `price`,`p`.`sold_count` AS `sold_count`,count(`o`.`id`) AS `total_orders`,coalesce(sum(`o`.`quantity`),0) AS `total_sold`,coalesce(sum(`o`.`total_price`),0) AS `total_revenue` from (`products` `p` left join `orders` `o` on((`p`.`id` = `o`.`product_id`))) group by `p`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_orders_user` (`user_id`),
  ADD KEY `idx_orders_product` (`product_id`),
  ADD KEY `idx_orders_status` (`status`),
  ADD KEY `idx_orders_date` (`order_date`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `idx_products_category` (`category_id`),
  ADD KEY `idx_products_price` (`price`),
  ADD KEY `idx_products_active` (`is_active`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
