<?php
  include('../../config/connection.php');
  $id = $_GET['id'];
  $q = "delete from pages where id = '$id'";
  $r = mysqli_query($dbc, $q);
  if($r) {
    echo "Pages Deleted";
  }else {
    echo "There was an error...<br>";
    echo $q.'<br>';
    echo mysqli_error($dbc);
  }
?>