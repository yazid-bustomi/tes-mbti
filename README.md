# Aplikasi Tes MBTI

## Deskripsi

Aplikasi ini berbasis Laravel dan dirancang untuk mengelola dan mengadakan tes MBTI (Myers-Briggs Type Indicator). Aplikasi ini memungkinkan pengguna untuk mengeksplorasi tipe-tipe kepribadian MBTI dan mengambil tes. Namun, hanya pengguna yang telah terdaftar dan masuk yang dapat menyelesaikan tes.

## Fitur

- **Manajemen Pengguna**:
  - **Akses Khusus Admin**: Hanya admin yang dapat mengekspor, mengedit, dan menambahkan data pengguna.
  
- **Akses Publik**:
  - Halaman utama menampilkan penjelasan rinci tentang semua 16 tipe kepribadian MBTI.
  - Pengguna dapat melihat tes, tetapi harus masuk untuk menyelesaikannya.

- **Keamanan Akses**:
  - Hanya pengguna yang terdaftar yang dapat melanjutkan dan menyelesaikan tes MBTI setelah login.

## Instalasi

1. **Clone Repositori**:
   ```bash
   git clone https://github.com/yazid-bustomi/tes-mbti.git
   cd mbti-test-application

2. **Copy .env**:
    ```bash
    cp .env.example .env

3. **Generate Key**:
    ```bash
    php artisan key:generate

4. **Setting Database**:
    - Tambahkan database baru
    - Setting nama database .env sesuaikan dengan yang baru di buat
    - Setelah selesai jalankan migration
    ``` bash
    php artisan migrate

5. **Tambahkan Data Seeders**:
    ``` bash
    php artisan db:seed

6. **Aplikasi siap di pakai**:
    ```bash
    php artisan serve
