﻿<!DOCTYPE html>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Notice";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Notice Board | MNNIT Allahabad</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../../css/font.css" rel="stylesheet" type="text/css">
    <link href="../../css/font2.css" rel="stylesheet" type="text/css">
    
    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
	 <style>
	.button {
	  padding: 5px 20px;
	  font-size: 12px;
	  text-align: center;
	  cursor: pointer;
	  outline: none;
	  color: #fff;
	  background-color:#4286f4;
	  border: none;
	  border-radius: 15px;
	  box-shadow: 0 2px #0000cc;
	}

	.button:hover {background-color:#0000cc}

	.button:active {
	  background-color:#6666ff;
	  box-shadow: 0 1px #666;
	  transform: translateY(4px);
	}
	.select{
		width:60%;
		padding:2px 2px;
		margin:0px;
	}
	</style>
 
</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">NOTICE BOARD CSED | MNNIT ALLAHABAD</a>
            </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../../images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Notice Board</div>
                    <div class="email">Comp. Sc. & Engg. Department</div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../../index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="./All.php">
                            <i class="material-icons">layers</i>
                            <span>Common Notices</span>
                        </a>
                    </li>
                    <li>
                        <a href="./BTech.php">
                            <i class="material-icons">layers</i>
                            <span>B.Tech</span>
                        </a>
                    </li>

                    <li>
                        <a href="./MTech.php">
                            <i class="material-icons">layers</i>
                            <span>M.Tech</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="./MCA.php">
                            <i class="material-icons">layers</i>
                            <span>MCA</span>
                        </a>
                    </li>

                    <li>
                        <a href="./PhD.php">
                            <i class="material-icons">layers</i>
                            <span>Ph.D</span>
                        </a>
                    </li>

                </ul>
            </div>
			<!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2019 <a href="javascript:void(0);"> MNNIT Allahabad</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>

     <section class="content">
        <div class="container-fluid">

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Notices for MCA
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
											<th>Semester</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>View Notice</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>S.No.</th>
											<th>Semester</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>View Notice</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
											$sql="Select Semester,Subject,Date,View from notices where Category='MCA'";
											$result=mysqli_query($conn,$sql);
											$no=1;
											if(mysqli_num_rows($result)>0){
												while($row=mysqli_fetch_assoc($result)){
													echo "<tr>
													<td>".$no."</td>
													<td>".$row["Semester"]."</td>
													<td>".$row["Subject"]."</td>
													<td>".$row["Date"]."</td>
													<td><a href='".$row["View"]."' target='_blank'><button class='button'>View</button></a></td>
													</tr>";
													$no++;
												}
											}
								
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
