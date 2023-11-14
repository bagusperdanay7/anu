# Note Apps

Note Apps ini adalah sebuah aplikaasi web yang dibuat untuk mencatat keuangan customer dalam kehidupan sehari hari. Tujuan dari projek ini adalah menambahkan portofolio dan meningkatkan skill.

Tim Proyek:
+ [Robi Nurhidayat](https://github.com/Robi-Nurhidayat) => Front-End Developer, Project Manager
+ [Bagus Perdana Y.](https://github.com/bagusperdanay7) => Back-End Developer

#### Back-End Tools:
- PHP 8.2
- Laravel
- Composer
- MySQL Database
- OpenAPI & Swagger
- JWT

#### Front-End Tools:
- React
- TypeScript
- TailwindCSS
- Redux

## Repository
+ Back-End : https://github.com/bagusperdanay7/note-apps-be
+ Front-End : https://github.com/Robi-Nurhidayat/note-app-frontend

## Lisensi

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

### Run Laravel
Klona Repository Ke Komputer Local / Server
```bash
git clone https://github.com/bagusperdanay7/note-apps-be
```

Masuk ke directory note-apps-be
```bash
cd note-apps-be
```

Update Composer Package
```bash
composer update
```

Bangkitkan Key Baru
```bash
php artisan key:generate
```

Generate Secret Key
```bash
php artisan jwt:secret
```

Migrate Database
```bash
php artisan migrate
```

Jalankan Laravel Server
```bash
php artisan serve
```