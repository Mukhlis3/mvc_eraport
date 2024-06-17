<?php // file : oopmvc/model/anggota_model.php //

class Anggota_model {
    protected $db;

    public function __construct($database){
        $this->db=$database;
    }

    public function getAnggota() {
        $link = $this->db->openDbConnection();
        $result = $link->query("SELECT *FROM siswa_detail ORDER BY nisn");

        $anggota = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $anggota[] = $row;
        }
        $this->db->closeDbConnection($link);

        return $anggota;
        
    }
    public function getAnggotabyId($nisn){
        $link = $this->db->openDbConnection();

        $query = "SELECT *FROM siswa_detail WHERE nisn =:nisn";
        $statement = $link->prepare($query);
        $statement->bindValue(':nisn', $nisn, PDO::PARAM_INT);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $this->db->closeDbConnection($link);
        return $row;
    }

    public function insert(){
        $link = $this->db->openDbConnection();
         $query = //"INSERT INTO siswa_detail (nama, Tanggal_lahir, Kota_lahir) 
        //           VALUES (:nama, :Tanggal_lahir, :Kota_lahir)";
                  "INSERT INTO siswa_detail (nisn, kelas_id, id_jurusan, nama_siswa, ttl, jenis_kelamin, agama, status_dalam_keluarga, anak_ke, alamat_peserta_didik, nomor_telp_rumah, sekolah_asal, diterima_disekolah_ini, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu, alamat_orang_tua, nama_wali, alamat_wali, pekerjaan_wali)
                   VALUES (:nisn, :kelas_id, :id_jurusan, :nama_siswa, :ttl, :jenis_kelamin, :agama, :status_dalam_keluarga, :anak_ke, :alamat_peserta_didik, :nomor_telp_rumah, :sekolah_asal, :diterima_disekolah_ini, :nama_ayah, :nama_ibu, :pekerjaan_ayah, :pekerjaan_ibu, :alamat_orang_tua, :nama_wali, :alamat_wali, :pekerjaan_wali)";
        $statement = $link->prepare($query);
        $statement->bindValue(':nisn', $_POST['nisn'], PDO::PARAM_STR);
        $statement->bindValue(':kelas_id', $_POST['kelas_id'], PDO::PARAM_STR);
        $statement->bindValue(':id_jurusan', $_POST['id_jurusan'], PDO::PARAM_STR);
        $statement->bindValue(':nama_siswa', $_POST['nama_siswa'], PDO::PARAM_STR);
        $statement->bindValue(':ttl', $_POST['ttl'], PDO::PARAM_STR);
        $statement->bindValue(':jenis_kelamin', $_POST['jenis_kelamin'], PDO::PARAM_STR);
        $statement->bindValue(':agama', $_POST['agama'], PDO::PARAM_STR);
        $statement->bindValue(':status_dalam_keluarga', $_POST['status_dalam_keluarga'], PDO::PARAM_STR);
        $statement->bindValue(':anak_ke', $_POST['anak_ke'], PDO::PARAM_STR);
        $statement->bindValue(':alamat_peserta_didik', $_POST['alamat_peserta_didik'], PDO::PARAM_STR);
        $statement->bindValue(':nomor_telp_rumah', $_POST['nomor_telp_rumah'], PDO::PARAM_STR);
        $statement->bindValue(':sekolah_asal', $_POST['sekolah_asal'], PDO::PARAM_STR);
        $statement->bindValue(':diterima_disekolah_ini', $_POST['diterima_disekolah_ini'], PDO::PARAM_STR);
        $statement->bindValue(':nama_ayah', $_POST['nama_ayah'], PDO::PARAM_STR);
        $statement->bindValue(':nama_ibu', $_POST['nama_ibu'], PDO::PARAM_STR);
        $statement->bindValue(':pekerjaan_ayah', $_POST['pekerjaan_ayah'], PDO::PARAM_STR);
        $statement->bindValue(':pekerjaan_ibu', $_POST['pekerjaan_ibu'], PDO::PARAM_STR);
        $statement->bindValue(':alamat_orang_tua', $_POST['alamat_orang_tua'], PDO::PARAM_STR);
        $statement->bindValue(':nama_wali', $_POST['nama_wali'], PDO::PARAM_STR);
        $statement->bindValue(':alamat_wali', $_POST['alamat_wali'], PDO::PARAM_STR);
        $statement->bindValue(':pekerjaan_wali', $_POST['pekerjaan_wali'], PDO::PARAM_STR);
        $statement->execute();

        $this->db->closeDbConnection();
    }

    public function update($nisn){
        $link = $this->db->openDbConnection();
        $query ="UPDATE siswa_detail SET 
        nisn = :nisn, 
        kelas_id = :kelas_id, 
        id_jurusan = :id_jurusan, 
        nama_siswa = :nama_siswa, 
        ttl = :ttl, 
        jenis_kelamin = :jenis_kelamin, 
        agama = :agama, 
        status_dalam_keluarga = :status_dalam_keluarga, 
        anak_ke = :anak_ke, 
        alamat_peserta_didik = :alamat_peserta_didik, 
        nomor_telp_rumah = :nomor_telp_rumah, 
        sekolah_asal = :sekolah_asal, 
        diterima_disekolah_ini = :diterima_disekolah_ini, 
        nama_ayah = :nama_ayah, 
        nama_ibu = :nama_ibu, 
        pekerjaan_ayah = :pekerjaan_ayah, 
        pekerjaan_ibu = :pekerjaan_ibu, 
        alamat_orang_tua = :alamat_orang_tua, 
        nama_wali = :nama_wali, 
        alamat_wali = :alamat_wali, 
        pekerjaan_wali = :pekerjaan_wali
         WHERE nisn = :nisn";

        $statement = $link->prepare($query);
        $statement->bindValue(':nisn', $_POST['nisn'], PDO::PARAM_STR);
        $statement->bindValue(':kelas_id', $_POST['kelas_id'], PDO::PARAM_STR);
        $statement->bindValue(':id_jurusan', $_POST['id_jurusan'], PDO::PARAM_STR);
        $statement->bindValue(':nama_siswa', $_POST['nama_siswa'], PDO::PARAM_STR);
        $statement->bindValue(':ttl', $_POST['ttl'], PDO::PARAM_STR);
        $statement->bindValue(':jenis_kelamin', $_POST['jenis_kelamin'], PDO::PARAM_STR);
        $statement->bindValue(':agama', $_POST['agama'], PDO::PARAM_STR);
        $statement->bindValue(':status_dalam_keluarga', $_POST['status_dalam_keluarga'], PDO::PARAM_STR);
        $statement->bindValue(':anak_ke', $_POST['anak_ke'], PDO::PARAM_STR);
        $statement->bindValue(':alamat_peserta_didik', $_POST['alamat_peserta_didik'], PDO::PARAM_STR);
        $statement->bindValue(':nomor_telp_rumah', $_POST['nomor_telp_rumah'], PDO::PARAM_STR);
        $statement->bindValue(':sekolah_asal', $_POST['sekolah_asal'], PDO::PARAM_STR);
        $statement->bindValue(':diterima_disekolah_ini', $_POST['diterima_disekolah_ini'], PDO::PARAM_STR);
        $statement->bindValue(':nama_ayah', $_POST['nama_ayah'], PDO::PARAM_STR);
        $statement->bindValue(':nama_ibu', $_POST['nama_ibu'], PDO::PARAM_STR);
        $statement->bindValue(':pekerjaan_ayah', $_POST['pekerjaan_ayah'], PDO::PARAM_STR);
        $statement->bindValue(':pekerjaan_ibu', $_POST['pekerjaan_ibu'], PDO::PARAM_STR);
        $statement->bindValue(':alamat_orang_tua', $_POST['alamat_orang_tua'], PDO::PARAM_STR);
        $statement->bindValue(':nama_wali', $_POST['nama_wali'], PDO::PARAM_STR);
        $statement->bindValue(':alamat_wali', $_POST['alamat_wali'], PDO::PARAM_STR);
        $statement->bindValue(':pekerjaan_wali', $_POST['pekerjaan_wali'], PDO::PARAM_STR);
        $statement->execute();

        $this->db->closeDbConnection();
    }

    public function delete($id){
        $link = $this->db->openDbConnection();
        $query = "DELETE FROM siswa_detail WHERE nisn = :nisn";
        $statement = $link->prepare($query);
        $statement->bindValue(':nisn', $nisn, PDO::PARAM_INT);
        $statement->execute();

        $this->db->closeDbConnection();
    }
}

