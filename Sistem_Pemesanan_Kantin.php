<!DOCTYPE html>
<html>
<head>
    <title>Sistem Pemesanan Kantin</title>
</head>

<body>

<?php

// ==========================================
// SISTEM PEMESANAN MAKANAN KANTIN
// WATERMARK: KELOMPOK 34
// ==========================================


// FUNCTION RETURN TYPE DENGAN PARAMETER
function cekKetersediaan($jumlah) {
    if ($jumlah > 0) {
        return "Tersedia";
    } else {
        return "Habis";
    }
}


// FUNCTION RETURN TYPE TANPA PARAMETER
function namaKantin() {
    return "Kantin Ceria";
}


// FUNCTION NON-RETURN TYPE
function tampilkanJudul() {
    echo "<h2>SISTEM PEMESANAN MAKANAN</h2>";
    echo "<p><b>Watermark: Kelompok 34</b></p>";
}


// CLASS
class Pesanan {

    // METHOD RETURN TYPE DENGAN PARAMETER
    public function cekJumlah($jumlah) {
        if ($jumlah >= 1) {
            return "Pesanan berhasil";
        } else {
            return "Jumlah pesanan tidak valid";
        }
    }


    // METHOD NON-RETURN TYPE
    public function tampilkanPesanan($nama, $jumlah, $status) {
        echo "<tr>";
        echo "<td>$nama</td>";
        echo "<td>$jumlah</td>";
        echo "<td>$status</td>";
        echo "</tr>";
    }
}


// FUNCTION TANPA PARAMETER
echo "<h1>" . namaKantin() . "</h1>";


// FUNCTION NON-RETURN
tampilkanJudul();


// DATA MENU
$menu = [
    "Nasi Goreng",
    "Mie Ayam",
    "Ayam Geprek",
    "Es Teh",
    "Jus Mangga"
];

$jumlahPesanan = [
    2,
    1,
    3,
    4,
    0
];


$pesanan = new Pesanan();


// MENAMPILKAN TABEL
echo "<table border='1' cellpadding='8' cellspacing='0'>";

echo "<tr>";
echo "<th>Menu</th>";
echo "<th>Jumlah</th>";
echo "<th>Status</th>";
echo "</tr>";


// PERULANGAN FOR
for ($i = 0; $i < count($menu); $i++) {

    // FUNCTION RETURN TYPE DENGAN PARAMETER
    $status = cekKetersediaan($jumlahPesanan[$i]);

    // METHOD RETURN TYPE
    $hasil = $pesanan->cekJumlah($jumlahPesanan[$i]);

    // PENGKONDISIAN
    if ($status == "Tersedia" && $hasil == "Pesanan berhasil") {
        $keterangan = "Tersedia - " . $hasil;
    } else {
        $keterangan = "Habis";
    }

    // METHOD NON-RETURN TYPE
    $pesanan->tampilkanPesanan(
        $menu[$i],
        $jumlahPesanan[$i],
        $keterangan
    );
}

echo "</table>";


// PESAN PENUTUP
echo "<br>";
echo "<b>Terima kasih telah menggunakan sistem Kantin Ceria!</b>";

?>

</body>
</html>