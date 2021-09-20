<?php

$n = $_POST['nm'];
$p = $_POST['pw'];
$e = $_POST['em'];
$a = $_POST['ad'];
$m = $_POST['mo'];
$s = $_POST['si'];

$cnt = mysqli_connect('localhost', 'root', 'root', 'demosp21'); //just to connect to the database - username and password 

                                                                       // added below: a,m,s
$qry = "INSERT INTO `demosql`(`nm`, `pw`, `em`, `ad`, `mo`, `si`) VALUES ('$n','$p','$e','$a','$m','$s');";

mysqli_query($cnt, $qry);  //do something

mysqli_close($cnt);  //log out

header('location:result.php');

?>


 