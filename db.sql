CREATE DATABASE toko_online;
USE toko_online;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100),
    harga INT,
    gambar VARCHAR(255)
);

CREATE TABLE keranjang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    produk_id INT,
    jumlah INT
);

CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total INT,
    alamat TEXT
);

INSERT INTO produk (nama_produk, harga, gambar) VALUES
('Sepatu Sneakers', 250000, 'sepatu1.jpg'),
('Sepatu Running', 300000, 'sepatu2.jpg');
