<?php

require '../vendor/autoload.php';
require '../config.php';

$app = new \Slim\Slim([
    'templates.path' => TEMPLATES_DIR_PATH,
    'view' => new \Slim\Views\Twig()
]);

\Tinitter\Route::registration($app);

\Base\DB::registerIlluminate($db_settings);

$app->run();
