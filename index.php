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

// Define our theme
define('THEME','default');

// Add the folders where the components live
Component::addFolder('themes/'.THEME);

// Add the contents folder
Component::addFolder('contents');

// Start up the magic portal engine
Portal::init();

// Add routes
Route::add('/', function() {
  Component::create('page/index')->print();
});

Route::add('/contact', function() {
  Component::create('page/contact')->print();
}, ['get','post']);

Route::add('/about', function() {
  Component::create('page/about')->print();
});

Route::add('/privacy', function() {
  Component::create('page/privacy')->print();
});

Route::add('/imprint', function() {
  Component::create('page/imprint')->print();
});

Route::add('/user/([0-9]*)/edit', function($id) {
  Component::create('page/edit-user')->assign('id', $id)->print();
}, 'get');

// Add a 404 not found route
Route::pathNotFound(function($path) {
  header('HTTP/1.0 404 Not Found');
  Component::create('page/404')->print();
});

// Add a 405 method not allowed route
Route::methodNotAllowed(function($path, $method) {
  header('HTTP/1.0 405 Method Not Allowed');
  Component::create('page/error')->print();
});

// Run the router
Route::run(BASEPATH);

// Compose, print, render and copy together all the portal magic
Portal::compose();
