<?php

include "database/db_config.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="Shortcut Icon" href="img/fav.png" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Yorumlar Bölümü</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php include "header.php"; ?>

<div align="center"><?php
		$msgid=$_GET["id"];

				    if(!isset($_SESSION['email'])){
					   echo "Yorum Yapabilmek İçin Giriş Yapmalısınız!";

				    }else{

		            $uemail=$_SESSION['email'];
		            $query="select * from users WHERE email='$uemail'";
					$qry=mysqli_query($connect,$query);
					while($cikart = mysqli_fetch_array($qry)) {
						    $user=$cikart["id"];
					    }?>
	    <form method="post" action="database/db_newcomment.php">
            <table border="0"  width=310 style="text-align: center">
                <h2>Yorumunuz:</h2>
                <input type="hidden" name="msgid" id="msgid" value="<?=$msgid ?>" />
                    <td><textarea name="comment" rows="10" style="width: 888px" id="comment"></textarea></td></tr>
                <tr><td colspan="2"> <input type="submit" name="msg_submit" id="submit" value="Kaydet"/> </td></tr>

            </table>

        </form>
				   <?php }?>


</div>

        <h1 style="text-align: center"> Yapılan Yorumlar </h1>

		<?php


		$get=mysqli_query($connect,
			"SELECT * FROM comment,users WHERE comment.msg_id=$msgid and comment.user_id=users.id order by c_id desc ");



			if ($get->num_rows > 0) {
			?>

        <table align="center" style="width: %100 ;" border="0" >
            <tr style="background: orangered; color: white;">
                <th>Yorum İd</th>
                <th>Mesaj İd</th>
                <th>Kişi İd</th>
                <th>İsmi</th>
                <th>Soyismi</th>
                <th>Yorum Tarihi</th>
                <th>Yorumu</th>
            </tr><?php

				while($row = $get->fetch_assoc()) {

					echo "<tr>";

					echo "<td style='text-align: center'>".$row["c_id"]."</td>";
					echo "<td style='text-align: center'>".$row["msg_id"]."</td>";
					echo "<td style='text-align: center'>".$row["user_id"]."</td>";
					echo "<td style='text-align: center'>".$row["name"]."</td>";
					echo "<td style='text-align: center'>".$row["surname"]."</td>";
					echo "<td style='text-align: center'>".$row["created_at"]."</td>";
					echo "<td style='text-align: center; width: 455px'>".$row["comment"]."</td>";
					echo "</td>";
					echo "</tr>";


					$uid=$row["user_id"];
				}
            ?></table><?php }


			 else {

				echo "Birşey Bulunamadı";

			}

			$connect->close();
			?>



</body>
</html>