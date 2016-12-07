<?php
use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;
App::bind('config', require 'config.php');


App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
// $app = [];
// $app['config'] = require 'config.php';

// // require 'core/Router.php';
// // require 'core/Request.php';
// // require 'core/database/Connection.php';
// // require 'core/database/QueryBuilder.php';

// $app['database'] = new QueryBulider(
//   Connection::make($app['config']['database'])
// );

function view($name, $data = [])
{
  extract($data);
  return require "app/views/{$name}.view.php";
}

function redirect($path){

    header("Location: /{$path}");
}