<?php
    require "init.php";
    require "index.php";
    $id=$_GET['username'];
    $user1=$user->getdataSingle($id);
if($_POST){
    if($_POST>0){
        $user->user1=[$_POST['username'],$_POST['password'],$_POST['level']];
        $user->update();
    echo"
    <script>
    alert('data berhasil diubah');
    document.location.href='datauser.php';
    </script>";
}else {echo"gagal ubah data";}}
?>
<body class="tengah"> 
    

<section >
<link rel="stylesheet" href="style.css">
    <h1>UBAH DATA</h1>
    <form action="" method="post">
        <table>
    <td>username</td>
    <td><input type="text" name="username" id="username" required="" value="<?= $user1['username'];?>"></td>
    <tr>
    <td>password</td>
    <td><input type="text"  name="password" id="password" required="" value="<?=$user1['password'];?>"></td>
</tr>
<tr>
    <td>level</td>
    <td><input type="text"  name="level" id="level" required="" value="<?=$user1['level'];?>"></td>
</tr>

<tr>
    <td><button type='submit'>SAVE</button></td>
    <td><button> <a href="user.php">kembali</a></button></td>
</tr>
</table>
</form>
</section>
</body>