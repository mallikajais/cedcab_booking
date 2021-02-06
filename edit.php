<?php
    $conn = new mysqli('localhost', 'root', '','cedcab');
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $location=$_POST['location'];
        $distance=$_POST['distance'];
        $available=$_POST['available'];
        // $id=$_POST['id'];
        $sql="UPDATE `tbl_location` SET `name`='$location',`distance`=$distance,`is_available`='$available' WHERE `id`=$id";
        $query=mysqli_query($conn,$sql);
    }
   
    $q="select*from tbl_location WHERE id=$id";
    $query=mysqli_query($conn,$q);
    while($result=mysqli_fetch_array($query)){
        
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
    <div class="signup-form" style="height:62vh;margin-top:30px;">
        <center>
        <form method="post">
            
            <div class="form-group ">
                Id<input type="text" name="id" disabled class="form-control" value="<?php echo $result['id'];?>" id="id"  required>
            </div> 
            
            <div class="form-group ">
                Location<input type="text" class="form-control"  id="location" value="<?php echo $result['name']; ?>" name='location' >
                
            </div>
            <div class="form-group ">
                Distance<input type="text" class="form-control"   value="<?php echo $result['distance']; ?>" name='distance' >
                
            </div>
            
            <div class="form-group ">
                
                Isavailable<input type="text" class="form-control" id="available" name='available' value="<?php echo $result['is_available']; ?>">
                
            </div>
            
            <div class="form-group  ">
            <input type="submit" class="btn btn-info" id="submit" name="submit" value="update">
            </div>
        </form>
        <center>
    </div>
    
<?php
    }
    
        
?>
    
    
    
    <?php include 'footer.php';?>
</body>
</html>