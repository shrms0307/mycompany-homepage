<!DOCTYPE html>
<html lang="ko">

<body>
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
    <!-- <header class="welfare-header">
        <h1>WELFARE</h1>
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
        background-image: url("../img/h_WELFARE.PNG");
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

    const content = "WELFARE";
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


    <!-- 지원 스텝 섹션 -->
    <section class="welfare-section text-center" style="background-color: #EEF6FF;">
        <br><br><br>
        <div class="container" data-animate-on-scroll>
            <h1 class="welfare"><span class="welfare_t">더바이럴과 </span>&nbsp;<span class="welfare_t"
                    style="color: #52C1EE;"> 함께 성장할 인재</span><span class="welfare_t">를 기다립니다</span></h1>
            <br>
            <div class="row steps-container justify-content-center">
                <div class="col-3 step">
                    <img class="letter" src="../img/Welfare_1.png" alt="지원서 제출">
                    <div class="step-number letter">STEP.01</div>
                    <hr>
                    <div class="step-title letter">서류전형</div>
                </div>
                <div class="col-3 step">
                    <img class="letter1" src="../img/Welfare_2.png" alt="서류심사">
                    <div class="step-number letter1">STEP.02</div>
                    <hr>
                    <div class="step-title letter1">1차면접</div>
                </div>
                <!-- <div class="col-3 step">
                    <img src="../img/Welfare_3.png" alt="인터뷰">
                    <div class="step-number">STEP.03</div>
                    <hr>
                    <div class="step-title">인터뷰</div>
                </div> -->
                <div class="col-3 step">
                    <img class="letter2" src="../img/Welfare_4.png" alt="선발">
                    <div class="step-number letter2">STEP.03</div>
                    <hr>
                    <div class="step-title letter2">최종합격</div>
                </div>
            </div>
            <br>
            <p style='font-size:0.9rem;'>자세한 지원 문의는 대표번호: 02-515-7002 또는 이메일 : account1@the-viral.co.kr로 문의 바랍니다.</p>
            <br>
            <button class="btn btn-view-more"
                onclick="location.href='https://www.saramin.co.kr/zf_user/jobs/relay/view?isMypage=no&rec_idx=48593191&recommend_ids=eJxNkMkNwzAMBKvJn8dyxX2nEPffRWQHEP0cDHcACZ2QFFc7P%2BuLZsiMlywehLpl29qDJZYNZjTVB%2Fe6Q2ebW6%2Fc1v%2FlDAs7trYWppwN6ByDxsop%2BwLjYFDumONkMF8pW5UvC1UMYsEmRa%2F9iNl6y18oRPr9OT97N0BS&view_type=search&searchword=%EB%8D%94%EB%B0%94%EC%9D%B4%EB%9F%B4&searchType=search&gz=1&t_ref_content=generic&t_ref=search&relayNonce=4aa02f0a5be24a6b7081&paid_fl=n&search_uuid=230bcde9-d528-4426-b60a-992b1eca485c&immediately_apply_layer_open=n#seq=0';">입사
                지원하기</button>
        </div>
        <br><br><br>
    </section>

    <style>
    .welfare {
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

    .welfare_t {
        display: inline-block;
        opacity: 0;
    }

    .welfare_t.visible {
        animation: mt 1s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .steps-container {
        margin: auto;
        align-items: center;
        background-color: #EEF6FF;
        padding: 20px;
        width: 65%;
        height: 55%;
    }

    .step img {
        width: 100%;
        height: 55%;
    }

    .step-title {
        font-size: 1.5rem;
        margin-top: 10px;
        font-weight: 750;
    }

    .step-number {
        font-size: 0.8rem;
        font-weight: 500;
        color: gray;
        margin-top: 5px;
    }

    .welfare-section {
        padding: 40px 0;
    }

    .btn-view-more {
        background-color: #52C1EE;
        color: white;
        border-radius: 25px;
        padding: 10px 60px;
        border: none;
        font-size: 16px;
        font-weight: 600;
    }

    hr {
        width: 95%;
        /* 원하는 너비 설정 */
        margin: 10px auto;
        /* 수평 중앙 정렬 */
        height: 0.1rem;
        /* 두께 설정 */
        background-color: #444444;
        /* 배경색 설정 */
        border: none;
        /* 기본 테두리 제거 */
    }

    .step {
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
    .letter2 {
        display: inline-block;
        opacity: 0;
        /* 애니메이션 시작 전 숨기기 */
    }

    .letter.visible {
        animation: reveal 1s cubic-bezier(0.55, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .letter1.visible {
        animation: reveal 2s cubic-bezier(0.55, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .letter2.visible {
        animation: reveal 3s cubic-bezier(0.55, 0, 0.175, 1) forwards;
        opacity: 1;
    }
    </style>

    <script>
    // 윈도우가 리사이즈될 때 실행되는 함수
    function handleResize() {
        // 기준이 되는 넓이(px)
        const widthThreshold = 700; // 원하는 크기로 설정

        // 삭제할 클래스 이름
        const classNameToRemove1 = 'col-3'; // 삭제할 클래스 이름으로 변경

        // 삭제할 요소들을 선택 (여기서는 클래스명이 특정 클래스인 요소들을 선택)
        const elements = document.querySelectorAll(`.${"step"}`);

        // 윈도우의 현재 넓이가 기준 넓이보다 클 때
        if (window.innerWidth < widthThreshold) {
            elements.forEach(element => {
                // 클래스 삭제
                element.classList.remove(classNameToRemove1);
                element.classList.add('col-6');
            });

        }
    }

    // 페이지가 로드될 때, 그리고 윈도우가 리사이즈될 때 함수 실행
    window.addEventListener('resize', handleResize);
    window.addEventListener('load', handleResize);

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
                    $(this).find('.welfare_t').addClass('visible');
                    setInterval(typingping, 100); // 타이핑 애니메이션 시작
                }
            });
        }

        $(window).on('scroll', checkVisibility);
        checkVisibility(); // 페이지 로드 시 초기 검사
    });

    $(document).ready(function() {
        function checkVisibility() {
            const triggerBottom = $(window).height() * 0.8;

            $('[data-animate-on-scroll]').each(function() {
                const elementTop = $(this).offset().top;
                const windowTop = $(window).scrollTop();

                if (elementTop < windowTop + triggerBottom) {
                    $(this).find('.letter, .letter1, .letter2').each(function() {
                        $(this).addClass('visible');
                    });
                }
            });
        }

        $(window).on('scroll', checkVisibility);
        checkVisibility(); // 페이지 로드 시 초기 검사
    });
    </script>


    <!-- 복지 섹션 -->
    <section class="welfare-section text-center">
        <div class="container" data-animate-on-scroll>
            <br><br>
            <h1 class="welfare">더바이럴의 <span class="welfare_t" style="color: #52C1EE;">시설 및 복지</span>를 소개합니다</h1>
            <br><br><br>
            <div class="row" data-animate-on-scroll-up>
                <div class="uppers">
                    <div class="col-md-12 project-box shadow upper1">
                        <div class="row">
                            <div class="col">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="../img/welfare_ad1_v2.jpg" class="project-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../img/welfare_ad_m11.jpg" class="project-img">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 id="number">01</h3>
                                <h3 class="welfare">직장에서의 새로운 경험, 새로운 공간</h3>
                                <p>회사 사옥 내에는 깔끔한 사무실과 회의실이 배치되어 있으며, 음악이 흐르는 자유로운 분위기의 근무 환경이 조성되어 있습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uppers">
                    <div class="col-md-12 project-box shadow upper2">
                        <div class="row">
                            <div class="col">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="../img/welfare_ad2_v2.jpg" class="project-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../img/welfare_ad_gift.jpg" class="project-img">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 id="number">02</h3>
                                <h3 class="welfare">일하는 즐거움, 특별한 보상</h3>
                                <p>명절 시 선물 세트와 조기 퇴근을 제공하며, 생일인 직원 분들을 위해 케이크와 기프트콘을 준비합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uppers">
                    <div class="col-md-12 project-box shadow upper3">
                        <div class="row">
                            <div class="col">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-slide">
                                            <img src="../img/welfare_ad3_v2.jpg" class="project-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="../img/welfare_ad_m33.jpg" class="project-img">
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <!-- <div class="swiper-pagination"></div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h3 id="number">03</h4>
                                    <h3 class="welfare"> 휴식과 창의적인 환경</h3>
                                    <p>회사 사옥에는 게임 시설과 휴게 공간이 마련되어 있으며, 직원들의 컨디션을 위해 사내 카페와 간식을 제공합니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
    .uppers {
        overflow: hidden;
    }

    @keyframes reveal_u {
        0% {
            transform: translateY(100%);
        }

        100% {
            transform: translateY(0);
        }
    }

    .upper1,
    .upper2,
    .upper3 {
        display: inline-block;
        opacity: 0;
        /* 애니메이션 시작 전 숨기기 */
    }

    .upper1.visible {
        animation: reveal_u 1s cubic-bezier(0.55, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .upper2.visible {
        animation: reveal_u 3s cubic-bezier(0.55, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .upper3.visible {
        animation: reveal_u 5s cubic-bezier(0.55, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .project-box {
        padding: 0px 20px 0px 20px;
    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #F8F9FA;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        width: 90%;
        height: 90%;
        object-fit: cover;
    }

    .welfare {
        font-weight: 900;
    }

    .swiper-button-next {
        color: #444444;
    }

    .swiper-button-prev {
        color: #444444;
    }

    .swiper-pagination {
        color: #444444;
    }
    </style>
    <script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    $(document).ready(function() {
        function checkVisibility() {
            const triggerBottom = $(window).height() * 0.8;

            $('[data-animate-on-scroll-up]').each(function() {
                const elementTop = $(this).offset().top;
                const windowTop = $(window).scrollTop();

                if (elementTop < windowTop + triggerBottom) {
                    $(this).find('.upper1, .upper2, .upper3').each(function() {
                        $(this).addClass('visible');
                    });
                }
            });
        }

        $(window).on('scroll', checkVisibility);
        checkVisibility(); // 페이지 로드 시 초기 검사
    });
    </script>


    <section>
        <!-- Footer -->
        <?php include "../footer.php" ?>
    </section>
</body>

</html>