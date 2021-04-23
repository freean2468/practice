<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>경아 페이지</title>
		<link rel="stylesheet" type="text/css" href="http://<?=$_SERVER["HTTP_HOST"]?>/ka_web_page/css/common.css">
		<link rel="stylesheet" type="text/css" href="css/member.css">
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script src="js/member_modify.js"></script>
		<script src="http://<?=$_SERVER["HTTP_HOST"]?>/ka_web_page/js/common.js" defer></script>
	</head>
	<body>
		<header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/ka_web_page/header.php"; ?>
		</header>
		<section>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/ka_web_page/main_img_bar.php"; ?>
			<div id="main_content">
				<div id="join_box">
					<h2>정말로 회원탈퇴를 하시겠습니까?</h2>
					<form name="member_form" method="post" action="member_delete.php">
						<input type="hidden" name="id" value="<?=$userid?>">
						<br><br>
						<div>
							<input type="submit" value="확인">
						</div>
					</form>
				</div> <!-- join_box -->
			</div> <!-- main_content -->
		</section>
		<footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/ka_web_page/footer.php"; ?>
		</footer>
	</body>
</html>

