<?php
require 'init.php';
require 'index.php';
if($_POST){
    if($_POST>0){
        $user->data=[$_POST['username'],$_POST['password'],$_POST['level']];
        $user->save();
        echo"sukses tambah data";}else{
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
        <td>USERNAME</td>
        <td><input type="text" name="username" id="username"></td>
        <tr>
            <td>PASSWORD</td>
            <td><input type="text" name="password" id="password"></td>
        </tr>
        <tr>
            <td>level</td>
            <td><input type="text" name="level" id="level"></td>
        </tr>
<tr>
    <td><button type="submit"><a href="user.php">kembali</a><button type="submit">save</a></td>
</tr>
    </table>
</from>  
</body>
</html>