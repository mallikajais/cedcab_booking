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
<?php include 'adminnav.php';?>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  <script>
    $(document).ready(function() {
    $('#search').DataTable();
    } );
    
  </script>
    <div class="container-fluid mauto" >
        <div class="col-lg-12">
            <h2 class="text-info text-center ">All users</h2>
            
            <table class=" table table-striped table-hover table-border " id="search" >
            <!-- <table class="table table-hover responsive nowrap" style="width:100%" id="search">     -->
            <thead>
                    <tr class="bg-dark text-white text-center">
                    <th>Username</th>
                    <th>Name</th>
                    <th>DateofSignup(YYYY-MM-DD)</th>
                    <th>Mobile</th>
                    <th>Action</th>
                    
                    </tr>
                </thead>
            <?php
                $conn = new mysqli('localhost', 'root', '','cedcab');
                $q="select*from tbl_user";
                
                $query=mysqli_query($conn,$q);
                while($result=mysqli_fetch_array($query)){
            ?>
            <tbody>
                <tr>
                    <!-- </td>-->
                    <td><?php echo $result['email_id'];?></td> 
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['dateofsignup'];?>
                    
                    <td><?php echo $result['mobile'];?></td>
                    
                    <td><button class="btn btn-danger" > <a class="text-white" href="delete.php?id=<?php echo $result['id'];?>"> Delete</a></button></td>
                    
                </tr>
            </tbody>
            <?php 
                }
            ?>
            </table>
        </div>
    </div>
    
    
    
    
    
    

<!-- <?php include 'footer.php';?> -->
</body>
</html>