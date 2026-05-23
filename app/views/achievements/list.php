<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>List Data - Full Page</title>
</head>

<body class="bg-[#141414] min-h-screen w-full">

    <div class="w-full min-h-screen bg-[#1D2746] p-6 md:p-12 transition-all">

        <div class="flex flex-col sm:flex-row items-center justify-between border-b pb-6 gap-4">
            <div class="flex items-center gap-2">
                <img src="/assets/images/karyabox.png" alt="logo" class="w-12 h-12 object-contain"
                    onerror="this.src='https://via.placeholder.com/48?text=Logo'">
            </div>

            <div class="relative w-full sm:w-[380px]">
                <input type="text" placeholder="Cari di KaryaBox"
                    class="w-full bg-transparent border border-yellow-400 rounded-full pl-12 pr-4 py-2.5 text-yellow-400 placeholder-yellow-400/70 outline-none focus:ring-2 focus:ring-yellow-400/50 transition">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 text-yellow-400" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between mt-8 mb-8">
            <a href="/achievements/insert"
                class="bg-yellow-500 text-black w-12 h-12 rounded-full text-3xl font-bold flex items-center justify-center hover:scale-110 transition active:scale-95 shadow-md">
                +
            </a>

            <h1 class="text-yellow-500 text-3xl md:text-4xl font-bold tracking-wide">
                List Data
            </h1>

            <div class="w-12"></div>
        </div>

        <div class="flex flex-row flex-wrap gap-4 justify-start items-start w-full">

            <!-- <?php if (!empty($achievementsWithoutBanner) && is_array($achievementsWithoutBanner)): ?> -->
                <?php foreach ($achievementsWithoutBanner as $achievement): ?>

                    <div
                        class="border border-yellow-500/50 bg-[#151d35] rounded-xl p-3.5 flex flex-col justify-between gap-3 hover:border-yellow-400 transition shadow-md w-full sm:w-[280px]">

                        <div class="flex items-center gap-3 text-left w-full">
                            <img src="/<?= !empty($achievement['image_url']) ? $achievement['image_url'] : 'assets/images/default-avatar.png'; ?>"
                                class="w-14 h-14 rounded-lg object-cover border border-yellow-400/80 shadow-inner shrink-0"
                                onerror="this.src='https://via.placeholder.com/56?text=Karya'">

                            <div class="min-w-0 flex-1">
                                <h2 class="text-yellow-400 text-xl font-bold leading-tight truncate">
                                    <?= htmlspecialchars($achievement['name']) ?>
                                </h2>
                                <p class="text-yellow-400/80 font-medium mt-0.5 text-xs truncate">
                                    <?= isset($achievement['nama_sekolah']) ? htmlspecialchars($achievement['nama_sekolah']) : 'SD Immanuel 2'; ?>
                                </p>
                            </div>
                        </div>

                        <div class="flex justify-between gap-1.5 w-full border-t border-gray-700/40 pt-2.5 mt-1">
                            <a href="/achievement/edit/<?= $achievement['id']; ?>"
                                class="bg-yellow-500 hover:bg-yellow-400 text-black py-1 rounded-full font-bold text-[11px] transition flex-1 text-center">Edit</a>
                            <a href="/achievements/<?= $achievement['id'] ?>"
                                class="bg-yellow-500 hover:bg-yellow-400 text-black py-1 rounded-full font-bold text-[11px] transition flex-1 text-center">Detail</a>
                            <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data siswa ini?')"
                                action="/achievements/<?= $achievement['id'] ?>" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="bg-yellow-500 hover:bg-yellow-400 text-black py-1 rounded-full font-bold text-[11px] transition flex-1 text-center">Hapus</button>
                            </form>
                        </div>

                    </div> <?php endforeach; ?>
            <?php else: ?>
                <div class="w-full text-center p-12 border border-dashed border-gray-600 rounded-xl">
                    <p class="text-gray-400 text-sm">Belum ada data karya siswa tanpa banner saat ini.</p>
                </div>
            <?php endif; ?>

        </div>
    </div>

</body>

</html>