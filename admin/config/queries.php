<?php
  switch ($page) {
    case 'dashboard':
      # code...
    break;

    case 'pages':
      if(isset($_POST['submitted']) == 1) {
        $title = mysqli_real_escape_string($dbc, $_POST['title']);
        $label = mysqli_real_escape_string($dbc, $_POST['label']);
        $header = mysqli_real_escape_string($dbc, $_POST['header']);
        $body = mysqli_real_escape_string($dbc, $_POST['body']);

        if(isset($_POST['id']) != '') {
          $action = "updated";
          $q = "update pages set user = $_POST[user], slug = '$_POST[slug]', title = '$title', label = '$label', header = '$header', body = '$body' where id = $_GET[id]";
        }else {
          $action = "added";
          $q = "insert into pages (user, slug, title, label, header, body) value ($_POST[user], '$_POST[slug]', '$title', '$label', '$header', '$body')";
        }

        $r = mysqli_query($dbc, $q);
        unset($_POST['submitted']);
        if($r) {
          $message = '<p class="alert alert-success"> Page was '.$action.'!</p>';
        }else {
          $message = '<p class="alert alert-danger">Page could not be '.$action.' because: '.mysqli_error($dbc);
          $message .= '<p class="alert alert-warning">'.$q.'</p>';
        }
      }

      if(isset($_GET['id'])) {
        $opened = data_page($dbc, $_GET['id']);
      }
    break;

    case 'users':
      if(isset($_POST['submitted']) == 1) {
        $first = mysqli_real_escape_string($dbc, $_POST['first']);
        $last = mysqli_real_escape_string($dbc, $_POST['last']);

        if($_POST['password'] != '') {
          if($_POST['password'] == $_POST['passwordv']) {
            $password = " password = SHA1('$_POST[password]'),";
            $verify = 1;
          }else {
            $verify = 0;
          }
        }else {
          $verify = 0;
        }

        if(isset($_POST['id']) != '') {
          $action = "updated";
          $q = "update users set first = '$first', last = '$last', email = '$_POST[email]', $password status = '$_POST[status]' where id = $_GET[id]";
          $r = mysqli_query($dbc, $q);
        }else {
          $action = "added";
          $q = "insert into users (first, last, email, password, status) value ('$first', '$last', '$_POST[email]', SHA1('$_POST[password]'), '$_POST[status]')";
          if($verify == 1) {
            $r = mysqli_query($dbc, $q);
          }
        }
        if($r) {
          $message = '<p class="alert alert-success">User was '.$action.'!</p>';
        }else {
          $message = '<p class="alert alert-danger">User could not be '.$action.' because: '.mysqli_error($dbc);
          if($verify == 0) {
            $message .= '<p class="alert alert-danger">Passwords fields empty and/or do not match</p>';
          }
          $message .= '<p class="alert alert-warning">Query: '.$q.'</p>';
        }
      }

      if(isset($_GET['id'])) {
        $opened = data_user($dbc, $_GET['id']);
      }
    break;

    case 'setting':
      if(isset($_POST['submitted']) == 1) {
        $label = mysqli_real_escape_string($dbc, $_POST['label']);
        $value = mysqli_real_escape_string($dbc, $_POST['value']);


        if(isset($_POST['id']) != '') {
          $action = "updated";
          $q = "update settings set id = '$_POST[id]', label = '$label', value = '$value' where id = '$_POST[openedid]'";
          $r = mysqli_query($dbc, $q);
        }

        if($r) {
          $message = '<p class="alert alert-success">Settings was '.$action.'!</p>';
        }else {
          $message = '<p class="alert alert-danger">Setting could not be '.$action.' because: '.mysqli_error($dbc);
          $message .= '<p class="alert alert-warning">Query: '.$q.'</p>';
        }
      }
    break;

    default:
      # code...
    break;
  }


