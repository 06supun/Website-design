<!DOCTYPE html>
<html lang="en">

<?php

include 'connection.php';

if(isset($_POST['btnsubmit'])){

    $fullname = $_POST ['txtfullname'];
    $contact = $_POST ['txtcontact'];
    $address = $_POST ['txtaddress'];
    $gender = $_POST ['txtgender'];
    $username = $_POST ['txtusername'];
    $password = $_POST ['txtpassword'];

    $sql = "INSERT INTO lecturer(fullname,contact,address,gender,username,password) VALUES('$fullname','$contact','$address','$gender','$username','$password')";

  if (mysqli_query($conn,$sql)){
      echo "Successfully Added!";
  }else{
      echo "Error !";
  }

}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><br>
    <title>Lecture Registration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


 <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
        <h1 class="display-4">Lecture Registration</h1><br>
       
        <br>
            <form method="POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Full Name</label>
                        <input name = "txtfullname" type="text" class="form-control" placeholder="Full Name">
                    </div>
                   
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Contact</label>
                        <input name = "txtcontact" type="number" class="form-control" placeholder="Contact">
                    </div>
                </div>
                <br>
                <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <textarea name = "txtaddress" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <br>
                <div class="form-group col-md-4">
                        <label for="inputState">Gender</label>
                        <select name = "txtgender" id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Female</option>
                            <option>Male</option>
                        </select>
                    </div>
                    <br>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">User Name</label>
                        <input name = "txtusername" type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputCity">Password</label>
                    <input name = "txtpassword" type="password" class="form-control" id="inputCity">
                    </div>
                </div>
                <br>

                <button name = "btnsubmit" type="submit" class="btn btn-primary">Save</button>
                <a class = "btn btn-success" href="LectList.php">View</a>
                </form>

        </div>
</div>
</div>
<br>
        <div class="row - fluid">
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>       
</body>
</html>