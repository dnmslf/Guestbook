<?php
/**
 * Created by PhpStorm.
 * User: dnmslf
 * Date: 22.07.2017
 * Time: 01:25
 */

    /* if(    $_POST["name"]==""
         or $_POST["email"]==""
         or $_POST["subject"]==""
         or $_POST["message"]=="") {
     echo "Lütfen boş yer bırakmayın!";
 } else {*/
     $ad = strip_tags($_POST["name"]);
     $eposta = strip_tags($_POST["email"]);
     $konu = strip_tags($_POST["subject"]);
     $mesaj = strip_tags($_POST["message"]);
     $icerik = "Ad: " . $ad . "<br/>E-Posta:". $eposta ." <br/>" . $mesaj;
     mail("dnmslf1@gmail.com", $konu, $icerik);
     echo "Mesajınız Gönderildi! Teşekkürler.";
// }
