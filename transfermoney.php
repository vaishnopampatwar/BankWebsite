<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <style type="text/css">
      button{
        background-color :#000 ; 
        color:#fff
        
      }
      button:hover{
        background-color:transparent;
        color: #000;
      } 
      .row{
        padding-bottom: 50px;
      }
    </style>
</head>
<body>
    <?php
        include 'config.php';
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
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
  <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($rows=mysqli_fetch_assoc($result)){
                            ?>
                                <tr style="color : black;">
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name']?></td>
                                    <td class="py-2"><?php echo $rows['email']?></td>
                                    <td class="py-2"><?php echo $rows['balance']?></td>
                                    <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> 
                                    <button type="button" class="btn" >Transact</button></a></td> 
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
<?php
   include 'footer.php'
?>

</body>
</html>