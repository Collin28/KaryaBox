<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Detail Karya</title>

    <!-- Tailwind -->
    <link rel="stylesheet" href="/css/output.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body
    class="bg-[radial-gradient(circle_at_top_left,#2E3A5E,#1E263D)] min-h-screen flex justify-center items-center font-[Poppins] relative overflow-x-hidden">

    <!-- Background Pattern -->
    <div
        class="fixed inset-0 opacity-[0.04] pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
    </div>

    <!-- Container -->
    <div class="w-[90%] max-w-[800px] relative z-10">

        <!-- Title -->
        <h1 class="text-center text-white mb-8 text-[28px] font-semibold tracking-[4px]">
            DETAIL KARYA
        </h1>

        <!-- Card -->
        <div
            class="flex flex-col md:flex-row gap-8 bg-white p-8 rounded-2xl shadow-[0_10px_30px_rgba(0,0,0,0.2)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_15px_40px_rgba(0,0,0,0.3)]">

            <!-- Image -->
            <div class="image-box">

                <img src="/<?= $achievement['image_url'] ?>" id="artImg"
                    class="w-full md:w-[250px] h-full object-cover rounded-xl cursor-pointer transition duration-300 hover:scale-[1.03] hover:brightness-90 shadow-md">

            </div>

            <!-- Info -->
            <div class="flex-1 flex flex-col justify-center">

                <h2 class="text-[28px] font-bold text-[#111] leading-tight">
                    <?= $achievement['title'] ?>
                </h2>

                <p class="text-gray-500 text-[15px] mt-1 mb-5 font-normal">
                    <?= $achievement['nama_sekolah'] ?>
                </p>

                <hr class="border-0 h-[1px] bg-gray-200 mb-5">

                <!-- Detail -->
                <div class="flex mb-3 text-[15px]">
                    <span class="font-semibold w-20 text-gray-800">Nama</span>
                    <span class="text-gray-600">: <?= $achievement['name'] ?></span>
                </div>

                <div class="flex mb-3 text-[15px]">
                    <span class="font-semibold w-20 text-gray-800">Category</span>
                    <span class="text-gray-600">: <?= $achievement['category_name'] ?></span>
                </div>

                <!-- Description -->
                <div class="mt-5">

                    <h3 class="text-lg font-semibold mb-2 text-gray-900">
                        Deskripsi Karya
                    </h3>

                    <p class="text-gray-600 leading-relaxed text-sm">
                        <?= $achievement['description'] ?>
                    </p>

                </div>

            </div>

        </div>


        <!-- Buttons -->
        <div class="mt-8 flex justify-center gap-5">

            <a href="/home" id="downloadBtn"
                class="px-10 py-4 text-lg rounded-xl font-semibold bg-yellow-400 text-yellow-900 shadow-lg transition hover:bg-yellow-500 active:scale-95">
                Back
            </a>

            <button id="saveBtn"
                class="px-10 py-4 text-lg rounded-xl font-semibold bg-gray-100 text-gray-700 transition hover:bg-gray-200 active:scale-95">
                Save
            </button>

        </div>

    </div>

    <!-- Modal -->
    <div id="modal"
        class="hidden fixed inset-0 bg-[rgba(15,23,42,0.9)] backdrop-blur-sm justify-center items-center z-50">

        <!-- Close -->
        <span id="closeModal" class="absolute top-5 right-8 text-white text-5xl cursor-pointer hover:text-yellow-400">
            &times;
        </span>

        <!-- Modal Image -->
        <img id="modalImg" alt="Modal Artwork" class="w-full max-w-[1000px] max-h-[90vh]">

    </div>

    <script src="script.js"></script>

</body>

</html>