<?php
include "koneksi.php";
session_start();
$username   = $_POST['username'];
$password   = $_POST['password'];
$inspektor  = "SELECT * FROM `user`where email = '$username' AND password = '$password'  ";
$result     = mysqli_query($connect,$inspektor);

if (mysqli_num_rows($result) != 0 || $_SESSION['id'] != '')
  {
  while ($row=mysqli_fetch_row($result))
    {
    $_SESSION['id']   = $row[0];
    $_SESSION['nama'] = $row[1];
    }
?>
<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Sertifikasi Alat</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- services
    ================================================== -->
    <section id='services' class="s-services" style="margin-top:-50px;width:100%;">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Dashboard</h3>
                <h1 class="display-2">Admin Menu</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row section-header has-bottom-sep" data-aos="fade-up" style="width:100%;">
                <div class="row" id="card">
                <h5 style="float:left;text-transform:uppercase; font-weight:800; font-size:12px;">user : Chalid Ade Rahman</h5> <h5 style="float:right"><a href="logout.php">Logout</a></h5>
                  <table>
                    <thead>
                    <tr>
                    <th>#</th>
                    <th>Nama Alat</th>
                    <th>Id Alat</th>
                    <th>Letak Alat</th>
                    <th>Kode Alat</th>
                    <th>Tanggal Sertifikasi</th>
                    <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "koneksi.php";
                    $kondisi = "SELECT * FROM `alat`";
                    $no = 1;
                    $result      = mysqli_query($connect,$kondisi);
                    while ($row  = mysqli_fetch_row($result))
                      {
                        $id      = $row[0];
                        $nama    = $row[1];
                        $letak   = $row[2];
                        $kode    = $row[3];
                        $tgl     = $row[4];
                        $state   = $row[5];
                    ?>
                    <tr>
                    <td data-label="No"><?php echo $no; ?></td>
                    <td data-label="Nama Alat"><?php echo $nama; ?></td>
                    <td data-label="Id Alat"><?php echo $id; ?></td>
                    <td data-label="Letak Alat"><?php echo $letak; ?></td>
                    <td data-label="Kode Alat"><?php echo $kode; ?></td>
                    <td data-label="Tanggal Sertifikasi"><?php echo $tgl; ?></td>
                    <td data-label="Opsi">
                      <?php if($state == 0) { ?>
                      <a href="laporan.php?id=<?php echo $id; ?>"><button style="background:#007a9b;border:solid thin #007a9b; color:#fff">Sertifikasi</button></a>
                      <?php } else { ?>
                      <button style="background:#05c300;border:solid thin #05c300; color:#fff">Tersertifikasi</button>
                      <?php } ?>
                    </td>
                    </tr>
                  <?php $no++;} ?>
                    <tr>
                    <td data-label="Menu" colspan="7">
                      <!-- <a href="logout.php"><button type="button" name="button" style="background: #fff;border: solid thin #007a9b;border-radius: 10px;">Logout</button></a> -->
                    </td>
                    </tr>
                  </tbody>
                </table>
                </div>
            </div>
        </div> <!-- end services-list -->

    </section> <!-- end s-services -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
<?php
} else {
  echo "<script>alert('Anda Harus Login Terlebih Dahulu | Pastikan Username Password Anda Benar');window.location = '../index.php';</script>";
  }
?>
