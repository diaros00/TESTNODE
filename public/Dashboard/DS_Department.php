<?php 
session_start();
$part = '../'; 
$DashboardSW = 'here show menu-here-bg';
$textDashboard = 'text-primary';
$DS_Department = 'active';
$textDS_Department = 'text-primary';
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
                                    <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#Model-DS-Dep-Filter">
                                        <i class="ki-duotone ki-element-plus fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>

                                        SELECT VIEW DEPARTMENT
                                    </a>
                                    <!--end::Floating label-->
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-4 mb-xl-10">
                                        <!--begin::Lists Widget 19-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Heading-->
                                            <div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('assets/media/svg/shapes/top-department.png" data-bs-theme="light">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column text-white pt-15">
                                                    <span class="fw-bold fs-2x mb-3 text-dark">My Department</span>
                                                    <div class="fs-4 text-dark">
                                                        <span class="opacity-75">คุณพนักงานทั้งหมด</span>
                                                        <span class="position-relative d-inline-block">
                                                            <a href="pages/user-profile/projects.html" class="link-white opacity-75-hover fw-bold d-block mb-1 text-info">158 ราย</a>
                                                            <!--begin::Separator-->
                                                            <span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
                                                            <!--end::Separator-->
                                                        </span>
                                                        <span class="opacity-75">ได้ผ่านการอบรมในปี 2024</span>
                                                    </div>
                                                </h3>
                                                <!--end::Title-->
                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar pt-5">
                                                    <!--begin::Menu-->
                                                    <button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-4">
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
                                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Ticket</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Customer</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->
                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Admin Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Staff Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">Member Group</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">New Contact</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Body-->
                                            <div class="card-body mt-n20">
                                                <!--begin::Stats-->
                                                <div class="mt-n20 position-relative">
                                                    <!--begin::Row-->
                                                    <div class="row g-3 g-lg-6">
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Items-->
                                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-30px me-5 mb-8">
                                                                    <span class="symbol-label">
                                                                        <i class="ki-duotone ki-people fs-3x text-primary">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                            <span class="path4"></span>
                                                                            <span class="path5"></span>
                                                                        </i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Stats-->
                                                                <div class="m-0">
                                                                    <!--begin::Number-->
                                                                    <span class="text-primary fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1" data-kt-countup="true" data-kt-countup-value="420">0</span>
                                                                    <!--end::Number-->
                                                                    <!--begin::Desc-->
                                                                    <span class="text-gray-500 fw-semibold fs-6">Department Result</span>
                                                                    <!--end::Desc-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Items-->
                                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-30px me-5 mb-8">
                                                                    <span class="symbol-label">
                                                                        <i class="ki-duotone ki-chart-line text-info fs-3x">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Stats-->
                                                                <div class="m-0">
                                                                    <!--begin::Number-->
                                                                    <span class="text-info fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1" data-kt-countup="true" data-kt-countup-value="420">0</span>
                                                                    <!--end::Number-->
                                                                    <!--begin::Desc-->
                                                                    <span class="text-gray-500 fw-semibold fs-6">Employee KPI <br>for 2024 Result</span>
                                                                    <!--end::Desc-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Items-->
                                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-30px me-5 mb-8">
                                                                    <span class="symbol-label">
                                                                        <i class="ki-duotone ki-check-circle text-success fs-3x">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Stats-->
                                                                <div class="m-0">
                                                                    <!--begin::Number-->
                                                                    <span class="text-success fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1 " data-kt-countup="true" data-kt-countup-value="158">0</span>
                                                                    <!--end::Number-->
                                                                    <!--begin::Desc-->
                                                                    <span class="text-gray-500 fw-semibold fs-6">Target KPI <br>for 2024</span>
                                                                    <!--end::Desc-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col-6">
                                                            <!--begin::Items-->
                                                            <div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
                                                                <!--begin::Symbol-->
                                                                <div class="symbol symbol-30px me-5 mb-8">
                                                                    <span class="symbol-label">
                                                                        <i class="ki-duotone ki-time text-danger fs-3x">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>
                                                                    </span>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Stats-->
                                                                <div class="m-0">
                                                                    <!--begin::Number-->
                                                                    <span class="text-danger fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1" data-kt-countup="true" data-kt-countup-value="262">0</span>
                                                                    <!--end::Number-->
                                                                    <!--begin::Desc-->
                                                                    <span class="text-gray-500 fw-semibold fs-6">Remain <br>for 2024</span>
                                                                    <!--end::Desc-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Lists Widget 19-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-8 mb-5 mb-xl-10">
                                        <!--begin::Engage widget 4-->
                                        <div class="card border-transparent mb-5 gradient-while" data-bs-theme="light">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex">
                                                <!--begin::Wrapper-->
                                                <div class="m-0 mb-15">
                                                    <!--begin::Title-->
                                                    <div class="position-relative fs-2x z-index-2 fw-bold text-active-gray-900 mb-7">
                                                        <div class="mb-15"></div>
                                                        <div class="mb-sm-15"></div>
                                                        <span class="me-2">Dashboard of Department<br>
                                                            <span class="position-relative d-inline-block text-danger">
                                                                <div class="text-danger">H610000 - PRODUCTION 1 DEPT.</div>
                                                                <!--begin::Separator-->
                                                                <span class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                                <!--end::Separator-->
                                                            </span></span>
                                                        <br />
                                                        <o class="font-Noto fs-3 text-gray-700">ภาพรวมทั้งหมดสำหรับแผนก</o>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--begin::Wrapper-->
                                                <!--begin::Illustration-->
                                                <img src="assets/media/icons/canvas/IC-DS-Department.png" class="position-absolute me-3 bottom-0 end-0 h-100px h-lg-300px animate__animated animate__pulse" alt="" />
                                                <!--end::Illustration-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Engage widget 4-->
                                        <!--begin::Card widget 18-->
                                        <div class="card card-flush">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin::Row-->
                                                <div class="row">
                                                    <!--begin::Col-->
                                                    <div class="col-6 border-gray-300 border-end-dashed animate__animated animate__fadeIn animate__slower">
                                                        <!--begin::Image-->
                                                        <div id="chart-total-progress" style="height: 100%"></div>
                                                        <!--end::Image-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <!--begin::Wrapper-->
                                                        <div class="position-relative fs-2x fw-bold text-gray-700 mb-9 animate__animated animate__fadeInLeft">
                                                            <div class="mb-15"></div>
                                                            <div class="mb-sm-15"></div>
                                                            <span class="me-2" style="background: linear-gradient(to right, #1488CC , #2B32B2);-webkit-text-fill-color: transparent;-webkit-background-clip: text;">TOTAL PROGRESS TRINING <br>OF DEPARTMENT</span>
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Card widget 18-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-4 mb-xl-10">
                                        <!--begin::List widget 20-->
                                        <div class="card h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-900">Progress training of Department</span>
                                                    <span class="text-muted mt-1 fw-semibold fs-7">ความคืบหน้าในแผนก</span>
                                                </h3>
                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="#" class="btn btn-sm btn-light">View all employee</a>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body pt-6">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <div class="symbol-label fs-2 fw-semibold bg-light-warning text-inverse-warning">
                                                            <i class="ki-duotone ki-profile-user fs-1 text-warning">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">H000000</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">TSH CENTER</span>
                                                        </div>
                                                        <!--end:Author-->
                                                        <!--begin::Actions-->
                                                        <div class="m-0 text-end text-dark fs-7 font-Noto">20/40 คน<br>
                                                            <o class="fs-9">50/100 %</o>
                                                        </div>
                                                        <!--begin::Actions-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <div class="mb-3"></div>
                                                <div class="d-flex progress mb-3" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <div class="symbol-label fs-2 fw-semibold bg-light-warning text-inverse-warning">
                                                            <i class="ki-duotone ki-profile-user fs-1 text-warning">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">H000000</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">TSH CENTER</span>
                                                        </div>
                                                        <!--end:Author-->
                                                        <!--begin::Actions-->
                                                        <div class="m-0 text-end text-dark fs-7 font-Noto">20/40 คน<br>
                                                            <o class="fs-9">50/100 %</o>
                                                        </div>
                                                        <!--begin::Actions-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <div class="mb-3"></div>
                                                <div class="d-flex progress mb-3" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <div class="symbol-label fs-2 fw-semibold bg-light-warning text-inverse-warning">
                                                            <i class="ki-duotone ki-profile-user fs-1 text-warning">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">H000000</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">TSH CENTER</span>
                                                        </div>
                                                        <!--end:Author-->
                                                        <!--begin::Actions-->
                                                        <div class="m-0 text-end text-dark fs-7 font-Noto">20/40 คน<br>
                                                            <o class="fs-9">50/100 %</o>
                                                        </div>
                                                        <!--begin::Actions-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <div class="mb-3"></div>
                                                <div class="d-flex progress mb-3" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <div class="symbol-label fs-2 fw-semibold bg-light-warning text-inverse-warning">
                                                            <i class="ki-duotone ki-profile-user fs-1 text-warning">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">H000000</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">TSH CENTER</span>
                                                        </div>
                                                        <!--end:Author-->
                                                        <!--begin::Actions-->
                                                        <div class="m-0 text-end text-dark fs-7 font-Noto">20/40 คน<br>
                                                            <o class="fs-9">50/100 %</o>
                                                        </div>
                                                        <!--begin::Actions-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <div class="mb-3"></div>
                                                <div class="d-flex progress mb-3" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <div class="symbol-label fs-2 fw-semibold bg-light-warning text-inverse-warning">
                                                            <i class="ki-duotone ki-profile-user fs-1 text-warning">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">H000000</a>
                                                            <span class="text-muted fw-semibold d-block fs-7">TSH CENTER</span>
                                                        </div>
                                                        <!--end:Author-->
                                                        <!--begin::Actions-->
                                                        <div class="m-0 text-end text-dark fs-7 font-Noto">20/40 คน<br>
                                                            <o class="fs-9">50/100 %</o>
                                                        </div>
                                                        <!--begin::Actions-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <div class="mb-3"></div>
                                                <div class="d-flex progress mb-3" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::List widget 20-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-8 mb-5 mb-xl-10">
                                        <!--begin::Timeline Widget 1-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Card header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Card title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-900">Total progress training for all level</span>
                                                    <span class="text-gray-500 pt-2 fw-semibold fs-6">ความคืบหน้า</span>
                                                </h3>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pb-0">
                                            <div id="chart-progress-level" style="height: 100%"></div>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Timeline Widget 1-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
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
    <!-- begin::filter department -->
    <?php include "DS_DepartmentModelFilter.php" ?>
    <!-- end::filter department -->
    <!-- end::modal -->
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
    <script src="Dashboard/DS_Department.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>