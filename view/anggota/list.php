<?php 
// file : oopmvc/view/anggota/list.php
$judul = "Daftar Siswa";
ob_start()
?>
<div class="container" >
<h1>Daftar Siswa</h1>
 <a href="http://localhost/oopmvc/index.php/anggota/create"> <button class="btn btn-success">Tambah siswa</button></a> 
<table class="table" border=1>
<tr>
            <td>NISN</td>
            <td>ID Kelas</td>
            <td>Nama Siswa</td>
            <td>Tempat Tanggal Lahir</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
            <td>Status Dalam Keluarga</td>
            <td>Anak Ke</td>
            <td>Alamat Peserta Didik</td>
            <td>Nomor Telp. Rumah</td>
            <td>Sekolah Asal</td>
            <td>Diterima di Sekolah ini</td>
            <td>Nama Ayah</td>
            <td>Nama Ibu</td>
            <td>Pekerjaan Ayah</td>
            <td>Pekerjaan Ibu</td>
            <td>Alamat Orang Tua</td>
            <td>Nama Wali</td>
            <td>Alamat Wali</td>
            <td>Pekerjaan Wali</td>
            <td>Aksi<td>
        </tr>
    <!-- <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Tanggal lahir</th>
        <th>Detail</th>
    </tr> -->
    <?php foreach ($anggota as $row) : ?>
    <tr>
            <td><?=$row['nisn'];  ?></td>
            <td><?=$row['kelas_id']; ?></td>
            <td><?=$row['nama_siswa'];?></td>
            <td><?=$row['ttl']; ?></td>
            <td><?=$row['jenis_kelamin']; ?></td>
            <td><?=$row['agama']; ?></td>
            <td><?=$row['status_dalam_keluarga']; ?></td>
            <td><?=$row['anak_ke'] ;  ?></td>
            <td><?=$row['alamat_peserta_didik']; ?></td>
            <td><?=$row['nomor_telp_rumah'];  ?></td>
            <td><?=$row['sekolah_asal'];  ?></td>
            <td><?=$row['diterima_disekolah_ini'];  ?></td>
            <td><?=$row['nama_ayah'];  ?></td>
            <td><?=$row['nama_ibu'];  ?></td>
            <td><?=$row['pekerjaan_ayah'];  ?></td>
            <td><?=$row['pekerjaan_ibu'];   ?></td>
            <td><?=$row['alamat_orang_tua'];   ?></td>
            <td><?=$row['nama_wali'];   ?></td>
            <td><?=$row['alamat_wali'];   ?></td>
            <td><?=$row['pekerjaan_wali']; ?></td>
        
        <td> <a class="btn btn-primary" href="anggota/detail?nisn=<?= $row['nisn']?> "> VIEW </a>
             <a class="btn btn-warning" href="anggota/edit?nisn=<?= $row['nisn']?> "> EDIT </a>
             <a class="btn btn-danger delete-button" href="anggota/delete?id=<?= $row['nisn']; ?>">DELETE</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</div>
<?php $isi = ob_get_clean() ?>
<?php include 'view/template.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var deleteButtons = document.querySelectorAll('.delete-button');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            var confirmDelete = confirm('Apakah Anda yakin ingin menghapus siswa ini?');
            if (!confirmDelete) {
                event.preventDefault();
            }
        });
    });
});
</script>