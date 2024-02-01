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
                    <!-- Begin:: Header News -->
                    <?php include 'NS_Header.php'; ?>
                    <!-- End:: Header News -->
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
                                <!--begin::Body-->
                                <?php include "NS_CategoryTopNews.php" ?>
                                <!--end::Body-->
                            </div>
                            <!--end::Home card-->
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::TOP NEWS-->
                    <div class="mb-15"></div>
                    <!--begin::DETAIL NEWS-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">

                        <!--begin::Home page-->
                        <?php include "NS_CategoryDetail.php" ?>
                        <!--end::Content Home page-->
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
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>