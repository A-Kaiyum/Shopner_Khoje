            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="text-center">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="img-circle">
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['name']; ?></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"> Profile</a></li>
                                    <li><a href="javascript:void(0)"> Settings</a></li>
                                    <li><a href="javascript:void(0)"> Lock screen</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()"> Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index.php" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                            </li>

                            <?php if($_SESSION['user_type']=='Admin'){ ?>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Manage User </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="users_list.php">Users List</a></li>
                                        <li><a href="add_user.php">Add User</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span>Members</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="members_list.php">Members List</a></li>
                                        <li><a href="add_member.php">Add Members</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span>Donors </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="donors_list.php">Donors list</a></li>
                                        <li><a href="add_donor.php">Add Donor</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="has_sub">
                                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span>peoples </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="peoples_list.php">peoples list</a></li>
                                        <li><a href="add_people.php">Add people</a></li>
                                        
                                    </ul>
                                </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>