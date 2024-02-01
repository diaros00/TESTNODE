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
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-8">

                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <!--begin::Content-->
                                <!--begin::Navbar-->
                                <div class="card-flush mb-9" id="kt_user_profile_panel">
                                    <div class="alert alert-dismissible d-flex flex-column flex-sm-row gradient-while">

                                        <div class="card-body d-flex justify-content-center flex-wrap ps-xl-15 pe-0">
                                            <!--begin::Wrapper-->
                                            <div class="flex-grow-1 mt-2 me-9 me-md-0">
                                                <div class="position-relative text-gray-800 fs-1 z-index-2 fw-bold mb-15">
                                                    <img src="assets/media/icons/canvas/IC-Score-1.png" class="h-90px" alt="" />
                                                    <h1 class="text-dark fs-2x">TS ACADEMY <br>
                                                        <o class="fs-3x fw-bold text-gray-700">Score</o><br>
                                                        <o class="fs-2 fw-bold text-gray-700">คะแนนรายงานรายบุคคล</o>
                                                    </h1>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Action-->
                                            </div>
                                            <!--begin::Wrapper-->
                                            <!--begin::Illustration-->
                                            <!--end::Illustration-->
                                        </div>
                                        <img src="assets/media/icons/canvas/IC-Score-2.png" class="position-absolute me-3 bottom-0 end-0 h-200px h-lg-350px animate__animated animate__bounceIn" alt="" />
                                    </div>
                                </div>
                                <!--end::Navbar-->

                                <div class="d-flex flex-stack mb-1">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fs-2x"><i class="fa-solid fa-list-ol me-2 fs-2x text-gray-900"></i> ผลรวมทั้งหมด</h3>
                                    <!--end::Title-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-12"></div>
                                <!--begin::Hero card-->
                                <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
                                    <!--begin::Col-->
                                    <div class="col-6 col-md-6 col-lg-4 col-xl-3">
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
                                                    <o class="fs-7 text-gray-700">พนักงานทั้งหมด</o>
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100 hover-scale gradient-blue-and-while">
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
                                                <div class="fs-6 fw-semibold text-gray-700 font-Noto">EMPLOYEE KPI FOR <?php echo date('Y') ?><br>
                                                    <o class="fs-7 text-gray-700">เป้าหมายในปี <?php echo date('Y') ?></o>
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100 hover-scale gradient-green-and-yellow">
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
                                                <div class="fs-6 fw-semibold text-gray-700 font-Noto">TARGET KPI FOR <?PHP echo DATE('Y') ?><br>
                                                    <o class="fs-7 text-gray-700">ผ่านการอบรมในปี <?php echo date('Y') ?></o>
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                                        <!--begin::Card-->
                                        <div class="card h-100 hover-scale gradient-alive">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8 font-Noto ">
                                                <!--begin::Name-->
                                                <div class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <i class="text-primary fa-solid fa-user-clock fs-3x"></i>
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-2x fw-bold font-Noto me-2" data-kt-countup="true" data-kt-countup-value="98">0</div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-6 fw-semibold text-gray-700 font-Noto">TARGET KPI FOR <?PHP echo DATE('Y') ?><br>
                                                    <o class="fs-7 text-gray-700">กำลังอบรมในปี <?php echo date('Y') ?></o>
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Hero card-->
                                <!--begin::Content-->
                                <div class="d-flex flex-stack mb-1">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fs-2x"><i class="fa-solid fa-users-line me-2 fs-2x text-gray-900"></i> พนักงานทั้งหมด</h3>
                                    <!--end::Title-->
                                </div>
                                <!--end::Content-->
                                <!--begin::Separator-->
                                <div class="separator separator-dashed mb-12"></div>
                                <!--begin::FAQ card-->
                                <div class="card">
                                    <!--begin::Body-->
                                    <div class="card-body p-10 p-lg-15">
                                        <!--begin::Section-->
                                        <div class="mb-17">
                                            <!--end::Separator-->
                                            <!--begin::Row-->
                                            <div class="row g-10">
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
                                                            <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-300px w-lg-500px ps-13" placeholder="Search " />
                                                        </div>
                                                        <!--end::Search-->
                                                    </div>
                                                    <!--end::Card title-->
                                                    <!--begin::Card title-->
                                                    <div class="card-title d-flex flex-column flex-end">
                                                        <!--begin::Search-->
                                                        <div class="d-flex align-items-center position-relative my-1 me-5 ">
                                                            <div class="d-flex flex-row-fluid flex-end">
                                                                <!--begin::Title-->
                                                                <div class="btn btn-primary btn-group" role="group">
                                                                    <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        View Option
                                                                    </div>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item text-gray-700 fs-3" href="#" data-bs-toggle="modal" data-bs-target="#filter_data"><i class="fa-solid fa-filter text-gray-700 me-2 fs-3"></i>Filter data</a></li>
                                                                        <li><a class="dropdown-item text-gray-700 fs-3" href="#"><i class="fa-solid fa-file-excel me-2 text-gray-700 fs-3"></i>Export report</a></li>
                                                                    </ul>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
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
                                                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                                                            <thead>
                                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-1px">NO.</th>
                                                                    <th class="min-w-50px text-center">CODE</th>
                                                                    <th class="min-w-200px text-center">NAME</th>
                                                                    <th class="min-w-50px text-center">LEVEL</th>
                                                                    <th class="min-w-100px">COSTCENTER</th>
                                                                    <th class="min-w-50px">TARGET</th>
                                                                    <th class="min-w-1px">STATUS</th>
                                                                    <th class="min-w-1px">ACTION</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fw-semibold text-gray-600">
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">1</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012613</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-3.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">นันทนัช แกวสิงห์</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">NANTANAT KAEWSINGHA</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">S3</td>
                                                                    <td>QUALITY ASSURANCE DEPT.</td>
                                                                    <td class="text-info fs-4">2024</td>
                                                                    <td class="text-success"><i class="fa-solid fa-circle-check me-2 text-success fs-6"></i>PASS</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">2</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012614</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-4.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">รักชนก สารสืบ</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">RAKCHANOK SANSUEP</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">S3</td>
                                                                    <td>MARKETING 4 DEPT.</td>
                                                                    <td class="text-info fs-4">2023</td>
                                                                    <td class="text-success"><i class="fa-solid fa-circle-check me-2 text-success fs-6"></i>PASS</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">3</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012615</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-6.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">มณีรัตน์ คลังระหัด</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">MANEERAT KLAGRAHAT</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">S3</td>
                                                                    <td>MARKETING 4 DEPT.</td>
                                                                    <td class="text-info fs-4">2022</td>
                                                                    <td class="text-success"><i class="fa-solid fa-circle-check me-2 text-success fs-6"></i>PASS</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">4</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012616</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-15.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">ไชยา อินนอก</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">CHAIYA AINNOK</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">T7</td>
                                                                    <td>PRODUCTION CONTROL DEPT.</td>
                                                                    <td class="text-info fs-4">2022</td>
                                                                    <td class="text-success"><i class="fa-solid fa-circle-check me-2 text-success fs-6"></i>PASS</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">5</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012617</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-7.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">ณัฐดนัย เนื่องจำนงค์</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">NATDANAI NAUNGJUMNONG</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">T7</td>
                                                                    <td>MARKETING 1 DEPT.</td>
                                                                    <td class="text-info fs-4">2022</td>
                                                                    <td class="text-success"><i class="fa-solid fa-circle-check me-2 text-success fs-6"></i>PASS</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">6</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012626</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-8.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">นิดา สีเนตร</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">NIDA SINETR</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">S3</td>
                                                                    <td>QUALITY ASSURANCE DEPT.</td>
                                                                    <td class="text-info fs-4">2024</td>
                                                                    <td class="text-danger"><i class="fa-solid fa-circle-check me-2 text-danger fs-6"></i>FAIL</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">7</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012627</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-9.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">กัลยรีย์ พวงสายหยุด</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">KANYAREE PHUANGSAIHYUT</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">S3</td>
                                                                    <td>MARKETING 4 DEPT.</td>
                                                                    <td class="text-info fs-4">2023</td>
                                                                    <td class="text-danger"><i class="fa-solid fa-circle-check me-2 text-danger fs-6"></i>FAIL</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">8</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012628</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-10.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">สมพงษ์ กงจีน</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">SOMPONG KONGJEEN</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">S3</td>
                                                                    <td>MARKETING 4 DEPT.</td>
                                                                    <td class="text-info fs-4">2022</td>
                                                                    <td class="text-danger"><i class="fa-solid fa-circle-check me-2 text-danger fs-6"></i>FAIL</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">9</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012629</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-11.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">กัลยรีย์ พวงสายหยุด</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">KANYAREE PHUANGSAIHYUT</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">T7</td>
                                                                    <td>PRODUCTION 2 DEPT.</td>
                                                                    <td class="text-info fs-4">2022</td>
                                                                    <td class="text-danger"><i class="fa-solid fa-circle-check me-2 text-danger fs-6"></i>FAIL</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="fs-5 fs-lg-2 font-Noto">10</td>
                                                                    <td class="text-primary text-center fs-3 font-Noto">012630</td>
                                                                    <td>
                                                                        <div class="d-flex flex-stack">
                                                                            <!--begin::Symbol-->
                                                                            <div class="overlay-wrapper me-1">
                                                                                <div class="symbol symbol-50px symbol-circle mb-5">
                                                                                    <img src="assets/media/avatars/300-12.jpg" alt="image" />
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Section-->
                                                                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                <!--begin:Author-->
                                                                                <div class="flex-grow-1 me-1">
                                                                                    <div class="text-primary text-hover-primary fs-6 fw-bold">จันทิมา บุตทศ</div>
                                                                                    <h1 class="text-muted fw-semibold d-block fs-6">CHANTHIMA BUTTHOT</h1>
                                                                                </div>
                                                                                <!--end:Author-->
                                                                            </div>
                                                                            <!--end::Section-->
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-danger fs-2 text-center">EN</td>
                                                                    <td>MARKETING 1 DEPT.</td>
                                                                    <td class="text-info fs-4">2022</td>
                                                                    <td class="text-danger"><i class="fa-solid fa-circle-check me-2 text-danger fs-6"></i>FAIL</td>
                                                                    <td>
                                                                        <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                            <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <i class="fa-solid fa-eye me-1"></i>View
                                                                            </div>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Individual.php"><i class="fa-solid fa-address-card me-2 text-gray-700 fs-3"></i>Report Individual</a></li>
                                                                                <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-chart-column me-2 text-gray-700 fs-3"></i>Report Progress</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Card body-->
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::FAQ card-->
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
    <?php include "RP_ModalFilter.php" ?>>
    <!-- end::request -->
    <!-- end::modal -->
    <!--begin::Javascript-->

    <?php include $part . "Template/TP_Js.php" ?>
    <script src="HelpDesk/HD_QA.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>