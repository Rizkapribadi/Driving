<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:index.php');	
} else {
	include "conn.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Aceh Driving School</title>

   
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
   
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />


          <style type="text/css">
          </style>
   </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a class="logo">
                Aceh Driving School
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $_SESSION['fullname']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                    <li>
                                        <a href="detail_admin.php?hal=edit&kd=<?php echo $_SESSION['user_id'];?>">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <a href="admin.php">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <a href="logout.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
				<div class="row">
                    <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  
             <!-- Pesan untuk masuk seebagai admin -->
		<b><center>Selamat Datang Admin</center></b>
          </div>
            </div>
               
         </div>
                <?php
$timeout = 10; // Set timeout menitnya
$logout_redirect_url = "login.html"; // Set logout URL

$timeout = $timeout * 60; // Converts menit ke detik
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
<?php } ?>
         <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                 <section class="sidebar">
                            <!-- Sidebar user panel -->
                      <div class="user-panel">
          <div>
                 <center><img src="<?php echo $_SESSION['gambar']; ?>" height="80" width="80" class="img-circle" alt="User Image" style="border: 3px solid white;" /></center>
          </div>
                     <div class="info">
                      <center><p><?php echo $_SESSION['fullname']; ?></p></center>
                         </div>
                            </div>
                            
							
                            <?php include "menu_admin.php"; ?>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">

                    <div class="row" style="margin-bottom:5px;">


                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-red"><i class="fa fa-user"></i></span>
                                <div class="sm-st-info">
                                <?php $tampil=mysql_query("select * from data_pengajar order by id desc");
                        $total=mysql_num_rows($tampil);
                    ?>
                                    <span><a href="pengajar.php" target="_blank"><?php echo "$total"; ?></a></span>
                                    Total Pengajar
                                </div>
                            </div>
                        </div>
						
						
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-violet"><i class="fa fa-android"></i></span>
                                <div class="sm-st-info"> 
                                     <span><a href="index_admin.php" target="_blank">AcehDriving</a></span>
                                    Download our apps in playstore								
                                </div>
                            </div>
                        </div>
						
						
						
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-blue"><i class="fa fa-twitter"></i></span>
                                <div class="sm-st-info">
                                
                                  <span><a href="index_admin.php" target="_blank">@AcehDriving</a></span>
                                    Follow us on twitter
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-green"><i class="fa fa-group"></i></span>
                                <div class="sm-st-info">
                                <?php $tampil=mysql_query("select * from user order by user_id desc");
                        $total3=mysql_num_rows($tampil);
                    ?>
                                    <span><a href="user.php" target="_blank"><?php echo "$total3"; ?></a></span>
                                    Total User
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main row -->
                    <div class="row">

                        <div class="col-md-8">
                            <!--earning graph start-->
                            <section class="panel">
                                <header class="panel-heading">
                                    Grafik Pengunjung
                                </header>
                                <div class="panel-body">
                                    <canvas id="linechart" width="600" height="330"></canvas>
                                </div>
                                        </section>
                                        <!--earning graph end-->

                                    </div>
                                    <div class="col-lg-4">

                                        <!--chat start-->
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Pemberitahuan
                                            </header>
                                                <div class="panel-body" id="noti-box">
                                                <?php
                                                $tampil=mysql_query("select * from data_pengajar order by id desc limit 1");
                                                while($data2=mysql_fetch_array($tampil)){
                                                ?>
                                                    <div class="alert alert-block alert-danger">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data2['nama'];?></strong> telah terdaftar menjadi pengajar Aceh Driving School.
                                                    </div>
                                                    <?php } ?>
                                                    
                                                <?php
                                                $tampil=mysql_query("select * from admin order by user_id desc limit 1");
                                                while($data3=mysql_fetch_array($tampil)){
                                                ?>
                                                    <div class="alert alert-success">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data3['fullname']; ?></strong> telah ditambahkan menjadi admin Aceh Driving School.
                                                    </div>
                                                <?php } ?>
												
												    
                                                <?php
                                                $tampil=mysql_query("select * from posisi order by id desc limit 1");
                                                while($data4=mysql_fetch_array($tampil)){
                                                ?>
                                                    <div class="alert alert-info">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
														<strong><?php echo $data4['nama']; ?></strong> baru saja ditambahkan pada Lokasi CV.
                                                    </div>
                                                <?php } ?>
                                                   
                                                <?php
                                                $tampil=mysql_query("select * from user order by user_id desc limit 1");
                                                while($data5=mysql_fetch_array($tampil)){
                                                ?>   
                                                    <div class="alert alert-warning">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data5['fullname']; ?> </strong> user baru di Aceh Driving School.
                                                    </div>
                                                <?php } ?>
                                                </div>
                                        </section>



                      </div>


                  </div>
                   
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel">
                                <header class="panel-heading">
                                    Daftar Pengajar Baru
                                </header><?php
                        $tampil=mysql_query("select * from data_pengajar order by id desc limit 3");
                        while($data1=mysql_fetch_array($tampil)){
                        ?>
                                <ul class="list-group teammates">
                                    <li class="list-group-item">
                                        <a href="pengajar.php"><img src="<?php echo $data1['foto']; ?>" width="50" height="50" style="border: 3px solid #555555;"></a>
                                        <a href="pengajar.php"><?php echo $data1['nama']; ?></a>
                                    </li>
                                </ul>
                               <?php } ?>
                                <div class="panel-footer bg-white">
                                    
                                    <a href="input_pengajar.php" class="btn btn-sm btn-info">Tambah Pengajar <i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                              
											
                                   <div class="col-lg-4">

                                        <!--chat start-->
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Saran Baru Dari User
                                            </header>
                                                <div class="panel-body" id="noti-box">
												<?php
                                                $tampil=mysql_query("select * from saran order by id desc limit 1");
                                                while($data6=mysql_fetch_array($tampil)){
                                                ?>   
                                                    <div class="alert alert-info">
                                                        <button data-dismiss="alert" class="close close-sm" type="button">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                        <strong><?php echo $data6['nama']; ?> </strong> mengatakan <strong>"<?php echo $data6['saran']; ?>"</strong>
														
                                                    </div>
                                                <?php } ?>
												
											</div>
											 <a href="saran.php" class="btn btn-sm btn-info">Lihat Semua Saran <i class="fa fa-plus"></i></a>
									</section>									
                              </div>						 
                      </section>					  
				</div>
             </div>
         </div>
			  
              <!-- row end -->
                </section><!-- /.content -->
				 
												
												
                <div class="footer-main">
                    Copyright &copy <a href="index_admin.php" target="_blank">Aceh Driving School</a> 2016
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="js/plugins/chart.js" type="text/javascript"></script>

        
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="js/Director/dashboard.js" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            
</script>
</body>
</html>