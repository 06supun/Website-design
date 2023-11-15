<?php

include 'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM scheduled_exam WHERE id=$id";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        $examtitle = $row ['examtitle'];
        $subtitle = $row ['subtitle'];
        $starttime = $row ['starttime'];
        $endtime = $row ['endtime'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Edit</title>
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
<form method="POST">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2"><br>
        <h1 class="display-4">Exam Edit</h1><br>

<form method="POST">

<div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Exam Tilte</label>
                        <input name = "txtexamtitle" value="<?php echo $examtitle ?>" type="text" class="form-control" placeholder="Exam Tilte">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Sub Title</label>
                        <input name = "txtsubtitle" value="<?php echo $subtitle ?>" type="text" class="form-control" placeholder="Sub title">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Start time</label>
                        <input name = "txtstarttime" value="<?php echo $starttime ?>" type="time" class="form-control" placeholder="Start time">
                    </div>
                
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">End time</label>
                        <input name = "txtendtime" value="<?php echo $endtime ?>" type="time" class="form-control" placeholder="End time">
                    </div>
                    <br>
                    
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-8 offset-md-2">
                    <br>
                    <button name = "btnsave" type="submit" value="Save" class="btn btn-primary">Save</button>
                    <button name = "" type="reset" value="Clear" class="btn btn-warning">Clear</button>
                    <a class = "btn btn-success" href="StuList.php">View</a>
                    </form>


<?php

if(isset($_POST['btnsave'])){
    $examtitle = $_POST ['txtexamtitle'];
    $subtitle = $_POST ['txtsubtitle'];
    $starttime = $_POST ['txtstarttime'];
    $endtime = $_POST ['txtendtime'];

    $sqlUpdate = "UPDATE scheduled_exam SET examtitle = '$examtitle', subtitle = '$subtitle', starttime = '$starttime', endtime = '$endtime' WHERE id = $id;";
    if(mysqli_query($conn,$sqlUpdate)){
        header("Location: ListofScheduledExam.php");
    }else{
        echo "Error";
    }
}


?>
</div>
</div>
</div>
<br>
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
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>