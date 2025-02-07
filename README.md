# QR Code Generator dengan Laravel

Project ini merupakan aplikasi Laravel yang memungkinkan pengguna untuk membuat QR Code sebagai tanda tangan digital.

## Fitur
- Generate QR Code berdasarkan input pengguna.
- Menampilkan QR Code di halaman web.
- Menggunakan Laravel sebagai backend.

## Instalasi & Menjalankan Project

### 1. Clone Repository
```sh
git clone https://github.com/noval-14/qrkode_project.git
cd qrkode_project
```

### 2. Install Dependency
```sh
composer install
npm install
```

### 3. Konfigurasi Environment
Buat file `.env` dan sesuaikan dengan konfigurasi database.
```sh
cp .env.example .env
php artisan key:generate
```

### 4. Migrasi Database
```sh
php artisan migrate
```

### 5. Compile Frontend Assets
```sh
npm run dev
```

### 6. Menjalankan Server
```sh
php artisan serve
```
Akses aplikasi di [http://localhost:8000](http://localhost:8000)

## Cara Menggunakan
1. Masukkan teks atau URL ke dalam input form.
2. Pilih ukuran QR Code.
3. Klik tombol "Generate QR Code".
4. QR Code akan muncul di samping form input.

![gambar](https://github.com/user-attachments/assets/bc9413cf-c07c-4096-9aa7-7fe2f9c6a016)


## Lisensi
Project ini dilisensikan di bawah MIT License.

