<?php
    
    // session_start();

    
    require('../_parts/functions.php');// 読込に失敗したら処理を止める(require)

    
    $nameFromGet = trim(filter_input(INPUT_POST, 'name'));//trim=空白の除去
    $nameFromGet = $nameFromGet !== '' ? $nameFromGet:'...';//?の左側がtrueなら:の左側を、falseなら右側を返す
    $age = trim(filter_input(INPUT_POST, 'age'));
    $age = $age !== '' ? $age:'...';//!== 厳密不等価 値が違うか型まで含めて比較
    $sex = trim(filter_input(INPUT_POST, 'sex'));
    setcookie('name',$nameFromGet);
    // $_SESSION['name'] = $name;
    


    
    //ジャンケン
    $hands=['グー', 'チョキ', 'パー'];
    $picts=['gu','choki','pa'];
    $results=['あいこ','アナタのまけです...','アナタのかちです！'];
    //自分の手とPCの手をセットする
    if(isset($_POST['hand'])){//ラジオボックスで手が確認されたら実行
        $userHand=(int)$_POST['hand'];//(int)整数に変換
        $pcHand=rand(0,count($hands)-1);//0～2の中で乱数を生成
    }
    
    include('../_parts/_header.php');// 読込に失敗しても処理を止めない(include)
?>


    <P><?="『".h($nameFromGet)."』".($sex);?></P>
    
    <P><?=h($age)."歳";?></P>
    
    
    
    <div class="jyanken_form">
        <form method="post">
        <?php for($i=0;$i<count($hands);$i++):?>
        <?php $checked=isset($userHand) && $userHand===$i ? 'checked':'';?>
        <input type="radio" name="hand" value="<?=$i?>" <?=$checked?>><?=$hands[$i]?><br>
        <?php endfor;?>
        <button type="submit">ショウブ</button>
        </form>
        <?php if(isset($_POST['hand'])):?>
        <div class="result">
            <img src="../images/<?=$picts[$userHand]?>.png">
            <img src="../images/<?=$picts[$pcHand]?>.png">
        </div>

        <!-- 判定・・・3で割った余りの値で判定 -->
        <p><?=$results[($userHand + 3 -$pcHand) % 3]?></p>
        
    </div>
    
    <?php endif;?><!-- 条件分岐の終わり -->
    
    <p><a href="index.php">TOPへ戻る</p>
    <?php
    
    

    include('../_parts/_footer.php');
 
</script>

