<!-- file : oopmvc/view/anggota/detail.php -->
<?php
$judul = $anggota['nama_siswa'];
?>

<?php ob_start() ?>
<h1>    <?= $anggota['nama_siswa']; ?> </h1>
<dl>
<dt> NISN : </dt>
<dd> <?= $anggota['nisn']; ?> </dd>
<dt> Kelas ID : </dt>
<dd> <?= $anggota['kelas_id']; ?> </dd>
<dt> ID Jurusan : </dt>
<dd> <?= $anggota['id_jurusan']; ?> </dd>
<dt> Nama Siswa : </dt>
<dd> <?= $anggota['nama_siswa']; ?> </dd>
<dt> Tanggal Lahir : </dt>
<dd> <?= $anggota['ttl']; ?> </dd>
<dt> Jenis Kelamin : </dt>
<dd> <?= $anggota['jenis_kelamin']; ?> </dd>
<dt> Agama : </dt>
<dd> <?= $anggota['agama']; ?> </dd>
<dt> Status dalam Keluarga : </dt>
<dd> <?= $anggota['status_dalam_keluarga']; ?> </dd>
<dt> Anak Ke : </dt>
<dd> <?= $anggota['anak_ke']; ?> </dd>
<dt> Alamat Peserta Didik : </dt>
<dd> <?= $anggota['alamat_peserta_didik']; ?> </dd>
<dt> Nomor Telepon Rumah : </dt>
<dd> <?= $anggota['nomor_telp_rumah']; ?> </dd>
<dt> Sekolah Asal : </dt>
<dd> <?= $anggota['sekolah_asal']; ?> </dd>
<dt> Diterima di Sekolah Ini : </dt>
<dd> <?= $anggota['diterima_disekolah_ini']; ?> </dd>
<dt> Nama Ayah : </dt>
<dd> <?= $anggota['nama_ayah']; ?> </dd>
<dt> Nama Ibu : </dt>
<dd> <?= $anggota['nama_ibu']; ?> </dd>
<dt> Pekerjaan Ayah : </dt>
<dd> <?= $anggota['pekerjaan_ayah']; ?> </dd>
<dt> Pekerjaan Ibu : </dt>
<dd> <?= $anggota['pekerjaan_ibu']; ?> </dd>
<dt> Alamat Orang Tua : </dt>
<dd> <?= $anggota['alamat_orang_tua']; ?> </dd>
<dt> Nama Wali : </dt>
<dd> <?= $anggota['nama_wali']; ?> </dd>
<dt> Alamat Wali : </dt>
<dd> <?= $anggota['alamat_wali']; ?> </dd>
<dt> Pekerjaan Wali : </dt>
<dd> <?= $anggota['pekerjaan_wali']; ?> </dd>

</dl>
 <a class="btn btn-success" href="http://localhost/oopmvc/index.php/anggota"> KEMBALI </a>
<?php $isi=ob_get_clean(); ?>
<?php include "view/template.php";  
?>


