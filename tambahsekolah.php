<?php
require 'init.php';
require 'index.php';
if($_POST){
    if($_POST>0){
        $sekolah->data=[$_POST['id'],$_POST['kode_kabupaten_kota'],$_POST['nama_kabupaten_kota'],$_POST['kategori_sekolah'],$_POST['jumlah_sekolah'],$_POST['satuan'],$_POST['tahun_ajaran']];
        $sekolah->save();
        header('Location: datasekolah.php');
    }else{
            echo"gagal tambah data";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="tengah">
    <h2>tambah sekolah</h2>
    <form action="" method="post">
    <table>
        <td>ID</td>
        <td><input type="text" name="id" id="id"></td>
        <tr>
            <td>kode kab/kota</td>
            <td><input type="text" name="kode_kabupaten_kota" id="kode_kabupaten_kota"></td>
        </tr>
        <tr>
            <td>nama kab/kota</td>
            <td><input type="text" name="nama_kabupaten_kota" id="nama_kabupaten_kota"></td>
        </tr>
        <tr>
            <td>kategori sekolah</td>
            <td><input type="text" name="kategori_sekolah" id="kategori_sekolah"></td>
</tr>
        <tr>
            <td>jumlah sekolah</td>
            <td><input type="text" name="jumlah_sekolah" id="jumlah_sekolah"></td>
</tr>
        <tr>
            <td>satuan</td>
            <td><input type="text" name="satuan" id="satuan"></td>
</tr>
        <tr>
            <td>tahun ajaran</td>
            <td><input type="text" name="tahun_ajaran" id="tahun_ajaran"></td>
</tr>
<tr>
    <td><button type="submit"><a href="datasekolah.php">kembali</a><button type="submit">save</a></td>
</tr>
    </table>
</from>  
</body>
</html>