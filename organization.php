<?php

$dbn ='mysql:dbname=es_score;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo json_encode(["db error" => $e->getMessage()]);
  exit();
}

$selectedSection = isset($_POST['section']) ? $_POST['section'] : '';

if ($selectedSection !== '') {
  $sql = 'SELECT * FROM org_table WHERE
              (culture1 = :selectedSection OR culture2 = :selectedSection OR culture3 = :selectedSection OR culture4 = :selectedSection OR culture5 = :selectedSection)
              AND section = :section';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':selectedSection', $selectedSection);
  $stmt->bindValue(':section', $selectedSection);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
  $sql = 'SELECT * FROM org_table';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$output = "";
$cultureCount = array(); // カウントするための配列を初期化

foreach ($result as $record) {
  $cultures = array_filter([$record["culture1"], $record["culture2"], $record["culture3"], $record["culture4"], $record["culture5"]]);
  // キーワードをフィルタリングし、空のキーワードを除外

  if (count($cultures) > 0) {
    foreach ($cultures as $culture) {
      // キーワードのカウント
      if (isset($cultureCount[$culture])) {
        $cultureCount[$culture]++;
      } else {
        $cultureCount[$culture] = 1;
      }
    }
  }
}

// キーワードのカウント結果を表示
arsort($cultureCount);

$output = "<div id='output'><br>";
foreach ($cultureCount as $culture => $count) {
  $output .= str_repeat("█", $count);
  $output .= " {$count} {$culture}<br>";
}


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

#output{
    height:500px;
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
        
            width: 420px;
            display: flex;
        
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

   



        .feedback {

            border: none;
            background-color: lightblue;
        }

        .selfevacom {
            display: flex;

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
    height:650px;
    weight:400px;
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



#calculate_button2{
margin:0 0 0 3px;
  width:85px;

}

#cash_button2{
width:85px;

}


</style>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
                    <a href="" class="">PSI</a>
                </div>

                   <div class="button-054">
                    <a href="analize.php" class="">分析</a>
                </div>

                  <div class="button-054">
                    <a href="sv_input.php" class="">サーベイフォーム</a>
                </div>           
            </div>
<div>
<div class="ekfcon">
  <p class="texttitle">組織文化サーベイ結果</p>
<p class="textcon">

</div>





<div class="ekfwrapper">
 

<fieldset>
  <legend>従業員が考える組織文化</legend>
  <table>
    <tr>
      <td>
          <select id="section-select" name="section">
          <option value="">選択してください</option>
          <option value="人事">人事</option>
          <option value="総務">総務</option>
          <option value="営業">営業</option>
          <!-- 他のセクションのオプションを追加 -->
        </select>
      </td>
      <td>
        <button onclick="fetchData()">データを取得</button>
      </td>
    </tr>
  </table>
</fieldset>

<div id="output"></div>

      <fieldset>

    <legend>経営が考える組織文化</legend>
    <a href=""></a>
   
    <table>
          <tbody>
    <?= $output ?>
        </tbody>
    </table>

  </fieldset>

  
</div>



<script>
function fetchData() {
  // 選択されたセクションを取得
  var selectedSection = document.getElementById("section-select").value;
  
  // データの表示を更新
  var outputElement = document.getElementById("output");
  outputElement.innerHTML = "選択されたセクション: " + selectedSection + "<br><?php echo $output; ?>";
}
</script>



</body>

</html>