<?php

    echo $guestbook_messages_title;

    //if Entered User
    if($user_email){
        $get_messages = mysqli_query($connect,
            "SELECT * FROM messages WHERE status=1 or user_id=$user_id order by status,id DESC ");
        $status_message = "<th> Status </th>";
    }

    //İf No Entered User
    else{
        $get_messages = mysqli_query($connect,
            "SELECT * FROM messages WHERE status=1 order by id desc  ");
    }

    ?>




<?php
    if ($get_messages) {?>

        <table align="center" style="text-align: center" border="0" >
            <tr style="background: orangered; color: white;">

                <th> Name </th>
                <th> Surname </th>
                <th> Created At </th>
                <th> Title </th>
                <th> Message </th>
                <?php echo $status_message; ?>
                <th> Comment Part </th>
                <th> Number of Comment </th>

            </tr>
        <?php

        while($row = mysqli_fetch_assoc($get_messages)) {

            $msg_id = $row["id"];
            $msg_user_id = $row["user_id"];

            if($msg_user_id == $user_id ){
                if($row["status"]==1){
                    $status= "<b><a style='color: green'>Published</a></b>";
                }if($row["status"]==0){
                    $status= "<b><a style='color: red'>in Review</a></b>";
                }
            }else{
                $status="Published";
            }

            $comment_num_query=mysqli_query($connect,
                "SELECT * FROM comment WHERE comment.msg_id=$msg_id");//Comment Number Query
            $comment_num=mysqli_num_rows($comment_num_query);//Comment Number

            ?>

            <tr>

                <td><b>
                        <a style="text-decoration: none; color: black" href="./view_user.php?id=<?php echo $msg_user_id; ?>">
                        <?php echo ucwords(strtolower($row["name"])); ?>
                        </a>
                    </b> </td>

                <td><b>
                        <a style="text-decoration: none; color: black" href="./view_user.php?id=<?php echo $msg_user_id; ?>">
                        <?php echo ucwords(strtolower($row["surname"])); ?>
                        </a>
                    </b> </td>

                <td> <?php echo $row["created_at"]; ?> </td>

                <td> <?php echo $row["title"]; ?> </td>

                <td style='width: 455px'> <?php echo $row["msg"]; ?> </td>

                <?php if($user_id) {?>
                <td> <?php echo $status; ?> </td>
                <?php } ?>
                <td>
                    <a href="./comment.php?id=<?php echo $msg_id; ?>">
                        <button>Go Comments</button>
                    </a>
                </td>

                <td style='text-align: center'> <?php echo $comment_num; ?> </td>

            </tr>

            <?php
        }
        ?>
        </table>
        <?php
    }else {
        echo "Birşey Bulunamadı";
    }


