<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "1";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>
<div id="top">
    <h3>
<!--        <a href="index.php">PHP 프로그래밍 입문</a>-->
	    <a href="http://<?=$_SERVER['HTTP_HOST'];?>/ka_web_page/index.php">
	        경아 웹페이지</a>
    </h3>
    <ul id="top_menu">
        <?php
            if(!$userid) {
                ?>
                <li><a href="http://<?=$_SERVER['HTTP_HOST'];?>/ka_web_page/member/member_form.php">회원 가입</a> </li>
                <li> | </li>
                <li><a href="http://<?=$_SERVER['HTTP_HOST'];?>/ka_web_page/login/login_form.php">로그인</a></li>
                <?php
            } else {
                $logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
                ?>
                <li><?=$logged?> </li>
                <li> | </li>
                <li><a href="http://<?=$_SERVER['HTTP_HOST'];?>/ka_web_page/login/logout.php">로그아웃</a> </li>
                <li> | </li>
                <li><a href="http://<?=$_SERVER['HTTP_HOST'];?>/ka_web_page/member/member_modify_form.php">정보 수정</a></li>
	            <li> | </li>
	            <li><a href="http://<?=$_SERVER['HTTP_HOST'];?>/ka_web_page/member/member_delete_form.php">회원 탈퇴</a></li>
                <?php
            }
        ?>
        <?php
            if($userlevel==1) {
                ?>
                <li> | </li>
                <li><a href="http://<?=$_SERVER['HTTP_HOST'];?>/ka_web_page/admin/admin.php">관리자 모드</a></li>
                <?php
            }
        ?>
    </ul>
</div>
<div id="menu_bar">
    <ul>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/ka_web_page/index.php">메인</a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/ka_web_page/memo/message_box.php?mode=rv">쪽지</a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/ka_web_page/board/board_list.php">게시판</a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/ka_web_page/image_board/board_list.php">이미지</a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/ka_web_page/notice/notice_list.php">공지사항</a></li>
        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/ka_web_page/free/list.php">QnA</a></li>
    </ul>
</div>