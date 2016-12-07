<?php

namespace App\Controllers;

class PagesController

{
  public function home() 
  {

 // require 'views/index.view.php';
    return view('index');
  }

  public function about()
  {
 // require 'views/about.view.php';
    $company = 'Laracasts';
    return view('about', ['company' => $company]);
  }

  public function contact()
  {
     // require 'views/contact.view.php';
    return view('contact');
  }
}