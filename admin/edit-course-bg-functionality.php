<?php
include('includes/config.php');

//code for add courses

$dept_code=$_POST['dc'];
$dept_sn=$_POST['dns'];
$dept_fn=$_POST['dnf'];
$id=$_POST['id'];
$message="";

if (mysqli_connect_error()) {
    die('Connect Error ('. mysqli_connect_errno() .') '
                 . mysqli_connect_error());
} else {
  $edit_dept_query="UPDATE courses SET course_code='".$dept_code."',course_sn='".$dept_sn."',course_fn='".$dept_fn."' WHERE id=".$id;

  if($mysqli->query($edit_dept_query)){
    $message='Department has been Updated successfully!!!';
  } else {
    echo "Error: ".$edit_dept_query." ".$mysqli->error;
  }
}

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'manage-courses.php';" .
    "</script>";
?>
