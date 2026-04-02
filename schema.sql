-- =====================================================
-- DATABASE: shopease_db
-- Schema untuk E-Commerce ShopEase
-- =====================================================

CREATE DATABASE IF NOT EXISTS shopease_db;
USE shopease_db;

-- =====================================================
-- TABEL MASTER / REFERENSI
-- =====================================================

-- 1. Tabel Roles (Hak Akses)
CREATE TABLE roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 2. Tabel Users (Pengguna)
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_id INT DEFAULT 2,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    phone VARCHAR(20),
    avatar_url VARCHAR(255),
    is_active BOOLEAN DEFAULT TRUE,
    last_login TIMESTAMP NULL,
    email_verified_at TIMESTAMP NULL,
    remember_token VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (role_id) REFERENCES roles(id),
    INDEX idx_email (email),
    INDEX idx_username (username)
);

-- 3. Tabel Addresses (Alamat Pengguna)
CREATE TABLE addresses (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    address_type ENUM('utama', 'kantor', 'rumah') DEFAULT 'utama',
    recipient_name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    province VARCHAR(100) NOT NULL,
    city VARCHAR(100) NOT NULL,
    district VARCHAR(100) NOT NULL,
    postal_code VARCHAR(10),
    full_address TEXT NOT NULL,
    is_default BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    INDEX idx_user_address (user_id, is_default)
);

-- =====================================================
-- TABEL PRODUK DAN KATEGORI
-- =====================================================

-- 4. Tabel Categories (Kategori Produk)
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    parent_id INT NULL,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE NOT NULL,
    icon_class VARCHAR(50),
    image_url VARCHAR(255),
    description TEXT,
    meta_title VARCHAR(255),
    meta_description TEXT,
    meta_keywords VARCHAR(255),
    sort_order INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (parent_id) REFERENCES categories(id) ON DELETE CASCADE,
    INDEX idx_category_parent (parent_id),
    INDEX idx_category_active (is_active),
    INDEX idx_category_slug (slug)
);

-- 5. Tabel Brands (Merek)
CREATE TABLE brands (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL UNIQUE,
    slug VARCHAR(100) UNIQUE NOT NULL,
    logo_url VARCHAR(255),
    description TEXT,
    website_url VARCHAR(255),
    is_featured BOOLEAN DEFAULT FALSE,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 6. Tabel Products (Produk)
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    category_id INT NOT NULL,
    brand_id INT,
    sku VARCHAR(50) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    description TEXT,
    short_description TEXT,
    price DECIMAL(15,2) NOT NULL,
    discount_price DECIMAL(15,2) NULL,
    discount_percent INT GENERATED ALWAYS AS (
        CASE 
            WHEN discount_price IS NOT NULL AND price > 0 
            THEN ROUND((price - discount_price) / price * 100)
            ELSE NULL 
        END
    ) STORED,
    stock INT DEFAULT 0,
    min_stock INT DEFAULT 5,
    weight DECIMAL(10,2) COMMENT 'Berat dalam gram',
    dimensions VARCHAR(50) COMMENT 'P x L x T dalam cm',
    material VARCHAR(255),
    warranty VARCHAR(100),
    is_featured BOOLEAN DEFAULT FALSE,
    is_best_seller BOOLEAN DEFAULT FALSE,
    is_new BOOLEAN DEFAULT TRUE,
    has_variants BOOLEAN DEFAULT FALSE,
    meta_title VARCHAR(255),
    meta_description TEXT,
    meta_keywords VARCHAR(255),
    view_count INT DEFAULT 0,
    sold_count INT DEFAULT 0,
    rating_avg DECIMAL(3,2) DEFAULT 0.00,
    review_count INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id),
    FOREIGN KEY (brand_id) REFERENCES brands(id),
    INDEX idx_product_category (category_id),
    INDEX idx_product_brand (brand_id),
    INDEX idx_product_price (price),
    INDEX idx_product_discount (discount_price),
    INDEX idx_product_featured (is_featured),
    INDEX idx_product_bestseller (is_best_seller),
    INDEX idx_product_new (is_new),
    INDEX idx_product_active (is_active),
    INDEX idx_product_slug (slug),
    FULLTEXT INDEX ft_product_search (name, description, short_description)
);

-- 7. Tabel Product Images (Gambar Produk)
CREATE TABLE product_images (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    thumbnail_url VARCHAR(255),
    alt_text VARCHAR(255),
    sort_order INT DEFAULT 0,
    is_primary BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    INDEX idx_product_image (product_id, is_primary)
);

-- 8. Tabel Product Variants (Varian Produk - Warna, Ukuran, dll)
CREATE TABLE product_variants (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    variant_type ENUM('warna', 'ukuran', 'penyimpanan', 'lainnya') NOT NULL,
    variant_name VARCHAR(50) NOT NULL,
    variant_value VARCHAR(100) NOT NULL,
    sku VARCHAR(50) UNIQUE,
    price_adjustment DECIMAL(15,2) DEFAULT 0.00,
    stock INT DEFAULT 0,
    image_url VARCHAR(255),
    color_code VARCHAR(20) COMMENT 'Kode warna hex untuk opsi warna',
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    INDEX idx_product_variant (product_id, variant_type)
);

-- 9. Tabel Product Specifications (Spesifikasi Produk)
CREATE TABLE product_specifications (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    spec_name VARCHAR(100) NOT NULL,
    spec_value TEXT NOT NULL,
    sort_order INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    INDEX idx_product_spec (product_id)
);

-- 10. Tabel Product Tags (Tag Produk)
CREATE TABLE product_tags (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    tag_name VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    INDEX idx_product_tag (product_id, tag_name)
);

-- =====================================================
-- TABEL PROMOSI DAN DISKON
-- =====================================================

-- 11. Tabel Flash Sales
CREATE TABLE flash_sales (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    start_time TIMESTAMP NOT NULL,
    end_time TIMESTAMP NOT NULL,
    status ENUM('scheduled', 'active', 'ended', 'cancelled') DEFAULT 'scheduled',
    banner_url VARCHAR(255),
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(id),
    INDEX idx_flash_sale_status (status),
    INDEX idx_flash_sale_time (start_time, end_time)
);

-- 12. Tabel Flash Sale Products
CREATE TABLE flash_sale_products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    flash_sale_id INT NOT NULL,
    product_id INT NOT NULL,
    discount_percent INT NOT NULL,
    discount_price DECIMAL(15,2) NOT NULL,
    max_quantity INT DEFAULT 1,
    sold_quantity INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (flash_sale_id) REFERENCES flash_sales(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id),
    UNIQUE KEY unique_flash_product (flash_sale_id, product_id)
);

-- 13. Tabel Coupons (Kupon Diskon)
CREATE TABLE coupons (
    id INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(50) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    type ENUM('fixed', 'percentage') NOT NULL,
    value DECIMAL(15,2) NOT NULL,
    min_purchase DECIMAL(15,2) DEFAULT 0,
    max_discount DECIMAL(15,2) NULL,
    usage_limit INT NULL,
    used_count INT DEFAULT 0,
    per_user_limit INT DEFAULT 1,
    start_date TIMESTAMP NOT NULL,
    end_date TIMESTAMP NOT NULL,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_coupon_code (code),
    INDEX idx_coupon_active (is_active, start_date, end_date)
);

-- =====================================================
-- TABEL TRANSAKSI DAN PEMESANAN
-- =====================================================

-- 14. Tabel Orders (Pesanan)
CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_number VARCHAR(50) UNIQUE NOT NULL,
    user_id INT NOT NULL,
    address_id INT NOT NULL,
    coupon_id INT NULL,
    subtotal DECIMAL(15,2) NOT NULL,
    shipping_cost DECIMAL(15,2) DEFAULT 0,
    discount_amount DECIMAL(15,2) DEFAULT 0,
    total_amount DECIMAL(15,2) NOT NULL,
    payment_method ENUM('transfer_bank', 'e_wallet', 'credit_card', 'cod') NOT NULL,
    payment_status ENUM('pending', 'paid', 'failed', 'refunded') DEFAULT 'pending',
    order_status ENUM('pending', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
    shipping_tracking_number VARCHAR(100),
    shipping_courier VARCHAR(50),
    notes TEXT,
    estimated_delivery DATE,
    delivered_at TIMESTAMP NULL,
    cancelled_at TIMESTAMP NULL,
    cancellation_reason TEXT,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (address_id) REFERENCES addresses(id),
    FOREIGN KEY (coupon_id) REFERENCES coupons(id),
    INDEX idx_order_user (user_id),
    INDEX idx_order_number (order_number),
    INDEX idx_order_status (order_status),
    INDEX idx_payment_status (payment_status),
    INDEX idx_created_at (created_at)
);

-- 15. Tabel Order Items (Detail Pesanan)
CREATE TABLE order_items (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    variant_id INT NULL,
    product_name VARCHAR(255) NOT NULL,
    variant_info TEXT,
    quantity INT NOT NULL,
    price DECIMAL(15,2) NOT NULL,
    discount_amount DECIMAL(15,2) DEFAULT 0,
    subtotal DECIMAL(15,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (variant_id) REFERENCES product_variants(id),
    INDEX idx_order_item (order_id)
);

-- 16. Tabel Payments (Pembayaran)
CREATE TABLE payments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    payment_method VARCHAR(50) NOT NULL,
    payment_proof VARCHAR(255),
    transaction_id VARCHAR(100),
    amount DECIMAL(15,2) NOT NULL,
    fee DECIMAL(15,2) DEFAULT 0,
    net_amount DECIMAL(15,2) NOT NULL,
    payment_status ENUM('pending', 'success', 'failed') DEFAULT 'pending',
    payment_date TIMESTAMP NULL,
    bank_name VARCHAR(100),
    account_number VARCHAR(50),
    account_name VARCHAR(100),
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    INDEX idx_payment_order (order_id),
    INDEX idx_payment_status (payment_status)
);

-- =====================================================
-- TABEL INTERAKSI DAN ULASAN
-- =====================================================

-- 17. Tabel Reviews (Ulasan Produk)
CREATE TABLE reviews (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    user_id INT NOT NULL,
    order_id INT NOT NULL,
    rating INT NOT NULL CHECK (rating >= 1 AND rating <= 5),
    title VARCHAR(255),
    content TEXT,
    pros TEXT,
    cons TEXT,
    is_verified_purchase BOOLEAN DEFAULT FALSE,
    likes_count INT DEFAULT 0,
    is_approved BOOLEAN DEFAULT FALSE,
    approved_by INT,
    approved_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (approved_by) REFERENCES users(id),
    UNIQUE KEY unique_user_product_review (user_id, product_id, order_id),
    INDEX idx_review_product (product_id, is_approved),
    INDEX idx_review_rating (rating)
);

-- 18. Tabel Review Images (Gambar Ulasan)
CREATE TABLE review_images (
    id INT PRIMARY KEY AUTO_INCREMENT,
    review_id INT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (review_id) REFERENCES reviews(id) ON DELETE CASCADE
);

-- 19. Tabel Review Likes (Suka Ulasan)
CREATE TABLE review_likes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    review_id INT NOT NULL,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (review_id) REFERENCES reviews(id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(id),
    UNIQUE KEY unique_review_like (review_id, user_id)
);

-- 20. Tabel Wishlist (Daftar Keinginan)
CREATE TABLE wishlists (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    UNIQUE KEY unique_wishlist (user_id, product_id)
);

-- =====================================================
-- TABEL FRONTEND MANAGEMENT
-- =====================================================

-- 21. Tabel Banners (Hero Banner)
CREATE TABLE banners (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    subtitle VARCHAR(255),
    description TEXT,
    image_url VARCHAR(255) NOT NULL,
    mobile_image_url VARCHAR(255),
    link_url VARCHAR(255),
    button_text VARCHAR(50),
    position ENUM('hero', 'category', 'promo') DEFAULT 'hero',
    sort_order INT DEFAULT 0,
    start_date TIMESTAMP NULL,
    end_date TIMESTAMP NULL,
    is_active BOOLEAN DEFAULT TRUE,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(id),
    INDEX idx_banner_active (is_active, start_date, end_date),
    INDEX idx_banner_position (position)
);

-- 22. Tabel Site Settings (Pengaturan Website)
CREATE TABLE site_settings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    setting_key VARCHAR(100) UNIQUE NOT NULL,
    setting_value TEXT,
    setting_type ENUM('text', 'number', 'boolean', 'json', 'color') DEFAULT 'text',
    group_name VARCHAR(50) DEFAULT 'general',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 23. Tabel Theme Settings (Pengaturan Tema)
CREATE TABLE theme_settings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    theme_name VARCHAR(50) DEFAULT 'default',
    primary_color VARCHAR(20) DEFAULT '#4f46e5',
    secondary_color VARCHAR(20) DEFAULT '#9333ea',
    accent_color VARCHAR(20) DEFAULT '#ef4444',
    background_color VARCHAR(20) DEFAULT '#ffffff',
    text_color VARCHAR(20) DEFAULT '#1f2937',
    font_family VARCHAR(100) DEFAULT 'Inter',
    layout_product_per_row INT DEFAULT 4,
    layout_sidebar_position ENUM('left', 'right', 'hidden') DEFAULT 'left',
    mode ENUM('light', 'dark', 'system') DEFAULT 'light',
    custom_css TEXT,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 24. Tabel Navigation Menus (Menu Navigasi)
CREATE TABLE navigation_menus (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    location ENUM('header', 'footer', 'sidebar') DEFAULT 'header',
    items JSON NOT NULL COMMENT 'Struktur menu dalam format JSON',
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 25. Tabel Static Pages (Halaman Statis)
CREATE TABLE static_pages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content LONGTEXT,
    meta_title VARCHAR(255),
    meta_description TEXT,
    meta_keywords VARCHAR(255),
    is_published BOOLEAN DEFAULT FALSE,
    published_at TIMESTAMP NULL,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (created_by) REFERENCES users(id),
    INDEX idx_page_slug (slug),
    FULLTEXT INDEX ft_page_search (title, content)
);

-- 26. Tabel FAQs (Pertanyaan Umum)
CREATE TABLE faqs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    category VARCHAR(100) DEFAULT 'general',
    question TEXT NOT NULL,
    answer TEXT NOT NULL,
    sort_order INT DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_faq_category (category),
    INDEX idx_faq_active (is_active)
);

-- 27. Tabel Articles (Artikel/Blog)
CREATE TABLE articles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    excerpt TEXT,
    content LONGTEXT,
    featured_image VARCHAR(255),
    author_id INT,
    category VARCHAR(100),
    tags JSON,
    view_count INT DEFAULT 0,
    is_published BOOLEAN DEFAULT FALSE,
    published_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id),
    INDEX idx_article_published (is_published, published_at),
    FULLTEXT INDEX ft_article_search (title, content)
);

-- =====================================================
-- TABEL LOG DAN AUDIT
-- =====================================================

-- 28. Tabel Activity Logs (Log Aktivitas)
CREATE TABLE activity_logs (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NULL,
    action VARCHAR(100) NOT NULL,
    entity_type VARCHAR(50),
    entity_id INT,
    old_data JSON,
    new_data JSON,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL,
    INDEX idx_log_user (user_id),
    INDEX idx_log_entity (entity_type, entity_id),
    INDEX idx_log_action (action),
    INDEX idx_log_created (created_at)
);

-- 29. Tabel User Sessions (Sesi Pengguna)
CREATE TABLE user_sessions (
    id VARCHAR(128) PRIMARY KEY,
    user_id INT NOT NULL,
    ip_address VARCHAR(45),
    user_agent TEXT,
    payload TEXT,
    last_activity INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    INDEX idx_session_user (user_id),
    INDEX idx_last_activity (last_activity)
);

-- =====================================================
-- INSERT DATA MASTER (SEEDER)
-- =====================================================

-- Insert Roles
INSERT INTO roles (name, description) VALUES
('super_admin', 'Super Administrator dengan akses penuh'),
('admin', 'Administrator toko'),
('customer', 'Pengguna biasa / pembeli'),
('guest', 'Tamu (belum login)');

-- Insert Site Settings
INSERT INTO site_settings (setting_key, setting_value, setting_type, group_name, description) VALUES
('site_name', 'ShopEase', 'text', 'general', 'Nama website'),
('site_description', 'Toko Online Terpercaya', 'text', 'general', 'Deskripsi website'),
('site_keywords', 'belanja online, e-commerce, toko online', 'text', 'seo', 'Meta keywords'),
('site_logo', '/images/logo.png', 'text', 'appearance', 'Logo website'),
('site_favicon', '/images/favicon.ico', 'text', 'appearance', 'Favicon website'),
('contact_email', 'cs@shopease.com', 'text', 'contact', 'Email kontak'),
('contact_phone', '1500-123', 'text', 'contact', 'Nomor telepon'),
('contact_address', 'Jakarta, Indonesia', 'text', 'contact', 'Alamat toko'),
('social_facebook', 'https://facebook.com/shopease', 'text', 'social', 'Link Facebook'),
('social_instagram', 'https://instagram.com/shopease', 'text', 'social', 'Link Instagram'),
('social_twitter', 'https://twitter.com/shopease', 'text', 'social', 'Link Twitter'),
('social_youtube', 'https://youtube.com/shopease', 'text', 'social', 'Link YouTube'),
('shipping_free_minimum', '100000', 'number', 'shipping', 'Minimal belanja gratis ongkir'),
('return_period', '30', 'number', 'policy', 'Masa pengembalian barang (hari)'),
('warranty_period', '365', 'number', 'policy', 'Masa garansi (hari)'),
('maintenance_mode', 'false', 'boolean', 'system', 'Mode pemeliharaan'),
('cache_version', '1', 'number', 'system', 'Versi cache untuk update CSS/JS');

-- Insert Theme Settings (Default)
INSERT INTO theme_settings (theme_name, primary_color, secondary_color, accent_color, is_active) VALUES
('default', '#4f46e5', '#9333ea', '#ef4444', TRUE);

-- Insert FAQs
INSERT INTO faqs (category, question, answer, sort_order) VALUES
('order', 'Bagaimana cara memesan produk?', 'Anda dapat memilih produk yang diinginkan, klik "Tambah ke Keranjang", lalu lanjutkan ke halaman checkout.', 1),
('shipping', 'Berapa lama waktu pengiriman?', 'Waktu pengiriman bervariasi tergantung lokasi, biasanya 2-5 hari kerja.', 2),
('payment', 'Metode pembayaran apa saja yang tersedia?', 'Kami menerima transfer bank, e-wallet (OVO, GoPay, Dana), dan kartu kredit.', 3),
('return', 'Bagaimana jika barang tidak sesuai?', 'Anda dapat mengajukan pengembalian dalam waktu 30 hari setelah barang diterima.', 4),
('warranty', 'Apakah produk bergaransi?', 'Semua produk elektronik memiliki garansi resmi 1 tahun.', 5);

-- Insert Navigation Menu (Header)
INSERT INTO navigation_menus (name, location, items) VALUES
('Header Menu', 'header', '[
    {"title": "Beranda", "url": "/", "order": 1},
    {"title": "Elektronik", "url": "/category/elektronik", "order": 2},
    {"title": "Fashion", "url": "/category/fashion", "order": 3},
    {"title": "Flash Sale", "url": "/flash-sale", "order": 4, "badge": "HOT"},
    {"title": "Promo", "url": "/promo", "order": 5}
]');

-- =====================================================
-- VIEWS (untuk memudahkan query)
-- =====================================================

-- View untuk Produk dengan diskon
CREATE VIEW v_products_with_discount AS
SELECT 
    p.*,
    CASE 
        WHEN p.discount_price IS NOT NULL AND p.discount_price < p.price 
        THEN ROUND((p.price - p.discount_price) / p.price * 100)
        ELSE NULL 
    END as discount_percentage,
    CASE 
        WHEN p.discount_price IS NOT NULL AND p.discount_price < p.price 
        THEN p.price - p.discount_price
        ELSE 0 
    END as savings_amount
FROM products p
WHERE p.is_active = TRUE;

-- View untuk Flash Sale aktif
CREATE VIEW v_active_flash_sales AS
SELECT 
    fs.*,
    COUNT(fsp.id) as total_products,
    SUM(fsp.sold_quantity) as total_sold
FROM flash_sales fs
LEFT JOIN flash_sale_products fsp ON fs.id = fsp.flash_sale_id
WHERE fs.status = 'active' 
    AND fs.start_time <= NOW() 
    AND fs.end_time >= NOW()
GROUP BY fs.id;

-- View untuk Statistik Kategori
CREATE VIEW v_category_stats AS
SELECT 
    c.id,
    c.name,
    c.slug,
    COUNT(p.id) as total_products,
    COALESCE(SUM(p.sold_count), 0) as total_sold,
    COALESCE(AVG(p.rating_avg), 0) as avg_rating,
    MIN(p.price) as min_price,
    MAX(p.price) as max_price
FROM categories c
LEFT JOIN products p ON c.id = p.category_id AND p.is_active = TRUE
GROUP BY c.id, c.name, c.slug;

-- View untuk Statistik Produk
CREATE VIEW v_product_stats AS
SELECT 
    p.id,
    p.name,
    p.sku,
    p.price,
    p.discount_price,
    p.stock,
    p.sold_count,
    p.view_count,
    p.rating_avg,
    p.review_count,
    COUNT(DISTINCT r.id) as total_reviews,
    AVG(r.rating) as avg_rating_calc
FROM products p
LEFT JOIN reviews r ON p.id = r.product_id AND r.is_approved = TRUE
GROUP BY p.id;

-- =====================================================
-- TRIGGERS (untuk otomatisasi)
-- =====================================================

-- Trigger untuk update rating produk setelah review baru
DELIMITER $$
CREATE TRIGGER trg_update_product_rating
AFTER INSERT ON reviews
FOR EACH ROW
BEGIN
    UPDATE products 
    SET 
        rating_avg = (
            SELECT AVG(rating) 
            FROM reviews 
            WHERE product_id = NEW.product_id 
            AND is_approved = TRUE
        ),
        review_count = (
            SELECT COUNT(*) 
            FROM reviews 
            WHERE product_id = NEW.product_id 
            AND is_approved = TRUE
        )
    WHERE id = NEW.product_id;
END$$
DELIMITER ;

-- Trigger untuk update stok setelah order
DELIMITER $$
CREATE TRIGGER trg_update_stock_after_order
AFTER INSERT ON order_items
FOR EACH ROW
BEGIN
    IF NEW.variant_id IS NOT NULL THEN
        UPDATE product_variants 
        SET stock = stock - NEW.quantity 
        WHERE id = NEW.variant_id;
    ELSE
        UPDATE products 
        SET stock = stock - NEW.quantity,
            sold_count = sold_count + NEW.quantity
        WHERE id = NEW.product_id;
    END IF;
END$$
DELIMITER ;

-- Trigger untuk log aktivitas user
DELIMITER $$
CREATE TRIGGER trg_user_login_log
AFTER UPDATE ON users
FOR EACH ROW
BEGIN
    IF NEW.last_login != OLD.last_login THEN
        INSERT INTO activity_logs (user_id, action, entity_type, entity_id, new_data)
        VALUES (NEW.id, 'USER_LOGIN', 'users', NEW.id, JSON_OBJECT('time', NEW.last_login));
    END IF;
END$$
DELIMITER ;

-- =====================================================
-- INDEXES untuk optimasi
-- =====================================================

-- Index tambahan untuk performa
CREATE INDEX idx_orders_date ON orders(created_at);
CREATE INDEX idx_orders_status_date ON orders(order_status, created_at);
CREATE INDEX idx_products_price_discount ON products(price, discount_price);
CREATE INDEX idx_reviews_rating_approved ON reviews(rating, is_approved);
CREATE INDEX idx_flash_sale_dates ON flash_sales(start_time, end_time, status);

-- =====================================================
-- PROCEDURES (Stored Procedures)
-- =====================================================

-- Procedure untuk mendapatkan produk dengan filter
DELIMITER $$
CREATE PROCEDURE sp_get_filtered_products(
    IN p_category_id INT,
    IN p_min_price DECIMAL(15,2),
    IN p_max_price DECIMAL(15,2),
    IN p_brand_id INT,
    IN p_rating_min INT,
    IN p_sort_by VARCHAR(50),
    IN p_limit INT,
    IN p_offset INT
)
BEGIN
    SELECT 
        p.*,
        c.name as category_name,
        b.name as brand_name
    FROM products p
    LEFT JOIN categories c ON p.category_id = c.id
    LEFT JOIN brands b ON p.brand_id = b.id
    WHERE p.is_active = TRUE
        AND (p_category_id IS NULL OR p.category_id = p_category_id)
        AND (p_min_price IS NULL OR p.price >= p_min_price)
        AND (p_max_price IS NULL OR p.price <= p_max_price)
        AND (p_brand_id IS NULL OR p.brand_id = p_brand_id)
        AND (p_rating_min IS NULL OR p.rating_avg >= p_rating_min)
    ORDER BY 
        CASE 
            WHEN p_sort_by = 'price_asc' THEN p.price 
            WHEN p_sort_by = 'price_desc' THEN -p.price
            WHEN p_sort_by = 'popular' THEN -p.sold_count
            WHEN p_sort_by = 'rating' THEN -p.rating_avg
            ELSE p.created_at
        END DESC
    LIMIT p_limit OFFSET p_offset;
END$$
DELIMITER ;

-- Procedure untuk dashboard admin stats
DELIMITER $$
CREATE PROCEDURE sp_get_admin_stats()
BEGIN
    SELECT 
        (SELECT COUNT(*) FROM products WHERE is_active = TRUE) as total_products,
        (SELECT COUNT(*) FROM orders WHERE DATE(created_at) = CURDATE()) as today_orders,
        (SELECT COUNT(*) FROM users WHERE role_id = 3) as total_customers,
        (SELECT COALESCE(SUM(total_amount), 0) FROM orders WHERE DATE(created_at) = CURDATE()) as today_revenue,
        (SELECT COALESCE(SUM(total_amount), 0) FROM orders WHERE MONTH(created_at) = MONTH(CURDATE())) as monthly_revenue;
END$$
DELIMITER ;

-- =====================================================
-- GRANT PERMISSIONS (Hak Akses)
-- =====================================================

-- Buat user aplikasi dengan hak terbatas
CREATE USER IF NOT EXISTS 'shopease_app'@'localhost' IDENTIFIED BY 'secure_password_here';
GRANT SELECT, INSERT, UPDATE, DELETE ON shopease_db.* TO 'shopease_app'@'localhost';

-- Buat user admin dengan hak lebih
CREATE USER IF NOT EXISTS 'shopease_admin'@'localhost' IDENTIFIED BY 'admin_secure_password';
GRANT ALL PRIVILEGES ON shopease_db.* TO 'shopease_admin'@'localhost';

FLUSH PRIVILEGES;