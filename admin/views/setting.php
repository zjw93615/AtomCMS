<h1>Site Setting</h1>
<div class="row">
  <div class="col-md-12">
    <?php if(isset($message)) {echo $message;} ?>
    <?php
      $q = "select * from settings order by id ASC";
      $r = mysqli_query($dbc, $q);
      while ($opened = mysqli_fetch_assoc($r)) { ?>
      <form class="form-inline" action="index.php?page=setting&id=<?php echo $opened['id']; ?>" method="post" role="form">
        <div class="form-group">
          <label for="id">ID:</label>
          <input class="form-control" type="text" name="id" value="<?php echo $opened['id'] ?>" id="id" placeholder="id-name" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="label">Label:</label>
          <input class="form-control" type="text" name="label" value="<?php echo $opened['label'] ?>" id="label" placeholder="Label" autocomplete="off">
        </div>
        <div class="form-group">
          <label for="value">Value:</label>
          <input class="form-control" type="text" name="value" value="<?php echo $opened['value'] ?>" id="value" placeholder="Value" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-default">Save</button>
        <input type="hidden" name="submitted" value="1">
        <input type="hidden" name="openedid" value="<?php echo $opened['id']; ?>">
      </form>
    <?php } ?>
  </div>
</div>