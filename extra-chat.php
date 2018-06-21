<?php

session_start();
include 'config.php';

$user=$_SESSION['user'];

$querryLastID="select * from licenta.chat";
$resultLastId = mysqli_query($link,$querryLastID);
$MaxId = mysqli_num_rows($resultLastId)-20;

$idUser = "select student.id_user
from student
inner join
users
on users.id_user=student.id_user
where users.username='".$_SESSION['user']."'";

$query = "select faculty, an from student where id_user=(select student.id_user
from student
inner join
users
on users.id_user=student.id_user
where users.username='".$_SESSION['user']."')";

//{$idUser}";
$result = mysqli_query($link, $query);
while($row = $result->fetch_assoc()){
    $userFaculty = $row['faculty'];
    $userAn = $row['an'];
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

    <title>ConnectStud | Chat</title>




    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/neon-core.css">
    <link rel="stylesheet" href="assets/css/neon-theme.css">
    <link rel="stylesheet" href="assets/css/neon-forms.css">
    <link rel="stylesheet" href="assets/css/custom.css">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <![endif]-->


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
                        <a href="COLEGI.PHP">
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

<!--            <div class="col-md-6 col-sm-4 clearfix hidden-xs">
                <ul class="list-inline links-list pull-right">
                    <li>
                        <a href="logout.php">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>

            </div>-->

        </div>

        <hr />
        <script>
            var user = "<?php echo ($user); ?>";
            var an = "<?php echo ($userAn); ?>" ;
            var faculty = "<?php echo ($userFaculty); ?>";
            var lastId="<?php echo ($MaxId); ?>";
            var timeO;
            function getNewEntrys(){
                $.ajax({
                    type: "GET",
                    url: 'phpAjaxCall.php',
                    data: {call: "getData", an: an, faculty: faculty, id: lastId},
                    dataType: 'json',
                    success: function(values)
                    {
                        var len = values.length;
                        decision = "right";
                        for (var i = 0; i < len; i++) {
                                    var userData = values[i].user;
                                    var msg = values[i].msg;
                                    if (userData !== user){
                                        decision = "left";
                            }
debugger;
                            $(".chat").append("<li class='"+decision+" clearfix'><span class='chat-img pull-"+decision+"'></span>" +
                                "<div class='chat-body clearfix' pull-"+decision+">" +
                                "<div class='header' pull-"+decision+">" +
                                "<strong class='pull-"+decision+" primary-font'>"+userData+"</strong> " +
                                "</div>" +
                                "<br><p align='"+decision+"'>"+msg+"</p>" +
                                "</div>" +
                                "</li>");
                        }
                        if (len>0) lastId=values[i-1].id;
                    },
                    error: function(data,jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                        console.log(data);
                    }
                });
                timeO=setTimeout(getNewEntrys,1000);
            };
            $(document).ready(function(){
                getNewEntrys();
                $("#btn-chat").click(function(){
                    //debugger;

                    msg = $('#btn-input').val();
                    decision = "right";


                    $.ajax({
                        url: "phpAjaxCall.php",
                        type: "post",
                        data: {call: "insertData", an: an, faculty: faculty, user: user, msg: msg},
                        success: function (response) {
                            getNewEntrys();
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
                    /*$("ul").append("<li class='"+decision+" clearfix'><span class='chat-img pull-"+decision+"'></span>" +
                     "<div class='chat-body clearfix'>" +
                     "<div class='header'>" +
                     "<strong class='pull-"+decision+" primary-font'>"+user+"</strong> " +
                     "</div>" +
                     "<br><p>"+msg+"</p>" +
                     "</div>" +
                     "</li>");*/
                    $("#btn-input").attr("placeholder", "Type your message here...").val("").focus().blur();
                });

            });
        </script>
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
                };



        </script>

        <?php
        include 'config.php';
        $registeredUsers = "select * from licenta.student s
inner join licenta.users u on u.id_user=s.id_user
where s.an=(select an from licenta.student where id_user=(select id_user from licenta.users
where username='cristy'))";
        $resultRegisteredUsers = mysqli_query($link,$registeredUsers);
        $nrUsers = mysqli_num_rows($resultRegisteredUsers);
        ?>

        <div class="row">
            <div class="col-sm-3">

                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end=<?php echo $nrUsers ?> data-postfix="" data-duration="1500" data-delay="0">0</div>

                    <h3>Colegi din an</h3>
                    <p></p>
                </div>

            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-15">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span class="glyphicon glyphicon-comment"></span> Chat
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                </button>
                                <ul  class="dropdown-menu slidedown">
                                    <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-refresh">
                            </span>Refresh</a></li>
                                    <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-ok-sign">
                            </span>Available</a></li>
                                    <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-remove">
                            </span>Busy</a></li>
                                    <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-time"></span>
                                            Away</a></li>
                                    <li class="divider"></li>
                                    <li><a href="http://www.jquery2dotnet.com"><span class="glyphicon glyphicon-off"></span>
                                            Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="chat">

                            </ul>
                        </div>
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here...">
                                <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="chat"></div>

            </div>
        </div>

        <!-- Footer -->
        <footer class="main">


            &copy; 2018 <strong>ConnectStud</strong>

        </footer>	</div>
</div>

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