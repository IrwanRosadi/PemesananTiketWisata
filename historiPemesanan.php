<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Pemesanan Tiket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <div class="container">
            <!-- <a class="navbar-brand text-white" href="#">SI Pemesanan Tiket Wisata</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Beranda</a>
                    </li>&nbsp;&nbsp;
                    <li>
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Daftar Wisata</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
<!-- /header    -->

<!-- content -->
<?php
 include_once 'koneksi.php';
 $query = mysqli_query($koneksi, "SELECT * FROM tb_pesan");
 while ($data = mysqli_fetch_array($query)){
?>
        <br>
         <table border='0' align='center'>
            <tr>
                <td><h5>Histori Pemesanan Tiket</h5></td>
            </tr>
            <tr>
                <td>Nama Pemesanan</td>
                <td>:</td>
                <td><?php echo $data['nama_lengkap'];?></td>
            </tr>
            <tr>
                <td>No. Identitas</td>
                <td>:</td>
                <td><?php echo $data['nomor_identitas'];?></td>
            </tr>
            <tr>
                <td>No. Hp</td>
                <td>:</td>
                <td><?php echo $data['no_hp'];?></td>
            </tr>
            <tr>
                <td>Tempat Wisata</td>
                <td>:</td>
                <td><?php echo $data['tmpt_wisata'];?></td>
            </tr>
            <tr>
                <td>Pengunjung Dewasa</td>
                <td>:</td>
                <td><?php echo $data['pengu_dewasa'];?> Orang</td>
            </tr>
            <tr>
                <td>Pengunjung Anak-anak</td>
                <td>:</td>
                <td><?php echo $data['pengu_anak'];?> Orang</td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>Rp 10.000</td>
            </tr>
                <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td>Rp <?php echo $data['total_bayar'];?></td>
            </tr>
        </table>
    
<?php } ?>
<!-- /content -->

<!-- <br><br><br><br><br><br><br><br><br> -->
<?php
    include_once 'Layout/footer.php';
?>