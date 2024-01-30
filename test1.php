<?php
include("vendor/autoload.php");

// use Libs\Database\MySQL;

// use Libs\Database\MySQL;
// use Libs\Database\UsersTable;

// $mysql = new MySQL;
// $db = $mysql->connect();

// $result = $db->query("SELECT * FROM roles");
// print_r($result->fetchAll());

// $table = new UsersTable(new MySQL);
// $id = $table->insert([
//     "name" => "Alice",
//     "email" => "alice@gmail.com",
//     "phone" => "099383443",
//     "address" => "Hlaing",
//     "password" => "password",
// ]);

// echo $id;

// use Helpers\Auth;

// $user = Auth::check();
// print_r($user);

// use Helpers\HTTP;

// HTTP::redirect('/index.php', 'http=test');


use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

 $table = new UsersTable(new MySQL);
// $user = $table->find('alice@gmail.com', 'pwd2024');
// print_r($user);
 $faker = Faker::create();
 echo "Sample Data: Starting <br>";
  for($i=0;$i<10;$i++){ 
    $user = $table->insert([
           "name" => $faker->name,
           "email" => $faker->email,
           "phone" => $faker->phoneNumber,
           "address" => $faker->address,
           "password" => "password",
    ]);
}
 echo "Sample Data: Done";


