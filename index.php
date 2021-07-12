<!-- 
credits:<a href="https://www.freepik.com/vectors/banner">Banner vector created by pch.vector - www.freepik.com</a>
<a href='https://www.freepik.com/vectors/infographic'>Infographic vector created by vectorjuice - www.freepik.com</a>
<a href='https://www.freepik.com/vectors/computer'>Computer vector created by pch.vector - www.freepik.com</a>
<a href='https://www.freepik.com/vectors/internet'>Internet vector created by stories - www.freepik.com</a> -->
<!-- <a href='https://www.freepik.com/vectors/abstract'>Abstract vector created by vectorjuice - www.freepik.com</a> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
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
  <div id="quote" class="quote">
    <h2><i class="fa fa-quote-left " aria-hidden="true"></i>We are VRP's central bank. We work to preserve the value of
      money by keeping inflation low and stable <i class="fa fa-quote-right" aria-hidden="true"></i></h2>
  </div>
 <div class="mid ">
    <div class="left">
      <div class="up">
        <p>Experience our range of BANKING SOLUTIONS</p>
        <hr>
      </div>
      <div class="down">
        <div class="sol"><p>Positive Pay</p></div>
        <div class="sol"><p>Mobile Banking</p></div>
        <div class="sol"><p>Internet Banking</p></div>
        <div class="sol"><p>Defense Salary Package</p></div>
        <div class="sol"><p>Home Loan</p></div>
        <div class="sol"><p>COVID-19 Product & FAQ</p></div>
      </div>
    </div>
    <div class="right">
      <div class="slider">
        <div class="slides">
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <input type="radio" name="radio-btn" id="radio5">
    
          <div class="slide first">
            <img src="img/11.jpg" width="1000px" height="800px">
          </div>
          <div class="slide">
            <img src="img/12.jpg" width="1000px" height="800px">
          </div>
          <div class="slide">
            <img src="img/13.jpg" width="1000px" height="800px">
          </div>
          <div class="slide">
            <img src="img/14.jpg" width="1000px" height="800px">
          </div>
          <div class="slide">
            <img src="img/15.jpg" width="800px" height="800px">
          </div>
    
    
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
            <div class="auto-btn5"></div>
          </div>
    
        
    
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
          <label for="radio5" class="manual-btn"></label>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div id="main" class="hea">
    <h2><span>Our Services</span> <a title="Click to Scroll Down" class="homeSprite sliderArrow slideArrow3 slide" href="#exclusiveOffers" style="display: none;">Page Down</a></h2>
    <div class="main">
      <div class="main1">
      <a href="createuser.php" class="custom-card">
        <div class="card" style="width: 25rem; display: inline-block">
          <img class="card-img-top" src="img/b.jpg" alt="Card image cap">
          <div class="card-body">
            <h1 class="card-title">Create a User</h1>
          </div>
        </div>
      </a>

      </div>
      <div class="main1">
        <a href="transfermoney.php" class="custom-card">
          <div class="card" style="width: 25rem; display: inline-block">
            <img class="card-img-top" src="img/c.jpg" alt="Card image cap">
            <div class="card-body">
              <h1 class="card-title">Transfer Money</h1>
            </div>
          </div>
        </a>
      </div>
      <div class="main1">
        <a href="transactionhistory.php" class="custom-card">
          <div class="card" style="width: 25rem; display: inline-block">
            <img class="card-img-top" src="img/a.jpg" alt="Card image cap">
            <div class="card-body">
              <h1 class="card-title">Transfer History</h1>
            </div>
          </div>
        </a>

      </div>
    </div>
  </div>
<?php
   include 'footer.php'
?>
 
  <script type="text/javascript">
    var counter = 1;
    setInterval(function () {
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if (counter > 5) {
        counter = 1;
      }
    }, 3000);
  </script>
 
</body>

</html>