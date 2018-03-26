<div id="login" >
    <hr/>


<?php

//İf Entered User
if(isset($user_email)){

    //Welcome Message
    $welcome_message = "Hi! ".$user_name." ".$user_surname . " Welcome. "."<br>"."<br>";
    echo ucwords(strtolower($welcome_message));

    //Buttons
    echo $member_button;
    echo $logout_button;

}

//İf No Entered User
else{
    include "login_form.php";
}
?>

<hr />
</div>
<div id="user_control">
	<table border="0">
		<tr>
			<td>
				<button type="button" onclick=window.location.href="./newmessage.php">Write To Book</button>
			</td>
			<td>
				<button type="button" onclick=window.location.href="./contact.php">Contact</button>
			</td>
            <?php if(isset($user_email)){?>
			<td>
				<button type="button" onclick=window.location.href="./mymsg.php">View My Message</button>
			</td>
			<td>
				<button type="button" onclick=window.location.href="./viewcomment.php">View All Comment</button>
			</td>
            <?php } ?>
		</tr>
	</table>
</div>
<hr/>
