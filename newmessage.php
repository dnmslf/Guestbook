<?php
include ("database/db_config.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Deftere Yaz</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<?php
include "inc_folder/header.php";
?>

<form id="message_form" name="message_form" method="post" action="database/db_newmsg.php"><div align="center">
    <!-- Not View Registered Users Start-->

        <table border="0"  width=310 style="text-align: center">

        <?php
        if(isset($user_email)){

	        ?>
            <tr><td>Başlık:</td><td><input type="text" name="title" id="title"/></td></tr>
            <tr><td>Mesajınız:</td><td><textarea name="message" rows="10" style="width: 168px" id="message"></textarea></td></tr>

	        <?php
        }
            else{
	            ?>

                <tr><td>E-Posta:</td><td><input type="email" name="email" id="email" style="align-content: center"/></td></tr>
                <tr><td>Ad:</td><td><input type="text" name="name" id="name" /></td></tr>
                <tr><td>Soyad:</td><td><input type="text" name="surname" id="surname" /></td></tr>
                <tr><td>Başlık:</td><td><input type="text" name="title" id="title"/></td></tr>
                <tr><td>Mesajınız:</td><td><textarea name="message" rows="10" style="width: 168px" id="message"></textarea></td></tr>
	            <?php }   ?>

            <tr><td colspan="2"> <input type="submit" name="msg_submit" id="submit" value="Kaydet"/> </td></tr>

    </table>
</div>
</form>

</body>
</html>

