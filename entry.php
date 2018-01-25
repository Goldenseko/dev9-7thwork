<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登録フォーム</title>
    <link rel="stylesheet" href="css/sanitize.css"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>登録フォーム</h1>
    <p>Webサイトの内容は<a href="./" target="_blank">こちらから</a>確認できます。</p>
    <form action="insert.php" method="post"><!--結構重要だったりする。  
    actionの中身がinsert.phpではないと別の所に送っている事になる。必ず確認する。
     -->
        <ul>
            <li class="form-item">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" class="uk-input">
            </li>
            <li class="form-item">
                <label for="detail">本文</label>
                <textarea name="detail" id="detail" cols="30" rows="10" class="uk-textarea"></textarea>
            </li>
            <li class="form-item">
            <label for="myURL">URL</label>
                <input type="text" name="myURL" id="myURL" class="uk-input">
            </li>
        </ul>
        <input type="submit" value="送信">
    </form>    
</div>
</body>
</html>