<?php
include "koneksi.php";
$id_alat     = $_REQUEST['id'];
$update      = "UPDATE `alat` SET `state` = '1' WHERE `alat`.`id_alat` = '$id_alat';";
$proses      = mysqli_query($connect, $update);

$id          = rand() . $_REQUEST['id'];
$tanggal     = date("j F Y, g:i a");
$gambar      = basename($_FILES["fileToUpload"]["name"]);

$target_dir  = "laporan/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if file already exists
if (file_exists($target_file)) {
    // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
}

$simpan = "INSERT INTO `laporan` (`id_laporan`, `tgl_laporan`, `daftar_laporan`) VALUES ('$id', '$tanggal', '$gambar');";
$proses = mysqli_query($connect, $simpan);
 ?>
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

<body id="top" style="background:url('images/sicurezza-dei-lavoratori.jpg')">

    <!-- services
    ================================================== -->
    <section id='services' class="s-services" style="background:url('images/sicurezza-dei-lavoratori.jpg')">

        <div class="row section-header has-bottom-sep" data-aos="fade-up" style="background: #fff;padding: 80px;opacity: 0.9;border-radius: 20px;">
            <div class="col-full">
                <h3 class="subhead"><?php echo date('d M Y'); ?></h3>
                <h1 class="display-2">DATA DISIMPAN</h1>
                <p>Data Sertifikasi berhasil disimpan, klik tombol kembali untuk menuju halaman utama</p>
                <div class="row">
                  <div class="col-twelve">
                    <a href="dashboard.php"><button style="width:100%;background:#08c2f5;color:#fff; border:none;font-weight:800"> Kembali</button></a>
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
