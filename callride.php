

<?php include 'nav.php';?>
    
    <div class="container-fluid mauto"  >
        <div class="col-lg-12 text-center">
            <h2 class="text-info text-center ">All Rides</h2>
            
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
                    <th>Status</th>
                   
                    
                    </tr>
                </thead>
            <?php
                
                $conn = new mysqli('localhost', 'root', '','cedcab');
                $q="select*from tbl_ride;";
                $query=mysqli_query($conn,$q);
                while($result=mysqli_fetch_array($query)){
            ?>
            <tbody>
                <tr>
                    <td><?php echo $result['ride_id'];?></td>
                    <td><?php echo $result["from"];?></td> 
                    <td><?php echo $result["to"];?></td>
                    <td><?php echo $result['cabtype'];?></td>
                    <td><?php echo $result['ride_date'];?></td>
                    <td><?php echo $result['total_distance'];?>
                    <td><?php echo $result['luggage'];?></td>
                    <td><?php echo $result['total_fare'];?></td>
                    <td><?php echo $result['status'];?></td>
                    
                </tr>
            </tbody>
            <?php 
                }
            ?>
            </table>
        </div>
    </div>
    
    
    
    
    

<?php include 'footer.php';?>
</body>
</html>