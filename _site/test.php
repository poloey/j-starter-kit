<?php
require 'vendor/autoload.php';

// insert people data
Person::insert([
  "name" => "tofael",
  "email" => "tofael6@gmail.com"
]);

// read
$person = Person::all();
print_r($person);

//update 
$sumon = Person::find(2);// $person = Person::all();
// print_r($person);
$sumon->update([
  "name" => "mamun",
  "email" => "mamun@gmail.com"
]);

//delete 
Person::find(2)->delete();

