<?php
    // session_start();
    $nameFromGet = isset($nameFromGet) ? $nameFromGet : $_COOKIE['name'];
    
    $nameFromGet = $nameFromGet !== '' ? $nameFromGet:'...';//?の左側がtrueなら:の左側を、falseなら右側を返す
    $sexFromGet = isset($sexFromGet) ? $sexFromGet : $_COOKIE['sex'];
    $item = trim(filter_input(INPUT_POST, 'item'));
    setcookie('name',$nameFromGet);
    setcookie('sex',$sexFromGet);

    include('../_parts/_header.php');// 読込に失敗しても処理を止めない(include)
    
    

    //自分の手とPCの手をセットする
    if (isset($_POST['playerHand'])) {
        // プレイヤーの手を代入
        $playerHand = $_POST['playerHand'];

        // PCの手をランダムで選択
        $key = array_rand($hands);
        $pcHand = $hands[$key];
        
        // 勝敗を判定
        if ($playerHand == $pcHand) {
            $result ='あいこ';
        } elseif ($playerHand == 'グー' && $pcHand == 'チョキ') {
            $result = '勝ち';
        } elseif ($playerHand == 'チョキ' && $pcHand == 'パー') {
            $result = '勝ち';
        } elseif ($playerHand == 'パー' && $pcHand == 'グー') {
            $result = '勝ち';
        } else {
            $result = '負け';
        }
    }
    
    
?>

<div class="username">
    <img src="../images/nameframe.png" alt="">
    <P><?="挑戦者『".($nameFromGet)."』".($sexFromGet);?></P>
</div>

<div class="jyanken_form">
    <h1>じゃんけん　ホイ！</h1>
    <div class="result">
        <?php
        //画像表示
        if ($playerHand == 'グー' ) {
            echo '<img src="../images/guu.png">';
        } elseif ($playerHand == 'チョキ') {
            echo '<img src="../images/cho.png">';
        } else {
            echo '<img src="../images/paa.png">';
        }

        if ($pcHand == 'グー' ) {
            echo '<img src="../images/guu.png">';
        } elseif ($pcHand == 'チョキ') {
            echo '<img src="../images/cho.png">';
        } else {
            echo '<img src="../images/paa.png">';
        }
        
        ?>
    </div>

    <p class="result-word"><?= $result ?>！</p>
    
    <div class="resultmessege">
        <?php
        if($result === '勝ち'){
            echo ($item)."『ゴチになります！』";
        }else{
            echo "『残念！』";
        }
        ?>
    </div>

    <p><a class="red" href="top.php">>>もう一回勝負する</a></p>
    <p><a href="reset.php">TOPへ戻る</p>
</div>


    

<?php

    include('../_parts/_footer.php');
 


