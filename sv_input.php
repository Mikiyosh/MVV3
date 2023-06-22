<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            margin-top: 0;
            margin-left: 0;
            font-family: Helvetica, Neue, Helvetica, Arial, Segoe UI, YuGothic, Yu Gothic, Hiragino Sans, ヒラギノ角ゴ ProN, Hiragino Kaku Gothic ProN, Hiragino Kaku Gothic Pro, メイリオ, Meiryo, MS Pゴシック, MS PGothic, sans-serif;


        }

        .pwrapper {
            display: flex;
        }

        .ps {
            background-color: gray;
        }

       ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
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

        .empinf {
            font-size: 20px;
            margin: 10px 0 0 15px;

        }

        .btnwrapper {
            background-color: rgb(51, 50, 50);
            color: white;
                    display:block;
             width: 220px;
            height:700px;
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

        .items {
            color: white;
        }

        .li{}

        .kfit{
            width:1000px;
            padding:0 0 0 20px;
        }

        .forflrex2{
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

    
        .empinf {
            font-size: 20px;
            margin: 10px 0 0 15px;
        }
    </style>
</head>

<body>
    <div class="forflrex">
            <h1 class="empinf">組織文化サーベイ</h1>
        </div>

      <div class="forflrex2">
            <h1 class="empinf"></h1>
        </div>



    <div class="pwrapper">


   

<form action="sv_create.php" method="POST">



  <p>自社の文化を表現していると思うものを選んでください（最大5つ選択可）:</p>
  
  

  
  <input type="checkbox" name="culture[]" value="責任感"> 責任感<br>
    <input type="checkbox" name="culture[]" value="成果主義"> 成果主義<br>
    <input type="checkbox" name="culture[]" value="リスクテイク"> リスクテイク<br>
    <input type="checkbox" name="culture[]" value="顧客第一主義"> 顧客第一主義<br>
    <input type="checkbox" name="culture[]" value="変化を歓迎"> 変化を歓迎<br>
    <input type="checkbox" name="culture[]" value="年功序列"> 年功序列<br>
    <input type="checkbox" name="culture[]" value="統制"> 統制<br>
    <input type="checkbox" name="culture[]" value="フラットな組織"> フラットな組織<br>
    <input type="checkbox" name="culture[]" value="柔軟性"> 柔軟性<br>
    <input type="checkbox" name="culture[]" value="ヒエラルキー／上下関係が強い"> ヒエラルキー／上下関係が強い<br>
    <input type="checkbox" name="culture[]" value="能力主義"> 能力主義<br>
    <input type="checkbox" name="culture[]" value="コスト削減"> コスト削減<br>
    <input type="checkbox" name="culture[]" value="安定経営"> 安定経営<br>
    <input type="checkbox" name="culture[]" value="長期的なキャリア"> 長期的なキャリア<br>
    <input type="checkbox" name="culture[]" value="短期集中"> 短期集中<br>
    <input type="checkbox" name="culture[]" value="明確なビジョン"> 明確なビジョン<br>
    <input type="checkbox" name="culture[]" value="強いリーダーシップ"> 強いリーダーシップ<br>
    <input type="checkbox" name="culture[]" value="雇用保障"> 雇用保障<br>
    <input type="checkbox" name="culture[]" value="不安定な雇用"> 不安定な雇用<br>
    <input type="checkbox" name="culture[]" value="非難"> 非難<br>
    <input type="checkbox" name="culture[]" value="限定的なキャリアパス"> 限定的なキャリアパス<br>
    <input type="checkbox" name="culture[]" value="継続学習"> 継続学習<br>
    <input type="checkbox" name="culture[]" value="達成感"> 達成感<br>
    <input type="checkbox" name="culture[]" value="ベストを尽くす"> ベストを尽くす<br>
    <input type="checkbox" name="culture[]" value="強いブランド"> 強いブランド<br>
    <input type="checkbox" name="culture[]" value="挑戦"> 挑戦<br>
    <input type="checkbox" name="culture[]" value="約束"> 約束<br>
    <input type="checkbox" name="culture[]" value="保守的"> 保守的<br>
    <input type="checkbox" name="culture[]" value="継続的改善"> 継続的改善<br>
    <input type="checkbox" name="culture[]" value="創造"> 創造<br>
    <input type="checkbox" name="culture[]" value="のんびり/遅い"> のんびり/遅い<br>
    <input type="checkbox" name="culture[]" value="効率的"> 効率的<br>
    <input type="checkbox" name="culture[]" value="権限付与"> 権限付与<br>
    <input type="checkbox" name="culture[]" value="率先"> 率先<br>
    <input type="checkbox" name="culture[]" value="革新的"> 革新的<br>
    <input type="checkbox" name="culture[]" value="長時間労働"> 長時間労働<br>
    <input type="checkbox" name="culture[]" value="任務の遂行"> 任務の遂行<br>
    <input type="checkbox" name="culture[]" value="情熱的"> 情熱的<br>
    <input type="checkbox" name="culture[]" value="プロセス指向"> プロセス指向<br>
    <input type="checkbox" name="culture[]" value="生産性"> 生産性<br>
    <input type="checkbox" name="culture[]" value="プロフェッショナル"> プロフェッショナル<br>
    <input type="checkbox" name="culture[]" value="高品質"> 高品質<br>
    <input type="checkbox" name="culture[]" value="変化への抵抗"> 変化への抵抗<br>
    <input type="submit" value="送信">
</form>



    </div>




<script>
       
     function checkSelection() {
      var checkboxes = document.querySelectorAll('input[name="culture[]"]:checked');
      if (checkboxes.length > 5) {
        alert("最大で5つの自社の文化を選択できます");
        return false;
      }
      return true;
    }

    </script>



</body>

</html>