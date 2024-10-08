# Aplikasi Tes MBTI

## Deskripsi

Aplikasi ini berbasis Laravel dan dirancang untuk mengelola dan mengadakan tes MBTI (Myers-Briggs Type Indicator). Aplikasi ini memungkinkan pengguna untuk mengeksplorasi tipe-tipe kepribadian MBTI dan mengambil tes. Namun, hanya pengguna yang telah terdaftar dan masuk yang dapat menyelesaikan tes.

## Fitur

- **Manajemen Admin**:
    - Tambah User
    - Edit User
    - Delete User
    - Ekspor data User
- **Akses Publik**:
  - Halaman utama menampilkan penjelasan rinci tentang semua 16 tipe kepribadian MBTI.
  - Pengguna dapat melihat tes, tetapi harus masuk untuk menyelesaikannya.

- **Keamanan Akses**:
  - Hanya pengguna yang terdaftar yang dapat melanjutkan dan menyelesaikan tes MBTI setelah login.

## Instalasi

1. **Clone Repositori**:
   ```bash
   git clone https://github.com/yazid-bustomi/tes-mbti.git
   cd tes-mbti

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

## User Login
**Admin** 
- User : admin Password : 123

**User**
- User : user Password : 123



## Screnshot
- Home
![Home](https://github.com/yazid-bustomi/tes-mbti/blob/main/screnshot-app/home.png?raw=true)

- About
![About](https://github.com/yazid-bustomi/tes-mbti/blob/main/screnshot-app/about.png?raw=true)

- Pertanyaan Tes
![Tes-1](https://github.com/yazid-bustomi/tes-mbti/blob/main/screnshot-app/tes-1.png?raw=true)

- Tombol next tidak aktif ketika belum terisi semua
![Tes-2](https://github.com/yazid-bustomi/tes-mbti/blob/main/screnshot-app/tes-2(ketika%20ada%20yang%20belum%20terisi).png?raw=true)

- Submit Tes
![Submit-tes](https://github.com/yazid-bustomi/tes-mbti/blob/main/screnshot-app/submit-tes.png?raw=true)

- Hasil Tes
![Hasil-Tes](https://github.com/yazid-bustomi/tes-mbti/blob/main/screnshot-app/hasil-tes.png?raw=true)

- Manajement User
![manajement-user](https://github.com/yazid-bustomi/tes-mbti/blob/main/screnshot-app/manajement-user.png?raw=true)

- Daftar User
![Daftar-user](https://github.com/yazid-bustomi/tes-mbti/blob/main/screnshot-app/manajement-user.png?raw=true)

- Export User
![Export-user](https://github.com/yazid-bustomi/tes-mbti/blob/main/screnshot-app/fitur-export.png?raw=true)
