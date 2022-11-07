<?php

session_start();

require 'page.php';

$content = '';

$username = $_POST['username'];
$password = $_POST['password'];

// initial save
// $is_logged_on = isset($_SESSION['username']);

if (isset($_POST['pageType']) && $_POST['pageType'] == 'logon') {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
} else if (isset($_POST['pageType']) && $_POST['pageType'] == 'logoff') {
    session_unset();
    // $is_logged_on = false;
}

if (isset($_SESSION['username'])) {
    $content .= '
    <br>You are logged in as '.$username.'!
    <form action="login.php" method="POST">
        <input type="submit" id="logout" name="logout" value="Logout">
        <input type="hidden" id="pageType" name="pageType" value="logoff">
    </form>';
} else {
    $content .= '
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="hidden" id="pageType" name="pageType" value="logon">
        <input type="submit" value="Login">
    </form>
    ';
}

$user_data = [
    "username" => $username,
    "password" => $password
];

$o_login_page = new Page();
$login_html = $o_login_page->create_page('Login', $content);
echo $login_html;
