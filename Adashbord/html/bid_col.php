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
  include "../../config.php";

  if (isset($_POST['submit'])) {

    $bname =  "";
    $client = "";
    $price = "";
    $status = "";


    $bname = input_verify($_POST['bname']);
    $client = input_verify($_POST['client']);
    $price = input_verify($_POST['price']);
    $status = input_verify($_POST['status']);

    // $status = input_verify($_POST['status']);
    // $status = input_verify($_POST['status']);
    // $status = input_verify($_POST['status']);

    $query = "INSERT INTO bids (bid_name, status, bid_price, client, created) VALUES('$bname', '$status', '$price','$client', NOW())";
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
          <form action="bid_col.php" method="post">
            <div class="mb-3">
              <label for="exampleInputtext1" class="form-label">Bid name</label>
              <input class="form-control" type="text" name="bname" placeholder="Default input" aria-label="default input example">
            </div>
            <div class="mb-3">
              <select class="form-select" aria-label="Default select example" name="client">
                <option selected>Client</option>
                <option value="1">One</option>
                <option value="2">Two</option>

              </select>
            </div>

            <label for="exampleInputtext1" class="form-label">Price</label>
            <div class="input-group mb-3">
              <span class="input-group-text">$</span>
              <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollar)">
              <span class="input-group-text">.00</span>
            </div>

            <div class="mb-3">
              <select class="form-select" aria-label="Default select example" name="status">
                <option selected>Status</option>
                <option value="Recieved">Recieved</option>
                <option value="Reject">Reject</option>
                <option value="Won">Won</option>

              </select>
            </div>


            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>

        </div>
      </div>

      
        </div>
      </div>



      <br></br>



  <!-- table  -->




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