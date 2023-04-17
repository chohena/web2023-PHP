<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 페이지</title>
    
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
                <source srcset="../assets/img/join01.png, ../assets/img/join01@2x.png, ../assets/img/join01@3x.png"> 
                <img src="../assets/img/join01@2x.png" alt="회원가입 이미지">
            </picture>
            <p class="intro__text">
                U WANNA JOIN US?
            </p>
        </div>
        <!-- intro inner -->

        <div class="join__inner container">
            <h2>회원가입</h2>
            <div class="join__form">
                <form action="joinSave.php" name="join" method="post">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div>
                            <label for ="youEmail" class="required">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" placeholder="이메일을 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youName" class="required">이름</label>
                            <input type="text" id="youName" name="youName" placeholder="이름을 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youPass" class="required">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" placeholder="비밀번호를 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youPassC" class="required">비밀번호 확인</label>
                            <input type="password" id="youPassC" name="youPassC" placeholder="다시 한번 비밀번호를 적어주세요!" required>
                        </div>
                        <div>
                            <label for="youPhone">연락처</label>
                            <input type="text" id="youPhone" name="youPhone" placeholder="연락처를 적어주세요!">
                        </div>
                        <button type="submit">회원가입 완료</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
    <!-- //main -->
</body>
</html>