<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Tiket</title>
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
<div class="container">
    <h5>Form Pemesanan Tiket</h5><br>
    <form method="POST">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
            <input type="text" name="nama_lengkap" class="form-control" id="nama">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nomeridentitas" class="col-sm-2 col-form-label">Nomor Identitas </label>
            <div class="col-sm-10">
            <input type="text" name="nomor_identitas" class="form-control" id="nomeridentitas">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nomorHp" class="col-sm-2 col-form-label">No. Hp </label>
            <div class="col-sm-10">
            <input type="text" name="no_hp" class="form-control" id="nomorHp">
            </div>
        </div>
        <div class="row mb-3">
            <label for="tempatwisata" class="col-sm-2 col-form-label">Tempat Wisata</label>
            <div class="col-sm-10">
            <select name="tmpt_wisata" class="form-select form-select" aria-label=".form-select-lg example">
                <option value="">-- Pilih --</option>
                <option value="Kebun Raya Lemor">Kebun Raya Lemor</option>
                <option value="Pantai Ketapang">Pantai Ketapang</option>
                <option value="Dende Seruni">Dende Seruni</option>
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tglkunjungan" class="col-sm-2 col-form-label">Tanggal Kunjungan</label>
            <div class="col-sm-10">
            <input type="date" name="tgl_kunjungan" class="form-control" id="tglkunjungan">
            </div>
        </div>
        <div class="row mb-3">
            <label for="pengunjungdewasa" class="col-sm-2 col-form-label">Pengunjung Dewasa</label>
            <div class="col-sm-10">
            <input type="text" name="pengu_dewasa" class="form-control" id="pengunjungdewasa">
            </div>
        </div>
        <div class="row mb-3">
            <label for="pengunjunganak" class="col-sm-2 col-form-label">Pengunjung Anak<br><p style="font-size:11px">usia dibawah 12 tahun</p></label>
            <div class="col-sm-10">
            <input type="text" name="pengu_anak"class="form-control" id="pengunjunganak">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label">Harga Tiket</label>
            <div class="col-sm-10">
                <p>: Rp. 10.000</p>
            </div>
        </div>

<?php
// menghitung total pembayaran
include_once 'koneksi.php';
    if(isset($_POST['pesan'])){
        $nama_lengkap       = $_POST['nama_lengkap'];
        $nomor_identitas    = $_POST['nomor_identitas'];
        $no_hp              = $_POST['no_hp'];
        $tmpt_wisata        = $_POST['tmpt_wisata'];
        $tgl_kunjungan      = $_POST['tgl_kunjungan'];
        $pengu_dewasa       = $_POST['pengu_dewasa'];
        $pengu_anak         = $_POST['pengu_anak'];
        // $total_bayar        = $_POST['total_bayar'];
        $total_bayar        = ($pengu_dewasa + $pengu_anak * 50/100) * 10000;
    ?>

        <div class="row mb-3">
            <label for="total" class="col-sm-2 col-form-label">Total Bayar</label>
            <div class="col-sm-10">
            
            <input type="hidden" name="total_bayar" value="<?php echo $total_bayar?>" class="form-control">
            </div>
        </div>
    <?php

        $input="INSERT INTO tb_pesan VALUES ('$nama_lengkap',
        '$nomor_identitas', 
        '$no_hp', 
        '$tmpt_wisata',
        '$tgl_kunjungan',
        '$pengu_dewasa',
        '$pengu_anak',
        '$total_bayar')";
    $query = mysqli_query($koneksi, $input);
    if($query){
        echo "<script> alert('Pemesanan Tiket berhasil') </script>";
    }
?>
        
<?php } ?>

        <div class="row mb-3">
            <label for="button" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" name="HitungTotal" class="btn btn-primary" style="padding-right:100px; padding-left:100px;">Hitung Total Bayar</button>&nbsp;&nbsp;
                <button type="submit" name="pesan" class="btn btn-success" style="padding-right:100px; padding-left:100px;">Pesan Tiket</button>&nbsp;&nbsp;
                <button type="reset" class="btn btn-danger" style="padding-right:100px; padding-left:100px;">Cancel</button>
            </div>
        </div>
        
    </form>
</div><br>
<!-- /content -->

<?php
// pemesanan tiket
// include_once 'koneksi.php';
// if(isset($_POST['pesan'])){
//     $nama_lengkap       = $_POST['nama_lengkap'];
//     $nomor_identitas    = $_POST['nomor_identitas'];
//     $no_hp              = $_POST['no_hp'];
//     $tmpt_wisata        = $_POST['tmpt_wisata'];
//     $tgl_kunjungan      = $_POST['tgl_kunjungan'];
//     $pengu_dewasa       = $_POST['pengu_dewasa'];
//     $pengu_anak         = $_POST['pengu_anak'];
//     $total              = ($pengu_dewasa + $pengu_anak * 50/100) * 10000;

//     $input="INSERT INTO tb_pesan VALUES ('$nama_lengkap',
//         '$nomor_identitas', 
//         '$no_hp', 
//         '$tmpt_wisata',
//         '$tgl_kunjungan',
//         '$pengu_dewasa',
//         '$pengu_anak')";
//     $query = mysqli_query($koneksi, $input);
//     if($query){
//         echo "<script> alert('Pemesanan berhasil') </script>";

//         // tampilkan datanya
//         // echo "<h5 align='center'>Histori Pemesanan Tiket</h5>";
//         echo " <table border='0' align='center'>
//                     <tr>
//                         <td><h5>Histori Pemesanan Tiket</h5></td>
//                     </tr>
//                     <tr>
//                         <td>Nama Pemesanan</td>
//                         <td>:</td>
//                         <td>$nama_lengkap</td>
//                     </tr>
//                     <tr>
//                         <td>No. Identitas</td>
//                         <td>:</td>
//                         <td>$nomor_identitas</td>
//                     </tr>
//                     <tr>
//                         <td>No. Hp</td>
//                         <td>:</td>
//                         <td>$no_hp</td>
//                     </tr>
//                     <tr>
//                         <td>Tempat Wisata</td>
//                         <td>:</td>
//                         <td>$tmpt_wisata</td>
//                     </tr>
//                     <tr>
//                         <td>Pengunjung Dewasa</td>
//                         <td>:</td>
//                         <td>$pengu_dewasa Orang</td>
//                     </tr>
//                     <tr>
//                         <td>Pengunjung Anak-anak</td>
//                         <td>:</td>
//                         <td>$pengu_anak Orang</td>
//                     </tr>
//                 </table>";

//     }
// }
?>

<?php
    include_once 'Layout/footer.php';
?>