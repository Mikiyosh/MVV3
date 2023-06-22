<?php
session_start();

if (
  !isset($_POST['username']) || $_POST['username'] === '' ||
  !isset($_POST['password']) || $_POST['password'] === ''
) {
  exit('必要な情報を入力してください');
} else {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // ユーザー名とパスワードの検証
  if ($username === 'test' && $password === 'gs') {
    // ログイン成功
    $_SESSION['username'] = $username;
    $_SESSION['password'] =$password;
    $_SESSION['logged_in'] = true;
    header('Location: sv_input.php'); // ログイン成功後のリダイレクト先
    exit;
  } else {
    // ログイン失敗
    $_SESSION['login_error'] = 'Invalid username or password.';
    header('Location: login.php'); // ログイン失敗後のリダイレクト先
    exit;
  }
}
?>
