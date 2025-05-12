<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Hasil BMI</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
    $nama = $_POST['nama'];
    $berat = $_POST['berat'];
    $tinggi_cm = $_POST['tinggi'];
    $tinggi_m = $tinggi_cm / 100;
    $bmi = $berat / ($tinggi_m * $tinggi_m);
    $bmi = round($bmi, 1);

    if ($bmi < 18.5) {
        $kategori = "Berat badan rendah";
    } elseif ($bmi < 25) {
        $kategori = "Normal";
    } elseif ($bmi < 30) {
        $kategori = "Berat badan berlebih";
    } else {
        $kategori = "Obesitas";
    }
?>

<body class="bg-gray-800 text-white flex items-center justify-center min-h-screen">

  <div class="bg-gray-900 p-8 rounded-lg shadow-lg w-full max-w-md border border-red-500">
    <h1 class="text-2xl font-bold text-red-400 text-center mb-6">Hasil Perhitungan BMI</h1>

    <div class="text-lg space-y-3">
      <p><span class="font-semibold text-red-300">Nama:</span> <?= htmlspecialchars($nama); ?></p>
      <p><span class="font-semibold text-red-300">Berat:</span> <?= $berat; ?> kg</p>
      <p><span class="font-semibold text-red-300">Tinggi:</span> <?= $tinggi_cm; ?> cm</p>
      <p><span class="font-semibold text-red-300">BMI:</span> <?= $bmi; ?></p>
      <p><span class="font-semibold text-red-300">Kategori:</span> <?= $kategori; ?></p>
    </div>

    <div class="flex justify-center mt-6">
      <a href="BMI1.php" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded font-semibold">Hitung Lagi</a>
    </div>
  </div>

</body>
</html>
