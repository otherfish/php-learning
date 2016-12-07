<?php
// var_dump($_GET['age']);
// var_dump($app['database']);

App::get('database')->insert('users', [
  'name' => $_POST['name']
  ]);

header('Location: /');