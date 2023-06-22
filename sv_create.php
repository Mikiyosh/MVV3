<?php

session_start();

// セッションからログインユーザーの情報を取得
if (!isset($_SESSION['username']) || !$_SESSION['logged_in']) {
  // ログインしていない場合はログイン画面にリダイレクト
  header('Location: login.php');
  exit;
}

// ログインユーザーの情報を取得
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$term = $_SESSION['term'];
$section = $_SESSION['section'];
$grade = $_SESSION['grade'];
$age = $_SESSION['age'];
$gender = $_SESSION['gender'];


$culture = isset($_POST['culture']) ? $_POST['culture'] : array(); // 複数の選択肢を配列として受け取る
$culture1 = isset($culture[0]) ? $culture[0] : '';
$culture2 = isset($culture[1]) ? $culture[1] : '';
$culture3 = isset($culture[2]) ? $culture[2] : '';
$culture4 = isset($culture[3]) ? $culture[3] : '';
$culture5 = isset($culture[4]) ? $culture[4] : '';

// 必要な情報を入力しているかチェック
if (count($culture) != 5) {
  exit('自社の文化を5つ選択してください');
}




// 各種項目設定
$dbn = 'mysql:dbname=es_score;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => $e->getMessage()]);
  exit();
}

// SQL作成&実行
$sql = 'INSERT INTO org_table (username, password, term, section, grade, age, gender, culture1, culture2, culture3, culture4, culture5) VALUES (:username, :password, :term, :section, :grade, :age, :gender, :culture1, :culture2, :culture3, :culture4, :culture5)';
$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':term', $term, PDO::PARAM_STR);
$stmt->bindValue(':section', $section, PDO::PARAM_STR);
$stmt->bindValue(':grade', $grade, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':culture1', $culture1, PDO::PARAM_STR);
$stmt->bindValue(':culture2', $culture2, PDO::PARAM_STR);
$stmt->bindValue(':culture3', $culture3, PDO::PARAM_STR);
$stmt->bindValue(':culture4', $culture4, PDO::PARAM_STR);
$stmt->bindValue(':culture5', $culture5, PDO::PARAM_STR);


// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => $e->getMessage()]);
  exit();
}

// データ入力画面に移動する
header("Location: sv_input.php");
exit();
?>