<?php 
session_start();
$part = '../'; 
$Course = 'active';
$CourseSW = 'here show menu-here-bg';
$textCourse = 'text-primary';
$CO_Home = 'active';
$textCO_Home = 'text-primary';
?>

<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>TS ACADEMY | THAISUMMIT GROUP</title>
    <?php include $part . "Template/TP_Css.php" ?>
    <style>

    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" style="background-color: #FFF;">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <?php include $part . 'Template/TP_Header.php'; ?>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <div id="kt_app_content" class="app-content flex-column-fluid">
                        <!-- begin::Slider curriculum -->
                        <div id="carouselExampleCaptions" class="carousel slide animate__animated animate__zoomIn" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="pickgradient">
                                        <img src="assets/media/stock/1920x750/5.jpg" class="d-block w-100" alt="...">
                                    </div>

                                    <div class="carousel-caption d-none d-md-block">
                                        <!-- title name course -->
                                        <h1 class="fs-3x text-gray-100">Design Thinking & Story Telling
                                            <br>
                                            <!-- title name type course -->
                                            <o class="fs-4x text-gray-200">Soft Skills</o>
                                            <br>
                                            <!-- title name curriculum -->
                                            <o class="fs-2x text-gray-300">Managerial Competency</o>
                                        </h1>
                                        <a href="Course/CO_Detail.php" class="btn btn-light-info px-6" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="pickgradient">
                                        <img src="assets/media/stock/1920x750/6.jpg" class="w-100" alt="...">
                                    </div>

                                    <div class="carousel-caption d-none d-md-block">
                                        <!-- title name course -->
                                        <h1 class="fs-3x text-gray-100">Design Thinking & Story Telling
                                            <br>
                                            <!-- title name type course -->
                                            <o class="fs-4x text-gray-200">Soft Skills</o>
                                            <br>
                                            <!-- title name curriculum -->
                                            <o class="fs-2x text-gray-300">Managerial Competency</o>
                                        </h1>
                                        <a href="Course/CO_Detail.php" class="btn btn-light-info px-6" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="pickgradient">
                                        <img src="assets/media/stock/1920x750/7.jpg" class="w-100" alt="...">
                                    </div>

                                    <div class="carousel-caption d-none d-md-block">
                                        <!-- title name course -->
                                        <h1 class="fs-3x text-gray-100">Design Thinking & Story Telling
                                            <br>
                                            <!-- title name type course -->
                                            <o class="fs-4x text-gray-200">Soft Skills</o>
                                            <br>
                                            <!-- title name curriculum -->
                                            <o class="fs-2x text-gray-300">Managerial Competency</o>
                                        </h1>
                                        <a href="Course/CO_Detail.php" class="btn btn-light-info px-6" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev fs-5x" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden fs-5x">Previous</span>
                            </button>
                            <button class="carousel-control-next fs-5x" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden fs-5x">Next</span>
                            </button>
                        </div>
                        <!-- end::Slider curriculum -->
                        <div class="mb-15"></div>
                        <!--begin::Curriculum-->
                        <h1 class="fs-5x fw-bold mb-0 text-center">การเรียนรู้ที่ไม่มีวันสิ้นสุด</h1>
                        <div class="mb-1"></div>
                        <h2 class="fs-3x fw-bold mb-0 text-center">หลักสูตรของ TS ACADEMY <br>
                            <span class="ms-3 d-inline-flex position-relative">
                                <o class="fs-2x">COURSE TS ACADEMY</o>
                                <img class="w-100 position-absolute bottom-0 mb-n2" src="assets/media/misc/hero-home-title-underline.svg" alt="">
                            </span>
                        </h2>
                        <div class="mb-15"></div>
                        <!-- Begin::Marquee curriculum -->
                        <div class="boira-ourwork-img-cont wrapper">
                            <div class="marquee">
                                <!-- list course top -->
                                <div class="marquee__group">
                                    <?php for ($course = 1; $course <= 10; $course++) { ?>
                                        <div class="big">
                                            <div class="card  overlay overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="assets/media/stock/600x400/img-<?php echo $course ?>.jpg" class="card-rounded shadow mw-100">
                                                    </div>
                                                    <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                                        <a href="Course/CO_Detail.php" class="btn btn-bg-light font-Noto btn-sm btn-shadow" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <!-- list course top overlay -->
                                <div aria-hidden="true" class="marquee__group">
                                    <?php for ($course = 1; $course <= 10; $course++) { ?>
                                        <div class="big">
                                            <div class="card  overlay overflow-hidden">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="assets/media/stock/600x400/img-<?php echo $course ?>.jpg" class="card-rounded shadow mw-100">
                                                    </div>
                                                    <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                                        <a href="Course/CO_Detail.php" class="btn btn-bg-light font-Noto btn-sm btn-shadow" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="main-wrapper">
                                <div class="marquee marquee--reverse">
                                    <!-- list course under reverse -->
                                    <div class="marquee__group">
                                        <?php for ($course = 1; $course <= 10; $course++) { ?>
                                            <div class="big">
                                                <div class="card  overlay overflow-hidden">
                                                    <div class="card-body p-0">
                                                        <div class="overlay-wrapper">
                                                            <img src="assets/media/stock/600x400/img-<?php echo $course ?>.jpg" class="card-rounded shadow mw-100">
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                                            <a href="Course/CO_Detail.php" class="btn btn-bg-light font-Noto btn-sm btn-shadow" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>

                                    <div aria-hidden="true" class="marquee__group">
                                        <!-- list course under -->
                                        <?php for ($course = 1; $course <= 10; $course++) { ?>
                                            <div class="big">
                                                <div class="card  overlay overflow-hidden">
                                                    <div class="card-body p-0">
                                                        <div class="overlay-wrapper">
                                                            <img src="assets/media/stock/600x400/img-<?php echo $course ?>.jpg" class="card-rounded shadow mw-100">
                                                        </div>
                                                        <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                                            <a href="Course/CO_Detail.php" class="btn btn-bg-light font-Noto btn-sm btn-shadow" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- Begin::Marquee curriculum -->
                        <div class="mb-15"></div>
                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container">
                            <!-- Begin::Search News -->
                            <div class="d-flex flex-row-auto flex-end">
                                <div class="d-flex align-items-center">
                                    <!--begin::Search-->
                                    <div id="kt_docs_search" class="d-flex align-items-center w-lg-500px me-2 me-lg-3 mw-500px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end" data-kt-search="true">
                                        <div class="position-relative">
                                            <i class="ki-duotone ki-magnifier fs-2 text-dark position-absolute top-50 translate-middle ms-8 d-flex flex-column-auto flex-start">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-500 mw-500px w-lg-500px h-50px" name="search" value="" placeholder="Search for course" />
                                        </div>
                                        <!--end::Tablet and mobile search toggle-->

                                        <!--begin::Form-->

                                        <!--end::Form-->
                                    </div>
                                    <!--end::Search-->



                                    <!--begin::Preview link-->
                                    <a class="btn btn-dark btn-flex h-50px border-0 fw-bold px-4 px-lg-6" href="Course/CO_Search.php">
                                        <i class="ki-duotone ki-magnifier fs-2"><span class="path1"></span><span class="path2"></span></i>
                                    </a>
                                    <!--end::Preview link-->

                                    <!--begin::Theme mode-->
                                    <div class="d-flex align-items-center">

                                        <!--begin::Menu toggle-->
                                        <a href="#" class="btn btn-icon btn-icon-muted btn-active-icon-primar ms-1" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-setting-3 theme-light-show fs-4x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span></i>
                                            <i class="ki-duotone ki-setting-3 theme-dark-show text-white fs-1 fs-4x">
                                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span>
                                            </i>
                                        </a>
                                    </div>
                                    <!--end::Theme mode-->
                                </div>
                            </div>
                            <!-- End :: Search News -->
                            <div class="mb-3"></div>
                            <!--begin::Home card-->
                            <div class="card">
                                <!--begin::TopNews-->
                                <?php // include "NS_TopNews.php" 
                                ?>
                                <!--end::TopNews-->
                            </div>
                            <!--end::Home card-->
                        </div>
                        <!--end::Content container-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <div id="kt_app_content_container" class="app-container">
                                <div class="card-body">
                                    <!--begin:: this year's course-->
                                    <div class="card-pxpt-15 pb-15">
                                        <div class="this-year-course">
                                            <!--begin::title-->
                                            <h3 class="text-info fs-1 fw-semibold py-7">หลักสูตรของปีนี้
                                                <br />
                                                <o class="text-gray-700 fs-4">This year's course</o>
                                            </h3>
                                            <!--end::title-->
                                            <!--begin::course-->
                                            <div class="tns-slider-this-year mb-6">
                                                <?php for ($course = 1; $course <= 10; $course++) { ?>
                                                    <div class="px-3 py-1">
                                                        <div class="card  overlay overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="ribbon ribbon-top">
                                                                    <div class="ribbon-label bg-primary font-Noto">ลงทะเบียนได้</div>
                                                                    <div class="overlay-wrapper">
                                                                        <img src="assets/media/stock/600x400/img-<?php echo $course ?>.jpg" class="card-rounded shadow mw-100">
                                                                    </div>
                                                                </div>

                                                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                                                    <a href="Course/CO_Detail.php?category=Register" class="btn btn-bg-light font-Noto btn-sm btn-shadow" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>

                                                            <o class="fs-5">Mechanical System (basic)</o><br>
                                                            <o class="fs-7 text-gray-600">Functional Competency</o>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <!--end::course-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed border-dark"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <div class="managerial-curriculum">
                                            <!--begin::title-->
                                            <h3 class="text-info fs-1 fw-semibold py-7">Managerial Competency</h3>
                                            <!--end::title-->
                                            <!--begin::course-->
                                            <div class="tns-slider-managerial-curriculum mb-6">
                                                <?php for ($course = 11; $course <= 20; $course++) { ?>
                                                    <div class="px-3 py-1">
                                                        <div class="card overlay overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="ribbon ribbon-top">
                                                                    <div class="ribbon-label bg-danger font-Noto">เต็ม</div>
                                                                    <div class="overlay-wrapper">
                                                                        <img src="assets/media/stock/600x400/img-<?php echo $course ?>.jpg" class="card-rounded shadow mw-100">
                                                                    </div>
                                                                </div>
                                                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                                                    <a href="Course/CO_Detail.php?category=Full" class="btn btn-bg-light font-Noto btn-sm btn-shadow" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>

                                                            <o class="fs-5">Mechanical System (basic)</o><br>
                                                            <o class="fs-7 text-gray-600">Functional Competency</o>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <!--end::course-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed border-dark"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <div class="functional-curriculum">
                                            <!--begin::title-->
                                            <h3 class="text-info fs-1 fw-semibold py-7">Functional Competency</h3>
                                            <!--end::title-->
                                            <!--begin::course-->
                                            <div class="tns-slider-functional-curriculum mb-6">
                                                <?php for ($course = 21; $course <= 30; $course++) { ?>
                                                    <div class="px-3 py-1">
                                                        <div class="card  overlay overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="ribbon ribbon-top">
                                                                    <div class="ribbon-label bg-warning font-Noto">ลงทะเบียนด่วน</div>
                                                                    <div class="overlay-wrapper">
                                                                        <img src="assets/media/stock/600x400/img-<?php echo $course ?>.jpg" class="card-rounded shadow mw-100">
                                                                    </div>
                                                                </div>
                                                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                                                    <a href="Course/CO_Detail.php?category=Urgent" class="btn btn-bg-light font-Noto btn-sm btn-shadow" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>

                                                            <o class="fs-5">Mechanical System (basic)</o><br>
                                                            <o class="fs-7 text-gray-600">Functional Competency</o>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <!--end::course-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed border-dark"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <div class="core-curriculum">
                                            <!--begin::title-->
                                            <h3 class="text-info fs-1 fw-semibold py-7">Core Competency</h3>
                                            <!--end::title-->
                                            <!--begin::course-->
                                            <div class="tns-slider-core-curriculum mb-6">
                                                <?php for ($course = 31; $course <= 40; $course++) { ?>
                                                    <div class="px-3 py-1">
                                                        <div class="card  overlay overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="ribbon ribbon-top">
                                                                    <img src="assets/media/stock/600x400/img-<?php echo $course ?>.jpg" class="card-rounded shadow mw-100">
                                                                </div>
                                                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                                                    <a href="Course/CO_Detail.php" class="btn btn-bg-light font-Noto btn-sm btn-shadow" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>

                                                            <o class="fs-5">Mechanical System (basic)</o><br>
                                                            <o class="fs-7 text-gray-600">Functional Competency</o>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <!--end::course-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed border-dark"></div>
                                            <!--end::Separator-->
                                        </div>
                                        <div class="engineering-curriculum">
                                            <!--begin::title-->
                                            <h3 class="text-info fs-1 fw-semibold py-7">Engineering Course</h3>
                                            <!--end::title-->
                                            <!--begin::course-->
                                            <div class="tns-slider-engineering-curriculum mb-6">
                                                <?php for ($course = 41; $course <= 50; $course++) { ?>
                                                    <div class="px-3 py-1">
                                                        <div class="card  overlay overflow-hidden">
                                                            <div class="card-body p-0">
                                                                <div class="overlay-wrapper">
                                                                    <img src="assets/media/stock/600x400/img-<?php echo $course ?>.jpg" class="card-rounded shadow mw-100">
                                                                </div>
                                                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                                                    <a href="Course/CO_Detail.php" class="btn btn-bg-light font-Noto btn-sm btn-shadow" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>

                                                            <o class="fs-5">Mechanical System (basic)</o><br>
                                                            <o class="fs-7 text-gray-600">Functional Competency</o>
                                                        </p>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <!--end::course-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed border-dark"></div>
                                            <!--end::Separator-->
                                        </div>
                                    </div>
                                    <!--end::Heading-->

                                </div>
                            </div>
                        </div>
                        <!-- begin button view all of curriculum -->
                        <center><a href="Course/CO_Search.php" class="btn btn-outline btn-outline-dashed btn-outline-secondary btn-active-light-secondary text-center hover-scale btn-lg fs-1x">VIEW
                                ALL</a>
                        </center>
                        <!--end::button view all of curriculum-->
                        <!--end::Card Curriculum-->
                        <div class="mb-15"></div>
                    </div>
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <?php include $part . 'Template/TP_Footer.php'; ?>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <?php include $part . "Template/TP_Js.php" ?>
    <script src="Course/CO_Home.js"></script>
    <!--end::Javascript-->
</body>

</html>