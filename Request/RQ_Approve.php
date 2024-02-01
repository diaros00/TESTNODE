<?php 
$part = '../';
session_start();
$RequestSW = 'here show menu-here-bg';
$textRequest = 'text-primary';
$RQ_Approve = 'active';
$textRQ_Approve = 'text-primary'; 
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
                                <!--begin::Hearder-->
                                <?php 
                                $tilte = "รายการอนุมัติ (Approve list)";
                                $listpage = "";
                                $listapprove = "active";
                                include "RQ_Header.php" 
                                ?>
                                <!--end::Hearder-->
                                <!-- begin::filter news -->
                                <div class="alert alert-dismissible border d-flex flex-column flex-sm-row p-5 mb-10" style="background-color: #D6DBDF  ;">
                                    <!--begin::Icon-->
                                    <h4 class="fw-semibold me-6 mb-5 mb-sm-0 fs-3x text-dark">Filter</h4>
                                    <!--end::Icon-->
                                    <!--begin::Wrapper-->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex flex-column pe-0 pe-sm-5 mb-1">
                                                <!--begin::Content-->
                                                <select class="form-select w-lg-300px" aria-label="Select example">
                                                    <option>ทุกช่วงเวลา</option>
                                                    <option value="1">Last 3 months : 3 เดือนที่ผ่านมา</option>
                                                    <option value="2">Last 6 months : 6 เดือนที่ผ่านมา</option>
                                                    <option value="3">2024</option>
                                                    <option value="3">2023</option>
                                                    <option value="3">2022</option>
                                                    <option value="4">2021</option>
                                                </select>
                                                <!--end::Content-->
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex flex-column pe-0 pe-sm-5 mb-1">
                                                <!--begin::Content-->
                                                <select class="form-select w-lg-300px" aria-label="Select example">
                                                    <option>ทุกหมวด</option>
                                                    <option value="1">หลักสูตร</option>
                                                    <option value="2">สิทธใช้งานระบบ</option>
                                                </select>
                                                <!--end::Content-->
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex flex-column pe-0 pe-sm-5 mb-1">
                                                <!--begin::Content-->
                                                <select class="form-select w-lg-300px" aria-label="Select example">
                                                    <option>ทุกผู้ดำเนินการ</option>
                                                    <option value="1">สมศักดิ์ มากเงิน</option>
                                                    <option value="2">มาลี สานสัมพันธ์</option>
                                                </select>
                                                <!--end::Content-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!-- end::filter news -->
                                <div class="card">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title fs-3 fw-bold font-Noto title-total">คำสั่งยื่นขออนุมัติ ทั้งหมด 6 รายการ</div>
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

                                        <div class="btn-option-data" style="display: none">
                                            <div class="card-title d-flex flex-column flex-end">
                                                <div class="d-flex align-items-center position-relative my-1 me-5 ">
                                                    <o class="font-Noto fs-3 text-gray-900 me-2">10 รายการ</o>
                                                    <div class="btn btn-primary btn-group" role="group">
                                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-solid fa-eye me-1"></i>OPTION
                                                        </div>
                                                        <ul class="dropdown-menu">
                                                            <span class="fs-8 text-gray-500">
                                                                <o class="me-3"></o>FORM
                                                            </span>
                                                            <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-circle-check me-2 text-success fs-3"></i>APPROVE FORM</a></li>
                                                            <li><a class="dropdown-item text-gray-700 fs-5" href="Reports/RP_Profile.php"><i class="fa-solid fa-circle-xmark me-2 text-danger fs-3"></i>REJECT FORM</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body p-9">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table id="datatable_my_request" class="table table-striped table-row-bordered gy-5 gs-7">
                                                <thead>
                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="w-1px w-lg-1px text-center">
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                                                            </div>
                                                        </th>
                                                        <th class="min-w-300px max-w-200px text-center text-gray-800">Subject <br>เรื่อง</th>
                                                        <th class="min-w-150px max-w-150px text-center text-gray-800">Category <br>หมวด</th>

                                                        <th class="min-w-150px max-w-200px text-center text-gray-800">Creator<br>เขียนโดย
                                                        </th>
                                                        <th class="min-w-1px max-w-1px text-center text-gray-800">Status<br>สถานะ
                                                        </th>
                                                        <th class="min-w-100px max-w-100px text-center text-gray-800">Creating Time<br>วันที่เขียน
                                                        </th>
                                                        <th class="min-w-1px max-w-1px text-center text-gray-800">Option
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Wait Approve -->
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto"><i class="fa-solid fa-circle text-warning fs-12 me-1 animate__animated animate__flash animate__infinite animate__slow"></i>MC-SS-01 Effective
                                                            Communicative & Connected by NLP
                                                            (สื่อสารสร้างสัมพันธ์ชั้นเลิศด้วยเทคนิค NLP)
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">
                                                            <o>สมรักษ์ มีทองเงิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-warning fs-8 fs-lg-6">Waiting</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-circle-xmark me-2 text-danger"></i>Cancel request</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto"><i class="fa-solid fa-circle text-warning fs-12 me-1 animate__animated animate__flash animate__infinite animate__slow"></i>ขออนุมัติเปิดหลักสูตรลงทะเบียน คิดอย่างเป็นระบบ
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">
                                                            <o>รัตนากร มีสูงเนิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-warning fs-8 fs-lg-6">Waiting</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-circle-xmark me-2 text-danger"></i>Cancel request</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto"><i class="fa-solid fa-circle text-warning fs-12 me-1 animate__animated animate__flash animate__infinite animate__slow"></i>ขออนุมัติเปิดรุ่นหลักสูตรลงทะเบียน คิดอย่างเป็นระบบ
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center"><o>รัตนากร มีสูงเนิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-warning fs-8 fs-lg-6">Waiting</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-circle-xmark me-2 text-danger"></i>Cancel request</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto"><i class="fa-solid fa-circle text-warning fs-12 me-1 animate__animated animate__flash animate__infinite animate__slow"></i>ขออนุมัติปิดหลักสูตร คิดอย่างเป็นระบบ
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">
                                                            <o>รัตนากร มีสูงเนิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-warning fs-8 fs-lg-6">Waiting</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-circle-xmark me-2 text-danger"></i>Cancel request</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto"><i class="fa-solid fa-circle text-warning fs-12 me-1 animate__animated animate__flash animate__infinite animate__slow"></i>ขออนุมัติสิทธิใช้งานระบบ ส่วนเจ้าหน้าที่ Admin
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            สิทธิใช้งานระบบ
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">
                                                            <o>รัตนากร มีสูงเนิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-warning fs-8 fs-lg-6">Waiting</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-circle-xmark me-2 text-danger"></i>Cancel request</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Reject -->
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">MC-SS-01 Effective
                                                            Communicative & Connected by NLP
                                                            (สื่อสารสร้างสัมพันธ์ชั้นเลิศด้วยเทคนิค NLP)
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">
                                                            <o>สมรักษ์ มีทองเงิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-danger fs-8 fs-lg-6">Reject</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">ขออนุมัติเปิดหลักสูตรลงทะเบียน คิดอย่างเป็นระบบ
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">
                                                            <o>รัตนากร มีสูงเนิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-danger fs-8 fs-lg-6">Reject</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">ขออนุมัติเปิดรุ่นหลักสูตรลงทะเบียน คิดอย่างเป็นระบบ
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">
                                                            <o>รัตนากร มีสูงเนิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-danger fs-8 fs-lg-6">Reject</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">ขออนุมัติปิดหลักสูตร คิดอย่างเป็นระบบ
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">
                                                            <o>รัตนากร มีสูงเนิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-danger fs-8 fs-lg-6">Reject</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">ขออนุมัติสิทธิใช้งานระบบ ส่วนเจ้าหน้าที่ Admin
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            สิทธิใช้งานระบบ
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">
                                                            <o>รัตนากร มีสูงเนิน</o>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-danger fs-8 fs-lg-6">Reject</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- Approve -->
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">MC-SS-01 Effective
                                                            Communicative & Connected by NLP
                                                            (สื่อสารสร้างสัมพันธ์ชั้นเลิศด้วยเทคนิค NLP)
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">สมศักดิ์ มากเงิน
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-success fs-8 fs-lg-6">Approve</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">ขออนุมัติเปิดหลักสูตรลงทะเบียน คิดอย่างเป็นระบบ
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">สมศักดิ์ มากเงิน
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-success fs-8 fs-lg-6">Approve</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">ขออนุมัติเปิดรุ่นหลักสูตรลงทะเบียน คิดอย่างเป็นระบบ
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">สมศักดิ์ มากเงิน
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-success fs-8 fs-lg-6">Approve</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">ขออนุมัติปิดหลักสูตร คิดอย่างเป็นระบบ
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            หลักสูตร
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">สมศักดิ์ มากเงิน
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-success fs-8 fs-lg-6">Approve</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="cursor-pointer">
                                                        <td>
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" value="" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto">ขออนุมัติสิทธิใช้งานระบบ ส่วนเจ้าหน้าที่ Admin
                                                        </td>
                                                        <td class="fs-6 text-info font-Noto text-center fw-bold">
                                                            สิทธิใช้งานระบบ
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">สมศักดิ์ มากเงิน
                                                        </td>
                                                        <td class="text-dark fs-6 font-Noto text-center"><span class="badge badge-success fs-8 fs-lg-6">Approve</span>
                                                        </td>
                                                        <td class="text-dark fs-6 text-gray-600 font-Noto text-center">04/10/2024
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-ellipsis-vertical fs-2x"></i>
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700" href="#"><i class="fa-solid fa-eye me-2 text-gray-700"></i>View Document</a></li>
                                                                    <li><a class="dropdown-item text-danger" href="#"><i class="fa-solid fa-trash-can me-2 text-danger"></i>Delete</a></li>
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
    <!-- begin::modal -->
    <!-- begin::request -->
    <!-- end::request -->
    <!-- end::modal -->
    <!--begin::Javascript-->

    <?php include $part . "Template/TP_Js.php" ?>
    <script src="Request/Request.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>