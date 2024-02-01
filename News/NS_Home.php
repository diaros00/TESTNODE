<?php 
session_start();
$part = '../'; 
$News = 'active';
$NS_Home = 'active';
$NewsSW = 'here show menu-here-bg';
$textNews = 'text-primary';
$textNS_Home = 'text-primary';

?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>TS ACADEMY | THAISUMMIT GROUP</title>
    <?php include $part."Template/TP_Css.php" ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
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
            <?php include $part.'Template/TP_Header.php'; ?>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <?php include 'NS_Header.php'; ?>
                    <!--begin::HOT NEWS-->
                    <?php include 'NS_Hotnews.php'; ?>
                    <!--end::HOT NEWS-->

                    <!--begin::TOP NEWS-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">

                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!-- Begin::Search News -->
                            <div class="d-flex flex-row-auto flex-end">
                                <div class="d-flex align-items-center">
                                    <!--begin::Search-->
                                    <div id="kt_docs_search"
                                        class="d-flex align-items-center w-lg-500px me-2 me-lg-3 mw-500px"
                                        data-kt-search-keypress="true" data-kt-search-min-length="2"
                                        data-kt-search-enter="enter" data-kt-search-layout="menu"
                                        data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                                        data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end"
                                        data-kt-search="true">
                                        <div class="position-relative">
                                            <i
                                                class="ki-duotone ki-magnifier fs-2 text-dark position-absolute top-50 translate-middle ms-8 d-flex flex-column-auto flex-start">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="text"
                                                class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-500 mw-500px w-lg-500px h-50px"
                                                name="search" value="" placeholder="Search for news" />
                                        </div>
                                        <!--end::Tablet and mobile search toggle-->

                                        <!--begin::Form-->

                                        <!--end::Form-->
                                    </div>
                                    <!--end::Search-->



                                    <!--begin::Preview link-->
                                    <a class="btn btn-dark btn-flex h-50px border-0 fw-bold px-4 px-lg-6"
                                        href="News/NS_Search.php">
                                        <i class="ki-duotone ki-magnifier fs-2"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </a>
                                    <!--end::Preview link-->

                                    <!--begin::Theme mode-->
                                    <div class="d-flex align-items-center">

                                        <!--begin::Menu toggle-->
                                        <a href="#" class="btn btn-icon btn-icon-muted btn-active-icon-primar ms-1"
                                            data-kt-menu-trigger="{default:'click', lg: 'hover'}"
                                            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-setting-3 theme-light-show fs-4x"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span></i>
                                            <i class="ki-duotone ki-setting-3 theme-dark-show text-white fs-1 fs-4x">
                                                <span class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span><span class="path4"></span><span
                                                    class="path5"></span><span class="path6"></span><span
                                                    class="path7"></span><span class="path8"></span><span
                                                    class="path9"></span><span class="path10"></span>
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
                                <?php include "NS_TopNews.php" ?>
                                <!--end::TopNews-->
                            </div>
                            <!--end::Home card-->
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::TOP NEWS-->
                    <div class="mb-15"></div>
                    <!--begin::DETAIL NEWS-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">

                        <!--begin::List News-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
                            <!--begin::Home card-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body p-lg-10">
                                    <!--begin::Latest posts-->
                                    <div class="mb-15">
                                        <!--begin::Title-->
                                        <h3 class="text-gray-900 mb-5 fs-2x">CATEGORY / หมวด</h3>
                                        <!--end::Title-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-9"></div>
                                        <!--end::Separator-->

                                    </div>
                                    <div class="tns tns-default" style="direction: ltr">
                                        <!--begin::Slider-->
                                        <div data-tns="true" data-tns-loop="false" data-tns-swipe-angle="false"
                                            data-tns-speed="2000" data-tns-autoplay="false"
                                            data-tns-autoplay-timeout="18000" data-tns-controls="true"
                                            data-tns-nav="false" data-tns-items="3" data-tns-center="false"
                                            data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev_year"
                                            data-tns-next-button="#kt_team_slider_next_year">

                                            <!--begin::Item-->
                                            <div class="px-1 py-1">
                                                <a href="News/NS_Category.php"
                                                    class="alert alert-dismissible d-flex flex-column flex-sm-row text-hover-primary text-gray-900 lh-base"
                                                    style="background-image: linear-gradient(to right top, #FF3CAC, #784BA0,#2B86C5);">
                                                    <div class="card-body d-flex justify-content-center flex-wrap">

                                                        <h1 class="text-light-light hover-scale">หลักสูตร
                                                        </h1>
                                                    </div>

                                                </a>

                                            </div>
                                            <div class="px-3 py-1">
                                                <a href="News/NS_Category.php"
                                                    class="alert alert-dismissible d-flex flex-column flex-sm-row"
                                                    style="background-image: linear-gradient(to right top, #00bf8f, #001510);">
                                                    <div class="card-body d-flex justify-content-center flex-wrap">

                                                        <h1 class="text-light-light hover-scale">นโยบาย
                                                        </h1>
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="px-3 py-1">
                                                <a href="News/NS_Category.php"
                                                    class="alert alert-dismissible d-flex flex-column flex-sm-row"
                                                    style="background-image: linear-gradient(to right top, #833ab4, #fd1d1d,#fcb045);">
                                                    <div class="card-body d-flex justify-content-center flex-wrap">

                                                        <h1 class="text-light-light hover-scale">ประชาสัมพันธ์
                                                        </h1>
                                                    </div>

                                                </a>
                                            </div>


                                            <!--end::Item-->
                                        </div>
                                        <!--end::Slider-->

                                        <!--begin::Slider button-->
                                        <button class="btn btn-icon btn-active-color-primary"
                                            id="kt_team_slider_prev_year">
                                            <span class="svg-icon fs-3x">
                                                <i class="ki-duotone ki-left fs-2x"></i>
                                            </span>
                                        </button>
                                        <!--end::Slider button-->

                                        <!--begin::Slider button-->
                                        <button class="btn btn-icon btn-active-color-primary"
                                            id="kt_team_slider_next_year">
                                            <span class="svg-icon fs-3x">
                                                <i class="ki-duotone ki-right fs-2x"></i>
                                            </span>
                                        </button>
                                        <!--end::Slider button-->
                                    </div>
                                    <!--end::Latest posts-->
                                </div>
                                <!-- COURSE / หลักสูตร -->
                                <div class="card-body p-lg-10">
                                    <!--begin::Latest posts-->
                                    <div class="mb-15">
                                        <!--begin::Title-->
                                        <a href="News/NS_Category.php"
                                            class="text-gray-900 mb-5 fs-2x text-hover-primary text-gray-900 lh-base">COURSE
                                            / หลักสูตร ></a>
                                        <!--end::Title-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-9"></div>
                                        <!--end::Separator-->

                                    </div>
                                    <div class="tns-slider-course mb-6">
                                        <!--begin::Slider-->
                                            <!--begin::Item COURSE CATEGORY -->
                                            <?php for ($course = 1; $course <= 20; $course++) { ?>
                                            <div class="px-1 py-1">
                                                <div class="card-xl-stretch ms-md-6">
                                                    <!--begin::Overlay-->
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                        style="background-image:url('assets/media/stock/600x400/img-<?php echo $course ?>.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Body-->
                                                    <div class="mt-5">
                                                        <!--begin::Title-->
                                                        <a href="News/NS_Post.php?category=course"
                                                            class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Angular
                                                            Admin - How To Started the Dashboard Tutorial</a>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-semibold fs-5 text-gray-600 my-3">We’ve been
                                                            focused on making a the from great amnd amazing</div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="fs-6 fw-bold">
                                                                <!--begin::Date-->
                                                                <span class="text-gray-500"><i
                                                                        class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                    2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                                <!--end::Date-->
                                                            </div>
                                                            <!--end::Content-->
                                                            <!--begin::Label-->
                                                            <span
                                                                class="badge badge-light-info fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <!--end::Item-->
                                        <!--end::Slider-->
                                    </div>
                                    <!--end::Latest posts-->
                                </div>

                                <!-- VISION / นโยบาย -->
                                <div class="card-body p-lg-10">
                                    <!--begin::Latest posts-->
                                    <div class="mb-15">
                                        <!--begin::Title-->
                                        <a href="News/NS_Post.php"
                                            class="text-gray-900 mb-5 fs-2x text-hover-primary text-gray-900 lh-base">VISION
                                            / นโยบาย ></a>
                                        <!--end::Title-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-9"></div>
                                        <!--end::Separator-->

                                    </div>
                                    <div class="tns-slider-vision mb-6" style="direction: ltr">
                                        <!--begin::Slider-->

                                            <!--begin::Item COURSE CATEGORY -->
                                            <?php for ($vision = 21; $vision <= 40; $vision++) { ?>
                                            <div class="px-1 py-1">
                                                <div class="card-xl-stretch ms-md-6">
                                                    <!--begin::Overlay-->
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                        style="background-image:url('assets/media/stock/600x400/img-<?php echo $vision ?>.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Body-->
                                                    <div class="mt-5">
                                                        <!--begin::Title-->
                                                        <a href=".php"
                                                            class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Angular
                                                            Admin - How To Started the Dashboard Tutorial</a>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-semibold fs-5 text-gray-600 my-3">We’ve been
                                                            focused on making a the from great amnd amazing</div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="fs-6 fw-bold">
                                                                <!--begin::Date-->
                                                                <span class="text-gray-500"><i
                                                                        class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                    2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                                <!--end::Date-->
                                                            </div>
                                                            <!--end::Content-->
                                                            <!--begin::Label-->
                                                            <span
                                                                class="badge badge-light-success fw-bold my-2">VISION</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                            </div>
                                            <?php } ?>

                                            <!--end::Item-->

                                        <!--end::Slider-->
                                    </div>
                                    <!--end::Latest posts-->
                                </div>

                                <!-- public relations / ประชาสัมพันธ์ -->
                                <div class="card-body p-lg-10">
                                    <!--begin::Latest posts-->
                                    <div class="mb-15">
                                        <!--begin::Title-->
                                        <a href="News/NS_Post.php"
                                            class="text-gray-900 mb-5 fs-2x text-hover-primary text-gray-900 lh-base">PUBLIC
                                            RELATIONS / ประชาสัมพันธ์ ></a>
                                        <!--end::Title-->
                                        <!--begin::Separator-->
                                        <div class="separator separator-dashed mb-9"></div>
                                        <!--end::Separator-->

                                    </div>
                                    <div class="tns-slider-public-relations mb-6" style="direction: ltr">
                                        <!--begin::Slider-->


                                            <!--begin::Item COURSE CATEGORY -->
                                            <?php for ($public = 21; $public <= 40; $public++) { ?>
                                            <div class="px-1 py-1">
                                                <div class="card-xl-stretch ms-md-6">
                                                    <!--begin::Overlay-->
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                                        style="background-image:url('assets/media/stock/600x400/img-<?php echo $public ?>.jpg')">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Body-->
                                                    <div class="mt-5">
                                                        <!--begin::Title-->
                                                        <a href="News/NS_Post.php.php"
                                                            class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Angular
                                                            Admin - How To Started the Dashboard Tutorial</a>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <div class="fw-semibold fs-5 text-gray-600 my-3">We’ve been
                                                            focused on making a the from great amnd amazing</div>
                                                        <!--end::Text-->
                                                        <!--begin::Content-->
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="fs-6 fw-bold">
                                                                <!--begin::Date-->
                                                                <span class="text-gray-500"><i
                                                                        class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                    2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                                <!--end::Date-->
                                                            </div>
                                                            <!--end::Content-->
                                                            <!--begin::Label-->
                                                            <span class="badge badge-light-danger fw-bold my-2">PUBLIC
                                                                RELATIONS</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                            </div>
                                            <?php } ?>

                                            <!--end::Item-->
                                        
                                        <!--end::Slider-->

                                        <!--begin::Slider button-->
                                        <button class="btn btn-icon btn-active-color-primary"
                                            id="kt_team_slider_prev_public">
                                            <span class="svg-icon fs-3x">
                                                <i class="ki-duotone ki-left fs-2x"></i>
                                            </span>
                                        </button>
                                        <!--end::Slider button-->

                                        <!--begin::Slider button-->
                                        <button class="btn btn-icon btn-active-color-primary"
                                            id="kt_team_slider_next_public">
                                            <span class="svg-icon fs-3x">
                                                <i class="ki-duotone ki-right fs-2x"></i>
                                            </span>
                                        </button>
                                        <!--end::Slider button-->
                                    </div>
                                    <!--end::Latest posts-->
                                </div>
                                <!--end::Body-->

                            </div>
                            <!--end::Home card-->
                        </div>
                        <!--end::List News-->
                    </div>
                    <!--end::DETAIL NEWS-->
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <?php include $part.'Template/TP_Footer.php'; ?>
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
    <?php include $part."Template/TP_Js.php" ?>
    <script src="News/NS-Home.js"></script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>