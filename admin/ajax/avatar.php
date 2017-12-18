<?php
  include('../../config/connection.php');
  $id = $_GET['id'];

  $q = "select avatar from users where id = $id";
  $r = mysqli_query($dbc, $q);
  $data = mysqli_fetch_assoc($r);
?>

<div class="avatar-container" style="background-image: url('../uploads/<?php echo $data['avatar']; ?>');">