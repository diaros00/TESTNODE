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

        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-8">
                </div>
                <!--end::Toolbar-->
                <!--begin::Content-->
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-xxl">
                        <!--begin::Card-->
                        <div>
                            <!--begin::Card header-->
                            <div class="card-header mt-6 text-center">
                                <h1 class="fw-bold fs-2x ">Notification for Upload account<br>
                                    <span class="font-Noto text-gray-600 fs-5">การแจ้งเตือนสำหรับ Upload รายชื่อพนักงาน</span>
                                </h1>
                                <!--end::Title-->

                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <div class="mb-5"></div>
                                <!--begin::Alert-->
                                <!--begin::Alert Fail-->
                                <div class="alert alert-warning d-flex align-items-center p-5">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-information-5 fs-2hx text-warning me-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Title-->
                                        <h4 class="mb-1 text-dark">Warning</h4>
                                        <!--end::Title-->

                                        <!--begin::Content-->
                                        <span class="font-Noto text-warning">012613 : คีตกาล บุญชัย - มีในระบบอยู่แล้ว</span>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Alert Fail-->
                                <!--begin::Alert Fail-->
                                <div class="alert alert-danger d-flex align-items-center p-5">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-cross-circle fs-2hx text-danger me-4"><span class="path1"></span><span class="path2"></span></i>
                                    <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Title-->
                                        <h4 class="mb-1 text-dark">Fail</h4>
                                        <!--end::Title-->

                                        <!--begin::Content-->
                                        <span class="font-Noto">012612 : จรินดา ธงชัย - ไม่พบข้อมูลในระบบ</span>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Alert Fail-->
                                <!--begin::Alert Pass-->
                                <div class="alert alert-primary d-flex align-items-center p-5">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-check-circle fs-2hx text-success me-4"><span class="path1"></span><span class="path2"></span></i>
                                    <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Title-->
                                        <h4 class="mb-1 text-dark">Success</h4>
                                        <!--end::Title-->

                                        <!--begin::Content-->
                                        <span class="font-Noto">012614 : ณพสร ชุติพิมลกุล - อัพโหลดรายชื่อสำเร็จ</span>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Alert Pass-->

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
    </script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>