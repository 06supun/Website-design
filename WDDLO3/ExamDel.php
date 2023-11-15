<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE From scheduled_exam WHERE id=$id;";

if(mysqli_query($conn,$sql)){
    header("Location: ListofScheduledExam.php");
}else{
    echo"NOT Deleted";
}
?>