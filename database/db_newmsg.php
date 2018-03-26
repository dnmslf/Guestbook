<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Anasayfa Yönlendirme Sayfası</title>
</head>
<body>
</body>
</html>

<?php

include("db_config.php");



if(isset($user_email)) {

	$message_title  = $_POST["title"];
	$message_message= $_POST["message"];

	if ( $message_title == "" or $message_message == "" ) {
		?>
        <script>alert("Lütfen Tüm Alanları Doldurunuz !"); history.back(-1);</script> <?php
		die();
	}

	$query = "INSERT INTO messages( `name`, `surname`, `email`, `title`, `msg`, `created_at`,`status` ,`id`,`user_id`) 
              VALUES( '$user_name', '$user_surname', '$user_email', '$message_title','$message_message' , CURRENT_TIMESTAMP, 0,NULL,'$user_id')";


}else{

	$message_email  = $_POST["email"];
	$message_name   = $_POST["name"];
	$message_surname= $_POST["surname"];
	$message_title  = $_POST["title"];
	$message_message= $_POST["message"];

	if($message_email== "" or
	   $message_name=="" or
	   $message_surname=="" or
	   $message_title== "" or
	   $message_message=="" )
	{
		?><script>alert("Lütfen Tüm Alanları Doldurunuz !"); history.back(-1);</script> <?php
		die();
	}

$query = "INSERT INTO messages( `name`, `surname`, `email`, `title`, `msg`, `created_at`,`status` ,`id`,`user_id`) 
              VALUES( '$message_name', '$message_surname', '$message_email', '$message_title','$message_message' , CURRENT_TIMESTAMP, 0,NULL,0 )";

}


	$endquery=mysqli_query($connect, $query);
	if ($endquery){
		echo "Mesajınız Gönderildi";
		echo "</br>";
		header("refresh:3;url= /Guestbook");
		die( '3 saniye sonra Anasayfaya gideceksiniz. Bu süreyi beklememek için
        <a href="/Guestbook">buraya tıklayın</a>' );
	}
	else{
		die('Mesajınız Gönderilemedi');
	}