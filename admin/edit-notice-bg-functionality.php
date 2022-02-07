<?php
include('includes/config.php');

//code for add courses

$title=$_POST['title'];
$details=$_POST['details'];
$id=$_POST['id'];
$message="";

if (mysqli_connect_error()) {
    die('Connect Error ('. mysqli_connect_errno() .') '
                 . mysqli_connect_error());
} else {
  $edit_notice_query="UPDATE notices SET title='".$title."',details='".$details."' WHERE id=".$id;

  if($mysqli->query($edit_notice_query)){
    $message='Notice has been Updated successfully!!!';
  } else {
    echo "Error: ".$edit_notice_query." ".$mysqli->error;
  }
}

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'manage-notices.php';" .
    "</script>";
?>
