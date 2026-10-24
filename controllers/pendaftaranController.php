<?php
class PendaftaranController {
    public function home() {
        include __DIR__ . '/../views/buku/kelompok9.php';
    }
    public function create() {
        include __DIR__ . '/../views/buku/create.php';
    }

    public function step2() {
        $_SESSION['step1'] = $_POST;
        include __DIR__ . '/../views/buku/step2.php';
    }

    public function simpan() {
        $step1 = $_SESSION['step1'];
        $step2 = $_POST;

        $database = new Database();
        $db = $database->getConnection();

        $daftar = new Daftar($db);
        $daftar->jenis_kewarganegaraan = $step1['jenis_kewarganegaraan'];
        $daftar->jenis_kelamin = $step1['jenis_kelamin'];
        $daftar->nama_lengkap = $step1['nama_lengkap'];
        $daftar->email = $step1['email'];
        $daftar->usia = $step1['usia'];
        $daftar->provinsi = $step1['provinsi'];
        $daftar->kota_kabupaten = $step1['kota_kabupaten'];
        $daftar->tanggal = $step2['tanggal'];
        $daftar->jalur = $step2['jalur'];

        if ($daftar->simpan()) {
            include __DIR__ . '/../views/buku/struk.php';
        } else {
            echo "Gagal menyimpan data.";
        }
    }

    public function cetak() {
        include __DIR__ . '/../views/buku/printout.php';
    }
}
?>