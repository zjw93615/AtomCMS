<?php

function nav_main($dbc, $path) {
  $q = "SELECT * FROM pages";
  $result = mysqli_query($dbc,$q);
  while ($nav = mysqli_fetch_assoc($result)) { ?>
  <li<?php selected($path['call_parts'][0], $nav['slug'], ' class="active"'); ?>><a href="<?php echo $nav['slug']; ?>"><?php echo $nav['label']; ?></a></li>
  <?php }
}

?>