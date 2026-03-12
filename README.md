# Portto - Portfolio Website

Aplikasi web portfolio/showcase project yang dibangun dengan **Laravel 12**, **Tailwind CSS**, dan **Laravel Sail** (Docker).

## Tech Stack

- **Backend:** Laravel 12 (PHP 8.4)
- **Auth:** Laravel Breeze
- **Frontend:** Blade + Tailwind CSS + Vite
- **Database:** MySQL 8.0
- **Container:** Docker + Laravel Sail

## Prasyarat

- [Docker](https://docs.docker.com/get-docker/) terinstall dan running
- [Composer](https://getcomposer.org/) terinstall
- User sudah masuk ke group `docker` (opsional, agar tidak perlu `sudo`):
  ```bash
  sudo usermod -aG docker $USER
  # Logout dan login kembali agar berlaku
  ```

## Instalasi

### 1. Clone repository

```bash
git clone https://github.com/immualifin/Porto-Docker.git
cd Porto-Docker
```

### 2. Salin file environment

```bash
cp .env.example .env
```

### 3. Konfigurasi database di `.env`

Ubah konfigurasi database agar sesuai dengan Docker Compose:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```

### 4. Install dependencies Composer

```bash
composer install
```

### 5. Generate application key

```bash
php artisan key:generate
```

### 6. Jalankan container Docker (Laravel Sail)

```bash
./vendor/bin/sail up -d
```

> **Note:** Jika belum masuk group `docker`, tambahkan `sudo` di depan setiap perintah Sail.

### 7. Fix permission storage (jika diperlukan)

```bash
./vendor/bin/sail exec -u root laravel.test bash -c "chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache"
```

### 8. Buat storage link

```bash
./vendor/bin/sail artisan storage:link
```

### 9. Jalankan migrasi dan seeder

```bash
./vendor/bin/sail artisan migrate --seed
```

### 10. Install dan build frontend assets

```bash
./vendor/bin/sail exec -u root laravel.test bash -c "npm install && npm run build"
```

### 11. Akses aplikasi

Buka browser dan akses: **http://localhost**

## Login Default

| Email              | Password   |
|--------------------|------------|
| test@example.com   | password   |

## Perintah Sail yang Berguna

```bash
./vendor/bin/sail up -d          # Start containers (background)
./vendor/bin/sail down            # Stop containers
./vendor/bin/sail artisan ...     # Jalankan artisan command
./vendor/bin/sail npm ...         # Jalankan npm command
./vendor/bin/sail mysql           # Akses MySQL CLI
./vendor/bin/sail logs            # Lihat container logs
```

## Fitur

- **Halaman Publik:** Homepage portfolio, detail project, form booking/order
- **Admin Panel:** CRUD project, tools, screenshots, dan lihat order masuk
- **Autentikasi:** Register, login, reset password (Laravel Breeze)

## Struktur Database

| Tabel                | Deskripsi                              |
|----------------------|----------------------------------------|
| `users`              | Data user/admin                        |
| `projects`           | Data project portfolio                 |
| `tools`              | Teknologi/tools yang digunakan         |
| `project_tools`      | Relasi many-to-many project ↔ tools    |
| `project_screenshots`| Screenshot project                     |
| `project_orders`     | Order/booking dari client              |

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
