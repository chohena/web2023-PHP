<?php
    include "../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];
    $youPhone = $_POST['youPhone'];
    $regTime = time();

    // echo $youEmail, $youName, $youPass, $youPhone;

    // $sql = "INSERT INTO members(youEmail, youName, youPass, youPhone, regTime) VALUES('$youEmail', '$youName', '$youPass', '$youPhone', '$regTime')";
    // $connect -> query($sql);


    // // 이메일 유효성 검사
    // $check_mail = preg_match(/^[a-z0-9_+.-]+@([a-z0-9-\.])+[a-z0-9]{2,4}$/, $youEmail);

    // if($check_mail == false){
    //     echo = "올바른 이메일 주소로 작성해 주세요. 이메일 주소가 잘못 되었습니다.";
    //     exit;
    // }

    // // 이름 유효성 검사(check name=가입자 이름이 들어감)
    // $check_name = preg_match(/^[가-힣]{2,5}$/, $youName)    // 한글만 가능

    // if($check_name === false){
    //     echo = "이름은 한글로 2~5자만 가능합니다.";
    //     exit;
    // }

    // // 비밀번호 유효성 검사
    // if($youPass !=== $youPassC){
    //     echo = "비밀번호가 일치하지 않습니다."
    //     exit;
    // }

    // // 사용자가 데이터 입력 --> 유효성 검사 --> 유효성 검사 통과 O  --> 회원가입 (데이터 베이스에 쿼리문 전송)
    // // 사용자가 데이터 입력 --> 유효성 검사 --> 유효성 검사 통과 O  --> 이메일주소/핸드폰번호 확인 후 통과 --> 회원가입 (데이터 베이스에 쿼리문 전송)
    // // 사용자가 데이터 입력 --> 유효성 검사 --> 유효성 검사 통과 X  --> 회원가입거부 (데이터 베이스에 쿼리문 전송불가로 처음부터 재입력)

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료 페이지</title>
    <?php include "../include/head.php" ?>
</head>
<body class="gray">

    <?php include "../include/skip.php" ?>
    <!-- //skip -->

    <?php include "../include/header.php" ?>
    <!-- //header -->

    <main id="main">
        <div class="intro__inner center container bmStyle">
            <picture class="intro__images">
                <source srcset="../assets/img/joinEnd01.png, ../assets/img/join01@2x.png, ../assets/img/join01@3x.png"> 
                <img src="../assets/img/joinEnd01.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                Welcome to join us!<br>로그인을 해주세요!
            </p>
            <div class="intro__btn">
                <a href="#">메인으로</a>
                <a href="#">로그인</a>
            </div>
        </div>
        <!-- intro inner -->
    </main>
    <!-- //main -->
    
</body>
</html>

