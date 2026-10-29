<?php
function tarifHarian($jenis) {
    if ($jenis == "Sedan") {
        return 300000;
    } else {
        return 500000;
    }
}

$jenis = "SUV";
$lama = 5;
$tarif = tarifHarian($jenis);
$total = 0;

echo "Jenis Mobil: $jenis <br>";
echo "Lama Sewa: $lama hari <br><br>";

for ($i = 1; $i <= $lama; $i++) {
    echo "Hari ke-$i: Rp " . number_format($tarif, 0, ',', '.') . "<br>";
    $total += $tarif;
}

echo "<br>Total sebelum diskon: Rp " .
     number_format($total, 0, ',', '.') . "<br>";

if ($lama > 3) {
    $diskon = $total * 0.10;
} else {
    $diskon = 0;
}

$totalBayar = $total - $diskon;

echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total pembayaran: Rp " .
     number_format($totalBayar, 0, ',', '.');
?>