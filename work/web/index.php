<?php
$name = 'Taro';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP Practice</title>
</head>
<body>
  <p>Hello, PHP!</p>
  <p>Today: <?= htmlspecialchars($name,ENT_QUOTES,'UTF-8');  ?></p>

</body>
</html>