<h1 style="text-align: center"> Benim Mesajlarım </h1>

<?php
if(isset($user_email)){
	$get = mysqli_query($connect,
		"SELECT * FROM messages WHERE user_id=$user_id order by status,id DESC ");//Mesajlarımızı Çekiyoruz


?>
<table align="center" style="width: %100 ;" border="0" >
	<tr style="background: orangered; color: white;">

		<th>Oluşturulma Tarihi</th>
		<th>Başlık</th>
		<th>Mesajı</th>
		<?php
		if(isset($user_email)){
			$msg_num_query=mysqli_query($connect,"SELECT * FROM messages WHERE messages.user_id=$user_id");
			$msg_num=mysqli_num_rows($msg_num_query);
			if(isset($msg_num)){
				?><th>Durumu</th><?php
			}}
		?>
		<th>Yorum Bölümü</th>
		<th style="width:10px">Yorum Sayısı</th>

	</tr>

	<?php
	if ($get -> num_rows > 0) {

		while($row = $get->fetch_assoc()) {
			$id=$row["id"];
			$msg_user_id=$row["user_id"];
			if($row["status"]==1){
				$status= "<b><a style='color: green'>Yayında</a></b>";
			}if($row["status"]==0){
				$status= "<b><a style='color: red'>İncelemede</a></b>";
			}


			echo "<tr>";



			echo "<td style='text-align: center'>".$row["created_at"]."</td>";

			echo "<td style='text-align: center'>".$row["title"]."</td>";


			echo "<td style='text-align: center; width: 455px'>".$row["msg"]."</td>";

			if(isset($user_id)){
				if($msg_user_id==$user_id){
					echo "<td style='text-align: center'>".$status."</td>";}
				else{
					echo "<td style='text-align: center'>"."Yayında"."</td>";
				}}


			echo "<td style='text-align: center'>";?>
		<a href="../comment.php?id=<?php echo $id; ?>">
				<button>Yorumlara Git</button>
			</a><?php echo "</td>";

			$comment_num_query=mysqli_query($connect,
				"SELECT * FROM comment WHERE comment.msg_id=$id");//Comment Number Query
			$comment_num=mysqli_num_rows($comment_num_query);//Comment Number

			echo "<td style='text-align: center'>".$comment_num."</td>";
			echo "</tr>";




		}



	} else {

		echo "Birşey Bulunamadı";

	}
	}
	?></table>
