<?php session_start(); ?>
<?php include "../../../config.php"; ?>

<?php

$sql = "SELECT * FROM stock";

$result = mysqli_query($conn, $sql);

$num_rows_stock = mysqli_num_rows($result);



$sql = "SELECT * FROM bids";

$result = mysqli_query($conn, $sql);

$num_rows_bids  = mysqli_num_rows($result);



$sql = "SELECT * FROM sellers ";

$result = mysqli_query($conn, $sql);

$num_rows_sellers  = mysqli_num_rows($result);



?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/demo.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="../../js/chart-js-config.js"></script>
    <title>StocX DB</title>

    <style>
        #welcome-alert {
            margin-top: 10px;
        }
    </style>
</head>

<body><?php


        if (isset($_SESSION['username'])) {
            $name = $_SESSION['username'];
            $date =  $_SESSION['user_date'];
            $show = " $name ";
        } else {
            echo "error";
        }


        ?>

    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="../index.php" class="easion-logo"><i class="fas fa-sun"></i> <span>StocX</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="../index.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> All Bid </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="chartjs.html" class="dash-nav-dropdown-item">bid</a>
                    </div>
                </div>
                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-cube"></i> All stock Detauls </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="../html/bid/bid.php" class="dash-nav-dropdown-item">all Stock</a>
                        <a href="forms.html" class="dash-nav-dropdown-item">Forms</a>
                        
                
                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-file"></i> user components </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="blank.html" class="dash-nav-dropdown-item">Blank</a>
                        <a href="content.html" class="dash-nav-dropdown-item">Content</a>
                        <a href="../../users/login.php" class="dash-nav-dropdown-item">Log in</a>
                        <a href="../../users/index.php" class="dash-nav-dropdown-item">Sign up</a>
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
                    <!-- da fas set -->
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
                            <a class="dropdown-item" href="../../users/logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="row dash-row">
                        <div class="col-xl-4">
                            <div class="stats stats-primary" id="stock_color">
                                <h3 class="stats-title"> Stocks </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo $num_rows_stock; ?> </div>
                                        <div class="stats-change">
                                            <span class="stats-percentage"></span>
                                            <span class="stats-timeframe"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-success " id="bid_color">
                                <h3 class="stats-title"> Bids </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-cart-arrow-down"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo $num_rows_bids; ?> </div>
                                        <div class="stats-change">
                                            <span class="stats-percentage"></span>
                                            <span class="stats-timeframe"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="stats stats-danger" id="open_color">
                                <h3 class="stats-title"> Open bids </h3>
                                <div class="stats-content">
                                    <div class="stats-icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="stats-data">
                                        <div class="stats-number"><?php echo $num_rows_sellers; ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-xl-10">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                    <div class="easion-card-title"> Bar Chart </div>
                                    <div class="easion-card-menu">
                                        <div class="dropdown show">
                                            <a class="easion-card-menu-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>



                         <div class="col-xl-6">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="easion-card-title"> Notifications </div>
                                </div>
                                <div class="card-body ">
                                    <div class="notifications">
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">New comment</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">New comment</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <a href="#!" class="notification">
                                            <div class="notification-icon">
                                                <i class="fas fa-inbox"></i>
                                            </div>
                                            <div class="notification-text">New comment</div>
                                            <span class="notification-time">21 days ago</span>
                                        </a>
                                        <div class="notifications-show-all">
                                            <a href="#!">Show all</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                    </div> -->


                    <!-- wite this -->


                    <div class="row">
                        

                        <?php include "../bid/bid.php"; ?>
                        

                        

                    </div>






                </div>
        </div>


        </main>
    </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../js/main.js"></script>
</body>

</html>