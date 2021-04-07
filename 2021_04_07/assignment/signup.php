<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/signup.css?after">
    <script src="./js/signup.js"></script>
    <title>signup</title>
</head>
<body>
    <h1>회 원 가 입</h1>
    <h4>사이트 이용정보 입력</h4>
    <table>
        <tr>
            <th>아이디</th>
            <td>
                <h5>영문자, 숫자, _만 입력 가능. 최소 3자 이상 입력.</h5>
                <input type="text" name="input_id" id="input_id" onkeyup="idCheck()">
                <span id="span_correct_id"></span>
            </td>
        </tr>
        <tr>
            <th>비밀번호</th>
            <td>
                <h5>영문자, 숫자, _만 입력 가능. 6-12자 입력.</h5>
                <input type="password" name="input_pw" id="input_pw" onkeyup="pwCheck()">
                <span id="span_correct_pw"></span>
            </td>
        </tr>
        <tr>
            <th>비밀번호 확인</th>
            <td>
                <input type="password" name="input_pw_confirm" id="input_pw_confirm" onkeyup="pwConfirmCheck()">
                <span id="span_correct_pw_confirm"></span>
            </td>
        </tr>
    </table>
    <h4>개인정보 입력</h4>
    <table>
        <tr>
            <th>이름</th>
            <td>
                <input type="text" name="input_name" id="input_name">
            </td>
        </tr>
        <tr>
            <th>닉네임</th>
            <td>
                <div>공백없이 한글,영문,숫자만 입력 가능 (영문4자 이상)<br/>닉네임을 바꾸시면 앞으로 1일 이내에는 변경할 수 없습니다.</div>
                <input type="text" name="input_nickname" id="input_nickname" onkeyup="nicknameCheck()">
                <span id="span_correct_nickname"></span>
            </td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td>
                <input type="email" name="input_email" id="input_email">
            </td>
        </tr>
        <tr>
            <th>가입경로</th>
            <td>
                <input type="radio" name="input_radio_internet" id="input_radio_internet" value="internet">
                <label for="internet">internet</label>
                <input type="radio" name="input_radio_banner" id="input_radio_banner" value="bannet">
                <input type="radio" name="input_radio_article" id="input_radio_article" value="article">
                <input type="radio" name="input_radio_homepage" id="input_radio_homepage" value="homepage">
                <input type="radio" name="input_radio_recommendation" id="input_radio_recommendation" value="recommendation">
                <input type="radio" name="input_radio_etc" id="input_radio_ininput_radio_etcternet" value="etc">
            </td>
        </tr>
        <tr>
            <th>전화번호</th>
            <td>
                <input type="tel" name="input_tel" id="input_tel">
            </td>
        </tr>
        <tr>
            <th>휴대폰번호</th>
            <td>
                <input type="tel" name="input_cellphone" id="input_cellphone">
            </td>
        </tr>
        <tr>
            <th>생년월일</th>
            <td>
                <input type="datetime-local" name="input_dl" id="input_dl">
            </td>
        </tr>
        <tr>
            <th>주소</th>
            <td></td>
        </tr>
    </table>
    <h4>기타 개인설정</h4>
    <table>
        <tr>
            <th>카카오톡 메세지</th>
            <td></td>
        </tr>
        <tr>
            <th>메일링서비스</th>
            <td></td>
        </tr>
        <tr>
            <th>SMS 수신여부</th>
            <td></td>
        </tr>
        <tr>
            <th>정보공개</th>
            <td></td>
        </tr>
        <tr>
            <th>자동등록방지</th>
            <td></td>
        </tr>
    </table>
</body>
</html>