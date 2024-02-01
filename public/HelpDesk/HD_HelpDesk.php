<?php
session_start();
$part = '../'; 
$HelpSW = 'here show menu-here-bg';
$textHelp = 'text-primary';
$HD_HelpDesk = 'active';
$textHD_HelpDesk = 'text-primary';

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
                                    <h1 class="page-heading d-flex text fw-bold fs-2x flex-column justify-content-center my-0">HelpDesk</h1>
                                    <!--end::Title-->
                                    <span class="font-Noto text-gray-600 fs-5">ศูนย์รับขอความช่วยเหลือ</span>
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
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-6 col-md-6 col-lg-4">
                                        <!--begin::Card-->
                                        <div class="card h-100 hover-scale gradient-gray-and-while">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8 font-Noto">
                                                <!--begin::Name-->
                                                <div class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <i class="text-primary fa-solid fa-users fs-3x"></i>
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-2x fw-bold font-Noto me-2" data-kt-countup="true" data-kt-countup-value="1594">0</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-6 fw-semibold text-gray-700 font-Noto">TOTAL<br>
                                                    <o class="fs-7 text-gray-700">แจ้งปัญหาทั้งหมด</o>
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6 col-md-6 col-lg-4 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100 hover-scale gradient-green-and-yellow">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8 font-Noto">
                                                <!--begin::Name-->
                                                <div class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <i class="text-primary fa-solid fa-user-large fs-3x"></i>
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-2x fw-bold font-Noto me-2" data-kt-countup="true" data-kt-countup-value="1528">0</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-6 fw-semibold text-gray-700 font-Noto">Solve<br>
                                                    <o class="fs-7 text-gray-700">แก้ไขปัญหา</o>
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6 col-md-6 col-lg-4 col-xl-4">
                                        <!--begin::Card-->
                                        <div class="card h-100 hover-scale gradient-alive">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8 font-Noto">
                                                <!--begin::Name-->
                                                <div class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <i class="text-primary fa-solid fa-user-check fs-3x"></i>
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-2x fw-bold font-Noto me-2" data-kt-countup="true" data-kt-countup-value="1430">0</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-6 fw-semibold text-gray-700 font-Noto">Wait<br>
                                                    <o class="fs-7 text-gray-700">รอคำตอบ</o>
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="card">
                                    <!--begin::Card header-->
                                    <div class="card-header mt-6">
                                        <!--begin::Card title-->
                                        <div class="card-title d-flex flex-column flex-end">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1 me-5 ">
                                                <h3></h3>
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--end::Card title-->
                                        <!--begin::Card title-->
                                        <div class="card-title d-flex flex-column flex-end">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1 me-5 ">
                                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-300px w-lg-500px ps-13" placeholder="Search " />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_helpdesk_table">
                                                <thead>
                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-1px">NO.</th>
                                                        <th class="min-w-300px text-center">PROBLEM</th>
                                                        <th class="min-w-50px text-center">CATEGORY</th>
                                                        <th class="min-w-1px text-center">STATUS</th>
                                                        <th class="min-w-1px text-center">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">1</td>
                                                        <td class="text-gray-500 fs-3 font-Noto">
                                                            <o class="font-Noto fs-3">ระบบ Academy คืออะไร ?<br>
                                                                <!--begin::Info-->
                                                                <!--end::Info-->
                                                                <!--begin::User-->
                                                                <div class="symbol symbol-circle symbol-25px font-Noto" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                                    <img src="assets/media/avatars/300-14.jpg" alt="img" class="me-2" />
                                                                    <o class="text-primary fs-7">สมศักดิ์ มากเงิน</o><br>
                                                                    <o class="text-danger fs-7">จาก : TSH | ฝ่าย : Production 1</o><br>
                                                                </div>
                                                                <!--end::User-->
                                                            </o>
                                                        </td>
                                                        <td>
                                                            <h1 class="text-primary fw-bold fw-semibold d-block fs-6 text-center">ทั่วไป</h1>
                                                        </td>
                                                        <td class="text-warning text-center"><span class="badge badge-light-warning fs-6">PROCESSING - กำลังดำเนินการ</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-eye me-1"></i>View
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_helpdesk_answer"><i class="fa-solid fa-eye me-2 text-gray-700 fs-3"></i>Detail</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">2</td>
                                                        <td class="text-gray-500 fs-3 font-Noto">
                                                            <o class="font-Noto fs-3">TS ACDEMY สามารถเทียบโอนได้ไหม ?<br>
                                                                <!--begin::Info-->
                                                                <!--end::Info-->
                                                                <!--begin::User-->
                                                                <div class="symbol symbol-circle symbol-25px font-Noto" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                                    <img src="assets/media/avatars/300-15.jpg" alt="img" class="me-2" />
                                                                    <o class="text-primary fs-7">มาลี สายใจ</o><br>
                                                                    <o class="text-danger fs-7">จาก : TSA | ฝ่าย : Production 1</o><br>
                                                                </div>
                                                                <!--end::User-->
                                                            </o>
                                                        </td>
                                                        <td>
                                                            <h1 class="text-primary fw-bold fw-semibold d-block fs-6 text-center">หลักสูตร</h1>
                                                        </td>
                                                        <td class="text-warning text-center"><span class="badge badge-light-warning fs-6">PROCESSING - กำลังดำเนินการ</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-eye me-1"></i>View
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_helpdesk_answer"><i class="fa-solid fa-eye me-2 text-gray-700 fs-3"></i>Detail</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">3</td>
                                                        <td class="text-gray-500 fs-3 font-Noto">
                                                            <o class="font-Noto fs-3">ฉันไม่สามารถลงทะเบียนหลักสูตรได้ ?<br>
                                                                <!--begin::Info-->
                                                                <!--end::Info-->
                                                                <!--begin::User-->
                                                                <div class="symbol symbol-circle symbol-25px font-Noto" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                                    <img src="assets/media/avatars/300-18.jpg" alt="img" class="me-2" />
                                                                    <o class="text-primary fs-7">ประวิทยา รักษาความ</o><br>
                                                                    <o class="text-danger fs-7">จาก : TSA | ฝ่าย : Production 1</o><br>
                                                                </div>
                                                                <!--end::User-->
                                                            </o>
                                                        </td>
                                                        <td>
                                                            <h1 class="text-primary fw-bold fw-semibold d-block fs-6 text-center">ปัญหาใช้งาน</h1>
                                                        </td>
                                                        <td class="text-primary text-center"><span class="badge badge-light-primary fs-6">SOLVE - แก้ไขแล้ว</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-eye me-1"></i>View
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_helpdesk_answer"><i class="fa-solid fa-eye me-2 text-gray-700 fs-3"></i>Detail</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php for($list = 4; $list <= 10; $list++) { ?>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto"><?php echo $list ?></td>
                                                        <td class="text-gray-500 fs-3 font-Noto">
                                                            <o class="font-Noto fs-3">ฉันสามารถเพิ่มสิทธิใช้งานได้ที่ไหน ?<br>
                                                                <!--begin::Info-->
                                                                <!--end::Info-->
                                                                <!--begin::User-->
                                                                <div class="symbol symbol-circle symbol-25px font-Noto" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                                                    <img src="assets/media/avatars/300-<?php echo $list ?>.jpg" alt="img" class="me-2" />
                                                                    <o class="text-primary fs-7">สมชาย มีใจพัฒนา</o><br>
                                                                    <o class="text-danger fs-7">จาก : TSA | ฝ่าย : Production 1</o><br>
                                                                </div>
                                                                <!--end::User-->
                                                            </o>
                                                        </td>
                                                        <td>
                                                            <h1 class="text-primary fw-bold fw-semibold d-block fs-6 text-center">ปัญหาใช้งาน</h1>
                                                        </td>
                                                        <td class="text-success text-center"><span class="badge badge-light-success fs-6">COMPLETE - สำเร็จ</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-eye me-1"></i>View
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_helpdesk_answer"><i class="fa-solid fa-eye me-2 text-gray-700 fs-3"></i>Detail</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
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
    <?php include "HD_MadalHDeskAnswer.php" ?>
    <!-- end::request -->
    <!-- end::modal -->
    <!--begin::Javascript-->

    <?php include $part . "Template/TP_Js.php" ?>
    <script src="HelpDesk/HD_HelpDesk.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>