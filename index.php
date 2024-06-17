
<?php
// Susunan file: oopmvc/index.php

$request = preg_replace("|/*(.+?)/*$|","\\1", $_SERVER['PATH_INFO']);
$uri =explode('/',$request);

// check apakah controller dan method pada segment URI.
// Untuk mengarahkan ke controller dan method yang benar

$uri0 = isset($uri[0]);
$uri1 = isset($uri[1]);

// memanggil semua resources yang diperlukan

require_once "lib/Database.php";
require_once "controller/anggota.php";
require_once "model/anggota_model.php";
$db = new Database();
$model = new Anggota_model($db);
$controller = new Anggota($model);

// Routing dan menjalanan method yang sesuai dengan URL.
// Pada framework MVC, routing biasanya dilakukan oleh library tersendiri, biasanya router

if ($uri0 && $uri1 && $uri[0] === 'anggota' && $uri[1]=== 'detail') {
    $nisn = $_GET['nisn'];
    $controller->detail($nisn);
} elseif ($uri0 && $uri1 && $uri[0] === 'anggota' && $uri[1]=== 'edit') {
    $nisn = $_GET['nisn'];
      $controller->edit($nisn);
} elseif ($uri0 && $uri1 && $uri[0] === 'anggota' && $uri[1]=== 'delete') {
    $nisn = $_GET['nisn'];
       $controller->delete($nisn);
} elseif ($uri0 && $uri1 && $uri[0] === 'anggota' && $uri[1]=== 'create') {
    $controller->create();
} elseif ($uri[0] === 'anggota') {
    $controller->index();
} else {
    header('HTTP/1.1 404 Not found');
    echo '<h1> Halaman tidak tersedia </h1>';
}

?>