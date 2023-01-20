<?php

require('../app/functions.php');

?>

<form action="result.php" method="get">
  <label><input type="checkbox" name="colors[]" value="orange"> Orange</label>
  <label><input type="checkbox" name="colors[]" value="Pink"> Pink</label>
  <label><input type="checkbox" name="colors[]" value="gold"> Gold</label>
</select>
  <button>Send</button>
</form>

<?php
include('../app/_parts/_header.php');
?>

  <?php
  include('../app/_parts/_footer.php');
  