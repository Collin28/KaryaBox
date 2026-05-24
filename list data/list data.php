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

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 text-yellow-400"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>

        <div class="flex items-center justify-between mt-8 mb-8">
            <a href="/achievement/add"
                class="bg-yellow-500 text-black w-12 h-12 rounded-full text-3xl font-bold flex items-center justify-center hover:scale-110 transition active:scale-95 shadow-md">
                +
            </a>

            <h1 class="text-yellow-500 text-3xl md:text-4xl font-bold tracking-wide">
                List Data
            </h1>

            <div class="w-12"></div>
        </div>

        <div class="space-y-5">

            <div class="border border-yellow-500/60 bg-[#151d35] rounded-xl p-5 flex flex-col md:flex-row items-center justify-between gap-4 hover:border-yellow-400 transition shadow-sm">
                <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left w-full">
                    <img src="https://i.pravatar.cc/80?img=1"
                        class="w-20 h-20 rounded-lg object-cover border-2 border-yellow-400 shadow-inner">
                    <div>
                        <h2 class="text-yellow-400 text-2xl md:text-3xl font-bold leading-tight">Darren</h2>
                        <p class="text-yellow-400/90 font-medium mt-0.5 text-sm md:text-base">SD Immanuel 2</p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center gap-3 w-full md:w-auto">
                    <a href="/achievement/edit/1" class="bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-semibold text-sm transition hover:scale-105 min-w-[90px] text-center">Edit</a>
                    <a href="/achievement/detail/1" class="bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-semibold text-sm transition hover:scale-105 min-w-[90px] text-center">Detail</a>
                    <a href="/achievement/delete/1" onclick="return confirm('Hapus data Darren?')" class="bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-semibold text-sm transition hover:scale-105 min-w-[90px] text-center">Hapus</a>
                </div>
            </div>

            <div class="border border-yellow-500/60 bg-[#151d35] rounded-xl p-5 flex flex-col md:flex-row items-center justify-between gap-4 hover:border-yellow-400 transition shadow-sm">
                <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left w-full">
                    <img src="https://i.pravatar.cc/80?img=2"
                        class="w-20 h-20 rounded-lg object-cover border-2 border-yellow-400 shadow-inner">
                    <div>
                        <h2 class="text-yellow-400 text-2xl md:text-3xl font-bold leading-tight">Bagus</h2>
                        <p class="text-yellow-400/90 font-medium mt-0.5 text-sm md:text-base">SD Immanuel 2</p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center gap-3 w-full md:w-auto">
                    <a href="/achievement/edit/2" class="bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-semibold text-sm transition hover:scale-105 min-w-[90px] text-center">Edit</a>
                    <a href="/achievement/detail/2" class="bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-semibold text-sm transition hover:scale-105 min-w-[90px] text-center">Detail</a>
                    <a href="/achievement/delete/2" onclick="return confirm('Hapus data Bagus?')" class="bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-semibold text-sm transition hover:scale-105 min-w-[90px] text-center">Hapus</a>
                </div>
            </div>

            <div class="border border-yellow-500/60 bg-[#151d35] rounded-xl p-5 flex flex-col md:flex-row items-center justify-between gap-4 hover:border-yellow-400 transition shadow-sm">
                <div class="flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left w-full">
                    <img src="https://i.pravatar.cc/80?img=3"
                        class="w-20 h-20 rounded-lg object-cover border-2 border-yellow-400 shadow-inner">
                    <div>
                        <h2 class="text-yellow-400 text-2xl md:text-3xl font-bold leading-tight">Susnata</h2>
                        <p class="text-yellow-400/90 font-medium mt-0.5 text-sm md:text-base">SD Immanuel 2</p>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center gap-3 w-full md:w-auto">
                    <a href="/achievement/edit/3" class="bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-semibold text-sm transition hover:scale-105 min-w-[90px] text-center">Edit</a>
                    <a href="/achievement/detail/3" class="bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-semibold text-sm transition hover:scale-105 min-w-[90px] text-center">Detail</a>
                    <a href="/achievement/delete/3" onclick="return confirm('Hapus data Susnata?')" class="bg-yellow-500 hover:bg-yellow-400 text-black px-6 py-2 rounded-full font-semibold text-sm transition hover:scale-105 min-w-[90px] text-center">Hapus</a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>