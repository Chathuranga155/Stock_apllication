<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/bid.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

</head>

<body>

  <?php
  include "../../../config.php";
 

  if (isset($_POST['submit'])) {

    $sname =  "";
    $bctime = "";
    $bstime = "";
    $closingtime = "";
    $price = "";
    $status = "";


    $sname = input_verify($_POST['sname']);
    $bctime = input_verify($_POST['bctime']);
    $bstime = input_verify($_POST['bstime']);
    $status = input_verify($_POST['status']);
    $price = input_verify($_POST['price']);
    $closingtime = input_verify($_POST['close_time']);

    // $status = input_verify($_POST['status']);
    // $status = input_verify($_POST['status']);
    // $status = input_verify($_POST['status']);

    $query = "INSERT INTO stock (st_name, description, Bidding_closing_time, bidding_start_time, price, status, closing_date) VALUES('$sname', '', '$bctime', '$bstime', '$price', '$status', '$closingtime')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
      echo "<div class='alert alert-warning' role='alert'>
              Error! Please check.
            </div>";
    } else {
      echo "<div class='alert alert-light' role='alert'>
              Sucsess! .
            </div>";
    }
  }

  function input_verify($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }

  // table 








  ?>

  <div class="container-fluid">

    <div class="alert alert-info alert-dismissible fade show" role="alert">

      <div class="row">
        <div class="col-md-1">
          <i class="fa fa-exclamation-circle fa-4x" aria-hidden="true"></i>
        </div>
        <div class="col-sm-10">
          <p>Review a list of all bids you have created using the online auction script. If you want to add a new bid, click on the "+ Add bid" button. Click on the pencil icon of each bid entry to update the bid.</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
    </div>


  </div>



  <div class="card" id="card">
    <div class="card-body">
      <p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <i class="fa fa-plus" aria-hidden="true"></i>
          Add bid
        </a>

      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body" id="card-body">


          <!-- form  -->
          <form action="stock.php" method="post">
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">Stock name</label>
              <input class="form-control" type="text" name="sname" placeholder="Stock name" aria-label="default input example">
            </div>

            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">Bidding closing time</label>
              <input class="form-control" id="settime1" type="time" name="bctime" placeholder="Bidding closing time" aria-label="default input example">
            </div>

            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">Bidding Start time</label>
              <input class="form-control" id="settime" type="time" name="bstime" placeholder="Bidding closing time" aria-label="default input example">
            </div>

            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">Price</label>
              <input class="form-control" id="settime" type="text" name="price" placeholder="price" aria-label="default input example">
            </div>

            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">Closing Time</label>
              <input class="form-control" id="settime" type="datetime" name="close_time" placeholder="Bidding closing time" aria-label="default input example">
            </div>



           

            <div class="mb-3">
              <select class="form-select" aria-label="Default select example" name="status">
                <option selected>Status</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                

              </select>
            </div>


            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Save</button>
            <button type="resert" class="btn btn-primary" >Cancel</button>
          </form>

        </div>
      </div>

      
        </div>
      </div>



      <br></br>



 
<!-- table  -->




<div class="table-responsive-sm">
  <table class="table table-success table-striped align-middle table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">status</th>
        <th scope="col">Bidding closing time</th>
        <th scope="col">Bidding_start_time</th>
       
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
            <td><?php echo $data['bidding_start_time']; ?> </td>
          


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

    <script>
      document.getElementById("settime").value = "13:24:00";
      document.getElementById("settime1").value = "07:05:00";
    </script>
</body>

</html>