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
            <?php

            if (isset($_SESSION)) {
                $category = (isset($_GET['category'])) ? $_GET['category'] : '';
                $status = (isset($_GET['status'])) ? $_GET['status'] : '';
                switch ($category) {
                    case "Manager":
                        include 'CO_FlowManager.php';
                        break;
                    case "TSAcademy":
                        include 'CO_FlowTSAcademy.php';
                        break;
                    case "Approve":
                        include 'CO_FlowApprove.php';
                        break;
                    case "Reject":
                        if($status == 'Manager'){
                            include 'CO_FlowRejectManager.php';
                        }else if($status == 'TSAcademy'){
                            include 'CO_FlowRejectTSAcademy.php';
                        }
                        break;
                    default:
                        include 'CO_FlowBegin.php';
                }
            } else {
                include 'CO_DetailInfo.php';
            }

            ?>
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
    <script src="Course/CO_Flow.js"></script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>