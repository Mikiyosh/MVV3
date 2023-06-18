<?php
session_start();

// フォームデータの取得
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';

// アルファベットごとの配列を初期化
$r_array = array();
$j_array = array();
$o_array = array();
$e_array = array();
$d_array = array();

// POSTデータを受け取る
$r_array[] = $_POST["r1"];
$r_array[] = $_POST["r2"];
$r_array[] = $_POST["r3"];
$r_array[] = $_POST["r4"];
$r_array[] = $_POST["r5"];
$r_array[] = $_POST["r6"];
$r_array[] = $_POST["r7"];
$r_array[] = $_POST["r8"];

$j_array[] = $_POST["j1"];
$j_array[] = $_POST["j2"];
$j_array[] = $_POST["j3"];
$j_array[] = $_POST["j4"];
$j_array[] = $_POST["j5"];
$j_array[] = $_POST["j6"];

$o_array[] = $_POST["o1"];
$o_array[] = $_POST["o2"];
$o_array[] = $_POST["o3"];
$o_array[] = $_POST["o4"];
$o_array[] = $_POST["o5"];
$o_array[] = $_POST["o6"];

$e_array[] = $_POST["e1"];
$e_array[] = $_POST["e2"];
$e_array[] = $_POST["e3"];

$d_array[] = $_POST["d1"];
$d_array[] = $_POST["d2"];
$d_array[] = $_POST["d3"];
$d_array[] = $_POST["d4"];

$term = isset($_SESSION['term']) ? $_SESSION['term'] : '';
$section = isset($_SESSION['section']) ? $_SESSION['section'] : '';
$grade = isset($_SESSION['grade']) ? $_SESSION['grade'] : '';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : '';
$gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : '';

// ファイルを開く．引数が`a`である部分に注目！
$file = fopen('data/todo.txt', 'a');
// ファイルをロックする
flock($file, LOCK_EX);

// データ1件ずつをファイルに書き込む
foreach ($r_array as $data) {
    fwrite($file, $username . ' term: ' . $term . ' section: ' . $section . ' grade: ' . $grade . ' age: ' . $age . ' gender: ' . $gender . ' relationshipscore: ' . $data . "\n");
}
foreach ($j_array as $data) {
    fwrite($file, $username . ' term: ' . $term . ' section: ' . $section . ' grade: ' . $grade . ' age: ' . $age . ' gender: ' . $gender . ' jobscore: ' . $data . "\n");
}
foreach ($o_array as $data) {
    fwrite($file, $username . ' term: ' . $term . ' section: ' . $section . ' grade: ' . $grade . ' age: ' . $age . ' gender: ' . $gender . ' organizationscore: ' . $data . "\n");
}
foreach ($e_array as $data) {
    fwrite($file, $username . ' term: ' . $term . ' section: ' . $section . ' grade: ' . $grade . ' age: ' . $age . ' gender: ' . $gender . ' evaluationscore: ' . $data . "\n");
}
foreach ($d_array as $data) {
    fwrite($file, $username . ' term: ' . $term . ' section: ' . $section . ' grade: ' . $grade . ' age: ' . $age . ' gender: ' . $gender . ' developmentscore: ' . $data . "\n");
}

// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// データ入力画面に

// データ入力画面に移動する
header("Location: sv_input.php");



?>