<?php
/**
 * Created by PhpStorm.
 * User: dnmslf
 * Date: 25.07.2017
 * Time: 22:47
 */
include "database/db_config.php";
if(!isset($user_name)){
    $user_name="Bu Alana Giriş İzniniz Yok";
    ?> <script>alert(" Bu Alana Giriş Yetkiniz Bulunmamaktadır Lütfen Giriş Yapınız!");history.back(-1);</script> <?php
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="Shortcut Icon" href="img/fav.png" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ucwords(strtolower($user_name)); ?> Adlı Kullanıcın Bölümü</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <?php
        include "header.php";

        if(isset($user_name)){
    
            ?>
            <img src="img/profile_photo/">
            
            
            
            <?php
            
            
            
            
            
    }


     ?>

</body>
</html>


