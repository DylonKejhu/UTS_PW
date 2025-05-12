<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pemesanan Tiket</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen text-white">

<?php
    $harga_per_tiket = 0;
    $jam = $_POST['jam'];
    if ($jam == "12.00" || $jam == "15.00") {
        $harga_per_tiket = 60000;
    } elseif ($jam == "18.00" || $jam == "21.00") {
        $harga_per_tiket = 75000;
    }
    $jumlah_tiket = $_POST['jumlah'];
    $total_bayar = $harga_per_tiket * $jumlah_tiket;
?>

    <div class="bg-gray-800 p-8 rounded-lg shadow-lg w-full max-w-3xl border border-yellow-400">
        <h2 class="text-3xl font-bold text-yellow-400 mb-6 text-center">Hasil Pemesanan Tiket</h2>
        <table class="min-w-full table-auto text-left text-white">
            <thead>
                <tr>
                    <th class="px-6 py-4 border-b border-yellow-400">Detail</th>
                    <th class="px-6 py-4 border-b border-yellow-400">Informasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-4 border-b border-yellow-400">Nama</td>
                    <td class="px-6 py-4 border-b border-yellow-400"><?= htmlspecialchars($_POST['nama']); ?></td>
                </tr>
                <tr>
                    <td class="px-6 py-4 border-b border-yellow-400">Jenis Kelamin</td>
                    <td class="px-6 py-4 border-b border-yellow-400"><?= htmlspecialchars($_POST['jk']); ?></td>
                </tr>
                <tr>
                    <td class="px-6 py-4 border-b border-yellow-400">Alamat</td>
                    <td class="px-6 py-4 border-b border-yellow-400"><?= nl2br(htmlspecialchars($_POST['alamat'])); ?></td>
                </tr>
                <tr>
                    <td class="px-6 py-4 border-b border-yellow-400">No. Telp</td>
                    <td class="px-6 py-4 border-b border-yellow-400"><?= htmlspecialchars($_POST['telp']); ?></td>
                </tr>
                <tr>
                    <td class="px-6 py-4 border-b border-yellow-400">Film yang Dipilih</td>
                    <td class="px-6 py-4 border-b border-yellow-400"><?= htmlspecialchars($_POST['film']); ?></td>
                </tr>
                <tr>
                    <td class="px-6 py-4 border-b border-yellow-400">Jam yang Dipilih</td>
                    <td class="px-6 py-4 border-b border-yellow-400"><?= htmlspecialchars($_POST['jam']); ?></td>
                </tr>
                <tr>
                    <td class="px-6 py-4 border-b border-yellow-400">Jumlah Tiket</td>
                    <td class="px-6 py-4 border-b border-yellow-400"><?= htmlspecialchars($_POST['jumlah']); ?></td>
                </tr>

                <tr>
                    <td class="px-6 py-4 border-b border-yellow-400 font-bold">Total yang Dibayarkan</td>
                    <td class="px-6 py-4 border-b border-yellow-400 font-bold"><?= "Rp $total_bayar"; ?></td>
                </tr>
            </tbody>
        </table>

        <div class="flex justify-center mt-6">
            <a href="javascript:history.back()" class="bg-yellow-400 text-black font-semibold px-6 py-3 rounded-lg hover:bg-yellow-300 transition duration-300">Kembali</a>
        </div>
    </div>

</body>
</html>
