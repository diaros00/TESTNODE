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
                                        ขอเบิกค่าเบี้ยเลี้ยงวิทยากรภายในและผู้ช่วยวิทยากรภายใน</h1>
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
                                        <li class="breadcrumb-item text-muted">ขอเบิกค่าเบี้ยเลี้ยงวิทยากรภายในและผู้ช่วยวิทยากรภายใน</li>
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
                                                    ขอเบิกค่าเบี้ยเลี้ยงวิทยากรภายใน / ผู้ช่วยวิทยากรภายใน
                                                </h1>
                                                <div class="mb-17">
                                                    <!--begin::Wrapper-->
                                                    <div class="mb-10">
                                                        <!--begin::Container-->
                                                        <div class="mb-15"></div>
                                                        <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                            เอกสารแนบ</div>
                                                        <div class=" card card-flush overlay mt-2 border-gray-300 border-1 shadow-1 p-5">
                                                            <p class="mb-5 fs-5 text-gray-600">เลือกเอกสารแนบ: </p>
                                                            <div class="mb-5 font-Noto fs-4">
                                                                <div class="form-check mb-4">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        แบบแจ้งกำหนดการจัดอบรม
                                                                    </label>
                                                                </div>
                                                                <div class="form-check mb-4">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        ใบลงทะเบียนอบรม
                                                                    </label>
                                                                </div>
                                                                <div class="form-check mb-4">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        อื่นๆ
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Container-->
                                                    </div>
                                                    <!--begin::Alert-->
                                                    <div class="alert alert-primary d-flex align-items-center p-5 mb-12">
                                                        <span class="font-Noto fs-5">ส่วน TS ACADEMY ขอแจ้งรายละเอียดเพื่อดำเนินการเบิก - จ่ายค่าเบี้ยเลี้ยงสำหรับวิทยากรภายใน / ผู้ช่วยวิทยากรภายใน ดังรายละเอียดต่อไปนี้</span>
                                                    </div>
                                                    <div class="mb-10">
                                                        <!--begin::Container-->
                                                        <div class="mb-15"></div>
                                                        <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                            ข้อมูลหลักสูตร</div>
                                                        <div class=" card card-flush overlay mt-2 border-gray-300 border-1 shadow-1 p-5">
                                                            <p class="mb-5 fs-5 text-gray-600">เลือกหลักสูตร: </p>
                                                            <select class="form-select mb-8" data-control="select2" data-placeholder="Select course">
                                                                <option></option>
                                                                <option value="1">DP-MTN-04 : Mechanical System (basic)</option>
                                                                <option value="1">DP-MN-03 : Basic Cutting Tool & Drill</option>
                                                                <option value="1">DP-MN-02 : Basic CNC Machining lath/Machining Center</option>
                                                                <option value="1">DP-MN-01 : Machining Programing</option>
                                                                <option value="1">DP-DC-03 : Basic Die Casting</option>

                                                            </select>


                                                            <p class="mb-5 fs-5 text-gray-600">รุ่นหลักสูตร: </p>
                                                            <select class="form-select mb-8" data-control="select2" data-placeholder="Select course">
                                                                <option></option>
                                                                <option value="1">รุ่นที่ 1 : 10/10/2024 เวลา 08.00 - 17.00 น.</option>
                                                                <option value="1">รุ่นที่ 2 : 10/10/2024 เวลา 08.00 - 17.00 น.</option>
                                                                <option value="1">รุ่นที่ 3 : 10/10/2024 เวลา 08.00 - 17.00 น.</option>
                                                                <option value="1">รุ่นที่ 4 : 10/10/2024 เวลา 08.00 - 17.00 น.</option>
                                                                <option value="1">รุ่นที่ 5 : 10/10/2024 เวลา 08.00 - 17.00 น.</option>

                                                            </select>


                                                            <p class="mb-5 fs-5 text-gray-600">ประเภทวิทยากร: </p>
                                                            <div class="mb-5 font-Noto fs-4">
                                                                <div class="form-check mb-4">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                    วิทยากรภายใน
                                                                    </label>
                                                                </div>
                                                                <div class="form-check mb-4">
                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                    ผู้ช่วยวิทยากรภายใน
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Container-->
                                                    </div>
                                                    <!--end::Alert-->
                                                    <!--end::Wrapper-->
                                                    <!--begin::Body Enroll-->
                                                    <div class="p-0">
                                                        <!--begin::hearder text-->
                                                        <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                            ข้อมูลพนักงาน</div>
                                                        <!--end::hearder text-->
                                                        <!--begin::Body-->
                                                        <div class="fs-5 fw-semibold text-gray-600 mt-4">
                                                            <!--begin::Accordion-->
                                                            <div class="accordion mb-8" id="kt_accordion_1">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="kt_accordion_1_header_1">
                                                                        <button class="accordion-button fs-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-expanded="true" aria-controls="kt_accordion_1_body_1">
                                                                            <p class="mb-4 fs-3 text-gray-700"><i class="fa-solid fa-user me-2 fs-3 text-gray-700"></i>สำหรับเฉพาะฉัน
                                                                            </p>
                                                                        </button>
                                                                    </h2>
                                                                    <div id="kt_accordion_1_body_1" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
                                                                        <div class="accordion-body">
                                                                            <!--begin::text-->
                                                                            <p class="mb-4 fs-5 text-gray-700 font-weight-light">
                                                                                คลิกเพื่อยืนยันลงทะเบียนหลักสูตรเฉพาะฉันเท่านั้น
                                                                            </p>
                                                                            <!--begin::Check box my enroll-->
                                                                            <div class="alert alert-primary d-flex align-items-center p-5">
                                                                                <!--begin::Icon-->
                                                                                <div class="form-check me-4">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                                                                                </div>
                                                                                <!--end::Icon-->

                                                                                <!--begin::Wrapper-->
                                                                                <div class="d-flex flex-column">
                                                                                    <!--begin::Title-->
                                                                                    <h4 class="mb-1 text-dark">060012 : สมศักดิ์
                                                                                        มากเงิน</h4>
                                                                                    <!--end::Title-->
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </div>
                                                                            <!--end::Check box my enroll-->
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="kt_accordion_1_header_2">
                                                                        <button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_2" aria-expanded="false" aria-controls="kt_accordion_1_body_2">
                                                                            <p class="mb-4 fs-3 text-gray-700"><i class="fa-solid fa-users me-2 fs-3 text-gray-700"></i>สำหรับพนักงาน
                                                                            </p>
                                                                        </button>
                                                                    </h2>
                                                                    <div id="kt_accordion_1_body_2" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_2" data-bs-parent="#kt_accordion_1">
                                                                        <div class="accordion-body">
                                                                            <p class="mb-4 fs-5 text-gray-700 font-weight-light">
                                                                                เลือกพนักงานต้องการลงทะเบียนหลักสูตร
                                                                            </p>
                                                                            <select class="form-select form-select-lg form-select-solid mb-8" data-control="select2" data-placeholder="Select employee" data-allow-clear="true" multiple="multiple">
                                                                                <option></option>
                                                                                <option value="1">00001 : อำพร ใจศรีเมือง</option>
                                                                                <option value="2">00002 : สุชาณี มากทอง</option>
                                                                                <option value="2">00003 : สายชล วงสุวรรค</option>
                                                                                <option value="2">00004 : ประชารัฐ ใจพรรคดี</option>
                                                                                <option value="2">00005 : ศรีอำมราพร มโนธรรม
                                                                                </option>
                                                                                <option value="2">00006 : ธรรมรัฐ วงทองใบ้</option>
                                                                            </select>
                                                                            <!--begin::text-->
                                                                            <p class="mb-4 fs-5 text-primary font-weight-light text-center">
                                                                                คลิกเพื่อยืนยันลงทะเบียนหลักสูตรรวมถึงฉันด้วย
                                                                            </p>
                                                                            <!--begin::Check box my enroll-->
                                                                            <div class="alert alert-primary d-flex align-items-center p-5">
                                                                                <!--begin::Icon-->
                                                                                <div class="form-check me-4">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                                                                                </div>
                                                                                <!--end::Icon-->

                                                                                <!--begin::Wrapper-->
                                                                                <div class="d-flex flex-column">
                                                                                    <!--begin::Title-->
                                                                                    <h4 class="mb-1 text-dark">060012 : สมศักดิ์
                                                                                        มากเงิน</h4>
                                                                                    <!--end::Title-->
                                                                                </div>
                                                                                <!--end::Wrapper-->
                                                                            </div>
                                                                            <!--end::Check box my enroll-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="kt_accordion_1_header_3">
                                                                        <button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3" aria-expanded="false" aria-controls="kt_accordion_1_body_3">
                                                                            <i class="fa-solid fa-file-arrow-up me-2 fs-3 text-gray-700"></i> อัพโหลดไฟล์
                                                                        </button>
                                                                    </h2>
                                                                    <div id="kt_accordion_1_body_3" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
                                                                        <div class="accordion-body">
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
                                                                                                Upload File Enroll Employee Course.
                                                                                            </h3>
                                                                                            <span class="fs-7 fw-semibold text-gray-500 font-Noto">อัพโหลดไฟล์
                                                                                                .CSV กดปุ่ม Upload File</span><br>
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
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Accordion-->
                                                            <div class="separator border-gray-400 mb-12"></div>
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
                                                                                <o class="fw-bold">Manager Division TS ACADEMY</o><br>ผู้จัดการ ส่วน TS ACADEMY
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
                                                                                            <option value="1" selected="selected">00002 : ปวีณา  สุตตวิบูลย์</option>
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
                                                                                <o class="fw-bold">Manager, Human Resource Management Support Division</o><br>ผู้จัดการ ส่วนสนับสนุนบริหารทรัพยากรมนุษย์
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