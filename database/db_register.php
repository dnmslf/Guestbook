<?php
/**
 * Created by PhpStorm.
 * User: dnmslf
 * Date: 10.06.2017
 * Time: 05:12
 */


include ("db_config.php");


//Register Valuesziyaret2
$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$about=$_POST["about"];

if(empty($about)){
	$about="Hakkında Bir Bilgi Yok";
}
if(empty($name)){
	echo "Lütfen Adınızı Giriniz";
}else if (empty($surname)){
	echo "Lütfen Soyadınızı Giriniz";
}else if (empty($email)){
	echo "Lütfen Mailinizi Giriniz";
}else if(empty($password)){
	echo "Lütfen Şifrenizi Giriniz";
} else{



$query = "INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `about_me`, `created_at`, `status`)
        VALUES (NULL, '$name', '$surname', '$email', '$password', '$about', CURRENT_TIMESTAMP, '0')";

mysqli_query($connect,$query);
	header("refresh:5;url= /Guestbook");
echo "Merhaba ".$name." ".$surname."<br>"." Üye Kaydınız Oluşturuldu Giriş Yapabilirsiniz"."<br>";
die( '5 saniye sonra Anasayfaya gideceksiniz. Bu süreyi beklememek için
<a href="/Guestbook">buraya tıklayın</a>' );
}








