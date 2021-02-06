
    <?php include 'nav.php';
    $conn = new mysqli('localhost', 'root', '','cedcab');
    if(isset($_POST['submit'])){
        $name=$_SESSION['name'];
        $new=$_POST['new'];
        $sql="UPDATE `tbl_user` SET `password`='$new' WHERE `name`='$name'";
        $query=mysqli_query($conn,$sql);
    }
    
    ?>
    <div>
        <div class="container" style="margin-top:60px;height:60vh;">
        <center>
        <form method="post">
            <div class="form-group">
            Username <input type="text" class="form-control" disabled id="email" value="<?php echo $_SESSION['name'];?>" name="name">
            </div>
            <div class="form-group">
            
            old Password <input type="password" class="form-control" disabled id="old" value="<?php echo $_SESSION['password'];?>" name="old">
            </div>
            <div class="form-group ">
            
            New password <input class="form-control" type="password" id="new" name="new" placeholder="Enter new password">
            
            </div>
            <input type="submit" name="submit" class="btn btn-info" value="Submit"/>
        </form>
        <center>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>