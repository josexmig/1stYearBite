<?php
include '../conn.php';
session_start();

if (empty($_SESSION['email'])) {
?>
    <script>
        alert("Session Empty!");
        location.href = '../index.php';
    </script>
<?php
} else {
    $e = $_SESSION['email'];
    $get_user = mysqli_query($conn, "SELECT * FROM adminz WHERE email = '$e'");
    while ($row = mysqli_fetch_object($get_user)) {
        $name = $row->name;
    }
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online submission</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.2/datatables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/v/dt/jq-3.7.0/dt-2.0.2/datatables.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel" style="background-color: #609450;">
        <nav class="navbar  navbar-expand-sm 
        navbar-default" style="background-color: #609450;">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="../"><img src="images/ui.png" alt="Admin"></a>
                <a class="navbar-brand hidden" href="../"><img src="images/kk.jpg" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Components</h3><!-- /.menu-title -->
                    <li class="">
                        <a href="pending.php"> <i class="menu-icon fa fa-dashboard"></i>Pendings </a>
                    </li>
                    <li class="">
                        <a href="approved.php"> <i class="menu-icon fa fa-dashboard"></i>Approved </a>
                    </li>


            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin1.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">


                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">

                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1 style="white-space: nowrap;">1st YearBite: Online Application Submission App</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">
            <h3 style="margin-bottom: 10px; font-size: 25px;"> Welcome Admin! </h3>
            <h7>-Your expertise and dedication are integral to our success.</h7>
            <div class="col-sm-12">
            </div>


            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton1" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM user");
                            ?>
                            <span class="count"><?= $query->num_rows ?></span>
                        </h4>
                        <p class="text-light">STUDENTS</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton3" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM documents WHERE status='incomplete'");
                            ?>
                            <span class="count"><?= $query->num_rows ?></span>
                        </h4>
                        <p class="text-light">NOT COMPLETED</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-4" style="background-color: green;">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton4" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                <div class="dropdown-menu-content">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <h4 class="mb-0">
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM documents WHERE status='complete'");
                            ?>
                            <span class="count"><?= $query->num_rows ?></span>
                        </h4>
                        <p class="text-light">COMPLETED</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- .content -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Incomplete</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card shadow">
                <div class="card-body">
                    <table id="tblincomplete" class="table table-striped">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Section</td>
                                <td>Semester</td>
                                <td>School Year</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $get_user = mysqli_query($conn, "SELECT * FROM user u LEFT JOIN documents d ON u.email = d.uploader_email WHERE d.status = 'incomplete'");
                            // $get_documents = mysqli_query($conn,"SELECT * FROM documents");

                            while ($user = mysqli_fetch_array($get_user)) {
                            ?>
                                <tr>
                                    <td><?php echo $user['name']; ?></td>
                                    <td><?php echo $user['section']; ?></td>
                                    <td><?php echo $user['semester']; ?></td>
                                    <td><?php echo $user['school_yr']; ?></td>
                                    <td>
                                        <?php if ($user['status'] == 'incomplete') : ?>
                                            <span><?php echo $user['status']; ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td style="vertical-align: middle;">
                                        <div style="display: flex; flex-direction: column; align-items: center;">
                                            <button class="btn btn-success mt-3" data-toggle="modal" data-target="#viewModal<?php echo $user['id']; ?>">More Info</button>
                                        </div>
                                    </td>
                                </tr>

                                <div class="modal fade" id="viewModal<?php echo $user['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewModalLabel">Information</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Name: <?php echo $user['name']; ?></p>
                                                        <p>Section: <?php echo $user['section']; ?></p>
                                                        <p>Semester: <?php echo $user['semester']; ?></p>
                                                        <p>School Year: <?php echo $user['school_yr']; ?></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>Contact: <?php echo $user['contact']; ?></p>
                                                        <p>Email: <?php echo $user['email']; ?></p>
                                                        <p>Password: <?php echo $user['pass']; ?></p>
                                                        <p>Status: <?php echo $user['status']; ?></p>
                                                    </div>
                                                    <!-- HTML structure for the Card -->
                                                    <?php if (!empty($user['card_img'])) { ?>
                                                        <div class="col-3 text-center">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p class="card-title"><strong>Report Card</strong></p>
                                                                    <img src="../assets/img/pdf-icon.png" style="height: 150px; width:150px" alt="..."><br><br>
                                                                    <a href="../students/card/<?php echo $user['card_img']; ?>" class="btn btn-primary">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>


                                                    <!-- HTML structure for Birth Certificate -->
                                                    <?php if (!empty($user['birth_img'])) { ?>
                                                        <div class="col-3 text-center">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p class="card-title"><strong>Birth Certificate</strong></p>
                                                                    <img src="../assets/img/pdf-icon.png" style="height: 150px; width:150px" alt="..."><br><br>
                                                                    <a href="../students/Birth_cert/<?php echo $user['birth_img']; ?>" class="btn btn-primary">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>


                                                    <!-- HTML structure for Form 137 -->
                                                    <?php if (!empty($user['form_img'])) { ?>
                                                        <div class="col-3 text-center">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p class="card-title"><strong>Form 137</strong></p>
                                                                    <img src="../assets/img/pdf-icon.png" style="height: 150px; width:150px" alt="..."><br><br>
                                                                    <a href="../students/Form_137/<?php echo $user['form_img']; ?>" class="btn btn-primary">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>


                                                    <!-- HTML structure for Good Moral -->
                                                    <?php if (!empty($user['good_img'])) { ?>
                                                        <div class="col-3 text-center">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <p class="card-title"><strong>Good Moral</strong></p>
                                                                    <img src="../assets/img/pdf-icon.png" style="height: 150px; width:150px" alt="..."><br><br>
                                                                    <a href="../students/Good_moral/<?php echo $user['good_img']; ?>" class="btn btn-primary">View</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                        ?>
                        </tbody>
                    </table>
                    <script>
                        let table = new DataTable('#tblincomplete');
                    </script>
                </div>
            </div>
        </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>