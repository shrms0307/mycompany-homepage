<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Viral - Work</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        @import url(https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css);
        body {
            font-family: 'NanumSquare', sans-serif;
        }
        .work-header {
            background-image: url('../img/work_m.jpg');
            background-size: cover;
            background-position: center;
            height: 630px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .work-section {
            padding: 40px 0;
        }

        .project-box {
            background-color: #f8f9fa;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .project-img {
            max-width: 100%;
            border-radius: 10px;
        }
        .footer {
            background-color: #003054;
            color: white;
            padding: 20px 0;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #000;
            font-size: 1.3rem;
        }
        #number{
            color: #007bff;
            font-size: 5rem;
        }
        #footer-text{
            color: #6F8A9D;
        }
        body {
            color: #444444;
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
        <div class="collapse navbar-collapse" style="margin:0 150px 0 0;" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#" onclick="location.href='../?page=home';">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" style="color:#52C1EE;" href="#" onclick="location.href='../?page=work';">Work</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#" onclick="location.href='../?page=company';">Company</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#" onclick="location.href='../?page=welfare';">Welfare</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#" onclick="location.href='../?page=contact';">Contact</a>
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

    <!-- 헤드 이미지 -->
    <!-- <header class="work-header"> -->
        <!-- <h1>WORK</h1> -->
    <!-- </header> -->

    <div class="m-0" id="bg" style="background-color:#000;" tn="transparent" tanp>
        <div class="text-center o" id="title">
            <div class="h-100">
                <div class="d-flex h-100 align-items-center">
                    <p class="banner display-4 text-light w-100 change_t"></p>
                </div>
            </div>
        </div>
    </div>
    <style>
    #title{
        height: 44rem;
        line-height: 35rem;
        background-image: url("../img/h_WORK.PNG");
        background-position: center center;
        background-color:#FFFFFF;
        background-size: auto 100%;
        background-repeat: no-repeat;
        transition: background-size 3s ease-in-out;
        -moz-transition: background-size 3s ease-in-out;
        -web-kit-transition: background-size 3s ease-in-out;
    }
    #title.o{
        background-size: auto 150% !important;
    }
    .banner {
        font-size: 7.5rem;
        font-weight:800;
    }
    .m_banner {
        font-size: 5rem;
        font-weight:800;
    }

    </style>
    <script>
        $(document).ready(function(){
            $("#title").removeClass("o");
        });

        const content = "WORK";
        const text = document.querySelector(".banner");
        let i = 0;

        function typing(){
            if (i < content.length) {
            let txt = content.charAt(i);
            text.innerHTML += txt;
            i++;
            }
        }
        setInterval(typing, 200)

        // 윈도우가 리사이즈될 때 실행되는 함수
        function handleResize() {
            // 기준이 되는 넓이(px)
            const widthThreshold = 700; // 원하는 크기로 설정

            // 삭제할 클래스 이름
            const classNameToRemove1 = 'banner'; // 삭제할 클래스 이름

            // 삭제할 요소들을 선택 (여기서는 클래스명이 특정 클래스인 요소들을 선택)
            const elements = document.querySelectorAll(`.${"change_t"}`);

            // 윈도우의 현재 넓이가 기준 넓이보다 클 때
            if (window.innerWidth < widthThreshold) {
                elements.forEach(element => {
                    // 클래스 삭제
                    element.classList.remove(classNameToRemove1);
                    element.classList.add('m_banner');

                });

            }
        }

        // 페이지가 로드될 때, 그리고 윈도우가 리사이즈될 때 함수 실행
        window.addEventListener('resize', handleResize);
        window.addEventListener('load', handleResize);
    </script>


    <!-- 진행 내용 섹션 -->
    <!-- 추가 내용 확인 시 페이지 내에서 work 섹션 내용 변환하도록 구현-->
    <section class="work-section">
        <div class="container">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" style="color:#444444;" href="../?page=work">&nbsp;상위노출&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#444444;" href="../?page=new_media">&nbsp;NEW MEDIA&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#444444;" href="../?page=marketing">&nbsp;부정이슈 관리&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color:#52C1EE;" href="#">&nbsp;채널 운영</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#444444;" href="../?page=run_Experience">&nbsp;체험단 운영&nbsp;</a>
                </li>
            </ul>
        </div>
    </section>
    <style>
        .nav{
            font-size:1.5rem;
            font-weight: 700;
        }
    </style>

    <div class="container">
        <div><br><br><br><br><br><br></div>
    </div>

    <!-- Work 섹션 -->
    <div class="container mt-4">
        <div class="row center">
            <div class="col-md-6">
                <h4 class="text-primary">
                    <img src="../img/business_title.jpg" alt="" width="200" height="60" class="d-inline-block align-top">
                </h4>
                <br>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">SNS 관리</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>  
                            <p class="card-text">층간소음 예방 인식을 알리기 위한 인스타그램 계정 운영</p>
                            <p class="toggle-content">
                                층간소음 예방 인식을 위한 인스타그램 계정을 개설하고 관련 콘텐츠를 주기적으로 게시하며,
                                해시태그와 소통을 통해 팔로워와의 참여를 유도합니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">온라인 이벤트</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>    
                            <p class="card-text">이벤트 운영을 겸비한 콘텐츠 제작 및 다양한 이벤트를 통한 소통 강화</p>
                            <p class="toggle-content">
                                온라인 이벤트 운영을 위해 목적과 대상을 설정하고, 다양한 콘테츠를 제작하여 홍보 및 실시간 상호작용을 통해 참여를
                                유도합니다. 이벤트 후에도 지속적인 소통을 통해 커뮤니티를 구축하고, 성과 분석 및 피드백을 반영하여 개선합니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 parent idx_p">
                <div class="card-img-container child idx_c">
                    <img src="../img/business.png" class="image shadow" alt="채널홍보">
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <style>
        .toggle-content {
            display: none;
            font-size: 0.9rem;
        }
        .img-button img {
            width: 20px; /* 이미지 크기 조정 */
            height: 20px;
        }
        .card-title {
            font-size:1.3rem;
            font-weight:800;
            color:#444444;
        }
        .card-text {
            font-size:1.2rem;
            font-weight:700;
            color:#666666;
            margin-bottom: 4px;
            padding-top: 3px;
        }
        .parent{
            position: relative;
        }
        
        .child{
            position: absolute;
            bottom: 23px;
            margin-left: 10px;
        }
        .center{
            margin-left: 3%;
            margin-right: 3%;
        }
        .image{
            width: 95%;
            height: 100%;
            margin-left: 5%;
            border-radius: 2%;
        }
    </style>
    <script>
        document.querySelectorAll('.toggle-button').forEach(button => {
            button.addEventListener('click', function() {
                var content = this.closest('.row').querySelector('.toggle-content');
                var plusIcon = this.querySelector('.toggle-plus');
                var minusIcon = this.querySelector('.toggle-minus');
                
                if (content.style.display === "none" || content.style.display === "") {
                    content.style.display = "block";
                    plusIcon.style.display = "none";
                    minusIcon.style.display = "block";
                } else {
                    content.style.display = "none";
                    plusIcon.style.display = "block";
                    minusIcon.style.display = "none";
                }
            });
        });


        // 윈도우가 리사이즈될 때 실행되는 함수
        function handleResize() {
            // 기준이 되는 넓이(px)
            const widthThreshold = 700; // 원하는 크기로 설정

            // 삭제할 클래스 이름
            const classNameToRemove1 = 'parent'; // 삭제할 클래스 이름으로 변경
            const classNameToRemove2 = 'child'; // 삭제할 클래스 이름으로 변경

            // 삭제할 요소들을 선택 (여기서는 클래스명이 특정 클래스인 요소들을 선택)
            const elements = document.querySelectorAll(`.${"idx_p"}`);
            const elements2 = document.querySelectorAll(`.${"idx_c"}`);

            // 윈도우의 현재 넓이가 기준 넓이보다 클 때
            if (window.innerWidth < widthThreshold) {
                elements.forEach(element => {
                    // 클래스 삭제
                    element.classList.remove(classNameToRemove1);
                });
                elements2.forEach(element2 => {
                    // 클래스 삭제
                    element2.classList.remove(classNameToRemove2);
                });

            }
        }

        // 페이지가 로드될 때, 그리고 윈도우가 리사이즈될 때 함수 실행
        window.addEventListener('resize', handleResize);
        window.addEventListener('load', handleResize);

    </script>

    <!-- Footer -->
    <?php include "../footer.php" ?>

</body>
</html>
