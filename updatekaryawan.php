<?php
require 'init.php';
require 'index.php';
 $id=$_GET['id'];
 $data=$karyawan->getdatasingle($id);
if($_POST>0){
    if($_POST){
        $karyawan->data=[$_POST['id'],$_POST['nik'],$_POST['nama'],$_POST['alamat'],$_POST['jabatan'],$_POST['gaji'],$_POST['jenis_kelamin']];
        $karyawan->update();
    echo"
    <script>
    alert('data berhasil diubah');
    document.location.href='datakaryawan.php';
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
    <td>NIK</td>
    <td>
    <input type="hidden" name="id" value="<?= $data['id'];?>">
        <input type="text" name="nik" id="nik" required="" value="<?= $data['nik'];?>"></td>
    <tr>
    <td>NAMA</td>
    <td><input type="text"  name="nama" id="nama" required="" value="<?=$data['nama'];?>"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text"  name="alamat" id="alamat" required="" value="<?=$data['alamat'];?>"></td>
</tr>
<tr>
    <td>JABATAN</td>
    <td><input type="text"  name="jabatan" id="jabatan" required="" value="<?=$data['jabatan'];?>"></td>
</tr>
<tr>
    <td>GAJI</td>
    <td><input type="text"  name="gaji" id="gaji" required="" value="<?=$data['gaji'];?>"></td>
</tr>
<tr>
    <td>JENIS KELAMIN</td>
    <td><input type="text"  name="jenis_kelamin" id="jenis_kelamin" required="" value="<?=$data['jenis_kelamin'];?>"></td>
</tr>
<tr>
    <td><button type='submit'>SAVE</button></td>
    <td><button> <a href="datakaryawan.php">kembali</a></button></td>
</tr>
</table>
</form>
</body>
</html>
