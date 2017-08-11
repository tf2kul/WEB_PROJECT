<?phpinclude('db_con.php');

$email = $_POST['email'];$name = $_POST['name'];

if(isset($_POST['submit_id'])) {if(empty($email)||empty($name)) { echo "입력 좀 하고사시죠? ^^";}else {$query = "SELECT * from user";$last = $db->query($query);$last->setFetchMode(PDO::FETCH_ASSOC);while($row= $last->fetch()){        if($row['name']==$name && $row['email']==$email) {        //$search_engine = "SELECT * from user WHERE email=='$email' && name=='$name'";        //$db->exec($search_engine);        echo "당신의 아이디는: ";        echo $row['id'];        echo "입니다<br>";        exit;    }}    echo "일치하는 아이디가 없습니다<br>";        }}
  
else {$id = $_POST['id'];if(empty($email)||empty($name) || empty($id)) { echo "입력 좀 하고사시죠? ^^"; exit;}    echo "비밀번호를 찾습니다<br>";$query = "SELECT * from user";$last = $db->query($query);$last->setFetchMode(PDO::FETCH_ASSOC);while($row= $last->fetch()){ if($row['id']==$id && $row['email']==$email && $row['name']==$name) {  $randDDI = mt_rand(1,99999999);  $hash_randDDI = hash('sha512',$randDDI);  $modify_query = "UPDATE user SET pw = '$hash_randDDI' WHERE id='$id'";  $db->exec($modify_query);  echo "<br>당신의 임시비밀번호는 ";        echo $randDDI;        echo " 입니다<br>";  break;  exit; }}    echo "일치하지 않습니다<br>";
}




?>
