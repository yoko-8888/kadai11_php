<!-- insert.phpは、ログインしていない人でも見れるようにしている -->
<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$comment = $_POST["comment"];
// $age    = $_POST["age"]; //追加されています
// $indate = $_POST["indate"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,email,comment,indate)VALUES(:title,:url,:comment,sysdate())");
$stmt->bindValue(':name', $title, PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $url, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':age', $age, PDO::PARAM_INT);        //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("index.php");
}
?>
