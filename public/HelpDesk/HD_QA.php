<?php 
session_start();
$part = '../'; 
$QA = 'active';
$textQA = 'text-primary';

$HelpSW = 'here show menu-here-bg';
$textHelp = 'text-primary';
$HD_QA = 'active';
$textHD_QA = 'text-primary';

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
                                $activeQA = 'active';
                                $activeHelp = '';
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

                                            <!--begin::Row-->
                                            <div class="row mb-12">
                                                <!--begin::Col-->
                                                <div class="col-md-6 pe-md-10 mb-10 mb-md-0">
                                                    <!--begin::Title-->
                                                    <h2 class="text-gray-800 fw-bold mb-4">คำถามยอดฮิต</h2>
                                                    <!--end::Title-->
                                                    <!--begin::Accordion-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">ระบบ
                                                                Academy คืออะไร ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_4_1" class="collapse show fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_2">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                เป้าหมายของการอบรม TS Academy</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_4_2" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_3">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                ปีนี้เปิดหลักสูตรอะไรบ้าง ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_4_3" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_4">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                วิธีการแจ้งปัญหาการใช้งาน ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_4_4" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--end::Accordion-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 ps-md-10">
                                                    <!--begin::Title-->
                                                    <h2 class="text-gray-800 fw-bold mb-4">คำถามทั่วไป</h2>
                                                    <!--end::Title-->
                                                    <!--begin::Accordion-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_1">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                ระดับพนักงานเครือไทยซัมมิทต้องอบรมทั้งหมดกี่หลักสูตร?
                                                            </h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_1" class="collapse show fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_2">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                ทำไมต้องอบรมหลักสูตรใน TS ACADEMY?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_2" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_3">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                แบบทดสอบ ก่อนและหลังอบรมต้องผ่านเท่าไร?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_3" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_4">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                สิทธิของวิทยากรภายในได้รับอะไรบ้าง?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_5_4" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--end::Accordion-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-md-6 pe-md-10 mb-10 mb-md-0">
                                                    <!--begin::Title-->
                                                    <h2 class="text-gray-800 w-bolder mb-4">คำถามหลักสูตร</h2>
                                                    <!--end::Title-->
                                                    <!--begin::Accordion-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_1">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">TS
                                                                ACDEMY สามารถเทียบโอนได้ไหม ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_6_1" class="collapse show fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_2">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                พนักงานสามารถอบรมเกินกำหนดในแต่ละปีได้ไหม ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_6_2" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_3">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                ฉันสามารถย้ายรุ่นอบรมได้ไหม ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_6_3" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_4">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                ฉันเลือกลงหลักสูตรอะไรบ้าง ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_6_4" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--end::Accordion-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-md-6 ps-md-10">
                                                    <!--begin::Title-->
                                                    <h2 class="text-gray-800 fw-bold mb-4">ปัญหาใช้งาน</h2>
                                                    <!--end::Title-->
                                                    <!--begin::Accordion-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_1">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                ฉันสามารถติดต่อเจ้าหน้าที่ได้ที่ไหน?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_7_1" class="collapse show fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_2">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                ฉันไม่สามารถลงทะเบียนหลักสูตรได้ ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_7_2" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_3">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                                                ฉันสามารถเพิ่มสิทธิใช้งานได้ที่ไหน ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_7_3" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                        <!--begin::Separator-->
                                                        <div class="separator separator-dashed"></div>
                                                        <!--end::Separator-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--begin::Section-->
                                                    <div class="m-0">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_4">
                                                            <!--begin::Icon-->
                                                            <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                                                <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                                <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">ระบบ
                                                                TS ACADEMY รองรับอุปกรณ์อะไรบ้าง ?</h4>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Body-->
                                                        <div id="kt_job_7_4" class="collapse fs-6 ms-1">
                                                            <!--begin::Text-->
                                                            <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                                                First, a disclaimer – the entire process of writing a
                                                                blog post often takes more than a couple of hours, even
                                                                if you can type eighty words as per minute and your
                                                                writing skills are sharp.</div>
                                                            <!--end::Text-->
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                    <!--end::Section-->
                                                    <!--end::Accordion-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Classic content-->
                                        <!--begin::Section-->
                                        <div class="mb-17">
                                            <!--begin::Content-->
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-900 fs-2x">คำถามทั้งหมด</h3>
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
                                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                                                        <thead>
                                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                                <th class="min-w-150px">คำถาม</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th class="min-w-100px">คำตอบ</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-semibold text-gray-600">
                                                            <tr>
                                                                <td class="text-primary fs-2x font-Noto">ระบบ Academy คืออะไร ?</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>สถานที่ที่บ่มเพาะความสามารถ
                                                                    และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
                                                                    ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
                                                                    หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
                                                                    Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
                                                                    เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
                                                                    มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
                                                                    เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
                                                                    เพราะสามารถกำหนด Training Road Map และ Development</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary fs-2x font-Noto"> เป้าหมายของการอบรม TSACADEMY ?</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>สถานที่ที่บ่มเพาะความสามารถ
                                                                    และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
                                                                    ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
                                                                    หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
                                                                    Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
                                                                    เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
                                                                    มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
                                                                    เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
                                                                    เพราะสามารถกำหนด Training Road Map และ Development</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary fs-2x font-Noto">ระบบ TS ACADEMY รองรับอุปกรณ์อะไรบ้าง ?</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>สถานที่ที่บ่มเพาะความสามารถ
                                                                    และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
                                                                    ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
                                                                    หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
                                                                    Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
                                                                    เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
                                                                    มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
                                                                    เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
                                                                    เพราะสามารถกำหนด Training Road Map และ Development</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-primary fs-2x font-Noto">ฉันสามารถเพิ่มสิทธิใช้งานได้ที่ไหน ?</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>สถานที่ที่บ่มเพาะความสามารถ
                                                                    และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
                                                                    ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
                                                                    หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
                                                                    Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
                                                                    เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
                                                                    มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
                                                                    เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
                                                                    เพราะสามารถกำหนด Training Road Map และ Development</td>
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