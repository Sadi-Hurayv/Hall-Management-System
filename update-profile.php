<?php

session_start();
include('includes/config.php');
date_default_timezone_set('Asia/Dhaka');
include('includes/checklogin.php');
check_login();

$aid=$_SESSION['id'];

    $regno=$_POST['regno'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $contactno=$_POST['contact'];
    $udate = date('d-m-Y h:i:s', time());
    $message="";

    if (mysqli_connect_error()) {
        die('Connect Error ('. mysqli_connect_errno() .') '
                     . mysqli_connect_error());
    } else {
        $profile_update_query="UPDATE  userregistration SET regNo='".$regno."',firstName='".$fname."',lastName='".$lname."',gender='".$gender."',contactNo='".$contactno."',updationDate='".$udate."' WHERE id=".$aid;

        if ($mysqli->query($profile_update_query)) {
            $message='Profile updated Succssfully';
        } else {
            echo "Error: ".$profile_update_query." ".$mysqli->error;
        }
    }

    $mysqli->close();
    echo "<script>" .
          "alert('$message');" .
          "window.location = 'my-profile.php';" .
        "</script>";
?>
