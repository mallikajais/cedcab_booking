
<?php include 'adminnav.php';?>
    
    <div class="container-fluid mauto" >
        <div class="col-lg-12">
            <h2 class="text-info text-center ">All users</h2>
            
            <table class=" table table-striped table-hover table-border " id="search" >
            
            <thead>
                    <tr class="bg-dark text-white text-center">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Name</th>
                    <th>DateofSignup(YYYY-MM-DD)</th>
                    <th>Mobile</th>
                    <th>Action</th>
                    
                    </tr>
                </thead>
            <?php
                $conn = new mysqli('localhost', 'root', '','cedcab');
                $q="SELECT*from tbl_user WHERE `status`!=1";
                
                $query=mysqli_query($conn,$q);
                while($result=mysqli_fetch_array($query)){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $result['user_id'];?></td> 
                    <td><?php echo $result['email_id'];?></td> 
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['dateofsignup'];?>
                    
                    <td><?php echo $result['mobile'];?></td>
                    
                    <td><button class="btn btn-danger" > <a class="text-white" href="delete.php?id=<?php echo $result['user_id'];?>"> Delete</a></button></td>
                    
                </tr>
            </tbody>
            <?php 
                }
            ?>
            </table>
        </div>
    </div>
    
    
    
    
    <script>
    $(document).ready(function() {
    $('#search').DataTable({});
    });
    
  </script>
    

 <?php include 'footer.php';?>
