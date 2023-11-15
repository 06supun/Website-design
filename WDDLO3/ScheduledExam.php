<!DOCTYPE html>
<html lang="en">

<?php

include 'connection.php';

if(isset($_POST['btnsubmit'])){

    $examtitle = $_POST ['txtexamtitle'];
    $subtitle = $_POST ['txtsubtitle'];
    $starttime = $_POST ['txtstarttime'];
    $endtime = $_POST ['txtendtime'];

    $sql = "INSERT INTO scheduled_exam(examtitle,subtitle,starttime,endtime) VALUES('$examtitle','$subtitle','$starttime','$endtime')";

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule Exam</title>

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
    
    <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2"><br>
        <h1 class="display-4">Schedule Exam</h1><br>
    <br>

        <form method="POST">
            <div class="row">

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Exam Title</label>
                    <input name = "txtexamtitle" type="text" class="form-control" placeholder="Exam Title">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Subtitle</label>
                    <input name = "txtsubtitle" type="text" class="form-control" placeholder="Subtitle">
                    <br>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="Starttime">Start time</label>
                    <input name = "txtstarttime" type="time" class="form-control">
                    <br>
                </div>
                <div class="form-group col-md-6">
                    <label for="Endtime">End time</label>
                    <input name = "txtendtime" type="time" class="form-control">
                   
                    </div>
                    <br>
                <div class="form-group col-md-6">
            
                <button name = "btnsubmit" type="submit" class="btn btn-primary">Shedule</button>
                <a class = "btn btn-success" href="ListofScheduledExam.php">View</a>
                <button name = "btnclear" type="reset" class="btn btn-warning">Clear</button> 
                
                </form>
                </div>
                </div>
                </div>
                </div>
                </div>
                <br>
    <!--footer-->
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
</body>
</html>
