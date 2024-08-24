<?php session_start(); ?>
<?php include "../config.php";  ?>



<?php   

if(isset($_POST['submit'])){
    $email= "";
    $password = "";
    $msg = "";


    $email = input_verify($_POST['email']);
    $password = input_verify(md5($_POST['password']));

    
    $query1 = "SELECT * FROM admin WHERE admin_email='{$email}' AND password ='{$password}' LIMIT 1";
    $ShowResult=mysqli_query($conn,$query1);

    if ($ShowResult){
        if(mysqli_num_rows($ShowResult)== 1){
            $user = mysqli_fetch_array($ShowResult);
            $_SESSION['username'] = $user['admin_name'];
            $_SESSION['user_date'] = $user['date'];

            header("Location:../Adashbord/index.php");

        }else{
            $msg = " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Sorry!</strong> Please check your email or password.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
    }

}

function input_verify($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return($data);
}






?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../users/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>Login</title>
  </head>
  <body>
    



  <div class="row" id="main">
        <div class="col-md-4"></div>
        <div class="col-md-5">
            <div class="login-form-section">
                <h1><i class='fas fa-user-check' style='font-size:38px;color:red'></i> Admin Sign In</h1>
                <?php if(!empty($msg)){echo "$msg";}?>
            <form action="login.php" method="post">

                

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>


                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit"  name="submit" class="btn btn-primary btn-lg">Submit</button>
                <a href="index.php" target="_blank" rel="noopener noreferrer">Registeration</a>

            </form>

        </div>
        </div>
        <div class="col-md-3"></div>
    </div>













    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/your-embed-code.js"></script> 
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
