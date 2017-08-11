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
        <form action="forgetid.php" method="POST" >
            <input type="email" name="email" id="email" >
            <button type="submit">아이디 찾기</button>
        </form>
        <form action="forgetpw.php" method="POST">
            <input type="text" name="id" id="id">
            <input type="email" name="email" id="email" >
            <button type="submit">비밀번호찾기</button>
        </form>
    </div>
</body>
</html>