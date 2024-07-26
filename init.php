<?php
require "database.php";

$siswa= new database();
$siswa->table= "tb_siswa";
$siswa->field=['id','Nis','nama','alamat','jurusan'];
$karyawan=new database();
$karyawan->table= "tb_karyawan";
$karyawan->field=['id','nik','nama','alamat','jabatan','gaji','jenis_kelamin'];
$user=new database();
$user->table="user";
$user->field=['username','password','level'];
$sekolah=new database();
$sekolah->table="tb_praktikum_1";
$sekolah->field=['id','kode_kabupaten_kota','nama_kabupaten_kota','kategori_sekolah','jumlah_sekolah','satuan','tahun_ajaran'];
?>