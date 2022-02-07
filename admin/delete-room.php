<?php

  include('includes/config.php');

  $id=intval($_GET['del']);

  if (mysqli_connect_error()) {
      die('Connect Error ('. mysqli_connect_errno() .') '
                   . mysqli_connect_error());
  } else {
      $del_room_query="DELETE from rooms WHERE id=".$id;
      $message="";

      if ($mysqli->query($del_room_query)) {
          $message='Room Deleted!!!';
      } else {
          echo "Error: ".$del_room_query." ".$mysqli->error;
      }
  }

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'manage-rooms.php';" .
    "</script>";
?>
