<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id=$id;";

if(mysqli_query($conn,$sql)){
    header("Location: StuList.php");
}else{
    echo"NOT Deleted". mysqli_error($conn);
}
