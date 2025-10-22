<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $pass=$_POST['Password'];
    $sql="INSERT INTO `crud1` (`Name`, `Email`, `Password`) VALUES ('$name', '$email', '$pass')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header('location:display.php');
    }
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 ">
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputname1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputname1" name="Name" aria-describedby="nameHelp">
    <div id="nameHelp" class="form-text">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="Email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

