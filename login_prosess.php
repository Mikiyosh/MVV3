<?php

session_start();

// フォームデータの取得
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$term = isset($_POST['term']) ? $_POST['term'] : '';
$section = isset($_POST['section']) ? $_POST['section'] : '';
$grade = isset($_POST['grade']) ? $_POST['grade'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';

if (
  !isset($_POST['username']) || $_POST['username'] === '' ||
  !isset($_POST['password']) || $_POST['password'] === '' ||
  !isset($_POST['term']) || $_POST['term'] === '' ||
  !isset($_POST['section']) || $_POST['section'] === '' ||
  !isset($_POST['grade']) || $_POST['grade'] === '' ||
  !isset($_POST['age']) || $_POST['age'] === '' ||
  !isset($_POST['gender']) || $_POST['gender'] === ''
) {
  // いずれかのフィールドが未入力の場合の処理
  exit('必要な情報を入力してください');
} else {
  // プルダウンの選択項目に応じた処理
  if ($term === 'option1') {
    echo 'オプション1が選択されました';
  } elseif ($term === 'option2') {
    echo 'オプション2が選択されました';
  } else {
    echo 'その他のオプションが選択されました';
  }

  // プルダウンの選択項目に応じた処理
  if ($section === 'section1') {
    echo 'セクション1が選択されました';
  } elseif ($section === 'section2') {
    echo 'セクション2が選択されました';
  } else {
    echo 'その他のセクションが選択されました';
  }

  // 年齢と性別の処理
  echo 'Grade: ' . $grade . '<br>';
  echo 'Age: ' . $age . '<br>';
  echo 'Gender: ' . $gender . '<br>';
}

// 各種項目設定
$dbn = 'mysql:dbname=es_score;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// SQL作成&実行
$sql = 'INSERT INTO es_table (id, username, password, term, section, grade, age, gender, created_at, updated_at) VALUES (NULL, :username, :password, :term, :section, :grade, :age, :gender, now(), now())';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
$stmt->bindValue(':term', $term, PDO::PARAM_STR);
$stmt->bindValue(':section', $section, PDO::PARAM_STR);
$stmt->bindValue(':grade', $grade, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

// ユーザー名とパスワードの検証
if ($username === 'test' && $password === 'gs') {
  // ログイン成功
  $_SESSION['username'] = $username;
  $_SESSION['logged_in'] = true;

  // 選択肢の値をセッションに保存
  $_SESSION['term'] = $term;
  $_SESSION['section'] = $section;
  $_SESSION['grade'] = $grade;
  $_SESSION['age'] = $age;
  $_SESSION['gender'] = $gender;

  header('Location: sv_input.php'); // ログイン成功後のリダイレクト先
  exit;
} else {
  // ログイン失敗
  $_SESSION['login_error'] = 'Invalid username or password.';
  header('Location: login.php'); // ログイン失敗後のリダイレクト先
  exit;
}


?>
