<?php
include('db_con.php');

$id = $_POST['id'];
$pw = $_POST['pw'];
$re_pw = $_POST['re_pw'];

if(empty($id) || empty($pw)) {
    echo "아이디나 비밀번호를 입력하세요 구르트^^<br>";
    exit;
}

else if( $pw!=$re_pw ) {
	echo "두개의 비밀번호 입력값이 다릅니다 람쥐 고기";
	exit;
}
else {
$query = "SELECT * from user";
$last = $db->query($query);
$last->setFetchMode(PDO::FETCH_ASSOC);
while($row= $last->fetch()){
    if($id==$row['id']) {
	echo "똑같은 아이디가 존재합니다";
	exit();
   }
 }
}

$hash_pw = hash('sha512',$pw);
$query = "INSERT INTO user VALUES('$id','$hash_pw')";
$signup = $db->exec($query);

?>