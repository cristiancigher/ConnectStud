<?php
function connectDB(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "siteDAW";
    $conn = new mysqli($servername, $username, $password, $dbName);
    return $conn;
}

function login($email, $password){
    $conn = connectDB();
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "SELECT * from usersLocal WHERE email = '{$email}' and password = '{$password}'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1){
        return TRUE;
    }else {
        return FALSE;
    }
}

function addUsers($firstName, $lastName, $email, $password){
    $conn = connectDB();
    $firstName = mysqli_real_escape_string($conn, $firstName);
    $lastName = mysqli_real_escape_string($conn, $lastName);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "SELECT * from usersLocal WHERE email = '{email}'";
    $result = $conn->query($sql);
    $error = NULL;
    if ($result->num_rows ==0) {
        $sql = "INSERT INTO usersLocal VALUES ('{$firstName}', '{$lastName}', '{$email}', '{$password}')";
        $result = $conn->query($sql);
    }else {
        $error='EMAIL EXIST! Please take another email or LOGin';
    }
    return $error;
}

function addUsersFB($fuid, $ffname, $femail){
    $conn = connectDB();
    $fuid = mysqli_real_escape_string($conn, $fuid);
    $ffname = mysqli_real_escape_string($conn, $ffname);
    $femail = mysqli_real_escape_string($conn, $femail);
    $sql = "SELECT * from users WHERE Fuid = '{$fuid}'";
    $result = $conn->query($sql);
    if ($result->num_rows ==0) {
        $sql = "INSERT INTO users (Fuid, Ffname, Femail) VALUES ('{$fuid}', '{$ffname}', '{$femail}')";
        $result = $conn->query($sql);
    }else {
        $sql = "UPDATE users SET Ffname = {$ffname}, Femail = {$femail} where Fuid = {$fuid}";
        $result = $conn->query($sql);
    }
}

function pharseXML(){
    $xml=simplexml_load_file("dataSite.xml") or die("Error: Cannot create object");
    $dataXML=[];
    $i=0;
    foreach($xml->children() as $shop) {
        $i++;
        $dataXML[$i][1] = $shop->Category;
        $dataXML[$i][2] = $shop->Title;
        $dataXML[$i][3] = $shop->Price;
        $dataXML[$i][4] = $shop->imagePath;
        $dataXML[$i][5] = $shop->Description;
    }
    return $dataXML;
}
