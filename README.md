# 🎬 Movie App

Movie App adalah aplikasi web berbasis Laravel yang digunakan untuk
menampilkan, mencari, dan melihat detail film menggunakan API eksternal
https://www.omdbapi.com/

Username: aldmic

Password: 123abc123

Demo Website : https://web-test-flower.up.railway.app/

------------------------------------------------------------------------

## 📌 Tech Stack & Library

### 🔹 Backend

-   Laravel (PHP Framework)
-   Eloquent ORM
-   Laravel HTTP Client / Guzzle
-   MySQL Database
-   Composer

### 🔹 Frontend

-   Blade Template Engine
-   Bootstrap / CSS
-   JavaScript (Fetch API / Axios)
-   Laravel Mix
-   NPM

------------------------------------------------------------------------

## 🏗️ Architecture

Aplikasi menggunakan pola **MVC (Model-View-Controller)**:

User Request\
→ Routes\
→ Controller\
→ Model\
→ Database / External API\
→ View (Blade Template)\
→ Response ke User

Struktur utama:

    app/
     ├── Http/Controllers
     ├── Models
    routes/
     ├── web.php
    resources/
     ├── views/
    database/
     ├── migrations/

------------------------------------------------------------------------

## 🚀 Fitur Lengkap

### 🎞️ 1. Daftar Film

-   Menampilkan daftar film populer / terbaru
-   Pagination
-   Poster film ditampilkan
-   Rating film

### 🔍 2. Search Film

-   Pencarian berdasarkan judul
-   Real-time query ke API / database
-   Hasil ditampilkan dalam bentuk card

### 📖 3. Detail Film

-   Poster ukuran besar
-   Judul film
-   Tanggal rilis
-   Rating
-   Sinopsis lengkap
-   Genre

### ❤️ 4. Favorite (Jika Diimplementasikan)

-   Simpan film ke daftar favorit
-   Tersimpan di database
-   Bisa dihapus dari favorit

### 🔐 5. Authentication (Opsional)

-   Login & Register
-   Session-based authentication

------------------------------------------------------------------------

## 🖼️ Screenshot Preview

Tambahkan screenshot ke folder berikut:

    public/screenshots/

Lalu gunakan format berikut:

### 🏠 Homepage

<img width="1916" height="1004" alt="A" src="https://github.com/user-attachments/assets/a68667aa-468d-4ae0-b14d-f1dfb8376db6" />


### 🔎 Favorite Movie

<img width="1918" height="1007" alt="c" src="https://github.com/user-attachments/assets/54ad7b32-67cf-4431-9e85-6ce8a0be96c2" />

### 🎬 Detail Movie

<img width="1918" height="1009" alt="B" src="https://github.com/user-attachments/assets/186589a6-c599-446b-9d46-f5fe9b88abc3" />


------------------------------------------------------------------------

## ⚙️ Cara Instalasi

### 1️⃣ Clone Repository

    git clone https://github.com/ariq123/movie_app.git
    cd movie_app

### 2️⃣ Install Dependency

    composer install
    npm install

### 3️⃣ Setup Environment

    cp .env.example .env
    php artisan key:generate

Edit file `.env` dan sesuaikan database:

    DB_DATABASE=movieapp
    DB_USERNAME=root
    DB_PASSWORD=

### 4️⃣ Migrasi Database

    php artisan migrate

### 5️⃣ Build Frontend

    npm run dev

### 6️⃣ Jalankan Server

    php artisan serve

Akses di: http://localhost:8000

------------------------------------------------------------------------

## 🧪 Testing

    php artisan test

------------------------------------------------------------------------

## 📦 Deployment

Untuk production:

    npm run build
    php artisan config:cache
    php artisan route:cache

------------------------------------------------------------------------

## 📄 License

MIT License
