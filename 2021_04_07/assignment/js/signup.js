function idCheck() {
    var $inputId = document.getElementById("input_id");
    var $spanCorrectId = document.getElementById("span_correct_id");
    var idExp = /^[0-9a-zA-Z]{3,11}$/;

    if (!$inputId.value.match(idExp)) {
        $spanCorrectId.innerHTML = "아이디가 조건에 맞지 않습니다.";
        $spanCorrectId.style.color = "red";
        return false;
    } else {
        $spanCorrectId.innerHTML = "아이디 OK";
        $spanCorrectId.style.color = "green";
        return true;
    }
}

function pwCheck() {
    var $inputPw = document.getElementById("input_pw");
    var $spanCorrectPw = document.getElementById("span_correct_pw");
    var idExp = /^.*(?=^.{6,12}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/;

    if (!$inputPw.value.match(idExp)) {
        $spanCorrectPw.innerHTML = "pw 조건에 맞지 않습니다.";
        $spanCorrectPw.style.color = "red";
        return false;
    } else {
        $spanCorrectPw.innerHTML = "pw OK";
        $spanCorrectPw.style.color = "green";
        return true;
    }
}

function pwConfirmCheck() {
    var $inputPw = document.getElementById("input_pw");
    var $inputPwConfirm = document.getElementById("input_pw_confirm");
    var $spnCorrectPwConfirm = document.getElementById("span_correct_pw_confirm");

    if ($inputPwConfirm.value === $inputPw.value) {
        $spnCorrectPwConfirm.innerHTML = "password 일치";
        $spnCorrectPwConfirm.style.color = "green";
        return true;
    } else {
        $spnCorrectPwConfirm.innerHTML = "password 불일치";
        $spnCorrectPwConfirm.style.color = "red";
        return false;
    }
}

function nicknameCheck() {
    var $inputNickname = document.getElementById("input_nickname");
    var $spanCorrectNickname = document.getElementById("span_correct_nickname");
    var idExp = /^[0-9a-zA-Z가-힣]{4,}$/;

    if (!$inputNickname.value.match(idExp)) {
        $spanCorrectNickname.innerHTML = "nickname 조건에 맞지 않습니다.";
        $spanCorrectNickname.style.color = "red";
        return false;
    } else {
        $spanCorrectNickname.innerHTML = "nickname OK";
        $spanCorrectNickname.style.color = "green";
        return true;
    }
}