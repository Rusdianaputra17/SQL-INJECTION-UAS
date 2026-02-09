# Penanganan Serangan SQL Injection

## Cara Instalasi dan Menjalankan Aplikasi

### Langkah-langkah

1. **Clone Repository**
 ```bash
    https://github.com/Rusdianaputra17/SQL-INJECTION-UAS.git
```

2. **Setup Database**
   * Buka **XAMPP** -> Klik tombol **Start MYSQL** setelah itu klik Admin (membuka phpMyAdmin).
   * Buat database baru dengan nama: **`sql_injection`**.
   * **Import** file **`sql_injection`**.

3. **Konfigurasi Koneksi**
   * Buka file `koneksi.php`
   * Sesuaikan konfigurasi database dengan server lokal Anda:
      ```php
      $host = "localhost";
      $user = "root";           // sesuaikan dengan user MySQL
      $pass = "";               // sesuaikan dengan password MySQL
      $db   = "sql_injection";  
      ```
4.  **Jalankan Aplikasi**
    *  Buka aplikasi Visual Studio Code.
    * Jalankan PHP Built-in Web Server dengan mengketik `php -S localhost:8000` pada terminal.
    * Setelah itu tambahkakan file yang ingin di jalankan, misalnya `php -S localhost:8000/login.html` di browser.