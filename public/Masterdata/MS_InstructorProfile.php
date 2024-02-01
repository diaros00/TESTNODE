<?php 
$part = '../'; 
$Instructor = 'active';
$textInstructor = 'text-primary';
$CourseSW = 'here show menu-here-bg';
$textCourse = 'text-primary';
?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../" />
    <title>TS ACADEMY | THAISUMMIT GROUP</title>
    <?php include $part."Template/TP_Css.php" ?>
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
            <?php include $part.'Template/TP_Header.php'; ?>
            <!--end::Header-->
            <!--begin::Content wrapper-->
            <div class="d-flex flex-column flex-column-fluid">
                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-18">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                        <!--begin::Page title-->
                        <div class="page-title d-flex flex-column justify-content-center me-3">
                            <!--begin::Title-->
                            <h1
                                class="page-heading d-flex text-gray-800 fw-bold fs-3 flex-column justify-content-center my-0">
                                Profile instructor</h1>
                            <!--end::Title-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">
                                    <a href="Masterdata/MS_Instructor.php" class="text-muted text-hover-primary">Instructor</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <i class="ki-duotone ki-right fs-6"></i>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="breadcrumb-item text-muted">Profile</li>
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
                        <!--begin::Layout-->
                        <div class="d-flex flex-column flex-lg-row">
                            <!--begin::Sidebar-->
                            <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
                                <!--begin::Card-->
                                <div class="card mb-5 mb-xl-8">
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Summary-->
                                        <!--begin::User Info-->
                                        <div class="d-flex flex-center flex-column py-5">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-200px symbol-circle mb-7">
                                                <img src="assets/media/avatars/300-1.png" alt="image" style="background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);"/>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <p class="fs-2 text-gray-800 text-hover-primary fw-bold mb-3 font-Noto">
                                                จารึก แสงเพชร <br>
                                                <o class="fs-2 text-gray-600 text-hover-primary fw-bold">Emma Smith
                                                </o>
                                            </p>

                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="mb-9">
                                                <!--begin::Badge-->
                                                <div class="badge badge-lg badge-light-primary d-inline font-Noto">
                                                    วิทยากรภายนอก
                                                </div>
                                                <!--begin::Badge-->
                                            </div>
                                            <!--end::Position-->
                                        </div>
                                        <!--end::User Info-->
                                        <!--end::Summary-->
                                        <!--begin::Details toggle-->
                                        <div class="d-flex flex-stack fs-4 py-3">
                                            <div class="fw-bold rotate collapsible font-Noto" data-bs-toggle="collapse"
                                                href="#kt_user_view_details" role="button" aria-expanded="false"
                                                aria-controls="kt_user_view_details">ข้อมูลทั่วไป
                                                <span class="ms-2 rotate-180">
                                                </span></div>
                                        </div>
                                        <!--end::Details toggle-->
                                        <div class="separator"></div>
                                        <!--begin::Details content-->
                                        <div id="kt_user_view_details" class="collapse show font-Noto">
                                            <div class="pb-5 fs-6">
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5 font-Noto">INSTRUCTOR ID / รหัสวิทยากร</div>
                                                <div class="text-gray-600">ID-45453423</div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Position / ตำแหน่ง</div>
                                                <div class="text-gray-600">
                                                    <a href="#" class="text-gray-600 text-hover-primary">นักชำนาญการ</a>
                                                </div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bold mt-5">Academy / สถาบัน</div>
                                                <div class="text-gray-600">ABC COMPANY.</div>
                                            </div>
                                        </div>
                                        <!--end::Details content-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                                <!--begin::Connected Accounts-->
                                <div class="card mb-5 mb-xl-8 font-Noto">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <div class="card-title">
                                            <h3 class="fw-bold m-0">การติดต่อ</h3>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-1">
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Email / อีเมล์</div>
                                        <div class="text-gray-600">
                                            <a href="#" class="text-gray-600 text-hover-primary">info@keenthemes.com</a>
                                        </div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Call / เบอร์โทร</div>
                                        <div class="text-gray-600">02-12345678</div>
                                        <!--begin::Details item-->
                                        <!--begin::Details item-->
                                        <div class="fw-bold mt-5">Address / ที่อยู่</div>
                                        <div class="text-gray-600">101 Collin Street,
                                            <br />Melbourne 3000 VIC
                                            <br />Australia</div>
                                    </div>
                                    <!--end::Card body-->

                                </div>
                                <!--end::Connected Accounts-->
                            </div>
                            <!--end::Sidebar-->
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid ms-lg-15">
                                <!--begin:::Tabs-->
                                <ul
                                    class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                            href="#kt_user_view_overview_tab">Profile</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                            data-bs-toggle="tab" href="#kt_user_view_overview_security">Course</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item ms-auto">
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold py-4 w-250px fs-6"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">
                                                    Payments</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="#" class="menu-link px-5">Create invoice</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="#" class="menu-link flex-stack px-5">Create payments
                                                    <span class="ms-2" data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference">
                                                        <i class="ki-duotone ki-information fs-7">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span></a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="left-start">
                                                <a href="#" class="menu-link px-5">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-5">Apps</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-5">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-5">Statements</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <input class="form-check-input w-30px h-20px"
                                                                    type="checkbox" value="" name="notifications"
                                                                    checked="checked" id="kt_user_menu_notifications" />
                                                                <span class="form-check-label text-muted fs-6"
                                                                    for="kt_user_menu_notifications">Notifications</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-3"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">
                                                    Account</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="#" class="menu-link px-5">Reports</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 my-1">
                                                <a href="#" class="menu-link px-5">Account Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="#" class="menu-link text-danger px-5">Delete customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu-->
                                    </li>
                                    <!--end:::Tab item-->
                                </ul>
                                <!--end:::Tabs-->
                                <!--begin:::Tab content-->
                                <div class="tab-content" id="myTabContent">
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade show active" id="kt_user_view_overview_tab"
                                        role="tabpanel">
                                        <!--begin::Card-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">ประวัติวิทยากร</h2>
                                                    <div class="fs-6 fw-semibold text-muted">Discription</div>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body p-9 pt-4">
                                                <!--begin::Tab Content-->
                                                <p class="fs-4">
                                                    ฉันคือผู้เชียวชาญในด้านระบบการจัดการองค์กร ไม่ว่าจะเป็น ISO, IATF ,
                                                    5S
                                                    , QCC , KM ฯลฯ ซึ่งเป็นการเรียนรู้จากประสบการณ์ การลงมือท าจริง
                                                    ตั้งแต่เป็น
                                                    พนักงานระดับปฏิบัติการ จนไปเป็นผู้บริหาร จึงท าให้เห็นภาพ
                                                    และจับต้องได้
                                                    รักในการสอนและบอกเล่าเรื่องราวความรู้ของตนเองให้ผู้อื่นฟัง ผ่านค
                                                    าพูดง่ายๆ
                                                    ลดความเป็นวิชาการ
                                                    เพิ่มสัดส่วนตัวอย่างของความเป็นจริงเพื่อให้ผู้ฟังมีความ
                                                    เข้าใจมากยิ่งขึ้น
                                                </p>
                                                <!--end::Tab Content-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                        <!--begin::Tasks-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">ประสบการณ์ในการทำงาน</h2>
                                                    <div class="fs-6 fw-semibold text-muted">EXPERIENCES
                                                    </div>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column">
                                                <p>2011- Present : Training and Consult Business (Founder: Born2Learn
                                                    Co., Ltd)</p>
                                                <p>2007- 2011 : Training Director @ITCompanion Co., Ltd.</p>
                                                <p>2005-2007 : Senior Engineer, Trainer @ITCompanion Co., Ltd.</p>
                                                <p>2002-2005 : Engineer & Programmer @Sony Technology Thailand.</p>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Tasks-->
                                        <!--begin::Tasks-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">การศึกษา</h2>
                                                    <div class="fs-6 fw-semibold text-muted">EDUCATION
                                                    </div>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column">
                                                <p>Scholarship : AOTS Japan to study in IT’s Engineering program at
                                                    Yokohama, Japan, 2006 </p>
                                                <p>Bachelor’s Degree : Engineering Faculty on Kasetsart University</p>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Tasks-->
                                        <!--begin::Tasks-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">ผลงาน / ทักษะชำนาญการ / ใบรับรอง</h2>
                                                    <div class="fs-6 fw-semibold text-muted">PORTFOLIO / SKILL /
                                                        CERTIFICATES
                                                    </div>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column">
                                                <p>SKILL : Training IT Product At NSTDA Academy, Microsoft, EGAT, CAT
                                                    Telecom, ACIS,KBank etc.</p>
                                                <p>SKILL : IT Consulting and Implement</p>
                                                <p>CERTIFICATES : Microsoft Certified Solutions Associate</p>
                                                <p>CERTIFICATES : Cisco Certifications</p>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Tasks-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                                        <!--begin::Tasks-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">หลักสูตร</h2>
                                                    <div class="fs-6 fw-semibold text-muted">COURSE
                                                    </div>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body">
                                                <!--begin::Item-->
                                                <div class="row">
                                                    <div class="col-3 fw-semibold">
                                                        <center>
                                                        <img src="assets/media/stock/600x400/img-1.jpg" alt=""
                                                            class="rounded" width="100" />
                                                        </center></div>
                                                    <div class="col-9"><a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary">หลักสูตรการจัดการทั่วไป
                                                            <br>
                                                            <o class="fs-7 text-muted font-Noto">10 รุ่น</o>
                                                        </a></div>
                                                        <div class="separator separator-dashed my-4"></div>
                                                        <div class="col-3 fw-semibold">
                                                        <center>
                                                        <img src="assets/media/stock/600x400/img-2.jpg" alt=""
                                                            class="rounded" width="100" />
                                                        </center></div>
                                                    <div class="col-9"><a href="#"
                                                            class="fs-5 fw-bold text-gray-900 text-hover-primary">หลักสูตรการขนส่งสินค้าและบริการ
                                                            <br>
                                                            <o class="fs-7 text-muted font-Noto">20 รุ่น</o>
                                                        </a></div>
                                                </div>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Card body-->
                                                                            <!--begin::Card-->
                                    <div class="card pt-4 mb-6 mb-xl-9">
                                        <!--begin::Card header-->
                                        <div class="card-header border-0">
                                            <!--begin::Card title-->
                                            <!--begin::Card title-->
                                            <div class="card-title flex-column">
                                                <h2 class="mb-1">กำหนดการอบรม</h2>
                                                <div class="fs-6 fw-semibold text-muted">Schedule Train
                                                </div>
                                            </div>
                                            <!--end::Card title-->
                                            <!--end::Card title-->
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body pt-0 pb-5">
                                            <?php for ($sc_course = 1; $sc_course <= 10; $sc_course++) {?>
                                            <div class="d-flex flex-stack position-relative mt-6">
                                                <!--begin::Bar-->
                                                <div
                                                    class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0">
                                                </div>
                                                <!--end::Bar-->
                                                <!--begin::Info-->

                                                <div class="fw-semibold ms-5">
                                                    <!--begin::Time-->
                                                    <div class="fs-7 mb-1">18/10/2023 | 13:00 - 14:00
                                                        <span class="fs-7 text-muted text-uppercase">pm</span></div>
                                                    <!--end::Time-->
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">หลักสูตรการจัดการทั่วไป</a>
                                                    <!--end::Title-->
                                                    <!--begin::User-->
                                                    <div class="fs-7 text-primary font-Noto">รุ่นที่
                                                        <?php echo $sc_course ?>
                                                        <a href="#">Naomi Hayabusa</a></div>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Action-->
                                                <span class="badge badge-dark font-Noto">รอกำหนดการ</span>
                                                <!--end::Action-->
                                            </div>
                                            <?php }?>

                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                    </div>
                                    <!--end::Tasks-->
                                </div>
                                <!--end:::Tab pane-->
                            </div>
                            <!--end:::Tab content-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->
        <!--begin::Footer-->
        <?php include $part.'Template/TP_Footer.php'; ?>
        <!--end::Footer-->
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
    <?php include $part."Template/TP_Js.php" ?>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>