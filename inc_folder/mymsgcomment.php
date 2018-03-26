
<h1 style="text-align: center"> Mesajlarınıza Yapılan Yorumlar </h1>

<?php

$sqlone=mysqli_query($connect,
	"SELECT * FROM messages,comment WHERE messages.email='$user_email' and comment.msg_id=messages.id order by id desc");




if ($sqlone->num_rows > 0) {
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

	while($rowone = $sqlone -> fetch_assoc()) {

		echo "<tr>";

		echo "<td style='text-align: center'>".$rowone["c_id"]."</td>";
		echo "<td style='text-align: center'>".$rowone["msg_id"]."</td>";
		echo "<td style='text-align: center'>".$rowone["user_id"]."</td>";
		echo "<td style='text-align: center'>".$rowone["name"]."</td>";
		echo "<td style='text-align: center'>".$rowone["surname"]."</td>";
		echo "<td style='text-align: center'>".$rowone["created_at"]."</td>";
		echo "<td style='text-align: center; width: 455px'>".$rowone["comment"]."</td>";
		echo "</tr>";





	}
}


else {

	echo "Birşey Bulunamadı";

}

?>