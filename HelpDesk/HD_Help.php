<?php
session_start();
$part = '../'; 
$HelpSW = 'here show menu-here-bg';
$textHelp = 'text-primary';
$HD_Help = 'active';
$textHD_Help = 'text-primary';
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
                                <!--begin::Hero card-->
                                <?php
                                $activeQA = '';
                                $activeHelp = 'active';
                                include "HD_Header.php"
                                ?>
                                <!--end::Hero card-->
                                <!--begin::FAQ card-->
                                <div class="card">
                                    <!--begin::Body-->
                                    <div class="card-body p-10 p-lg-15">
                                        <!--begin::Classic content-->
                                        <div class="mb-13">
                                            <div class="row">
                                                <div class="col-6">
                                                    <!--begin::Intro-->
                                                    <div class="mb-15">
                                                        <!--begin::Title-->
                                                        <h4 class="fs-2x text-gray-800 w-bolder mb-6">คำถามและคำตอบ</h4>
                                                        <!--end::Title-->
                                                        <!--begin::Text-->
                                                        <p class="fw-semibold fs-4 text-gray-600 mb-2">TS ACADEMY
                                                            จะแสดงคำถามและคำตอบที่ถูกถามและตอบโดยผู้เข้าชม
                                                            บริการนี้เป็นวิธีที่ดีมากในการค้นหาข้อมูลเกี่ยวกับ TS
                                                            ACADEMY
                                                            โดยละเอียดและเจาะจงจากชุมชนผู้เข้าชมเว็บ</p>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Intro-->
                                                </div>
                                                <div class="col-6">
                                                    <!--begin::Illustration-->
                                                    <img src="assets/media/icons/canvas/ic-answerhelp.png" alt="" class="mw-100 mh-100px mh-lg-150px mb-lg-n12 animate__animated animate__fadeIn" />
                                                    <!--end::Illustration-->
                                                </div>

                                            </div>
                                        </div>
                                        <!--end::Classic content-->
                                        <!--begin::Section-->
                                        <div class="mb-17">
                                            <!--begin::Content-->
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-900 fs-2x">ความช่วยเหลือจาก TS ACADEMY</h3>
                                                <!--end::Title-->
                                                <!--begin::Link-->
                                                <a href="#" class="fs-6 fw-semibold link-primary">View All Question</a>
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
                                                            <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-500px ps-13" placeholder="Search " />
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
                                                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_help_table">
                                                            <thead>
                                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                                    <th class="min-w-150px">คำถาม</th>
                                                                    <th class="min-w-100px">คำตอบ</th>
                                                                    <th class="min-w-1px">Option</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fw-semibold text-gray-600">
                                                                <tr>
                                                                    <td class="text-dark fs-2x font-Noto">ไม่สามารถเข้าระบบได้ <br><span class="badge badge-light-warning fs-6 mb-3 fw-light">PROCESSING - กำลังดำเนินการ</span></td>
                                                                    <td>
                                                                        <o>-<o></o> <br><br>
                                                                    </td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-dark fs-2x font-Noto">ไม่สามารถลงทะเบียนหลักสูตรได้ <br><span class="badge badge-light-warning fs-6 mb-3 fw-light">PROCESSING - กำลังดำเนินการ</span></td>
                                                                    <td>-</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-dark fs-2x font-Noto">
                                                                        <i class="fa-solid fa-circle-exclamation text-warning fs-2x me-2 animate__animated animate__bounceIn animate__infinite"></i>
                                                                        ไม่สามารถทำแบบทดสอบก่อนอบรมได้ <br>
                                                                        <span class="badge badge-light-primary fs-5 mb-3 fw-light"><i class="fa-solid fa-circle-check text-primary me-2 fs-5"></i>RESOLVED - แก้ไขแล้ว</span>

                                                                    </td>
                                                                    <td>สถานที่ที่บ่มเพาะความสามารถ
                                                                        และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
                                                                        ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
                                                                        หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
                                                                        Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
                                                                        เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
                                                                        มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
                                                                        เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
                                                                        เพราะสามารถกำหนด Training Road Map และ Development
                                                                        <div class="mb-2"></div>
                                                                        <div class="separator mb-4"></div>
                                                                        <o class="fw-bold fs-5">คุณได้รับการแก้ไขจากเจ้าหน้าที่แล้วใช่ไหม</o><br>
                                                                        <button class="btn btn-light-success btn-sm me-3">แก้ไขสำเร็จ</button>
                                                                        <button class="btn btn-light-danger btn-sm">ไม่ได้รับการแก้ไข</button>
                                                                    </td>
                                                                    <td><button class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#modal_help_answer""><i class="fa-solid fa-binoculars fs-2"></i>
                                                                        </button></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-dark fs-2x font-Noto">ฉันขออนุญาติเพิ่มสิทธิเป็น Admin ได้ไหมค่ะ ? <br><span class="badge badge-light-success fs-5 mb-3 fw-light"><i class="fa-solid fa-circle-check text-success me-2 fs-5"></i>COMPLETE - สำเร็จ</span></td>
                                                                    <td>สถานที่ที่บ่มเพาะความสามารถ
                                                                        และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
                                                                        ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
                                                                        หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
                                                                        Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
                                                                        เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
                                                                        มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
                                                                        เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
                                                                        เพราะสามารถกำหนด Training Road Map และ Development</td>
                                                                    <td><button class="btn btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#modal_help_answer"><i class="fa-solid fa-binoculars fs-2"></i>
                                                                        </button></td>
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
                <!-- begin::modal -->
                <?php include 'HD_QAModalHRequest.php' ?>
                <!-- end::modal -->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <?php include "HD_MadalHelpAnswer.php" ?>
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
    <script src="HelpDesk/HD_Help.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>