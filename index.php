<?php

require_once 'Class/Interval.php';

use Class\Interval;

$interval = new Interval;
$interval->countInterval([[0, 3], [6, 10]]);
echo $interval->getInterval() . "\n";

$interval->countInterval([[0, 5], [3, 10]]);
echo $interval->getInterval() . "\n";

$interval->countInterval([[7, 8], [3, 6], [2, 4]]);
echo $interval->getInterval() . "\n";

?>
<!DOCTYPE html>

<html>

<head>
    <title> Globalis test</title>
</head>

</html>