<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>グローバルコミュニティ</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <style>
        /* グローバルスタイル */
        body {
            margin: 0;
            font-family: "Hiragino Kaku Gothic ProN", sans-serif;
        }

        a {
            text-decoration: none;
        }

        header {
            height: 65px;
            width: 100%;
            background-color: rgb(251, 251, 251);
            position: fixed;
            top: 0;
            z-index: 10;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            width: 224px;
        }

        .header-right {
            display: flex;
            gap: 20px;
        }

        .header-right a {
            line-height: 65px;
            padding: 0 15px;
            color: rgb(144, 142, 142);
            font-weight: bold;
        }

        /* メイン画像のスタイル */
        .top-wrapper {
            background-image: url('img/main.png');
            background-size: cover;
            background-position: center top;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: grey;
            text-align: center;
        }

        .top-wrapper h1 {
            font-size: 45px;
            letter-spacing: 5px;
            margin: 10px 0;
            opacity: 0.7;
        }

        .top-wrapper p {
            opacity: 0.7;
        }

        .btn-wrapper {
            margin: 20px 0;
        }

        .btn-wrapper a {
            padding: 8px 24px;
            color: white;
            border-radius: 4px;
            display: inline-block;
            opacity: 0.8;
        }

        .btn-wrapper .instagram {
            background-color: #c84281;
        }

        .btn-wrapper .facebook {
            background-color: #3b5998;
            margin-right: 10px;
        }

        .btn-wrapper .linkedin {
            background-color: #55acee;
        }

        .btn-wrapper .btn:hover {
            opacity: 1;
        }

        .fa {
            margin-right: 5px;
        }

        /* 4つの画像のスタイル */
        .lesson-wrapper {
            height: 500px;
            padding-bottom: 80px;
            background-color: #f7f7f7;
            text-align: center;
        }

        .lessons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .lesson {
            flex: 1;
            margin: 10px;
            max-width: 23%;
        }

        .lesson-icon img {
            width: 100%;
        }

        .txt-contents {
            width: 80%;
            display: inline-block;
            margin-top: 20px;
            font-size: 12px;
            color: #b3aeb5;
        }

        /* メッセージラッパー */
        .message-wrapper {
            border-bottom: 1px solid #eee;
            padding-bottom: 80px;
            text-align: center;
        }

        .message-wrapper .heading {
            padding-top: 60px;
            padding-bottom: 30px;
            color: #5f5d60;
        }

        .message-wrapper h2 {
            font-weight: normal;
        }

        .jumbotron {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin: 40px auto;
            width: 80%;
        }
    </style>
</head>
<body>

    <!-- ヘッダー -->
    <header>
        <div class="header-left">
            <img class="logo" src="img/logo.png" alt="The STYLE INSIGHT">
        </div>
        <div class="header-right">
            <a href="select.php">データ一覧</a>
            <a href="login.php">ログイン</a>
        </div>
    </header>

    <!-- メインセクション -->
    <div class="top-wrapper">
        <h1>EXPAND YOUR POTENTIAL</h1>
        <h1>CONNECT WITH THE WORLD</h1>
        <p>The STYLE INSIGHTは、時間や場所にとらわれない、自分らしい働き方＆生き方を実現するグローバルコミュニティです。</p>
        <div class="btn-wrapper">
        <a href="https://www.instagram.com/yoko_kondo_thestyleinsight/?hl=ja" class="btn instagram" target="_blank">Instagram</a>
            <a href="#" class="btn facebook"><span class="fa fa-facebook"></span>Facebook</a>
            <a href="#" class="btn linkedin"><span class="fa fa-twitter"></span>Linkedin</a>
        </div>
    </div>

    <!-- 4つの画像セクション -->
    <div class="lesson-wrapper">
        <div class="container">
            <div class="heading">
                <h2>こんな人におすすめです!</h2>
            </div>
            <div class="lessons">
                <div class="lesson">
                    <div class="lesson-icon">
                        <img src="img/img1.png" alt="Lesson 1">
                    </div>
                    <p class="txt-contents">起業家に必要な専門家と連携したい<br>パートナーやファンを形成したい<br>異業種の信頼できる人と繋がりたい</p>
                </div>
                <div class="lesson">
                    <div class="lesson-icon">
                        <img src="img/img2.png" alt="Lesson 2">
                    </div>
                    <p class="txt-contents">社会的影響力のある仕事がしたい<br>スキルシェアで自分のチカラを試したい<br>チームでPJを進めたい</p>
                </div>
                <div class="lesson">
                    <div class="lesson-icon">
                        <img src="img/img3.png" alt="Lesson 3">
                    </div>
                    <p class="txt-contents">狭い世界に捉われず視野を広げたい<br>自分の能力の本質的価値を確かめたい<br>自立して稼ぐ体験をしたい</p>
                </div>
                <div class="lesson">
                    <div class="lesson-icon">
                        <img src="img/img4.png" alt="Lesson 4">
                    </div>
                    <p class="txt-contents">他ジャンルと繋がり感性を広げたい<br>活動をPRやビジネスに繋げたい<br>社会や市場の変化に敏感でいたい</p>
                </div>
            </div>
        </div>
    </div>

    <!-- メッセージセクション -->
    <div class="message-wrapper">
        <div class="container">
            <div class="heading">
            <h1 class="highlight">さぁ、あなたもグローバルコミュニティで夢を広げてみませんか?</h1>
        <style>
             .message-wrapper {
        background-color: #f0f0f0; /* 薄いグレー */
        padding: 20px; /* コンテンツを囲むための余白 */
    }

            .highlight {
    font-weight: bold; /* 太文字 */
    color: #C84281; /* ピンクパープル */
}
</style>
        </div>
        </div>
    </div>

    <!-- フォームセクション -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>会員登録</legend>
                <label>Name：<input type="text" name="name"></label><br>
                <label>Email：<input type="text" name="email"></label><br>
                <label><textarea name="comment" rows="10" cols="40"></textarea></label><br>
                <label>DATE：<input type="text" name="indate"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <style>
    .jumbotron {
        background-color: #f0f0f0; /* 薄いグレー */
        padding: 20px; /* コンテンツを囲む余白 */
        border-radius: 10px; /* 角を少し丸く */
    }
</style>

</body>
</html>