<?php

require('../app/functions.php');

?>

<form action="result.php" method="get">
  <label><input type="radio" name="color" value="orange"> Orange</label>
  <label><input type="radio" name="color" value="Pink"> Pink</label>
  <label><input type="radio" name="color" value="gold"> Gold</label>
</select>
  <button>Send</button>
</form>

<?php
include('../app/_parts/_header.php');
?>

  <?php
  include('../app/_parts/_footer.php');
  