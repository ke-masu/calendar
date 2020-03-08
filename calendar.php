<?php

try{
$dsn = 'mysql:dbname=calendar;host=localhost;charset=utf8';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'SELECT * FROM schedule';
$stmt =$dbh->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$dbh = null;
} catch (Exception $e){
    echo "データベースと接続出来ません";
}

if(isset($result)){


$date = array();
$task = array();

foreach($result as $value){
      $date[] = $value["date"];
      $task[] = $value["do"];
}
$varJsdate=json_encode($date);
$varJstask=json_encode($task);


}

?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="calendar.css">
</head>
<body>
   <h1>タスク管理カレンダー</h1>

   <span id = "menu" class="tips">
      
   </span>
  


   <div id="calendar"></div>
   <script src="calendar.js"></script>


   <script>
    var plan_date=JSON.parse('<?php echo $varJsdate; ?>');//jsonをparseしてJavaScriptの変数に代入
    var plan_task=JSON.parse('<?php echo $varJstask; ?>');//jsonをparseしてJavaScriptの変数に代入
   </script>

   <script src="function.js"></script>
   
   
 
</body>
</html>