<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--임시-->
    <form action="Todaycheck.php">
        <label for="check"><?=$_SESSION['name']?></label>
        <input type="text" name="check" id="check">
        <button type="submit">출석체크</button>
    </form>
</body>
</html>