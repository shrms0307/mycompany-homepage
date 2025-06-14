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
                    <a class="nav-link active" style="color:#52C1EE;" href="#">&nbsp;부정이슈 관리&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#444444;" href="../?page=run_Business">&nbsp;채널 운영&nbsp;</a>
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

    <!-- 언론 홍보 섹션 -->
    <div class="container text-center">
        <img src="../img/marketing_logain.jpg" alt="" width="170" height="70" class="d-inline-block align-top">
        <br><br>
        <p style='font-size:0.9rem;'>진행 기간 2021.02.16~2024.03.14 (*총 703건 삭제 및 비공개 처리 완료)</p>
        <br><br>
    </div>

    <div class="container-fluid  mt-4">
        <div class="row center">
            <div class="col-md-6" style="padding-right: 0px;">
                <div class="mb-4">
                    <div class="card-body card" id="number1">
                        <div class="row">
                            <h5 class="card-title"><span class="number">01</span> 부정 이슈 발생</h5>
                            <p class="card-text">브랜드 키워드 검색 시 부정 컨텐츠 확인</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card-body card" id="number2">
                        <div class="row">
                            <h5 class="card-title"><span class="number">02</span> 대응 방안 모색</h5>
                            <p class="card-text">탈모 광고 식약처 신고 제시 및 실행</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card-body card" id="number3">
                        <div class="row">
                            <h5 class="card-title"><span class="number">03</span> 대응</h5>
                            <p class="card-text">관련 게시글 삭제 처리 및 기사화<br>https://www.fnnews.com/news/202211081445571026</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card-body card" id="number4">
                        <div class="row">
                            <h5 class="card-title"><span class="number">04</span> 상황 종료</h5>
                            <p class="card-text">총 703건 삭제 및 비공개 처리 완료</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1" style="padding:0 0 0 0px">
                <div class="mb-4 arrow_id">
                    <div class="card border-0">
                        <div class="arrow-container" id="arrow1" style="margin-top:47px">
                            <div class="arrow-body"></div>
                            <div class="arrow-head"></div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="mb-4 arrow_id">
                    <div class="card border-0">
                        <div class="arrow-container" id="arrow2" style="margin-top:108px">
                            <div class="arrow-body"></div>
                            <div class="arrow-head"></div>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
                <div class="mb-4 arrow_id">
                    <div class="card border-0">
                        <div class="arrow-container" id="arrow3" style="margin-top:108px">
                        <br><br><br>
                            <div class="arrow-body"></div>
                            <div class="arrow-head"></div>
                        </div>
                    </div>
                </div>
                <div class="mb-4 arrow_id">
                    <div class="card border-0">
                        <div class="arrow-container">
                        <br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5" id="parent">
                <div class="card-img-container" id="child">
                    <img src="../img/issuse_tarmo.jpg" id="image1" class="shadow" alt="">
                    <img src="../img/issuse_answer.jpg" id="image2" class="shadow" alt=" ">
                    <img src="../img/issuse_news.jpg" id="image3" class="shadow" alt=" ">
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
            color: #444444;
            font-weight: 800;
        }

        .card-body {
            background-color: #C3C3C3;
            border-color: #373737;
            border-width: 1px;
        }

        .card-text {
            font-size: 19px;
            font-weight: 700;
            color: #666666;
        }

        .parent {
            position: relative;
        }

        .child {
            position: absolute;
            bottom: 23px;
            margin-left: 10px;
        }

        .center {
            margin-left: 3%;
            margin-right: 3%;
        }

        .card-img-container img{
            width: 100%;
            height: 100%;
            border-radius: 2%;
            display:none;
        }

        .number {
            font-size: 2rem;
            font-weight: 800;
            color: #444444;
        }

        .card-body:hover {
            border-color: #53BEEC;
            border-width: 3px;
            background-color: #FFFFFF;
        }

        .card-body:hover .number {
            color: #53BEEC;
            border-color: #53BEEC;
        }

        /* 화살표 */
        .arrow-container {
            display: none;
            align-items: center;
        }

        .arrow-body {
            width: 105px; /* 화살표 몸체의 길이 */
            height: 1px; /* 화살표 몸체의 두께 */
            background-color: #555; /* 화살표 몸체의 색상 */
        }

        .arrow-head {
            width: 0;
            height: 0;
            border-left: 10px solid #555; /* 화살표 머리의 색상 */
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
        }

        .visible {
            display: flex !important;
        }

    </style>

    <script>
        document.querySelectorAll('.card-body').forEach(card => {
            card.addEventListener('mouseover', function() {
                const arrowId = 'arrow' + this.id.replace('number', '');
                const image = 'image' + this.id.replace('number', '');
                if (image=="image3") {
                    document.getElementById("parent").classList.add('parent');
                    document.getElementById("child").classList.add('child');
                }
                document.getElementById(arrowId).classList.add('visible');
                document.getElementById(image).classList.add('visible');
                
            });

            card.addEventListener('mouseout', function() {
                const arrowId = 'arrow' + this.id.replace('number', '');
                const image = 'image' + this.id.replace('number', '');
                document.getElementById(arrowId).classList.remove('visible');
                document.getElementById(image).classList.remove('visible');
                document.getElementById("parent").classList.remove('parent');
                document.getElementById("child").classList.remove('child');
            });
        });

        // // 윈도우가 리사이즈될 때 실행되는 함수
        // function handleResize() {
        //     // 기준이 되는 넓이(px)
        //     const widthThreshold = 700; // 원하는 크기로 설정

        //     // 삭제할 요소의 클래스 이름
        //     const classNameToRemove = 'arrow_id'; // 삭제할 요소의 클래스 이름

        //     // 윈도우의 현재 넓이가 기준 넓이보다 작을 때
        //     if (window.innerWidth < widthThreshold) {
        //         // 특정 클래스를 가진 요소들을 선택
        //         const elements = document.querySelectorAll(`.${classNameToRemove}`);
                
        //         // 각 요소를 순회하며 삭제
        //         elements.forEach(element => {
        //             element.remove();
        //         });
        //     }
        // }

        // // 페이지가 로드될 때, 그리고 윈도우가 리사이즈될 때 함수 실행
        // window.addEventListener('resize', handleResize);
        // window.addEventListener('load', handleResize);


    </script>


    <!-- Footer -->
    <?php include "../footer.php" ?>

</body>
</html>
