<?php

include('db_con.php');
session_start();
$good_login = 0;
$id = $_POST['id'];
$pw = $_POST['pw'];

if(empty($id) || empty($pw)) {
    echo "아이디나 비밀번호를 치세요<br>";
    exit;
}
$hash_pw = hash('sha512',$pw);
$query = "SELECT * from user";
//$query = "SELECT * from login WHERE id==$id and pw==$pw";
$last = $db->query($query);
$last->setFetchMode(PDO::FETCH_ASSOC);

while($row= $last->fetch()){
if($id == $row['id'] && $hash_pw == $row['pw']) {
	$good_login = 1;
	break;
	}
}
if($good_login) {
	echo "Login Success !";
	exit;
}
else {
	echo "G00d..bye..";
	exit;
}






?>
