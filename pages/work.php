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
    #title {
        height: 44rem;
        line-height: 35rem;
        background-image: url("../img/h_WORK.PNG");
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

    const content = "WORK";
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




    <!-- 진행 내용 섹션 -->
    <!-- 추가 내용 확인 시 페이지 내에서 work 섹션 내용 변환하도록 구현-->
    <section class="work-section">
        <div class="container">
            <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" style="color:#52C1EE;" href="#">&nbsp;상위노출 &nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#444444;" href="../?page=new_media">&nbsp;NEW MEDIA&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color:#444444;" href="../?page=marketing">&nbsp;부정이슈 관리&nbsp;</a>
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
    .nav {
        font-size: 1.5rem;
        font-weight: 700;
    }
    </style>

    <!-- Work 섹션 -->
    <div class="container mt-4">
        <div class="row center">
            <div class="col-md-6">
                <h4 class="text-primary">
                    <img src="../img/doyou.jpg" alt="" width="200" height="60" class="d-inline-block align-top">
                </h4>
                <br>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">스마트 블록 생성</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">스마트 블록 생성으로 "맛있는 두유 추천" 주제에서 상위 노출 달성</p>
                            <p class="toggle-content">
                                "맛있는 두유 추천"을 주제로 스마트 불록을 생성하여 맛있는 두유GT 관련 키워드 검색 시 상위노출을 확보했습니다.<br>
                                스마트블록의 전력적인 사용으로, 브랜드 인지도를 높이는 데 성공하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">SEO 최적화</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">다수의 제품 관련 키워드로 전체 영역에서 상위 노출 확보</p>
                            <p class="toggle-content">
                                "맛있는 두유GT" 관련 다양한 키워드를 타겟으로 SEO 최적화를 진행했습니다. 검색 결과의 전체 영역에서 높은 순위를 유지하며,<br>
                                트래픽과 판매량을 효과적으로 증가시켰습니다. 다양한 키워드를 활용한 전략적 접근으로, 지속적인 상위노출을 달성하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">키워드 챌린지</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">인플루언서 협업을 통해 다수의 상위 동수 확보</p>
                            <p class="toggle-content">
                                영향력 있는 인플루언서와 협업하여 두유 관련 키워드 챌린지에 참여함으로써 다수의 상위 등수를 확보했습니다.<br>
                                인플루언스의 참여로 인해 보다 많은 타겟 소비자 층에게 접근할 수 있었으며, 자연스럽게 브랜드 인지도가 향상되었습니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 parent idx_p">
                <div class="card-img-container child idx_c">
                    <img src="../img/work_ad1.jpg" class="image" alt="두유 GT">
                </div>
            </div>
        </div>
        <hr>
        <br><br><br>
        <div class="row center">
            <div class="col-md-6 justify-content-center">
                <h4 class="text-primary">
                    <img src="../img/takefit.jpg" alt="" width="230" height="60" class="d-inline-block align-top">
                </h4>
                <br>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">스마트 블록 생성</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">스마트 블록 생성으로 "테이크핏 당케어" 주제에서 상위 노출 달성</p>
                            <p class="toggle-content">
                                테이크핏 "당케어" 관련 주제로 스마트 불록을 생성하여 관련 키워드 검색 시 상위노출을 확보했습니다.<br>
                                스마트블록의 사용으로, 브랜드 인지도를 높이는 데 성공하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">SEO 최적화</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">다수의 관련 키워드로 전체 영역에서 상위 노출 확보</p>
                            <p class="toggle-content">
                                테이크핏 당케어 관련 다양한 키워드를 타겟으로 SEO 최적화를 진행했습니다. 검색 결과의 전체 영역에서 높은 순위를
                                유지하며, 트래픽과 판매랭을 효과적으로 증가시켰습니다. 다양한 키워드를 활용한 전략적 접근으로,
                                지속적인 상위 노출을 달성하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">키워드 챌린지</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">인플루언서 협업을 통해 다수의 상위 동수 확보</p>
                            <p class="toggle-content">
                                영향력 있는 인플루언서와 협업하여 당케어 관련 키워드 챌린지에 참여함으로써 인기도를 확보했습니다.
                                인플루언서의 참여로 인해 보다 많은 타겟 소비자 층에게 접근할 수 있었으며,
                                자연스럽게 브랜드 인지도가 향상되었습니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 parent idx_p">
                <div class="card-img-container child idx_c">
                    <img src="../img/work_ad5.png" class="image" alt="테이크핏 당케어">
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
        width: 20px;
        /* 이미지 크기 조정 */
        height: 20px;
    }

    .card-title {
        font-size: 1.3rem;
        font-weight: 800;
        color: #444444;
    }

    .card-text {
        font-size: 1.2rem;
        font-weight: 700;
        color: #666666;
        margin-bottom: 4px;
        padding-top: 3px;
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

    .image {
        width: 100%;
        height: 120%;
    }

    hr {
        border: 0;
        height: 1.5px;
        background: #000;
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