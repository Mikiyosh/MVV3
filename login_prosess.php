<?php
session_start();

// フォームデータの取得
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

// ユーザー名とパスワードの検証
if ($username === 'test' && $password === 'gs') {
    // ログイン成功
    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = true;
    header('Location: sv_input.php'); // ログイン成功後のリダイレクト先
    exit;
} else {
    // ログイン失敗
    $_SESSION['login_error'] = 'Invalid username or password.';
    header('Location: login.php'); // ログイン失敗後のリダイレクト先
    exit;
}
?>
