<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
</head>
<body>
<?php

try {
$date = $_POST['date'];
$schedule = $_POST['schedule'];

$date=htmlspecialchars($date,ENT_QUOTES<'UTF-8');
$schedule=htmlspecialchars($schedule,ENT_QUOTES<'UTF-8');

$dsn = 'mysql:dbname=calendar;host=localhost;charset=utf8';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = 'INSERT INTO schedule(date,do) VALUES(?,?)';
$stmt =$dbh->prepare($sql);
$data[] = $date;
$data[] = $schedule;
$stmt->execute($data);

$dbh = null;

print'登録しました。<br />';

}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をおかけしております。';
    exit();
}
?>

<a href="calendar.php">カレンダーに戻る</a>

</body>
</html>