<?php
include('db_con.php');

$id = $_POST['id'];
$name = $_POST['name'];
$input = $_POST['input']; //0이면 아이디 찾기 1이면 비밀번호 찾기
$check_id = 0;


if(empty($id)||empty($name)) {
	echo "입력 좀 하고사시죠? ^^";
	exit;
}


else if($input == 1) {
echo "PW 찾기";
$query = "SELECT id from user";
$last = $db->query($query);
$last->setFetchMode(PDO::FETCH_ASSOC);
while($row= $last->fetch()){
	if($row['id']==$id) {
		$randDDI = mt_rand(1,999999999999999);
		$hash_randDDI = hash('sha512',randDDI);
		$modify_query = "UPDATE user SET pw = '$hash_randDDI' WHERE id='$id'";
		$db->exec($modify_query);
		echo "당신의 임시 비밀번호는: "+randDDI+"입니다 ~";
		break;
		exit;
	}
}
}

else {
echo "ID 찾기"; //name으로 찾게


}

?>
