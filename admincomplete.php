
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>
<body>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"> 
   <script>
    $(document).ready(function() {
    $('#search').DataTable();
    } );
    </script> 
    <?php include 'adminnav.php';?>
    <div>
    <div class="container-fluid mauto text-center" style="height:60vh;">
        <div class="col-lg-12">
            <h2 class="text-info text-center ">Completed Rides</h2>
            
            <table class=" table table-striped table-hover table-border " id="search" >
            <!-- <table class="table table-hover responsive nowrap" style="width:100%" id="search">     -->
            <thead>
                    <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>From</th>
                    <th>To</th>
                    <th>CabType</th>
                    <th>RideDate(YYYY-MM-DD)</th>
                    <th>Total Distance</th>
                    <th>Luggage</th>
                    <th>TotalFare</th>
                    <th>Action</th>
                    
                    
                    </tr>
                </thead>
            <?php
                $conn = new mysqli('localhost', 'root', '','cedcab');
                $q="select*from tbl_ride WHERE status=2";
                $query=mysqli_query($conn,$q);
                while($result=mysqli_fetch_array($query)){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $result['ride_id'];?></td> 
                    <td><?php echo $result['from'];?></td> 
                    <td><?php echo $result['to'];?></td>
                    <td><?php echo $result['cabtype'];?></td>
                    <td><?php echo $result['ride_date'];?></td>
                    <td><?php echo $result['total_distance'];?>
                    <td><?php echo $result['luggage'];?></td>
                    <td><?php echo $result['total_fare'];?></td>
                   
                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal" > <a class="text-white" href="#?id=<?php echo $result['ride_id'];?>"> Invoice</a></button></td>
                    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
 
        <div class="modal-header">
          <h4 class="modal-title">Invoice</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
          From   :-   <label><?php echo $result['from'];?></label><br>
          To   :-   <label><?php echo $result['to'];?></label><br>
          CabType   :-   <label><?php echo $result['cabtype'];?></label><br>
          TotalDistance   :-   <label><?php echo $result['total_distance'];?></label><br>
          Luggage   :-   <label><?php echo $result['luggage'];?></label><br>
          TotalFare   :-   <label><?php echo $result['total_fare'];?></label><br>
        </div>
        
       
        <div class="modal-footer">
          <button type="button" class="btn btn-info" onclick="window.print()" data-dismiss="modal">Print</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
                </tr>
            </tbody>
            <?php 
                }
            ?>
            </table>
        </div>
    </div>
    </div>
     <?php include 'footer.php';?> 
</body>
</html>