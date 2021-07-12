<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/createuser.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body >
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $balance=$_POST['balance'];
        $sql="insert into users(name,email,balance) values ('{$name}','{$email}','{$balance}')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script> alert ('HUrray! Useer Created');
                            window.location='transfermoney.php';
                            </script>";
        }
    }
?>
<header>
    <div class="head">
      <div class="icon">
        <i class="fa fa-gg"></i>
        <h1>Bank of VRP</h1>
      </div>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search Here" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
    </div>
  </header>
  <?php
  include 'navbar.php'
  ?>
  <br>
  <div class="background">
    <div class="container">
      <div class="screen">
        <div class="screen-header" >
        <div class="screen-header-item">
            <img class="img1" src="img/cc.jpg" style="border: none; border-radius: 50%; width: 200px; height: 200px;">
            <p>Create New User </p>
          </div>          
        </div>
        <div class="screen-body">     
          <div class="screen-body-item" >
            <form class="app-form" method="post" >
              <div class="app-form-group">
                <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
              </div>
              <br>
              <div class="app-form-group button">
                <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
   include 'footer.php'
?>
</body>
</html>