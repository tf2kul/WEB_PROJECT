<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <h1>카페 만들기</h1>
        <form action="cafe_creat.php" method="POST" enctype="multipart/form-data">
            카페 이름: <input type="text" name="cname" id="cname" require>
            카페 주소: <input type="text" name="curl" id="curl" require>
            카페 배너: <input type="file" name="bener" id="bener" >
        </form>
    </div>
</body>
</html>