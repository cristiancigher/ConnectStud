<?php
include 'config.php';
//$_POST['faculty']=1;
//$_POST['an']=4;
//$_POST['call']='getData';
error_reporting(E_ALL);
function getData($faculty, $an,$id){
    $query = "select id,user, msg from chat where faculty = '{$faculty}' and an={$an} and id>{$id}  ORDER BY id asc ";
    $result = mysqli_query($GLOBALS['link'],$query);
    $array =array();
    while ($row = $result->fetch_assoc()){
       // $array =$array. '{"user":"'.$row['user'].'","msg":"'.$row['msg'].'"},';
        $arrayData = array("user"=>"{$row['user']}","msg"=>"{$row['msg']}","id"=>"{$row['id']}");
        $array[]=$arrayData;
        //$array = $row;
    }
    //$array = $array.']';
   // $array = str_replace("},]","}",$array);
    //print json_encode($array);
    return json_encode($array);
}

function insertData($an, $faculty, $user, $msg){
    echo $query = "INSERT INTO chat(an, faculty, user, msg) values({$an},'{$faculty}','{$user}','{$msg}')";
    mysqli_query($GLOBALS['link'], $query);
}

if(isset($_POST['call'])){
    if ($_POST['call']=='insertData'){
        insertData($_POST['an'], $_POST['faculty'], $_POST['user'], $_POST['msg']);
    }

}

if (isset($_GET['call'])){
    if ($_GET['call']=='getData'){
        echo getData($_GET['faculty'],$_GET['an'],$_GET['id']);
    }
}
?>