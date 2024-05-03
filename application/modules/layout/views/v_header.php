<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=isset($company) ? ucwords(strtolower($company)) : 'Company'; ?> | <?=isset($title) ? $title : 'Home'; ?></title>
    <meta content="Company" name="description">
    <meta content="Company" name="keywords">

    <!-- Favicons -->
    <link href="<?=base_url()?>global-assets/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>global-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <script src="<?=base_url()?>global-assets/plugin/jquery/jquery.min.js"></script>
    <link href="<?=base_url()?>global-assets/plugin/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/datatables/css/dataTables.bootstrap5.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url()?>global-assets/css/style.css" rel="stylesheet">
</head>
<body>