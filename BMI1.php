<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Form BMI</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 text-white flex items-center justify-center min-h-screen">

  <form action="BMI2.php" method="post" class="bg-gray-900 p-6 rounded-lg shadow-lg w-full max-w-md border border-red-500">
    <h1 class="text-2xl font-bold text-red-400 text-center mb-6">Hitung Indeks Massa Tubuh</h1>

    <div class="mb-4">
      <label for="nama" class="block font-semibold text-red-300">Nama:</label>
      <input type="text" name="nama" id="nama" required
        class="w-full bg-gray-700 border border-red-400 p-2 rounded text-white placeholder-gray-400"/>
    </div>

    <div class="mb-4">
      <label for="berat" class="block font-semibold text-red-300">Berat Badan (kg):</label>
      <input type="number" name="berat" id="berat" required
        class="w-full bg-gray-700 border border-red-400 p-2 rounded text-white"/>
    </div>

    <div class="mb-4">
      <label for="tinggi" class="block font-semibold text-red-300">Tinggi Badan (cm):</label>
      <input type="number" name="tinggi" id="tinggi" required
        class="w-full bg-gray-700 border border-red-400 p-2 rounded text-white"/>
    </div>

    <div class="flex justify-end">
      <button type="submit" class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white font-semibold">Hitung BMI</button>
    </div>
  </form>

</body>
</html>
