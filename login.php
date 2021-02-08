<?php
session_start();
$conn = new mysqli('localhost', 'root', '','cedcab');
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$_SESSION['username']=$username;
$_SESSION['password']=$password;


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $q="select*from tbl_user where email_id='$username' and password='$password'";
  // $_SESSION['name']='name';
  
  $query=mysqli_query($conn,$q);
  $check = mysqli_fetch_array($query);
  $sql = "SELECT * FROM `tbl_user` WHERE  email_id='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  
      while($row = $result->fetch_assoc()) {
          // echo  $row["user_id"]. " - Name: ". $row["name"]. " " . $row["mobile"] ;
          $_SESSION['name']=$row["name"];
          $_SESSION['number']=$row["mobile"];
          $_SESSION['user_id']=$row['user_id'];
          $_SESSION['username']=$row['email_id'];
          $_SESSION['password']=$row['password'];
          // echo $_SESSION['user_id'];
          if(($username=='admin@gmail.com')&&($password=='Password123$')){
            header('location:admindashboard.php');
          }
          else{
            if(($username==$row["email_id"])&&($password==$row["password"])){
              header('location:customerdashboard.php');
            }
            else {
              echo "<script>alert('invalid emailid or password')</script>s";
            }
          }
      }
  } else {
      echo "0 results";
  }
  
    
    
  
}
?>

<?php include 'header.php'; ?>
  <style>
    .form-group{
        width:80%;
        
        margin-bottom: 15px;
        margin-left:0px;
    }
    h2{
      color:#0d47a1;
      margin-top:40px;
      margin-bottom:40px;
      text-align:center;
    }
    .form-control{
        margin-left:0px;
    }
    
</style>

<!-- <div style="margin-right:0px;overflow-x: hidden"> -->
    
    
        <div style="height:57vh;">
            <h2 style="margin-top:60px;">Admin Login</h2>
            <center>
            <form  method="post">
            
            <div class="form-group ">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter User Name" name="username">
            </div>
            <div class="form-group ">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
            </div>
            <div class="form-group ">
            
            <input type="submit" class="btn btn-info " name="submit" value="Log In">
            </div>
            
            </form>
            </center>
        </div>

<!-- </div> -->
   
<?php include 'footer.php';?>
