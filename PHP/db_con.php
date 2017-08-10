<?php
$dsn = "mysql:host=localhost;port=3306;dbname=web_project;charset=utf8";
try {
    $db = new PDO($dsn,"admin","admin"); //db 연결
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); //db기능 실행못할때 실행할수있게 해줌
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //에러를 처리해줌
    
    $query = "SELECT id,pw from WEB_PROJECT";
    $last = $db->prepare($query);
    $last->execute();
    
    $query_result = $last->fetch(PDO::FETCH_ASSOC);
}
    
    
catch(PDOException $e) {
    echo "<script>alert(\"데이터베이스 연결실패 ㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋ\");</script>";
    exit;
}

?>