<?php
require "init.php";
require "index.php";
$data_siswa= $siswa->getdata();
if(isset($_POST['cari'])){
    $data_siswa=$siswa->cari($_POST['keyword']);
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
<h1 class="tengah">DATA SISWA</h1>
<br>
    <button type="submit"><a class="btn btn-sm btn-warning" href="tambah.php">tambah siswa </a></button>
</br>
    <br>
      <form action="" method="post">
        <input  class="form-control form-control-sm" type="text" name="keyword" id="keyword">
        <input type="submit" class="btn btn-sm btn-succes btn-danger" name="cari" value="cari">
</form>
</br>
    <table id="siswatable" style="width:100%" class="table" >
       
        <tr >
            <td>NIS</td>
            <td>Nama Siswa</td>
            <td>Alamat</td>
            <td>Jurusan</td>
            <td>Aksi</td>
       </tr>
        <?php foreach ($data_siswa as $row) :
        ?>
        <tr>
            <td><?= $row['Nis'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['alamat'];?></td>
            <td><?= $row['jurusan']; ?></td>
            <td>
                <a class="btn btn-sm btn-danger" href="update.php?id=<?= $row["id"];?>">ubah</a> 
                <a class="btn btn-sm btn-warning" href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?');">hapus</a>
      </td>
      </tr>
      <?php
      endforeach;?>
</table>                  
    </section>