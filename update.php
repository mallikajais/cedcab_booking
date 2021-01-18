
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<?php include 'nav.php';?>
<?php
$conn = new mysqli('localhost', 'root', '','cedcab');
$_SESSION['username'];
$_SESSION['name'];
$_SESSION['number'];
$_SESSION['password'];
// $_SESSION['email_id'];


 ?>
<div>
    <div class="signup-form" style="height:62vh;margin-top:30px;">
        <center>
        <form method="post" action="">
            <h2 style="margin-bottom:20px;"> Update Information</h3>
            <div class="form-group ">
                <input type="text" name="name"  class="form-control" value="<?php echo $_SESSION['name']; ?>" id="name" placeholder="name.." required>
            </div> 
            
            <div class="form-group ">
                <input type="email" class="form-control" disabled id="username" value="<?php echo $_SESSION['username']; ?>" name='username' placeholder="Username">
                
            </div>
            <div class="form-group ">
                <input type="password" class="form-control"  id="password" value="<?php echo $_SESSION['password']; ?>" name='password' placeholder="password">
                
            </div>
            
            <div class="form-group ">
                
                <input type="number" class="form-control" id="number" name='number' value="<?php echo $_SESSION['number']; ?>"placeholder="Number">
                
            </div>
            
            <div class="form-group  ">
            <input type="submit" class="btn btn-info" id="submit" name="submit" value="update">
            </div>
        </form>
        <center>
    </div>
    <div class="success warning-message"></div>
    <div class="error warning-message"></div>
    
</div>
<?php include 'footer.php';?>
<?php

if (isset($_POST['submit'])) {
$password=$_POST['password'];
$name = $_POST['name'];
$mobile = $_POST['number'];
$email = $_POST['username'];
// $_SESSION['username']=$username;
$id=$_SESSION['user_id'];


$sql = "SELECT * FROM `tbl_user` WHERE  user_id=$id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo $row['user_id'];
        $q = "update  tbl_user SET  name='$name',mobile=$mobile,password='$password' WHERE user_id=$id ";
        $query=mysqli_query($conn,$q);
// header('location:display.php');
        
        $_SESSION['name']=$name;
        $_SESSION['number']=$mobile;
        $_SESSION['password']=$password;
        echo '<script>alert("successfully updated")<script>';
        }
    }    
}
?> 
</script>
</body>
</html>