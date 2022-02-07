<?php
  include('includes/config.php');

  $seater=$_POST['seater'];
  $id=$_POST['id'];
  $message="";

  if (mysqli_connect_error()) {
      die('Connect Error ('. mysqli_connect_errno() .') '
                   . mysqli_connect_error());
  } else {
  $update_room_query="UPDATE rooms SET seater=".$seater." WHERE id=".$id;

  if ($mysqli->query($update_room_query)) {
    $message='Room Details has been Updated successfully';
  } else {
    echo "Error: ".$update_room_query." ".$mysqli->error;
  }
}

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'manage-rooms.php';" .
    "</script>";

?>
