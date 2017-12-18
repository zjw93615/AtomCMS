<nav class="navbar navbar-default">
  <!-- Collect the nav links, forms, and other content for toggling -->
  <?php if($debug == 1) { ?>
  <button id="btn-debug" class="btn btn-default"><i class="fa fa-bug fa-1x" aria-hidden="true"></i></button>
  <?php } ?>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <div class="container">
      <ul class="nav navbar-nav">
        <?php nav_main($dbc, $path); ?>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav><!-- End nav -->