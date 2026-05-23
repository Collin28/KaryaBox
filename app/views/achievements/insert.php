<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/output.css">
  <title>Tambah Data</title>
</head>

<body class="bg-[#1B1F3B] min-h-screen flex items-center justify-center p-5">

  <div class="w-full max-w-6xl border border-transparent bg-[#1B1F3B] text-[#F4C430] p-6">

    <!-- Header -->
    <div class="flex items-center justify-between mb-4">
      <div class="flex items-center gap-2">
        <img src="/assets/images/karyabox.png" alt="logo" class="w-12 h-12">
      </div>
      <div class="relative w-[380px]">
        <input type="text" placeholder="Cari di KaryaBox"
          class="w-full bg-transparent border border-[#F4C430] rounded-full py-2 pl-12 pr-4 text-sm outline-none placeholder:text-[#F4C430]" />
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 text-[#F4C430]"
          fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </div>
    </div>

    <hr class="border-gray-500 mb-6">

    <h1 class="text-center text-4xl font-bold mb-10">Tambah Data</h1>

    <!-- Form — action, method, enctype all required -->
    <div class="border-2 border-[#F4C430] rounded-lg p-8">
      <form action="/achievements/insert" method="POST" enctype="multipart/form-data" class="space-y-5">

        <!-- Nama Siswa -->
        <div class="grid grid-cols-[180px_1fr] items-center gap-4">
          <label class="text-2xl font-semibold">Nama Siswa</label>
          <input type="text" name="name" required
            class="bg-transparent border-2 border-[#F4C430] rounded-lg px-4 py-3 outline-none text-white" />
        </div>

        <!-- Sekolah -->
        <div class="grid grid-cols-[180px_1fr] items-center gap-4">
          <label class="text-2xl font-semibold">Sekolah</label>
          <input type="text" name="unit_sekolah_id" required
            class="bg-transparent border-2 border-[#F4C430] rounded-lg px-4 py-3 outline-none text-white" />
        </div>

        <!-- Judul Karya -->
        <div class="grid grid-cols-[180px_1fr] items-center gap-4">
          <label class="text-2xl font-semibold">Judul Karya</label>
          <input type="text" name="title" required
            class="bg-transparent border-2 border-[#F4C430] rounded-lg px-4 py-3 outline-none text-white" />
        </div>

        <!-- Kategori -->
        <div class="grid grid-cols-[180px_1fr] items-center gap-4">
          <label class="text-2xl font-semibold">Kategori</label>
          <input type="text" name="category_id" required
            class="bg-transparent border-2 border-[#F4C430] rounded-lg px-4 py-3 outline-none text-white" />
        </div>

        <!-- Deskripsi -->
        <div class="grid grid-cols-[180px_1fr] gap-4">
          <label class="text-2xl font-semibold pt-3">Deskripsi Karya</label>
          <textarea name="description" rows="4" required
            class="bg-transparent border-2 border-[#F4C430] rounded-lg px-4 py-3 outline-none text-white resize-none"></textarea>
        </div>

        <!-- Upload Foto -->
        <div class="grid grid-cols-[180px_1fr] items-center gap-4">
          <label class="text-2xl font-semibold">Upload Foto Karya</label>
          <div class="flex items-center gap-4">

            <!-- Hidden real file input -->
            <input type="file" id="image_url" name="image_url" accept="image/*" class="hidden"
              onchange="document.getElementById('file-label').textContent = this.files[0]?.name || 'No File Selected'" />

            <!-- Styled trigger button -->
            <button type="button" onclick="document.getElementById('image_url').click()"
              class="bg-[#F4C430] text-[#1B1F3B] px-5 py-2 rounded-full font-semibold hover:scale-105 transition">
              Pilih File
            </button>

            <!-- Shows selected filename -->
            <span id="file-label" class="text-sm text-gray-300">No File Selected</span>
          </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-end gap-4 pt-4">
          <a href="/achievements/insert"
            class="bg-[#F4C430] text-[#1B1F3B] px-8 py-3 rounded-full font-bold hover:scale-105 transition">
            Batal
          </a>
          <button type="submit"
            class="bg-[#F4C430] text-[#1B1F3B] px-8 py-3 rounded-full font-bold hover:scale-105 transition">
            Simpan Karya
          </button>
        </div>

      </form>
    </div>
  </div>

</body>

</html>