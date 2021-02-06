<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>cedcab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky">
        <a class="navbar-brand logo-margin" href="javascript:void(0)"><a class="navbar-brand" href="#" style="color: #159cad;font-size: 40px;">C<span style="color:white;">ed</span>C<span style="color:white;">ab</span>
            <i class="fa fa-taxi" aria-hidden="true" style="font-size:40px;"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="customerdashboard.php" id="home-admin">Home</a>
                </li>
               
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="changepass.php" id="change">Change Password</a>
                        <a class="dropdown-item" href="update.php" id="editprofile">Edit Profile</a>
                    </div>
                </li>
                
                    
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <div class="greetings text-white">Hi <?php echo $_SESSION['name'];?></div>
            <li class="nav-item"><a href="cab.php"class="btn btn-info " style="margin-right:10px;" type="submit">Book Now</a></li>
                <a href="login.php"class="btn btn-info my-2 my-sm-0" name='submit' type="submit">Logout</a>
            </form>
        </div>
    </nav>
</body>
</html>