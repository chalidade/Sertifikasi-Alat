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
                <h1 class="display-2">PENGUJIAN ALAT</h1>
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

                    $target_dir = "dokumen/";
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

                    $simpan = "INSERT INTO `dokumen` (`tgl_pengecekan_laporan`, `id_alat`, `nama_alat`, `laporan_1`, `laporan_2`, `laporan_3`, `letak_alat`) VALUES ('$tgl_laporan', '$id', '$nama', '$file_1', '$file_2', '$file_3', '$letak_alat');";
                    $proses = mysqli_query($connect, $simpan);

                    $kondisi     = "SELECT * FROM `alat` where id_alat = '$id'";
                    $result      = mysqli_query($connect,$kondisi);
                    while ($row  = mysqli_fetch_row($result))
                      {
                        $id      = $row[0];
                        $nama    = $row[1];
                        $letak   = $row[2];
                        $kode    = $row[3];
                        $tgl     = $row[4];
                    ?>
                  <form action="dokumen.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                  <div class="col-six">
                    <label for="name" style="text-align:left">Nama Alat</label>
                    <input type="text" required id="name" disabled value="<?php echo $nama; ?>" style="width:100%">
                    <input type="hidden" required id="name" name="nama" value="<?php echo $nama; ?>" style="width:100%">
                  </div>
                  <div class="col-six">
                    <label for="kode" style="text-align:left">Kode</label>
                    <input type="text" required id="kode" name="kode" placeholder="Kode" disabled value="<?php echo $kode; ?>" style="width:100%">
                    <input type="hidden" required id="kode"  name="kode" value="<?php echo $kode; ?>" style="width:100%">
                  </div>
                  <div class="col-six">
                    <label for="letak" style="text-align:left">Letak</label>
                    <input type="text" required id="letak" name="letak" placeholder="Letak" disabled value="<?php echo $letak; ?>" style="width:100%">
                    <input type="hidden" required id="letak" name="letak" value="<?php echo $letak; ?>" style="width:100%">
                  </div>
                  <div class="col-six">
                    <label for="tanggal" style="text-align:left">Tanggal</label>
                    <input type="text" required id="tanggal" name="tanggal" placeholder="tanggal Inspeksi" disabled value="<?php echo $tgl; ?>"  style="width:100%">
                    <input type="hidden" required id="tanggal" name="tanggal" placeholder="tanggal Inspeksi" value="<?php echo $tgl; ?>"  style="width:100%">
                  </div>
                  <div class="col-four">
                    <label for="file1" class="upload">Pengujian A</label>
                    <input type="file" required id="file1" name="file1" style="display:none">
                  </div>
                  <div class="col-four">
                    <label for="file2" class="upload">Pengujian B</label>
                    <input type="file" required id="file2" name="file2" style="display:none">
                  </div>
                  <div class="col-four">
                    <label for="file3" class="upload">Pengujian C</label>
                    <input type="file" required id="file3" name="file3" style="display:none">
                  </div>
                  <div class="col-twelve">
                    <br>
                    <input type="submit" value="Next" style="width:100%;background:#007a9b;color:#fff;font-weight:800;   border:none;">
                    <a href="laporan.php?id=<?php echo $id; ?>"><button style="width:100%;background:#08c2f5;color:#fff; border:none;font-weight:800"> Kembali</button></a>
                  </div>
                <?php } ?>
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
