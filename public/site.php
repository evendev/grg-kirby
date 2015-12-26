<?php 

# Composer's autoload
require_once __DIR__ . DS . '..' . DS . 'vendor' . DS . 'autoload.php';

# Set up Kirby
$kirby = new GreenRiverGorge\Kirby();

$kirby->roots()->site = __DIR__ . DS . '..' . DS . 'site';