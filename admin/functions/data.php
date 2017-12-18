<?php

function data_setting_value($dbc, $id) {
  $q = "select * from settings where id = '$id'";
  $r = mysqli_query($dbc, $q);

  $data = mysqli_fetch_assoc($r);
  return $data['value'];
}

function data_user($dbc, $id) {
  if(is_numeric($id)) {
    $cond = "where id = '$id'";
  }else {
    $cond = "where email = '$id'";
  }

  $q = "select * from users $cond";

  $r = mysqli_query($dbc, $q);

  $data = mysqli_fetch_assoc($r);

  $data['fullname'] = $data['first'].' '.$data['last'];
  $data['fullname_reverse'] = $data['last'].', '.$data['first'];

  return $data;
}

function data_page($dbc, $id) {
  # Page Setup
  $q = "SELECT * FROM pages WHERE id = $id";
  $result = mysqli_query($dbc,$q);
  $data = mysqli_fetch_assoc($result);

  $data['body_nohtml'] = strip_tags($data['body']);
  if($data['body'] == $data['body_nohtml']) {
    $data['body_formatted'] = '<p>'.$data['body'].'</p>';
  }else {
    $data['body_formatted'] = $data['body'];
  }

  return $data;
}

?>