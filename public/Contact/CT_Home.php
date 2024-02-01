<?php 
session_start();
$part = '../'; 
$Contact = 'active';
$textContact = 'text-primary';
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
                                include "CT_Header.php"
                                ?>
                                <!--end::Hero card-->
                                <!--begin::FAQ card-->
                                <div class="card">
                                    <!--begin::Body-->
                                    <div class="card-body p-10 p-lg-15">
                                        <!--begin::Contact ts academy staff-->
                                        <div class="mb-17">
                                            <!--begin::Content-->
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-900 fs-2x">เจ้าหน้าที่ TS ACADEMY</h3>
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
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <?php for ($staff = 2; $staff <= 7; $staff++) { ?>
                                                            <div class="col-md-6 col-xxl-4 mb-3">
                                                                <!--begin::Card-->
                                                                <div class="card">
                                                                    <!--begin::Card body-->
                                                                    <div class="card-body d-flex flex-center flex-column py-9 px-5">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-100px symbol-circle mb-5">
                                                                            <img src="assets/media/avatars/300-<?php echo $staff ?>.jpg" alt="image" style="background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Name-->
                                                                        <a href="Masterdata/MS_InstructorProfile.php" class="fs-2 text-primary text-hover-primary fw-bold mb-0">Patric Watson</a>
                                                                        <!--end::Name-->
                                                                        <!--begin::course-->
                                                                        <p class="text-dark mb-6 fs-2x text-center">718<br>
                                                                            <o class="text-gray-500 mb-6 font-Noto font-weight-light" style="font-size: 18px;">02-3258000 <br>ประชาสัมสัมพันธ์ และจัดหลักสูตร
                                                                            </o>
                                                                        </p>

                                                                        <!--end::course-->

                                                                    </div>
                                                                    <!--begin::Card body-->
                                                                </div>
                                                                <!--begin::Card-->
                                                            </div>
                                                        <?php } ?>
                                                    </div>


                                                </div>
                                                <!--end::Card body-->
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Contact ts academy staff-->
                                        <!--begin::Contact Thai summit-->
                                        <div class="mb-17">
                                            <!--begin::Content-->
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-900 fs-2x">ศูนย์บริการเครือไทยซัมมิท</h3>
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
                                                                <th class="min-w-150px font-Noto">Thaisummit group<br>เครือบริษัทไทยซัมมิท</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Tel.<br>เบอร์</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fw-semibold text-gray-600">
                                                            <tr>
                                                                <td class="fs-3 font-Noto"><img src="assets/media/icons/canvas/ic-call.png" alt="" class="mw-25 mh-50px mh-lg-50px" />
                                                                    Thai Summit Automotive Co., Ltd. (Headquarter)
                                                                    <br>
                                                                    <o class="fs-5 text-primary">คุณสมชาย มากเงิน</o>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="fs-3 font-Noto">038-491304 <br>
                                                                    <o class="text-danger">ต่อ 4567</o>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fs-3 font-Noto"><img src="assets/media/icons/canvas/ic-call.png" alt="" class="mw-25 mh-50px mh-lg-50px" />
                                                                    Thai Summit PKK Co.,Ltd.
                                                                    <br>
                                                                    <o class="fs-5 text-primary">คุณปรัชญา สุวรรณภพ</o>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="fs-3 font-Noto">02-3258000 <br>
                                                                    <o class="text-danger">ต่อ 3120</o>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fs-3 font-Noto"><img src="assets/media/icons/canvas/ic-call.png" alt="" class="mw-25 mh-50px mh-lg-50px" />
                                                                    Thai Summit Component Co., Ltd.
                                                                    <br>
                                                                    <o class="fs-5 text-primary">คุณสทยา บุณมากเมือง</o>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="fs-3 font-Noto">02-144659 <br>
                                                                    <o class="text-danger">ต่อ 1123</o>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="fs-3 font-Noto"><img src="assets/media/icons/canvas/ic-call.png" alt="" class="mw-25 mh-50px mh-lg-50px" />
                                                                    Thai Summit Interseats Co., Ltd.
                                                                    <br>
                                                                    <o class="fs-5 text-primary">คุณวิราสินี ทองแก้วมณีแสง</o>
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td class="fs-3 font-Noto">02-3266033 <br>
                                                                    <o class="text-danger">ต่อ 1105</o>
                                                                </td>
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
                                        <!--end::Contact Thaisummit-->
                                        <!--begin::Contact Thai summit-->
                                        <div class="mb-17">
                                            <!--begin::Content-->
                                            <div class="d-flex flex-stack mb-5">
                                                <!--begin::Title-->
                                                <h3 class="text-gray-900 fs-2x">สถานที่ตั้ง TS Academy</h3>
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
                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-lg-4">

                                                            <div class="mb-15"></div>
                                                            <div class="mb-15"></div>
                                                            <div class="border border-primary border-active active text-center">
                                                                <img src="assets/media/icons/canvas/ic-location.png" alt="" class="mw-100 mh-125px mh-lg-200px mb-lg-n12 animate__animated animate__bounceIn" />
                                                                <div class="mb-5"></div>
                                                                <p class="text-primary fs-2x" >ที่ตั้ง<br>TS ACADEMY</p>
                                                                <p >4/3 กม 16 หมู่ 1 <br>ถนนบางนา-ตราด <br>ตำบลบางพลีใหญ่ อำเภอบางพลี <br>จังหวัดสมุทรปราการ 10540<br> โทร 0-2325-8000 <br>แฟกซ์ 0-2325-8099</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 col-lg-8">
                                                        <!-- <div id="LocationTSAcademy" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px"></div> -->
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1495.0108502034552!2d100.74479418647604!3d13.622536407861311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d5d43c98ebeb9%3A0xb7e57073bd84957b!2sTS%20TECH%20CAMP!5e0!3m2!1sth!2sth!4v1703051985697!5m2!1sth!2sth" 
                                                        height="486" class="w-100 rounded mb-2 mb-lg-0 mt-2" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Card body-->
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Contact Thaisummit-->


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
    
    <script src="Contact/CT_Contact.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>