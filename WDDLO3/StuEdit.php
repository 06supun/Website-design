<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE id=$id";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        $fullname = $row['fullname'];
        $contact = $row['contact'];
        $address = $row['address'];
        $gender = $row['gender'];
        $username = $row['username'];
        $password = $row['password'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2"><br>
        <h1 class="display-4">Student Edit</h1><br>

<form method="POST">

<div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Full Name</label>
                        <input name = "txtfullname" value="<?php echo $fullname ?>" type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Contact</label>
                        <input name = "txtcontact" value="<?php echo $contact ?>" type="number" class="form-control" placeholder="Contact">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <textarea name = "txtaddress" value="" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $address ?></textarea>
                    </div>
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="inputState">Gender</label>
                        <input name = "txtgender" value="<?php echo $gender?>" type="text" class="form-control" placeholder="Gender">
                    </div>
                    <br>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">User Name</label>
                        <input name = "txtusername" value="<?php echo $username ?>" type="text" class="form-control" placeholder="User Name">
                        </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Password</label>
                        <input name = "txtpassword" value="<?php echo $password ?>" type="pasword" class="form-control" placeholder="Password">
                    </div>
                    </div>
                    <br>
                    <button name = "btnsave" type="submit" value="Save" class="btn btn-primary">Save</button>
                    <button name = "" type="reset" value="Clear" class="btn btn-warning">Clear</button>
                    <a class = "btn btn-success" href="StuList.php">View</a>
                    </form>


<?php

if(isset($_POST['btnsave'])){
    $fullname = $_POST['txtfullname'];
    $contact = $_POST['txtcontact'];
    $address = $_POST['txtaddress'];
    $gender = $_POST['txtgender'];
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];

    $sqlUpdate = "UPDATE student SET fullname = '$fullname',contact='$contact',address='$address',username='$username',password='$password' WHERE id = $id;";
    if(mysqli_query($conn,$sqlUpdate)){
        header("Location: StuList.php");
    }else{
        echo "Error";
    }
}

?>
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