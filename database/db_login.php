<?php
/**
 * Created by PhpStorm.
 * User: dnmslf
 * Date: 25.07.2017
 * Time: 21:40
 */

include ("db_config.php");


$email=$_POST["email"];
$password=md5($_POST["password"]);

if(empty($email) or empty($password)){
?> <script>alert(" Kullanıcı Adı ve/veya Şifre Alanını Doldurunuz !");history.back(-1);</script> <?php
}  else{

	$query="select * from users WHERE email='$email' and password='$password' ";
	$qry=mysqli_query($connect,$query);
	$rows=mysqli_num_rows($qry);

	if($rows!=0){
		$_SESSION['email'] = $email;
	echo "Başarılı Bir Şekilde Giriş Yaptınız";
	echo "<br>";
	echo "0 Saniye Sonra Ana Sayfaya Yönlendirileceksiniz Beklememek İçin ";
	echo '<a href=/Guestbook>Buraya Tıklayınız</a>';
		header("refresh:0;url= /Guestbook");

	}
	else{
		?> <script>alert(" Kullanıcı Adı ve/veya Şifre Hatalı !");history.back(-1);</script> <?php
	}

}