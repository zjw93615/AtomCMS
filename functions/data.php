<?php

function data_setting_value($dbc, $id) {
  $q = "select * from settings where id = '$id'";
  $r = mysqli_query($dbc, $q);

  $data = mysqli_fetch_assoc($r);
  return $data['value'];
}

function data_page($dbc, $id) {
  # Page Setup

  if(is_numeric($id)) {
    $cond = "where id = $id";
  }else {
    $cond = "where slug = '$id'";
  }

  $q = "select * from pages $cond";
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