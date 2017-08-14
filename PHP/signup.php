<?php
include('db_con.php');

$id = $_POST['id'];
$pw = $_POST['pw'];
$name = $_POST['name'];
$re_pw = $_POST['re_pw'];
$email = $_POST['email'];

$id = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $id);
$pw = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $pw);
$name = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $name);
$re_pw = preg_replace("/[ #\&\+\-%@=\/\\\:;,\.'\"\^`~\_|\!\?\*$#<>()\[\]\{\}]/i", "", $re_pw);

if(empty($id) || empty($pw)||empty($name)||empty($re_pw) || empty($email)) {
    echo "전부 다 입력하세요^^<br>";
    exit;
}

else if( $pw!=$re_pw ) {
	echo "두개의 비밀번호 입력값이 다릅니다";
	exit;
}
else {
$query = "SELECT * from user";
$last = $db->query($query);
$last->setFetchMode(PDO::FETCH_ASSOC);
while($row= $last->fetch()){
    if($id==$row['id'] || $email==$row['email']) {
	echo "똑같은 아이디가 존재합니다";
	exit();
   }
 }
}

$hash_pw = hash('sha512',$pw);
//$query = "INSERT into user(id,pw,email,name) VALUES('admin','admin','admin@naver.com','admin')";
$query = "INSERT INTO user(id,pw,email,name) VALUES('$id','$hash_pw','$email','$name')";
$signup = $db->exec($query);

echo "회원가입을 축하드립니다";

?>
