<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>TS ACADEMY | THAISUMMIT GROUP</title>
    <?php include "Template/TP_Css.php" ?>
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
            <?php include 'Template/TP_Header.php'; ?>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <div class="mb-15"></div>
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <!--begin::User menu-->
                                        <div class="card mb-5 mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body pt-15 px-0">
                                                <!--begin::Member-->
                                                <div class="d-flex flex-column text-center mb-9 px-9">
                                                    <!--begin::Photo-->
                                                    <div class="symbol symbol-150px symbol-lg-150px mb-4">
                                                        <img src="assets/media/avatars/300-3.jpg" class="" alt="" />
                                                    </div>
                                                    <!--end::Photo-->
                                                    <!--begin::Info-->
                                                    <div class="text-center">
                                                        <!--begin::Name-->
                                                        <a href="pages/user-profile/overview.html" class="text-gray-800 fw-bold text-hover-primary fs-4">สมศักดิ์
                                                            มากเงิน</a>
                                                        <!--end::Name-->
                                                        <!--begin::Position-->
                                                        <span class="text-muted d-block fw-semibold font-Noto">พนักงานทั่วไป</span>
                                                        <span class="badge badge-light-success">PASS</span>
                                                        <!--end::Position-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Row-->
                                                <div class="row px-9 mb-4">
                                                    <!--begin::Col-->
                                                    <div class="col-4 text-center">
                                                        <div class="text-gray-800 fw-bold fs-3">
                                                            <span class="m-0" data-kt-countup="true" data-kt-countup-value="8">0</span>
                                                        </div>
                                                        <span class="text-gray-500 fs-8 d-block fw-bold">TOTAL</span>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-4 text-center">
                                                        <div class="text-gray-800 fw-bold fs-3">
                                                            <span class="m-0" data-kt-countup="true" data-kt-countup-value="2">0</span>
                                                        </div>
                                                        <span class="text-gray-500 fs-8 d-block fw-bold">TRAINING</span>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-4 text-center">
                                                        <div class="text-gray-800 fw-bold fs-3">
                                                            <span class="m-0" data-kt-countup="true" data-kt-countup-value="6">0</span>
                                                        </div>
                                                        <span class="text-gray-500 fs-8 d-block fw-bold">REMAIN</span>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Navbar-->
                                                <div class="m-0">
                                                    <div class="mb-15"></div>
                                                    <!--begin::chart this year-->
                                                    <div id="chart-this-year" class="px-2" style="height: 100%"></div>
                                                    <p class="text-center text-primary">Percentage in 2022</p>
                                                    <!--begin::Navs-->
                                                </div>
                                                <!--end::Navbar-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::User menu-->
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <!--begin::Main form-->
                                        <div class="card card-flush mb-10 gradient-warning">
                                            
                                            <!--begin::Header-->
                                            <div class="card-header justify-content-center align-items-center pt-4 text-center">
                                                <!--begin::Illustration-->
                                            <img src="assets/media/icons/canvas/IC-Home-Welcome.png" class="h-200px me-15" alt="" />
                                            <!--end::Illustration-->
                                                <h1 class="text-white font-weight-boldest">WELCOME TO TS ACADEMY SYSTEM! </h1>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body pt-2 pb-0 text-center">
                                                <!--begin::Input-->
                                                <p class="text-white-50 font-weight-light">ระบบการจัดการหลักสูตรฝึกอบรมของพนักงาน<br>โครงสร้าง TS ACADEMY</p>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <div class="mb-15"></div>
                                        <h2 class="text-dark">Feeds</h2>
                                        <div class="card card-flush mb-10 pt-5 px-5 py-5">
                                            <div id="kt_carousel_3_carousel" class="carousel carousel-custom slide" data-bs-ride="carousel" data-bs-interval="10000">
                                                <!--begin::Heading-->
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <!--begin::Label-->
                                                    <!--begin::Label-->
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="fs-4 fw-bold pe-2">TOP NEWS</span><br>
                                                        <span class="text-muted mt-1 fw-semibold fs-7">ข่าวประชาสัมพันธ์ล่าสุด</span>
                                                    </h3>
                                                    <!--end::Label-->
                                                    <!--end::Label-->

                                                    <!--begin::Carousel Indicators-->
                                                    <ol class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary">
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="0" class="ms-1 active"></li>
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="1" class="ms-1"></li>
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="2" class="ms-1"></li>
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="3" class="ms-1"></li>
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="4" class="ms-1"></li>
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="5" class="ms-1"></li>
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="6" class="ms-1"></li>
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="7" class="ms-1"></li>
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="8" class="ms-1"></li>
                                                        <li data-bs-target="#kt_carousel_3_carousel" data-bs-slide-to="9" class="ms-1"></li>
                                                    </ol>
                                                    <!--end::Carousel Indicators-->
                                                </div>
                                                <!--end::Heading-->

                                                <!--begin::Carousel-->
                                                <div class="carousel-inner pt-8">
                                                    <!--begin::Item-->
                                                    <div class="carousel-item active">
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-325px mb-5" style="background-image:url('assets/media/stock/600x400/img-70.jpg')">
                                                        </div>
                                                        <h3 class="font-size-h1 font-weight-bolder">Bootstrap Admin -How To Get Started Tutorial.</h3>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <!--begin:: ยอดวิวและวันที่-->
                                                            <span class="text-gray-500 fw-bold"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                            <!--end::Date-->
                                                            <!--begin::หมวด-->
                                                            <span class="badge badge-light-info text-uppercase fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="carousel-item">
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-325px mb-5" style="background-image:url('assets/media/stock/600x400/img-71.jpg')">
                                                        </div>
                                                        <h3 class="font-size-h1 font-weight-bolder">Bootstrap Admin -How To Get Started Tutorial.</h3>
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <!--begin:: ยอดวิวและวันที่-->
                                                            <span class="text-gray-500 fw-bold"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                            <!--end::Date-->
                                                            <!--begin::หมวด-->
                                                            <span class="badge badge-light-info text-uppercase fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="carousel-item">
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-325px mb-5" style="background-image:url('assets/media/stock/600x400/img-72.jpg')">
                                                        </div>
                                                        <h3 class="font-size-h1 font-weight-bolder">Bootstrap Admin -How To Get Started Tutorial.</h3>
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <!--begin:: ยอดวิวและวันที่-->
                                                            <span class="text-gray-500 fw-bold"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                            <!--end::Date-->
                                                            <!--begin::หมวด-->
                                                            <span class="badge badge-light-info text-uppercase fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="carousel-item">
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-325px mb-5" style="background-image:url('assets/media/stock/600x400/img-73.jpg')">
                                                        </div>
                                                        <h3 class="font-size-h1 font-weight-bolder">Bootstrap Admin -How To Get Started Tutorial.</h3>
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <!--begin:: ยอดวิวและวันที่-->
                                                            <span class="text-gray-500 fw-bold"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                            <!--end::Date-->
                                                            <!--begin::หมวด-->
                                                            <span class="badge badge-light-info text-uppercase fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="carousel-item">
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-325px mb-5" style="background-image:url('assets/media/stock/600x400/img-74.jpg')">
                                                        </div>
                                                        <h3 class="font-size-h1 font-weight-bolder">Bootstrap Admin -How To Get Started Tutorial.</h3>
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <!--begin:: ยอดวิวและวันที่-->
                                                            <span class="text-gray-500 fw-bold"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                            <!--end::Date-->
                                                            <!--begin::หมวด-->
                                                            <span class="badge badge-light-info text-uppercase fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="carousel-item">
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-325px mb-5" style="background-image:url('assets/media/stock/600x400/img-75.jpg')">
                                                        </div>
                                                        <h3 class="font-size-h1 font-weight-bolder">Bootstrap Admin -How To Get Started Tutorial.</h3>
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <!--begin:: ยอดวิวและวันที่-->
                                                            <span class="text-gray-500 fw-bold"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                            <!--end::Date-->
                                                            <!--begin::หมวด-->
                                                            <span class="badge badge-light-info text-uppercase fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="carousel-item">
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-325px mb-5" style="background-image:url('assets/media/stock/600x400/img-76.jpg')">
                                                        </div>
                                                        <h3 class="font-size-h1 font-weight-bolder">Bootstrap Admin -How To Get Started Tutorial.</h3>
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <!--begin:: ยอดวิวและวันที่-->
                                                            <span class="text-gray-500 fw-bold"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                            <!--end::Date-->
                                                            <!--begin::หมวด-->
                                                            <span class="badge badge-light-info text-uppercase fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="carousel-item">
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-325px mb-5" style="background-image:url('assets/media/stock/600x400/img-77.jpg')">
                                                        </div>
                                                        <h3 class="font-size-h1 font-weight-bolder">Bootstrap Admin -How To Get Started Tutorial.</h3>
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <!--begin:: ยอดวิวและวันที่-->
                                                            <span class="text-gray-500 fw-bold"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                            <!--end::Date-->
                                                            <!--begin::หมวด-->
                                                            <span class="badge badge-light-info text-uppercase fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="carousel-item">
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-325px mb-5" style="background-image:url('assets/media/stock/600x400/img-78.jpg')">
                                                        </div>
                                                        <h3 class="font-size-h1 font-weight-bolder">Bootstrap Admin -How To Get Started Tutorial.</h3>
                                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <!--begin:: ยอดวิวและวันที่-->
                                                            <span class="text-gray-500 fw-bold"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                                                2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                                            <!--end::Date-->
                                                            <!--begin::หมวด-->
                                                            <span class="badge badge-light-info text-uppercase fw-bold my-2">COURSE</span>
                                                            <!--end::Label-->
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Carousel-->
                                            </div>
                                        </div>
                                        <div class="card card-flush mb-10 pt-5 px-5 py-5">
                                            <!--begin::Header-->
                                            <h3 class="card-title align-items-start flex-column mb-5">
                                                <span class="fs-4 fw-bold pe-2">แนะนำหลักสูตรการอบรมของปีนี้</span><br>
                                                <span class="text-muted mt-1 fw-semibold fs-7">ทั้งหมด 6 หลักสูตร</span>
                                            </h3>
                                            <!--end::Header-->
                                            <!-- begin::body -->
                                            <!--begin::Card body-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-90px symbol-2by3 me-4">
                                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-14.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="m-0">
                                                    <a href="News/NS_Post.php" class="text-warning fw-bold text-hover-primary fs-6"><i class="fa-solid fa-circle-exclamation text-warning me-1 fs-3 animate__animated animate__fadeIn animate__infinite"></i> Basic Cutting Tool & Drill<br>
                                                        <o class="text-gray-600 fw-semibold">Core Competency</o><br>
                                                        <span class="badge badge-light-warning fw-bold my-2 fs-8">ประเมินความพึงพอใจไม่สำเร็จ</span>
                                                    </a>

                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <div class="separator border-2 mb-5"></div>
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-90px symbol-2by3 me-4">
                                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-15.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="m-0">
                                                    <a href="News/NS_Post.php" class="text-warning fw-bold text-hover-primary fs-6"><i class="fa-solid fa-circle-exclamation text-warning me-1 fs-3 animate__animated animate__fadeIn animate__infinite"></i> Pneumatic Systems (for Die Casting)<br>
                                                        <o class="text-gray-600 fw-semibold">Core Competency</o><br>
                                                        <span class="badge badge-light-warning fw-bold my-2 fs-8">POST-TEST ไม่สำเร็จ</span>
                                                    </a>

                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <div class="separator border-2 mb-5"></div>
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-90px symbol-2by3 me-4">
                                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-16.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="m-0">
                                                    <a href="News/NS_Post.php" class="text-info fw-bold text-hover-primary fs-6">Basic Cutting Tool & Drill<br>
                                                        <o class="text-gray-600 fw-semibold">Core Competency</o><br>
                                                        <span class="badge badge-light-info fw-bold my-2 fs-8">เข้าชั้นเรียน</span>
                                                    </a>

                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <div class="separator border-2 mb-5"></div>
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-90px symbol-2by3 me-4">
                                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-17.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="m-0">
                                                    <a href="News/NS_Post.php" class="text-gray-900 fw-bold text-hover-primary fs-6">การใช้งานหุ่นยนต์ในอุตสาหกรรมชิ้นส่วนยานยนต์<br>
                                                        <o class="text-gray-600 fw-semibold">Core Competency</o><br>
                                                    </a>

                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <div class="separator border-2 mb-5"></div>
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-90px symbol-2by3 me-4">
                                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-18.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="m-0">
                                                    <a href="News/NS_Post.php" class="text-gray-900 fw-bold text-hover-primary fs-6">Hydraulic Systems (for Die Casting)<br>
                                                        <o class="text-gray-600 fw-semibold">Core Competency</o><br>
                                                        <span class="badge badge-light-secondary fw-bold my-2 fs-8">รอกำหนดการอบรม</span>
                                                    </a>

                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <div class="separator border-2 mb-5"></div>
                                            <div class="d-flex align-items-center mb-5">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-90px symbol-2by3 me-4">
                                                    <div class="symbol-label" style="background-image: url('assets/media/stock/600x400/img-79.jpg')">
                                                    </div>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Title-->
                                                <div class="m-0">
                                                    <a href="News/NS_Post.php" class="text-success fw-bold text-hover-primary fs-6"><i class="fa-solid fa-circle-check me-2 fs-3 text-success"></i>New Dies purchasing standard<br>
                                                        <o class="text-gray-600 fw-semibold">Core Competency</o><br>
                                                        <span class="badge badge-light-success fw-bold my-2 fs-8">สำเร็จหลักสูตร</span>
                                                    </a>

                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Item-->
                                            <div class="separator border-2 mb-5"></div>
                                            <!--end::Card body-->
                                            <!-- end::body -->
                                        </div>
                                        <!--end::Main form-->
                                    </div>
                                    <div class="col-sm-12 col-lg-3">
                                        <!--begin::My Approve-->
                                        <div class="card mb-5 mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-900">My approval</span>
                                                    <span class="text-muted mt-1 fw-semibold fs-7">รายการอนุมัติของฉัน</span>
                                                </h3>
                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4 font-Noto">Option Request</div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Approve list</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Request list</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">Request from</a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->
                                                    </div>
                                                    <!--end::Menu 2-->
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body pt-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack font-Noto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติลงทะเบียนหลักสูตร Mechanical System (basic) รุ่นที่ 1 วันที่ 25/10/2024">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-warning pulse pulse-danger me-2">
                                                        <i class="las la-file-invoice fs-1"></i>
                                                        <span class="pulse-ring"></span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-3">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติลงทะเบียนหลักสูตร NLP SYSTEM...</a>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-warning">รออนุมัติ</span>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติลงทะเบียนหลักสูตร NLP SYSTEM รุ่นที่ 2 วันที่ 21/10/2024">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-warning pulse pulse-danger me-2">
                                                        <i class="las la-file-invoice fs-1"></i>
                                                        <span class="pulse-ring"></span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติลงทะเบียนหลักสูตร NLP SYSTEM...</a>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-warning">รออนุมัติ</span>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติเข้าใช้งานระบบในส่วนของเจ้าหน้าที่ Admin">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-warning pulse pulse-danger me-2">
                                                        <i class="las la-file-invoice fs-1"></i>
                                                        <span class="pulse-ring"></span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติเข้าใช้งานระบบ...</a>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-warning">รออนุมัติ</span>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติลงทะเบียนหลักสูตร New Dies purchasing standard รุ่นที่ 1 วันที่ 20/10/2024">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-warning pulse pulse-danger me-2">
                                                        <i class="las la-file-invoice fs-1"></i>
                                                        <span class="pulse-ring"></span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติลงทะเบียนหลักสูตร New Dies...</a>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-warning">รออนุมัติ</span>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติลงทะเบียนหลักสูตร Mechanical System (basic) รุ่นที่ 1 วันที่ 25/10/2024">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-warning pulse pulse-danger me-2">
                                                        <i class="las la-file-invoice fs-1"></i>
                                                        <span class="pulse-ring"></span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติลงทะเบียนหลักสูตร Mechan...</a>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-warning">รออนุมัติ</span>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::My Approve-->
                                        <!--begin::My Approve-->
                                        <div class="card mb-5 mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-900">Timeline Request</span>
                                                    <span class="text-muted mt-1 fw-semibold fs-7">ติดตามเอกสารอนุมัติ</span>
                                                </h3>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body pt-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack font-Noto" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติลงทะเบียนหลักสูตร Mechanical System (basic) รุ่นที่ 1 วันที่ 25/10/2024">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-secondary me-2">
                                                        <i class="ki-duotone ki-time fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติลงทะเบียนหลักสูตร NLP SYSTEM...</a>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-warning">รออนุมัติ</span>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-gray-700">อธิติยา ใจมา</span>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติลงทะเบียนหลักสูตร NLP SYSTEM รุ่นที่ 2 วันที่ 21/10/2024">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-secondary me-2">
                                                        <i class="ki-duotone ki-time fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติลงทะเบียนหลักสูตร NLP SYSTEM...</a>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-warning">รออนุมัติ</span>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-gray-700">อธิติยา ใจมา</span>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติเข้าใช้งานระบบในส่วนของเจ้าหน้าที่ Admin">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-secondary me-2">
                                                        <i class="ki-duotone ki-time fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติเข้าใช้งานระบบ...</a>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-warning">รออนุมัติ</span>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-gray-700">อธิติยา ใจมา</span>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติลงทะเบียนหลักสูตร New Dies purchasing standard รุ่นที่ 1 วันที่ 20/10/2024">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-success me-2">
                                                        <i class="ki-duotone ki-check-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติลงทะเบียนหลักสูตร New Dies...</a>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-success">อนุมัติ</span>
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-4"></div>
                                                <!--end::Separator-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top" title="อนุมัติลงทะเบียนหลักสูตร Mechanical System (basic) รุ่นที่ 1 วันที่ 25/10/2024">
                                                    <!--begin::Symbol-->
                                                    <div class="btn btn-icon btn-light-success me-2">
                                                        <i class="ki-duotone ki-check-circle fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <!--begin:Author-->
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">อนุมัติลงทะเบียนหลักสูตร Mechan...</a><br>
                                                            <span class="fw-semibold d-block fs-7 font-Noto text-success">อนุมัติ</span>
                                                            
                                                        </div>
                                                        <!--end:Author-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::My Approve-->
                                    </div>
                                </div>



                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
                    <?php include 'Template/TP_Footer.php'; ?>
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
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/custom/pages/social/feeds.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>
    <script src="Home/HM_User.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>