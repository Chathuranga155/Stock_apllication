<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
  </head>
  <body>

<body>
  <?php
  include "../../../config.php";

?>



 
<!-- table  -->




<div class="table-responsive-sm">
  <table class="table table-success table-striped align-middle table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">status</th>
        <th scope="col">Bidding closing time</th>
       
      </tr>
    </thead>
    <tbody>
      <?php
      $query1 = "SELECT st_name, status, Bidding_closing_time, bidding_start_time FROM stock";
      $Table_result = $conn->query($query1);

      if ($Table_result->num_rows > 0) {
        $id = 1;
        while ($data = $Table_result->fetch_assoc()) {
      ?>
          <tr>
            <td><?php echo $id; ?> </td>
            <td><?php echo $data['st_name']; ?> </td>
            <td><?php echo $data['status']; ?> </td>
            <td><?php echo $data['Bidding_closing_time']; ?> </td>
          


          <tr>
          <?php
          $id++;
        }
      } else { ?>
          <tr>
            <td colspan="8">No data found</td>
          </tr>

        <?php } ?>

    </tbody>
  </table>
</div>

<!-- end -->


  <!-- end -->























  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>