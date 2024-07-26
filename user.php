<?php
require "init.php";
require "index.php";
$data_user= $user->getdata();
if(isset($_POST['cari'])){
    $data_user=$user->cari($_POST['keyword']);
}
?>
<section class="konten">
<style>
         body {
  background-image: url(download\ \(1\).jpg);
         }
         table{
  border-style: dotted;
  border-color: blue;
}
table, tr, td {
  border: 1px solid blue;
}
h1{
    color:red;
}
    </style>
<h1 >LOGIN</h1>
<br>
    <button type="submit"><a  class="btn btn-sm btn-warning" href="tambahuser.php">tambah user</a></button>
</br>
<br>
      <form action="" method="post">
        <input  class="form-control form-control-sm" type="text" name="keyword" id="keyword">
        <input type="submit" class="btn btn-sm btn-succes btn-danger" name="cari" value="cari">
</form>
</br>
</br>
    <table id="usertable" style="width:100%" class="table">
 
        <tr>
            <th>user</th>
            <th>password</th>
            <th>level</th>
            <th>aksi</th>
       </tr>
        <?php foreach ($data_user as $row) :
        ?>
        <tr>
            <td><?= $row['username'];?></td>
            <td><?= $row['password'];?></td>
            <td><?= $row['level'];?></td>
            <td>
                <a class="btn btn-sm btn-warning" href="updateuser.php?username=<?= $row["username"];?>">ubah</a> 
                <a class="btn btn-sm btn-danger" href="hapususer.php?username=<?= $row["username"];?>" onclick="return confirm('yakin hapus?');">hapus</a>
      </td>
      </tr>
      <?php
      endforeach;?>
      </section>
</table>                  
    </section>