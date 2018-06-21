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
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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

                        $("ul").append("<li class='"+decision+" clearfix'><span class='chat-img pull-"+decision+"'></span>" +
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

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-comment"></span> Chat
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </button>
                            <ul class="dropdown-menu slidedown">
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
        </div>
    </div>
