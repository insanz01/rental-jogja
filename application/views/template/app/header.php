<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rental Jogja</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Rental Mobil Yogyakarta">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/main/styles/bootstrap-4.1.2/bootstrap.min.css">
  <link href="<?= base_url() ?>assets/main/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/main/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/main/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/main/plugins/OwlCarousel2-2.2.1/animate.css">
  <?php if ($cart) : ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/main/styles/cart.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/main/styles/cart_responsive.css">
  <?php else : ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/main/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/main/styles/responsive.css">
  <?php endif; ?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>