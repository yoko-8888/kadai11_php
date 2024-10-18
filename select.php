<?php
//0. SESSION開始！！
session_start();

//１．関数群の読み込み
include("funcs.php");

//LOGINチェック → funcs.phpへ関数化しましょう！
//  !isset ＝　もしセットされていなければ（!が付くと逆の意味になる、issetならセットされていればの意味）
// if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
  // 上記10行目の指定に当てはまらないと、ログインエラーになる
  //  exit("Login Error");
// }else{
  // 　　10行目がうまく実行されれば、15行目でSESSION KEYを入れ替える関数、trueは必須
    // session_regenerate_id(true);  
    // $_SESSION["chk_ssid"] = session_id();
// }

//上記をfuncs.phpへ関数化した後、貼り付けるのが下記　　sschk();→ログインしないと見れない設定
// detail.php、delete.php、update.phpも同様に下記貼り付けすると、ログインしないと見れなくなる
sschk();

//２．データ登録SQL作成
$pdo = db_conn();
$sql = "SELECT * FROM gs_bm_table";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
$json = json_encode($values,JSON_UNESCAPED_UNICODE);

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>会員登録表示</title>
<!-- <link rel="stylesheet" href="css/range.css"> -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<!-- <style>div{padding: 10px;font-size:16px;}</style> -->

<style>
        body {
            background-image: url('img/main2.png'); /* 画像パスを指定 */
            background-size: cover; /* 画像を全体にフィットさせる */
            background-position: center center; /* 画像を中央に配置 */
            background-repeat: no-repeat; /* 画像を繰り返さない */
            height: 100vh; /* ビューポートの高さを100%に設定 */
            margin: 0; /* 余白をなくす */
        }
        .jumbotron {
            background-color: rgba(255, 255, 255, 0.8); /* 背景を少し透明にしてテキストを読みやすくする */
            padding: 20px;
            border-radius: 10px;
        }
    </style>


</head>

<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- ログイン成功時、該当者の名前を表示する方法 -->
        <?=$_SESSION["name"]?>さん、こんにちは！
      <a class="navbar-brand" href="index.php">データ登録</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->


<!-- Main[Start] -->
<div>
    <div class="container jumbotron">

      <table>
      <?php foreach($values as $v){ ?>
        <tr>
          <td><?=$v["id"]?></td>
          <td><a href="detail.php?id=<?=$v["id"]?>"><?=$v["title"]?></a></td>
          <?php if($_SESSION["kanri_flg"]=="1"){ ?>
            <td><a href="delete.php?id=<?=$v["id"]?>">[削除]</a></td>
          <?php } ?>
        </tr>
      <?php } ?>
      </table>

  </div>
</div>
<!-- Main[End] -->


<script>
  const a = '<?php echo $json; ?>';
  console.log(JSON.parse(a));
</script>
</body>
</html>
