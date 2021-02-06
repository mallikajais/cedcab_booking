<?php

include 'nav.php';
?>

    <div style="height:65vh;margin-top:40px;">
    <div class="row">
  <div class="column">
    <div class="card">
    <h3>Pending Rides</h3>
      <a href="userpending.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Pending Rides</a>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <h3>Completed Rides</h3>
      <a href="complete.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Completed Rides</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <h3>All Rides</h3>
      <a href="callride.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">All Rides</a>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
    <h3>Total Expanses</h3>
      <a href="expenses.php"class="btn btn-outline-info my-2 my-sm-0" type="submit">Total Expanses</a>
    </div>
  </div>
</div>
</div>
<?php include 'footer.php';?>
</body>
</html>