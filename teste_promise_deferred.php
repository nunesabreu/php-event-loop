<?php 

require 'event-loop/vendor/autoload.php';

$deferred = new React\Promise\Deferred();
$promise = $deferred->promise();

$promise->done(function($data) {
    echo 'Terminou a promise. data: '.$data.PHP_EOL;
});

$deferred->resolve('hello world');


?>