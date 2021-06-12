<?php
// session_start();
    $nameFromGet = trim(filter_input(INPUT_POST, 'name'));//trim=空白の除去
    
    $nameFromGet = $nameFromGet !== '' ? $nameFromGet:$_COOKIE['name'];
    // $nameFromGet = isset($nameFromGet) ? $nameFromGet : $_COOKIE['name'];
    // $nameFromGet = isset($nameFromGet) ? $nameFromGet : $_COOKIE['name'];
    
    $sexFromGet = trim(filter_input(INPUT_POST, 'sex'));
    $sexFromGet = $sexFromGet !== '' ? $sexFromGet:$_COOKIE['sex'];
    setcookie('name',$nameFromGet);
    setcookie('sex',$sexFromGet);

    include('../_parts/_header.php');// 読込に失敗しても処理を止めない(include)
    

?>

<div class="username">
    <img src="../images/nameframe.png" alt="">
    <P><?="挑戦者『".($nameFromGet)."』".($sexFromGet);?></P>
</div>


<div class="jyanken_form" style="text-align:center;">
    <h1>商品と出す手を選んで勝負いざ勝負！</h1>
    <div class="form-box">
        
        
        <form action="battle.php" method="post">
            <fieldset class="item">
                <legend>商品</legend>
                    <label><input type="radio" name="item" value="伊勢海老">伊勢海老(1万円)</label>
                    <label><input type="radio" name="item" value="液晶テレビ">液晶テレビ(5万円)</label> 
                    <label><input type="radio" name="item" value="指輪">指輪(10万円)</label> 
            </fieldset>
            <label style="display:block;">
                <input type="radio" title="playerHand" name="playerHand" value="グー">グー
            </label>
            <label style="display:block;">
                <input type="radio" title="playerHand" name="playerHand" value="チョキ">チョキ
            </label>
            <label style="display:block;">
                <input type="radio" title="playerHand" name="playerHand" value="パー">パー
            </label>
            <button type="submit" class="battle-button">勝負！</button>
        </form>
    </div>
    <p><a href="reset.php">TOPへ戻る</p>
</div>




<?php

    include('../_parts/_footer.php');