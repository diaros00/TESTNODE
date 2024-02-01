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
                                    <a href="Reports/RP_Individual.php" class="btn btn-info" >
                                        <i class="ki-duotone ki-chart-pie-simple fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        VIEW INDIVIDUAL
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
                                <div class="row">
                                    <div class="col-lg-3">
                                        <!--begin::User menu-->
                                        <div class="card mb-5 mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body pt-15 px-0">
                                                <!--begin::Member-->
                                                <div class="d-flex flex-column text-center mb-9 px-9">
                                                    <!--begin::Photo-->
                                                    <div class="symbol symbol-150px symbol-lg-150px mb-4">
                                                        <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                                                    </div>
                                                    <!--end::Photo-->
                                                    <!--begin::Info-->
                                                    <div class="text-center">
                                                        <!--begin::Name-->
                                                        <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-4">สมศักดิ์
                                                            มากเงิน</a>
                                                        <!--end::Name-->
                                                        <!--begin::Position-->
                                                        <span class="text-muted d-block fw-semibold font-Noto">พนักงานทั่วไป</span>
                                                        <span class="badge badge-light-success">PASS</span>
                                                        <!--end::Position-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Row-->
                                                <div class="row px-9 mb-4">
                                                    <!--begin::Col-->
                                                    <div class="col-4 text-center">
                                                        <div class="text-gray-800 fw-bold fs-3">
                                                            <span class="m-0" data-kt-countup="true" data-kt-countup-value="24">0</span>
                                                        </div>
                                                        <span class="text-gray-500 fs-8 d-block fw-bold">TOTAL</span>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-4 text-center">
                                                        <div class="text-gray-800 fw-bold fs-3">
                                                            <span class="m-0" data-kt-countup="true" data-kt-countup-value="12">0</span>
                                                        </div>
                                                        <span class="text-gray-500 fs-8 d-block fw-bold">TRAINING</span>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-4 text-center">
                                                        <div class="text-gray-800 fw-bold fs-3">
                                                            <span class="m-0" data-kt-countup="true" data-kt-countup-value="12">0</span>
                                                        </div>
                                                        <span class="text-gray-500 fs-8 d-block fw-bold">REMAIN</span>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Navbar-->
                                                <div class="m-0">
                                                    <div class="mb-15"></div>
                                                    <!--begin::chart this year-->
                                                    <div id="chart-this-year" class="px-2" style="height: 100%"></div>
                                                    <p class="text-center text-primary">Percentage in 2022</p>
                                                    <!--begin::Navs-->
                                                </div>
                                                <!--end::Navbar-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::User menu-->
                                    </div>
                                    <div class="col-sm-12 col-lg-9">
                                        <!--begin::Main form-->
                                        <div class="card card-flush mb-10 gradient-while">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <img src="assets/media/icons/canvas/IC-DS-User-1.png" class="h-150px h-lg-150px me-15" alt="" />
                                                </div>
                                                <div class="col-lg-6 text-center pt-20">
                                                    <h1 class="text-gray-800 font-weight-boldest">DASHBOARS PROFILE OF <br>
                                                        <o class="fs-5">SAMSAK MAKNGEN</o>
                                                    </h1>
                                                    <p class="text-gray-700 font-weight-light">แดชบอร์ดของสมศักดิ์ มากเงิน</p>
                                                </div>
                                                <div class="col-lg-3 card-header justify-content-end align-items-end text-end">
                                                    <img src="assets/media/icons/canvas/IC-DS-User-2.png" class="h-200px h-lg-200px me-15 animate__animated animate__rubberBand" alt="" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-15"></div>
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="card card-flush mb-10 pt-5 px-8 py-5">
                                                    <h3 class="card-title align-items-start flex-column mb-7">
                                                        <span class="fs-4 fw-bold pe-2">Curriculum</span><br>
                                                        <span class="text-muted mt-1 fw-semibold fs-7">กลุ่มหลักสูตร</span>
                                                    </h3>
                                                    <div id="chart-curriculum" class="px-2 h-200px h-lg-200px mb-7"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <div class="card card-flush mb-10 pt-5 px-5 py-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="fs-4 fw-bold pe-2">Course</span><br>
                                                        <span class="text-muted mt-1 fw-semibold fs-7">หลักสูตรอบรม</span>
                                                    </h3>
                                                    <div id="chart-course" class="px-2 h-200px h-lg-200px"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-12">
                                                <div class="card card-flush mb-10 pt-5 px-5 py-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="fs-4 fw-bold pe-2">Percentages of tarining and targets from 2022 - <?php echo date('Y') ?></span><br>
                                                        <span class="text-muted mt-1 fw-semibold fs-7">เป้าหมายการอบรมตั้งแต่ปี 2022 - <?php echo date('Y') ?></span>
                                                    </h3>
                                                    <div id="chart-target-of-year" class="px-2 h-200px h-lg-200px"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-12">
                                                <div class="card card-flush mb-10 pt-5 px-5 py-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="fs-4 fw-bold pe-2">Status Course</span><br>
                                                        <span class="text-muted mt-1 fw-semibold fs-7">สถานะการอบรมของหลักสูตร</span>
                                                    </h3>
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <!--begin::Card header-->
                                                        <div class="card-header mt-6">
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
                                                        </div>
                                                        <!--end::Card header-->
                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-0">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 font-weight-light" id="kt_permissions_table">
                                                                <thead>
                                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                                        <th class="min-w-1px text-center text-gray-800">No.</th>
                                                                        <th class="min-w-50px text-center text-gray-800">CODE</th>
                                                                        <th class="min-w-150px text-center text-gray-800">COURSE</th>
                                                                        <th class="min-w-1px text-center text-gray-800">STATUS</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-gray-600">
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">1</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">MC-SS-01</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Effective Communicative & Connected by NLP (สื่อสารสร้างสัมพันธ์ชั้นเลิศด้วยเทคนิค NLP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center"><i class="fa-solid fa-circle-check text-success fs-1"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">2</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">CC-ST-01</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">ความปลอดภัยในการทำงาน และการจำลองอุบัติเหตุ (Safety DOJO)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center"><i class="fa-solid fa-circle-check text-success fs-1"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">3</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-01</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Advance Product Quality Planning : APQP</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center"><i class="fa-solid fa-circle-check text-success fs-1"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">4</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center"><i class="fa-solid fa-circle-check text-success fs-1"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">5</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-03</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">AIAG-VDA FMEA ( 1ST Edition 2019 )</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center"><i class="fa-solid fa-circle-check text-success fs-1"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">6</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-05</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Measurement System Analysis : MSA</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center"><i class="fa-solid fa-circle-check text-success fs-1"></i></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">7</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">CC-ST-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Six hazard and 20+1 F view point</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">8</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-04</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Statistical Process Control (SPC)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">9</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-11</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Karakuri kaizen for Engineering</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">10</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">FC-QS-01</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Why Why analysis + 5 Gen</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">11</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">12</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">13</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">14</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">15</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">16</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">17</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">18</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">19</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">20</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">21</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">22</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">23</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-dark fs-6 font-Noto text-center">24</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">ENC-BE-02</td>
                                                                        <td class="text-dark fs-6 text-gray-600 font-Noto">Production Part Approval Process (PPAP)</td>
                                                                        <td class="text-dark fs-6 font-Noto text-center">-</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Card body-->
                                                        <!--end::Col-->
                                                    </div>
                                                </div>
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