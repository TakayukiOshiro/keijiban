<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    
    <?php
    
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson1;host=localhost", "root", "");
    $stmt = $pdo->query("select*from 4each_keijiban");
    
    ?>
    <header>
        <img src="4eachblog_logo.jpg">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    
    <main>
        <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
            
            <div class="form">
                <h2>入力フォーム</h2>
                <form method="post" action="insert.php">
                <div class="info">
                    <label>ハンドルネーム</label>
                        <div>
                         <input type="text" name="handlename" size="35">
                        </div>
                </div>
                
                
                <div class="info">
                 <label>タイトル</label>
                    <div>
                    <input type="text" name="title" size="35">
                    </div>
                </div>
                
                <div class="info">
                    <label>コメント</label>
                    <div>
                        <textarea cols="70" rows="10" name="comments"></textarea>
                    </div>
                </div>
                <input class="submit" type="submit" value="投稿する">
            
            </form>
                
            </div>
            <?php
            while($row = $stmt->fetch()){ 
            echo "<div class='post'>";
                echo "<h3>".$row['title']."</h3>";
                echo "<div class='contents'>";
                 echo $row['comments'];
                
            
            echo "<div class='handlename'>posted by" .$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
            }
            ?>
        </div>
        
        <div class="right">
        <div class="article">
            <h3>人気の記事</h3>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ　Top5</li>
                <li>HTMLの基礎</li>
            </ul>
        </div>
        <div class="popularLink">
            <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
        </div>
        <div class="category">
            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
        
        
        </div>
    </main>
        
    <footer>
        copyright©internous|4each blog the which provides A to Z about programing.
        
    </footer>
</body>
    
</html>