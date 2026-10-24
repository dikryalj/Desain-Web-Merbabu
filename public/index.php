<?php
session_start();

require_once '../config/Database.php';
require_once '../models/Daftar.php';
require_once '../controllers/pendaftaranController.php';

$page = $_GET['page'] ?? 'form0';

$controller = new PendaftaranController();

switch ($page) {
    case 'form0':
        $controller->home();
        break;
    case 'form1':
        $controller->create();
        break;
    case 'form2':
        $controller->step2();
        break;
    case 'simpan':
        $controller->simpan();
        break;
    case 'cetak':
        $controller->cetak();
        break;
    default:
        echo "404 Not Found";
}
?>