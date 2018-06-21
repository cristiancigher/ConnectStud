<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: extra-login.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <title>ConnectStud | ORAR</title>




    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/neon-core.css">
    <link rel="stylesheet" href="assets/css/neon-theme.css">
    <link rel="stylesheet" href="assets/css/neon-forms.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="assets/js/jquery-1.11.0.min.js"></script>

    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <div class="sidebar-menu">


        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="index.php">
                    <img src="assets/images/logo@3x.png" width="120" alt="" />
                </a>
            </div>

            <!-- logo collapse icon -->

            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>



            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>






        <ul id="main-menu" class="">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li class="active opened active">
                <ul>
                    <li>

                    <li>
                        <a href="index.php">
                            <i class="entypo-home"></i>
                            <span>HOME</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-clock"></i>
                            <span>ORAR</span>
                        </a>
                        <ul>


                            <li>
                                <a href="orar_azi.php">
                                    <i class="entypo-bell"></i>
                                    <span>Orarul de azi</span>
                                </a>
                            </li>
                        </ul>
                        <ul>


                            <li>
                                <a href="orar.php">
                                    <i class="entypo-calendar"></i>
                                    <span>Orar Complet</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="extra-chat.php">
                            <!-- <a href="index.html" target="_blank"> -->
                            <i class="entypo-chat"></i>
                            <span>CHAT</span>
                        </a>
                    </li>

                    <li>
                        <a href="PROFESORI.PHP">
                            <i class="entypo-window"></i>
                            <span>PROFESORI</span>
                        </a>

                    </li>
                    <li>
                        <a href="COLEGI.PHP">
                            <i class="entypo-window"></i>
                            <span>COLEGI</span>
                        </a>

                    </li>

                    <li>
                        <a href="#">
                            <i class="entypo-facultate"></i>
                            <span>FACULTATI</span>
                        </a>
                        <ul>


                            <li>
                                <a href="#">
                                    <i class="entypo-chart-line"></i>
                                    <span>AUTOMATICA</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-progress-1"></i>
                                            <span>ANUL I</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="orar.php">
                                                    <i class="entypo-clock"></i>
                                                    <span>ORAR</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="entypo-chat"></i>
                                                    <span>CHAT</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="entypo-archive"></i>
                                                    <span>MATERIALE</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="entypo-flow-cascade"></i>
                                                            <span>CURS</span>
                                                        </a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="entypo-flow-branch"></i>
                                                                    <span>Menu Level 4.1</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="entypo-flow-cascade"></i>
                                                            <span>LABORATOR</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-parallel"></i>
                                                <span>Menu Level 2.1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-parallel"></i>
                                                <span>Menu Level 2.2</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="entypo-flow-cascade"></i>
                                                        <span>Menu Level 3.1</span>
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <i class="entypo-flow-branch"></i>
                                                                <span>Menu Level 4.1</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="entypo-flow-cascade"></i>
                                                        <span>Menu Level 3.2</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-parallel"></i>
                                                <span>Menu Level 2.3</span>
                                            </a>
                                        </li>
                                    </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="entypo-progress-2"></i>
                                    <span>ANUL II</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-clock"></i>
                                            <span>ORAR</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-chat"></i>
                                            <span>CHAT</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-flow-parallel"></i>
                                            <span>MATERIALE</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="entypo-flow-cascade"></i>
                                                    <span>CURS</span>
                                                </a>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="entypo-flow-branch"></i>
                                                            <span>Menu Level 4.1</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="entypo-flow-cascade"></i>
                                                    <span>LABORATOR</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-parallel"></i>
                                        <span>Menu Level 2.1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-parallel"></i>
                                        <span>Menu Level 2.2</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-cascade"></i>
                                                <span>Menu Level 3.1</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="entypo-flow-branch"></i>
                                                        <span>Menu Level 4.1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-cascade"></i>
                                                <span>Menu Level 3.2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-parallel"></i>
                                        <span>Menu Level 2.3</span>
                                    </a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-progress-3"></i>
                            <span>ANUL III</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="entypo-clock"></i>
                                    <span>ORAR</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="entypo-chat"></i>
                                    <span>CHAT</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-parallel"></i>
                                    <span>MATERIALE</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-flow-cascade"></i>
                                            <span>CURS</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="entypo-flow-branch"></i>
                                                    <span>Menu Level 4.1</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-flow-cascade"></i>
                                            <span>LABORATOR</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-parallel"></i>
                                <span>Menu Level 2.1</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-parallel"></i>
                                <span>Menu Level 2.2</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-cascade"></i>
                                        <span>Menu Level 3.1</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-branch"></i>
                                                <span>Menu Level 4.1</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-cascade"></i>
                                        <span>Menu Level 3.2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-parallel"></i>
                                <span>Menu Level 2.3</span>
                            </a>
                        </li>
                    </ul>
            </li>


            <li>
                <a href="#">
                    <i class="entypo-battery"></i>
                    <span>ANUL IV</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <i class="entypo-clock"></i>
                            <span>ORAR</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-chat"></i>
                            <span>CHAT</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-parallel"></i>
                            <span>MATERIALE</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-cascade"></i>
                                    <span>CURS</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-flow-branch"></i>
                                            <span>Menu Level 4.1</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-cascade"></i>
                                    <span>LABORATOR</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <ul>
                <li>
                    <a href="#">
                        <i class="entypo-flow-parallel"></i>
                        <span>Menu Level 2.1</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-flow-parallel"></i>
                        <span>Menu Level 2.2</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-cascade"></i>
                                <span>Menu Level 3.1</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-branch"></i>
                                        <span>Menu Level 4.1</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-cascade"></i>
                                <span>Menu Level 3.2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-flow-parallel"></i>
                        <span>Menu Level 2.3</span>
                    </a>
                </li>
            </ul>
            </li>
        </ul>
        </li>
        <li>
            <a href="#">
                <i class="entypo-monitor"></i>
                <span>CALCULATOARE</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        <i class="entypo-progress-1"></i>
                        <span>ANUL I</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="entypo-clock"></i>
                                <span>ORAR</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-chat"></i>
                                <span>CHAT</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-parallel"></i>
                                <span>MATERIALE</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-cascade"></i>
                                        <span>CURS</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-branch"></i>
                                                <span>Menu Level 4.1</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-cascade"></i>
                                        <span>LABORATOR</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <ul>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-parallel"></i>
                            <span>Menu Level 2.1</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-parallel"></i>
                            <span>Menu Level 2.2</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-cascade"></i>
                                    <span>Menu Level 3.1</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="entypo-flow-branch"></i>
                                            <span>Menu Level 4.1</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-cascade"></i>
                                    <span>Menu Level 3.2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-parallel"></i>
                            <span>Menu Level 2.3</span>
                        </a>
                    </li>
                </ul>
        </li>
        <li>
            <a href="#">
                <i class="entypo-progress-2"></i>
                <span>ANUL II</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        <i class="entypo-clock"></i>
                        <span>ORAR</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-chat"></i>
                        <span>CHAT</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-flow-parallel"></i>
                        <span>MATERIALE</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-cascade"></i>
                                <span>CURS</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-branch"></i>
                                        <span>Menu Level 4.1</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-cascade"></i>
                                <span>LABORATOR</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <ul>
            <li>
                <a href="#">
                    <i class="entypo-flow-parallel"></i>
                    <span>Menu Level 2.1</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="entypo-flow-parallel"></i>
                    <span>Menu Level 2.2</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-cascade"></i>
                            <span>Menu Level 3.1</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-branch"></i>
                                    <span>Menu Level 4.1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-cascade"></i>
                            <span>Menu Level 3.2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="entypo-flow-parallel"></i>
                    <span>Menu Level 2.3</span>
                </a>
            </li>
        </ul>
        </li>
        <li>
            <a href="#">
                <i class="entypo-progress-3"></i>
                <span>ANUL III</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        <i class="entypo-clock"></i>
                        <span>ORAR</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-chat"></i>
                        <span>CHAT</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-flow-parallel"></i>
                        <span>MATERIALE</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-cascade"></i>
                                <span>CURS</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-branch"></i>
                                        <span>Menu Level 4.1</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-cascade"></i>
                                <span>LABORATOR</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <ul>
            <li>
                <a href="#">
                    <i class="entypo-flow-parallel"></i>
                    <span>Menu Level 2.1</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="entypo-flow-parallel"></i>
                    <span>Menu Level 2.2</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-cascade"></i>
                            <span>Menu Level 3.1</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="entypo-flow-branch"></i>
                                    <span>Menu Level 4.1</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="entypo-flow-cascade"></i>
                            <span>Menu Level 3.2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="entypo-flow-parallel"></i>
                    <span>Menu Level 2.3</span>
                </a>
            </li>
        </ul>
        </li>


        <li>
            <a href="#">
                <i class="entypo-battery"></i>
                <span>ANUL IV</span>
            </a>
            <ul>
                <li>
                    <a href="#">
                        <i class="entypo-clock"></i>
                        <span>ORAR</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-chat"></i>
                        <span>CHAT</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-flow-parallel"></i>
                        <span>MATERIALE</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-cascade"></i>
                                <span>CURS</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-branch"></i>
                                        <span>Menu Level 4.1</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-cascade"></i>
                                <span>LABORATOR</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        </li>
        </ul>
        </li>
        </ul>
        </li>

        </ul>


    </div>
    <div class="main-content">

        <div class="row">

            <!-- Profile Info and Notifications -->
            <div class="col-md-6 col-sm-8 clearfix">

                <ul class="user-info pull-left pull-none-xsm">

                    <!-- Profile Info -->
                    <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                            <?php echo $_SESSION['user'].'->'.$_SESSION['role'];?>
                        </a>


                    </li>

                </ul>
            </div>
            <!-- Raw Links -->
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                <ul class="list-inline links-list pull-right">
                    <li>
                        <a href="logout.php">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr />

        <script type="text/javascript">
            jQuery(document).ready(function($)
            {
                // Sample Toastr Notification
                setTimeout(function()
                {
                    var opts = {
                        "closeButton": true,
                        "debug": false,
                        "positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
                        "toastClass": "black",
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    <!-- toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts); -->
                }, 3000);


                // JVector Maps
                var map = $("#map");

                map.vectorMap({
                    map: 'europe_merc_en',
                    zoomMin: '3',
                    backgroundColor: '#383f47',
                    focusOn: { x: 0.5, y: 0.8, scale: 3 }
                });






                function getRandomInt(min, max)
                {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }
        </script>

        <?php
        include 'config.php';

        if (!$link) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }



        //  $registeredUsers = "SELECT username,nume,grupa FROM users INNER JOIN student ON users.id_user=student.id_user where student.an=1;";


       /* $registeredUsers = "select  cursuri.nume as materie,concat(adresa.strada,adresa.numar) as adresa,
users.nume as profesor,sala.nume as sala,start_ora,end_ora,orar.ziua as ziua
from semester
inner join saptamana
on saptamana.id_week=semester.id_semester
inner join cursuri
on saptamana.id_week=cursuri.id_semester
inner join adresa
on adresa.id_adresa=saptamana.id_week
inner join users
on users.id_user=adresa.id_adresa
inner join sala
on sala.id_sala=users.id_user
inner join orar
on orar.id_curs=cursuri.id_curs and orar.id_saptamana=saptamana.id_week
inner join grupa
on grupa.id_grupa=orar.id_grupa
where (semester.start_date<(SELECT CURDATE()) and (SELECT CURDATE())<semester.end_date)
and (grupa.id_grupa=(select CAST(student.grupa AS UNSIGNED) as grupa
from student
inner join users
on users.id_user=student.id_user
where users.username='".$_SESSION['user']."'))"; */
        $registeredUsers = "select   d.ziua,
		o.start_date start_ora,o.end_date end_ora,c.nume materie,up.nume as profesor,
        sa.nume as sala,maps as locatie,
       concat(a.strada,' nr. ',a.numar) adresa
 from 
licenta.users u
inner join licenta.student s on s.id_user=u.id_user
inner join licenta.orar o on o.id_grupa=s.grupa
inner join licenta.cursuri c on c.id_curs=o.id_curs
inner join licenta.profesor p on p.id_prof=c.id_profesor
inner join licenta.users up on up.id_user=p.fk_id_user
inner join licenta.sala sa on sa.id_sala=c.id_sala
inner join licenta.adresa a on a.id_adresa=o.id_adresa
inner join licenta.days d on d.id=o.id_day
where d.id=dayofweek(now())
and
u.username='".$_SESSION['user']."'";

        /*$resultRegisteredUsers = mysqli_query($link,$registeredUsers);
        $nrUsers = mysqli_num_rows($resultRegisteredUsers);*/


        $luni = $link->query($registeredUsers);

        //        /*if ($result->num_rows > 0) {
        // output data of each row

        if ($luni->num_rows > 0) {
            echo '<table class="table table-bordered responsive" ></tr><th>Materie</th><th>Adresa</th><th>Profesor</th><th>Sala</th><th>Start_ora</th>
<th>End_ora</th><th>Locatia</th></tr>';
            while ($row = $luni->fetch_assoc()) {
                $_POST['materie'] = $row["materie"];
                $_POST['adresa'] = $row["adresa"];
                $_POST['profesor'] = $row["profesor"];
                $_POST['sala'] = $row["sala"];
                $_POST['start_ora'] = $row["start_ora"];
                $_POST['end_ora'] = $row["end_ora"];
                $_POST['locatie'] = $row["locatie"];


                echo "<tr><td>" . $_POST['materie'] . "</td><td>" . $_POST['adresa'] . "</td><td>" . $_POST['profesor'] . "</td><td>" . $_POST['sala'] . "</td>
            <td>" . $_POST['start_ora'] . "</td><td>" . $_POST['end_ora'] . "</td><td>" . $_POST['locatie'] . "</td>></tr>";

            }
            echo '</table>';
        }
        else {
          //  Echo 'Azi n-ai ore poti sa iesi la bere!';

            echo '<div style="font-size:2.25em;color:red">Astazi esti liber !</div>';
        }
        /*
                $array = oci_parse($link, $registeredUsers);
                oci_execute($array,OCI_DEFAULT);
                oci_execute($array);


                // tab colegi
                echo "<table style='border:1' align='center'>";
                echo "</tr><th>Nume</th><th>Username</th><th>CNP</th><th>Grupa</th><th>Data_Inregistrari</th></tr>";
                while ($row = oci_fetch_array($array,OCI_ASSOC)) {
                    $_POST['Nume'] = $row["Nume"];
                    $_POST['Username'] = $row["Username"];
                    $_POST['Grupa'] = $row["Grupa"];
                    $_POST['Data_Inregistrari'] = $row["Data_Inregistrari"];
                    // print_r($row);
                    echo "<tr><td>". $_POST['Nume']."</td><td>". $_POST['Username']."</td><td>". $_POST['Grupa']."</td><td>". $_POST['Data_Inregistrari']."</td></tr>";
                }
        */

        //sf tab colegi
        ?>

        <!-- Footer -->
        <footer class="main">


            &copy; 2018 <strong>ConnectStud</strong>

        </footer>	</div>




    <link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

    <!-- Bottom Scripts -->
    <script src="assets/js/gsap/main-gsap.js"></script>
    <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/joinable.js"></script>
    <script src="assets/js/resizeable.js"></script>
    <script src="assets/js/neon-api.js"></script>
    <script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script>
    <script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
    <script src="assets/js/rickshaw/rickshaw.min.js"></script>
    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/toastr.js"></script>
    <script src="assets/js/neon-chat.js"></script>
    <script src="assets/js/neon-custom.js"></script>
    <script src="assets/js/neon-demo.js"></script>
</body>
</html>