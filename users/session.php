<?php 

if(isset($_POST['submit'])){
    $email= "";
    $password = "";
    $msg = "";


    $email = input_verify($_POST['email']);
    $password = input_verify(md5($_POST['password']));

    
    $query1 = "SELECT * FROM users WHERE email='{$email}' AND password ='{$password}' LIMIT 1";
    $ShowResult=mysqli_query($conn,$query1);

    if ($ShowResult){
        if(mysqli_num_rows($ShowResult)== 1){
            $user = mysqli_fetch_array($ShowResult);
            $_SESSION['username'] = $user['name'];
            $_SESSION['user_date'] = $user['date'];
            $_SESSION['email'] = $user['email'];
    
            header("Location:../dashbord/index.php");
    
        }else{
            $msg = " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Sorry!</strong> Please check your email or password.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
        }
    }

}


?>