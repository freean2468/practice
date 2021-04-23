<html>
<head>
	<title>Select</title>
</head>
<body>
<h1>Select Example</h1>
	<form action="./post_result.php" method="post">
		이름 :
		<select name="name">
			<option value="">선택하세요</option>
			<option value="그누위즈">그누위즈</option>
			<option value="홍길동">홍길동</option>
			<option value="임꺽정">임꺽정</option>
		</select>
		<br/>

		아이디 :
		<select name="id">
			<option value="">선택하세요</option>
			<option value="gnuwiz">gnuwiz</option>
			<option value="hong">hong</option>
			<option value="im">im</option>
		</select>
		<br/>

		이메일 :
		<select name="email">
			<option value="">선택하세요</option>
			<option value="gnuwiz@naver.com">gnuwiz@naver.com</option>
			<option value="hong@gmail.com">hong@gmail.com</option>
			<option value="im@naver.com">im@naver.com</option>
		</select>
		<br/>
		<input type="submit" value="전송">
	</form>
</body>
</html>