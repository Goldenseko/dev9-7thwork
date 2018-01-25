<?php 
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

// 実行したいSQL文（最新順番3つ取得）
$sql = 'SELECT * FROM gs_an_table ORDER BY POSTTIME /*DESC LIMIT 3*/';
//MySQLで実行したいSQLセット。プリペアーステートメントで後から値は入れる
$stmt = $pdo->prepare($sql);
$flag = $stmt->execute();

if($flag==false){
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Bookkeeping.com</title>
	<link rel="stylesheet" href="css/sanitize.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--header-->
<div class="header">
	<h1 class="site-title">世古繁喜の旅日記と読書Bookmark</h1>
</div>
<!--//header-->
	
<!--navigation-->
<div class="navigation">
	<div class="wrapper">
		<ul class="nav-list">
			<li class="nav-item">
				<a href="#about">About</a>
			</li>
			<li class="nav-item">
				<a href="#history">今度行く所</a>
			</li>
			<li class="nav-item">
				<a href="#works">Contact</a>
			</li>
		</ul>		
	</div>
</div>
<!--// navigation-->

<!--about me-->
<!-- <div class="section section__about" id="about">
	<div class="text-center">
		<h2 class="content-title">About Me</h2>
		<p class="profile-thumb"><img src="images/profile.png" alt="世古繁喜の顔写真"></p>
		<p class="profile-name">世古繁喜</p>
        <p class="profile-text">　今回は時間が無い。課題難しい</p>	
	</div>
</div> -->
<!--// about me-->
	
<!--History-->
<!-- <div class="section section__history" id="history">
	<h2 class="content-title content-title__history">History</h2>
	<div class="history-outer">
		<ul class="history-list">
			<li class="history-item">1983年　Shizuoka県に生まれる。</li>
			<li class="history-item">2017年　Gs Academy入学</li>
			<li class="history-item">2018年　Web勉強始める。タイにいる</li>
		</ul>
	</div>
</div> -->
<!--// History-->
	
<!--Works-->
<div class="section section__work" id="work">
	<h2 class="content-title">Bookコンテンツ</h2>	
	<div class="wrapper">
		<ul class="work-list">

			<?php 
				while($result = $stmt->fetch(PDO::FETCH_ASSOC)){


			?>

			<li class="work-item">
				<div class="work-thumb">
					<!-- <img src="https://placehold.jp/300x200.png" alt="オリジナルイラスト年賀状の画像"> -->
				</div>
				<h3 class="work-title"><?php echo $result['title'];?></h3>
				<p><?php echo $result['posttime'];?></p>
				<p><?php echo $result['myURL'];?></p>
			 </li> 
				<?php } ?>



		</ul>
		
	</div>
	<a href="#" class="btn-more">その他の本をもっと見る</a>
</div>
<!--// Works-->

<!--footer-->
<div class="footer">
	<p class="copyrights">copyrights 2018 Shigeki Seko All Rights Reserved.</p>
</div>
<!--// footer-->

</body>
</html>

<?php 
}
?>