<?php 
session_start();
$part = '../'; 
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
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-18">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center me-3">
                                    <!--begin::Title-->
                                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                                        ขออนุมัติทั่วไป</h1>
                                    <!--end::Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted">
                                            <a href="Request/RQ_From.php" class="text-muted text-hover-primary">Request</a>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item">
                                            <i class="ki-duotone ki-right fs-6"></i>
                                        </li>
                                        <!--end::Item-->
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-muted">ขออนุมัติทั่วไป</li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Breadcrumb-->
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
                                <!--begin::Post card-->
                                <div class="card">
                                    <!--begin::Body-->
                                    <div class="card-body p-lg-10 pb-lg-0">
                                        <!--begin::Layout-->
                                        <div class="d-flex flex-column flex-xl-row">
                                            <!--begin::Content-->
                                            <div class="flex-lg-row-fluid me-xl-15">
                                                <!--begin::Post content-->
                                                <h1 class="page-heading d-flex text-gray-700 fw-light fs-2x flex-column justify-content-center my-0 mb-5">
                                                    เอกสาร:
                                                </h1>
                                                <div class="mb-17">
                                                    <!--begin::Wrapper-->
                                                    <div class="mb-15">
                                                        <!--begin::Container-->
                                                        <div class=" card card-flush overlay mt-2 border-gray-300 border-1 shadow-1 p-5">
                                                            <!--begin::Image-->
                                                            <!-- <div class="row">
                                                                <div class="col-sm-4 col-lg-3">
                                                                    <img src="assets/media/stock/600x400/img-1.jpg" alt="" class="rounded" width="200" />
                                                                </div>
                                                                <div class="col-sm-8 col-lg-9">
                                                                    <a href="Course/CO_Detail.php" class="text-gray-800 text-hover-primary fs-6 fw-bold fs-2">การวางแผนการผลิตทั้งภายใน(บริษัท)และภายนอก(Supplier)</a>
                                                                    <p>
                                                                        <o class="me-3">BY ADMIN TS ACADEMY </o>
                                                                        <o class="me-3">จำนวน 20 รุ่น</o>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-circle symbol-30px me-3">
                                                                            <img src="assets/media/avatars/300-6.jpg" class="" alt="" />
                                                                        </div>
                                                                        <div class="d-flex justify-content-start flex-column">
                                                                            <span class="text-gray-500 fw-semibold d-block fs-7">Mustakeam
                                                                                Thoha</span>
                                                                        </div>
                                                                    </div>

                                                                    </p>
                                                                    <span class="badge badge-light-info fw-bold my-2">Core
                                                                        Competency</span>
                                                                    <span class="badge badge-light-primary fw-bold my-2">Power
                                                                        Skills</span>
                                                                    <span class="badge badge-light-success fw-bold my-2">LEVEL :
                                                                        T7...</span>
                                                                    <span class="badge badge-light-warning fw-bold my-2">H420000...</span>
                                                                    <span class="badge badge-light-danger fw-bold my-2">TSH</span>
                                                                </div>
                                                            </div> -->
                                                            <!--end::Image-->
                                                            <p class="mb-1 fs-5 text-gray-600">Subject / เรื่อง: </p>
                                                            <!--end::Text-->
                                                            <!--begin::select class-->
                                                            <input type="text" class="form-control mb-6 " placeholder="" />
                                                            <p class="mb-1 fs-5 text-gray-600 mb-3">Description / อธิบาย: </p>
                                                            <div class="form-floating">
                                                                <textarea class="form-control font-Noto" placeholder="Description / อธิบาย:" id="floatingTextarea2" style="height: 400px"></textarea>

                                                            </div>
                                                            <!--end::Text-->

                                                        </div>
                                                        <!--end::Container-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Body Enroll-->
                                                    <div class="p-0">
                                                        <!--begin::hearder text-->
                                                        <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                            เอกสารแนบไฟล์</div>
                                                        <!--end::hearder text-->
                                                        <!--begin::Body-->
                                                        <div class="fs-5 fw-semibold text-gray-600 mt-4 mb-12">
                                                            <!--begin::Input group-->
                                                            <div class="fv-row">
                                                                <!--begin::Dropzone-->
                                                                <div class="dropzone" id="kt_dropzonejs_example_1">
                                                                    <!--begin::Message-->
                                                                    <div class="dz-message needsclick">
                                                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                                        <!--begin::Info-->
                                                                        <div class="ms-4">
                                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">
                                                                                Upload Document File .
                                                                            </h3>
                                                                            <span class="fs-7 fw-semibold text-gray-500 font-Noto">อัพโหลดไฟล์
                                                                                .PDF,.xls, .DOC กดปุ่ม Upload File</span><br>
                                                                            <div class="input_container">
                                                                                <label for="files" class="btn btn-primary btn-sm">Upload
                                                                                    Files</label>
                                                                                <input id="files" style="display:none;" type="file">
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Dropzone-->
                                                            </div>
                                                            <!--end::Input group-->
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Body Enroll-->
                                                    <!--begin::Body Enroll-->
                                                    <div class="p-0">
                                                        <!--begin::hearder text-->
                                                        <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                            รายการอนุมัติ</div>
                                                        <!--end::hearder text-->
                                                        <!--begin::Body-->
                                                        <div class="fs-5 fw-semibold text-gray-600 mt-4">
                                                            <!--begin::Accordion-->
                                                            <p class="mb-4 fs-3 text-gray-700">Approval Review
                                                            </p>
                                                            <!--end::Accordion-->
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-5">
                                                                    <thead>
                                                                        <tr class="fw-bold fs-6 text-gray-800">
                                                                            <th></th>
                                                                            <th class="fs-4">Approve Node</th>
                                                                            <th class="fs-4">To</th>
                                                                            <th class="fs-4">Remark</th>
                                                                            <th class="fs-4">Operation</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="fs-6">
                                                                            <td>1</td>
                                                                            <td>
                                                                                <o class="fw-bold">Staff</o><br>ผู้ดำเนินการ
                                                                            </td>
                                                                            <td>060012 : สมศักดิ์ มากเงิน</td>
                                                                            <td></td>
                                                                            <td>Draft</td>
                                                                        </tr>
                                                                        <tr class="fs-6">
                                                                            <td>2</td>
                                                                            <td>
                                                                                <o class="fw-bold">Manager Department</o><br>ผู้จัดการต้นสังกัด
                                                                            </td>
                                                                            <td>
                                                                                <div class="input-group flex-nowrap">
                                                                                    <span class="input-group-text"><i class="ki-duotone ki-user">
                                                                                            <span class="path1"></span>
                                                                                            <span class="path2"></span>
                                                                                        </i></span>
                                                                                    <div class="overflow-hidden flex-grow-1">
                                                                                        <select class="form-select  rounded-start-0" data-control="select2" data-close-on-select="false" data-placeholder="Select manager department" data-allow-clear="true">
                                                                                            <option></option>
                                                                                            <option value="1">00002 : สมรักษ์ มีทองเงิน</option>
                                                                                            <option value="2">00004 : สหรัฐ รักษาถูก</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td></td>
                                                                            <td>Joint Approval</td>
                                                                        </tr>
                                                                        <tr class="fs-6">
                                                                            <td>3</td>
                                                                            <td>
                                                                                <o class="fw-bold">TS Academy Officer</o><br>เจ้าหน้าที่ TS Academy
                                                                            </td>
                                                                            <td>00048 : มาลี สายงาม</td>
                                                                            <td></td>
                                                                            <td>Joint Approval</td>
                                                                        </tr>
                                                                        <tr class="fs-6">
                                                                            <td>4</td>
                                                                            <td>
                                                                                <o class="fw-bold">End</o><br>
                                                                            </td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>End</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end::Body Enroll-->
                                                    <!--begin::Block-->
                                                    <!--end::Block-->
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Layout-->
                                            <!--begin::Sidebar-->
                                            <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                                                <!--begin::Follower class-->
                                                <div class="card card-flush bg-body card-p-2 border-3 border-dotted shadow-1 mb-9 border-primary p-5">
                                                    <!--begin::Card header-->
                                                    <div class="mb-6"></div>
                                                    <h4 class="card-title fw-bold text-gray-900 text-center mb-6">
                                                        คลิกเพื่อทำการรายถัดไป
                                                    </h4>

                                                    <!--end::Card header-->


                                                    <!--begin::Card body-->
                                                    <a href="Course/CO_Enroll.php?category=Confirm" class="btn btn-primary btn-lg mb-5 hover-scale card-p-2" style="font-family: 'Noto Sans Thai', sans-serif;">ถัดไป</a>
                                                    <!--end::Card body-->


                                                </div>
                                                <!--end::Follower class-->
                                            </div>
                                            <!--end::Sidebar-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Post card-->
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->
                    </div>
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <?php include $part . 'Template/TP_Footer.php'; ?>
                <!--end::Footer-->
            </div>
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
    <?php include $part . "Template/TP_Js.php" ?>
    <script src="Course/CO_Enroll.js"></script>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>