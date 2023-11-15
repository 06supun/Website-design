<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM lecturer WHERE id=$id;";

if(mysqli_query($conn,$sql)){
    header("Location: LectList.php");
}else{
    echo"NOT Deleted" . mysqli_error($conn);
}
