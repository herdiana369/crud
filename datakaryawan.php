<?php
require "init.php";
require "index.php";
$data_karyawan= $karyawan->getdata();
if(isset($_POST['cari'])){
    $data_karyawan=$karyawan->cari($_POST['keyword']);
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
<h1 class="tengah">Data Karyawan</h1>
<br>
    <button type="submit"><a class="btn btn-sm btn-warning" href="tambahkaryawan.php">tambah karyawan</a></button>
</br>
<br>
      <form action="" method="post">
        <input  class="form-control form-control-sm" type="text" name="keyword" id="keyword">
        <input type="submit" class="btn btn-sm btn-succes btn-danger" name="cari" value="cari">
</form>
</br>
<table id="karyawantable" style="width:100%" class="table">
       
       
        <tr >
            <th>NIK</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>JURUSAN</th>
            <th>GAJI</th>
            <th>JENIS KELAMIN</th>
            <th>Aksi</th>
       </tr>
        <?php foreach ($data_karyawan as $row) :
        ?>
        <tr>
            <td><?= $row['nik'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['alamat'];?></td>
            <td><?= $row['jabatan']; ?></td>
            <td><?= $row['gaji']; ?></td>
            <td><?= $row['jenis_kelamin']; ?></td>
            <td>
                <a class="btn btn-sm btn-primary" href="updatekaryawan.php?id=<?= $row["id"];?>">ubah</a> 
                <a class="btn btn-sm btn-warning" href="hapuskaryawan.php?id=<?= $row["id"];?>" onclick="return confirm('yakin hapus?');">hapus</a>
      </td>
      </tr>
      <?php
      endforeach;?>
</table>                  
    </section>