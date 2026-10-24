<?php
// Pastikan request menggunakan metode GET
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['jalur']) && isset($_GET['paket']) && isset($_GET['durasi']) && isset($_GET['fasilitas']) && isset($_GET['keberangkatan']) && isset($_GET['kepulangan'])) {
    
    // Ambil data dari form
    $jalur = $_GET['jalur'];
    $paket = $_GET['paket'];
    $durasi = $_GET['durasi'];
    $fasilitas = $_GET['fasilitas'];
    $keberangkatan = $_GET['keberangkatan'];
    $kepulangan = $_GET['kepulangan'];

    // Buat array untuk respons dalam format JSON
    $response = array(
        'jalur' => $jalur,
        'paket' => $paket,
        'durasi' => $durasi,
        'fasilitas' => $fasilitas,
        'keberangkatan' => $keberangkatan,
        'kepulangan' => $kepulangan
    );

    // Atur header agar mengirimkan data dalam format JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
} else {
    echo json_encode(["error" => "Data tidak lengkap"]);
    exit;
}
?>
