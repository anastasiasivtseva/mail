<?php 
mail($_POST['mail'], 'Регистрация', 'Ваш логин: ' . $_POST['login'] . ' Ваш пароль: ' . $_POST['password']);
header('Location: http://aa/mail/mail.php');
 ?>