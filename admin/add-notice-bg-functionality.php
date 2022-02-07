<?php

include('includes/config.php');
//code for add courses

$title=$_POST['title'];
$details=$_POST['details'];
$message="";

if (mysqli_connect_error()) {
    die('Connect Error ('. mysqli_connect_errno() .') '
                 . mysqli_connect_error());
} else {
    $message = '';
    $add_notice_query="INSERT INTO  notices (`title`,`details`) VALUES ('$title','$details')";
    if ($mysqli->query($add_notice_query)) {
        $message = 'Notice has been added successfully!!!';
    } else {
        echo "Error: ".$add_notice_query." ".$mysqli->error;
    }
}

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'manage-notices.php';" .
    "</script>";
?>
