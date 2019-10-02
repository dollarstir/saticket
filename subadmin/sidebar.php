
<?php 


echo '<div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="home.php" class="navbar-brand">
                            <img src="assets/img/logo-3.png" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="home.php" class="nav-link"> SA </a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu" style="color:white;">
                        <a href="home.php">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Home</span>
                            </div>

                            <div>
                               
                            </div>
                        </a>
                        
                    </li>
                   
                    

                   

                    

                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-cart-bag"></i>
                                <span>Sales</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                            <li>
                                <a href="lg.php">LEGON</a>
                            </li>
                            <li>
                                <a href="knust.php"> KNUST </a>
                            </li>

                            <li>
                                <a href="ucc.php"> UCC </a>
                            </li>
                           

                            
                        </ul>
                    </li>


                   



                <li class="menu">
                    <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-user-group"></i>
                            <span>Volunteer</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                        <li>
                            <a href="addvol.php"> Add Volunteer </a>
                        </li>
                        <li>
                            <a href="volunter.php"> View Volunteers </a>
                        </li>

                        



                       

                       
                    </ul>
                </li>



 
                <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <i class="flaticon-user-group"></i>
                                <span>Sub-Admins</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="adsubadmin.php"> Add Sub-Admin </a>
                            </li>
                            <li>
                                <a href="subadmin.php"> View Sub-Admin </a>
                            </li>
                            
                           
                            
                           
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>Vouchers</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ui-features" data-parent="#accordionExample">
                         
                            <li>
                            <a href="voucherUC.php">UCC - Vouchers</a>
                             </li>

                             <li>
                            <a href="voucherHT.php"> HoTECH - Vouchers </a>
                             </li>

                             <li>
                            <a href="voucherKN.php"> KNUST - Vouchers </a>
                             </li>

                             <li>
                            <a href="voucherLE.php"> LEGON - Vouchers </a>
                             </li>
                            
                            
                           
                           
                        </ul>
                    </li>

                    
                </ul>
            </nav>

        </div>'
               ;?>