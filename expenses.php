<? include 'nav.php';?>
<div class="container-fluid mauto" style="height:47vh;margin-top:9%;"  >
        <div class="col-lg-12 text-center">
            <h2 class="text-info text-center ">Total Expenses</h2>
            <table class=" table table-striped table-hover table-border " style="margin:auto;width:50%" >
            <thead>
                    <tr class="bg-dark text-white text-center">
                    <th>Id</th>
                    <th>Total Expenses</th>
                    </tr>
                </thead>
            <?php
                $conn = new mysqli('localhost', 'root', '','cedcab');
                $q="SELECT `ride_id`,`status`, `total_fare`,sum(total_fare) as 'totalexpenses' from tbl_ride where status=2";
            
                $query=mysqli_query($conn,$q);
                while($result=mysqli_fetch_array($query)){
            ?>
            <tbody>
                <tr>
                    <td><?php echo 1 ;?></td> 
                    <td><?php echo $result['totalexpenses'];?></td>
                </tr>
                
            </tbody>
            <?php 
                }
            ?>
            </table>
        </div>
    </div>
<? include 'footer.php';?>
