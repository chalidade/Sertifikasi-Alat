<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Glint</title>
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
    <section id='services' class="s-services" style="margin-top:-50px;">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead"><?php echo date('d M Y'); ?></h3>
                <h1 class="display-2">PEMBUATAN LAPORAN</h1><hr>
                <div class="row">
                  <?php
                  include "koneksi.php";
                  session_start();
                  $no          = 1;
                  $id          = $_REQUEST['id'];
                  $nama        = $_POST['nama'];
                  $tgl_laporan = $_POST['tanggal'];
                  $letak_alat  = $_POST['letak'];
                  $file_1   = basename($_FILES["file1"]["name"]);
                  $file_2   = basename($_FILES["file2"]["name"]);
                  $file_3   = basename($_FILES["file3"]["name"]);

                  $target_dir = "pengujian/";
                  $target_file_1 = $target_dir . basename($_FILES["file1"]["name"]);
                  $target_file_2 = $target_dir . basename($_FILES["file2"]["name"]);
                  $target_file_3 = $target_dir . basename($_FILES["file3"]["name"]);

                  $uploadOk_1 = 1;
                  $uploadOk_2 = 1;
                  $uploadOk_3 = 1;

                  if (move_uploaded_file($_FILES["file1"]["tmp_name"], $target_file_1)) {
                      // echo "The file ". basename( $_FILES["file1"]["name"]). " has been uploaded.";
                  } else {
                      // echo "Sorry, there was an error uploading your file.";
                  }

                  if (move_uploaded_file($_FILES["file2"]["tmp_name"], $target_file_2)) {
                      // echo "The file ". basename( $_FILES["file2"]["name"]). " has been uploaded.";
                  } else {
                      // echo "Sorry, there was an error uploading your file.";
                  }

                  if (move_uploaded_file($_FILES["file3"]["tmp_name"], $target_file_3)) {
                      // echo "The file ". basename( $_FILES["file3"]["name"]). " has been uploaded.";
                  } else {
                      // echo "Sorry, there was an error uploading your file.";
                  }

                  $insert  = "INSERT INTO `pengujian_alat` (`id_alat`, `nama_alat`, `letak_alat`, `tanggal_pengujian_alat`, `pengujian_1`, `pengujian_2`, `pengujian_3`) VALUES ('$id', '$nama', '$letak_alat', '$tgl_laporan', '$file_1', '$file_2', '$file_3');";
                  $proses  = mysqli_query($connect, $insert);
                   ?>
                  <form action="finish.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                  <div class="col-twelve">
                    <br>
                      <label for="file" style="width:80%;background:#fff;color:#000;font-weight:800; height: 80px;border: solid;padding: 25px;margin: auto;text-transform: uppercase;"> Upload Laporan</label>
                    <input type="file" id="file" name="fileToUpload" value="Upload" style="display:none">
                    <input type="submit" value="Selesai" style="margin-top:30px;width:80%;background:#007a9b;color:#fff; border:none;font-weight:800">
                    <a href="pengujian-alat.php?id=<?php echo $id; ?>"><button style="width:80%;background:#08c2f5;color:#fff; border:none;font-weight:800"> Kembali</button></a>
                  </div>
                  </form>
                </div>
            </div>
        </div> <!-- end section-header -->
    </section> <!-- end s-services -->

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
