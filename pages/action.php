<?php

require_once '../vendor/autoload.php';

use App\classes\MinToMax;
use App\classes\MaxToMin;

if (isset($_POST['btn']))
{
    $minToMax= new MinToMax($_POST);
    $result=$minToMax->index();
    include 'minToMax.php';
} elseif(isset($_POST['btn2']))
{
    $maxToMin= new MaxToMin($_POST);
    $result=$maxToMin->index();
    include 'maxToMin.php';
}
