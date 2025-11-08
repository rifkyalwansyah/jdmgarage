# JDMGarage - Sistem Showroom Mobil JDM

<img width="486" height="247" alt="image" src="https://github.com/user-attachments/assets/5e64f327-e100-4868-bb96-5af9d8552433" />


## 📝 Deskripsi

JDMGarage adalah sistem manajemen showroom mobil JDM (Japanese Domestic Market) yang dibangun menggunakan Laravel Framework. Aplikasi ini memudahkan admin dalam mengelola data mobil, upload foto, dan tracking status mobil.

## ✨ Fitur

- ✅ CRUD Data Mobil (Create, Read, Update, Delete)
- ✅ Upload & Manajemen Foto Mobil
- ✅ Status Mobil (Available, Reserved, Sold)
- ✅ Responsive Design
- ✅ Dark Theme UI
- ✅ Pagination
- ✅ Validasi Form

## 🛠️ Teknologi

- **Backend:** Laravel 10, PHP 8.x
- **Database:** MySQL
- **Frontend:** Bootstrap 5, Blade Template
- **Icons:** Font Awesome

## 📦 Instalasi

### Requirements
- PHP >= 8.1
- Composer
- MySQL
- Laragon / XAMPP / WAMP

### Langkah Instalasi

1. **Clone Repository**
```bash
git clone https://github.com/username-anda/jdmgarage.git
cd jdmgarage
```

2. **Install Dependencies**
```bash
composer install
```

3. **Setup Environment**
```bash
cp .env.example .env
php artisan key:generate
```

4. **Konfigurasi Database**

Edit file `.env`:
```
DB_DATABASE=jdmgarage
DB_USERNAME=root
DB_PASSWORD=
```

5. **Migrate Database**
```bash
php artisan migrate
```

6. **Storage Link**
```bash
php artisan storage:link
```

7. **Seed Data (Optional)**
```bash
php artisan db:seed --class=CarSeeder
```

8. **Run Server**
```bash
php artisan serve
```

9. **Akses Aplikasi**
```
http://localhost:8000
```

## 📸 Screenshots

### Homepage
<img width="1920" height="926" alt="image" src="https://github.com/user-attachments/assets/5de948d1-6dad-4c5c-bd63-28f1fe8630fc" />


### Form Tambah Mobil
<img width="1920" height="923" alt="image" src="https://github.com/user-attachments/assets/38ae13d8-0efd-42d7-865f-cbf184fe7209" />

### Detail Mobil
<img width="1920" height="925" alt="image" src="https://github.com/user-attachments/assets/cf09c973-5189-47bd-a444-380b0de89ca8" />

## 🗂️ Struktur Project
```
jdmgarage/
├── app/
│   ├── Http/Controllers/
│   │   └── CarController.php
│   └── Models/
│       └── Car.php
├── database/
│   ├── migrations/
│   └── seeders/
├── resources/
│   └── views/
│       ├── layouts/
│       └── cars/
├── routes/
│   └── web.php
└── public/
```

## 🚀 Pengembangan Selanjutnya

- [ ] Authentication System
- [ ] Search & Filter
- [ ] Multiple Image Upload
- [ ] Export Data (PDF/Excel)
- [ ] Admin Dashboard
- [ ] WhatsApp Integration

## 📄 License

MIT License

## 👨‍💻 Author

**[Nama Anda]**
- GitHub: [rifkyalwansyah](https://github.com/rifkyalwansyah)
- Email: rifkyalwansyah12@gmail.com

## 🙏 Acknowledgments

- Laravel Framework
- Bootstrap
- Font Awesome
