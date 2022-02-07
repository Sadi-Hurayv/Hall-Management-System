<?php

include('includes/config.php');
//code for add courses

$dept_code=$_POST['dc'];
$dept_sn=$_POST['dns'];
$dept_fn=$_POST['dnf'];

if (mysqli_connect_error()) {
    die('Connect Error ('. mysqli_connect_errno() .') '
                 . mysqli_connect_error());
} else {
    $dept_check_query="SELECT course_code FROM courses WHERE course_code = '" .$dept_code."'";
    //var_dump($dept_check_query);
    $data = $mysqli->query($dept_check_query);
    //var_dump($data);
    $row_cnt=$data->num_rows;

    $message = '';
    if ($row_cnt>0) {
        $message='Department already exist!!!';
    } else {
      try {
        $add_dept_query="INSERT INTO  courses (`course_code`,`course_sn`,`course_fn`) VALUES ('$dept_code','$dept_sn','$dept_fn')";
        if ($mysqli->query($add_dept_query)) {
            $message = 'Department has been added successfully!!!';
        } else {
            echo "Error: ".$add_dept_query." ".$mysqli->error;
        }
      } catch (Exception $ex) {
        exit($ex->getMessage());
      }
    }
}

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'manage-courses.php';" .
    "</script>";
?>
