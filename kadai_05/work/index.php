<?php 

    // $name = filter_input(INPUT_COOKIE, 'name');
    // $name = isset($nameFromGet) ? $nameFromGet : $_COOKIE['name'];
    // $sex = filter_input(INPUT_COOKIE, 'sex');
    include('../_parts/_header.php');// 読込に失敗しても処理を止めない(include)
    
?>


<body>
    <div class="index_top">
        <img src="../images/indeximage.jpg" alt="">
        <form method="post" action="top.php" name="myform" onsubmit="return Check()">
                    <h1 class="charengername">挑戦者</h1>
                    <div class="element_wrap">
                    <p>氏　名：<input type="text" name="name" size="20" autocomplete="off"></p>
                    <label>性　別：<input type="radio" name="sex" value="殿">殿</label>
                    <label><input type="radio" name="sex" value="姫">姫</label>
                </div>
          
            <p><input type="submit" value="いざ、会場へ！"></p>
        </form>
    </div>
    <script>
    //フォームへの入力チェック
        function Check(){
        if (document.myform.name.value == ""){
        alert("名前を入力してください");
        return false;
        }
        if (document.myform.sex.value == ""){
        alert("性別を選択してください");
        return false;
        }
        return true;
        }
    
    </script>
</body>
</html>

<?php

    include('../_parts/_footer.php');