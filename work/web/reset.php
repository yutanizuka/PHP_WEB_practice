<?php

require('../app/functions.php');

unset($_SESSION['color']);
setcookie('color','');


header('Location: http://localhost:8080/index.php'); #:の後の半角スペースは忘れずにつける