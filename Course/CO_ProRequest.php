<?php 
session_start();
$part = '../'; 
$CourseSW = 'here show menu-here-bg';
$textCourse = 'text-primary';
$CO_Profile = 'active';
$textCO_Profile = 'text-primary';
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
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-8">
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <!--begin::Navbar-->
                                <?php include "CO_ProHeader.php" ?>
                                <!--end::Navbar-->
                                <!--begin::Nav items-->
                                <div id="kt_user_profile_nav" class="rounded bg-gray-200 d-flex flex-stack flex-wrap mb-9 p-2" data-kt-sticky="true" data-kt-sticky-name="sticky-profile-navs" data-kt-sticky-offset="{default: false, lg: '400px'}" data-kt-sticky-width="{target: '#kt_user_profile_panel'}" data-kt-sticky-left="auto" data-kt-sticky-top="70px" data-kt-sticky-animation="true" data-kt-sticky-zindex="95">
                                    <!--begin::Nav-->
                                    <ul class="nav flex-wrap border-transparent">
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Course/CO_Profile.php">My Enrolled Courses<br>
                                                <o class="fw-light text-gray-500 fs-5">ลงทะเบียนหลักสูตรของฉัน</o>
                                            </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-3 fs-lg-base nav-link px-3 px-lg-4 mx-lg-1" href="Course/CO_ProActive.php">Active Courses<br>
                                                <o class="fw-light text-gray-500 fs-5">กำลังอบรมหลักสูตร</o>
                                            </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Course/CO_ProCompleted.php">Completed Course<br>
                                                <o class="fw-light text-gray-500 fs-5">สำเร็จหลักสูตร</o>
                                            </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1 active" href="Course/CO_ProRequest.php">Request Course <span class="badge badge-dark">6 รายการ</span><br>
                                                <o class="fw-light text-gray-500 fs-7 fs-lg-5">คำสั่งอนุมัติลงทะเบียน</o>
                                            </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Course/CO_ProReport.php">Grade report<br>
                                                <o class="fw-light text-gray-500 fs-5">ผลคะแนนอบรมหลักสูตร</o>
                                            </a>
                                        </li>
                                        <!--end::Nav item-->
                                    </ul>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Nav items-->
                                <!--begin::details View-->
                                <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                                    <!--begin::Card header-->
                                    <div class="card-header cursor-pointer">
                                        <!--begin::Card title-->
                                        <div class="card-title m-0">
                                            <h3 class="fw-bold m-0">คำสั่งขอลงทะเบียนของฉัน ทั้งหมด 6 หลักสูตร</h3>
                                        </div>
                                        <!--begin::Card title-->
                                        <div class="card-title d-flex flex-column flex-end">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1 me-5 ">
                                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px w-lg-500px ps-13" placeholder="Search " />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--end::Card title-->
                                        <!--end::Card title-->
                                    </div>
                                    <!--begin::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body p-9">
                                        <div class="row g-10">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 font-weight-light" id="table_report_grade">
                                                    <thead>
                                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="min-w-150px text-center text-gray-800">COURSE</th>
                                                            <th class="min-w-1px text-center text-gray-800">Current Approver<br>ผู้อนุมัติปัจจุบัน
                                                            </th>
                                                            <th class="min-w-1px text-center text-gray-800">Status<br>สถานะ
                                                            </th>
                                                            <th class="min-w-1px text-center text-gray-800">Creating Time<br>วันที่เขียน
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fw-semibold text-gray-600">
                                                        <tr style="cursor:pointer" onclick="location.href='Course/CO_Flow.php'" class="hover-elevate-up">
                                                            <td class="text-dark fs-6 font-Noto" href="Course/CO_Flow.php">MC-SS-01 Effective
                                                                Communicative & Connected by NLP
                                                                (สื่อสารสร้างสัมพันธ์ชั้นเลิศด้วยเทคนิค NLP)<br>
                                                                <o class="fs-6 text-primary">ผู้ลงทะเบียน : สมศักดิ์ มากเงิน</o>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto">
                                                                <i class="fa-solid fa-circle text-warning fs-12 me-1 animate__animated animate__flash animate__infinite animate__slow"></i>
                                                                <o>สมรักษ์ มีทองเงิน</o><br>
                                                                <o class="text-gray-500 fs-7">Manager </o>
                                                            </td>
                                                            <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-warning fs-8 fs-lg-6">รออนุมัติ</span>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                            </td>
                                                        </tr>
                                                        <tr style="cursor:pointer" onclick="location.href='Course/CO_Flow.php'" class="hover-elevate-up">
                                                            <td class="text-dark fs-6 font-Noto">CC-ST-01
                                                                ความปลอดภัยในการทำงาน และการจำลองอุบัติเหตุ (Safety DOJO)<br>
                                                                <o class="fs-6 text-primary">ผู้ลงทะเบียน : สมศักดิ์ มากเงิน</o>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto"><i class="fa-solid fa-circle text-warning fs-12 me-1 animate__animated animate__flash animate__infinite animate__slow"></i>
                                                                <o>สมรักษ์ มีทองเงิน</o><br>
                                                                <o class="text-gray-500 fs-7">Manager </o>
                                                            </td>
                                                            <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-warning fs-8 fs-lg-6">รออนุมัติ</span>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto text-center">05/10/2024
                                                            </td>
                                                        </tr>
                                                        <tr style="cursor:pointer" onclick="location.href='Course/CO_Flow.php'" class="hover-elevate-up">
                                                            <td class="text-dark fs-6 font-Noto">ENC-BE-01 Advance Product
                                                                Quality Planning : APQP<br>
                                                                <o class="fs-6 text-primary">ผู้ลงทะเบียน : สมศักดิ์ มากเงิน</o>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto"><i class="fa-solid fa-circle text-warning fs-12 me-1 animate__animated animate__flash animate__infinite animate__slow"></i>
                                                                <o>มาลี สายงาม</o><br>
                                                                <o class="text-gray-500 fs-7">TS ACADEMY Staff</o>
                                                            </td>
                                                            <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-warning fs-8 fs-lg-6">รออนุมัติ</span>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto text-center">06/10/2024
                                                            </td>
                                                        </tr>
                                                        <tr style="cursor:pointer" onclick="location.href='Course/CO_Flow.php?category=Approve'" class="hover-elevate-up">
                                                            <td class="text-dark fs-6 font-Noto">ENC-BE-01 Advance Product
                                                                Quality Planning : APQP<br>
                                                                <o class="fs-6 text-primary">ผู้ลงทะเบียน : สมศักดิ์ มากเงิน</o>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto">-
                                                            </td>
                                                            <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-success fs-8 fs-lg-6">อนุมัติ</span>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto text-center">02/10/2024
                                                            </td>
                                                        </tr>
                                                        <tr style="cursor:pointer" onclick="location.href='Course/CO_Flow.php?category=Approve'" class="hover-elevate-up">
                                                            <td class="text-dark fs-6 font-Noto">CC-ST-01
                                                                ความปลอดภัยในการทำงาน และการจำลองอุบัติเหตุ (Safety DOJO)<br>
                                                                <o class="fs-6 text-primary">ผู้ลงทะเบียน : สมศักดิ์ มากเงิน</o>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto">-
                                                            </td>
                                                            <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-success fs-8 fs-lg-6">อนุมัติ</span>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto text-center">03/10/2024
                                                            </td>
                                                        </tr>
                                                        <tr style="cursor:pointer" onclick="location.href='Course/CO_Flow.php?category=Approve'" class="hover-elevate-up">
                                                            <td class="text-dark fs-6 font-Noto">MC-SS-01 Effective
                                                                Communicative & Connected by NLP
                                                                (สื่อสารสร้างสัมพันธ์ชั้นเลิศด้วยเทคนิค NLP)<br>
                                                                <o class="fs-6 text-primary">ผู้ลงทะเบียน : สมศักดิ์ มากเงิน</o>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto">-
                                                            </td>
                                                            <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-success fs-8 fs-lg-6">อนุมัติ</span>
                                                            </td>
                                                            <td class="text-dark fs-6 text-gray-600 font-Noto text-center">03/10/2024
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <!--end::Table-->
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::details View-->

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
    <!-- begin::filter group -->
    <?php include "DS_GroupModelFilter.php" ?>
    <!-- end::filter group -->
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
    <script src="Course/CO_ProReport.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>