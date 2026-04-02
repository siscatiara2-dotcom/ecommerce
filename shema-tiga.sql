-- =====================================================
-- DATABASE: shopease_db (Versi Super Sederhana - 4 Tabel)
-- Schema minimal untuk E-Commerce ShopEase
-- =====================================================

CREATE DATABASE IF NOT EXISTS shopease_db;
USE shopease_db;

-- =====================================================
-- TABEL 1: USERS (Pengguna)
-- Menyimpan data admin dan customer
-- =====================================================
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    phone VARCHAR(20),
    role ENUM('admin', 'customer') DEFAULT 'customer',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =====================================================
-- TABEL 2: CATEGORIES (Kategori Produk)
-- Menyimpan kategori untuk mengelompokkan produk
-- =====================================================
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE NOT NULL,
    icon VARCHAR(50),
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =====================================================
-- TABEL 3: PRODUCTS (Produk)
-- Menyimpan semua data produk
-- =====================================================
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    category_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    description TEXT,
    price DECIMAL(15,2) NOT NULL,
    discount_price DECIMAL(15,2),
    stock INT DEFAULT 0,
    image_url VARCHAR(255),
    rating_avg DECIMAL(3,2) DEFAULT 0,
    sold_count INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- =====================================================
-- TABEL 4: ORDERS (Pesanan)
-- Menyimpan data transaksi/pesanan
-- =====================================================
CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    total_price DECIMAL(15,2) NOT NULL,
    status ENUM('pending', 'processing', 'delivered', 'cancelled') DEFAULT 'pending',
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- =====================================================
-- INSERT DATA SAMPLE (untuk testing)
-- =====================================================

-- 1. Insert sample users
INSERT INTO users (username, email, password, full_name, phone, role) VALUES
('admin', 'admin@shopease.com', 'admin123', 'Admin ShopEase', '08123456789', 'admin'),
('john_doe', 'john@email.com', 'password123', 'John Doe', '08123456788', 'customer'),
('jane_smith', 'jane@email.com', 'password123', 'Jane Smith', '08123456787', 'customer');

-- 2. Insert sample categories
INSERT INTO categories (name, slug, icon) VALUES
('Elektronik', 'elektronik', 'fas fa-tv'),
('Fashion Pria', 'fashion-pria', 'fas fa-tshirt'),
('Fashion Wanita', 'fashion-wanita', 'fas fa-female'),
('Sepatu', 'sepatu', 'fas fa-shoe-prints'),
('Aksesoris', 'aksesoris', 'fas fa-gem');

-- 3. Insert sample products
INSERT INTO products (category_id, name, slug, description, price, discount_price, stock, image_url, sold_count) VALUES
(1, 'Smartphone Pro Max', 'smartphone-pro-max', 'Smartphone dengan layar AMOLED 6.7 inch', 15999000, 12999000, 50, 'https://placehold.co/600x400/indigo/white?text=Smartphone', 120),
(1, 'Laptop Gaming', 'laptop-gaming', 'Laptop dengan prosesor Intel i9', 25999000, 22999000, 25, 'https://placehold.co/600x400/purple/white?text=Laptop', 45),
(2, 'Kemeja Pria', 'kemeja-pria', 'Kemeja katun premium lengan panjang', 350000, 245000, 100, 'https://placehold.co/600x400/blue/white?text=Kemeja', 200),
(2, 'Celana Jeans', 'celana-jeans', 'Celana jeans bahan tebal nyaman', 450000, 382000, 75, 'https://placehold.co/600x400/green/white?text=Jeans', 150),
(3, 'Dress Wanita', 'dress-wanita', 'Dress modern untuk acara formal', 550000, 450000, 60, 'https://placehold.co/600x400/pink/white?text=Dress', 80),
(3, 'Blouse', 'blouse', 'Blouse wanita bahan satin', 250000, 199000, 90, 'https://placehold.co/600x400/red/white?text=Blouse', 120),
(4, 'Sepatu Running', 'sepatu-running', 'Sepatu olahraga ringan', 899000, 674000, 40, 'https://placehold.co/600x400/orange/white?text=Sepatu', 60),
(4, 'Sepatu Formal', 'sepatu-formal', 'Sepatu kulit pria', 1250000, 999000, 30, 'https://placehold.co/600x400/brown/white?text=Sepatu+Formal', 25),
(5, 'Jam Tangan', 'jam-tangan', 'Jam tangan analog klasik', 1299000, 999000, 55, 'https://placehold.co/600x400/yellow/white?text=Jam+Tangan', 90),
(5, 'Tas Ransel', 'tas-ransel', 'Tas ransel anti air', 450000, 382000, 65, 'https://placehold.co/600x400/gray/white?text=Tas', 110);

-- 4. Insert sample orders
INSERT INTO orders (user_id, product_id, quantity, total_price, status) VALUES
(2, 1, 1, 12999000, 'delivered'),
(2, 3, 2, 490000, 'delivered'),
(3, 5, 1, 450000, 'processing'),
(3, 7, 1, 674000, 'pending'),
(2, 9, 1, 999000, 'delivered'),
(3, 2, 1, 22999000, 'processing'),
(2, 4, 1, 382000, 'delivered'),
(3, 8, 1, 999000, 'pending');

-- =====================================================
-- VIEW SEDERHANA
-- =====================================================

-- View untuk menampilkan produk dengan diskon
CREATE VIEW v_products_discount AS
SELECT 
    id,
    name,
    price,
    discount_price,
    CASE 
        WHEN discount_price IS NOT NULL AND discount_price < price 
        THEN CONCAT(ROUND((price - discount_price) / price * 100), '%')
        ELSE '0%'
    END as discount_percent,
    image_url,
    sold_count
FROM products
WHERE is_active = TRUE;

-- View untuk statistik penjualan per produk
CREATE VIEW v_product_sales AS
SELECT 
    p.id,
    p.name,
    p.price,
    p.sold_count,
    COUNT(o.id) as total_orders,
    COALESCE(SUM(o.quantity), 0) as total_sold,
    COALESCE(SUM(o.total_price), 0) as total_revenue
FROM products p
LEFT JOIN orders o ON p.id = o.product_id
GROUP BY p.id;

-- =====================================================
-- INDEX UNTUK OPTIMASI
-- =====================================================

-- Mempercepat pencarian produk
CREATE INDEX idx_products_category ON products(category_id);
CREATE INDEX idx_products_price ON products(price);
CREATE INDEX idx_products_active ON products(is_active);

-- Mempercepat pencarian order
CREATE INDEX idx_orders_user ON orders(user_id);
CREATE INDEX idx_orders_product ON orders(product_id);
CREATE INDEX idx_orders_status ON orders(status);
CREATE INDEX idx_orders_date ON orders(order_date);

-- =====================================================
-- TRIGGER SEDERHANA
-- =====================================================

-- Trigger untuk update sold_count di products ketika ada order baru
DELIMITER $$
CREATE TRIGGER update_sold_count
AFTER INSERT ON orders
FOR EACH ROW
BEGIN
    UPDATE products 
    SET sold_count = sold_count + NEW.quantity
    WHERE id = NEW.product_id;
END$$
DELIMITER ;

-- =====================================================
-- QUERY CONTOH (untuk mengambil data)
-- =====================================================

-- 1. Mengambil semua produk dengan kategorinya
SELECT 
    p.*,
    c.name as category_name,
    c.slug as category_slug
FROM products p
JOIN categories c ON p.category_id = c.id
WHERE p.is_active = TRUE
ORDER BY p.created_at DESC;

-- 2. Mengambil produk berdasarkan kategori (contoh: Elektronik)
SELECT * FROM products 
WHERE category_id = 1 AND is_active = TRUE
ORDER BY price;

-- 3. Mengambil produk diskon (flash sale)
SELECT * FROM products 
WHERE discount_price IS NOT NULL 
    AND discount_price < price
    AND is_active = TRUE
ORDER BY discount_price ASC;

-- 4. Mengambil best seller products
SELECT * FROM products 
WHERE is_active = TRUE
ORDER BY sold_count DESC
LIMIT 10;

-- 5. Mengambil riwayat orders user
SELECT 
    o.*,
    p.name as product_name,
    p.image_url
FROM orders o
JOIN products p ON o.product_id = p.id
WHERE o.user_id = 2
ORDER BY o.order_date DESC;

-- 6. Statistik dashboard
SELECT 
    (SELECT COUNT(*) FROM users WHERE role = 'customer') as total_customers,
    (SELECT COUNT(*) FROM products WHERE is_active = TRUE) as total_products,
    (SELECT COUNT(*) FROM categories) as total_categories,
    (SELECT COUNT(*) FROM orders) as total_orders,
    (SELECT COALESCE(SUM(total_price), 0) FROM orders) as total_revenue,
    (SELECT COALESCE(AVG(total_price), 0) FROM orders) as avg_order_value;

-- 7. Grafik penjualan per bulan
SELECT 
    DATE_FORMAT(order_date, '%Y-%m') as month,
    COUNT(*) as order_count,
    SUM(total_price) as revenue
FROM orders
GROUP BY DATE_FORMAT(order_date, '%Y-%m')
ORDER BY month DESC;

-- =====================================================
-- PROCEDURE SEDERHANA
-- =====================================================

-- Procedure untuk filter produk
DELIMITER $$
CREATE PROCEDURE filter_products(
    IN cat_id INT,
    IN min_price DECIMAL(15,2),
    IN max_price DECIMAL(15,2),
    IN sort_type VARCHAR(20)
)
BEGIN
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

-- Cara pakai:
-- CALL filter_products(1, 1000000, 5000000, 'popular');

-- =====================================================
-- USER DATABASE
-- =====================================================

-- Buat user khusus aplikasi
CREATE USER IF NOT EXISTS 'shopease_app'@'localhost' IDENTIFIED BY 'shopease123';
GRANT SELECT, INSERT, UPDATE, DELETE ON shopease_db.* TO 'shopease_app'@'localhost';
FLUSH PRIVILEGES;