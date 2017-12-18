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

<!-- Tinymce Text Editing -->
<script src='js/tinymce/tinymce.min.js'></script>

<!-- Dropzone.js -->
<script src='js/dropzone.js'></script>

<script>
  tinymce.init({
    selector: '.editor',
    theme: 'modern',
    content_css: 'css/content.css',
    plugins:'code',
  });
</script>


<script>
  $(document).ready(function() {
    $("#console-debug").hide();
    $("#btn-debug").click(function() {
      $("#console-debug").toggle();
    });
    $(".btn-delete").on("click", function() {
      var selected = $(this).attr("id");
      var pageid = selected.split("del_").join("");

      var confirmed = confirm("Are you sure you want to delete this page?");
      if(confirmed == true) {
        $.get("ajax/pages.php?id=" + pageid);
        $("#page_" + pageid).remove();
      }

      //alert(selected);
    });
  });
  Dropzone.autoDiscover = false;
</script>