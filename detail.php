
<?php
require_once('conn.php');
$id = $_GET['id'];
$query = "SELECT * FROM makanan WHERE id_makanan =  $id";
$data = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Makanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-dark text-white">
    <div class="row text-center">
        <div class="col-12 p-5">
            <p class="h4"> Data Detail Makanan Papua <i class="bi bi-egg-fried"></i> </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                    <a href="index.php" class="btn btn-success" > Kembali </a>


                <div class="table-responsive mt-3">

                <table class="table table-bordered table-hover">
                    <?php foreach($data as $d): ?>
                    <tr>
                        <th>Nama Makanan</th>
                        <td><?= $d['nama_makanan']?></td>
                    </tr>

                    <tr>
                        <th>Harga</th>
                        <td>Rp. <?= number_format($d['harga_makanan'],0,',','.'); ?></td>
                    </tr>

                    <tr>
                        <th>Warung</th>
                        <td><?= $d['warung']?></td>
                    </tr>


                    <tr>    
                        <th>Alamat Warung</th>
                        <td><?= $d['alamat']?></td>
                        
                    </tr>

                    <tr>    
                        <th>Pemilik Warung</th>
                        <td><?= $d['pemilik_warung']?></td>
                        
                    </tr>

                    <tr>
                        <th> Aksi </th>
                        <td>
                            <a href="ubah.php" class="btn btn-success"> <i class="bi bi-pencil-fill"></i></a>
                            <a href="hapus.php" class="btn btn-danger"> <i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    <?php endforeach ?>

                </table>




                </div>
            </div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>



