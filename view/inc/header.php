<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo WEBROOT; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (!isset($_GET['url'])): ?>
      <link rel="stylesheet" href="./assets/css/main.css">
      <link rel="stylesheet" href="./assets/css/responsive.css">
    <?php else: ?>
      <link rel="stylesheet" href="../assets/css/main.css">
      <link rel="stylesheet" href="../assets/css/responsive.css">
    <?php endif; ?>
      <?php if (!isset($_GET['url'])): ?>
        <script type="text/javascript" src="./assets/js/main.js"></script>
        <script type="text/javascript" src="./assets/js/responsive.js"></script>
      <?php else: ?>
        <script type="text/javascript" src="../assets/js/main.js"></script>
        <script type="text/javascript" src="../assets/js/responsive.js"></script>
      <?php endif; ?>
  </head>
  <body>
    <?php require('nav.php'); ?>
