<?php 

# Composer's autoload
require_once __DIR__ . DS . '..' . DS . 'vendor' . DS . 'autoload.php';

# Dotenv
new Jevets\Kirby\Dotenv\Dotenv(__DIR__ . DS . '..' . DS);

# Set up Kirby
$kirby = new GreenRiverGorge\Kirby();

$kirby->roots()->site = __DIR__ . DS . '..' . DS . 'site';