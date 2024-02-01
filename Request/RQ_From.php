<?php 
session_start();
$part = '../'; 
$RequestSW = 'here show menu-here-bg';
$textRequest = 'text-primary';
$RQ_Form = 'active';
$textRQ_Form = 'text-primary';
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
                                                    <img src="assets/media/icons/canvas/IC-RQ-Document-2.png" class="h-100px" alt="" />
                                                    <h1 class="text-dark fs-2x">TS ACADEMY <br>
                                                        <o class="fs-3x fw-bold text-gray-700">Request</o><br>
                                                        <o class="fs-2 fw-bold text-gray-700">เอกสารยื่นขออนุมัติในระบบ</o>
                                                    </h1>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Action-->
                                            </div>
                                            <!--begin::Wrapper-->
                                            <!--begin::Illustration-->
                                            <!--end::Illustration-->
                                        </div>
                                        <img src="assets/media/icons/canvas/IC-RQ-Document-1.png" class="position-absolute me-3 bottom-0 end-0 h-200px h-lg-350px animate__animated animate__bounceIn" alt="" />
                                    </div>
                                </div>
                                <!--end::Navbar-->
                                <!--begin::Nav items-->
                                <div id="kt_user_profile_nav" class="rounded bg-gray-200 d-flex flex-stack flex-wrap mb-9 p-2" data-kt-sticky="true" data-kt-sticky-name="sticky-profile-navs" data-kt-sticky-offset="{default: false, lg: '400px'}" data-kt-sticky-width="{target: '#kt_user_profile_panel'}" data-kt-sticky-left="auto" data-kt-sticky-top="70px" data-kt-sticky-animation="true" data-kt-sticky-zindex="95">
                                    <!--begin::Nav-->
                                    <ul class="nav flex-wrap border-transparent">
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1 active" href="Request/RQ_From.php">Request Form<br>
                                                <o class="fw-light text-gray-500 fs-7 fs-lg-5">เอกสารขออนุมัติ</o>
                                            </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Request/RQ_List.php">List Request<br>
                                                <o class="fw-light text-gray-500 fs-7 fs-lg-5">รายการยื่นอนุมัติ</o>
                                            </a>
                                        </li>
                                        <!--end::Nav item-->
                                        <!--begin::Nav item-->
                                        <li class="nav-item my-1">
                                            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Request/RQ_Approve.php">List Approve <span class="badge badge-danger">5</span><br>
                                                <o class="fw-light text-gray-500 fs-7 fs-lg-5">รายการอนุมัติ</o>
                                            </a>
                                        </li>
                                        <!--end::Nav item-->
                                    </ul>
                                    <!--end::Nav-->

                                </div>

                                <div class="d-flex flex-stack mb-1">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fs-2x"><i class="fa-solid fa-award me-2 fs-2x text-gray-900"></i> แนะนำเอกสารคำขออนุมัติ</h3>
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
                                        <div class="card h-100 hover-scale">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8 ">
                                                <!--begin::Name-->
                                                <a href="Request/RQ_FrmEnroll.php" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <i class="text-primary fa-solid fa-file-pen fs-4x"></i>
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">ลงทะเบียนหลักสูตร</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-500 font-Noto">แนะนำ</div>
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
                                        <div class="card h-100 hover-scale">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                <!--begin::Name-->
                                                <a href="Request/RQ_FrmAuthorization.php" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <i class="text-primary fa-solid fa-file-pen fs-4x"></i>
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">อนุมัติสิทธิใช้งานระบบ</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-500 font-Noto">แนะนำ</div>
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
                                        <div class="card h-100 hover-scale">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                                                <!--begin::Name-->
                                                <a href="Request/RQ_FrmOther.php" class="text-gray-800 text-hover-primary d-flex flex-column">
                                                    <!--begin::Image-->
                                                    <div class="symbol symbol-60px mb-5">
                                                        <i class="text-primary fa-solid fa-file-pen fs-4x"></i>
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-bold mb-2">อนุมัติทั่วไป</div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Name-->
                                                <!--begin::Description-->
                                                <div class="fs-7 fw-semibold text-gray-500 font-Noto">แนะนำ</div>
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
                                    <h3 class="text-gray-900 fs-2x"><i class="fa-solid fa-file-lines me-2 fs-2x text-gray-900"></i> เอกสารคำขออนุมัติทั้งหมด</h3>
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
                                            <!--begin::Content-->
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-500 fs-2">เอกสารทั้งหมด 10 รายการ</h3>
                                                <!--end::Title-->
                                                <!--begin::Link-->
                                                <!--end::Link-->
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Separator-->
                                            <div class="separator separator-dashed mb-9"></div>
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
                                                            <select class="form-select w-300px w-lg-500px" data-control="select2" data-placeholder="Select category document ">
                                                                <option></option>
                                                                <option value="1">หลักสูตร</option>
                                                                <option value="2">สิทธิใช้งานโปรแกรม</option>
                                                                <option value="3">ค่าใช้จ่าย</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Search-->
                                                    </div>
                                                    <!--end::Card title-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                                                        <thead>
                                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                                <th class="min-w-300px max-w-300px">Document <br>เอกสาร</th>
                                                                <th class="min-w-100px max-w-100px text-center">Category<br>หมวด</th>
                                                                <th class="min-w-300px max-w-300px">Detail <br>รายละเอียด</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-semibold text-gray-600">
                                                            <tr class="cursor-pointer" onclick="location.href='Request/RQ_FrmEnroll.php'">
                                                                <td class="text-primary fs-5 fs-lg-2 font-Noto">
                                                                    <div class="btn btn-icon btn-light-primary me-2">
                                                                        <i class="fa-solid fa-file-pen fs-5 fs-lg-2"></i>
                                                                    </div> ลงทะเบียนหลักสูตร
                                                                </td>
                                                                <td class="text-info text-center fs-3 font-Noto">หลักสูตร</td>
                                                                <td>ขออนุมัติลงทะเบียนหลักสูตรในระบบ Academy</td>

                                                                <td></td>
                                                            </tr>
                                                            <tr class="cursor-pointer" onclick="location.href='Request/RQ_FrmAuthorization.php'">
                                                                <td class="text-primary fs-5 fs-lg-2 font-Noto">
                                                                    <div class="btn btn-icon btn-light-primary me-2">
                                                                        <i class="fa-solid fa-file-pen fs-5 fs-lg-2"></i>
                                                                    </div>อนุมัติสิทธิใช้งานระบบ
                                                                </td>
                                                                <td class="text-info text-center fs-3 font-Noto">สิทธิใช้งานระบบ</td>
                                                                <td>ขออนุมัติสิทธิใช้งานระบบ</td>

                                                                <td></td>

                                                            </tr>
                                                            <tr class="cursor-pointer" onclick="location.href='Request/RQ_Frm_HRM-2-013-03.php'">
                                                                <td class="text-primary fs-5 fs-lg-2 font-Noto">
                                                                    <div class="btn btn-icon btn-light-primary me-2">
                                                                        <i class="fa-solid fa-file-pen fs-5 fs-lg-2"></i>
                                                                    </div>เบิกค่าเบี้ยเลี้ยงวิทยากรภายในและผู้ช่วยวิทยากรภายใน
                                                                </td>
                                                                <td class="text-info text-center fs-3 font-Noto">ค่าใช้จ่าย</td>
                                                                <td>ขออนุมัติเบิกค่าเบี้ยเลี้ยงวิทยากรภายใน / ผู้ช่วยวิทยากรภายใน</td>

                                                                <td></td>

                                                            </tr>
                                                            <tr class="cursor-pointer">
                                                                <td class="text-primary fs-5 fs-lg-2 font-Noto">
                                                                    <div class="btn btn-icon btn-light-primary me-2">
                                                                        <i class="fa-solid fa-file-pen fs-5 fs-lg-2"></i>
                                                                    </div>อนุมัติเปิดลงทะเบียนหลักสูตร
                                                                </td>
                                                                <td class="text-info text-center fs-3 font-Noto">หลักสูตร</td>
                                                                <td>ขออนุมัติเปิดหลักสูตร Academy</td>

                                                                <td></td>

                                                            </tr>
                                                            <tr class="cursor-pointer">
                                                                <td class="text-primary fs-5 fs-lg-2 font-Noto">
                                                                    <div class="btn btn-icon btn-light-primary me-2">
                                                                        <i class="fa-solid fa-file-pen fs-5 fs-lg-2"></i>
                                                                    </div>อนุมัติเปิดรุ่นหลักสูตร
                                                                </td>
                                                                <td class="text-info text-center fs-3 font-Noto">หลักสูตร</td>
                                                                <td>ขออนุมัตินุมัติเปิดรุ่นหลักสูตร</td>

                                                                <td></td>

                                                            </tr>
                                                            <tr class="cursor-pointer">
                                                                <td class="text-primary fs-5 fs-lg-2 font-Noto">
                                                                    <div class="btn btn-icon btn-light-primary me-2">
                                                                        <i class="fa-solid fa-file-pen fs-5 fs-lg-2"></i>
                                                                    </div>อนุมัติปิดหลักสูตร
                                                                </td>
                                                                <td class="text-info text-center fs-3 font-Noto">หลักสูตร</td>
                                                                <td>อนุมัติปิดหลักสูตร</td>

                                                                <td></td>

                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
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
    <?php include 'HD_QAModalHRequest.php' ?>
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