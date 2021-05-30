<html lang="en">
<head>
 
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
</head>
 
<body>

                <?php include 'connect.php'; ?>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- Login form creation starts-->
  <section class="container-fluid">
    <!-- row and justify-content-center class is used to place the form in center -->
    <section class="row justify-content-center">
      <section class="col-7 col-sm-5 col-md-4">
        <form class="form-container" action="handlelogin.php" method="post">
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Login </h4>
          <label for="InputEmail1">Email Address</label>
           <input type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" name="loginemail" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password</label>
          <input type="password" class="form-control" id="InputPassword1" name="loginpass" placeholder="Password">
        </div>
        <button type="submit" class="btn bg-success text-white">Submit</button>
        <div class="form-footer">
          <p>Forgot Password <a href="#">Click here</a></p>
          <p> Don't have an account? <a href="signup.php">Sign Up</a></p>
          
        </div>
        </form>
      </section>
    </section>
  </section>



<!-- Login form creation ends -->
</body>
</html>