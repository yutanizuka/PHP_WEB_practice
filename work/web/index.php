<?php

require('../app/functions.php');

// $color = filter_input(INPUT_coolie,'color') ?? 'transparent';

include('../app/_parts/_header.php');

?>

<form action="result.php" method="get">
  <label><input type="radio" name="color" value="orange"> Orange</label>
  <label><input type="radio" name="color" value="Pink"> Pink</label>
  <label><input type="radio" name="color" value="gold"> Gold</label>
</select>
  <button>Send</button>
  <a href="reset.php">[reset]</a>
</form>


  <?php
  include('../app/_parts/_footer.php');
  