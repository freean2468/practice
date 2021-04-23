<html>
<head>
	<title>Radio</title>
</head>
<body>
<h1>Radio Example</h1>
	<form action="./post_result.php" method="post">
		이름 :
		<input type="radio" name="name" value="그누위즈">그누위즈
		<input type="radio" name="name" value="홍길동">홍길동
		<input type="radio" name="name" value="임꺽정">임꺽정
		<br/>

		아이디 :
		<input type="radio" name="id" value="gnuwiz">gnuwiz
		<input type="radio" name="id" value="hong">hong
		<input type="radio" name="id" value="im">im
		<br/>

		이메일 :
		<input type="radio" name="email" value="gnuwiz@naver.com">gnuwiz@naver.com
		<input type="radio" name="email" value="hong@gmail.com">hong@gmail.com
		<input type="radio" name="email" value="im@naver.com">im@naver.com
		<br/>
		<input type="submit" value="전송">
	</form>
</body>
</html>