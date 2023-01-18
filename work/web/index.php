<?php

require('../app/functions.php');

?>

<form action="result.php" method="get">
  <textarea type="text" name="message"></textarea>  
  <button>Send</button>
</form>

<?php
include('../app/_parts/_header.php');
?>

  <?php
  include('../app/_parts/_footer.php');
  