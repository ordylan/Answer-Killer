<?php
if($_GET["word"] == "test"){
    echo '
    <form action="#" method="post">
<h2>输入词: <input type="text" name="word">
<input type="submit"></h2>
</form>'
    ;
    require_once 'WORD.php';
    $apf = new AK_WORD_FUNCTION();
    echo "输出词: ".$apf->CheckWord($_POST["word"]);
}
else echo"
daikaifaaaa
设置啊啊
????????
landezuoleaaaaaa";