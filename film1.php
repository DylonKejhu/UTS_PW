<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan Tiket</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen text-white">

    <form action="film2.php" method="post" class="bg-gray-800 p-6 rounded shadow-lg w-full max-w-md border border-yellow-400">
        <h2 class="text-2xl font-bold text-yellow-400 mb-6 text-center">Pemesanan Tiket</h2>

        <div class="mb-4">
            <label for="nama" class="block font-semibold text-yellow-300">Nama:</label>
            <input type="text" name="nama" id="nama" class="w-full bg-gray-700 border border-yellow-300 p-2 rounded text-white placeholder-gray-400">
        </div>

        <div class="mb-4">
            <span class="block font-semibold text-yellow-300">Jenis Kelamin:</span>
            <label class="inline-flex items-center mr-4">
                <input type="radio" name="jk" value="Laki-laki"  class="mr-2 text-yellow-400"> Laki-laki
            </label>
            <label class="inline-flex items-center">
                <input type="radio" name="jk" value="Perempuan" class="mr-2 text-yellow-400"> Perempuan
            </label>
        </div>

        <div class="mb-4">
            <label for="alamat" class="block font-semibold text-yellow-300">Alamat:</label>
            <textarea name="alamat" rows="3" id="alamat" class="w-full bg-gray-700 border border-yellow-300 p-2 rounded text-white placeholder-gray-400" placeholder="Tulis alamat lengkapnyaa"></textarea>
        </div>

        <div class="mb-4">
            <label for="telp" class="block font-semibold text-yellow-300">No Telp:</label>
            <input type="text" name="telp" id="telp" class="w-full bg-gray-700 border border-yellow-300 p-2 rounded text-white placeholder-gray-400">
        </div>

        <div class="mb-4">
            <label for="film" class="block font-semibold text-yellow-300">Pilih Film:</label>
            <select name="film" id="film" class="w-full bg-gray-700 border border-yellow-300 p-2 rounded text-white">
                <option value="">-- Pilih Film --</option>
                <option value="Miku who can't sing">Miku who can't sing</option>
                <option value="The Last Melody">The Last Melody</option>
                <option value="Digital Dream">Digital Dream</option>
                <option value="Harmony Lost">Harmony Lost</option>
                <option value="Echoes of Silence">Echoes of Silence</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="jam" class="block font-semibold text-yellow-300">Pilih Jam:</label>
            <select name="jam" id="jam" class="w-full bg-gray-700 border border-yellow-300 p-2 rounded text-white">
                <option value="12.00">12.00</option>
                <option value="15.00">15.00</option>
                <option value="18.00">18.00</option>
                <option value="21.00">21.00</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="jumlah" class="block font-semibold text-yellow-300">Jumlah Tiket:</label>
            <input type="text" name="jumlah" id="jumlah" class="w-full bg-gray-700 border border-yellow-300 p-2 rounded text-white placeholder-gray-400">
        </div>

        <div class="flex gap-2 justify-end">
            <button type="submit" class="bg-yellow-400 text-black font-semibold px-4 py-2 rounded hover:bg-yellow-300">Pesan</button>
            <button type="reset" class="bg-gray-600 text-white font-semibold px-4 py-2 rounded hover:bg-gray-500">Reset</button>
        </div>
    </form>

</body>
</html>
