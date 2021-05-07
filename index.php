<html>
 <head>
  <title>PHP Test!!!</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?>
 </body>
</html>

<?php

require_once __DIR__ . '/vendor/autoload.php';

use Hexlet\Php\Runner;

print_r(Runner\run());
