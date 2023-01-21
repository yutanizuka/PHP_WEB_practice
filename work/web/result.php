
<?php
require('../app/functions.php');


$colorFromGet = filter_input(INPUT_GET, 'color') ?? 'transparent';
setcookie('color', $colorFromGet); # setcookの前でechoやphpの開始タグの前にhtmlを書いてはいけない

include('../app/_parts/_header.php');
?>


<p><?= h($color);?>  </p>
<p><a href="index.php">Go back</a></p>


  <?php
  include('../app/_parts/_footer.php');