<?php
// file : view/anggota/input.php

// Periksa apakah PATH_INFO sudah diatur untuk menghindari kesalahan indeks yang tidak terdefinisi
$request = isset($_SERVER['PATH_INFO']) ? preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']) : '';
$uri = explode('/', $request);

// Set form action
if ($uri[1] === 'edit' && isset($_GET['nisn'])) {
    $judul = "Edit Siswa";
    $form_action = "http://localhost/oopmvc/index.php/anggota/edit?id=" . $_GET['nisn'];
} else {
    $judul = "Tambah Siswa";
    $form_action = "http://localhost/oopmvc/index.php/anggota/create";
}

// Set form value
// $valNama = isset($anggota['nama']) ? $anggota['nama'] : '';    
// $valTanggal_lahir = isset($anggota['Tanggal_lahir']) ? $anggota['Tanggal_lahir'] : '';    
// $valKota_lahir = isset($anggota['Kota_lahir']) ? $anggota['Kota_lahir'] : '';  
$valID = isset($anggota['Id']) ? $anggota['Id'] : '';  
$valNisn = isset($anggota['nisn']) ? $anggota['nisn'] : '';    
$valKelas_id = isset($anggota['kelas_id']) ? $anggota['kelas_id'] : '';    
$valId_jurusan = isset($anggota['id_jurusan']) ? $anggota['id_jurusan'] : '';    
$valNama_siswa = isset($anggota['nama_siswa']) ? $anggota['nama_siswa'] : '';    
$valTtl = isset($anggota['ttl']) ? $anggota['ttl'] : '';    
$valJenis_kelamin = isset($anggota['jenis_kelamin']) ? $anggota['jenis_kelamin'] : '';    
$valAgama = isset($anggota['agama']) ? $anggota['agama'] : '';    
$valStatus_dalam_keluarga = isset($anggota['status_dalam_keluarga']) ? $anggota['status_dalam_keluarga'] : '';    
$valAnak_ke = isset($anggota['anak_ke']) ? $anggota['anak_ke'] : '';    
$valAlamat_peserta_didik = isset($anggota['alamat_peserta_didik']) ? $anggota['alamat_peserta_didik'] : '';    
$valNomor_telp_rumah = isset($anggota['nomor_telp_rumah']) ? $anggota['nomor_telp_rumah'] : '';    
$valSekolah_asal = isset($anggota['sekolah_asal']) ? $anggota['sekolah_asal'] : '';    
$valDiterima_disekolah_ini = isset($anggota['diterima_disekolah_ini']) ? $anggota['diterima_disekolah_ini'] : '';    
$valNama_ayah = isset($anggota['nama_ayah']) ? $anggota['nama_ayah'] : '';    
$valNama_ibu = isset($anggota['nama_ibu']) ? $anggota['nama_ibu'] : '';    
$valPekerjaan_ayah = isset($anggota['pekerjaan_ayah']) ? $anggota['pekerjaan_ayah'] : '';    
$valPekerjaan_ibu = isset($anggota['pekerjaan_ibu']) ? $anggota['pekerjaan_ibu'] : '';    
$valAlamat_orang_tua = isset($anggota['alamat_orang_tua']) ? $anggota['alamat_orang_tua'] : '';    
$valNama_wali = isset($anggota['nama_wali']) ? $anggota['nama_wali'] : '';    
$valAlamat_wali = isset($anggota['alamat_wali']) ? $anggota['alamat_wali'] : '';    
$valPekerjaan_wali = isset($anggota['pekerjaan_wali']) ? $anggota['pekerjaan_wali'] : '';  

?>

<?php ob_start() ?>
<div class="container">
   
    <h1><?= $judul ?></h1>  
     <a class="btn btn-success" href="http://localhost/oopmvc/index.php/anggota"> KEMBALI </a>
    <form action="<?= $form_action ?>" method="post"> 
        <?php if ($valID): ?>
            <input type="hidden" name="Id" value="<?= $valID ?>">
        <?php endif ?>
        <div class="form-group">
    <label for="nisn">NISN</label>
    <input type="text" name="nisn" value="<?= $valNisn ?>" id="nisn" class="form-control" required>
</div>
<div class="form-group">
    <label for="kelas_id">Kelas ID</label>
    <input type="text" name="kelas_id" value="<?= $valKelas_id ?>" id="kelas_id" class="form-control" required>
</div>
<div class="form-group">
    <label for="id_jurusan">ID Jurusan</label>
    <input type="text" name="id_jurusan" value="<?= $valId_jurusan ?>" id="id_jurusan" class="form-control" required>
</div>
<div class="form-group">
    <label for="nama_siswa">Nama Siswa</label>
    <input type="text" name="nama_siswa" value="<?= $valNama_siswa ?>" id="nama_siswa" class="form-control" required>
</div>
<div class="form-group">
    <label for="ttl">Tanggal Lahir</label>
    <input type="date" name="ttl" value="<?= $valTtl ?>" id="ttl" class="form-control" required>
</div>
<div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin</label>
    <input type="text" name="jenis_kelamin" value="<?= $valJenis_kelamin ?>" id="jenis_kelamin" class="form-control" required>
</div>
<div class="form-group">
    <label for="agama">Agama</label>
    <input type="text" name="agama" value="<?= $valAgama ?>" id="agama" class="form-control" required>
</div>
<div class="form-group">
    <label for="status_dalam_keluarga">Status dalam Keluarga</label>
    <input type="text" name="status_dalam_keluarga" value="<?= $valStatus_dalam_keluarga ?>" id="status_dalam_keluarga" class="form-control" required>
</div>
<div class="form-group">
    <label for="anak_ke">Anak Ke</label>
    <input type="text" name="anak_ke" value="<?= $valAnak_ke ?>" id="anak_ke" class="form-control" required>
</div>
<div class="form-group">
    <label for="alamat_peserta_didik">Alamat Peserta Didik</label>
    <input type="text" name="alamat_peserta_didik" value="<?= $valAlamat_peserta_didik ?>" id="alamat_peserta_didik" class="form-control" required>
</div>
<div class="form-group">
    <label for="nomor_telp_rumah">Nomor Telepon Rumah</label>
    <input type="text" name="nomor_telp_rumah" value="<?= $valNomor_telp_rumah ?>" id="nomor_telp_rumah" class="form-control" required>
</div>
<div class="form-group">
    <label for="sekolah_asal">Sekolah Asal</label>
    <input type="text" name="sekolah_asal" value="<?= $valSekolah_asal ?>" id="sekolah_asal" class="form-control" required>
</div>
<div class="form-group">
    <label for="diterima_disekolah_ini">Diterima di Sekolah Ini</label>
    <input type="text" name="diterima_disekolah_ini" value="<?= $valDiterima_disekolah_ini ?>" id="diterima_disekolah_ini" class="form-control" required>
</div>
<div class="form-group">
    <label for="nama_ayah">Nama Ayah</label>
    <input type="text" name="nama_ayah" value="<?= $valNama_ayah ?>" id="nama_ayah" class="form-control" required>
</div>
<div class="form-group">
    <label for="nama_ibu">Nama Ibu</label>
    <input type="text" name="nama_ibu" value="<?= $valNama_ibu ?>" id="nama_ibu" class="form-control" required>
</div>
<div class="form-group">
    <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
    <input type="text" name="pekerjaan_ayah" value="<?= $valPekerjaan_ayah ?>" id="pekerjaan_ayah" class="form-control" required>
</div>
<div class="form-group">
    <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
    <input type="text" name="pekerjaan_ibu" value="<?= $valPekerjaan_ibu ?>" id="pekerjaan_ibu" class="form-control" required>
</div>
<div class="form-group">
    <label for="alamat_orang_tua">Alamat Orang Tua</label>
    <input type="text" name="alamat_orang_tua" value="<?= $valAlamat_orang_tua ?>" id="alamat_orang_tua" class="form-control" required>
</div>
<div class="form-group">
    <label for="nama_wali">Nama Wali</label>
    <input type="text" name="nama_wali" value="<?= $valNama_wali ?>" id="nama_wali" class="form-control" required>
</div>
<div class="form-group">
    <label for="alamat_wali">Alamat Wali</label>
    <input type="text" name="alamat_wali" value="<?= $valAlamat_wali ?>" id="alamat_wali" class="form-control" required>
</div>
<div class="form-group">
    <label for="pekerjaan_wali">Pekerjaan Wali</label>
    <input type="text" name="pekerjaan_wali" value="<?= $valPekerjaan_wali ?>" id="pekerjaan_wali" class="form-control" required>
</div>

        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>
</div>
<?php $isi = ob_get_clean() ?>
<?php include "view/template.php" ?>
