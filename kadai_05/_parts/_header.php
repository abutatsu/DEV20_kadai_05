 <?php
    //部品を読込
    require('../_parts/functions.php');// 読込に失敗したら処理を止める(require)

    
    
    // じゃんけんの手を配列に代入
    $hands = ['グー', 'チョキ', 'パー'];
    // $picts=['gu','choki','pa'];
    // $results=['あいこ','アナタのまけです...','アナタのかちです！'];

?>

<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="../css/main.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@700;900&family=Reggae+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>男気ジャンケン</title>
</head>
<body>


