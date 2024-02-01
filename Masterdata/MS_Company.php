<?php
session_start();
$part = '../'; 
$textMasterdata = 'text-primary';
$OrganizationSW = 'here show menu-here-bg';
$MS_Company = 'active';
$textMS_Company = 'text-primary';

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
                                    <h1 class="page-heading d-flex text fw-bold fs-2x flex-column justify-content-center my-0">Company</h1>
                                    <!--end::Title-->
                                    <span class="font-Noto text-gray-600 fs-5">การจัดการบริษัท</span>
                                </div>
                                <!--end::Page title-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center">
                                    <a href="#" class="btn btn-icon btn-primary w-200px h-55px" data-bs-toggle="modal" data-bs-target="#modal_company_add">
                                        <i class="fa-solid fa-plus me-1 fs-5"></i>Add A New Company
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
                                                <h3>บริษัททั้งหมด 30 รายการ</h3>
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
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_company_table">
                                                <thead>
                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-1px">NO.</th>
                                                        <th class="min-w-50px text-center">CODE</th>
                                                        <th class="min-w-200px text-center">NAME</th>
                                                        <th class="min-w-20px text-center">STATUS</th>
                                                        <th class="min-w-1px text-center">ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">1</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSA</td>
                                                        <td class="fs-3">
                                                            Thai Summit Auto Press Co, Ltd.<br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท โอโต เพรส จำกัด</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">2</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSLA</td>
                                                        <td class="fs-3">
                                                            Thai Summit Laemchabang Autoparts Co, Ltd.
                                                            <br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท แหลมฉบัง โอโตพาร์ท จำกัด</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">3</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSB</td>
                                                        <td class="fs-3">
                                                            Thai Summit Banpho Co, Ltd.
                                                            <br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท บ้านโพธิ์ จำกัด</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">4</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSP</td>
                                                        <td class="fs-3">
                                                            Thai Summit Plastech Co., Ltd.
                                                            <br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท พลาสเทค จำกัด</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">5</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSRA</td>
                                                        <td class="fs-3">
                                                            Thai Summit Rayong Autoparts Industry Co., Ltd
                                                            <br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท ระยอง โอโตพาร์ท อินดัสตรี จำกัด</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">6</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSI</td>
                                                        <td class="fs-3">
                                                            Thai Summit Interseats Co., Ltd
                                                            <br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท อินเตอร์ซีทส์ จำกัด</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">7</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSH</td>
                                                        <td class="fs-3">
                                                            Thai Summit Harness Public Co., Ltd
                                                            <br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท ฮาร์เนส จำกัด (มหาชน)</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">8</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSCP</td>
                                                        <td class="fs-3">
                                                            Thai Summit Cable & Part Co., Ltd
                                                            <br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท เคเบิ้ล แอนด์ พาร์ท จำกัด</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">9</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSCOM</td>
                                                        <td class="fs-3">
                                                            Thai Summit Component Co., Ltd
                                                            <br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท คอมโพเน้นท์ จำกัด</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">10</td>
                                                        <td class="text-primary fs-3 font-Noto text-center">TSE</td>
                                                        <td class="fs-3">
                                                            Thai Summit Engineering Co., Ltd
                                                            <br>
                                                            <o class="fs-6 text-dark font-Noto">บริษัท ไทยซัมมิท เอนจิเนียริง จำกัด</o>
                                                        </td>
                                                        <td class="text-dark text-center fw-bold"><span class="badge badge-light-success font-Noto fs-5">ENABLE</span></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-primary btn-sm btn-group" role="group">
                                                                <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="fa-solid fa-list me-1"></i>Option
                                                                </div>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_company_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
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
    <?php include "MS_ModalCompanyAdd.php" ?>
    <?php include "MS_ModalCompanyEdit.php" ?>
    <!-- end::request -->
    <!-- end::modal -->
    <!--begin::Javascript-->

    <?php include $part . "Template/TP_Js.php" ?>
    <script>
        $("#datepicker_add").daterangepicker({
            locale: {
                format: "YYYY"
            }

        });
        $("#datepicker_edit").daterangepicker({
            locale: {
                format: "YYYY"
            }

        });
    </script>
    <script src="Masterdata/MS_Company.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>