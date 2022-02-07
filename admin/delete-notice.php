<?php

  include('includes/config.php');

  $id=intval($_GET['del']);

  if (mysqli_connect_error()) {
      die('Connect Error ('. mysqli_connect_errno() .') '
                   . mysqli_connect_error());
  } else {
      $del_notice_query="DELETE from notices WHERE id=".$id;
      $message="";

      if ($mysqli->query($del_notice_query)) {
          $message='Notice Deleted!!!';
      } else {
          echo "Error: ".$del_notice_query." ".$mysqli->error;
      }
  }

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'manage-notices.php';" .
    "</script>";
?>
