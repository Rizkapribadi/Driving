                            <ul class="sidebar-menu">
                                <li>
                                    <a href="index_user.php">
                                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                    </a>
                                </li>
                                <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-user"></i>
                                    <span> Profil</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                
								<?php echo $_SESSION['fullname']; ?> 
                            </a>
                                    <ul class="treeview-menu">
                                        <li><a href="detail_user_dihalaman_user.php?hal=edit&kd=<?php echo $_SESSION['user_id'];?>"><i class="fa fa-angle-double-right"></i> Profil Anda</a></li>
                                        <li><a href="edit_user.php?hal=edit&kd=<?php echo $_SESSION['user_id'];?>"><i class="fa fa-angle-double-right"></i> Edit Profil</a></li>
                                    </ul>
                                </li>
								
                                <li>
                                   <a href="pengajar_dihalaman_user.php">
								   <i class="fa fa-male"></i><span> Daftar Pengajar </span>
                                    </a> 
                                </li>
                                
                               
								
								<li>
                                <a href="tampilkan_peta_user.php">
                                    <i class="fa fa-map-marker"></i>
                                    <span> Lihat Lokasi CV</span>
                                 
                                </a>
                                    
                                </li>
                                
                                    
                                    