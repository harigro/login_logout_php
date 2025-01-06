<?php
$host = 'localhost';
$db = 'login_system';
$user = 'root'; // Ganti dengan username MySQL Anda
$pass = ''; // Ganti dengan password MySQL Anda

try {
    // Koneksi ke MySQL tanpa memilih database
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Membuat database jika belum ada
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $db");

    // Menggunakan database yang baru dibuat
    $pdo->exec("USE $db");

    // Membuat tabel users jika belum ada
    $createTableSQL = "
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) NOT NULL,
            password VARCHAR(255) NOT NULL
        );
    ";
    $pdo->exec($createTableSQL);

    // Menambahkan data pengguna default jika tabel kosong (opsional)
    $checkUserSQL = "SELECT COUNT(*) FROM users";
    $stmt = $pdo->query($checkUserSQL);
    $userCount = $stmt->fetchColumn();

    if ($userCount == 0) {
        // Menambahkan data pengguna default
        $insertUserSQL = "INSERT INTO users (username, password) VALUES
                          ('user123', SHA2('password123', 256))";
        $pdo->exec($insertUserSQL);
    }

} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
