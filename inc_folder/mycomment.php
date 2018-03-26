<h1 style="text-align: center"> Sizin Yaptığınız Yorumlar </h1>

<?php


$get=mysqli_query($connect,
	"SELECT * FROM users,comment WHERE comment.user_id=$user_id and comment.user_id=users.id order by c_id desc ");



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
		echo "</tr>";





	}
	}


	else {

		echo "Birşey Bulunamadı";

	}




	?></table>