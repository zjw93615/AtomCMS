<?php
// Javascript:
?>

<!-- jQuery -->
<script src="//code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- jQuery UI -->
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Font Awesome -->
<!--<script src="https://use.fontawesome.com/abf0494f41.js"></script>-->
<script>
  $(document).ready(function() {
    $("#console-debug").hide();
    $("#btn-debug").click(function() {
      $("#console-debug").toggle();
    });
  });
</script>