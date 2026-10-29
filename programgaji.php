<?php
function uangLembur($golongan) {
    if ($golongan == "A") {
        return 25000;
    } else if ($golongan == "B") {
        return 40000;
    } else {
        return 50000;
    }
}

$golongan = "B";
$hariKerja = 5;
$gajiHarian = 100000;
$totalGaji = 0;
$totalLembur = 0;

$lembur = uangLembur($golongan);

echo "Golongan Karyawan: $golongan <br>";
echo "Jumlah Hari Kerja: $hariKerja hari <br><br>";

for ($i = 1; $i <= $hariKerja; $i++) {
    $gaji = $gajiHarian;
    $totalGaji += $gaji;
    $totalLembur += $lembur;

    echo "Hari ke-$i: Gaji Rp " .
         number_format($gaji, 0, ',', '.') .
         " | Lembur Rp " .
         number_format($lembur, 0, ',', '.') . "<br>";
}

$totalPembayaran = $totalGaji + $totalLembur;

echo "<br>Total gaji: Rp " .
     number_format($totalGaji, 0, ',', '.') . "<br>";
echo "Total bonus lembur: Rp " .
     number_format($totalLembur, 0, ',', '.') . "<br>";
echo "Total pembayaran: Rp " .
     number_format($totalPembayaran, 0, ',', '.');
?>