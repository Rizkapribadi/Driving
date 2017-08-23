<?php 

	include "conn.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
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
                
                   
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
						
						
                        <li class="dropdown user user-menu">
                            <a href="login.html" data-placement="bottom" data-toggle="tooltip" title="Login Admin">
                                <i class="fa fa-user"></i>
                                
                            </a>            
                                </li>
                           <li class="dropdown messages-menu">
						<a href="#" data-toggle="modal" data-target="#contact">
                        <i class="fa fa-envelope"></i>
						</a>
								 </li>
						   </ul>
                        </div>
                    </nav>
                </header>
				<div class="wrapper row-offcanvas row-offcanvas-left">
                    <!--column di sebelah kiri. ada logo dan sidebar -->

                    <aside>

                <!-- Main content nya -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
                    <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  
             <!-- Pesan untuk masuk seebagai admin -->
		<b><center>Selamat Datang di web Aceh Driving School, Untuk Login Admin silahkan klik Icon User atau klik <a href="login.html">disini</center></a></b>
          </div>
            </div>
               
         <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                 <section class="sidebar">
                            <!-- Sidebar user panel -->
                      <div class="user-panel">
          <div>
                
          </div>
                     <div class="info">
                      <center><p></p></center>
                         </div>
                            </div>
                            
							
                            <?php include "menu.php"; ?>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">

                    <div class="row" style="margin-bottom:5px;">


                        <!--<div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-red"><i class="fa fa-user"></i></span>
                                <div class="sm-st-info">
                                <?php /*$tampil=mysql_query("select * from data_pengajar order by id desc");
                        $total=mysql_num_rows($tampil);*/
                    ?>
                                    <span><?php //echo "$total"; ?></span>
                                    Total Pengajar
                                </div>
                            </div>
                        </div>-->
						
						
                        <!--<div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-violet"><i class="fa fa-android"></i></span>
                                <div class="sm-st-info"> 
                                     <span><a href="index.php" target="_blank">AcehDriving</a></span>
                                    Download our apps in playstore								
                                </div>
                            </div>
                        </div>-->
						
						
						
                        <!--<div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-blue"><i class="fa fa-twitter"></i></span>
                                <div class="sm-st-info">
                                
                                  <span><a href="index.php" target="_blank">@AcehDriving</a></span>
                                    Follow us on twitter
                                </div>
                            </div>
                        </div>-->
                        <!--<div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-green"><i class="fa fa-group"></i></span>
                                <div class="sm-st-info">
                                <?php /*$tampil=mysql_query("select * from user order by user_id desc");
                        $total3=mysql_num_rows($tampil);*/
                    ?>
                                    <span><?php //echo "$total3"; ?></span>
                                    Total User
                                </div>
                            </div>
                        </div>
                    </div>-->

             
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
	 <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	   <li data-target="#myCarousel" data-slide-to="4"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <center><img src="2.jpg" alt="Chania"></center>
    </div>

    <div class="item">
      <center><img src="1.jpg" alt="Chania"></center>
    </div>
<div class="item">
      <center><img src="3.jpg" alt="Chania"></center>
    </div>
    <div class="item">
      <center><img src="4.jpg" alt="Chania"></center>
    </div>
	<div class="item">
      <center><img src="img_chania2.jpg" alt="Chania"></center>
    </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                               
              <!-- row end -->
                </section><!-- /.content -->
                <div class="footer-main">
                    Copyright &copy <a href="index.php" target="_blank">Aceh Driving School</a> 2016
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->
        <!-- Modal Dialog Contact -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Aceh Driving School Info</h4>
      </div>
      <div class="modal-body">
     Aceh Driving School adalah website penyedia informasi 
	 pengajar mengemudi yang diciptakan untuk memudahkan masyarakat dalam
     mencari
	 jasa pengajar mengemudi.
      <table>
      
      <br />
      <tr>
      <td>E-mail</td><td>:</td> <td><a >acehdriving@gmail.com</a> </td>
      </tr> 
      <br />
       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end dialog modal -->


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

</body>
</html>