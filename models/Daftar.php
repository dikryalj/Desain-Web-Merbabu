<?php
class Daftar {
    private $conn;
    public $jenis_kewarganegaraan;
    public $jenis_kelamin;
    public $nama_lengkap;
    public $email;
    public $usia;
    public $provinsi;
    public $kota_kabupaten;
    public $tanggal;
    public $jalur;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    public function simpan() {
        // Menyertakan semua kolom termasuk alamat
        $query = "INSERT INTO pendaki SET 
            jenis_kewarganegaraan=:jenis_kewarganegaraan, 
            jenis_kelamin=:jenis_kelamin,
            nama_lengkap=:nama_lengkap, 
            email=:email, 
            usia=:usia, 
            provinsi=:provinsi,
            kota_kabupaten=:kota_kabupaten";
            
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":jenis_kewarganegaraan", $this->jenis_kewarganegaraan);
        $stmt->bindParam(":jenis_kelamin", $this->jenis_kelamin);
        $stmt->bindParam(":nama_lengkap", $this->nama_lengkap);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":usia", $this->usia);
        $stmt->bindParam(":provinsi", $this->provinsi);
        $stmt->bindParam(":kota_kabupaten", $this->kota_kabupaten);
        
        return $stmt->execute();
    }
}
?>