<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color:#ffffff; height: 250px">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1>The Sparks Bank</h1>
                  <h3>A basic banking system for making and recording transactions between users.</h3>
                </div>
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center" style="display: flex; align-items: center; justify-content: space-evenly;">
                  <div class="act" style="background-color: #000000; height: 350px; width: 300px; margin: 45px; justify-content: center; align-items: center; display: flex; flex-direction: column; padding: 20px; border-radius:20px">
                    <img src="img/user.jpg" class="img-fluid" style="border-radius:10px">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="act" style="background-color: #000000; height: 350px; width: 300px; margin: 45px; justify-content: center; align-items: center; display: flex; flex-direction: column; padding: 20px; border-radius:20px">
                    <img src="img/transfer.jpg" class="img-fluid" style="border-radius:10px">
                    <br>
                    <a href="transfermoney.php"><button>Make a Transaction</button></a>
                  </div>
                  <div class="act" style="background-color: #000000; height: 350px; width: 300px; margin: 45px; justify-content: center; align-items: center; display: flex; flex-direction: column; padding: 20px; border-radius:20px">
                    <img src="img/history.jpg" class="img-fluid" style="border-radius:10px">
                    <br>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2" style="height: 60px">
        <p>Made by <b>Pratik Dubey</b> <br>Web Developer Intern @ TSF </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>