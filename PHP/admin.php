<?php
    //관리자가 아니라면 아웃
?>
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
        <header>
            <h1><?php //카페 이름 ?>admin page</h1>
        </header>
        <section>
            <article class="member_list">
                <?php
                    //멤버 목록 불러옴
                    //강퇴기능추가
                ?>
                <ul>
                    <li></li>
                </ul>
            </article>
            <article class="allow_list">
                <?php
                    //가입신청한 사람 목록
                    //승락,취소
                ?>
            </article>
            <article class="close">
                    <form action="close.php">
                        <button type="submit">카페 폐쇄하기</button>
                    </form>
            </article>
        </section>
        <footer>

        </footer>
    </div>
</body>
</html>