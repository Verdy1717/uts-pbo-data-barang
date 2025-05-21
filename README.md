# UTS PBO - Laravel Data Barang dan Kategori

Proyek ini merupakan implementasi Ujian Tengah Semester (UTS) untuk mata kuliah **Pemrograman Berbasis Objek (PBO)**, menggunakan **Laravel 12** dan **Filament Admin Panel**. Aplikasi ini mengelola data **Barang** dan **Kategori** dengan relasi antar tabel yang sesuai dengan standar Eloquent ORM.

---

## 📌 Fitur Utama

- CRUD Data **Barang**
- CRUD Data **Kategori**
- Relasi **Barang -> Kategori** (Many to One)
- Tampilan Admin menggunakan **Filament v3**
- Form input otomatis berdasarkan schema
- Validasi otomatis untuk field wajib

---

## 📁 Struktur Relasi

- **Barang**
  - nama (string)
  - harga (integer)
  - stok (integer)
  - deskripsi (text)
  - kategori_id (foreign key ke `kategori`)
- **Kategori**
  - nama_kategori (string)

Relasi:
```php
// Barang.php
public function kategori() {
    return $this->belongsTo(Kategori::class);
}

1. Clone Repository
git clone https://github.com/NAMA_KAMU/uts-pbo-data-barang.git
cd uts-pbo-data-barang

2. Install Dependensi
composer install

3. Salin file .env & Generate Key
cp .env.example .env
php artisan key:generate

4. Migrasi Database
php artisan migrate

5. Jalankan Aplikasi
php artisan serve

Buat Akun Admin
php artisan make:filament-user
Lalu isi email, nama, dan password admin untuk login ke halaman:

http://127.0.0.1:8000/admin

Screenshot Dashboard
<img width="959" alt="image" src="https://github.com/user-attachments/assets/7906c02a-82a3-4d47-9928-593720bd02fb" />
<img width="953" alt="image" src="https://github.com/user-attachments/assets/285b171b-0b42-4679-bb9e-ca4f5f7e1637" />
<img width="951" alt="image" src="https://github.com/user-attachments/assets/7256fc34-5a84-47dd-b873-eeb35351c521" />

Teknologi yang Digunakan
Laravel 12
PHP 8.3
Filament v3
SQLite (bisa diganti MySQL)
VS Code + WSL (Ubuntu)
Git & GitHub



