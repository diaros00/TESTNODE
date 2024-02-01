<?php 
session_start();
$part = '../'; 
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
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <div class="mb-15"></div>
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <div class="card-flush">
                                    <div class="row">
                                        <div class="col-lg-7 col-sm-12">
                                            <h1 class="text-gray-600">Department</h1>
                                            <div class="mb-12"></div>
                                            <p class="text-primary font-weight-light fs-1">Dashboard for department <br>
                                                <o class="text-gray-900 font-weight-light fs-5">ภาพรวมทั้งหมดสำหรับแผนก</o>
                                            </p>
                                            <p class="text-info font-weight-light fs-3">H610000 - PRODUCTION 1 DEPT.</p>
                                            <div class="separator border-1 border-dark my-10"></div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-3"><span class="badge badge-light-primary"><i class="fa-solid fa-users text-primary fs-3x"></i></span></div>
                                                        <div class="col-lg-9 font-Noto">
                                                            <o class="fs-3">Department Result</o><br>
                                                            <o class="fs-3x text-primary">420 คน</o><br>
                                                            <span class="badge badge-primary fs-7">100%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-3"><span class="badge badge-light-success"><i class="fa-solid fa-chart-line text-success fs-3x"></i></span></div>
                                                        <div class="col-lg-9 font-Noto">
                                                            <o class="fs-3">KPI Result</o><br>
                                                            <o class="fs-3x text-success">158 คน</o><br>
                                                            <span class="badge badge-success fs-7">45%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-3"><span class="badge badge-light-danger"><i class="fa-solid fa-user-clock text-danger fs-3x"></i></span></div>
                                                        <div class="col-lg-9 font-Noto">
                                                            <o class="fs-3">Remain Result</o><br>
                                                            <o class="fs-3x text-danger">262 คน</o><br>
                                                            <span class="badge badge-danger fs-7">65%</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-12 card-header justify-content-end align-items-end text-end">
                                            <img src="assets/media/icons/canvas/IC-DS-Department.png" class="h-400px h-lg-400px" alt="" />
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
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
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/pages/social/feeds.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="Dashboard/DS_Profile.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>