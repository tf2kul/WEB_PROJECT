<?php

include('db_con.php');

$id = hash('sha512',$_POST['id']);
$pw = hash('sha512',$_POST['pw']);

if(!$_POST['id'] || !$_POST['pw']) {
    echo "아이디나 비밀번호를 치세요<br>";
    exit;
}
else if($id==hash('sha512',"123123") && $pw==hash('sha512',"123123")) {
    echo "로그인 성공";
}

else {
    echo "로그인 실패";
    exit;
}

?>