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
    <!-- <header class="contact-header">
        <h1>CONTACT</h1>
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
        background-image: url("../img/h_CONTACT.PNG");
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

    const content = "CONTACT";
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


    <style>
    </style>

    <!-- <section>
        <div class="section-header">
            <div class="section-title">
                <span class="highlight">문의하기</span>
            </div>
            <div class="section-title">
                <span>오는 길</span>
            </div>
        </div>
    </section>

    <style>
        .section-header {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            margin: 40px 0;
            padding: 10px 0;
        }
        .section-header::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-index: 1;
        }
        .section-title {
            position: relative;
            background-color: #ffffff;
            padding: 0 10px;
            z-index: 2;
            font-size: 1.5rem;
            color: #333;
            margin: 0 10px; /* 텍스트 간의 간격 조정 */
        }
        .highlight {
            color: #00aaff; /* 하이라이트 텍스트 색상 */
            position: relative;
        }
        .highlight::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #00aaff; /* 하이라이트 색상 */
            z-index: -1;
        }
    </style> -->


    <!-- 문의하기 섹션 -->
    <section class="contact-section">
        <div class="section-title">
            <h2 class="head-text">문의하기</h2>
        </div>
        <div class="container contact-container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-info">
                        <br><br>
                        <h1>THE VIRAL</h1>
                        <br>
                        <h2 style="margin-bottom:0px;">서비스 문의</h2>
                        <p style="margin-top:0px;">AM 8:30 ~ PM 5:30</p>
                        <hr>
                        <br>
                        <p>T: 02-515-7002</p>
                        <p>E: account1@the-viral.co.kr</p>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <br>
                        <form action="../mailer.php" method="post" id="contact" name="contact">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">성명(name)*</label>
                                        <input type="text" class="form-control" id="name" placeholder="성명을 입력해 주세요">
                                        <hr>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">연락받으실 번호(phone number)*</label>
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="연락받으실 번호를 입력해 주세요 (숫자만 입력)">
                                        <hr>
                                    </div>
                                    <div><br></div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">연락받으실 메일(name)*</label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="연락받으실 메일을 입력해 주세요">
                                        <hr>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inquiry" class="form-label">문의 항목(name)*</label>
                                        <select class="form-control" id="inquiry">
                                            <option>문의하실 항목을 선택해 주세요</option>
                                            <option>사업 문의</option>
                                            <option>...</option>
                                        </select>
                                        <hr>
                                    </div>
                                    <div><br></div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">문의 내용(name)*</label>
                                        <textarea class="form-control" id="message" rows="1"
                                            placeholder="자세한 문의 내용을 입력해 주세요"></textarea>
                                        <hr>
                                    </div>
                                    <div><br></div>
                                </div>
                            </div>
                            <button type="submit" onclick="to_email()" style="display:none;"></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-more">
            <button class="btn btn-view-more" onclick="post()">문의 전송하기</button>
        </div>
        <br><br><br>
    </section>
    <style>
    .head-text {
        color: #444444;
        font-weight: 900;
        font-size: 2.5rem;
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .contact-container {
        margin: 50px auto;
    }

    .contact-info {
        background-color: #52C1EE;
        color: white;
        /* padding: 20px; */
        padding-left: 10%;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
        font-size: 1.6rem;
        font-weight: 700;
        z-index: -1;

    }

    .contact-info h1,
    h2 {
        font-weight: 1000;
    }

    .contact-info h1,
    .contact-info p {
        margin: 0px 0;
    }

    .contact-info hr {
        border-width: 1.5px;
        border-style: solid;
        border-color: white;
        z-index: 1;
        margin-right: 50px;
    }

    .contact-form {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contact-form h3 {
        margin-bottom: 20px;
    }

    .form-label {
        font-size: 1.4rem;
        font-weight: 900;
        color: #444444;
    }

    .form-control {
        color: #AAAAAA;
        border: 0;
        padding-left: 0px;
    }

    hr {
        margin-top: 4px;
    }
    </style>
    <script>
    function to_email() {

        var name = document.getElementById('name').value;
        var phone = document.getElementById('phone').value;
        var mail = document.getElementById('email').value;
        var q_option = document.getElementById('inquiry').value;
        var q_content = document.getElementById('message').value;

        var forms = new FormData();
        forms.append("name", name);
        forms.append("phone", phone);
        forms.append("mail", mail);
        forms.append("q_option", q_option);
        forms.append("q_content", q_content);

        $.ajax({
            type: 'POST',
            url: "../mailer.php",
            processData: false,
            contentType: false,
            data: forms,
            dataType: 'json',
            error: function(error) {
                alert("Error: " + error.respeText);
            },
            success: function(data) {
                alert("문의가 성공적으로 전송되었습니다.")
            }
        });
    }

    function post() {
        var name = document.getElementById('name').value;
        var phone = document.getElementById('phone').value;
        var mail = document.getElementById('email').value;
        var q_option = document.getElementById('inquiry').value;
        var q_content = document.getElementById('message').value;

        // 필수 입력 필드 확인
        if (!name || !phone || !email || !inquiry || !message) {
            alert("모든 필수 입력 필드를 채워주세요.");
            return false;
        }

        var checkname = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;
        if (!checkname.test(name)) {
            alert("이름을 확인해주세요");
            return false;
        }

        var checkname2 = /[a-zA-Z]/;
        if (checkname2.test(name)) {
            alert("이름을 확인해주세요");
            return false;
        }

        var checkname3 = /^[0-9]+$/;
        if (checkname3.test(name)) {
            alert("이름을 확인해주세요");
            return false;
        }

        // 이메일 형식 확인
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(mail)) {
            alert("유효한 이메일 주소를 입력해주세요.");
            return false;
        }

        // 전화번호 형식 확인 (숫자만 포함)
        var phonePattern = /^[0-9]+$/;
        if (!phonePattern.test(phone)) {
            alert("유효한 전화번호를 입력해주세요. 숫자만 포함되어야 합니다.");
            return false;
        }

        if (phone.length !== 11) {
            alert("전화번호는 정확히 11자리여야 합니다.");
            return false;
        }

        if (q_content.length < 1) {
            alert("문의할 내용을 입력해주세요.");
            return false;
        }

        return to_email();
    }
    </script>

    <!-- 지도 -->
    <section class="contact-section" style="background-color: #EEF6FF;">
        <div class="container">
            <div class="row">
                <div class="col-md-5" data-animate-on-scroll>
                    <br><br><br>
                    <h2 class="head-text"><span class="head-t">찾아오시는 길<span></h2>
                    <br><br>
                    <table class="table-text">
                        <tbody>
                            <tr>
                                <td style="width:100px;"></td>
                                <td></td>
                            </tr>
                            <tr class="step">
                                <td class="letter" id="context">주소</td>
                                <td class="ty-text1"></td>
                            </tr>
                            <tr class="step">
                                <td class="letter1" id="context">연락처</td>
                                <td class="ty-text2"></td>
                            </tr>
                            <tr class="step">
                                <td class="letter2" id="context">이메일</td>
                                <td class="ty-text3"></td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br>
                    <div class="map-buttons" style="border:0;">
                        <a href="https://map.naver.com/p/search/%EB%8D%94%EB%B0%94%EC%9D%B4%EB%9F%B4/place/1001266028?c=15.00,0,0,0,dh&placePath=%3Fentry%253Dbmp"
                            class="map-button naver-map" style="border:0; padding:10px 20px 10px 15px;">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcBAMAAACAI8KnAAAAMFBMVEUeyAAAxQAAxADs+ev////6//m467Pi9uHD7r6x6KuC3XgmygrU89CQ4Iin5qHJ8cMfkHdFAAAAYUlEQVR4AWOgKRBSUgIRihAeo4mLKwNjiouzAIRb4uLSxDjFxR3B9RJE4bpsROUeQuX6PkHhunxB4voD+UhcvysoXE8dVK40KldwCQpXQALBNXFxE2AIgXoB6jclIEFLAAD2tiUhfIzieAAAAABJRU5ErkJggg=="
                                alt="N" width="17%">
                            네이버맵
                        </a>
                        <a href="https://place.map.kakao.com/54121416" class="map-button kakao-map">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAjVBMVEX41xH53An53Qb53An64QD74QD94gD+4wD53Qb74gD03wi8yD+JtHPs2w9sqJENgvIAfP+FsncCff0Dfvvn2hMxkM0Ae/8Zh+aWuWX84gDZ0yIbiONPna/64gTo2hI0kcogit+swlCNtXADfvwJgPbs3A9Wn6gAff/c1SA1kskKgfXx3QtFmLmnwFX44AMUdJQyAAAACXRSTlNV3P/b//////6TBI3uAAAAj0lEQVR4AUzIgQaFQBCF4TNnpi2RC0GAAKLe/5Vi0SVQtHeaLvqsneMnhC8CVYoINa4PYQWgesTkAYj9CXAQzqeqZzgh5SMOxX3LRaBPCZVDSj1AIJvBnH85Qjm121S3Ts8SAVkV8TKeUHYO6zpwL3A0V4/TNNbmSNyulmwvhMZuaZ5TjAZqYVksKH5D9z4AMcMd9RMXq3kAAAAASUVORK5CYII="
                                alt="Kakao">
                            카카오맵
                        </a>
                    </div>

                </div>
                <div class="col-md-7 text-end">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12663.62988392474!2d126.99022513498207!3d37.48650982715696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca1068b12f723%3A0x69eaaba9f09bd8d6!2zU2VvdWwsIFNlb2NobyBEaXN0cmljdCwg7ISc7LSIM-uPmQ!5e0!3m2!1sen!2skr!4v1721607817067!5m2!1sen!2skr" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                    <img src="../img/map.png" width="90%" height="400" frameborder="0" style="border:0;">
                </div>
            </div>
        </div>
    </section>

    <style>
    .head-text {
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

    .head-t {
        display: inline-block;
        opacity: 0;
    }

    .head-t.visible {
        animation: mt 1s cubic-bezier(0.77, 0, 0.175, 1) forwards;
        opacity: 1;
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
        animation: reveal 2.5s cubic-bezier(0.55, 0, 0.175, 1) forwards;
        opacity: 1;
    }

    .table-text {
        font-size: 1.2rem;
        color: #666666;
    }

    #context {
        padding: 5px 0;
        font-weight: 800;
        color: #444444;
    }

    .map-buttons {
        display: flex;
        border: 1px solid #000;
        width: fit-content;
        border-radius: 5px;
        overflow: hidden;
    }

    .map-button {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        border-right: 1px solid #000;
    }

    .map-button:last-child {
        border-right: none;
    }

    .naver-map {
        background-color: #52C1EE;
        color: #fff;
    }

    .naver-map:hover img {
        transform: scale(1.7);
        /* 마우스를 올렸을 때 카드 크기를 1.1배로 확대 */
    }

    .kakao-map {
        background-color: #fff;
        color: #000;
    }

    .kakao-map:hover img {
        transform: scale(1.7);
    }

    .map-button img {
        margin-right: 10px;
    }
    </style>

    <script>
    $(document).ready(function() {
        const input_t1 = "서울시 서초구 서초대로40길 97 동초빌딩";
        const in_html1 = document.querySelector(".ty-text1");
        const input_t2 = "(대표번호)02-515-7002";
        const in_html2 = document.querySelector(".ty-text2");
        const input_t3 = "account1@the-viral.co.kr";
        const in_html3 = document.querySelector(".ty-text3");

        let ii = 0;
        let iii = 0;
        let iiii = 0;

        function typingping() {
            if (ii < input_t1.length) {
                let txt1 = input_t1.charAt(ii);
                in_html1.innerHTML += txt1;
                ii++;
            }
        }

        function typingping2() {
            if (iii < input_t2.length) {
                let txt2 = input_t2.charAt(iii);
                in_html2.innerHTML += txt2;
                iii++;
            }
        }

        function typingping3() {
            if (iiii < input_t3.length) {
                let txt3 = input_t3.charAt(iiii);
                in_html3.innerHTML += txt3;
                iiii++;
            }
        }

        function checkVisibility() {
            const triggerBottom = $(window).height() * 0.8;

            $('[data-animate-on-scroll]').each(function() {
                const elementTop = $(this).offset().top;
                const windowTop = $(window).scrollTop();

                if (elementTop < windowTop + triggerBottom) {
                    $(this).find('.head-t').addClass('visible');
                    setInterval(typingping, 100);
                    setTimeout(() => setInterval(typingping2, 100), 500);
                    setTimeout(() => setInterval(typingping3, 100), 1000);
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

    <!-- footer -->
    <?php include "../footer.php" ?>
</body>

</html>