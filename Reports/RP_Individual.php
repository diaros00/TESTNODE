<?php 
session_start();
$part = '../'; 
$ReportSW = 'here show menu-here-bg';
$Report = 'active';
$textReport = 'text-primary';

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
                        <div class="mb-3"></div>
                        <!--begin::Content-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center me-3">
                                </div>
                                <!--end::Page title-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Floating label-->
                                    <div class="toolbar-select form-floating w-175px w-lg-175px h-55px me-4">
                                        <select class="form-select h-55px" data-control="select2" data-hide-search="true" data-placeholder="Select year">
                                            <option value="2024" selected="selected">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                        </select>
                                        <label class="fs-8 mb-2 fw-bold text-gray-500">Year</label>
                                    </div>
                                    <a href="Reports/RP_Profile.php" class="btn btn-info">
                                        <i class="ki-duotone ki-profile-circle fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        VIEW PROFILE
                                    </a>
                                    <!--end::Floating label-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <div class="row mb-5">
                                    <div class="col-12 col-lg-3 text-center">
                                        <img src="assets/media/logos/thaisummit.svg" class="h-50px h-lg-100px me-15" alt="" />
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="mb-5"></div>
                                        <h1 class="fs-2x fs-lg-4x text-center text-lg-center  text-gray-700">Individual Skill Chart</h1>
                                    </div>

                                </div>
                                <div class="row mb-5">
                                    <div class="col-sm-12 col-lg-9">
                                        <div class="card card-flush mb-10 p-9">
                                            <div class="mb-10"></div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p>
                                                        <o class="fs-6 fs-lg-2 text-gray-600">รหัสพนักงาน :</o>
                                                        <o class="fs-6 fs-lg-2 text-primary">012613</o>
                                                    </p>
                                                    <p>
                                                        <o class="fs-6 fs-lg-2 text-gray-600">คำนำหน้า :</o>
                                                        <o class="fs-6 fs-lg-2 text-primary">นาย</o>
                                                    </p>
                                                    <p>
                                                        <o class="fs-6 fs-lg-2 text-gray-600">แผนก : </o>
                                                        <o class="fs-6 fs-lg-2 text-primary">PLANNER&BUYER DOMESTIC STAFF</o>
                                                    </p>
                                                    <p>
                                                        <o class="fs-6 fs-lg-2 text-gray-600">ฝ่าย :</o>
                                                        <o class="fs-6 fs-lg-2 text-primary">MATERIAL CONTROL DEPT.</o>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <p>
                                                        <o class="fs-6 fs-lg-2 text-gray-600">ชื่อ :</o>
                                                        <o class="fs-6 fs-lg-2 text-primary">สมศักดิ์</o>
                                                        <o class="fs-6 fs-lg-2 text-gray-600">นามสกุล : </o>
                                                        <o class="fs-6 fs-lg-2 text-primary">มากเงิน</o>
                                                    </p>
                                                    <p>
                                                        <o class="fs-6  fs-lg-2 text-gray-600">บริษัท :</o>
                                                        <o class="fs-6  fs-lg-2 text-primary">THAISUMMIT HARNESS PUBLIC COMPANY LIMITED</o>
                                                    </p>
                                                    <p>
                                                        <o class="fs-6  fs-lg-2 text-gray-600">ตำแหน่ง :</o>
                                                        <o class="fs-6  fs-lg-2 text-primary">เจ้าหน้าที่</o>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mb-10"></div>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-3 text-center flex-center">
                                        <div class="card card-flush mb-10 gradient-while p-9">
                                            <div class="symbol symbol-150px symbol-circle">
                                                <center>
                                                    <div class="symbol-label animate__animated animate__bounceIn" style="background-image:url(assets/media/avatars/300-6.jpg)"></div>
                                                </center>
                                            </div>
                                            <p>
                                                <o class="fs-2x text-gray-900">012613</o><br>
                                                <o class="fs-2 text-gray-700">สมศักดิ์ มากเงิน</o>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-mb-6 col-lg-6">
                                        <div class="card card-flush mb-10 pt-5 px-5 py-5">
                                            <div class="scroll h-450px px-5">
                                                <div class="table-responsive mb-12">
                                                    <table class="table table-bordered mb-5 " align="center">
                                                        <thead>
                                                            <tr class="fw-bold fs-6 text-gray-800 bg-light-dark">
                                                                <th class="fs-5 fs-lg-4 text-center w-250px h-60px" align="center">หลักสูตรทักษะความชำนาญ</th>
                                                                <th class="fs-5 fs-lg-4 text-center w-10px" align="center">Before</th>
                                                                <th class="fs-5 fs-lg-4 text-center w-10px" align="center">After</th>
                                                                <th class="fs-5 fs-lg-4 text-center w-100px" align="center">สถานะ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-4">Six hazard and 20+1 F view point</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-6">Effective Communicative & Connected by NLP (สื่อสารสร้างสัมพันธ์ชั้นเลิศด้วยเทคนิค NLP)</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6r">
                                                                <td class="text-gray-600 fs-6">Professional Infographic Design and Professional with Powerpoint</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-6">การวิเคราะห์สาเหตุและการแก้ไขปัญหาอย่างเป็นระบบ</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-6">English Skills (Classroom Class , E-learning Class)</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-6">Microsoft Excel level Intermediate / Advance</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-6">Lean Systems for Supervisor</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-6">New Jix & Fixture purchasing standard</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-6">V5 Strategy</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-6">ระบบคุณภาพสำหรับอุตสาหกรรมผลิตชิ้นส่วนยานยนต์</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6">
                                                                <td class="text-gray-600 fs-6">ความปลอดภัยในการทำงาน และการจำลองอุบัติเหตุ (Safety DOJO)</td>
                                                                <td class="text-gray-900 text-center fs-4">2</td>
                                                                <td class="text-gray-900 text-center fs-4">4</td>
                                                                <td class="text-gray-600 text-center fs-2"><span class="badge badge-success fs-4">ผ่าน</span></td>
                                                            </tr>
                                                            <tr class="fs-6 bg-primary">
                                                                <td class="text-white fs-4 text-center">KPI ปี <?php echo (date('Y') + 543) ?> (9 หลักสูตร)</td>
                                                                <td class="text-white text-center fs-2" colspan="2">2</td>
                                                                <td class="text-white text-center fs-2">9 หลักสูตร</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-mb-6 col-lg-6">
                                        <div class="card card-flush mb-10 pt-5 px-5 py-5">
                                            <h3 class="card-title align-items-start flex-column text-center mb-15">
                                                <span class="fs-2x fw-bold pe-2 text-center text-gray-700">Individual Skill Chart</span>
                                            </h3>
                                            <div id="chart-course" class="px-2 h-200px h-lg-300px"></div>
                                        </div>
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
    <script src="Reports/RP_Report.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>