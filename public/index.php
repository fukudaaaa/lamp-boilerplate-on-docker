<!-- <?php
$dsn = 'mysql:host=mysql;dbname=test;charset=utf8';
$user = 'root';
$password = 'pass';
 
try {
  $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'データベースにアクセスできません！' . $e->getMessage();
  exit;
}

// SELECT文を変数に格納
$sql = "SELECT * FROM cities";
 
// SQLステートメントを実行し、結果を変数に格納
$stmt = $dbh->query($sql);
 
// foreach文で配列の中身を一行ずつ出力
foreach ($stmt as $row) {

  // データベースのフィールド名で出力
  echo $row['name'].'：'.$row['population'].'万人';
 
  // 改行を入れる
   echo '<br>';
}

?> -->
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <title>Document</title>
</head>
<body>
<div>
<p>
<a target=”_blank” href='/test'>phpinfo</a><br>
<a target=”_blank” href='http://localhost:8080/'>admin</a>

</p>
</div>
<h1>データベースからデータを取り出す</h1>
<?php
$dsn = 'mysql:host=mysql;dbname=test;charset=utf8';
$user = 'root';
$password = 'pass';

 
try {
  $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
  echo 'データベースにアクセスできません！' . $e->getMessage();
  exit;
}
// SELECT文を変数に格納
$sql = "SELECT * FROM cities";
 
// SQLステートメントを実行し、結果を変数に格納
$stmt = $dbh->query($sql);
 
// foreach文で配列の中身を一行ずつ出力
foreach ($stmt as $row) {

  // データベースのフィールド名で出力
  echo $row['name'].'：'.$row['population'].'万人';
  echo '<br>';
}

?>
</body>
</html>