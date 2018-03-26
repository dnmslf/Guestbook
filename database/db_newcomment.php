<?php
/**
 * Created by PhpStorm.
 * User: dnmslf
 * Date: 26.07.2017
 * Time: 16:33
 */


include "db_config.php";

session_start();

$comment=$_POST["comment"];
$email=$_SESSION['email'];
$mid=$_POST["msgid"];

$query="select * from users WHERE email='$email'";
$qry=mysqli_query($connect,$query);
$find = mysqli_fetch_array($qry);
$uid=$find["id"];


if(empty($comment)){
	echo "Lütfen Yorum Yazınız Ve Öyle Gönderiniz"."<br>";
	die( 'Anasayfaya gitmek için
        <a href="/Guestbook">buraya tıklayın</a>' );
}if(empty($mid)){
	echo "Lütfen Bir Mesaja Yorum Yazın Bu Şekilde Hiç Bir Yere Yorum Yazılamaz";
	die( 'Anasayfaya gitmek için
        <a href="/Guestbook">buraya tıklayın</a>' );
}else {
	$query2 = "INSERT INTO `comment` (`c_id`, `user_id`, `msg_id`, `comment`, `created_at`, `status`) 
		  VALUES(NULL,'$uid','$mid','$comment',CURRENT_TIMESTAMP,0) ";

	$endquery=mysqli_query( $connect, $query2 );




	if ( $endquery ) {
		echo "Yorumunuz Gönderildi";
		echo "</br>";
		header( "refresh:5;url= /Guestbook" );
		die( '5 saniye sonra Anasayfaya gideceksiniz. Bu süreyi beklememek için
        <a href="/Guestbook">buraya tıklayın</a>' );
	} else {
		die( 'Yorumunuz Gönderilemedi' );
	}

}