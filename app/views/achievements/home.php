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
                        <a href="/achievements/<?= $achievement['id']?>" class ="text-[#D4AF37]">Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </section>

</body>

</html>