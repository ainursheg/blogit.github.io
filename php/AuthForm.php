<?php 

include('includes/db.php');

?>

<form method="GET" action="/handle.php">
    <input type="text" placeholder="Логин" name="login"> 
    <br><br><br>
    <input type="password" placeholder="Пароль" name="password">
     <br><br>
    <input type="submit" value="Войти">
</form>