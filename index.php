<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Autoload files using composer
require_once __DIR__ . '/vendor/autoload.php';

// Use this namespace
use Steampixel\Route;
use Steampixel\Component;
use Steampixel\Portal;

// Define a global basepath
define('BASEPATH','/');

// Add the folders where the components live
Component::addFolder('components/custom');
Component::addFolder('components/default');

// Start up the magic portal engine
Portal::init();

// Add routes
Route::add('/', function() {
  Component::create('pages/index')->print();
});

Route::add('/contact', function() {
  Component::create('pages/contact')->print();
}, ['get','post']);

Route::add('/about', function() {
  Component::create('pages/about')->print();
});

Route::add('/privacy', function() {
  Component::create('pages/privacy')->print();
});

Route::add('/imprint', function() {
  Component::create('pages/imprint')->print();
});

// Add a 404 not found route
Route::pathNotFound(function($path) {
  header('HTTP/1.0 404 Not Found');
  Component::create('pages/404')->print();
});

// Add a 405 method not allowed route
Route::methodNotAllowed(function($path, $method) {
  header('HTTP/1.0 405 Method Not Allowed');
  Component::create('pages/error')->print();
});

// Run the router
Route::run(BASEPATH);

// Compose, print, render and copy together all the portal magic
Portal::compose();
