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
                    <a class="nav-link active" style="color:#52C1EE;" href="#">&nbsp;NEW MEDIA&nbsp;</a>
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
        .nav{
            font-size:1.5rem;
            font-weight: 700;
        }
    </style>

    <!-- Work 섹션 -->
    <div class="container mt-4">
        <div class="row center">
            <div class="col-md-6">
                <h4 class="text-primary">
                    <img src="../img/jinro_title.jpg" alt="" width="200" height="60" class="d-inline-block align-top">
                </h4>
                <br>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">인플루언서 마케팅</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div> 
                            <p class="card-text">영향력 있는 인플루언서를 통해 관심과 인지도 증대</p>
                            <p class="toggle-content">
                                영향력 있는 인플루언서와의 전략적 협업을 통해 신제품 및 팝업의 인지도를 대폭 향상시켰습니다.<br>
                                인플루언서의 개인 채널을 통해 신제품을 자연스럽게 노출시켜 타겟 소비자들의 큰 관심을 유도했으며, 상품의 대세감을 효과적으로 형성하였습니다.<br>
                                 이는 소비자들 사이에서 신뢰성과 매력을 동시에 강화하는 결과를 가져왔습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">SNS 파워 페이지 홍보</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>  
                            <p class="card-text">팔로워가 높은 SNS 파워 페이지를 통해 가시성 증대</p>
                            <p class="toggle-content">
                                팔로워 수가 많은 SNS 파워 페이지를 활용하여 하이트진로 신제품의 가시성을 극대화했습니다.<br>
                                타겟층이 많이 활동하는 주요 SNS 플랫폼에서 집중적인 홍보를 실시하여, 지속적인 노출과 함께 브랜드 인지도와 소비자 관심을 대폭 증대시켰습니다. <br>
                                이러한 전략적 접근은 신제품의 성공적인 시장 진입과 더불어 소비자 충성도 강화에 기여하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">네이티브 AD 홍보</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>    
                            <p class="card-text">공신력 있는 네이티브 AD 채널을 통해 인지도 확장</p>
                            <p class="toggle-content">
                                공신력 있는 네이티브 AD 채널을 통해 하이트진로 신제품의 인지도를 획기적으로 확장시켰습니다.
                                네이티브 광고를 통해 자연스럽고 신뢰성 있는 방식으로 제품을 소개함으로써, 소비자들에게 거부감 없이 브랜드와 신제품을 효과적으로 알릴 수 있었습니다.<br>
                                이를 통해 새로운 소비자층을 성공적으로 확보하고, 브랜드의 시장 경쟁력을 강화하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 parent idx_p">
                <div class="card-img-container child idx_c">
                    <img src="../img/media_jinro.png" class="image" alt="두유 GT">
                </div>
            </div>
        </div>
        <hr>
        <br><br><br>
        <div class="row center">
            <div class="col-md-6 justify-content-center">
                <h4 class="text-primary">
                    <img src="../img/banila_title.jpg" alt="" width="230" height="60" class="d-inline-block align-top">
                </h4>
                <br>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">브랜드 주력 제품 리뷰</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>    
                            <p class="card-text">파워블로거 협업을 통한 브랜드 주력 제품 리뷰</p>
                            <p class="toggle-content">
                                뷰티 전문 파워블로거와의 협업을 통해 바닐라코 제품의 특징, 사용 방법을 디테일하게 소개했습니다.<br>
                                실제 사용 후기와 함께 제품의 효과를 설명하여 소비자들에게 신뢰성 있는 정보를 제공하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">할인 정보 안내</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">정기적인 할인 정보 전달로 직접적 구매 유도</p>
                            <p class="toggle-content">
                                정기적으로 블로그와 소셜 미디어 플랫폼을 통해 바닐라코 제품의 할인 정보를 정기적으로 공지했습니다. <br>
                                구매를 유도하기 위해 할인 기간, 할인 코드 등을 명확하게 안내하여, 타겟 소비자 층이 구매 결정을 내리는 데 긍정적인 영향을 주었습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">경쟁 키워드 점유</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">효과적인 SEO 전략 적용하여 경쟁 키워드 점유</p>
                            <p class="toggle-content">
                                SEO 전략을 활용해 관련 키워드를 포함시켜 검색 결과 상위 노출에 성공했습니다.<br>
                                '올리브영 톤업크림', '톤업 베이스' 등 경쟁 키워드 점유에 성공하여 블로거 리부의 가시성을 높이고 트래픽을 유도하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 parent idx_p">
                <div class="card-img-container child idx_c">
                    <img src="../img/media_banila.png" class="image" alt="테이크핏 당케어">
                </div>
            </div>
        </div>
        <hr>
        <br><br><br>
        <div class="row center">
            <div class="col-md-6 justify-content-center">
                <h4 class="text-primary">
                    <img src="../img/insta_title.jpg" alt="" width="90%" height="90%" class="d-inline-block align-top">
                </h4>
                <br>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">브랜드 신제품 리뷰</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>    
                            <p class="card-text">2030 라이프스타일 인플루언서를 활용한 대세감 유도</p>
                            <p class="toggle-content">
                                프로바이오틱스 얼티밋의 새로운 제품을 리뷰하기 위해 트렌디한 2030 라이프스타일 인플루언서를 선정하였으며, 이를 인플루언서들의 일상 속에 자연스럽게 노출시켜<br>
                                제품 고유의 특성과 장점을 강조하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">디테일한 제품 소개</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">직접 복용 후기를 통한 신뢰도 제공</p>
                            <p class="toggle-content">
                                프로바이오틱스 얼티밋 제품의 구체적인 정보를 명확히 설명하고, 직접 복용 후기를 통해 제품의 소비자들에게
                                신뢰감 있게 전달하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">제품 사전 홍보</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">제품 출시 전 사전 홍보를 통한 기대감 유도</p>
                            <p class="toggle-content">
                                제품 출시 전 인플루언서를 활용하여 예비 소비자들에게 제품에 대한 궁금증을 유발하고, 출시 당일 구매로 이어질 수
                                있도록 했습니다. <br>
                                이는 소비자들의 기대감을 극대화하여 초기 판매 성과를 높이는 데 기여하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 parent idx_p">
                <div class="card-img-container child idx_c">
                    <img src="../img/media_insta.jpg" class="image" alt="테이크핏 당케어">
                </div>
            </div>
        </div>
        <hr>
        <br><br><br>
        <div class="row center">
            <div class="col-md-6 justify-content-center">
                <h4 class="text-primary">
                    <img src="../img/blog_title.jpg" alt="" width="190" height="60" class="d-inline-block align-top">
                </h4>
                <br>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">뷰티 전문 파워블로거</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>    
                            <p class="card-text">신뢰성 있는 뷰티 전문가와의 협업</p>
                            <p class="toggle-content">
                                뷰티 전문 파워블로거를 선정하여 눅스 제품 리뷰를 진행했습니다. <br>
                                블로거의 신뢰성과 전문성을 활용해 제품의 긍적적인 인식을 형성했으며, 이를 통해 소비자들의 관심과 신뢰감을 유도하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">브랜드 제공 정보 언급</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">디테일한 제품 정보와 실사용 후기 제공</p>
                            <p class="toggle-content">
                                눅스 제품의 주요 성분, 사용 방법 등 구체적인 브랜드 제공 정보를 상세히 명시했습니다.
                                일정 기간 직접 사용한 후기를 통해 실제 효과를 전달하여 제품에 대한 이해와 신뢰도를 높였습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body card shadow-sm">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title">경쟁 키워드 점유</h5>
                            </div>
                            <div class="col text-end">
                                <button class="img-button bg-transparent border-0 toggle-button">
                                    <img src="../img/plus.png" class="toggle-plus">
                                    <img src="../img/minus-sign.png" class="toggle-minus" style="display: none;">
                                </button>
                            </div>
                            <p class="card-text">효과적인 SEO 전략 적용하여 경쟁 키워드 점유</p>
                            <p class="toggle-content">
                                SEO 전략을 활용해 관련 키워드를 포함시켜 검색 결과 상위 노출에 성공했습니다. <br>
                                '멀티오일', '여름 오일 추천' 등 경쟁 키워드 점유에 성공하여 블로거 리뷰의 가시성을 높이고 트래픽을 유도하였습니다.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 parent idx_p">
                <div class="card-img-container child idx_c">
                    <img src="../img/media_blog.png" class="image" alt="테이크핏 당케어">
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
        .card-title{
            font-weight: 800;
        }
        .card-text{
            font-size:17px;
            font-weight: 700;
            color : #666666;
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
            width: 100%;
            height: 120%;
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
