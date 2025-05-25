<?php 

require_once __DIR__.'/../../vendor/autoload.php';

use PHPHElp\router\Router;

require_once __DIR__ . '/routes/web.php';

Router::dispath();

?>