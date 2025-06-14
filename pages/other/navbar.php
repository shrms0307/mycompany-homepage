<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 부트스트랩 CSS 로드 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
    @import url(https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css);

    body {
        font-family: 'NanumSquare', sans-serif;
        color: #444444;
        -ms-overflow-style: none;
    }

    ::-webkit-scrollbar {
        display: none;
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

    .head-text {
        color: #444444;
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

    .navbar-brand {
        margin: 0 0 0 100px;
    }

    .navbar-brand_m {
        margin-left: 120px;
    }
    </style>
</head>
<?php
// 현재 페이지 URL에서 page 파라미터 가져오기
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
    <a class="navbar-brand change_n" href="/">
        <img src="../img/logo.jpg" alt="" width="135" height="35" class="d-inline-block align-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" style="margin:0 130px 0 0;" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-4">
                <a class="nav-link <?php echo ($current_page == 'home') ? 'active fw-bold' : ''; ?>"
                    style="color: <?php echo ($current_page == 'home') ? '#52C1EE' : ''; ?>;" href="/"
                    onclick="event.preventDefault(); location.href='/';">Home</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link <?php echo ($current_page == 'work') ? 'active fw-bold' : ''; ?>"
                    style="color: <?php echo ($current_page == 'work') ? '#52C1EE' : ''; ?>;" href="../?page=work"
                    onclick="event.preventDefault(); location.href='../?page=work';">Work</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link <?php echo ($current_page == 'company') ? 'active fw-bold' : ''; ?>"
                    style="color: <?php echo ($current_page == 'company') ? '#52C1EE' : ''; ?>;" href="../?page=company"
                    onclick="event.preventDefault(); location.href='../?page=company';">Company</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link <?php echo ($current_page == 'welfare') ? 'active fw-bold' : ''; ?>"
                    style="color: <?php echo ($current_page == 'welfare') ? '#52C1EE' : ''; ?>;" href="../?page=welfare"
                    onclick="event.preventDefault(); location.href='../?page=welfare';">Welfare</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link <?php echo ($current_page == 'contact') ? 'active fw-bold' : ''; ?>"
                    style="color: <?php echo ($current_page == 'contact') ? '#52C1EE' : ''; ?>;" href="../?page=contact"
                    onclick="event.preventDefault(); location.href='../?page=contact';">Contact</a>
            </li>
        </ul>
    </div>

</nav>