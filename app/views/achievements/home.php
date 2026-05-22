<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/output.css">
    <title>Home / Karya-Box</title>
</head>

<body class="bg-[#1E263D] text-white">

    <!-- Header -->
    <header class="flex items-center justify-between px-6 py-4">

        <!-- Left -->
        <div class="flex items-center gap-4">
            <img class="h-12" src="/assets/images/karyabox.png" alt="logo">

            <a href="#" class="bg-[#D4AF37] text-black px-4 py-1 rounded-md text-sm font-semibold">About Us</a>
            <a href="#" class="bg-[#D4AF37] text-black px-4 py-1 rounded-md text-sm font-semibold">Galeri</a>
        </div>

    </header>

    <hr class="border-[#D4AF37] mx-6">

    <!-- Banner -->
    <div class="flex ">
        <?php foreach ($achievementBanners as $banner): ?>
            <section class="px-6 mt-4">
                <div class="rounded-xl overflow-hidden relative">
                    <img src="<?= $banner['banner_image'] ?>" class="w-full h-[250px] object-cover" alt="">
                    <div class="absolute inset-0 bg-black/30"></div>
                </div>
            </section>
        <?php endforeach; ?>
    </div>

    <!-- Tambahakan kolom is_show_to_banner dengan nilai true atau false di table achievements -->

    <!-- Terkini -->
    <section class="px-6 mt-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Terkini</h2>
            <a href="#" class="text-[#D4AF37] text-sm">Buat Lainnya</a>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

            <!-- Card -->
            <?php foreach ($achievementsWithoutBanner as $achievement): ?>
                <div class="bg-[#2A3553] p-3 rounded-lg flex gap-3 items-center">
                    <img src="<?= $achievement['image_url'] ?>" class="w-14 h-14 rounded-md object-cover">
                    <div>
                        <h3 class="text-base font-semibold"><?= $achievement['title'] ?></h3>
                        <p class="text-sm text-gray-300"><?= $achievement['category_name'] ?></p>
                        <p class="text-xs text-gray-300"><?= $achievement['nama_sekolah'] ?></p>
                        <a href="/achievements/<?= $achievement['id'] ?>" class="text-[#D4AF37]">Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer class="text-white-500 mt-8">
        <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-4 gap-10">

            <!-- Logo & Desc -->
            <div>
                <h1 class="text-2xl font-bold text-white mb-3 ml-6">
                    Karya<span class="text-[#D4AF37]">Box</span>
                </h1>

                <p class="text-zinc-400 text-sm leading-relaxed">
                    Platform digital untuk menampilkan karya terbaik siswa
                    dan menjadi wadah kreativitas tanpa batas.
                </p>
            </div>

            <!-- Navigation -->
            <div>
                <h2 class="font-semibold text-lg mb-4">Navigation</h2>

                <ul class="space-y-2 text-zinc-400 text-sm">
                    <li>
                        <a href="/" class="hover:text-orange-500 transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="/gallery" class="hover:text-orange-500 transition">
                            Gallery
                        </a>
                    </li>

                    <li>
                        <a href="/about" class="hover:text-orange-500 transition">
                            About
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Bottom -->
            <div class="border-t border-zinc-800">
                <div
                    class="max-w-7xl mx-auto px-6 py-5 flex flex-col md:flex-row justify-between items-center text-sm text-zinc-500 ">

                    <p>
                        © 2026 Karyabox. All rights reserved.
                    </p>
                </div>

</body>

</html>