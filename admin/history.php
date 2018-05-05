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
    $_SESSION['nama'] = $row[2];
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
                  <table>
                    <thead>
                    <tr>
                    <th>#</th>
                    <th width="50%">Nama Alat</th>
                    <th width="20%">Id Alat</th>
                    <th>Tanggal Sertifikasi</th>
                    <th>File 1</th>
                    <th>File 2</th>
                    <th>File 3</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                    <td data-label="No">1</td>
                    <td data-label="Nama Alat">Crane</td>
                    <td data-label="Id Alat">CC01</td>
                    <td data-label="Kode Alat">12/12/2018</td>
                    <td data-label="Dokumen 1"> <a href="laporan.php"> <button style="background:#ff0303;border:solid thin #ff0303; color:#fff; font-weight:800">Download</button></a> </td>
                    <td data-label="Dokumen 2"> <a href="laporan.php"> <button style="background:#effe00;border:solid thin #effe00; color:#fff font-weight:800">Download</button></a> </td>
                    <td data-label="Dokumen 3"> <a href="laporan.php"> <button style="background:#2c0;border:solid thin #2c0; color:#fff; font-weight:800">Download</button></a> </td>
                    </tr>
                    <tr>
                    <td data-label="No">2</td>
                    <td data-label="Nama Alat">Crane</td>
                    <td data-label="Id Alat">CC01</td>
                    <td data-label="Kode Alat">12/12/2018</td>
                    <td data-label="Dokumen 1"> <a href="laporan.php"> <button style="background:#ff0303;border:solid thin #ff0303; color:#fff; font-weight:800">Download</button></a> </td>
                    <td data-label="Dokumen 2"> <a href="laporan.php"> <button style="background:#effe00;border:solid thin #effe00; color:#fff font-weight:800">Download</button></a> </td>
                    <td data-label="Dokumen 3"> <a href="laporan.php"> <button style="background:#2c0;border:solid thin #2c0; color:#fff; font-weight:800">Download</button></a> </td>
                    </tr>
                    <tr>
                    <td data-label="No">3</td>
                    <td data-label="Nama Alat">Crane</td>
                    <td data-label="Id Alat">CC01</td>
                    <td data-label="Kode Alat">12/12/2018</td>
                    <td data-label="Dokumen 1"> <a href="laporan.php"> <button style="background:#ff0303;border:solid thin #ff0303; color:#fff; font-weight:800">Download</button></a> </td>
                    <td data-label="Dokumen 2"> <a href="laporan.php"> <button style="background:#effe00;border:solid thin #effe00; color:#fff font-weight:800">Download</button></a> </td>
                    <td data-label="Dokumen 3"> <a href="laporan.php"> <button style="background:#2c0;border:solid thin #2c0; color:#fff; font-weight:800">Download</button></a> </td>
                    </tr>
                    <tr>
                    <td data-label="Menu" colspan="7">
                      <br>
                      <a href="dashboard.php"><button style="background: #fff;border: solid thin #007a9b;border-radius: 10px;" type="button" name="button">Kembali</button>
                      <a href="logout.php"><button type="button" name="button" style="background: #fff;border: solid thin #007a9b;border-radius: 10px;">Logout</button></a>
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
