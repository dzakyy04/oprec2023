# OPREC HMIF UNSRI 2023

 Website OPREC HMIF UNSRI 2023

## Installation

Clone Repositori

    git clone https://github.com/HMIF-UNSRI/oprec2023.git

Pindah ke folder repo

    cd oprec2023

Install semua depedencies menggunakan composer

    composer install

Copy contoh file env dan buat perubahan konfigurasi yang diperlukan di file .env

    cp .env.example .env

Jalankan migrasi database (**Atur koneksi database di .env sebelum melakukan migrasi**)

    php artisan migrate

Seed database

    php artisan migrate:fresh --seed

Mulai local development server

    php artisan serve

Sekarang website dapat diakases di http://localhost:8000
