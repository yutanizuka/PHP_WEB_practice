<?php

require('../app/functions.php');

?>

<form action="result.php" method="get">
  <select name="colors[]" multiple>
  <option value="orange">Orange</option>
  <option value="pink">Pink</option> 
  <option value="gold">Gold</option> 
</select>
  <button>Send</button>
</form>

<?php
include('../app/_parts/_header.php');
?>

  <?php
  include('../app/_parts/_footer.php');
  