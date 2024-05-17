<?php
require 'config/app.php';
require_once 'vendor/autoload.php';



use Codx\Comic\Bootstrap as App;

\Codx\Comic\StackTracer::trace();

$app = new App();

$app->start();