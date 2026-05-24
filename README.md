# 📦 KaryaBox

**KaryaBox** adalah aplikasi berbasis web untuk mengelola dan menampilkan karya-karya siswa dari berbagai sekolah. Aplikasi ini memungkinkan admin untuk menambah, mengedit, menghapus, dan menampilkan data karya siswa secara mudah.

---

## 👥 Anggota Kelompok 2

| Nama | Role |
|---|---|
| Albert James Victorius | Login & Authentication |
| Collin Lee | Detail & List Karya |
| Enrico Nathanael | Insert & Landing Page |
| Darren Bagus Susnata | UI/UX & Frontend |

---

## 🔗 Link Repository

[https://github.com/Collin28/KaryaBox.git](https://github.com/Collin28/KaryaBox.git)

---

## 🚀 Fitur yang Sudah Selesai

- ✅ **Login Admin** — Autentikasi admin dengan username dan password
- ✅ **Insert Karya** — Menambah data karya siswa baru dengan foto
- ✅ **List Karya** — Menampilkan semua karya siswa dalam bentuk kartu
- ✅ **Edit Karya** — Mengubah data karya siswa yang sudah ada
- ✅ **Delete Karya** — Menghapus data karya siswa

---

## 🕐 Fitur yang Direncanakan

- ⏳ **Register Admin** — Pendaftaran akun admin baru
- ⏳ **Search Karya** — Pencarian karya berdasarkan nama atau judul
- ⏳ **Filter Karya** — Filter berdasarkan kategori atau sekolah
- ⏳ **Detail Karya** — Halaman detail lengkap setiap karya
- ⏳ **Logout** — Keluar dari sesi admin
- ⏳ **Dashboard Admin** — Halaman statistik dan ringkasan data

---

## 🛠️ Teknologi yang Digunakan

- **PHP** — Backend & routing
- **MySQL** — Database
- **Tailwind CSS** — Styling
- **Laragon** — Local development server
- **mysqli** — Koneksi database

---

## 🗄️ Struktur Database

### Tabel `achievements`
| Kolom | Tipe | Keterangan |
|---|---|---|
| id | INT | Primary key |
| name | VARCHAR | Nama siswa |
| title | VARCHAR | Judul karya |
| description | TEXT | Deskripsi karya |
| category_id | INT | Foreign key ke tabel categories |
| unit_sekolah_id | INT | Foreign key ke tabel unit_sekolah |
| image_url | VARCHAR | Path foto karya |
| banner_image | VARCHAR | Path banner |
| created_at | TIMESTAMP | Waktu dibuat |

### Tabel `admin`
| Kolom | Tipe | Keterangan |
|---|---|---|
| id | INT | Primary key |
| name | VARCHAR | Username admin |
| password | VARCHAR | Password admin |

### Tabel `unit_sekolah`
| Kolom | Tipe | Keterangan |
|---|---|---|
| id | INT | Primary key |
| nama_sekolah | VARCHAR | Nama sekolah |

### Tabel `categories`
| Kolom | Tipe | Keterangan |
|---|---|---|
| id | INT | Primary key |
| category_name | VARCHAR | Nama kategori |

---

## 📁 Struktur Folder

```
KaryaBox/
├── app/
│   ├── config/
│   ├── controllers/
│   │   ├── AchievementController.php
│   │   ├── AuthController.php
│   │   ├── HomeController.php
│   │   └── LandingController.php
│   ├── core/
│   │   ├── Controller.php
│   │   ├── Database.php
│   │   └── Router.php
│   ├── models/
│   │   ├── Achievement.php
│   │   └── Admin.php
│   └── views/
│       ├── achievements/
│       │   ├── edit.php
│       │   ├── insert.php
│       │   ├── list.php
│       │   └── show.php
│       └── auth/
│           └── login.php
├── public/
│   ├── assets/
│   ├── css/
│   └── index.php
└── README.md
```

---

## ⚙️ Cara Menjalankan Project

### 1. Clone repository
```bash
git clone https://github.com/Collin28/KaryaBox.git
```

### 2. Pindah ke folder project
```bash
cd KaryaBox
```

### 3. Import database
- Buka **phpMyAdmin** di `http://localhost/phpmyadmin`
- Buat database baru bernama `karyabox`
- Import file SQL yang tersedia

### 4. Jalankan dengan Laragon
- Taruh folder project di `C:\laragon\www\KaryaBox`
- Buka **Laragon** → klik **Start All**
- Buka browser dan akses `http://karyabox.test`

### 5. Login sebagai Admin
- Buka `http://karyabox.test/admin/login`
- Username: `admin1`
- Password: `101010`

---

## 📸 Tampilan Aplikasi

| Halaman | URL |
|---|---|
| Landing Page | `http://karyabox.test/` |
| Login Admin | `http://karyabox.test/admin/login` |
| List Karya | `http://karyabox.test/achievements/list` |
| Tambah Karya | `http://karyabox.test/achievements/insert` |

---

*© 2026 KaryaBox — Kelompok 2*
