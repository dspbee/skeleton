<?php error_reporting(0);

require dirname(__DIR__) . '/vendor/autoload.php';

$app = new Dspbee\Core\Application(
    dirname(__DIR__) . '/app/',
    ['ru'],
    ['Control', 'Custom']
);
$app->run(
    [
        'Custom' => 'CustomRoute'
    ]
)->send();