<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>경아 페이지</title>
        <link rel="stylesheet" href="http://<?=$_SERVER["HTTP_HOST"]?>/ka_web_page/css/common.css">
        <link rel="stylesheet" href="css/login.css">
	    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="js/login.js"></script>
	    <script src="http://<?=$_SERVER["HTTP_HOST"]?>/ka_web_page/js/common.js" defer></script>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/ka_web_page/header.php"; ?>
        </header>
        <section>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/ka_web_page/main_img_bar.php"; ?>
            <div id="main_content">
                <div id="login_box">
                    <div id="login_title">
                        <span>로그인</span>
                    </div>
                    <div id="login_form">
                        <form  name="login_form" method="post" action="login.php">
                            <ul>
                                <li><input type="text" name="id" placeholder="아이디" ></li>
                                <li><input type="password" id="pass" name="pass" placeholder="비밀번호" ></li> <!-- pass -->
                            </ul>
                            <div id="login_btn">
                                <a href="#"><img src="../img/login.png" onclick="check_input()"></a>
                            </div>
                        </form>
                    </div> <!-- login_form -->
                </div> <!-- login_box -->
            </div> <!-- main_content -->
        </section>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/ka_web_page/footer.php"; ?>
        </footer>
    </body>
</html>

