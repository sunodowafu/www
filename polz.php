<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
$data = fopen ( 'myCSVfile.csv', 'r' );
for($i=0; $info = fgetcsv ($data, 300, ";"); $i++){
list($name, $gender, $role) = $info;
}
  if(!empty($_SESSION['auth'])){
  	header("Location:index.php");
  exit();
  }
  if(isset($_POST['name']) && isset($_POST['password'])){
  	$notice = 'Wrong name-password.';
  	
  $data = fopen ( 'myCSVfile.csv', 'r' );
  for($i=0; $info = fgetcsv ($data, 300, ";"); $i++){
    list($name, $pass, $role) = $info;
    if($name == $_POST['name'] && $pass == md5($_POST['password'])){
      $_SESSION['auth'] = array(
        'name'   => $name,
		'gender'  =>$gender,
		'role'	  => $role,
      );     
      header('Location:index.php');
      exit();
    }
	
  }
  }
