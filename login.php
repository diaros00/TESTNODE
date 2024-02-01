<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>TS ACADEMY | THAISUMMIT GROUP</title>
    <?php include "Template/TP_Css.php" ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank">
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
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center animate__animated animate__fadeIn animate__fast" style="background-image: url(assets/media/misc/auth-bg.png)">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center p-6 p-lg-10 w-100">
                    <!--begin::Logo-->
                    <!-- <a href="index.html" class="mb-0 mb-lg-20">
                        <img alt="Logo" src="assets/media/logos/default-white.svg" class="h-40px h-lg-50px" />
                    </a> -->
                    <!--end::Logo-->
                    <!--begin::Image-->
                    <!-- <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20" src="assets/media/misc/auth-screens.png" alt="" /> -->
                    <!--end::Image-->

                    <!--begin::Title-->
                    <!-- <h1 class="d-none d-lg-block text-white fs-2qx fw-bold text-center mb-7">Before we build parts, we build people<br>
                        <o class="fs-2x font-Noto fw-light">ก่อนที่เราจะสร้างชิ้นส่วน เราจะสร้างคน</o>
                    </h1> -->
                    <!-- <div class="mb-15"></div>
                    <div class="mb-15"></div>
                    <div class="mb-15"></div>
                    <div class="mb-15"></div>
                    <div class="mb-15"></div>
                    <div class="mb-15"></div>
                    <div class="mb-15"></div>
                    <div class="mb-15"></div> -->
                    <!--end::Title-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="login_class.php" method="post">
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <img alt="Logo" src="assets/media/logos/demo6.svg" class="h-80px h-lg-90px mb-5 animate__animated animate__fadeInDown" />
                                <!--begin::Title-->
                                <h1 class="text-gray-900 fw-bolder mb-3 animate__animated animate__fadeInUp">Sign In</h1>
                                <!--end::Title-->
                                <!--begin::Subtitle-->
                                <div class="text-gray-500 fw-semibold fs-6 animate__animated animate__fadeInUp">Welcome to TS ACADEMY!</div>
                                <!--end::Subtitle=-->
                            </div>
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8 animate__animated animate__fadeInUp">
                                <!--begin::Email-->
                                <input type="text" placeholder="EMPLOYEE NUMBER OR USERNAME" name="username" id="username"  autocomplete="off" class="form-control bg-transparent" />
                                <!--end::Email-->
                            </div>
                            <!--end::Input group=-->
                            <div class="fv-row mb-3 animate__animated animate__fadeInUp">
                                <!--begin::Password-->
                                <input type="password" placeholder="Password" name="password" id="password" autocomplete="off" class="form-control bg-transparent" />
                                <!--end::Password-->
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8 animate__animated animate__fadeInUp">
                                <div></div>
                                <!--begin::Link-->
                                <a href="authentication/layouts/corporate/reset-password.html" class="link-primary">Forgot Password ?</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Submit button-->
                            <div class="d-grid mb-10 animate__animated animate__fadeInUp">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-success">
                                    <!--begin::Indicator label-->
                                    <span class="indicator-label">Sign In</span>
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    <!--end::Indicator progress-->
                                </button>
                            </div>
                            <!--end::Submit button-->
                            <!--begin::Sign up-->
                            <!-- <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
                                <a href="authentication/layouts/corporate/sign-up.html" class="link-primary">Sign up</a>
                            </div> -->
                            <!--end::Sign up-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->
    <!-- <script src="assets/js/custom/authentication/sign-in/login.js"></script> -->
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>