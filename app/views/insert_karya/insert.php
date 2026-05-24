<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaryaBox - Tambah Data</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-[#192231] min-h-screen text-white flex flex-col items-center py-6 px-4">

    <div class="w-full max-w-4xl flex flex-col sm:flex-row items-center justify-between gap-4 mb-6 pb-4 border-b border-slate-700">
        
        <div class="flex items-center gap-4 w-full sm:w-auto justify-between sm:justify-start">
            <div class="flex items-center gap-3">
                <button onclick="window.history.back()" class="text-amber-400 font-bold text-2xl hover:text-amber-500 transition-colors mr-2 cursor-pointer">&lt;</button>
                
                <div class="bg-[#ff9a00] p-2.5 rounded-2xl shadow-md flex items-center justify-center w-14 h-14 shrink-0">
            <img src="../Group_20-removebg-preview.png" alt="Logo KaryaBox" class="w-full h-full object-contain">
                </div>
                
                <span class="text-2xl font-black tracking-wide text-amber-400">KaryaBox</span>
            </div>
        </div>

        <div class="relative w-full sm:w-80">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-amber-400">
                🔍
            </span>
            <input type="text" 
                   placeholder="Cari di KaryaBox" 
                   class="w-full bg-[#1e293b] border border-amber-500/60 rounded-full py-2 pl-10 pr-4 text-sm text-amber-200 placeholder-amber-600/70 focus:outline-none focus:ring-2 focus:ring-amber-500">
        </div>
    </div>

    <div class="w-full max-w-3xl mt-4">
        <h1 class="text-center text-3xl font-black text-amber-400 tracking-wide uppercase mb-8">Tambah Data</h1>

        <form action="upload_process.php" method="POST" enctype="multipart/form-data" class="bg-[#1e293b]/40 border-2 border-amber-500/50 rounded-2xl p-6 md:p-10 space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                <label for="student_name" class="text-amber-400 font-semibold text-lg">Nama Siswa</label>
                <div class="md:col-span-2">
                    <input type="text" id="student_name" name="student_name" required
                           class="w-full bg-[#161f2c] border border-amber-500/60 rounded-xl px-4 py-2.5 text-white focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                <label for="school" class="text-amber-400 font-semibold text-lg">Sekolah</label>
                <div class="md:col-span-2">
                    <input type="text" id="school" name="school" required
                           class="w-full bg-[#161f2c] border border-amber-500/60 rounded-xl px-4 py-2.5 text-white focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                <label for="title" class="text-amber-400 font-semibold text-lg">Judul Karya</label>
                <div class="md:col-span-2">
                    <input type="text" id="title" name="title" required
                           class="w-full bg-[#161f2c] border border-amber-500/60 rounded-xl px-4 py-2.5 text-white focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-start">
                <label for="description" class="text-amber-400 font-semibold text-lg pt-1">Deskripsi Karya</label>
                <div class="md:col-span-2">
                    <textarea id="description" name="description" rows="4" required
                              class="w-full bg-[#161f2c] border border-amber-500/60 rounded-xl px-4 py-2.5 text-white focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400 resize-none"></textarea>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                <span class="text-amber-400 font-semibold text-lg">Upload Foto Karya</span>
                <div class="md:col-span-2 flex items-center gap-3">
                    <label class="bg-amber-400 hover:bg-amber-500 text-slate-900 font-semibold px-5 py-2 rounded-xl cursor-pointer transition-colors shadow-md">
                        Pilih File
                        <input type="file" id="image" name="image" accept="image/*" required class="hidden" onchange="updateFileName()">
                    </label>
                    <span id="file-name" class="text-sm text-amber-500/80 italic">No File Selected</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                <label for="video_link" class="text-amber-400 font-semibold text-lg">Tautan Video<span class="text-xs text-amber-500/60 font-normal ml-1">(opsional)</span></label>
                <div class="md:col-span-2">
                    <input type="url" id="video_link" name="video_link"
                           class="w-full bg-[#161f2c] border border-amber-500/60 rounded-xl px-4 py-2.5 text-white focus:outline-none focus:border-amber-400 focus:ring-1 focus:ring-amber-400" placeholder="https://youtube.com/...">
                </div>
            </div>

            <div class="flex justify-end gap-4 pt-4">
                <button type="button" onclick="window.history.back()"
                        class="bg-amber-500/20 hover:bg-amber-500/30 text-amber-400 font-semibold px-6 py-2.5 rounded-full transition-all border border-amber-500/40 cursor-pointer">
                    Batal
                </button>
                <button type="submit" 
                        class="bg-amber-400 hover:bg-amber-500 text-slate-950 font-bold px-6 py-2.5 rounded-full transition-all shadow-md hover:shadow-amber-500/20 cursor-pointer">
                    Simpan Karya
                </button>
            </div>

        </form>
    </div>

    <script>
        function updateFileName() {
            const input = document.getElementById('image');
            const output = document.getElementById('file-name');
            if (input.files.length > 0) {
                output.textContent = input.files[0].name;
                output.classList.remove('text-amber-500/80', 'italic');
                output.classList.add('text-white');
            } else {
                output.textContent = 'No File Selected';
                output.classList.add('text-amber-500/80', 'italic');
                output.classList.remove('text-white');
            }
        }
    </script>
</body>
</html>