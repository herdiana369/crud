<?php
require 'init.php';
$username=$_GET['username'];
$user->delete($username);
if($user){
    header('location: user.php');
}else{
    die("gagal menghapus...");
}
?>