<!DOCTYPE html>
<html lang="ko">

<body>
    <!-- 네비게이션 바 -->
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
    <!-- <header class="company-header">
        <h1 style="color:#e6eef5; font-weight:400; font-size:100px;">COMPANY</h1>
    </header> -->

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
    #title {
        height: 44rem;
        line-height: 35rem;
        background-image: url("../img/h_COMPANY.PNG");
        background-position: center center;
        background-color: #FFFFFF;
        background-size: auto 100%;
        background-repeat: no-repeat;
        transition: background-size 3s ease-in-out;
        -moz-transition: background-size 3s ease-in-out;
        -web-kit-transition: background-size 3s ease-in-out;
    }

    #title.o {
        background-size: auto 150% !important;
    }

    .banner {
        font-size: 7.5rem;
        font-weight: 800;
    }

    .m_banner {
        font-size: 5rem;
        font-weight: 800;
    }
    </style>
    <script>
    $(document).ready(function() {
        $("#title").removeClass("o");
    });

    const content = "COMPANY";
    const text = document.querySelector(".banner");
    let i = 0;

    function typing() {
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


    <div class="container mt-5">
        <div class="title-container">
            <div class="title-text">기업 소식</div>
        </div>
    </div>
    <style>
    .title-container {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: 40px 0;
    }

    .title-container::before,
    .title-container::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #ccc;
    }

    .title-container::before {
        margin-right: 10px;
    }

    .title-container::after {
        margin-left: 10px;
    }

    .title-text {
        font-size: 1.5rem;
        font-weight: 800;
        color: #52C1EE;
        position: relative;
        padding: 0 10px;
        background-color: white;
    }

    .title-text::after {
        content: '';
        display: block;
        width: 100px;
        height: 4px;
        background-color: #52C1EE;
        margin: 0 auto;
        margin-top: 5px;
    }
    </style>

    <!-- 소식 섹션 -->
    <section class="message-section text-center new-sec">
        <br><br><br>
        <div class="container news" data-animate-on-scroll>
            <h1 class="news" style="font-weight:900;"><span class="news-t">더바이럴 소식</span></h1>
            <span class="ty-text"></span><span class="blink">|</span>
        </div>
    </section>
    <style>
    .news {
        word-spacing: 2px;
        overflow: hidden;
        opacity: 1;
    }

    @keyframes mt {
        0% {
            transform: translateY(100%);
        }

        100% {
            transform: translateY(0);
        }
    }

    .news-t {
        display: inline-block;
        opacity: 0;
    }

    .news-t.visible {
        animation: mt 1s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .news-t1 {
        display: inline-block;
        animation: mt 1s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        font-size: 3rem;
    }

    .ty-text {
        margin-top: 15px;
        font-size: 1.4rem;
    }

    .blink {
        animation: blink 0.5s infinite;
        font-size: 1.4rem;
    }

    @keyframes blink {
        to {
            opacity: 0;
        }
    }
    </style>

    <script>
    $(document).ready(function() {
        const content_n = "더바이럴의 언론보도 및 보도자료 등 최신 소식을 전해드립니다.";
        const text_n = document.querySelector(".ty-text");
        let ii = 0;

        function typingping() {
            if (ii < content_n.length) {
                let txt_n = content_n.charAt(ii);
                text_n.innerHTML += txt_n;
                ii++;
            }
        }

        function checkVisibility() {
            const triggerBottom = $(window).height() * 0.8;

            $('[data-animate-on-scroll]').each(function() {
                const elementTop = $(this).offset().top;
                const windowTop = $(window).scrollTop();

                if (elementTop < windowTop + triggerBottom) {
                    $(this).find('.news-t').addClass('visible');
                    setInterval(typingping, 100); // 타이핑 애니메이션 시작
                }
            });
        }

        $(window).on('scroll', checkVisibility);
        checkVisibility(); // 페이지 로드 시 초기 검사
    });
    </script>


    <!-- 소식 섹션 -->
    <section class="news-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="hover card-custom btn btn-white"
                    onclick="location.href='https://www.hankookilbo.com/News/Read/A2023032809320005263';">
                    <div class="card border-0" data-animate-on-scroll>
                        <div class="card-header bg-transparent border-0 text-start">
                            <a class="rounded-button letter">보도자료</a>
                        </div>
                        <img src="../img/company_news3.jpg" class="card-img-top letter" alt="News 1">
                        <div class="card-body text-start">
                            <h5 class="card-title"></h5>
                            <p class="card-text">[보도자료] 2023 서비스만족대상 더바이럴, AI 시대에 맞춘 디지털일자리 창출 플랫폼</p>
                            <p>2023-03-29</p>
                        </div>
                    </div>
                </div>
                <div class="hover card-custom btn btn-white"
                    onclick="location.href='https://www.epnc.co.kr/news/articleView.html?idxno=223764';">
                    <div class="card border-0" data-animate-on-scroll>
                        <div class="card-header bg-transparent border-0 text-start">
                            <a class="rounded-button letter1">보도자료</a>
                        </div>
                        <img src="../img/company_news1.jpg" class="card-img-top letter1" alt="News 2">
                        <div class="card-body text-start">
                            <h5 class="card-title"></h5>
                            <p class="card-text">[보도자료] 더바이럴, 이미지 촬영 크라우드 워커 모집</p>
                            &nbsp;&nbsp;&nbsp;
                            <p>2022-05-27</p>
                        </div>
                    </div>
                </div>
                <div class="hover card-custom btn btn-white"
                    onclick="location.href='https://www.hankookilbo.com/News/Read/A2023032809320005263';">
                    <div class="card border-0" data-animate-on-scroll>
                        <div class="card-header bg-transparent border-0 text-start">
                            <a class="rounded-button letter2">보도자료</a>
                        </div>
                        <img src="../img/company_news4.jpg" class="card-img-top letter2" alt="News 3">
                        <div class="card-body text-start">
                            <h5 class="card-title"></h5>
                            <p class="card-text">[보도자료] "한국인들 일상생활 어떤 모습일까" 대규모 학습용 데이터 구축 <br><br></p>
                            <p>2021-07-26</p>
                        </div>
                    </div>
                </div>
                <div class="hover card-custom btn btn-white"
                    onclick="location.href='https://www.epnc.co.kr/news/articleView.html?idxno=212379';">
                    <div class="card border-0" data-animate-on-scroll>
                        <div class="card-header bg-transparent border-0 text-start">
                            <a class="rounded-button letter3">보도자료</a>
                        </div>
                        <img src="../img/company_news2.jpg" class="card-img-top letter3" alt="News 4">
                        <div class="card-body text-start">
                            <h5 class="card-title"></h5>
                            <p class="card-text">[보도자료]더바이럴, 일상생활 영상 데이터 크라우드워커 모집<br><br></p>
                            <p>2021-07-16</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .rounded-button {
        display: inline-block;
        padding: 0.1rem 19px;
        font-size: 0.9rem;
        color: #333;
        border: 2px solid #333;
        border-radius: 30px;
        text-align: center;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s;
    }

    .card-header {
        padding-left: 0px;
    }

    .card-body {
        padding-left: 0px;
    }

    .card-custom {
        flex: 0 0 30%;
        max-width: 23%;
        margin: 1%;
        box-shadow: -1px -1px 2px rgba(94, 104, 121, .288), 2px 2px 2px rgba(94, 104, 121, .288);
    }

    @media (max-width: 768px) {
        .card-custom {
            flex: 0 0 48%;
            max-width: 48%;
        }

        ;
    }

    @media (max-width: 576px) {
        .card-custom {
            flex: 0 0 100%;
            max-width: 100%;
            margin: 1% 0;
        }
    }

    .card {
        overflow: hidden;
    }

    @keyframes reveal {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .letter,
    .letter1,
    .letter2,
    .letter3,
    .letter4 {
        display: inline-block;
        opacity: 0;
        /* 애니메이션 시작 전 숨기기 */
    }

    .letter.visible {
        animation: reveal 0.8s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .letter1.visible {
        animation: reveal 1.2s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .letter2.visible {
        animation: reveal 1.6s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .letter3.visible {
        animation: reveal 2.0s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        opacity: 1;
    }
    </style>
    <script>
    document.querySelectorAll('.hover').forEach(function(element) {
        element.addEventListener('mouseover', function() {
            this.style.boxShadow =
                '-1px -1px 2px rgba(94, 104, 121, .288), 2px 2px 2px rgba(94, 104, 121, .288)';
            this.classList.add('shadow-lg');
        });

        element.addEventListener('mouseout', function() {
            this.classList.remove('shadow-lg');
            this.style.boxShadow =
                '-1px -1px 2px rgba(94, 104, 121, .288), 2px 2px 2px rgba(94, 104, 121, .288)';
        });
    });
    </script>


    <section>
        <div class="container">
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link " href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <br><br><br><br><br><br>
        </div>
    </section>
    <style>
    .page-link {
        color: #444444;
        border: none;
    }

    .page-link:hover {
        color: #00AAFF;
    }
    </style>

    <!-- Footer -->
    <?php include "../footer.php" ?>
    <script>
    $(document).ready(function() {
        function checkVisibility() {
            const triggerBottom = $(window).height() * 0.8;

            $('[data-animate-on-scroll]').each(function() {
                const elementTop = $(this).offset().top;
                const windowTop = $(window).scrollTop();

                if (elementTop < windowTop + triggerBottom) {
                    $(this).find('.letter, .letter1, .letter2, .letter3').each(function() {
                        $(this).addClass('visible');
                    });
                }
            });
        }

        $(window).on('scroll', checkVisibility);
        checkVisibility(); // 페이지 로드 시 초기 검사
    });
    </script>
</body>

</html>