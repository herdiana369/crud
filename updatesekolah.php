<?php
require 'init.php';
require 'index.php';
 $id=$_GET['id'];
 $data=$sekolah->getdatasingle($id);
if($_POST>0){
    if($_POST){
        $sekolah->data=[$_POST['id'],$_POST['kode_kabupaten_kota'],$_POST['nama_kabupaten_kota'],$_POST['kategori_sekolah'],$_POST['jumlah_sekolah'],$_POST['satuan'],$_POST['tahun_ajaran']];
        $sekolah->update();
    echo"
    <script>
    alert('data berhasil diubah');
    document.location.href='datasekolah.php';
    </script>";
}else {echo"gagal ubah data";}}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body class="tengah">
    <h1>UBAH DATA</h1>
    <form action="" method="post">
        <table>
    <td>ID</td>
    <td>
        <input type="text" name="id" id="id" required="" value="<?= $data['id'];?>"></td>
    <tr>
    <td>kode kab/kota</td>
    <td><input type="text"  name="kode_kabupaten_kota" id="kode_kabupaten_kota" required="" value="<?=$data['kode_kabupaten_kota'];?>"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text"  name="nama_kabupaten_kota" id="nama_kabupaten_kota" required="" value="<?=$data['nama_kabupaten_kota'];?>"></td>
</tr>
<tr>
    <td>kategori sekolah</td>
    <td><input type="text"  name="kategori_sekolah" id="kategori_sekolah" required="" value="<?=$data['kategori_sekolah'];?>"></td>
</tr>
<tr>
    <td>jumlah sekolah</td>
    <td><input type="text"  name="jumlah_sekolah" id="jumlah_sekolah" required="" value="<?=$data['jumlah_sekolah'];?>"></td>
</tr>
<tr>
    <td>satuan</td>
    <td><input type="text"  name="satuan" id="satuan" required="" value="<?=$data['satuan'];?>"></td>
</tr>
<tr>
    <td>tahun ajaran</td>
    <td><input type="text"  name="tahun_ajaran" id="tahun_ajaran" required="" value="<?=$data['tahun_ajaran'];?>"></td>
</tr>
<tr>
    <td><button type='submit'>SAVE</button></td>
    <td><button> <a href="datasekolah.php">kembali</a></button></td>
</tr>
</table>
</form>
</body>
</html>
