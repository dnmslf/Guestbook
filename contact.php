<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <link rel="stylesheet" href="/Guestbook/css/style_contact.css" type="text/css" />
</head>
<body>


<h1>İletişim Form</h1>

<form class="cf" action="/Guestbook/database/db_contact.php" method="post">
    <div class="half left cf">
        <input type="text" id="name" placeholder="İsim">
        <input type="email" id="email" placeholder="E-Mail Adresiniz">
        <input type="text" id="subject" placeholder="Konu">
    </div>
    <div class="half right cf">
        <textarea name="message" type="text" id="message" placeholder="Mesaj"></textarea>
    </div>
    <input type="submit" value="Gönder" id="contact_submit">
    <input type="button" onclick=window.location.href="/Guestbook" value="Ana Sayfaya Geri Dön" id="contact_submit">
</form>

</body>
</html>