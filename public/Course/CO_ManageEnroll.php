<?php
session_start();
$part = '../';
$CourseSW = 'here show menu-here-bg';
$textCourse = 'text-primary';
$CO_Manage = 'active';
$textCO_Manage = 'text-primary';

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
                                    <h1 class="page-heading d-flex text fw-bold fs-2x flex-column justify-content-center my-0">COURSE CLASS : Mechanical System (basic)</h1>
                                    <!--end::Title-->
                                    <span class="font-Noto text-gray-600 fs-5">การจัดการรุ่นอบรม</span>
                                </div>
                                <!--end::Page title-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center">
                                    <a href="#" class="btn btn-icon btn-primary w-200px h-55px" data-bs-toggle="modal" data-bs-target="#modal_enroll_manage">
                                        <i class="fa-solid fa-book-open-reader me-1 fs-5"></i>Enrollment manage
                                    </a>
                                    <a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="right" title="New Campaign"></a>
                                </div>
                                <!--end::Actions-->
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
                                            <div class="d-flex align-items-center position-relative my-1 me-5 ">
                                                <h3>ทั้งหมด 10 รายการ</h3>
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
                                            <table class="table table-bordered align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_courseenroll_table">
                                                <thead>
                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 align-middle bg-gray-800">
                                                        <th rowspan="2" class="min-w-1px text-center text-gray-100">
                                                            <o class="fs-5">NO</o><br>
                                                            <o class="fs-6">ลำดับ</o>
                                                        </th>
                                                        <th rowspan="2" class="min-w-300px text-center text-gray-100">
                                                            <o class="fs-5">EMPLOYEE</o><br>
                                                            <o class="fs-6">พนักงาน</o>
                                                        </th>
                                                        <th rowspan="2" class="min-w-100px text-center text-gray-100">
                                                            <o class="fs-5">ENROLL DATE</o><br>
                                                            <o class="fs-6">วันที่ลงทะเบียน</o>
                                                        </th>
                                                        <th rowspan="2" class="min-w-1px text-center text-gray-100">
                                                            <o class="fs-5">FORMAT ENROLL</o><br>
                                                            <o class="fs-6">รูปแบบการลงทะเบียน</o>
                                                        </th>
                                                        <th rowspan="2" class="min-w-1px text-center text-gray-100">
                                                            <o class="fs-5">STATUS</o><br>
                                                            <o class="fs-6">สถานะเข้าอบรม</o>
                                                        </th>
                                                        <th colspan="2" class="min-w-1px text-center align-middle text-gray-100">
                                                            <o class="fs-5">SCORE TEST</o><br>
                                                            <o class="fs-6">คะแนนแบบทดสอบ</o>
                                                        </th>
                                                        <th rowspan="2" class="min-w-20px text-center text-gray-100">
                                                            <o class="fs-5">ACTION</o>
                                                        </th>
                                                    </tr>
                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0 align-middle bg-gray-800">
                                                        <th class="min-w-20px text-center text-gray-100">
                                                            <o class="fs-5">BEFORE</o><br>
                                                            <o class="fs-6">ก่อน</o>
                                                        </th>
                                                        <th class="min-w-20px text-center text-gray-100">
                                                            <o class="fs-5">AFTER</o><br>
                                                            <o class="fs-6">หลัง</o>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">1</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-3.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000010 อนันต์ งามเฉลียว</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:01</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ปกติ</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o><i class="fa-solid fa-clock fs-2"></i></o><br>
                                                            <o>Manager</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">-</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">-</td>
                                                        <td class="text-center">-
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">2</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-4.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000002 สุภาภร ครื้นจิต</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:05</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ปกติ</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o><i class="fa-solid fa-clock fs-2"></i></o><br>
                                                            <o>Academy</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">-</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">-</td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_enroll_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Setting enroll</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">3</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-6.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000003 ธัญญรัชต์ สาระชาติ</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:10</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ปกติ</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o><i class="fa-solid fa-clock fs-2"></i></o><br>
                                                            <o>Check-IN</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">-</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">-</td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_enroll_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Setting enroll</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">4</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-8.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000004 วสุ กัญญา</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:10</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-dark font-Noto fs-5">ทดแทน</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o><i class="fa-solid fa-clock fs-2"></i></o><br>
                                                            <o>Pre-Test</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">-</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">-</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">5</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-10.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000005 วชิรวิทย์ แสนพระวัง</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:19</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-dark font-Noto fs-5">ทดแทน</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o><i class="fa-solid fa-clock fs-2"></i></o><br>
                                                            <o>Train</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">2</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">-</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">6</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-12.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000006 แพรพลอย สิงห์ทองชัย</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:20</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-dark font-Noto fs-5">ทดแทน</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o><i class="fa-solid fa-clock fs-2"></i></o><br>
                                                            <o>Post-Test</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">2</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">-</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">7</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-13.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000007 เสกสิทธิ์ เหลืองประดับใจ</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:20</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-primary font-Noto fs-5">เพิ่มชื่อ</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o><i class="fa-solid fa-clock fs-2"></i></o><br>
                                                            <o>Assessment</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">2</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">4</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">8</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-14.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000008 แพรพลอย สินธุสาร</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:20</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-primary font-Noto fs-5">เพิ่มชื่อ</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o class="text-success"><i class="fa-solid fa-circle-check fs-2 text-success"></i></o><br>
                                                            <o class="text-success">Complete</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">2</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">4</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">9</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-18.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000009 อัจจนา ฮวดหิน</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:30</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-primary font-Noto fs-5">เพิ่มชื่อ</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o class="text-success"><i class="fa-solid fa-circle-check fs-2 text-success"></i></o><br>
                                                            <o class="text-success">Complete</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">2</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">4</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-3 font-Noto text-center">10</td>
                                                        <td>
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Symbol-->
                                                                <div class="overlay-wrapper me-3">
                                                                    <div class="symbol symbol-40px symbol-circle">
                                                                        <img src="assets/media/avatars/300-19.jpg" alt="image" />
                                                                    </div>
                                                                </div>
                                                                <!--end::Symbol-->
                                                                <!--begin::Section-->
                                                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                    <!--begin:Author-->
                                                                    <div class="flex-grow-1 me-1">
                                                                        <div class="fs-6 fw-bold">000010 เกศราภรณ์ ศรีสำราญ</div>
                                                                        <div class="fs-7 text-gray-500 fw-light">PRODUCTION 2 DEPT.</div>
                                                                    </div>
                                                                    <!--end:Author-->
                                                                </div>
                                                                <!--end::Section-->
                                                            </div>
                                                        </td>
                                                        <td class="fs-3">
                                                            <div class="flex-grow-1 me-1">
                                                                <div class="fs-6 fw-bold me-5">วันที่ : 10/10/2023</div>
                                                                <div class="fs-6 fw-light">เวลา : 08:30</div>
                                                            </div>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-primary font-Noto fs-5">เพิ่มชื่อ</span></td>
                                                        <td class="text-dark text-center fw-bold">
                                                            <o class="text-success"><i class="fa-solid fa-circle-check fs-2 text-success"></i></o><br>
                                                            <o class="text-success">Complete</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold fs-3">3</td>
                                                        <td class="text-gray-700 text-center fw-bold fs-3">5</td>
                                                        <td class="text-center">-</td>
                                                    </tr>
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
    <?php include "CO_ModalEnrollManage.php" ?>
    <?php include "CO_ModalEnrollEdit.php" ?>
    <!-- end::request -->
    <!-- end::modal -->
    <!--begin::Javascript-->

    <?php include $part . "Template/TP_Js.php" ?>
    <script src="Course/CO_ManageEnroll.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>