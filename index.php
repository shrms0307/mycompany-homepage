<!DOCTYPE html>
<html lang="ko">

<head>
    <title>더바이럴</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="더바이럴">
    <meta name="site_name" content="더바이럴">
    <meta name="description" content="바이럴 마케팅 전문 기업으로 효과적인 마케팅 솔루션을 제공합니다. 디지털 마케팅, SNS 마케팅, 콘텐츠 제작 등 다양한 서비스를 제공합니다">

    <!-- Open Graph 태그 -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="더바이럴">
    <meta property="og:site_name" content="더바이럴">
    <meta property="og:description"
        content="바이럴 마케팅 전문 기업으로 효과적인 마케팅 솔루션을 제공합니다. 디지털 마케팅, SNS 마케팅, 콘텐츠 제작 등 다양한 서비스를 제공합니다">
    <meta property="og:image" content="https://the-viral.co.kr/img/viral-logo.png">
    <meta property="og:url" content="https://the-viral.co.kr">

    <!-- 파비콘 -->
    <link href="../img/viral-logo.png" rel="icon" type="image/x-icon">

    <!-- 대표 URL 설정 -->
    <link rel="canonical" href="https://the-viral.co.kr" />
</head>

<body>
    <?php
    // navbar 포함
        include("pages/other/navbar.php");
        // 허용된 페이지 목록
        $allowed_pages = ['home', 'contact', 'work', 'new_media', 'marketing', 'run_Business', 'run_Experience', 'company', 'welfare', 'test'];

        if (isset($_GET['page']) && in_array($_GET['page'], $allowed_pages)) {
            // page 파라미터가 있고 허용된 페이지 목록에 있을 경우 해당 페이지를 포함
            $page = $_GET['page'];
            include("pages/$page.php");
        } else {
            // page 파라미터가 없거나 허용된 페이지 목록에 없을 경우 기본 home.php 포함
            include("pages/home.php");
        }
        // footer 포함
        include("pages/other/footer.php");
    ?>
</body>

</html>