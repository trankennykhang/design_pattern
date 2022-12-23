<?php
define('PREFIX', 'Kupman');

// Load Pattern file
spl_autoload_register(function ($class_name) {
    $class_name = str_replace(PREFIX, '', $class_name);
    $class_name = str_replace('\\', '/', $class_name);
    include __DIR__ . $class_name . '.php';
});

// Load all Common function
foreach (glob('Common/*.php') as $lib) {
    include __DIR__ . '/' . $lib;
}
?>