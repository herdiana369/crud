<?php
require 'init.php';
require 'index.php';
if($_POST){
    if($_POST>0){
        $siswa->data=['',$_POST['Nis'],$_POST['nama'],$_POST['alamat'],$_POST['jurusan']];
        $siswa->save();
        header('Location: datasiswa.php');
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
    <h2>tambah siswa</h2>
    <form action="" method="post">
    <table>
        <td>NIS</td>
        <td><input type="text" name="Nis" id="Nis"></td>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat" id="alamat"></td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td><input type="text" name="jurusan" id="jurusan"></td>
</tr>
<tr>
    <td><button type="submit"><a href="datasiswa.php">kembali</a><button type="submit">save</a></td>
</tr>
    </table>
</from>  
</body>
</html>