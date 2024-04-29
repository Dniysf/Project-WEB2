<?php
include_once('top.php');
//include_once('menu.php');
include_once('koneksi.php');

$query = "SELECT * FROM periksa";
$periksas = $dbh->query($query)
?>

<head>

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="Template/css/styles.css" rel="stylesheet" />

</head>
<style>
    h3{
        font-family: poppins, sans-serif;
        font-weight: 600;
        text-align: center;
    }
</style>

<main>
    <div class="container-fluid px-4">
    <h3 class="mt-5">Periksa</h3>
        <div class= "d-flex mt-4">
        <a href="dashboard.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Kembali</a>
       
        <a href="create_periksa.php" class="btn btn-primary ms-auto"><strong>+Tambah</strong></a>
        
        </div>



<main>
    <!--<div class="container-fluid px-4">

        <div class= "d-flex mt-4">
        <h3>Hasil Periksa</h3>
        
        </div>-->

<table class="table mt-5">
    <tr>
        
        <th>No</th>
        <th>Tanggal</th>
        <th>Bb</th>
        <th>Tinggi</th>
        <th>Tensi</th>
        <th>Keterangan</th>
    </tr>

    <?php 
    $no = 0;
    foreach ($periksas as $periksa): 
    ?>


    <tr>
  
        <td><?php echo $no = $no + 1; ?></td>
        <td><?= $periksa['tanggal']?></td>
        <td><?= $periksa['berat']?></td>
        <td><?= $periksa['tinggi']?></td>
        <td><?= $periksa['tensi']?></td>
        <td><?= $periksa['keterangan']?></td>
       
       

        <td>
        <a href="periksa_edit.php?id=<?= $periksa['id_data']?>" class="btn btn-primary">
            <i  class="fas fa-edit"></i>
            </a>
            <a href="periksa_delete.php?id=<?= $periksa['id_data']?>" class="btn btn-danger">
            <i  class="fas fa-trash"></i>
            </a>
        </td>

    </tr>



    <?php endforeach; ?>
</table>




    </div>
</main> 



<?php
include_once('bottom.php');
?>