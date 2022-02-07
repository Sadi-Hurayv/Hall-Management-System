<?php

include('includes/config.php');
date_default_timezone_set('Asia/Dhaka');

//code for registration
$roomno=$_POST['room'];
$seater=$_POST['seater'];
$stayfrom=$_POST['stayf'];
$session=$_POST['session'];
$course=$_POST['course'];
$regno=$_POST['regno'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$contactno=$_POST['contact'];
$emailid=$_POST['email'];
$emcntno=$_POST['econtact'];
$gurname=$_POST['gname'];
$gurrelation=$_POST['grelation'];
$gurcntno=$_POST['gcontact'];
$caddress=$_POST['address'];
$ccity=$_POST['city'];
$cstate=$_POST['state'];
$paddress=$_POST['paddress'];
$pcity=$_POST['pcity'];
$pstate=$_POST['pstate'];
$udate = date('d-m-Y h:i:s', time());

$message="";

if (mysqli_connect_error()) {
    die('Connect Error ('. mysqli_connect_errno() .') '
                 . mysqli_connect_error());
} else {
    $reg_sql="INSERT INTO registration (roomno,seater,stayfrom,session,course,regno,firstName,lastName,gender,contactno,emailid,egycontactno,guardianName,guardianRelation,guardianContactno,corresAddress,corresCIty,corresState,pmntAddress,pmntCity,pmnatetState,updationDate) values ('$roomno','$seater','$stayfrom','$session','$course','$regno','$fname','$lname','$gender','$contactno','$emailid','$emcntno','$gurname','$gurrelation','$gurcntno','$caddress','$ccity','$cstate','$paddress','$pcity','$pstate','$udate')";

    $usr_sql= "INSERT INTO userregistration(regNo,firstName,lastName,gender,contactNo,email,password,updationDate) values ('$regno','$fname','$lname','$gender','$contactno','$emailid','$contactno','$udate')";

    if ($mysqli->query($reg_sql) && $mysqli->query($usr_sql)) {
        $message='New Student is inserted sucessfully!!!';
    } else {
        echo "Error: ".$reg_sql." ".$mysqli->error;
    }
}
    $mysqli->close();
    echo "<script>" .
          "alert('$message');" .
          "window.location = 'manage-students.php';" .
        "</script>";
?>
