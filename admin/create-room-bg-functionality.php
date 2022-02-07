<?php
include('includes/config.php');

$seater=$_POST['seater'];
$roomno=$_POST['rmno'];

if (mysqli_connect_error()) {
    die('Connect Error ('. mysqli_connect_errno() .') '
                 . mysqli_connect_error());
} else {
    $room_check_sql="SELECT room_no FROM rooms WHERE room_no = " .$roomno;
    $data = $mysqli->query($room_check_sql);
    $row_cnt=$data->num_rows;

    $message = '';

    if ($row_cnt>0) {
      $message = 'Room already exists';
    } else {
        $room_sql="INSERT INTO  rooms (seater,room_no) VALUES(".$seater.",".$roomno.")";
        if ($mysqli->query($room_sql)) {
            $message = 'New room is created sucessfully!!!';
        } else {
            echo "Error: ".$room_sql." ".$mysqli->error;
        }
    }
}

$mysqli->close();
echo "<script>" .
      "alert('$message');" .
      "window.location = 'manage-rooms.php';" .
    "</script>";
?>
