<?php
if(isset($_POST['submit'])){
    $location=$_POST['location'];
    $distance=$_POST['distance'];
    $conn = new mysqli('localhost', 'root', '','cedcab');
    $sql="INSERT INTO `tbl_location`( `name`, `distance`, `is_available`)VALUES( '$location','$distance','available')";
    // $data=$this->conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // header('location:display.php');
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'adminnav.php';?>
    <div>
        <div class="container" style="margin-top:60px;height:60vh;">
        <center>
        <form method="post">
            <div class="form-group">
            Add Location<input type="text" class="form-control" id="location" placeholder="Enter Location" name="location">
            </div>
            <div class="form-group">
            
            Distance <input type="number" class="form-control" id="distance" placeholder="Enter Distance" name="distance">
            </div>
            
            <input type="submit" name="submit" class="btn btn-info" value="Submit"/>
        </form>
        <center>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>