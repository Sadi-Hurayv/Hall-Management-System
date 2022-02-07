<?php

include('includes/config.php');
//code for add courses
session_start();
$title=$_POST['title'];
$details=$_POST['details'];
$check=$_POST['annonymous'];
if ($check) {
  $fname="Annonymous";
  $lname="Student";
  $reg="xxxxxxxx";
} else {
  $fname=$_SESSION['fname'];
  $lname=$_SESSION['lname'];
  $reg=$_SESSION['reg'];
}

$message="";

if (mysqli_connect_error()) {
    die('Connect Error ('. mysqli_connect_errno() .') '
                 . mysqli_connect_error());
} else {
    $message = '';
    //$add_accu_query="INSERT INTO  notices (`title`,`details`) VALUES ('$title','$details')";
    $add_accu_query="INSERT INTO accusations (regNo,firstName,lastName,title,description) VALUES ('$reg','$fname','$lname','$title','$details')";
    if ($mysqli->query($add_accu_query)) {
        $message = 'Accusations has been submitted successfully!!!';
    } else {
        echo "Error: ".$add_accu." ".$mysqli->error;
    }
}

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'accusation.php';" .
    "</script>";
?>
