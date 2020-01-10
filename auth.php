<?php
session_start();
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = clearData($_POST['login']);
    $password = clearData($_POST['password']);
    session_start();
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['user_login'] = $login;
    header("Location: index.php?page=main");
    exit;
}

if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header("Location: index.php?page=auth");
    exit;
}
if (!(isset($_SESSION['user_login']) and $_SESSION['ip'] == $_SERVER['REMOTE_ADDR'])) {
    ?>
    <div class="auth">
        <h2>Вход в систему</h2>
        <form method="POST">
            <div class="auth_input"><label>Логин: <input type="text" name="login"></label></div>
            <div class="auth_input"><label>Пароль: <input type="password" name="password"></label></div>
            <div class="auth_input"><input type="submit"></div>
        </form>
    </div>
    <?php
}
?>