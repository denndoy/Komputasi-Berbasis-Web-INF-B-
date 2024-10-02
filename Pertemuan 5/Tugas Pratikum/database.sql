CREATE DATABASE web011;
USE web011;
CREATE TABLE kontak (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50),
    email VARCHAR(50),
    hobby VARCHAR(100),
    gender VARCHAR(50),
    tanggal_lahir DATE
);


SELECT * FROM kontak;
