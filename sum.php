<?php

// todo_txt_read.php

// データまとめ用の空文字変数
$str = '';
$array=[];

// ファイルを開く（読み取り専用）
$file = fopen('data/todo.txt', 'r');
// ファイルをロック
flock($file, LOCK_EX);

// fgets()で1行ずつ取得→$lineに格納
if ($file) {
  while ($line = fgets($file)) {
    // 取得したデータを`$str`に追加する
    $str .="<tr><td>{$line}</td></tr>";
array_push($array,$line);  
}
}

// ロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);
// var_dump($array);
// exit();
// `$str`に全てのデータ（タグに入った状態）がまとまるので，HTML内の任意の場所に表示する．


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <title>textファイル書き込み型todoリスト（一覧画面）</title>
<style>
        body {
            margin-top: 0;
            margin-left: 0;
            font-family: Helvetica, Neue, Helvetica, Arial, Segoe UI, YuGothic, Yu Gothic, Hiragino Sans, ヒラギノ角ゴ ProN, Hiragino Kaku Gothic ProN, Hiragino Kaku Gothic Pro, メイリオ, Meiryo, MS Pゴシック, MS PGothic, sans-serif;
         background-color: rgb(229, 229, 229);
          }

        a {
            color: white;
        }


        #output li {

            margin: 0 0 7px 0;
            list-style-type: none;
            padding: 5px 15px 15px 15px;
            background-color: white;
        }

        .empwrapper {
            height: 1000px;
            margin: 5px 0 0 0px;

        }

        .topempwrapper {
            background-color: rgba(241, 241, 241, 0.872);
            width: 1100px;
            padding: 0 0 0 25px;

        }

        .topempwrapper2 {
            background-color: rgba(241, 241, 241, 0.872);

        }

        .topempwrapper3 {
            background-color: rgba(241, 241, 241, 0.872);

        }

        .empde {
            font-weight: bold;
            height: 180px;

            padding: 5px 15px 15px 15px;
            margin: 5px 0 10px 5px;

        }

        .evaterm0 {
            font-weight: bold;
            font-size: 14px;
            margin: auto;
            padding: 00px 10px 0 20px;
        }

        .evaterm {
            font-weight: bold;
            font-size: 14px;
            margin: auto;
            padding: 00px 0 0 0;
        }

        .evaterm2 {
            display: flex;
            width: 1000px;
            font-weight: bold;
            padding: 0 0 0 0;
            font-size: 20px;
            padding: 0 0 0 0;
        }

        .evaterm3 {

            font-weight: bold;
            padding: 100px 0 0 135px;
            margin: 0 0 0 0;
            font-size: 20px;

        }

        .empname {
            font-weight: bold;
            font-size: 14px;
            padding: 0 10px 0 0;
            margin: auto;
            margin-left: 0;
            text-align: left;
        }

        .selfeva {
            height: 250px;
            margin: 5px 15px 0 0;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;

        }

        .selfeva2 {
            height: 206px;
            margin: 0 15px 0px 0;
            width: 500px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
        }


        .selfeva3 {
            margin: 0 15px 0px 130px;
            background-color: white;
            width: 150px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0px;
        }

        .centered-text0 {
            margin: 0 15px 0px 130px;
            background-color: white;
            width: 150px;
            height: 100px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .centered-text {
            text-align: center;
        }



        .valueele {

            font-weight: bold;
            padding: 30px 15px 15px 0px;
            margin: 5px 0 10px 0px;


        }

        .valueelements {
            display: flex;
        }

        #searchInput {
            height: 40px;
            width: 220px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 0 0 0 10px;
        }


        #sdis {
            height: 40px;
            width: 220px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
            text-align: center;
            font-weight: normal;
            padding: 0 0 0 10px;
            margin: 0 0 10px;
            background-color: white;
        }

        #gradis {
            height: 40px;
            width: 220px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
            text-align: center;
            margin: 0 0 10px;
            font-weight: normal;
            padding: 0 0 0 10px;
            background-color: white;
        }

        #output {
            height: 40px;
            width: 220px;
            margin-top: 45px;
            display: flex;
            align-items: center;
            font-weight: normal;
            padding: 0 0 0 0;
        }

        .output {
            height: 40px;
            width: 220px;
            margin-top: 45px;
            display: flex;
            align-items: center;
            font-weight: normal;
            padding: 0 0 0 0;
        }

        #output2 {
            height: 40px;
            width: 220px;
            margin-top: 45px;
            display: flex;
            align-items: center;
            font-weight: normal;
            padding: 0 0 0 15px;
            margin-top: 5px;
        }

        input {
            height: 250px;
            width: 791.78px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 0 0 0 15px;
        }



        #keywordSelect {
            height: 45px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #valueSelect1 {
            height: 40px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 0 5px 0;
        }

        #valueSelect2 {
            height: 40px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 0 5px 0;
        }

        #valueSelect3 {
            height: 40px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 0 5px 0;
        }

        #valueSelect4 {
            height: 40px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 0 5px 0;
        }

        #valueSelect5 {
            height: 40px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 0 5px 0;
        }

        #valueSelect6 {
            height: 40px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 0 5px 0;
        }

        #searchButton {
            width: 50px;
            border: 1px solid;
            border-radius: 5px;
            margin: 0 0 0 5px;

        }

        #searchButton:hover {
            border: 2px solid #000080;
            color: white;
            font-weight: bold;
            background-color: #000080;
        }


        #vsearchButton1 {
            width: 50px;
            border: 1px solid;
            border-radius: 5px;
            margin: 0 0 0 5px;

        }

        #vsearchButton1:hover {
            border: 2px solid #000080;
            color: white;
            font-weight: bold;
            background-color: #000080;
        }



        #send3 {
            width: 150px;
            border: 1px solid;
            border-radius: 5px;
            margin: 0 0 0 5px;
            height: 20px;

        }

        #send3:hover {
            border: 2px solid #000080;
            color: white;
            font-weight: bold;
            background-color: #000080;
        }

        #vsearchButton2 {
            width: 50px;
            border: 1px solid;
            border-radius: 5px;
            margin: 0 0 0 5px;

        }

        #vsearchButton2:hover {
            border: 2px solid #000080;
            color: white;
            font-weight: bold;
            background-color: #000080;
        }

        #vsearchButton3 {
            width: 50px;
            border: 1px solid;
            border-radius: 5px;
            margin: 0 0 0 5px;

        }

        #vsearchButton3:hover {
            border: 2px solid #000080;
            color: white;
            font-weight: bold;
            background-color: #000080;
        }

        #vsearchButton4 {
            width: 50px;
            border: 1px solid;
            border-radius: 5px;
            margin: 0 0 0 5px;

        }

        #vsearchButton4:hover {
            border: 2px solid #000080;
            color: white;
            font-weight: bold;
            background-color: #000080;
        }

        #vsearchButton5 {
            width: 50px;
            border: 1px solid;
            border-radius: 5px;
            margin: 0 0 0 5px;

        }

        #vsearchButton5:hover {
            border: 2px solid #000080;
            color: white;
            font-weight: bold;
            background-color: #000080;
        }

        #vsearchButton6 {
            width: 50px;
            border: 1px solid;
            border-radius: 5px;
            margin: 0 0 0 5px;

        }

        #vsearchButton5:hover {
            border: 2px solid #000080;
            color: white;
            font-weight: bold;
            background-color: #000080;
        }

        #output {
            font-size: 16px;
            height: 200px;
            width: 500px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 0 0 5px 0;
        }



        .feedback {

            border: none;
            background-color: lightblue;
        }

        .selfevacom {
            display: flex;

        }


        #score {
            height: 106px;
            font-weight: bold;
            font-size: 42px;
            text-align: center;
            margin: 5px 0 0 10px;
        }

        #kscore {
            height: 40px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            background-color: white;
        }

        #kscore2 {
            height: 40px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
        }

        #inputValue {
            height: 40px;
            font-size: 14px;
            margin: 0 0 7px 0;
            height: 40px;
            font-size: 20px;
            width: 90px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        #inputValue2 {
            height: 250px;
            font-size: 14px;
            margin: 0 10px 0 0;
            font-size: 20px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        #inputValue3 {
            height: 40px;
            font-size: 14px;
            margin: 0 0 7px 0;
            font-size: 20px;
            width: 90px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        #inputValue4 {


            height: 250px;
            font-size: 14px;
            margin: 0 10px 0 0;
            font-size: 20px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        #inputValue5 {
            height: 40px;
            font-size: 14px;
            margin: 0 0 7px 0;
            font-size: 20px;
            width: 90px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        #inputValue6 {
            height: 250px;
            font-size: 14px;
            margin: 0 10px 0 0;
            font-size: 20px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        #inputValue7 {
            height: 40px;
            font-size: 14px;
            margin: 0 0 7px 0;
            font-size: 20px;
            width: 90px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #inputValue8 {
            height: 250px;
            margin: 0 10px 0 0;
            font-size: 20px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        #inputValue9 {
            height: 40px;
            font-size: 14px;
            margin: 0 0 7px 0;
            font-size: 20px;
            width: 90px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        #inputValue10 {
            height: 250px;
            font-size: 14px;
            margin: 0 10px 0 0;
            font-size: 20px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #inputValue11 {
            height: 40px;
            font-size: 14px;
            margin: 0 0 7px 0;
            font-size: 20px;
            width: 90px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #inputValue12 {
            height: 250px;
            font-size: 14px;
            margin: 0 10px 0 0;
            font-size: 20px;
            width: 190px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #kscore3 {
            height: 40px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
        }

        #iscore {
            height: 40px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            background-color: white;
        }

        #lscore {
            height: 40px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            background-color: white;
        }

        #fscore {
            height: 40px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            background-color: white;
        }

        #hscore {
            height: 40px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            background-color: white;
        }

        #flscore {
            height: 40px;
            font-weight: bold;
            font-size: 24px;
            text-align: center;
            background-color: white;
        }


        .valuekpi {
            font-size: 20px;
            padding: 0 0 0 0;
            margin: 10px 0 0 0;
        }

        .hosscore {
            height: 40px;
            width: 90px;
            margin: 0 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .hosscore2 {
            height: 40px;
            width: 90px;
            margin: 0 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .hosscore3 {
            height: 40px;
            width: 250px;
            margin: 0 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        li {
            list-style: none;
        }

        .btmw {
            padding: 20px 0 10px 0px;
        }

        .space {
            background-color: white;
            width: 1300px;
            height: 20px;
            margin: 25px 0 0 0;
        }

        .forflrex {
            display: flex;
        }

        .selectbtn {
            color: white;
            font-weight: bold;
            background-color: white;
            border: none;
            /* 枠線をなくす */
            border-bottom: 1px solid #ccc;
            /* 下線を追加 */
            background-color: rgba(241, 241, 241, 0.872);
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.4);
            margin-top: -1px;
            /* 上部の余白をなくす */
            padding-top: 0;
            /* 上部の余白をなくす */

        }

        .virtical {
            display: flex;
        }

        .virticalwrapper {
            background-color: rgb(57, 57, 57);
            width: 500px;
            margin-top: 0px;
            padding-top: 15px;
            padding: 0 0 0 15px;
            color: white;
        }

        .empinf {
            font-size: 20px;
            margin: 10px 0 0 15px;
        }

        .empinf2 {
            font-size: 16px;
               color: rgb(57, 57, 57);
               padding:5px 0 0 15px;

        }


        .forflrex {
            height: 50px;
            font-weight: bold;
            background-color: gray;
            border: none;
            border-bottom: 1px solid #ccc;
            color: rgba(241, 241, 241, 0.872);
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.4);
            margin-top: 0;
            padding-top: 0;
            margin-bottom: -10px;
        }

        .forflrex2 {
            height: 50px;
            font-weight: bold;
            background-color: rgb(229, 229, 229);
            border: none;
            border-bottom: 1px solid #ccc;
            color: rgba(241, 241, 241, 0.872);
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.4);
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 0;
        }

        .button-054 {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 120px;
            margin: 25px 10px 0 10px;
            padding: .9em 3em .9em 2em;
            border: 1px solid white;
            border-radius: 25px;
            background-color: rgb(51, 50, 50);
            color: white;
            font-size: 12px;
            text-decoration: none;
        }


        .button-055 {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            width: 110px;
            padding: 0 0 0 5px;
            border-radius: 25px;
            background-color: rgb(51, 50, 50);
            color: white;
            font-size: 12px;
            text-decoration: none;
        }

        .button-054::after {
            position: absolute;
            right: 2em;
            transform: translateY(-50%);
            transform-origin: left;
            width: 2em;
            height: .5em;
            background-color: white;
            clip-path: polygon(0 100%, 100% 100%, 70% 40%, 70% 90%, 0% 90%);
            content: '';
            transition: transform .3s;
            text-decoration: none;
            color: white;
        }

        .button-054:hover::after {
            transform: translateY(-50%) scaleX(1.4);
            color: white;
        }

        .btnwrapper {
            background-color: rgb(51, 50, 50);
            color: white;
            width: 220px;
            height:1200px;
            padding: 60px 0 5px 0;
        }

        #authorize_button {
            width: 350px;
            margin: 0 0 0 2px;
        }

        .nameandterm {
            display: flex;
            width: 680px;
            padding: 20px 0 10px 0;

        }

#chartT{
  margin:40px -40px 0 0;
  width:70px;
}

#chartR{
  width:200px;
}

#chartJ{
  width:200px;
}

#chartO{
  width:200px;
}

#chartE{
  width:200px;
}





  fieldset{
    background-color:white;
    height:350px;
    weight:180px;
    border: none;
margin:0 20px 0 0;

  }

  .ekfwrapper{
    display: flex;
    width:1000px;
    margin:-15px 0 0 60px;
  }

.ekfwrapper2{
  display:flex;
  margin:-20px 0 0 200px;
}



.ekfcon{
  width:800px;
  text-align:center;
  padding: 30px 0 10px 100px;

}

.texttitle{
  margin:10px 0 20px 0;
font-size: 20px;
font-weight: bold;
}

.textcon{
  margin:10px 0 10px 0;

}



legend{
  padding: 45px 0 0 0;
  font-weight: bold;
}

.tscore{
  display:flex;
  background-color:white;
  width:680px;
  height:200px;
  margin:30px 0 0 180px;
  padding:10px 0 0 10px;
}

.score{
font-weight:bold;
height:30px;
margin: 20px 0 0 0;
padding:10px 0 0 5px;

}
.tscorede{
  width:250px;
}

.ekfwrapperana{
width: 992px;
margin:auto;
padding: 0 0 0 30px;
  display:flex;

}

#term{
  width:180px;
  height:25px;
  margin:0 0 5px 420px;
}

#department{
  width:180px;
  height:25px;
   margin:0 0 5px 0;
}

#grade{
  width:180px;
  height:25px;
  margin:0 0 5px 45px;
}

#age{
  width:180px;
  height:25px;
   margin:0 0 5px 0;
}

#gender{
  width:180px;
  height:25px;
  margin:0 0 5px 45px;
}

#calculate_button{
margin:0 0 0 3px;
  width:85px;

}

#cash_button{
width:85px;

}

#term2{
  width:180px;
  height:25px;
  margin:0 0 5px 0;
    margin:0 0 5px 45px;

}

#department2{
  width:180px;
  height:25px;
   margin:0 0 5px 0;
}

#grade2{
  width:180px;
  height:25px;
   margin:0 0 5px 0;
     margin:0 0 5px 45px;

}

#age2{
  width:180px;
  height:25px;
   margin:0 0 5px 0;
}

#gender2{
  width:180px;
  height:25px;
   margin:0 0 5px 0;
     margin:0 0 5px 45px;

}

#calculate_button2{
margin:0 0 0 3px;
  width:85px;

}

#cash_button2{
width:85px;

}

#total_score{
  margin:80px 50px 0 0;
  font-size:26px;
}

.form-group{
  margin: 0 0 0 405px;
}

/* モーダルのスタイル */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.8);
}

.modal-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 600px;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.linkw{
  color:black;
}

</style>
<head>

</head>

<body>

    <div>
        <div class="forflrex">
            <h1 class="empinf">エンゲージメントサーベイ</h1>
        </div>

        <div class="forflrex2">
               <h1 class="empinf2">ダッシュボード</h1>
       
        </div>


        <div class="virtical">

            <div class="btnwrapper">
                <div class="button-054">
                    <a href="" class="">サーベイサマリー</a>
                </div>
                <div class="button-054">
                    <a href="sv_read.php" class="">EKF</a>
                </div>
                <div class="button-054">
                    <a href="" class="">EEI</a>
                </div>
              
                <div class="button-054">
                    <a href="" class="">eNPS</a>
                </div>

                   <div class="button-054">
                    <a href="" class="">PSI</a>
                </div>

                   <div class="button-054">
                    <a href="" class="">分析</a>
                </div>

                  <div class="button-054">
                    <a href="sv_input.php" class="">サーベイフォーム</a>
                </div>           
            </div>
<div>
<div class="ekfcon">
  <p class="texttitle">What is "Engagement Score"?</p>
<p class="textcon">
Engagement Scoreは、『EKF』『EEI』『eNPS』『PSI』、４つのファクターで構成されます。</p>
</div>

<select id="term" class="form-group" name="term" type="text">
  <option value="">実施年を選択してください</option>
  <option value="二十年">2020年</option>
  <option value="二十一年">2021年</option>
  <option value="二十二年">2022年</option>
  <option value="二十三年">2023年</option>
</select>

<button id="term_button" onclick="calculateAverage()">分析する</button>



<div>


    <div class="tscore">

      <p class="score">TOTAL SCORE</p>
      <p id="total_score">Total Score</p>

    <div class="tscorede">
      <canvas id="chartT"></canvas>
    </div>
  
    </div>

</div>


<div class="ekfwrapper">

  <fieldset>  
    <table>
        <thead>
          <legend onclick="showModal()">EKF</legend>  
        
            <div id="myModal" class="modal">

                <div class="modal-content">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <h2>EKFとは</h2>
                    <p>EKFは、組織にまつわる４つの要因を分析するための指標です。 </p>
                    <img src="img/EKF.png" alt="EEIの画像" style="width: 600px;">
                 </div>  
            </div>     
        </thread>
    
    
      <tbody>
        <div class="avr">
       <p id="r_result">Score</p> 
       </div>  
      </tbody>

          <div class="chartbox2"><canvas id="chartR"></canvas></div>
 
    </table>    
     <a href="sv_read.php"><p class=linkw>詳細を見る</p></a>

  </fieldset>
   

    

     <fieldset>
    <table>
        <legend>EEI</legend>
      <thead>
        <tr>
          <th></th>
        </tr>
      </thead>

      <tbody>

<p id="j_result">Score</p>
      </tbody>
          <div class="chartbox2">
        <canvas id="chartO"></canvas>
        
</div>

        </table>
           <a href="sv_read.php"><p class=linkw>詳細を見る</p></a>

     
  </fieldset> 

  
   <fieldset>
    <table>
          <legend>eNPS</legend>
      <thead>
        <tr>
          <th></th>
        </tr>
      </thead>

      <tbody>

        <p id="o_result">Score</p>
      </tbody>
          <div class="chartbox2">
        <canvas id="chartJ"></canvas>
</div>
        </table>
           <a href="sv_read.php"><p class=linkw>詳細を見る</p></a>

  </fieldset>


   <fieldset>
    <table>
        <legend>PSI</legend>
      <thead>
        <tr>
          <th></th>
        </tr>
      </thead>

      <tbody>

<p id="e_result">Score</p>
      </tbody>
          <div class="chartbox2">
        <canvas id="chartO"></canvas>
</div>

        </table>
           <a href="sv_read.php"><p class=linkw>詳細を見る</p></a>

  </fieldset> 


</div>
 



  <script>
  
  
  function showModal() {
  const modal = document.getElementById("myModal");
  modal.style.display = "block";
}

function closeModal() {
  const modal = document.getElementById("myModal");
  modal.style.display = "none";
}


function showPopup() {
  
 
// ポップアップの内容を設定
  const popupContent = "ここに画像や説明の内容を追加します。";

  // ポップアップを表示
  
 
}
  
let array = <?= json_encode($array) ?>;
console.log(array);

function calculateAverage() {
  // 選択した期間を取得
  const selectedTerm = document.getElementById("term").value;


let rArray = [];
let rSum = 0;

for (let i = 0; i < array.length; i++) {
  const element = array[i];
 if (element.includes("relationshipscore:") && element.includes(selectedTerm)) {
       const numbers = element.match(/\d+(\.\d+)?/g); // 正規表現で数字のみを抽出
    if (numbers) {
      const parsedNumbers = numbers.map(Number);
      rArray = parsedNumbers;
      rSum = rArray.reduce((total, num) => total + num, 0);
      break; // "r"の配列を見つけたらループを終了
    }
  }
}

const rAverage = rSum / rArray.length;
console.log("EKF: " + rAverage);

const rResultElement = document.getElementById("r_result");
rResultElement.textContent = "Score: " + rAverage +"/6点";


const ctxR = document.getElementById('chartR').getContext('2d');
const chartR = new Chart(ctxR, {
  type: 'bar',
  data: {
    labels: ['人間関係'],
    datasets: [
      {
        label: '人間関係',
        data: [rAverage],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
        max: 6,
        stepSize: 1,
        precision: 0,
      },
    },
  },
});



let jArray = [];
let jSum = 0;
for (let i = 0; i < array.length; i++) {
  const element = array[i];
  if (element.includes("jobscore:")&& element.includes(selectedTerm)) {
    const numbers = element.match(/\d+(\.\d+)?/g); // 正規表現で数字のみを抽出
    if (numbers) {
      const parsedNumbers = numbers.map(Number);
      jArray = parsedNumbers;
      jSum = jArray.reduce((total, num) => total + num, 0);
      break; // "j"の配列を見つけたらループを終了
    }
  }
}

const jAverage = jSum / jArray.length;
console.log("EEI: " + jAverage);

const jResultElement = document.getElementById("j_result");
jResultElement.textContent = "Score: " + jAverage +"/6点";


let oArray = [];
let oSum = 0;
for (let i = 0; i < array.length; i++) {
  const element = array[i];
  if (element.includes("organizationscore:")&& element.includes(selectedTerm)) {
    const numbers = element.match(/\d+(\.\d+)?/g); // 正規表現で数字のみを抽出
    if (numbers) {
      const parsedNumbers = numbers.map(Number);
      oArray = parsedNumbers;
      oSum = oArray.reduce((total, num) => total + num, 0);
      break; // "o"の配列を見つけたらループを終了
    }
  }
}

const oAverage = oSum / oArray.length;
console.log("eNPS: " + oAverage);

const oResultElement = document.getElementById("o_result");
oResultElement.textContent = "Score: " + oAverage +"/6点";





let eArray = [];
let eSum = 0;
for (let i = 0; i < array.length; i++) {
  const element = array[i];
  if (element.includes("evaluationscore:")&& element.includes(selectedTerm)) {
    const numbers = element.match(/\d+(\.\d+)?/g); // 正規表現で数字のみを抽出
    if (numbers) {
      const parsedNumbers = numbers.map(Number);
      eArray = parsedNumbers;
      eSum = eArray.reduce((total, num) => total + num, 0);
      break; // "e"の配列を見つけたらループを終了
    }
  }
}

const eAverage = eSum / eArray.length;
console.log("PS: " + eAverage);
const eResultElement = document.getElementById("e_result");
eResultElement.textContent = "Score: " + eAverage +"/6点";


let dArray = [];
let dSum = 0;
for (let i = 0; i < array.length; i++) {
  const element = array[i];
  if (element.includes("developmentscore:")&& element.includes(selectedTerm)) {
    const numbers = element.match(/\d+(\.\d+)?/g); // 正規表現で数字のみを抽出
    if (numbers) {
      const parsedNumbers = numbers.map(Number);
      dArray = parsedNumbers;
      dSum = dArray.reduce((total, num) => total + num, 0);
      break; // "d"の配列を見つけたらループを終了
    }
  }
}

const dAverage = dSum / dArray.length;
console.log("成長のスコア: " + dAverage);
const dResultElement = document.getElementById("d_result");
dResultElement.textContent = "Score: " + dAverage +"/6点";







}



  </script>

</body>

</html>