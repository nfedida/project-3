<?php

//use post suberglobal to get the user input values and store as vars. the superglobal must match the method set in the form this data came from. method = "post" uses $_POST, while method = "get" uses $_GET

//print_r( $_POST );

$a = $_POST;

$t = $_FILES['pic']['tmp_name'];
$i = 'img/'.$_FILES['pic']['name'];
move_uploaded_file( $t, $i );

$a['img'] = $i;

//get the data from the json file
$d = file_get_contents( 'data.json' );

//the data comes in as a js object, so convert the data to a php array so it can me edited
$d = json_decode( $d, true );

//add the assoc array $a to our data, here we add it to the beginning of the array using unshift, but we can also use push to add to the end
array_unshift( $d, $a );

//after editing the data, convert it back to a js object
$d = json_encode( $d );

//save the edited data back into the json file
file_put_contents( 'data.json', $d );

//since this page doen't contain any html, redirect the user to a new page
header( 'location:../admin.php' );
?>