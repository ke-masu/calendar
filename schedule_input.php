<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Calendar</title>
</head>
<body>
<?php

$date=$_POST['date'];
print '<div class="main">';
print '<h3>タスク入力画面</h3>';
print '<p>'.$date.'</p>';
print '<form method="post" action="schedule_submit.php">';
print '<div class="cp_iptxt">
       <label class="ef">
       <input type="text" placeholder="タスク" required>
       </label>
       </div>';
print '<input type="hidden" name="date" value="'.$date.'">';
print '<br />';
print '<input type="submit" value = "登録">';
print '</form>';
print '<br><br><a href="calendar.php">戻る</a>';
print '</div>'
?>

</body>
</html>