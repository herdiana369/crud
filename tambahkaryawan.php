<?php
require 'init.php';
require 'index.php';
if($_POST){
    if($_POST>0){
        $karyawan->data=['',$_POST['nik'],$_POST['nama'],$_POST['alamat'],$_POST['jabatan'],$_POST['gaji'],$_POST['jenis_kelamin']];
        $karyawan->save();
        header('Location: datakaryawan.php');
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
    <title>tambah karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="tengah">
    <h2>tambah karyawan</h2>
    <form action="" method="post">
    <table>
        <td>NIK</td>
        <td><input type="text" name="nik" id="nik"></td>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat" id="alamat"></td>
        </tr>
        <tr>
            <td>jabatan</td>
            <td><input type="text" name="jabatan" id="jabatan"></td>
</tr>
        <tr>
            <td>GAJI</td>
            <td><input type="text" name="gaji" id="gaji"></td>
</tr>
<tr>
    <td>jenis kelamin</td>
    <td><input type="text" name="jenis_kelamin" id="jenis_kelamin"></td>
</tr>
<tr>
    <td><button type="submit"><a href="datakaryawan.php">kembali</a><button type="submit">save</a></td>
</tr>
    </table>
</from>  
</body>
</html>