
<?php session_start(); ?>



<?php



if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
    $date =  $_SESSION['user_date'];
    $show = " $name ";
} else {
    echo "error";
}





?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../../css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../../js/chart-js-config.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>StockX DB</title>

    <style>
        #welcome-alert {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="easion-logo"><i class="fas fa-sun"></i> <span>StocX</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="../index.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> Bids </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="../bid.php" class="dash-nav-dropdown-item">Add Bids</a>
                    </div>
                </div>

                <!-- Auction  section start -->

                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fa-solid fa-gavel"></i> Auction </a>
                    <div class="dash-nav-dropdown-menu">
                        
                        <a href="content.html" class="dash-nav-dropdown-item">All Auction List</a>
                        <a href="../../admin/login.php" class="dash-nav-dropdown-item">Create Auctions</a>
                        <a href="../../admin/index.php" class="dash-nav-dropdown-item">Pending Auctions</a>
                    </div>
                </div>

                <!-- Auction section end -->

                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-cube"></i> Stock </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="../stock/stockdetails.php" class="dash-nav-dropdown-item">ADD Stock</a>
                        <a href="../stock/stock_table.php" class="dash-nav-dropdown-item">All Stock</a>
                       
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-file"></i> Layouts </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="blank.html" class="dash-nav-dropdown-item">Blank</a>
                        <a href="content.html" class="dash-nav-dropdown-item">Content</a>
                        <a href="../../../admin/login.php" class="dash-nav-dropdown-item">Log in</a>
                        <a href="../../../admin/index.php" class="dash-nav-dropdown-item">Sign up</a>
                    </div>
                </div>

            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <div class="alert alert-info" role="alert" id="welcome-alert">
                        Welcome <?php echo $show; ?>
                    </div>


                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form>
                <div class="tools">
                    <!-- fa fass -->
                    <a href="#!" class="tools-item">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a>
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">Profile</a>
                            <a class="dropdown-item" href="../../../admin/logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </header>

<main class ="my-2">
        <?php include "../../html/stock/stocktable.php";?>
</main>






            <div class="row my-3">
                <div class="col-sm-12">
                    <p>Login Time : <?php echo date("Y-m-d H:i"); ?></p>
                </div>
            </div>


        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../js/main.js"></script>
</body>

</html>