<nav class="navbar navbar-default">
  <!-- Collect the nav links, forms, and other content for toggling -->
    <ul class="nav navbar-nav">

      <li><a href="?page=dashboard">Dashboard</a></li>
      <li><a href="?page=pages">Pages</a></li>
      <li><a href="?page=users">Users</a></li>
      <li><a href="?page=setting">Setting</a></li>
    </ul>
    <div class="pull-right">
      <ul class="nav navbar-nav">
        <li>
          <?php if($debug == 1) { ?>
            <button type="button" id="btn-debug" class="btn btn-default navbar-btn"><i class="fa fa-bug fa-1x" aria-hidden="true"></i></button>
          <?php } ?>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user['fullname']; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Logout</a>
            </li>
          </ul>
      </ul>
    </div>
</nav><!-- End nav -->