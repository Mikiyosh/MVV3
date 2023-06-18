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
            <h1 class="empinf">エンゲージメントサーベイ</h1>
        </div>

      <div class="forflrex2">
            <h1 class="empinf"></h1>
        </div>



    <div class="pwrapper">


   

<form action="sv_create.php" method="POST">
        <!-- 質問1 -->
        <div id="k_01" class="kfit">
            <p class="kpi">1.職場の人は、異なる価値観を持つ人や別の環境から来た人を受け入れてくれる。</p>
          <ul>
            <li><input class="kbtn" type="radio" name="r1" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="r1" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="r1" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="r1" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="r1" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="r1" value="6.0">非常にそう思う</li>
        </ul>
        <input type="button" value="次へ" onclick="showNextQuestion('k_01', 'k_02')">
        </div>
      
     <!-- 質問2 -->
     <div id="k_02" class="kfit" style="display: none;">
        <p class="kpi">2.この会社では、伝えるとリスクがあるような、変わった考え方や、新しい意見も安全に提案することができる。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="r2" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="r2" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="r2" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="r2" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="r2" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="r2" value="6.0">非常にそう思う</li>
        </ul>
      <input type="button" value="次へ" onclick="showNextQuestion('k_02', 'k_03')">
   <input type="button" value="戻る" onclick="showNextQuestion('k_02', 'k_01')">
   
          </div> 
 <!-- 質問3 -->
    <div id="k_03" class="kfit" style="display: none;">
        <p class="kpi">3.職場の人は私が失敗やミスをしたとしても非難しない。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="r3" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="r3" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="r3" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="r3" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="r3" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="r3" value="6.0">非常にそう思う</li>
        </ul>
   <input type="button" value="次へ" onclick="showNextQuestion('k_03', 'k_04')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_03', 'k_02')">
   
</div> 

          <!-- 質問4 -->
    <div id="k_04" class="kfit" style="display: none;">
        <p class="kpi">4.チームメンバーの間で、問題や課題を指摘し合える。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="r4" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="r4" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="r4" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="r4" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="r4" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="r4" value="6.0">非常にそう思う</li>
        </ul>
         <input type="button" value="次へ" onclick="showNextQuestion('k_04', 'k_05')">
   <input type="button" value="戻る" onclick="showNextQuestion('k_04', 'k_03')">
 
           </div> 

                     <!-- 質問5 -->
    <div id="k_05" class="kfit" style="display: none;">
        <p class="kpi">5.職場の人はわざと私の努力を無下にするようなことはしない。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="r5" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="r5" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="r5" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="r5" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="r5" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="r5" value="6.0">非常にそう思う</li>
        </ul>
               <input type="button" value="次へ" onclick="showNextQuestion('k_05', 'k_06')">
   <input type="button" value="戻る" onclick="showNextQuestion('k_05', 'k_04')">
 
         </div> 

               <!-- 質問6 -->
    <div id="k_06" class="kfit" style="display: none;">
        <p class="kpi">6.同僚に助けを求めやすい。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="r6" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="r6" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="r6" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="r6" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="r6" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="r6" value="6.0">非常にそう思う</li>
        </ul>
               <input type="button" value="次へ" onclick="showNextQuestion('k_06', 'k_07')">
   <input type="button" value="戻る" onclick="showNextQuestion('k_06', 'k_05')">
 
         </div>
    
         <!-- 質問7 -->
    <div id="k_07" class="kfit" style="display: none;">
        <p class="kpi">7.上司は私の意見を聞いてくれ、きちんと評価もしてくれる。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="r7" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="r7" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="r7" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="r7" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="r7" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="r7" value="6.0">非常にそう思う</li>
        </ul>
               <input type="button" value="次へ" onclick="showNextQuestion('k_07', 'k_08')">
     <input type="button" value="戻る" onclick="showNextQuestion('k_07', 'k_06')">
 
            </div>

    <!-- 質問8 -->
    <div id="k_08" class="kfit" style="display: none;">
        <p class="kpi">8.上司は私のやる気を引き出してくれる。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="r8" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="r8" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="r8" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="r8" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="r8" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="r8" value="6.0">非常にそう思う</li>
        </ul>
              
     <input type="button" value="次へ" onclick="showNextQuestion('k_08', 'k_09')">
      <input type="button" value="戻る" onclick="showNextQuestion('k_08', 'k_07')">
    
    </div>

                <!-- 質問9 -->
    <div id="k_09" class="kfit" style="display: none;">
        <p class="kpi">9.与えられる仕事量は適切であると感じる。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="j1" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="j1" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="j1" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="j1" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="j1" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="j1" value="6.0">非常にそう思う</li>
        </ul>
               
     <input type="button" value="次へ" onclick="showNextQuestion('k_09', 'k_10')">
      <input type="button" value="戻る" onclick="showNextQuestion('k_09', 'k_08')">
 
    </div>

                <!-- 質問10 -->
    <div id="k_10" class="kfit" style="display: none;">
        <p class="kpi">10.仕事をする上での必要な資源は整っている。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="j2" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="j2" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="j2" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="j2" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="j2" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="j2" value="6.0">非常にそう思う</li>
        </ul>
                
     <input type="button" value="次へ" onclick="showNextQuestion('k_10', 'k_11')">
      <input type="button" value="戻る" onclick="showNextQuestion('k_10', 'k_09')">
            
    </div>

                <!-- 質問11 -->
    <div id="k_11" class="kfit" style="display: none;">
        <p class="kpi">11.仕事をする上で上司から期待されていることを明確に理解している。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="j3" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="j3" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="j3" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="j3" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="j3" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="j3" value="6.0">非常にそう思う</li>
        </ul>
               
   <input type="button" value="次へ" onclick="showNextQuestion('k_11', 'k_12')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_11', 'k_10')">
                 
</div>

                <!-- 質問12 -->
    <div id="k_12" class="kfit" style="display: none;">
        <p class="kpi">12.仕事で起こるストレスは対応できる範囲である。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="j4" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="j4" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="j4" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="j4" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="j4" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="j4" value="6.0">非常にそう思う</li>
        </ul>
                
    <input type="button" value="次へ" onclick="showNextQuestion('k_12', 'k_13')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_10', 'k_09')">
              
</div>

                <!-- 質問13 -->
    <div id="k_13" class="kfit" style="display: none;">
        <p class="kpi">13.今の仕事は私に合っている。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="j5" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="j5" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="j5" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="j5" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="j5" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="j5" value="6.0">非常にそう思う</li>
        </ul>
               
    <input type="button" value="次へ" onclick="showNextQuestion('k_13', 'k_14')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_13', 'k_12')">
              
</div>

                <!-- 質問14 -->
    <div id="k_14" class="kfit" style="display: none;">
        <p class="kpi">14.私の仕事に、目的意識や意義を感じることができる。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="j6" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="j6" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="j6" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="j6" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="j6" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="j6" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_14', 'k_15')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_14', 'k_13')">
          
</div>

               <!-- 質問15 -->
    <div id="k_15" class="kfit" style="display: none;">
        <p class="kpi">15.この会社で働けることを誇りに思っている。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="o1" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="o1" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="o1" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="o1" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="o1" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="o1" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_15', 'k_16')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_15', 'k_14')">
          
</div>
               <!-- 質問16 -->
    <div id="k_16" class="kfit" style="display: none;">
        <p class="kpi">16.会社への帰属意識がある。</p>
        <ul>
            <li><input class="kbtn" type="radio" name="o2" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="o2" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="o2" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="o2" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="o2" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="o2" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_16', 'k_17')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_16', 'k_15')">
         
</div>
               <!-- 質問17 -->
    <div id="k_17" class="kfit" style="display: none;">
        <p class="kpi">17.会社の経営陣は、会社が成長するために明確な戦略を立案をしている。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="o3" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="o3" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="o3" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="o3" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="o3" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="o3" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_17', 'k_18')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_17', 'k_16')">
          
</div>
               <!-- 質問18 -->
    <div id="k_18" class="kfit" style="display: none;">
        <p class="kpi">18.会社の経営陣を信用している。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="o4" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="o4" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="o4" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="o4" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="o4" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="o4" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_18', 'k_19')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_18', 'k_17')">
          
</div>
               <!-- 質問19 -->
    <div id="k_19" class="kfit" style="display: none;">
        <p class="kpi">19.会社のビジョン、ミッション、バリューを理解している。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="o5" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="o5" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="o5" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="o5" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="o5" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="o5" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_19', 'k_20')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_19', 'k_18')">
         
</div>
               <!-- 質問20 -->
    <div id="k_20" class="kfit" style="display: none;">
        <p class="kpi">20.上司から業務の出来についてフィードバックを貰っている。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="e1" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="e1" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="e1" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="e1" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="e1" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="e1" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_20', 'k_21')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_20', 'k_19')">
          
</div>
               <!-- 質問21 -->
    <div id="k_21" class="kfit" style="display: none;">
        <p class="kpi">21.会社の評価制度は明確で透明性がある。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="e2" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="e2" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="e2" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="e2" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="e2" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="e2" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_21', 'k_22')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_21', 'k_20')">
          
</div>
               <!-- 質問22 -->
    <div id="k_22" class="kfit" style="display: none;">
        <p class="kpi">22.私の給料は、市場水準を考慮して設定されている。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="e3" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="e3" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="e3" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="e3" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="e3" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="e3" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_22', 'k_23')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_22', 'k_21')">
        
</div>
               <!-- 質問23 -->
    <div id="k_23" class="kfit" style="display: none;">
        <p class="kpi">23.この会社には、自分自身の成長とキャリアアップのための十分な機会がある。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="d1" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="d1" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="d1" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="d1" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="d1" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="d1" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_23', 'k_24')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_23', 'k_22')">
         
</div>
               <!-- 質問24 -->
    <div id="k_24" class="kfit" style="display: none;">
        <p class="kpi">24.この会社は社員の人材育成を責任を持って実施している。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="d2" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="d2" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="d2" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="d2" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="d2" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="d2" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_24', 'k_25')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_24', 'k_23')">
          
</div>
               <!-- 質問25 -->
    <div id="k_25" class="kfit" style="display: none;">
        <p class="kpi">25.今の仕事に達成感を感じている。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="d3" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="d3" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="d3" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="d3" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="d3" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="d3" value="6.0">非常にそう思う</li>
        </ul>
                 
    <input type="button" value="次へ" onclick="showNextQuestion('k_25', 'k_26')">
  <input type="button" value="戻る" onclick="showNextQuestion('k_25', 'k_24')">
          
</div>
               <!-- 質問26 -->
    <div id="k_26" class="kfit" style="display: none;">
        <p class="kpi">26.今の仕事は挑戦のしがいがあり、私のスキルと能力を向上させることができる。
</p>
        <ul>
            <li><input class="kbtn" type="radio" name="d4" value="1.0">全くそう思わない</li>
            <li><input class="kbtn" type="radio" name="d4" value="2.0">そう思わない</li>
            <li><input class="kbtn" type="radio" name="d4" value="3.0">あまりそう思わない</li>
            <li><input class="kbtn" type="radio" name="d4" value="4.0">少しそう思う</li>
            <li><input class="kbtn" type="radio" name="d4" value="5.0">そう思う</li>
            <li><input class="kbtn" type="radio" name="d4" value="6.0">非常にそう思う</li>
        </ul>
                 
  <input type="submit" value="送信" onclick="showNextQuestion('k_26', 'k_27');">
    <input type="button" value="戻る" onclick="showNextQuestion('k_26', 'k_25')">

         
</div>

           <div id="k_27" class="kfit" style="display: none;">
    <p>お疲れ様でした。テストは以上で終了です。</p>
     <input type="submit" value="終了" onclick="showNextQuestion('k_26', 'k_27');">




</form>



    </div>




<script>
       
     var questions = ['k_01', 'k_02', 'k_03', 'k_04', 'k_05', 'k_06', 'k_07', 'k_08', 'k_09', 'k_10', 'k_11', 'k_12', 'k_13', 'k_14', 'k_15', 'k_16', 'k_17', 'k_18', 'k_19', 'k_20', 'k_21', 'k_22', 'k_23', 'k_24', 'k_25', 'k_26', 'k_27'];
    var currentQuestionIndex = 0;

    function showNextQuestion(currentQuestionId, nextQuestionId) {
        var currentQuestion = document.getElementById(currentQuestionId);
        var nextQuestion = document.getElementById(nextQuestionId);

        currentQuestion.style.display = "none";
        nextQuestion.style.display = "block";

        currentQuestionIndex++;

        if (currentQuestionIndex === questions.length - 1) {
            document.getElementById(questions[currentQuestionIndex - 1]).style.display = "none";
            document.getElementById("k_27").style.display = "block";
            setTimeout(hideFirstQuestion, 6000); // 1分後に1番目の質問を非表示にする
        }
    }

    function hideFirstQuestion() {
        document.getElementById("k_01").style.display = "none";
    }

    </script>



</body>

</html>