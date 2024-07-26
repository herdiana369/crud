<?php
require "init.php";
require "index.php";
$data_sekolah= $sekolah->getdata();
if(isset($_POST['cari'])){
    $data_sekolah=$sekolah->cari($_POST['keyword']);
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
<h1 class="tengah">DATA SEKOLAH</h1>
<br>
    <button type="submit"><a class="btn btn-sm btn-warning" href="tambahsekolah.php">tambah sekolah</a></button>
</br>
<br>
      <form action="" method="post">
        <input  class="form-control form-control-sm" type="text" name="keyword" id="keyword">
        <input type="submit" class="btn btn-sm btn-succes btn-danger" name="cari" value="cari">
</form>
</br>
    <table id="siswatable" style="width:100%" class="table" >
       
        <tr >
            <td>ID</td>
            <td>kode kab/kota</td>
            <td>nama kab/kota</td>
            <td>kategori sekolah</td>
            <td>jumlah sekolah</td>
            <td>satuan</td>
            <td>tahun ajaran</td>
            <td>Aksi</td>
       </tr>
        <?php foreach ($data_sekolah as $row) :
        ?>
        <tr>
            <td><?= $row['id'];?></td>
            <td><?= $row['kode_kabupaten_kota'];?></td>
            <td><?= $row['nama_kabupaten_kota'];?></td>
            <td><?= $row['kategori_sekolah'];?></td>
            <td><?= $row['jumlah_sekolah']; ?></td>
            <td><?= $row['satuan'];?></td>
            <td><?= $row['tahun_ajaran'];?></td>
            <td>
                <a class="btn btn-sm btn-danger" href="updatesekolah.php?id=<?= $row["id"];?>">ubah</a> 
                <a class="btn btn-sm btn-warning" href="hapussekolah.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?');">hapus</a>
      </td>
      </tr>
      <?php
      endforeach;?>
</table>                  
    </section>