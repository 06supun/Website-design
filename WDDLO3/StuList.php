<?php

include 'connection.php';

$sql = "SELECT * FROM student";

$result = mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
}
</style>

</head>
<body>
<div class = "container">
        <div class = "col-md-8"><br><br>
    <h1>Student List </h1>
        </div> 
    </div> 
    <div class = "container">
        <div class = "col-md-12"><br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Full name</th>
            <th scope="col">Contact</th>
            <th scope="col">Address</th>
            <th scope="col">Gender</th>
            <th scope="col">User Name</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
          </tr>
    
    <?php
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['fullname']."</td>";
            echo "<td>".$row['contact']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['gender']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>
            <a href=StuDel.php?id=".$row['id'].">Delete</a>
            <a href=StuEdit.php?id=".$row['id'].">Edit</a></td>";
            echo"</tr>";
        }
    }else {
        echo "No records";
    }
        
    ?>
</tr>
</table>
<br>
<a href ="StudentRegistration.php">New+</a>
</div>
</div>
</div>
<br>
<!--Footer--> 
<div class="footer">
        <div class = "col-md-12">
            <footer class="text-center text-white" style="background-color: #f1f1f1;">
                <!-- Grid container -->
                <div class="container pt-4">
                  <!-- Section: Social media -->
                  <section class="mb-4">
                    <!-- Facebook -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-dark m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
              
                    <!-- Twitter -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-dark m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-twitter"></i
                    ></a>
              
                    <!-- Google -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-dark m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-google"></i
                    ></a>
              
                    <!-- Instagram -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-dark m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-instagram"></i
                    ></a>
              
                    <!-- Linkedin -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-dark m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-linkedin"></i
                    ></a>
                    <!-- Github -->
                    <a
                      class="btn btn-link btn-floating btn-lg text-dark m-1"
                      href="#!"
                      role="button"
                      data-mdb-ripple-color="dark"
                      ><i class="fab fa-github"></i
                    ></a>
                  </section>
                  <!-- Section: Social media -->
                </div>
                <!-- Grid container -->
              
                <!-- Copyright -->
                <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2020 Copyright:
                  <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
              </footer>
        </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
