<?php session_start(); ?>

<?php include "../../config.php"; ?>

<?php

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

$num_rows_users = mysqli_num_rows($result);



$sql = "SELECT * FROM bids";

$result = mysqli_query($conn, $sql);

$num_rows_bids  = mysqli_num_rows($result);



$sql = "SELECT * FROM stock ";

$result = mysqli_query($conn, $sql);

$num_rows_stock = mysqli_num_rows($result);



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/demo.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <script src="../js/chart-js-config.js"></script>
    <title>StockX DB</title>

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
                <a href="../../Adashbord/index.php" class="easion-logo"><i class="fas fa-sun"></i> <span>StocX</span></a>
            </header>
            <nav class="dash-nav-list">
                <a href="../../Adashbord/index.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> Bids </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="bid.php" class="dash-nav-dropdown-item">Add Bids</a>
                    </div>
                </div>


                <!-- Auction  section start -->

                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                    <i class="fa-solid fa-gavel"></i> Auction </a>
                    <div class="dash-nav-dropdown-menu">
                        
                        <a href="../html/auction.php" class="dash-nav-dropdown-item">All Auction List</a>
                        <a href="../../admin/login.php" class="dash-nav-dropdown-item">Create Auctions</a>
                        <a href="../../admin/index.php" class="dash-nav-dropdown-item">Pending Auctions</a>
                    </div>
                </div>

                <!-- Auction section end -->






                <div class="dash-nav-dropdown ">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-cube"></i> Stock </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="../html/stock/stock.php" class="dash-nav-dropdown-item">ADD Stock</a>
                        <a href="../html/stock/stock_table.php" class="dash-nav-dropdown-item">All Stock</a>


                    </div>
                </div>
                <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-file"></i> Layouts </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="blank.html" class="dash-nav-dropdown-item">Blank</a>
                        <a href="content.html" class="dash-nav-dropdown-item">Content</a>
                        <a href="../../admin/login.php" class="dash-nav-dropdown-item">Log in</a>
                        <a href="../../admin/index.php" class="dash-nav-dropdown-item">Sign up</a>
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
                            <a class="dropdown-item" href="../../admin/logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
            <main class="dash-content">
                <div class="container-fluid">
                    <div class="d_row">
                        <div class="row dash-row">
                            <div class="col-xl-4">
                               <div class="stats stats-primary shadow p-3 mb-5 bg-body rounded" id="totlec_color">
                                    <h3 class="stats-title"> Total Coustermers </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                            <a href="#"><i class="fa-solid fa-user-tie" style="font-size:48px;"></i></a>
                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number"><?php echo $num_rows_users; ?></div>
                                            <div class="stats-change">
                                                <span class="stats-percentage"></span>
                                                <span class="stats-timeframe"></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="stats stats-success " id="stock_color">
                                    <h3 class="stats-title"> Stock </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">

                                            <!-- <i class="fa fa-gavel" aria-hidden="true" style="font-size:48px;"></i> -->
                                            <a href="#"><i class="fa-solid fa-cubes-stacked" style="font-size:48px;"></i></a>

                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number"><?php echo $num_rows_stock; ?></div>
                                            <div class="stats-change">
                                                <span class="stats-percentage"></span>
                                                <span class="stats-timeframe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="stats stats-danger" id="bids_color">
                                    <h3 class="stats-title"> Bids </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                            <!-- <i class="fa-duotone fa-gavel" style="font-size:48px;"></i> -->
                                            <a href="#"><i class="fa fa-gavel" aria-hidden="true" style="font-size:48px;"></i></a>

                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number"><?php echo $num_rows_bids; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <!-- second card -->

                        <div class="row dash-row">
                            <div class="col-xl-4">
                                <div class="stats stats-primary shadow p-3 mb-5 bg-body rounded" id="auction_color">
                                    <h3 class="stats-title"> Auctions Opened! </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                        <a href="#"><i class="fa-solid fa-dollar-sign" style="font-size:48px;"></i></a>

                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number"><?php echo $num_rows_users; ?></div>
                                            <div class="stats-change">
                                                <span class="stats-percentage"></span>
                                                <span class="stats-timeframe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="stats stats-success " id="ac_closed">
                                    <h3 class="stats-title"> Auctions Closed! </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                            <a href="#"><i class="fa-solid fa-truck" style="font-size:48px;"></i></a>
                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number"><?php echo $num_rows_stock; ?></div>
                                            <div class="stats-change">
                                                <span class="stats-percentage"></span>
                                                <span class="stats-timeframe"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="stats stats-danger" id="ap_pending">
                                    <h3 class="stats-title"> Auctions Pending! </h3>
                                    <div class="stats-content">
                                        <div class="stats-icon">
                                        <a href="#"><i class="fa-solid fa-circle-check" style="font-size:48px;"></i></a>
                                        </div>
                                        <div class="stats-data">
                                            <div class="stats-number"><?php echo $num_rows_bids; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end -->





                    <div class="row">
                        <div class="col-sm-6">
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
                                
                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

<div id="curve_chart" ></div>

                   







                            </div>
                        </div>




                        <div class="col-sm-6">
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

                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                <script type="text/javascript">
                                    google.charts.load('current', {
                                        'packages': ['corechart']
                                    });
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {

                                        var data = google.visualization.arrayToDataTable([
                                            ['Task', 'Hours per Day'],
                                            ['Work', 11],
                                            ['Eat', 2],
                                            ['Commute', 2],
                                            ['Watch TV', 2],
                                            ['Sleep', 7]
                                        ]);

                                        var options = {
                                            title: 'My Daily Activities'
                                        };

                                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                        chart.draw(data, options);
                                    }
                                </script>
                                
                                    <div id="piechart" ></div>


                            </div>
                        </div>
                    </div>

                  


                <!-- wite this -->







                <p>Login Time : <?php echo date("Y-m-d H:i"); ?></p>

        </div>
    </div>
    </main>
    </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>

</html>