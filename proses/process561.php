<?php
// Memproses data jika ada melalui metode GET
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nama']) && isset($_GET['barang']) && isset($_GET['nomor']) && isset($_GET['umur']) && isset($_GET['alamat']) && isset($_GET['tanggal']) && isset($_GET['kelamin'])) {
    // Ambil data dari query string
    $nama = $_GET['nama'];
    $barang = $_GET['barang'];
    $nomor = $_GET['nomor'];
    $umur = $_GET['umur'];
    $alamat = $_GET['alamat'];
    $tanggal = $_GET['tanggal'];
    $kelamin = $_GET['kelamin'];

    // Membuat array untuk respons
    $response = array(
        'nama' => $nama,
        'barang' => $barang,
        'nomor' => $nomor,
        'umur' => $umur,
        'alamat' => $alamat,
        'tanggal' => $tanggal,
        'kelamin' => $kelamin
    );

    // Mengirimkan respons dalam format JSON
    echo json_encode($response);
    exit;
}
?>
