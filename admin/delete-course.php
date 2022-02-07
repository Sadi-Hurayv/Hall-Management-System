<?php

  include('includes/config.php');

  $id=intval($_GET['del']);

  if (mysqli_connect_error()) {
      die('Connect Error ('. mysqli_connect_errno() .') '
                   . mysqli_connect_error());
  } else {
      $del_dept_query="DELETE from courses WHERE id=".$id;
      $message="";

      if ($mysqli->query($del_dept_query)) {
          $message='Department Deleted!!!';
      } else {
          echo "Error: ".$del_dept_query." ".$mysqli->error;
      }
  }

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'manage-courses.php';" .
    "</script>";
?>
