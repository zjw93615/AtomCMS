<?php
  #Start Session
  session_start();

  #Database Connection
  include('../config/connection.php');
  if($_POST) {
    $q = "select * from users where email = '$_POST[email]' and password = SHA1('$_POST[password]')";
    $r = mysqli_query($dbc, $q);

    if(mysqli_num_rows($r) == 1) {
      $_SESSION['username'] = $_POST['email'];
      header('Location: index.php');
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin Login</title>

  <?php
    include('config/css.php');
    include('config/js.php');
  ?>

</head>
<body>
  <div id="wrap">
    <?php //include(D_TEMPLATE.'/navigation.php'); // Main Navigation  ?>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-info">
            <div class="panel-heading"><strong>Login</strong></div> <!-- End panel-heading -->
            <div class="panel-body">
              <form action="login.php" method="post" role="form">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <!--
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
                -->
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div> <!-- End panel body -->
          </div> <!-- End panel -->
        </div> <!-- End col -->
      </div> <!-- End row -->
    </div> <!-- End container -->
  </div>
  <?php //include(D_TEMPLATE.'/footer.php'); // Page Footer ?>
  <?php //if($debug == 1) { include('widgets/debug.php'); } ?>
</html>