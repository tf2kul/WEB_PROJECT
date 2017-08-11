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
        <header class="bener">
            
        </header>
        <aside>
            <div class="info">
                <!--카페지기 정보,설명-->
                <?php
                    //카페에 가입이 안되어있는 사람이라면
                ?>
                <form action="../php/apply.php" method="POST" >
                    <button type="submit">가입 신청</button>
                </form>
                <?php
                    //카페에 가입이 되어있는 사람이라면
                ?>
                <form action="../php/secession.php" method="POST">
                    <button type="submit">카페 탈퇴</button>
                </form>
            </div>
            <div class="dir">
                <!--cafe db에서 디렉토리 불러오기-->
            </div>
        </aside>
        <section>
                <article class="content">
                    <!--게시글-->
                </article>
        </section>
        <footer>

        </footer>
    </div>
</body>
</html>