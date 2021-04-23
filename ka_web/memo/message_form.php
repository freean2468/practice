<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>경아 페이지</title>
		<link rel="stylesheet" type="text/css" href="http://<?=$_SERVER['HTTP_HOST'];?>/ka_web_page/css/common.css">
		<link rel="stylesheet" type="text/css" href="css/message.css">
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="js/message.js"></script>
		<script src="http://<?=$_SERVER['HTTP_HOST'];?>/ka_web_page/js/common.js" defer></script>
	</head>
	<body>
		<header>
            <?php include $_SERVER['DOCUMENT_ROOT']."/ka_web_page/header.php"; ?>
		</header>
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "/ka_web_page/db/db_connect.php";
            include_once $_SERVER['DOCUMENT_ROOT'] . "/ka_web_page/db/create_table.php";
            create_table($con, 'message');
            if (!$userid) {
                echo("<script>
				alert('로그인 후 이용해주세요!');
				history.go(-1);
				</script>
			");
                exit;
            }
        ?>
		<section>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/ka_web_page/main_img_bar.php"; ?>
			<div id="message_box">
				<h3 id="write_title">
					쪽지 보내기
				</h3>
				<ul class="top_buttons">
					<li><span><a href="message_box.php?mode=rv">수신 쪽지함 </a></span></li>
					<li><span><a href="message_box.php?mode=send">송신 쪽지함</a></span></li>
				</ul>
				<form name="message_form" method="post" action="message_insert.php">
					<div id="write_msg">
						<ul>
							<li>
								<span class="col1">보내는 사람 : </span>
								<span class="col2"><?= $userid ?></span>
								<input type="hidden" value=<?=$userid?> name="send_id">
							</li>
							<li>
								<span class="col1">수신 아이디 : </span>
								<span class="col2"><input name="rv_id" type="text"></span>
							</li>
							<li>
								<span class="col1">제목 : </span>
								<span class="col2"><input name="subject" type="text"></span>
							</li>
							<li id="text_area">
								<span class="col1">내용 : </span>
								<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
							</li>
						</ul>
						<button type="button" onclick="check_input()">보내기</button>
					</div>
				</form>
			</div> <!-- message_box -->
		</section>
		<footer>
            <?php include $_SERVER['DOCUMENT_ROOT']."/ka_web_page/footer.php"; ?>
		</footer>
	</body>
</html>