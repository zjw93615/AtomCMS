<?php

function nav_main($dbc, $pageid) {
  $q = "SELECT * FROM pages";
  $result = mysqli_query($dbc,$q);
  while ($nav = mysqli_fetch_assoc($result)) { ?>
  <li<?php if($pageid == $nav['id']) { echo ' class = "active"'; } ?>><a href="index.php?page=<?php echo $nav['id']; ?>"><?php echo $nav['label']; ?></a></li>
  <?php }
}

?>