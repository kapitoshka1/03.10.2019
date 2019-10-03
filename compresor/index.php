<?php

require_once 'vendor/autoload.php'; 


use classes\recount\first\First;
use classes\recount\twice\Twice;
use classes\recount\trihd\Trihd;


$fir = new First;
$fir -> run();

$twi = new Twice;
$twi -> jump();

$tri = new Trihd;
$tri -> hit();








