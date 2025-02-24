<?php
include '../conn.php';
session_start();

if (empty($_SESSION['email'])) {
    ?>
    <script>
        alert("Session Empty!");
        location.href='../index.php';
    </script>
    <?php
} else {
    $e = $_SESSION['email'];
    $get_user = mysqli_query($conn,"SELECT * FROM user WHERE email = '$e'");
    
    if(mysqli_num_rows($get_user) == 1) { // Ensure only one user found
        $row = mysqli_fetch_object($get_user);
        $name = $row->name;
        
        if(isset($_FILES['image'])) {
            $errors= array();
            $file_name = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            
            $extensions= array("jpeg","jpg","png");
            
            if(in_array($file_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
            }
            
            if(empty($errors)==true) {
                move_uploaded_file($file_tmp,"uploads/".$file_name);
                mysqli_query($conn, "UPDATE user SET profile_image = '$file_name' WHERE email = '$e'");
                echo "Image uploaded successfully.";
            } else {
                print_r($errors);
            }
        }
    } else {
        echo "User not found or multiple users found with the same email!";
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
                <a class="navbar-brand" href="../"><img src="images/kk.jpg" alt="Logo" class="rounded-circle" style="height:45px;"> Student Page</a>
          
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Components</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="upload.php"> <i class="menu-icon fa fa-dashboard"></i>Upload Requirements </a>
                    </li>
                    <li class="">
                        <a href="records.php"> <i class="menu-icon fa fa-dashboard"></i>Update Records </a>
                    </li>
                    <li class="">
                        <a href="cite.php"> <i class="menu-icon fa fa-dashboard"></i>CITE FACULTIES</a>
                    </li>
                    <li class="">
                        <a href="upload-record.php"> <i class="menu-icon fa fa-dashboard"></i>Upload Record</a>
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
                    <div class="header-left"></div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin1.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                        

                          

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                           
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
                        <h1>Upload Requirements</h1>
                    </div>
                </div>
            </div>

          
          
        </div>

        <div class="content mt-3">
        <div class="card shadow">
                <div class="card-body">
                    <form action="process.php" method="POST" enctype="multipart/form-data">
                        <label class="fw-bold">Card Image</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text"><i class="bi bi-file"></i></div>
                            <input type="file" name="card" class="form-control" accept="application/pdf">
                        </div>
                        <label class="fw-bold">Birth Certificate Image</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text"><i class="bi bi-file"></i></div>
                            <input type="file" name="birth" class="form-control" accept="application/pdf">
                        </div>
                        <label class="fw-bold">Form 137 Image</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text"><i class="bi bi-file"></i></div>
                            <input type="file" name="form_137" class="form-control" accept="application/pdf">
                        </div>
                        <label class="fw-bold">Good Moral Image</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text"><i class="bi bi-file"></i></div>
                            <input type="file" name="good" class="form-control" accept="application/pdf">
                        </div>

                        <label class="fw-bold">Uploaders Name</label>
                        <div class="input-group mb-3">
                            <div class="input-group-text"><i class="bi bi-file"></i></div>
                            <input type="text" value="<?php echo $e; ?>" name="name" class="form-control" readonly>
                        </div>
                        <input type="submit" name="insert" value="Submit" class="btn btn-primary form-control">
                    </form>
                </div>
            </div>
         
        </div> <!-- .content -->
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
