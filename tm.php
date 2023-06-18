<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chatApp</title>
    <style>
        body {
            margin-top: 0;
            margin-left: 0;
            font-family: Helvetica, Neue, Helvetica, Arial, Segoe UI, YuGothic, Yu Gothic, Hiragino Sans, ヒラギノ角ゴ ProN, Hiragino Kaku Gothic ProN, Hiragino Kaku Gothic Pro, メイリオ, Meiryo, MS Pゴシック, MS PGothic, sans-serif;


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
            height: 600px;
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
            width: 120px;
            margin: 25px 0 0 35px;
            padding: .9em 3em .9em 2em;
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
            width: 300px;
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
    </style>
</head>

<body>
    <div>
        <div class="forflrex">
            <h1 class="empinf">評価者用</h1>
        </div>
        <div class="forflrex2">
            <h1 class="empinf"></h1>
        </div>


        <div class="virtical">

            <div class="btnwrapper">
                <div class="button-054">
                    <a href="" class="">今期自己評価</a>
                </div>
                <div class="button-054">
                    <a href="" class="">今期評価</a>
                </div>
                <div class="button-054">
                    <a href="" class="">目標設定</a>
                </div>

                  <div class="button-054">
                    <a href="sum.php" class="">サーベイ結果</a>
                </div>


                <div class="button-055">
                    <title>面談予約</title>
                    <meta charset="utf-8" />
                    <!--Add buttons to initiate auth sequence and sign out-->
                    <button id="authorize_button" onclick="handleAuthClick()">面談予約</button>
                    <button id="signout_button" onclick="handleSignoutClick()">Sign Out</button>
                </div>
            </div>


            <div class="topempwrapper">
                <div class="empwrapper">
                    <div class="nameandterm">
                        <p class="empname">従業員氏名</p>
                        <input type="name" id="searchInput" placeholder="キーワードを入力してください">

                        <p class="evaterm0">評価対象期間</p>
                        <select id="keywordSelect">
                            <option value="">期間を選択してください</option>
                            <option value="2023年4月～2023年9月">2023年4月～2023年9月</option>
                            <option value="2023年10月～2024年3月">2023年10月～2024年3月</option>
                            <option value="2024年4月～2024年9月">2024年4月～2024年9月</option>
                            <option value="2024年10月～2025年3月">2024年10月～2025年3月</option>
                            <option value="2025年4月～2025年9月">2025年4月～2025年9月</option>
                            <option value="2025年10月～2026年3月">2025年10月～2026年3月</option>
                            <option value="2026年4月～2026年9月">2026年4月～2026年9月</option>
                            <option value="2026年10月～2027年3月">2026年10月～2027年3月</option>
                            <option value="2027年4月～2027年9月">2027年4月～2027年9月</option>
                            <option value="2027年10月～2028年3月">2027年10月～2028年3月</option>
                        </select>
                        <button id="searchButton">検索</button>
                    </div>

                    <p class="empname">所属部署</p>
                    <div id="sdis" class="sdis"></div>

                    <p class="empname">グレード</p>
                    <div id="gradis" class="gradis"></div>



                    <div class="evaterm2">
                        <div>
                            <p class="evaterm">自己評価＿総合</p>
                            <p id="output" class=""></p>
                        </div>

                        <div>
                            <p class="evaterm3">総合評価点</p>
                            <p class="centered-text0"></p>
                        </div>
                    </div>

                </div>





                <div class="valueele">
                    <p class="evaterm">自己評価＿バリュー項目</p>
                    <div class="valueelements">

                        <div class="vsele">
                            <div>
                                <p class="valuekpi">KNOWLEDGE</p>
                                <div id="kscore" class="hosscore">
                                    <p class="centered-text"></p>
                                </div>

                                <p>期初目標参照</p>
                                <select id="valueSelect1">
                                    <option value="">期間を選択してください</option>
                                    <option value="文章作成力">文章作成力</option>
                                    <option value="テクニカルスキル">テクニカルスキル</option>
                                    <option value="ラーニングアジリティ">ラーニングアジリティ</option>
                                </select>
                                <button id="vsearchButton1">検索</button>
                            </div>

                            <div class="selfeva">
                                <p id="output2"></p>
                            </div>
                        </div>

                        <div class="vsele">
                            <div>
                                <p class="valuekpi">INOVATION</p>
                                <div id="iscore" class="hosscore">
                                    <p class="centered-text"></p>
                                </div>

                                <p>期初目標参照</p>
                                <select id="valueSelect2">
                                    <option value="">期間を選択してください</option>
                                    <option value="企画発案力">企画発案力</option>
                                    <option value="問題定義と改善">問題定義と改善</option>
                                    <option value="探求心と追求心">探求心と追求心</option>
                                </select>
                                <button id="vsearchButton2">検索</button>
                            </div>

                            <div class="selfeva">
                                <p id="output3"></p>
                            </div>
                        </div>

                        <div class="vsele">
                            <div>
                                <p class="valuekpi">LEADERSHIP</p>
                                <div id="lscore" class="hosscore">
                                    <p class="centered-text"></p>
                                </div>

                                <p>期初目標参照</p>
                                <select id="valueSelect3">
                                    <option value="">期間を選択してください</option>
                                    <option value="ビジョニング力">ビジョニング力</option>
                                    <option value="目標設定と遂行力">目標設定と遂行力</option>
                                    <option value="影響力">影響力</option>
                                </select>
                                <button id="vsearchButton3">検索</button>
                            </div>

                            <div class="selfeva">
                                <p id="output5"></p>
                            </div>
                        </div>

                        <div class="vsele">
                            <div>
                                <p class="valuekpi">FOLLOWERSHIP</p>

                                <div id="fscore" class="hosscore">
                                    <p class="centered-text"></p>
                                </div>

                                <p>期初目標参照</p>
                                <select id="valueSelect4">
                                    <option value="">期間を選択してください</option>
                                    <option value="翻訳力">翻訳力</option>
                                    <option value="プロジェクトマネジメント">プロジェクトマネジメント</option>
                                    <option value="チームマネジメント">チームマネジメント</option>
                                </select>
                                <button id="vsearchButton4">検索</button>
                            </div>

                            <div class="selfeva">
                                <p id="output6"></p>
                            </div>
                        </div>

                        <div class="vsele">
                            <div>
                                <p class="valuekpi">HOSPITALITY</p>

                                <div id="hscore" class="hosscore">
                                    <p class="centered-text"></p>
                                </div>

                                <p>期初目標参照</p>
                                <select id="valueSelect5">
                                    <option value="">期間を選択してください</option>
                                    <option value="企画力">人財育成</option>
                                    <option value="問題定義と改善">メンバーシップ</option>
                                    <option value="探求心と追求心">セルフマネジメント</option>
                                </select>
                                <button id="vsearchButton5">検索</button>
                            </div>

                            <div class="selfeva">
                                <p id="output7"></p>
                            </div>
                        </div>

                        <div class="vsele">

                            <div>
                                <p class="valuekpi">FLEXIBILITY</p>
                                <div id="flscore" class="hosscore">
                                    <p class="centered-text"></p>
                                </div>

                                <p>期初目標参照</p>
                                <select id="valueSelect6">
                                    <option value="">期間を選択してください</option>
                                    <option value="現場力">現場力</option>
                                    <option value="トラブル対応力">トラブル対応力</option>
                                    <option value="クライアント対応力">クライアント対応力</option>
                                </select>

                                <button id="vsearchButton6">検索</button>
                            </div>

                            <div class="selfeva">

                                <p id="output8"></p>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="btmw">
                    <p class="evaterm">今期評価＿バリュー項目</p>

                    <div class="valueelements">

                        <div class="vsele">
                            <div>
                                <p class="valuekpi">KNOWLEDGE</p>
                                <select id="inputValue">
                                    <option value="">評価点</option>
                                    <option value="1.0">1.0</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2.0">2.0</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3.0">3.0</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4.0">4.0</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5.0">5.0</option>
                                </select>
                                <div>
                                    <input type="text" id="inputValue2" class="">
                                </div>
                            </div>


                        </div>

                        <div class="vsele">
                            <div>
                                <p class="valuekpi">INOVATION</p>
                                <select id="inputValue3">
                                    <option value="">評価点</option>
                                    <option value="1.0">1.0</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2.0">2.0</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3.0">3.0</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4.0">4.0</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5.0">5.0</option>
                                </select>
                                <div>
                                    <input type="text" id="inputValue4" class="">
                                </div>
                            </div>

                        </div>

                        <div class="vsele">

                            <div>
                                <p class="valuekpi">LEADERSHIP</p>
                                <select id="inputValue5">
                                    <option value="">評価点</option>
                                    <option value="1.0">1.0</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2.0">2.0</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3.0">3.0</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4.0">4.0</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5.0">5.0</option>
                                </select>
                                <div>
                                    <input type="text" id="inputValue6" class="">
                                </div>
                            </div>

                        </div>

                        <div class="vsele">
                            <div>
                                <p class="valuekpi">FOLLOWERSHIP</p>

                                <select id="inputValue7">
                                    <option value="">評価点</option>
                                    <option value="1.0">1.0</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2.0">2.0</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3.0">3.0</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4.0">4.0</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5.0">5.0</option>
                                </select>
                                <div>
                                    <input type="text" id="inputValue8" class="">
                                </div>

                            </div>

                        </div>

                        <div class="vsele">
                            <div>
                                <p class="valuekpi">HOSPITALITY</p>
                                <select id="inputValue9">
                                    <option value="">評価点</option>
                                    <option value="1.0">1.0</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2.0">2.0</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3.0">3.0</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4.0">4.0</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5.0">5.0</option>
                                </select>
                                <div>
                                    <input type="text" id="inputValue10" class="">
                                </div>
                            </div>
                        </div>

                        <div class="vsele">

                            <div>
                                <p class="valuekpi">FLEXIBILITY</p>
                                <select id="inputValue11">
                                    <option value="">評価点</option>
                                    <option value="1.0">1.0</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2.0">2.0</option>
                                    <option value="2.5">2.5</option>
                                    <option value="3.0">3.0</option>
                                    <option value="3.5">3.5</option>
                                    <option value="4.0">4.0</option>
                                    <option value="4.5">4.5</option>
                                    <option value="5.0">5.0</option>
                                </select>
                                <div>
                                    <input type="text" id="inputValue12" class="">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div>
                    <p class="evaterm">評価フィードバック</p>

                    <div class="valueelements2">

                        <div class="vsele">
                            <div class="feedbackf">
                                <input id="feedback" type="feedback">
                            </div>

                            <button id="send3">send</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HTML内のDeleteボタン -->
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script>
            // 日時をいい感じの形式にする関数
            function convertTimestampToDatetime(timestamp) {
                const _d = timestamp ? new Date(timestamp * 1000) : new Date();
                const Y = _d.getFullYear();
                const m = (_d.getMonth() + 1).toString().padStart(2, '0');
                const d = _d.getDate().toString().padStart(2, '0');
                const H = _d.getHours().toString().padStart(2, '0');
                const i = _d.getMinutes().toString().padStart(2, '0');
                const s = _d.getSeconds().toString().padStart(2, '0');
                return `${Y}/${m}/${d} ${H}:${i}:${s}`;
            }
        </script>



        <!-- 以下にfirebaseのコードを貼り付けよう -->


        <script type="module">

            import { initializeApp } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-app.js";

            import {
                getFirestore,
                collection,
                addDoc,
                serverTimestamp,
                query,
                orderBy,
                onSnapshot,
                where,
            } from "https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore.js";



            const firebaseConfig = {
                apiKey: "AIzaSyA8p9igB4aI27AdtDu7Zvueh4iX4qVRmXo",
                authDomain: "chatapp-miki.firebaseapp.com",
                projectId: "chatapp-miki",
                storageBucket: "chatapp-miki.appspot.com",
                messagingSenderId: "788466822293",
                appId: "1:788466822293:web:34b4a1e607732c8e357f9c"
            };

            const app = initializeApp(firebaseConfig);
            const db = getFirestore(app);


            // chatapp.html


            // データ取得処理
            const q = query(collection(db, "chat"), orderBy("time", "desc"));

            onSnapshot(q, (querySnapshot) => {
                const documents = [];
                querySnapshot.docs.forEach(function (doc) {
                    const document = {
                        id: doc.id,
                        data: doc.data(),
                    };
                    documents.push(document);
                });
                console.log(documents);

                //  ここまでは毎回同じ


                // 検索ボタンのクリックイベントハンドラ
                $("#searchButton").on("click", function () {
                    // 入力されたキーワードを取得
                    const keyword = $("#searchInput").val();
                    const selectedTerm = $("#keywordSelect option:selected").val();

                    // Firestore のデータを検索
                    searchDocuments(keyword, selectedTerm);
                    console.log(documents);

                });

                // ドキュメントを検索して表示する関数
                function searchDocuments(keyword, selectedTerm) {
                    const htmlElements = [];
                    documents.forEach(function (document) {
                        const time = document.data.time && document.data.time.seconds ? convertTimestampToDatetime(document.data.time.seconds) : "";
                        const documentTerm = document.data.term;

                        console.log("documentTerm:", documentTerm); // 追加
                        if (document.data.name && document.data.name.includes(keyword) && documentTerm === selectedTerm) {


                            htmlElements.push(`
            <li id="${document.id}">
                <p>${document.data.text}</p>  
              
          
            </li>
            `);
                            const tavgValue = document.data.tavg;
                            $("#score").text(tavgValue);
                            const secValue = document.data.section;
                            $("#sdis").text(secValue);
                            const graValue = document.data.grade;
                            $("#gradis").text(graValue);
                            const kavgValue = document.data.kavg;
                            $("#kscore").text(kavgValue);
                            const iavgValue = document.data.iavg;
                            $("#iscore").text(iavgValue);
                            const lavgValue = document.data.lavg;
                            $("#lscore").text(lavgValue);
                            const favgValue = document.data.favg;
                            $("#fscore").text(favgValue);
                            const havgValue = document.data.havg;
                            $("#hscore").text(havgValue);
                            const flavgValue = document.data.flavg;
                            $("#flscore").text(flavgValue);
                        }
                    });

                    $("#output").html(htmlElements);
                }
            })




            // データ取得処理
            const r = query(collection(db, "chat"), orderBy("time", "desc"));

            onSnapshot(r, (querySnapshot) => {

                const documents = [];
                querySnapshot.docs.forEach(function (doc) {
                    const document = {
                        id: doc.id,
                        data: doc.data(),
                    };
                    documents.push(document);
                });

                console.log(documents);

                //  ここまでは毎回同じ





                // 検索ボタンのクリックイベントハンドラ
                $("#vsearchButton1").on("click", function () {

                    const keyword2 = $("#searchInput").val();
                    const selectedTerm2 = $("#valueSelect1 option:selected").val();

                    // Firestore のデータを検索
                    searchDocuments(keyword2, selectedTerm2);
                    console.log(documents);

                });

                // ドキュメントを検索して表示する関数
                function searchDocuments(keyword2, selectedTerm2) {
                    const htmlElements2 = [];
                    documents.forEach(function (document) {
                        const time = document.data.time && document.data.time.seconds ? convertTimestampToDatetime(document.data.time.seconds) : "";
                        const documentTerm2 = document.data.kno;

                        console.log("documentTerm2:", documentTerm2); // 追加

                        if (documentTerm2 === selectedTerm2) {
                            if (document.data.name2 && document.data.name2.includes(keyword2) && documentTerm2 === selectedTerm2) {
                                htmlElements2.push(`
                    <li id="${document.id}">
                                    <p>${document.data.ktext}</p>  
                                </li>
            `);
                            }
                        }
                    });


                    $("#output2").html(htmlElements2);
                }
            })



            // データ取得処理
            const s = query(collection(db, "chat"), orderBy("time", "desc"));

            onSnapshot(s, (querySnapshot) => {

                const documents = [];
                querySnapshot.docs.forEach(function (doc) {
                    const document = {
                        id: doc.id,
                        data: doc.data(),
                    };
                    documents.push(document);
                });

                console.log(documents);

                // 検索ボタンのクリックイベントハンドラ
                $("#vsearchButton2").on("click", function () {

                    const keyword3 = $("#searchInput").val();
                    const selectedTerm3 = $("#valueSelect2 option:selected").val();

                    // Firestore のデータを検索
                    searchDocuments(keyword3, selectedTerm3);
                    console.log(documents);

                });

                // ドキュメントを検索して表示する関数
                function searchDocuments(keyword3, selectedTerm3) {
                    const htmlElements3 = [];
                    documents.forEach(function (document) {
                        const time = document.data.time && document.data.time.seconds ? convertTimestampToDatetime(document.data.time.seconds) : "";
                        const documentTerm3 = document.data.ino;

                        console.log("documentTerm3:", documentTerm3); // 追加
                        if (documentTerm3 === selectedTerm3) {

                            htmlElements.push(`      
                    <li id="${document.id}">
                        <p>${document.data.itext}</p>
                

                            </li>
             `);
                        }
                    }


                    )
                    $("#output2").html(htmlElements2);
                }
            })



            // chatapp.html

            $("#send3").on("click", function () {

                // chatapp.html
                const postData = {
                    name: $("#searchInput").val(),
                    term: $("#keywordSelect").val(),
                    knowledge: $("#inputValue").val(),
                    inovation: $("#inputValue3").val(),
                    learship: $("#inputValue5").val(),
                    followership: $("#inputValue7").val(),
                    hospitality: $("#inputValue9").val(),
                    flexibility: $("#inputValue11").val(),
                    knowledge_com: $("#inputValue2").val(),
                    inovation_com: $("#inputValue4").val(),
                    learship_com: $("#inputValue6").val(),
                    followership_com: $("#inputValue8").val(),
                    hospitality_com: $("#inputValue10").val(),
                    feedback: $("#feedback").val(),

                };
                addDoc(collection(db, "chat"), postData);
                alert("送信されました"); // メッセージを表示する

            });
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script
            src='https://www.bing.com/api/maps/mapcontrol?key=Atw9JtpaVdOnOZAqg1A5Zg6CQBjstnSNxU3NcDljdfDFEAz5JX3neJ0kvD5GCzbO'
            async defer></script>
        <script>

            let map;

            function mapsInit(position) {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;
                map = new Microsoft.Maps.Map("#map", {
                    center: {
                        latitude: lat,
                        longitude: lng,
                    },
                    zoom: 15,
                });
            }

            function showError(error) {
                const errorMessages = [
                    "位置情報が許可されていません",
                    "現在位置を特定できません",
                    "位置情報を取得する前にタイムアウトになりました",
                ];
                alert(`error:${errorMessages[error.code - 1]}`);

            }

            const option = {
                enableHighAccuracy: true,
                timeout: 10000,
                maximumAge: 10000,
            }

            window.onload = function () {
                navigator.geolocation.getCurrentPosition(mapsInit, showError, option);
            };


        </script>

        <pre id="content" style="white-space: pre-wrap;"></pre>

        <script type="text/javascript">
            /* exported gapiLoaded */
            /* exported gisLoaded */
            /* exported handleAuthClick */
            /* exported handleSignoutClick */

            // TODO(developer): Set to client ID and API key from the Developer Console
            const CLIENT_ID = '631045937681-079hn5892rr2ponno9tgoa92p1a16n5r.apps.googleusercontent.com';
            const API_KEY = 'AIzaSyCVgk50XMybQn0O_Na9x-n2D9DJEy53Ebk';

            // Discovery doc URL for APIs used by the quickstart
            const DISCOVERY_DOC = 'https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest';

            // Authorization scopes required by the API; multiple scopes can be
            // included, separated by spaces.
            const SCOPES = 'https://www.googleapis.com/auth/calendar.readonly';

            let tokenClient;
            let gapiInited = false;
            let gisInited = false;

            document.getElementById('authorize_button').style.visibility = 'hidden';
            document.getElementById('signout_button').style.visibility = 'hidden';

            /**
             * Callback after api.js is loaded.
             */
            function gapiLoaded() {
                gapi.load('client', initializeGapiClient);
            }

            /**
             * Callback after the API client is loaded. Loads the
             * discovery doc to initialize the API.
             */
            async function initializeGapiClient() {
                await gapi.client.init({
                    apiKey: API_KEY,
                    discoveryDocs: [DISCOVERY_DOC],
                });
                gapiInited = true;
                maybeEnableButtons();
            }

            /**
             * Callback after Google Identity Services are loaded.
             */
            function gisLoaded() {
                tokenClient = google.accounts.oauth2.initTokenClient({
                    client_id: CLIENT_ID,
                    scope: SCOPES,
                    callback: '', // defined later
                });
                gisInited = true;
                maybeEnableButtons();
            }

            /**
             * Enables user interaction after all libraries are loaded.
             */
            function maybeEnableButtons() {
                if (gapiInited && gisInited) {
                    document.getElementById('authorize_button').style.visibility = 'visible';
                }
            }

            /**
             *  Sign in the user upon button click.
             */
            function handleAuthClick() {
                tokenClient.callback = async (resp) => {
                    if (resp.error !== undefined) {
                        throw (resp);
                    }
                    document.getElementById('signout_button').style.visibility = 'visible';
                    document.getElementById('authorize_button').innerText = 'Refresh';
                    await listUpcomingEvents();
                };

                if (gapi.client.getToken() === null) {
                    // Prompt the user to select a Google Account and ask for consent to share their data
                    // when establishing a new session.
                    tokenClient.requestAccessToken({ prompt: 'consent' });
                } else {
                    // Skip display of account chooser and consent dialog for an existing session.
                    tokenClient.requestAccessToken({ prompt: '' });
                }
            }

            /**
             *  Sign out the user upon button click.
             */
            function handleSignoutClick() {
                const token = gapi.client.getToken();
                if (token !== null) {
                    google.accounts.oauth2.revoke(token.access_token);
                    gapi.client.setToken('');
                    document.getElementById('content').innerText = '';
                    document.getElementById('authorize_button').innerText = 'Authorize';
                    document.getElementById('signout_button').style.visibility = 'hidden';
                }
            }

            /**
             * Print the summary and start datetime/date of the next ten events in
             * the authorized user's calendar. If no events are found an
             * appropriate message is printed.
             */
            async function listUpcomingEvents() {
                let response;
                try {
                    const request = {
                        'calendarId': 'primary',
                        'timeMin': (new Date()).toISOString(),
                        'showDeleted': false,
                        'singleEvents': true,
                        'maxResults': 10,
                        'orderBy': 'startTime',
                    };
                    response = await gapi.client.calendar.events.list(request);
                } catch (err) {
                    document.getElementById('content').innerText = err.message;
                    return;
                }

                const events = response.result.items;
                if (!events || events.length == 0) {
                    document.getElementById('content').innerText = 'No events found.';
                    return;
                }
                // Flatten to string to display
                const output = events.reduce(
                    (str, event) => `${str}${event.summary} (${event.start.dateTime || event.start.date})\n`,
                    'Events:\n');
                document.getElementById('content').innerText = output;
            }


            // Refer to the JavaScript quickstart on how to setup the environment:
            // https://developers.google.com/calendar/quickstart/js
            // Change the scope to 'https://www.googleapis.com/auth/calendar' and delete any
            // stored credentials.

            const event = {
                'summary': 'Google I/O 2015',
                'location': '800 Howard St., San Francisco, CA 94103',
                'description': 'A chance to hear more about Google\'s developer products.',
                'start': {
                    'dateTime': '2015-05-28T09:00:00-07:00',
                    'timeZone': 'America/Los_Angeles'
                },
                'end': {
                    'dateTime': '2015-05-28T17:00:00-07:00',
                    'timeZone': 'America/Los_Angeles'
                },
                'recurrence': [
                    'RRULE:FREQ=DAILY;COUNT=2'
                ],
                'attendees': [
                    { 'email': 'lpage@example.com' },
                    { 'email': 'sbrin@example.com' }
                ],
                'reminders': {
                    'useDefault': false,
                    'overrides': [
                        { 'method': 'email', 'minutes': 24 * 60 },
                        { 'method': 'popup', 'minutes': 10 }
                    ]
                }
            };

            const request = gapi.client.calendar.events.insert({
                'calendarId': 'primary',
                'resource': event
            });

            request.execute(function (event) {
                appendPre('Event created: ' + event.htmlLink);
            });

        </script>
        <script async defer src="https://apis.google.com/js/api.js" onload="gapiLoaded()"></script>
        <script async defer src="https://accounts.google.com/gsi/client" onload="gisLoaded()"></script>











</body>

</html>