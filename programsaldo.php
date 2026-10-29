<?php
function bonusTabungan($setoran) {
    if ($setoran >= 200000) {
        return 10000;
    } else {
        return 0;
    }
}

$saldo = 100000;
$setoran = 200000;
$jumlahBulan = 6;

$bonus = bonusTabungan($setoran);

echo "Saldo awal: Rp " .
     number_format($saldo, 0, ',', '.') . "<br>";
echo "Setoran bulanan: Rp " .
     number_format($setoran, 0, ',', '.') . "<br><br>";

for ($i = 1; $i <= $jumlahBulan; $i++) {
    $saldo += $setoran;
    $saldo += $bonus;

    echo "Bulan ke-$i: Setoran Rp " .
         number_format($setoran, 0, ',', '.') .
         " | Bonus Rp " .
         number_format($bonus, 0, ',', '.') .
         " | Saldo Rp " .
         number_format($saldo, 0, ',', '.') . "<br>";
}

echo "<br>Saldo akhir: Rp " .
     number_format($saldo, 0, ',', '.');
?>