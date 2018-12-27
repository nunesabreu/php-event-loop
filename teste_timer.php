<?php

require 'event-loop/vendor/autoload.php';

$loop = React\EventLoop\Factory::create();

$loop->addTimer(3, function() {
    echo 'ola pessoal';
});

$i = 0;
$loop->addPeriodicTimer(1, function() {
    global $i;
    echo 'count => '.$i.PHP_EOL;
    $i++;
});

echo 'Inicio do teste'.PHP_EOL;
$loop->run();

?>