<?php
// Membuat array asosiatif dengan nama siswa sebagai key dan nilai sebagai value
$siswa = [
    "Ridea" => 85,
    "Sindi" => 70,
    "Alfin" => 90,
    "tio" => 75,
    "Mira" => 80
];

// Menggunakan foreach untuk menampilkan nama, nilai, dan keterangan
foreach ($siswa as $nama => $nilai) {
    // Inisialisasi variabel keterangan
    if ($nilai > 75) {
        $keterangan = "Lulus";
    } else {
        $keterangan = "Tidak Lulus";
    }

    // Menampilkan hasil
    echo "Nama: $nama, Nilai: $nilai, Keterangan: $keterangan<br>";
}
?>