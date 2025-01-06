# Program Login dan Logout dengan PHP

Aplikasi ini adalah implementasi sederhana sistem login dan logout menggunakan PHP. Aplikasi terdiri dari empat file utama: `config.php`, `login.php`, `logout.php`, dan `welcome.php`. Data pengguna disimpan dalam database MySQL.

## Fitur Utama

- **Login**: Pengguna dapat masuk ke sistem dengan memasukkan nama pengguna dan kata sandi yang valid.  
- **Logout**: Pengguna dapat keluar dari sistem untuk mengakhiri sesi mereka.  
- **Halaman Selamat Datang (Welcome)**: Setelah login berhasil, pengguna akan diarahkan ke halaman yang menampilkan pesan selamat datang.  
- **Manajemen Sesi**: PHP Sessions digunakan untuk mengelola status login pengguna.  

---

## Persyaratan Sistem

- **Bahasa Pemrograman**: PHP 8.2.12 atau lebih tinggi.  
- **Web Server**: Apache atau Nginx.  
- **Database**: MySQL atau MariaDB.  

---

## Cara Instalasi

### 1. Clone Repositori
Clone repositori proyek ini ke direktori lokal Anda:  
```bash
git clone https://github.com/username/belajar_php.git
```

### 2. Pengaturan Database
Buat database baru beserta tabel untuk menyimpan data pengguna. Berikut adalah contoh skema tabel `users`:  
```sql
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
```

### 3. Konfigurasi Koneksi Database
- Edit file `config.php` untuk menyesuaikan detail koneksi ke database Anda.  
- Masukkan nama host, nama database, nama pengguna, dan kata sandi.  

### 4. Jalankan Program
- Letakkan semua file proyek di direktori web server Anda, misalnya folder `htdocs` pada XAMPP.  
- Akses aplikasi melalui browser dengan alamat `http://localhost/login.php`.  

---

## Penjelasan Struktur Program

Berikut adalah deskripsi dari masing-masing file:  

1. **config.php**:  
   Menangani koneksi ke database MySQL.  

2. **login.php**:  
   Halaman untuk login pengguna. Jika kredensial valid, pengguna akan diarahkan ke halaman `welcome.php`.  

3. **logout.php**:  
   Halaman untuk mengakhiri sesi pengguna dan keluar dari sistem.  

4. **welcome.php**:  
   Halaman selamat datang yang ditampilkan setelah login berhasil.  

---

## Contoh Struktur Direktori

```plaintext
belajar_php/
├── config.php          # Koneksi ke database
├── login.php           # Halaman login
├── logout.php          # Halaman logout
├── welcome.php         # Halaman selamat datang
└── README.md           # Dokumentasi proyek
```

---

## Panduan Penggunaan

1. **Login**:  
   - Akses `login.php`.  
   - Masukkan nama pengguna dan kata sandi yang valid.  
   - Jika berhasil, Anda akan diarahkan ke `welcome.php`.  

2. **Logout**:  
   - Pada `welcome.php`, klik tombol logout untuk mengakhiri sesi.  
   - Anda akan diarahkan kembali ke `login.php`.  

---

## Kontribusi

Kami menyambut kontribusi Anda! Fork repositori ini, buat perubahan yang diperlukan, dan kirim pull request.  

---

## Lisensi

Proyek ini dilisensikan di bawah [Lisensi MIT](LICENSE).
