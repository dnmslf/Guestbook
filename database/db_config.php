<?php
/**
 * Created by PhpStorm.
 * User: dnmslf
 * Date: 09.06.2017
 * Time: 05:27
 */

include "db_variables.php";

//Mysql Connection
$connect = mysqli_connect(
    $hostname,//Hostname
    $db_username,//Database User Name
    $db_password,//Database User Password
    $db_name//Database
                        );

//Connection Test
if($connect){

    //Language And Character Setting
    mysqli_query($connect,"SET NAMES utf8");
    mysqli_query($connect,"SET CHARACTER SET utf8");
    mysqli_query($connect,"SET COLLATION_CONNECTION='utf8_general_ci'");

    //Sessions Start
    session_start();

    if(isset($_SESSION['email'])) {
        $user_email = $_SESSION['email'];
        $query = "SELECT * FROM users WHERE email = '$user_email'";
        $qry = mysqli_query($connect,$query);
        $find = mysqli_fetch_array($qry);
        $user_name = $find["name"];
        $user_surname = $find["surname"];
        $user_id = $find["id"];
        $user_group = $find["user_group"];
    }

}

else {
    die("Bağlantınız Yapılamadı" . mysqli_connect_error());
}
