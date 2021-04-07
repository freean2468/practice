<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/signup.css?after5">
    <script src="./js/signup.js"></script>
    <title>signup</title>
</head>
<body>
    <h1>회 원 가 입</h1>
    <form action="">
        <h4>사이트 이용정보 입력</h4>
        <table>
            <tr>
                <th>아이디</th>
                <td>
                    <h5>영문자, 숫자, _만 입력 가능. 최소 3자 이상 입력.</h5>
                    <input type="text" name="input_id" id="input_id" class="input" onkeyup="idCheck()">
                    <span id="span_correct_id"></span>
                </td>
            </tr>
            <tr>
                <th>비밀번호</th>
                <td>
                    <h5>영문자, 숫자, _만 입력 가능. 6-12자 입력.</h5>
                    <input type="password" name="input_pw" id="input_pw" class="input" onkeyup="pwCheck()">
                    <span id="span_correct_pw"></span>
                </td>
            </tr>
            <tr>
                <th>비밀번호 확인</th>
                <td>
                    <input type="password" name="input_pw_confirm" id="input_pw_confirm" class="input" onkeyup="pwConfirmCheck()">
                    <span id="span_correct_pw_confirm"></span>
                </td>
            </tr>
        </table>
        <h4>개인정보 입력</h4>
        <table>
            <tr>
                <th>이름</th>
                <td>
                    <input type="text" name="input_name" id="input_name" class="input">
                </td>
            </tr>
            <tr>
                <th>닉네임</th>
                <td>
                    <div>공백없이 한글,영문,숫자만 입력 가능 (영문4자 이상)<br/>닉네임을 바꾸시면 앞으로 1일 이내에는 변경할 수 없습니다.</div>
                    <input type="text" name="input_nickname" id="input_nickname" class="input" onkeyup="nicknameCheck()">
                    <span id="span_correct_nickname"></span>
                </td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>
                    <input type="email" name="input_email" id="input_email" class="input_long">
                </td>
            </tr>
            <tr>
                <th>가입경로</th>
                <td>
                    <input type="radio" name="input_radio_internet" id="input_radio_internet" value="internet">
                    <label for="internet">인터넷</label>
                    <input type="radio" name="input_radio_banner" id="input_radio_banner" value="banner">
                    <label for="banner">배너</label>
                    <input type="radio" name="input_radio_article" id="input_radio_article" value="article">
                    <label for="article">기사</label>
                    <input type="radio" name="input_radio_homepage" id="input_radio_homepage" value="homepage">
                    <label for="homepage">홈페이지</label>
                    <input type="radio" name="input_radio_recommendation" id="input_radio_recommendation" value="recommendation">
                    <label for="recommendation">추천</label>
                    <input type="radio" name="input_radio_etc" id="input_radio_ininput_radio_etcternet" value="etc">
                    <label for="ect">기타</label>
                </td>
            </tr>
            <tr>
                <th>전화번호</th>
                <td>
                    <input type="tel" name="input_tel" id="input_tel" class="input">
                </td>
            </tr>
            <tr>
                <th>휴대폰번호</th>
                <td>
                    <input type="tel" name="input_cellphone" id="input_cellphone" class="input">
                </td>
            </tr>
            <tr>
                <th>생년월일</th>
                <td>
                    <input type="datetime-local" name="input_dl" id="input_dl" class="input">
                </td>
            </tr>
            <tr>
                <th rowspan="4">
                    주소
                </th>
                <td>
                    <input type="text" name="input_address" id="input_address" class="input">
                    <input type="button" value="주소 검색">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="input_address_basic" id="input_address_basic" class="input_long">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="input_address_detail" id="input_address_detail" class="input_long">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="input_address_reference" id="input_address_reference" class="input_long">
                </td>
            </tr>
        </table>
        <h4>기타 개인설정</h4>
        <table>
            <tr>
                <th>카카오톡 메세지</th>
                <td>
                    <input type="checkbox" name="input_kakao" id="input_kakao">
                    <span>카카오톡 메세지를 받겠습니다.> 수신체크를 하시면 세일 소식을 가장 먼저 받아보실 수 있습니다.</span>
                </td>
            </tr>
            <tr>
                <th>메일링서비스</th>
                <td>
                    <input type="checkbox" name="input_mailing" id="input_mailing">
                    <span>정보 메일을 받겠습니다.</span>
                </td>
            </tr>
            <tr>
                <th>SMS 수신여부</th>
                <td>
                    <input type="checkbox" name="input_sms" id="input_sms">
                    <span>휴대폰 문자메세지를 받겠습니다.</span>
                </td>
            </tr>
            <tr>
                <th>정보공개</th>
                <td>
                    <div>정보공개를 바꾸시면 앞으로 3일 이내에는 변경이 안 됩니다.</div>
                    <input type="checkbox" name="input_public" id="input_public">
                    <span>다른 분들이 나의 정보를 볼 수 있도록 합니다.</span>
                </td>
            </tr>
            <tr>
                <th>자동등록방지</th>
                <td>
                    <input type="button" value="코드 생성">
                    <input type="text" name="input_capcha" id="input_capcha" class="input">
                    <input type="button" value="비교">
                    <div>자동등록방지 문자와 숫자를 순서대로 입력해 주세요.</div>
                </td>
            </tr>
        </table>
        <input type="submit" value="회원가입">
        <input type="reset" value="취소">
    </form>
</body>
</html>