<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>더바이럴</title>
    <!-- 부트스트랩 CSS 로드 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        @import url(https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css);
        body {
            font-family: 'NanumSquare', sans-serif;
            color:#444444;
        }
        .circle {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            border: 2px solid #00BFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
        .circle-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .circle-content {
            text-align: center;
        }
        .circle p {
            margin: 0;
        }
        .view-more {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .btn-view-more {
            background-color: #00BFFF;
            color: white;
            border-radius: 25px;
            padding: 10px 30px;
            border: none;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #000;
            font-size: 1.3rem;
        }
        .head-text{
            color:#444444;
            font-weight: 900;
            font-size: 2.5rem;
        }
        .rounded-b {
            padding: 2px 10px;
            font-size: 0.8rem;
            font-weight: 700;
            color: #444444;
            text-align: center;
            text-decoration: none;
            background-color: #E5E5E5;
        }
        .navbar-brand{
            margin: 0 0 0 100px;
        }
        .navbar-brand_m {
            margin-left: 120px;
        }
    </style>
</head>
<body>
    <!-- 네비게이션 바 -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
        <a class="navbar-brand change_n" href="#">
            <img src="../img/logo.jpg" alt="" width="135" height="35" class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="margin:0 130px 0 0;" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-4">
                    <a class="nav-link" style="color:#52C1EE;" href="#" onclick="location.href='../home/home.php';">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#" onclick="location.href='../work/work.php';">Work</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#" onclick="location.href='../company/company.php';">Company</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#" onclick="location.href='../welfare/welfare.php';">Welfare</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#" onclick="location.href='../contact/contact.php';">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <script>

        // 윈도우가 리사이즈될 때 실행되는 함수
        function handleResize_nav() {
            // 기준이 되는 넓이(px)
            const widthThreshold = 700; // 원하는 크기로 설정

            // 삭제할 클래스 이름
            const classNameToRemove1 = 'navbar-brand'; // 삭제할 클래스 이름

            // 삭제할 요소들을 선택 (여기서는 클래스명이 특정 클래스인 요소들을 선택)
            const elements = document.querySelectorAll(`.${"change_n"}`);

            // 윈도우의 현재 넓이가 기준 넓이보다 클 때
            if (window.innerWidth < widthThreshold) {
                elements.forEach(element => {
                    // 클래스 삭제
                    element.classList.remove(classNameToRemove1);
                    element.classList.add('navbar-brand_m');

                });

            }
        }

        // 페이지가 로드될 때, 그리고 윈도우가 리사이즈될 때 함수 실행
        window.addEventListener('resize', handleResize_nav);
        window.addEventListener('load', handleResize_nav);

    </script>
    
<br><br><br><br><br><br><br><br>
<!-- 메인 섹션 -->
<div class="container text-center my-5">
    <h3 class="title">
        <span class="letter change_t">THE VIRAL</span>
    </h3>
    <p class="sub_title letter1 change_st">Viral marketing Agency</p>
    <br><br><br><br><br><br><br><br>
    <!-- <button class="btn btn-view-more">VIEW MORE</button> -->
</div>
<style>
    .title {
        word-spacing: 2px;
        overflow: hidden;
        color:#52C1EE; 
        font-weight:1000;
        font-size:100px;
    }
    .new_title {
        word-spacing: 2px;
        overflow: hidden;
        color:#52C1EE;
        font-weight:1000;
        font-size:50px;
    }
    @keyframes reveal {
        0% {
            transform: translateY(100%);
        }
        100% {
            transform: translateY(0);
        }
    }
    .sub_title {
        font-size: 3rem;
    }
    .new_sub_title {
        font-size: 1.8rem;
    }

    .letter {
        display: inline-block;
        animation: reveal 1s cubic-bezier(0.77, 0, 0.175, 1) forwards;
    }
    .letter1 {
        display: inline-block;
        animation: reveal 1s cubic-bezier(0.77, 0, 0.175, 1) forwards;
    }
</style>

<script>
    // 윈도우가 리사이즈될 때 실행되는 함수
    function handleResize_title() {
        // 기준이 되는 넓이(px)
        const widthThreshold = 700;

        // 삭제할 클래스 이름
        const classNameToRemove1 = 'title';
        const classNameToRemove2 = 'sub_title';

        const elements = document.querySelectorAll(`.${"change_t"}`);
        const elements1 = document.querySelectorAll(`.${"change_st"}`);

        // 윈도우의 현재 넓이가 기준 넓이보다 클 때
        if (window.innerWidth < widthThreshold) {
            elements.forEach(element => {
                // 클래스 삭제
                element.classList.remove(classNameToRemove1);
                element.classList.add('new_title');

            });
            elements1.forEach(element => {
                // 클래스 삭제
                element.classList.remove(classNameToRemove2);
                element.classList.add('new_sub_title');

            });

        }
    }

    // 페이지가 로드될 때, 그리고 윈도우가 리사이즈될 때 함수 실행
    window.addEventListener('resize', handleResize_title);
    window.addEventListener('load', handleResize_title);
    
</script>


<hr class=hr>
<br><br><br><br>
<!-- 성장 원동력 섹션 -->
<div class="container-fluid">
    <div class="section-title">
        <a class="rounded-b rounded-pill">IDENTITY</a>
        <p>
        <h2 class="head-text">더바이럴 <span id="number">아이덴티티</span></h2>
        <div class="row justify-content-center">
            <img class="identity" src="../img/identity.jpg">
        </div>
    </div>
    <!-- <div class="circle-container">
        <div class="circle">
            <div class="circle-content">
                <h4>WHY</h4>
                <p>신뢰가는</p>
                <p>평균 100명의 광고주 중<br>98% 이상이 만족한<br>바이럴 마케팅 서비스</p>
            </div>
        </div>
        <div class="circle">
            <div class="circle-content">
                <h4>HOW</h4>
                <p>신뢰가는</p>
                <p>평균 100명의 광고주 중<br>98% 이상이 만족한<br>바이럴 마케팅 서비스</p>
            </div>
        </div>
        <div class="circle">
            <div class="circle-content">
                <h4>WHAT</h4>
                <p>신뢰가는</p>
                <p>평균 100명의 광고주 중<br>98% 이상이 만족한<br>바이럴 마케팅 서비스</p>
            </div>
        </div>
    </div> -->
    <div class="view-more">
        <button class="btn btn-view-more" onclick="location.href='../company/company.php';">view more</button>
    </div>
</div>
<style>
    .hr {
    height: 10px;
    border: 0;
    box-shadow: 0 10px 10px -10px #050000 inset;
    }
    #number{
            color: #52C1EE;
    }
    .btn-view-more{
        padding: 10px 90px;
        font-size : 18px;
        background: #52C1EE;
    }
    .identity{
        width: 95%;
    }
</style>


<br><br><br>
<!-- 대표 프로젝트 섹션 -->
<div class="container-fluid py-5" id="i">
    <div>
        <div class="container my-3">
            <div class="section-title">
                <a class="rounded-b rounded-pill">PROJECT</a>
                <p>
                <h1 style="font-weight:900;">대표 프로젝트</h1>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="hover col p-2 card-custom btn" onclick="location.href='../work/work.php';" id="i">
                    <div class="card bg-transparent border-0">
                        <img src="../img/viral_1_v2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-start">맛있는 두유 GT</h4>
                            <p class="card-text text-start">상위노출</p>
                        </div>
                    </div>
                </div>
                <div class="hover col p-2 card-custom btn" onclick="location.href='../work/new_media.php';" id="i">
                    <div class="card bg-transparent border-0">
                        <img src="../img/viral_2_v2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-start">하이트 진로</h4>
                            <p class="card-text text-start">NEW MEDIA</p>
                        </div>
                    </div>
                </div>
                <div class="hover col p-2 card-custom btn" onclick="location.href='../work/marketing.php';" id="i">
                    <div class="card bg-transparent border-0">
                        <img src="../img/viral_3_v2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-start">로게인폼</h4>
                            <p class="card-text text-start">연출 홍보</p>
                        </div>
                    </div>
                </div>
                <div class="hover col p-2 card-custom btn" onclick="location.href='../work/run_Business.php';" id="i">
                    <div class="card bg-transparent border-0">
                        <img src="../img/viral_4_v2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-start">환경보전협회</h4>
                            <p class="card-text text-start">채널 운영</p>
                        </div>
                    </div>
                </div>
                <div class="hover col p-2 card-custom btn" onclick="location.href='../work/new_media.php';" id="i">
                    <div class="card bg-transparent border-0">
                        <img src="../img/viral_5_v2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-start">눅스</h4>
                            <p class="card-text text-start">NEW MEDIA</p>
                        </div>
                    </div>
                </div>
                <div class="hover col p-2 card-custom btn" onclick="location.href='../work/run_Experience.php';" id="i">
                    <div class="card bg-transparent border-0">
                        <img src="../img/viral_6_v2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title text-start">애경</h4>
                            <p class="card-text text-start">체험단운영</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-more">
                <button class="btn btn-view-more" onclick="location.href='../work/work.php';">view more</button>
            </div>
        </div>
    </div>
</div>
<style>
    .card-button {
        text-decoration: none; /* 링크 밑줄 제거 */
    }
    .card-button:hover {
        text-decoration: none; /* 호버 시에도 링크 밑줄 제거 */
    }
    .card {
        transition: transform 0.3s ease; /* 부드러운 변형을 위해 트랜지션 추가 */
    }

    .card:hover {
        transform: scale(1.1); /* 마우스를 올렸을 때 카드 크기를 1.1배로 확대 */
    }
    .card-title{
        font-weight:900;
        color:#444444;
    }
    .card-body{
        padding-left: 0px;
    }
    .card-custom {
            flex: 0 0 30%;
            max-width: 25%;
            margin: 0.01%;
        }
    @media (max-width: 768px) {
        .card-custom {
            flex: 0 0 48%;
            max-width: 48%;
        }
    }
    @media (max-width: 576px) {
        .card-custom {
            flex: 0 0 100%;
            max-width: 100%;
            margin: 1% 0;
        }
    }
</style>

<!-- <script>
    document.querySelectorAll('.hover').forEach(function(element) {
        element.addEventListener('mouseover', function() {
            // this.style.boxShadow = '-1px -1px 2px rgba(94, 104, 121, .288), 2px 2px 2px rgba(94, 104, 121, .288)';
            this.classList.add('shadow-lg');
        });

        element.addEventListener('mouseout', function() {
            this.classList.remove('shadow-lg');
            // this.style.boxShadow = '-1px -1px 2px rgba(94, 104, 121, .288), 2px 2px 2px rgba(94, 104, 121, .288)';
        });
    });
</script> -->

<!-- 협업 브랜드 섹션 -->
<div class="container my-5">
    <br><br><br><br><br>
    <div class="section-title">
        <a class="rounded-b rounded-pill">WITH</a>
        <p>
        <h1 class="head-text">협업 브랜드</h1>
    </div>
    <div class="row text-center" id="slider">
        <div class="col" id="slide-track">
            <img src="../img/brand_logo.png" alt="Brand" class="w-100 slide">
            <img src="../img/brand_logo.png" alt="Brand" class="w-100 slide">
        </div>
    </div>
    <br><br><br><br><br>
</div>

<style>

    #slider {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
        display: flex;
        align-items: flex-start;
    }

    #slide-track {
        display: flex;
        width: calc(200%); /* Double the width to accommodate two images */
        animation: scroll 50s linear infinite;

    }

    .slide {
        width: 100%;
        flex: 0 0 auto;
    }

    .slide img {
        width: 100%;
        height: auto;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
</style>

<!-- 직원 인터뷰 섹션 -->
<div class="container-fluid py-5" id="i">
    <br><br>
    <div>
        <div class="container-fluid my-3">
            <div class="section-title">
                <a class="rounded-b rounded-pill">WELFARE</a>
                <p></p>
                <h1 style="font-weight:900;">더바이럴 인터뷰</h1>
                <br>
                <h5>"더바이럴 직원들의 오피스 스타일"</h5>
            </div>
            <br>
            <div class="row row-cols-md-3 justify-content-center">
                <div class="col-8 interview" style="margin-bottom:10px;">
                    <div class="card border-0 rounded-bottom-3">
                        <div class=" card-header text-center rounded-top-3">
                            Q: 어떤 점에서 우리 회사의 근무 환경이 다른가요?
                        </div>
                        <div class="card-body">
                            <img src="../img/interview_1_v2.jpg" alt="" class="card-img-bottom">
                        </div>
                    </div>
                </div>
                <div class="col-8 interview" style="margin-bottom:10px;">
                    <div class="card border-0 rounded-bottom-3">
                        <div class=" card-header text-center rounded-top-3">   
                            Q: 명절 선물세트와 같은 추가 복지가 어떤 의미가 있나요?
                        </div>
                        <div class="card-body">
                            <img src="../img/interview_2_v2.jpg" alt="" class="card-img-bottom">
                        </div>
                    </div>
                </div>
                <div class="col-8 interview">
                    <div class="card border-0 rounded-bottom-3">
                        <div class="card-header text-center rounded-top-3">
                            Q: 가장 만족하는 회사 휴게 시설은 무엇인가요?
                        </div>
                        <div class="card-body">
                            <img src="../img/interview_3_v2.jpg" alt="" class="card-img-bottom">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="view-more">
                <button class="btn btn-view-more" onclick="location.href='../welfare/welfare.php';">view more</button>
            </div>
        </div>
    </div>
    <br><br>
</div>
<style>
    #i{
        background:#EFEFEF;
    }
    .card-header{
        font-size: 85%;
        color: #FFFFFF;
        padding-top: 3px;
        padding-bottom: 1px;
        background: #444444;
    }
    .card-img-bottom{
        margin-left: 3%;
        padding-right: 3%;
    }
</style>


<br><br><br><br>
<!-- 서비스 문의하기 섹션 -->
<div class="container my-5 text-center">
    <div class="section-title">
        <h2></h2>
    </div>
    <div class="contact">
        <img src="../img/notebook1.jpg" alt="Notebook">
        <div class="contact-text">
            <h2 class="head_t idx_contact1">대표번호</h2>
            <br class="remove">
            <h4 class="sub_t idx_contact2">AM 09:00 - PM 18:30</h4>
            <br class="remove">
            <div class="project">
                <button class="btn btn-project shadow-sm idx_b" onclick="location.href='../contact/contact.php';">프로젝트 문의</button>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>

<style>
    .head_t{
        font-size:2.5rem;
        font-weight:900;
    }
    .sub_t {
        font-weight:700;
        color:#666666;
    }
    .main-num {
        font-size:1.2rem;
    }
    .sub-text {
        font-size:1rem;
    }
    .project{
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .btn-project {
        background-color: #52C1EE;
        padding: 20px 90px 20px 90px;
        color: white;
        border-radius: 35px;
        border: none;
        font-size:2rem;
        font-weight: 650;
    }
    .pbt {
        background-color: #52C1EE;
        padding: 5px 25px 5px 25px;
        color: white;
        border-radius: 35px;
        border: none;
        font-size: 1rem;
        font-weight: 650;
    }
    .contact {
        position: relative;
        display: inline-block;
    }
    .contact img {
        width: 100%;
        height: auto;
        display: block;
    }
    .contact-text {
        position: absolute;
        top: 50%;
        left: 50%;
        bottom:-15%;
        transform: translate(-50%, -50%);
        text-align: center;
    }
    .contact-text h2,
    .contact-text p {
        margin: 0;
        padding: 0;
    }

</style>

<script>

        // 윈도우가 리사이즈될 때 실행되는 함수
        function handleResize_pbt() {
            // 기준이 되는 넓이(px)
            const widthThreshold = 700; // 원하는 크기로 설정

            // 삭제할 클래스 이름
            const classNameToRemove1 = 'btn-project'; // 삭제할 클래스 이름

            // 삭제할 요소들을 선택 (여기서는 클래스명이 특정 클래스인 요소들을 선택)
            const elements = document.querySelectorAll(`.${"idx_b"}`);
            const elements1 = document.querySelectorAll(`.${"idx_contact1"}`);
            const elements2 = document.querySelectorAll(`.${"idx_contact2"}`);

            // 윈도우의 현재 넓이가 기준 넓이보다 클 때
            if (window.innerWidth < widthThreshold) {
                elements.forEach(element => {
                    // 클래스 삭제
                    element.classList.remove(classNameToRemove1);
                    element.classList.add('pbt');
                    const brElements = document.querySelectorAll(`br.${"remove"}`);
        
                    // 각 <br> 태그를 순회하며 삭제
                     brElements.forEach(br => {
                        br.remove();
                    });

                });

                elements1.forEach(element => {
                    element.classList.add('head_t');
                    element.classList.add('main-num');
                });
                elements2.forEach(element => {
                    element.classList.add('sub_t');
                    element.classList.add('sub-text');
                });

            }
        }

        // 페이지가 로드될 때, 그리고 윈도우가 리사이즈될 때 함수 실행
        window.addEventListener('resize', handleResize_pbt);
        window.addEventListener('load', handleResize_pbt);

</script>

<!-- footer -->
<?php include "../footer.php" ?>

<script>

</script>
</body>
</html>
