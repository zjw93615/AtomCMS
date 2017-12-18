<?php

# Start the session
session_start();

if(!isset($_SESSION['username'])) {
  header('Location: login.php');
}

?>

<?php
  include('config/setup.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $page['title'].' | '.$site_title; ?></title>

  <?php
    include('config/css.php');
    include('config/js.php');
  ?>

</head>
<body>
  <div id="wrap">
    <?php include(D_TEMPLATE.'/navigation.php'); // Main Navigation  ?>