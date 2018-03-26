<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Kayıt Ol</title>
    <style type="text/css">
        body {
            background-color: #CCC;
            text-align:center;
        }

        .about{
            width: 168px;
        }
    </style>
</head>

<body>

<img  src="img/logo.png" alt="logo" height="100%" width="100%" longdesc="/" style=" max-height: 120px; max-width: 257px;" />

<div class="login" align="center" style="background: #c5f7c5	;">
    <hr />
    <button type="button" onclick=window.location.href="index.php" >Ana Sayfa</button>

    <hr />
</div>
<form id="register_form" name="register_form" method="post" action="database/db_register.php"><div align="center">
    <table border="0"  width=310 style="text-align: center">
        <tr><td>Ad*:</td><td><input type="text" name="name" id="name" /></td></tr>
        <tr><td>Soyad*:</td><td><input type="text" name="surname" id="surname" /></td></tr>
        <tr><td>E-Posta*:</td><td><input type="email" name="email" id="email" style="align-content: center"/></td></tr>
        <tr><td>Parola*:</td><td><input type="password" name="password" id="password"/></td></tr>
       <!-- Burayı Tekrar Yap -->
        <tr><td>Parola (Tekrar)*:</td><td><input type="password" name="password2" id="password2"/></td></tr>
        <tr><td>Hakkınızda:</td><td><textarea name="about" rows="10" style="width: 168px" id="about"></textarea></td></tr>
        <tr><td colspan="2"> <input type="submit" name="submit_comment" id="submit_comment" value="Üyeliğimi Gerçekleştir"/> </td></tr>
        <tr><td colspan="2" style="font-size:12px;"> * Olan Alanları Doldurmadan Üye Olamazsınız </td></tr>
    </table>

</form>

</body>
</html>
