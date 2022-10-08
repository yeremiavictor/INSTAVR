<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VR INSTA</title>

    <!-- Custom fonts for this template-->
    <link href=<?= base_url("/vendor/fontawesome-free/css/all.min.css") ?> rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href= <?= base_url("css/sb-admin-2.min.css")?> rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            <?= $this->include('layout/sidebar') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
            <?= $this->renderSection('content') ?>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
        <?= $this->include("layout/scrolltop")?>

    <!-- Logout Modal-->
        <?= $this->include("layout/modal")?>

    <!-- Bootstrap core JavaScript-->
        <?= $this->include("layout/core")?> 

</body>

</html>