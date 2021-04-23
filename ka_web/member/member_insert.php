<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/ka_web_page/db/db_connect.php";

    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];

    $email = $email1 . "@" . $email2;
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

    $sql = "insert into members(id, pass, name, email, regist_day, level, point) ";
    $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 9, 0)";

    mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
    mysqli_close($con);

    echo "
	      <script>
	           location.href = 'http://{$_SERVER['HTTP_HOST']}/ka_web_page/index.php';
	      </script>
	  ";
?>


