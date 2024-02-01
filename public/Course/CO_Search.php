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
            <?php include $part . 'Template/TP_Header.php'; ?>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <?php include 'CO_Header.php'; ?>

                    <!--begin::TOP NEWS-->
                    <div id="kt_app_content" class="app-content flex-column-fluid">

                        <!--begin::Content container-->
                        <div id="kt_app_content_container" class="app-container container-xxl">
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
                                            <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-500 mw-500px w-lg-500px h-50px" name="search" value="" placeholder="Search for news" />
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
                            <!-- begin::filter news -->
                            <div class="alert alert-dismissible border d-flex flex-column flex-sm-row p-5 mb-10" style="background-color: #D6DBDF  ;">
                                <!--begin::Icon-->
                                <h4 class="fw-semibold me-4 mb-5 mb-sm-0 fs-3x text-dark">Filter Course</h4>
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-column pe-0 pe-sm-5 mb-1">
                                            <!--begin::Content-->
                                            <select class="form-select w-lg-400px" aria-label="Select example">
                                                <option>COMPETENCY</option>
                                                <option value="1">EC : Engineering Course</option>
                                                <option value="2">CC : Core Competency</option>
                                                <option value="3">FC : Functional Competency</option>
                                                <option value="4">MC : Managerial Competency</option>
                                            </select>
                                            <!--end::Content-->
                                        </div>
                                        <div class="d-flex flex-column pe-0 pe-sm-5 mb-1">
                                            <!--begin::Content-->
                                            <select class="form-select w-lg-400px" aria-label="Select example">
                                                <option>LEVEL</option>
                                                <option value="1">T7</option>
                                                <option value="2">T3</option>
                                                <option value="3">T2</option>
                                                <option value="4">T1</option>
                                            </select>
                                            <!--end::Content-->
                                        </div>
                                        <div class="d-flex flex-column pe-0 pe-sm-5 mb-1">
                                            <!--begin::Content-->
                                            <select class="form-select w-lg-400px" aria-label="Select example">
                                                <option>LOCAL</option>
                                                <option value="1">Thai Summit Laemchabang Autoparts Co., Ltd.</option>
                                                <option value="2">Thai Summit Banpho Co., Ltd.</option>
                                                <option value="3">Thai Summit Autoparts Co., Ltd.</option>
                                                <option value="4">Thai Summit Component Co., Ltd.</option>
                                            </select>
                                            <!--end::Content-->
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-column pe-0 pe-sm-5 mb-1">
                                            <!--begin::Content-->
                                            <select class="form-select w-lg-400px" aria-label="Select example">
                                                <option>TYPE</option>
                                                <option value="1">Functional Competency</option>
                                                <option value="2">Soft Skills</option>
                                                <option value="3">Managerial Competency</option>
                                                <option value="4">Functional Engineering</option>
                                            </select>
                                            <!--end::Content-->
                                        </div>
                                        <div class="d-flex flex-column pe-0 pe-sm-5 mb-1">
                                            <!--begin::Content-->
                                            <select class="form-select w-lg-400px" aria-label="Select example">
                                                <option>DEPARTMENT</option>
                                                <option value="1">IT (Programmer)</option>
                                                <option value="2">IT</option>
                                                <option value="3">Planning</option>
                                                <option value="4">Maintenance</option>
                                            </select>
                                            <!--end::Content-->
                                        </div>
                                    </div>

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!-- end::filter news -->
                            <!--begin::Home card-->
                            <div class="card">
                                <!--begin::Body-->
                                <div class="card-body p-lg-10">
                                    <div class="card-header border-0 pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-900 fs-1">ผลการค้นหา</span>
                                            <span class="text-muted mt-1 fw-semibold fs-7 fs-3">277 รายการ</span>
                                        </h3>
                                        <!--begin::Toolbar-->
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                <i class="ki-duotone ki-dots-square fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </button>
                                            <!--begin::Menu 2-->
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">VIEW
                                                        COURSE</div>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator mb-3 opacity-75"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 fs-5">
                                                    <a href="Course/CO_Search.php?view=list" class="menu-link px-3">
                                                        <i class="ki-duotone ki-element-5 me-2 fs-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                        List</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3 fs-5">
                                                    <a href="Course/CO_Search.php?view=card" class="menu-link px-3"><i class="ki-duotone ki-element-11 me-2 fs-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i> Card</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu 2-->
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>

                                    <?php
                                    $view = (isset($_GET['view'])) ? $_GET['view'] : '';
                                    if ($view == 'list') {
                                        include 'CO_SearchList.php';
                                    } elseif ($view == 'card') {
                                        include 'CO_SearchCard.php';
                                    } else {
                                        include 'CO_SearchList.php';
                                    }

                                    ?>
                                    <div class="mb-9"></div>
                                    <!-- ฟังชั่นหน้าถัดไป -->
                                    <ul class="pagination pagination-circle pagination-outline">
                                        <li class="page-item previous disabled m-1"><a href="#" class="page-link"><i class="previous"></i></a></li>
                                        <li class="page-item active m-1"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item m-1"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item m-1"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item m-1"><a href="#" class="page-link">4</a></li>
                                        <li class="page-item m-1"><a href="#" class="page-link">5</a></li>
                                        <li class="page-item m-1"><a href="#" class="page-link">6</a></li>
                                        <li class="page-item next m-1"><a href="#" class="page-link"><i class="next"></i></a></li>
                                    </ul>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Home card-->
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::TOP NEWS-->
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
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
    <!--end::App-->
    <!--begin::Javascript-->
    <?php include $part . "Template/TP_Js.php" ?>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>