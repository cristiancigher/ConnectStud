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

    <title>ConnectStud | Colegi</title>




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

        <?php
        include 'config.php';

        if (!$link) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }



        //  $registeredUsers = "SELECT username,nume,grupa FROM users INNER JOIN student ON users.id_user=student.id_user where student.an=1;";


        $registeredUsers = "SELECT DISTINCT 
    up.nume AS profesor, up.email, p.telefon
FROM
    licenta.users u
        INNER JOIN
    licenta.student s ON s.id_user = u.id_user
        INNER JOIN
    licenta.orar o ON o.id_grupa = s.grupa
        INNER JOIN
    licenta.cursuri c ON c.id_curs = o.id_curs
        INNER JOIN
    licenta.profesor p ON p.id_prof = c.id_profesor
        INNER JOIN
    licenta.users up ON up.id_user = p.fk_id_user
        INNER JOIN
    licenta.sala sa ON sa.id_sala = c.id_sala
        INNER JOIN
    licenta.adresa a ON a.id_adresa = o.id_adresa
WHERE
    u.username ='".$_SESSION['user']."'";
        $resultRegisteredUsers = mysqli_query($link,$registeredUsers);
        $nrUsers = mysqli_num_rows($resultRegisteredUsers);


        $result = $link->query($registeredUsers);

        //        /*if ($result->num_rows > 0) {
        // output data of each row
        ?>
        <div class="row">
            <div class="col-sm-3">

                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end=<?php echo $nrUsers ?> data-postfix="" data-duration="1500" data-delay="0">0</div>

                    <h3>Profesori</h3>
                </div>
            </div>
        </div>
        <?php
        echo '<table class="table table-bordered responsive" ></tr><th>Profesor</th><th>Email</th><th>Telefon</th></tr>';
        while($row = $result->fetch_assoc()) {
            $_POST['profesor'] = $row["profesor"];
            $_POST['email'] = $row["email"];
            $_POST['telefon'] = $row["telefon"];

            echo "<tr><td>". $_POST['profesor']."</td><td>". $_POST['email']."</td><td>". $_POST['telefon']."</td></tr>";

        }
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