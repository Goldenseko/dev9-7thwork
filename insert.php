<?php 
//フォームのデータ受け取り
$title = $_POST["title"];
// $title = htmlspecialchars( $_POST["title"], ENT_QUOTES);
$myURL = $_POST["myURL"];
// $myURL = htmlspecialchars( $_POST["myURL"], ENT_QUOTES);
$detail = $_POST["detail"];
// $detail = htmlspecialchars( $_POST["detail"], ENT_QUOTES);
//DB定義
const DB = "";
const DB_ID = "root";
const DB_PW = "";
const DB_NAME = "";

//PDOでデータベース接続
try {
    $pdo = new PDO('mysql:host=localhost;dbname=gs_db;charset=utf8',DB_ID,DB_PW);
}catch (PDOException $e) {
    exit( 'DbConnectError:' . $e->getMessage());
}

// 実行したいSQL文
$sql = "INSERT INTO gs_an_table (id,title,myURL,detail,posttime) VALUES (NULL,:title,:myURL,:detail,sysdate())";

//MySQLで実行したいSQLセット。プリペアーステートメントで後から値は入れる
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title',$title,PDO::PARAM_STR);
$stmt->bindValue(':myURL',$myURL,PDO::PARAM_STR);
$stmt->bindValue(':detail',$detail,PDO::PARAM_STR);
//実際に実行
$flag = $stmt->execute();

//実行完了した場合はentry.phpにリダイレクト
//失敗した場合はエラーメッセージ表示
if($flag==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    header('Location: entry.php');
    exit();
}

?>