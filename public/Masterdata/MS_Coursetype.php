<?php
session_start();
$part = '../'; 
$textMasterdata = 'text-primary';
$CurriculumSW = 'here show menu-here-bg';
$MS_Coursetype = 'active';
$textMS_Coursetype = 'text-primary';

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
                                    <h1 class="page-heading d-flex text fw-bold fs-2x flex-column justify-content-center my-0">COURSE TYPE</h1>
                                    <!--end::Title-->
                                    <span class="font-Noto text-gray-600 fs-5">การจัดการประเภทหลักสูตร</span>
                                </div>
                                <!--end::Page title-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center">
                                    <a href="#" class="btn btn-icon btn-primary w-200px h-55px" data-bs-toggle="modal" data-bs-target="#modal_coursetype_add">
                                        <i class="fa-solid fa-plus me-1 fs-5"></i>Add A New Course Type
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
                                                <h3>ทั้งหมด 6 รายการ</h3>
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
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_coursetype_table">
                                                <thead>
                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-1px">NO.</th>
                                                        <th class="min-w-1px text-center">CODE</th>
                                                        <th class="min-w-300px text-center">TITLE</th>
                                                        <th class="min-w-100px text-center">CURRICULUM</th>
                                                        <th class="min-w-10px text-center">STATUS</th>
                                                        <th class="min-w-1px text-center">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">1</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">FC</td>
                                                        <td class="text-primary fs-3 font-Noto">Functional Competency</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Functional Competency</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage coursetype</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">2</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">SS</td>
                                                        <td class="text-primary fs-3 font-Noto">Soft Skills</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Managerial Competency</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage coursetype</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">3</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">MC</td>
                                                        <td class="text-primary fs-3 font-Noto">Managerial Competency</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Managerial Competency</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage coursetype</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">4</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">FE</td>
                                                        <td class="text-primary fs-3 font-Noto">Functional Engineering</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Engineering Course</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage coursetype</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">5</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">BE</td>
                                                        <td class="text-primary fs-3 font-Noto">Basic Engineering</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Engineering Course</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage coursetype</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">6</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">BQ</td>
                                                        <td class="text-primary fs-3 font-Noto">หลักสูตรด้านระบบคุณภาพ</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Core Competency</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage coursetype</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">7</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">BS</td>
                                                        <td class="text-primary fs-3 font-Noto">หลักสูตรด้านความปลอดภัย</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Core Competency</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage coursetype</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">8</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">PS</td>
                                                        <td class="text-primary fs-3 font-Noto">Power Skills</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Functional Competency</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage coursetype</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">9</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">QS</td>
                                                        <td class="text-primary fs-3 font-Noto">Quality Skills</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Functional Competency</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage type course</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">10</td>
                                                        <td class="text-danger fs-3 font-Noto text-center">BOS</td>
                                                        <td class="text-primary fs-3 font-Noto">Basic Operation Skill</td>
                                                        <td class="text-gray-500 fs-3 font-Noto text-center">Functional Competency</td>
                                                        <td class="fs-3 text-center text-dark"><span class="badge badge-light-success fs-5 font-Noto">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_manage"><i class="fa-solid fa-list me-2 text-gray-700 fs-3"></i>Manage type course</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_coursetype_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
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
    <?php include "MS_ModalCoursetypeAdd.php" ?>
    <?php include "MS_ModalCoursetypeEdit.php" ?>
    <?php include "MS_ModalCoursetypeManage.php" ?>
    <!-- end::request -->
    <!-- end::modal -->
    <!--begin::Javascript-->

    <?php include $part . "Template/TP_Js.php" ?>
    <script src="Masterdata/MS_Coursetype.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>