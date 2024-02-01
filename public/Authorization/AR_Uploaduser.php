<?php
session_start();
$part = '../'; 
$ARSW = 'here show menu-here-bg';
$textAR = 'text-primary';
$AR_Uploaduser = 'active';
$textAR_Uploaduser = 'text-primary';

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
    <div class="d-flex flex-column  flex-root app-root" id="kt_app_root">
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
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-8">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center me-3">
                                    <!--begin::Title-->
                                    <h1 class="page-heading d-flex text fw-bold fs-2x flex-column justify-content-center my-0">Upload Account</h1>
                                    <!--end::Title-->
                                    <span class="font-Noto text-gray-600 fs-5">อัพโหลดรายชื่อ</span>
                                </div>
                                <!--end::Page title-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <!--begin::Card-->
                                <div class="card">

                                    <!--begin::Card header-->
                                    <div class="card-header mt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title d-flex flex-column flex-end">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1 me-5 font-Noto">
                                                Upload รายชื่อพนักงาน
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Table-->
                                        <div class="mb-5"></div>
                                        <!--begin::Alert-->
                                        <div class="row">
                                            <div class="col-sm-12 col-mb-3 col-lg-2">
                                                <p class="fs-5">Example text file</p>
                                            </div>
                                            <div class="col-sm-12 col-mb-9 col-lg-10">
                                                <div class="alert alert-primary d-flex align-items-center p-5 mb-5">
                                                    <!--begin::Icon-->
                                                    <i class="fa-solid fa-file-excel fs-2hx text-success me-4"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column">
                                                        <!--begin::Title-->
                                                        <h4 class="mb-1 text-dark">Template upload file</h4>
                                                        <!--end::Title-->

                                                        <!--begin::Content-->
                                                        <span><i class="fa-solid fa-circle-down me-2 text-primary"></i>Download File.csv</span>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator my-10"></div>
                                        <div class="row">
                                            <div class="col-sm-12 col-mb-3 col-lg-2">
                                                <p class="fs-5">File</p>
                                            </div>
                                            <div class="col-sm-12 col-mb-9 col-lg-10 p-10">
                                                <div class="border-success border-dotted text-center">
                                                    <div class="mb-6"></div>
                                                    <i class="fa-solid fa-file-arrow-up fs-7x text-success"></i><br>
                                                    <p class="fs-2x text-success">Upload users .csv</p>
                                                    <div class="mb-3"></div>
                                                    <a href="#" class="btn btn-primary">Choose File</a>
                                                    <div class="mb-6"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="row">
                                            <div class="col-sm-12 col-mb-3 col-lg-2">
                                                <p class="fs-5"></p>
                                            </div>
                                            <div class="col-sm-12 col-mb-9 col-lg-10 p-10 text-center">
                                                <button class="btn btn-primary w-200px w-lg-500px" onclick="checkStatusUpload()">Upload users</button>
                                            </div>
                                        </div>
                                        <!--end::Alert-->
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
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
    <!-- begin::modal -->
    <!-- begin::request -->
    <?php include "AR_ModalDefRoleAdd.php" ?>
    <?php include "AR_ModalDefRoleEdit.php" ?>
    <!-- end::request -->
    <!-- end::modal -->
    <!--begin::Javascript-->

    <?php include $part . "Template/TP_Js.php" ?>
    <script src="Authorization/AR_DefRole.js"></script>
    <script>
        $('#checkAll').click(function() {
            $('input:checkbox').prop('checked', this.checked);
        });

        function checkStatusUpload() {
            var link = 'Authorization/AR_UploaduserStatus.php';
            createPopupWin(link, 'Message', 500, 650)
        }

        function createPopupWin(pageURL, pageTitle,
            popupWinWidth, popupWinHeight) {
            var left = (screen.width - popupWinWidth) / 2;
            var top = (screen.height - popupWinHeight) / 4;

            var myWindow = window.open(pageURL, pageTitle,
                'resizable=yes, width=' + popupWinWidth +
                ', height=' + popupWinHeight + ', top=' +
                top + ', left=' + left);
        }
    </script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>