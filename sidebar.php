<?php
$site_controller->logout($_GET['logout']);
$table_comments='yorum';
$table_recipes='liste';
$table_category='cesidi';
$table_users='gonderen';
$n_comments=$site_controller->model->View($table_comments);
$n_recipe=$site_controller->model->View($table_recipes);
$n_users=$site_controller->model->View($table_users);
$n_category=$site_controller->model->View($table_category);

?>

<aside class="aside">
    <!-- START Sidebar (left)-->
    <nav class="sidebar">
        <ul class="nav">
            <!-- START user info-->
            <li>
                <div data-toggle="collapse-next" class="item user-block has-submenu">
                    <!-- User picture-->
                    <div class="user-block-picture">
                        <img src="app/img/user/02.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                        <!-- Status when collapsed-->
                        <div class="user-block-status">
                            <div class="point point-success point-lg"></div>
                        </div>
                    </div>
                    <!-- Name and Role-->

                    <div class="user-block-info">

                        <span class="user-block-name item-text"><?php echo $_SESSION['user'];?></span>
                        <!--<span class="user-block-role">Designer</span>-->

                        <div class="btn-group user-block-status">
                            <button type="button" data-toggle="dropdown" data-play="fadeIn" data-duration="0.2" class="btn btn-xs dropdown-toggle">
                                <div class="point point-success"></div>Online</button>
                            <ul class="dropdown-menu text-left pull-right">
                                <li>
                                    <a href="#">
                                        <div class="point point-success"></div>Online</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="point point-warning"></div>Away</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="point point-danger"></div>Busy</a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Dropdown to change status-->
                    </div>

                </div>

            </li>
            <!-- END user info-->
            <!-- START Menu-->
            <li class="active">
                <a href="profile" title="Dashboard" data-toggle="" class="no-submenu">
                    <em class="fa fa-dashboard"></em>

                    <span class="item-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a  href="recipes" title="Yemekler" data-toggle="" class="no-submenu" id="recipe-btn">
                    <em class="fa fa-cutlery"></em>
                    <div class="label label-success pull-right"><?php echo count($n_recipe);?></div>
                    <span class="item-text">Yemekler</span>
                </a>

            </li>
            <li>
                <a href="category" title="Yemek Kategorileri" data-toggle="" class="no-submenu">
                    <em class="fa fa-sort-alpha-asc"></em>
                    <div class="label label-success pull-right"><?php echo count($n_category);?></div>
                    <span class="item-text">Çeşitler</span>
                </a>

            </li>
            <li >
                <a href="users" title="Kullanıcılar" data-toggle="" class="no-submenu">
                    <em class="fa fa-users"></em>
                    <div class="label label-success pull-right"> <?php echo count($n_users);?></div>
                    <span class="item-text">Kullanıcılar</span>
                </a>

            </li>
            <li>
                <a href="comments" title="Yorumlar" data-toggle="" class="no-submenu">
                    <em class="fa fa-comments-o"></em>
                    <div class="label label-success pull-right"><?php echo count($n_comments);?></div>
                    <span class="item-text">Yorumlar</span>
                </a>

            </li>
            <!-- END Menu-->



            <!-- Sidebar footer    -->
            <li class="nav-footer">
                <div class="nav-footer-divider"></div>
                <!-- START button group-->
                <div class="btn-group text-center">

                    <a href="profile" id="settings" role="button" data-toggle="tooltip" data-title="Ayarlar" class="btn btn-link">
                        <em class="fa fa-cog text-muted"></em>
                    </a>
                    <a href="?logout=true" id="logout" role="button" data-toggle="tooltip" data-title="Çıkış" class="btn btn-link">
                        <em class="fa fa-sign-out text-muted"></em>
                    </a>
                </div>
                <!-- END button group-->
            </li>
        </ul>
    </nav>
    <!-- END Sidebar (left)-->
</aside>
<!-- End aside-->
<section >

    <!-- START Page content-->

    <section class="main-content" >



