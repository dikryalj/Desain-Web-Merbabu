<?php
// Memproses data jika ada melalui metode GET
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['warga']) && isset($_GET['jeniskelamin']) && isset($_GET['namalengkap']) && isset($_GET['email']) && isset($_GET['usia']) && isset($_GET['provinsi']) && isset($_GET['kota'])) {
    // Ambil data dari query string
    $warga = $_GET['warga'];
    $jeniskelamin = $_GET['jeniskelamin'];
    $namalengkap = $_GET['namalengkap'];
    $email = $_GET['email'];
    $usia = $_GET['usia'];
    $provinsi = $_GET['provinsi'];
    $kota = $_GET['kota'];

    // Membuat array untuk respons
    $response = array(
        'warga' => $warga,
        'jeniskelamin' => $jeniskelamin,
        'namalengkap' => $namalengkap,
        'email' => $email,
        'usia' => $usia,
        'provinsi' => $provinsi,
        'kota' => $kota
    );

    // Mengirimkan respons dalam format JSON
    echo json_encode($response);
    exit;
}
?>
