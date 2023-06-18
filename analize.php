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
  width:270px;
}

#chartJ{
  width:270px;
}

#chartO{
  width:270px;
}




 

  .ekfwrapper{
    display: flex;
    width:500px;
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

fieldset{
border: none;
margin:0 20px 0 0;
background-color:white;
height:550px;

  }

  .chartbox2{
    width:300px;
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
width: 1000px;
margin:50px 0 0 0;
padding: 0 0 0 30px;
display:flex;

}

#term{
  width:180px;
  height:25px;
  margin:0 0 5px 55px;
}

#element{
  width:180px;
  height:25px;
  margin:0 0 5px 15px;
}

#element2{
  width:180px;
  height:25px;
  margin:0 0 5px 15px;
}

#department{
  width:180px;
  height:25px;
  margin:0 0 5px 55px;
}

#grade{
  width:180px;
  height:25px;
  margin:0 0 5px 15px;
}

#age{
  width:180px;
  height:25px;
   margin:0 0 5px 55px;
}

#gender{
  width:180px;
  height:25px;
  margin:0 0 5px 15px;
}

#calculate_button1{
margin:0 0 0 258px;
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
   margin:0 0 5px 45px;
}

#grade2{
  width:180px;
  height:25px;
  margin:0 0 5px 15px;

}

#age2{
  width:180px;
  height:25px;
   margin:0 0 5px 45px;
}

#gender2{
  width:180px;
  height:25px;
  margin:0 0 5px 15px;

}

#calculate_button2{
margin:0 0 0 250px;
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

.ekfsize{
  width:500px;
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
    </div>

    <div class="virtical">

            <div class="btnwrapper">
                <div class="button-054">
                    <a href="sum.php" class="">サーベイサマリー</a>
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
                    <a href="" class="">分析</a>
                </div>

                <div class="button-054">
                    <a href="sv_input.php" class="">サーベイフォーム</a>
                </div>           
            </div>
         
           




      <div class="ekfwrapperana">

          <div class="ekfsize">
              <fieldset>
                <legend>survay＿details</legend>
                <select id="term">
                  <option value="">実施年を選んでください</option>
                  <option value="二十年">2020年</option>
                  <option value="二十一年">2021年</option>
                  <option value="二十二年">2022年</option>
                  <option value="二十三">2023年</option>
                </select>

                <select id="element">
                  <option value="">要因を選んでください</option>
                  <option value="relationshipscore">人間関係</option>
                  <option value="jobscore">仕事要因</option>
                  <option value="organizationscore">組織要因</option>
                  <option value="evaluationscore">評価・報酬</option>
                  <option value="developmentscore">成長</option>
                </select>

                <select id="department">
                  <option value="">部署を選んでください</option>
                  <option value="all">all</option>
                  <option value="総務">総務</option>
                  <option value="人事">人事</option>
                  <option value="営業">営業</option>
                </select>

                <select id="grade">
                  <option value="">職位を選んでください</option>
                  <option value="all">all</option>
                  <option value="一般">一般</option>
                  <option value="リーダー">リーダー</option>
                  <option value="マネージャー">マネージャー</option>
                </select>

                <select id="age">
                  <option value="">年齢を選んでください</option>
                  <option value="all">all</option>
                  <option value="二十代">20代</option>
                  <option value="三十代">30代</option>
                  <option value="四十代">40代</option>
                  <option value="五十代">50代</option>
                  <option value="六十代">60代</option>
                </select>

                <select id="gender">
                  <option value="">性別を選んでください</option>
                  <option value="all">all</option>
                  <option value="男性">男性</option>
                  <option value="女性">女性</option>
                  <option value="その他">その他</option>
                </select>
                <button id="calculate_button1" onclick="calculateAverage1()">分析</button> <button id="cash_button">リセット</button>

                <table>
                  <thead>
                    <tr>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>
                    <p id="de_result">スコア</p>
                  </tbody>

                  <div class="chartbox2">
                    <canvas id="chartDe"></canvas>
                  </div>

                </table>
              </fieldset>
            </div>

            <div class="ekfsize">

              <fieldset>
                <legend>EKF＿comparison</legend>
                
              <select id="term2">
                <option value="">実施年を選んでください</option>
                <option value="二十年">2020年</option>
                <option value="二十一年">2021年</option>
                <option value="二十二年">2022年</option>
                <option value="二十三">2023年</option>
              </select>

              <select id="element2">
                <option value="">要因を選んでください</option>
                <option value="relationshipscore">人間関係</option>
                <option value="jobscore">仕事要因</option>
                <option value="organizationscore">組織要因</option>
                <option value="evaluationscore">評価・報酬</option>
                <option value="developmentscore">成長</option>
              </select>

              <select id="department2">
                <option value="">部署を選んでください</option>
                <option value="all">all</option>
                <option value="総務">総務</option>
                <option value="人事">人事</option>
                <option value="営業">営業</option>
              </select>

              <select id="grade2">
                <option value="">職位を選んでください</option>
                <option value="all">all</option>
                <option value="一般">一般</option>
                <option value="リーダー">リーダー</option>
                <option value="マネージャー">マネージャー</option>
              </select>

              <select id="age2">
                <option value="">年齢を選んでください</option>
                <option value="all">all</option>
                <option value="二十代">20代</option>
                <option value="三十代">30代</option>
                <option value="四十代">40代</option>
                <option value="五十代">50代</option>
                <option value="六十代">60代</option>
              </select>

              <select id="gender2">
                <option value="">性別を選んでください</option>
                <option value="all">all</option>
                <option value="男性">男性</option>
                <option value="女性">女性</option>
              </select>

            <button id="calculate_button2" onclick="calculateAverage2()">分析</button>   <button id="cash_button2">リセット</button>
                
              <table>
                  <thead>
                    <tr>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>
                  <p id="con_result">スコア</p>
                  </tbody>

                    <div class="chartbox2">
                    <canvas id="chartCon"></canvas>
                    </div>

              </table>
              </fieldset>

            </div>

          </div>
        </div>
      

  <script>
  
  
  
let array = <?= json_encode($array) ?>;
console.log(array);

let chartDe = null; // Chartオブジェクトの参照を保持する変数を定義
let chartCon = null; // Chartオブジェクトの参照を保持する変数を定義


function calculateAverage1() {
      const selectedTerm1 = document.getElementById("term").value;
      const selectedDepartment1 = document.getElementById("department").value;
      const selectedElement1 = document.getElementById("element").value;
      const selectedGrade1 = document.getElementById("grade").value;
      const selectedAge1 = document.getElementById("age").value;
      const selectedGender1 = document.getElementById("gender").value;
      console.log(selectedTerm1);



  
  let matchingNumbers1 = []; // ローカル変数として変更



  for (let i = 0; i < array.length; i++) {
    const element = array[i];
    const conditionsMatch =
      element.includes(selectedTerm1) &&
      element.includes(selectedElement1) &&
      element.includes(selectedDepartment1) &&
      element.includes(selectedGrade1) &&
      element.includes(selectedAge1) &&
      element.includes(selectedGender1);
    if (conditionsMatch) {
      const numbers = element.match(/\d+(\.\d+)?/g);
      if (numbers) {
        const parsedNumbers = numbers.map(Number);
        matchingNumbers1.push(...parsedNumbers);
      }
    }
  }

  if (matchingNumbers1.length > 0) {
    const average1 =
      matchingNumbers1.reduce((total, num) => total + num, 0) / matchingNumbers1.length;
    const roundedAverage1 = average1.toFixed(2); // 小数点第二位までに修正
    console.log("スコア: " + roundedAverage1);

    const resultElement1 = document.getElementById("de_result");
    resultElement1.textContent = "スコア: " + roundedAverage1;

    const ctxDe = document.getElementById('chartDe').getContext('2d');
    const chartDe = new Chart(ctxDe, {
      type: 'bar',
      data: {
        labels: ['分析'],
        datasets: [
          {
            label: '分析',
            data: [average1],
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
  } else {
    console.log("該当するデータがありません。");
    const resultElement1 = document.getElementById("de_result");
    resultElement1.textContent = "該当するデータがありません。";

    const ctxDe = document.getElementById('chartDe').getContext('2d');
    const chartDe = new Chart(ctxDe, {
      type: 'bar',
      data: {
        labels: ['分析'],
        datasets: [
          {
            label: '分析',
            data: [],
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
  }
}


function calculateAverage2() {

  const selectedTerm2 = document.getElementById("term2").value;
  const selectedDepartment2 = document.getElementById("department2").value;
  const selectedElement2 = document.getElementById("element2").value;
  const selectedGrade2 = document.getElementById("grade2").value;
  const selectedAge2 = document.getElementById("age2").value;
  const selectedGender2 = document.getElementById("gender2").value;
  console.log(selectedTerm2);

  let matchingNumbers2 = [];


  for (let j = 0; j < array.length; j++) {
    const element2 = array[j];
    const conditionsMatch2 =
      element2.includes(selectedTerm2) &&
      element2.includes(selectedElement2) &&
      element2.includes(selectedDepartment2) &&
      element2.includes(selectedGrade2) &&
      element2.includes(selectedAge2) &&
      element2.includes(selectedGender2);
    if (conditionsMatch2) {
      const numbers2 = element2.match(/\d+(\.\d+)?/g);
      if (numbers2) {
        const parsedNumbers2 = numbers2.map(Number);
        matchingNumbers2.push(...parsedNumbers2);
      }
    }
  }

  if (matchingNumbers2.length > 0) {
    const average2 =
      matchingNumbers2.reduce((total, num) => total + num, 0) / matchingNumbers2.length;
    const roundedAverage2 = average2.toFixed(2); // 小数点第二位までに修正
    console.log("スコア: " + roundedAverage2);

    const resultElement2 = document.getElementById("con_result");
    resultElement2.textContent = "スコア: " + roundedAverage2;

    const ctxCon = document.getElementById('chartCon').getContext('2d');
    const chartCon = new Chart(ctxCon, {
      type: 'bar',
      data: {
        labels: ['分析'],
        datasets: [
          {
            label: '分析',
            data: [average2],
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
  } else {
    console.log("該当するデータがありません。");
    const resultElement2 = document.getElementById("con_result");
    resultElement2.textContent = "該当するデータがありません。";

    const ctxCon = document.getElementById('chartCon').getContext('2d');
    const chartCon = new Chart(ctxCon, {
      type: 'bar',
      data: {
        labels: ['分析'],
        datasets: [
          {
            label: '分析',
            data: [],
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
  }
}

const calculateButton1 = document.getElementById("calculate_button1");
calculateButton1.addEventListener("click", calculateAverage1);

const calculateButton2 = document.getElementById("calculate_button2");
calculateButton2.addEventListener("click", calculateAverage2);

function reloadPage() {
  location.reload();
}


  </script>

</body>

</html>