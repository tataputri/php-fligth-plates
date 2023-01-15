<?php

use xy2z\LiteConfig\LiteConfig as Config;
use duncan3dc\Laravel\Blade;
use duncan3dc\Laravel\BladeInstance;


date_default_timezone_set('Asia/Jakarta');

if (PHP_SAPI == 'cli') {
  define('DOCUMENT_ROOT', __DIR__);
}


Config::loadDir('config/', true);


function config($key)
{
  return Config::get($key);
}

function view($template, $data = [], $echo = true)
{

  $templates = new League\Plates\Engine(__DIR__ . '/views/', 'tpl');
  $templates->loadExtension(new League\Plates\Extension\Asset(__DIR__ . '/assets/', true));

  // Render a template
  echo $templates->render($template, $data);
}

function ddd()
{
  // If WP_ENV is defined (e.g Bedrock setup), do only for development.


  echo implode('', array_map(function ($arg) {
    ob_start();
    echo '<pre>';
    var_dump($arg);
    echo '</pre>';
    return ob_get_clean();
  }, func_get_args()));

  // Handle if function is used in a wordpress context.
  if (function_exists('wp_die')) {
    // WP error page default is a bit narrow for smal windows. 
    echo '<style type=text/css>body#error-page { max-width:75% }</style>';
    die();
  }

  die();
}
