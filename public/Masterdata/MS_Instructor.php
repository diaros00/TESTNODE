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
  <?php include $part . "Template/TP_Css.php"?>
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
      <?php include $part . 'Template/TP_Header.php';?>
      <!--end::Header-->
      <!--begin::Wrapper-->
      <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
          <!--begin::Content wrapper-->
          <div class="d-flex flex-column flex-column-fluid">
            <div class="card" style="background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #080655 100%);">
              <!--begin::Card body-->
              <div class="card-body"
                style="background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #080655 100%);">
                <!--begin::Heading-->
                <div class="card-px text-center pt-15 pb-15">
                  <!--begin::Title-->
                  <h2 class="fs-4x fw-bold mb-0 text-center text-gray-200">
                    วิทยากรชั้นนำ<br>ของพวกเรา<br>
                    <span class="ms-3 d-inline-flex position-relative">
                      <o class="fs-2x text-danger">Our Expert Instructor</o>
                      <img class="w-100 position-absolute bottom-0 mb-n2"
                        src="assets/media/misc/hero-home-title-underline.svg" alt="">
                    </span>
                  </h2>
                  <!--end::Title-->
                  <div class="mb-15"></div>
                  <!-- begin:: instructor Marquee -->
                  <div class="boira-ourwork-img-cont wrapper">
                    <div class="marquee">
                      <div class="marquee__group">
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-1.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-2.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-3.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-4.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-5.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-6.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-7.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-8.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <div aria-hidden="true" class="marquee__group">
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-1.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-2.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-3.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-4.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-5.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-6.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-7.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="big">
                          <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                            <div class="card-body p-0">
                              <div class="symbol-label overlay-wrapper"
                                style="background-image:url(assets/media/avatars/300-8.jpg)">
                              </div>
                              <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                    class="ki-duotone ki-profile-circle fs-2x text-primary">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                  </i></a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="main-wrapper">
                      <div class="marquee marquee--reverse">
                        <div class="marquee__group">
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-1.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-2.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-3.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-4.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-5.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-6.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-7.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-8.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>

                        <div aria-hidden="true" class="marquee__group">
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-1.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-2.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-3.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-4.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-5.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-6.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-7.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="big">
                            <div class="symbol symbol-100px symbol-circle overlay overflow-hidden">
                              <div class="card-body p-0">
                                <div class="symbol-label overlay-wrapper"
                                  style="background-image:url(assets/media/avatars/300-8.jpg)">
                                </div>
                                <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                                  <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                      class="ki-duotone ki-profile-circle fs-2x text-primary ">
                                      <span class="path1"></span>
                                      <span class="path2"></span>
                                      <span class="path3"></span>
                                    </i></a>
                                </div>
                              </div>

                            </div>
                          </div>

                        </div>

                      </div>
                    </div>

                  </div>
                  <!-- end:: instructor Marquee -->
                  <div class="mb-15"></div>
                  <!--begin::Description-->
                  <div class="row">
                    <h2 class="fs-3x text-gray-200">แนะนำวิทยากรของ TS ACADEMY</h2>
                    <div class="col-lg-4 col-sm-6 hover-elevate-up">
                      <div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
                        <div class="card-body p-0">
                          <div class="symbol-label overlay-wrapper"
                            style="background-image:url(assets/media/avatars/300-1.jpg)">
                          </div>
                          <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                            <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                class="ki-duotone ki-profile-circle fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i></a>
                          </div>
                        </div>

                      </div>
                      <p>
                        <o class="fs-2x text-gray-100">Mirnsdo Nmdied</o><br>
                        <o class="fs-4 text-gray-500">Mechanical System (basic)</o>
                      </p>

                    </div>
                    <div class="col-lg-4 col-sm-6 hover-elevate-up">
                      <div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
                        <div class="card-body p-0">
                          <div class="symbol-label overlay-wrapper"
                            style="background-image:url(assets/media/avatars/300-2.jpg)">
                          </div>
                          <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                            <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                class="ki-duotone ki-profile-circle fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i></a>
                          </div>
                        </div>

                      </div>
                      <p>
                        <o class="fs-2x text-gray-100">Mirnsdo Nmdied</o><br>
                        <o class="fs-4 text-gray-500">Basic Cutting Tool & Drill</o>
                      </p>

                    </div>
                    <div class="col-lg-4 col-sm-6 hover-elevate-up">
                      <div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
                        <div class="card-body p-0">
                          <div class="symbol-label overlay-wrapper"
                            style="background-image:url(assets/media/avatars/300-3.jpg)">
                          </div>
                          <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                            <a href="#" class="btn btn-icon btn-secondary"><i
                                class="ki-duotone ki-profile-circle fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i></a>
                          </div>
                        </div>

                      </div>
                      <p>
                        <o class="fs-2x text-gray-100">Nidns Janicds</o><br>
                        <o class="fs-4 text-gray-500">Basic CNC Machining lath...</o>
                      </p>
                    </div>

                    <div class="col-lg-4 col-sm-6 hover-elevate-up">
                      <div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
                        <div class="card-body p-0">
                          <div class="symbol-label overlay-wrapper"
                            style="background-image:url(assets/media/avatars/300-4.jpg)">
                          </div>
                          <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                            <a href="#" class="btn btn-icon btn-secondary"><i
                                class="ki-duotone ki-profile-circle fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i></a>
                          </div>
                        </div>

                      </div>
                      <p>
                        <o class="fs-2x text-gray-100">Mbndie ndne mond</o><br>
                        <o class="fs-4 text-gray-500">Machining Programing</o>
                      </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 hover-elevate-up">
                      <div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
                        <div class="card-body p-0">
                          <div class="symbol-label overlay-wrapper"
                            style="background-image:url(assets/media/avatars/300-5.jpg)">
                          </div>
                          <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                            <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                class="ki-duotone ki-profile-circle fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i></a>
                          </div>
                        </div>

                      </div>
                      <p>
                        <o class="fs-2x text-gray-100">Mbndie ndne mond</o><br>
                        <o class="fs-4 text-gray-500">Machining Programing</o>
                      </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 hover-elevate-up">
                      <div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
                        <div class="card-body p-0">
                          <div class="symbol-label overlay-wrapper"
                            style="background-image:url(assets/media/avatars/300-6.jpg)">
                          </div>
                          <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                            <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                class="ki-duotone ki-profile-circle fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i></a>
                          </div>
                        </div>

                      </div>
                      <p>
                        <o class="fs-2x text-gray-100">Mbndie ndne mond</o><br>
                        <o class="fs-4 text-gray-500">Machining Programing</o>
                      </p>
                    </div>

                    <div class="col-lg-4 col-sm-6 hover-elevate-up">
                      <div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
                        <div class="card-body p-0">
                          <div class="symbol-label overlay-wrapper"
                            style="background-image:url(assets/media/avatars/300-7.jpg)">
                          </div>
                          <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                            <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                class="ki-duotone ki-profile-circle fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i></a>
                          </div>
                        </div>

                      </div>
                      <p>
                        <o class="fs-2x text-gray-100">Mbndie ndne mond</o><br>
                        <o class="fs-4 text-gray-500">Machining Programing</o>
                      </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 hover-elevate-up">
                      <div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
                        <div class="card-body p-0">
                          <div class="symbol-label overlay-wrapper"
                            style="background-image:url(assets/media/avatars/300-8.jpg)">
                          </div>
                          <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                            <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                class="ki-duotone ki-profile-circle fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i></a>
                          </div>
                        </div>

                      </div>
                      <p>
                        <o class="fs-2x text-gray-100">Mbndie ndne mond</o><br>
                        <o class="fs-4 text-gray-500">Machining Programing</o>
                      </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 hover-elevate-up">
                      <div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
                        <div class="card-body p-0">
                          <div class="symbol-label overlay-wrapper"
                            style="background-image:url(assets/media/avatars/300-9.jpg)">
                          </div>
                          <div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
                            <a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i
                                class="ki-duotone ki-profile-circle fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                              </i></a>
                          </div>
                        </div>

                      </div>
                      <p>
                        <o class="fs-2x text-gray-100">Mbndie ndne mond</o><br>
                        <o class="fs-4 text-gray-500">Machining Programing</o>
                      </p>
                    </div>
                  </div>
                  <!--end::Description-->
                </div>
                <!--end::Heading-->
              </div>
              <!--end::Card body-->
            </div>
          </div>
          <div class="mb-15"></div>
          <div id="kt_app_content_container" class="app-container container-xxl">
            <!-- begin::search -->
            <div class="d-flex flex-row-auto flex-end">
              <div class="d-flex align-items-center">
                <!--begin::Search-->
                <div id="kt_docs_search" class="d-flex align-items-center w-lg-500px me-2 me-lg-3 mw-500px"
                  data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
                  data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto"
                  data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end" data-kt-search="true">
                  <div class="position-relative">
                    <i
                      class="ki-duotone ki-magnifier fs-2 text-dark position-absolute top-50 translate-middle ms-8 d-flex flex-column-auto flex-start">
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>
                    <input type="text"
                      class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-500 mw-500px w-lg-500px h-50px"
                      name="search" value="" placeholder="Search for instructor" />
                  </div>
                  <!--end::Tablet and mobile search toggle-->

                  <!--begin::Form-->

                  <!--end::Form-->
                </div>
                <!--end::Search-->



                <!--begin::Preview link-->
                <a class="btn btn-dark btn-flex h-50px border-0 fw-bold px-4 px-lg-6" href="Masterdata/MS_InstructorSearch.php">
                  <i class="ki-duotone ki-magnifier fs-2"><span class="path1"></span><span class="path2"></span></i>
                </a>
                <!--end::Preview link-->

                <!--begin::Theme mode-->
                <div class="d-flex align-items-center">

                  <!--begin::Menu toggle-->
                  <a href="#" class="btn btn-icon btn-icon-muted btn-active-icon-primar ms-1"
                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-setting-3 theme-light-show fs-4x"><span class="path1"></span><span
                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                        class="path5"></span><span class="path6"></span><span class="path7"></span><span
                        class="path8"></span><span class="path9"></span><span class="path10"></span></i>
                    <i class="ki-duotone ki-setting-3 theme-dark-show text-white fs-1 fs-4x">
                      <span class="path1"></span><span class="path2"></span><span class="path3"></span><span
                        class="path4"></span><span class="path5"></span><span class="path6"></span><span
                        class="path7"></span><span class="path8"></span><span class="path9"></span><span
                        class="path10"></span>
                    </i>
                  </a>
                </div>
                <!--end::Theme mode-->
              </div>
            </div>
            <!-- end::search -->
            <div class="mb-3"></div>
            <!-- begin::filter news -->
            <div class="alert alert-dismissible border d-flex flex-column flex-sm-row p-5 mb-10"
              style="background-color: #D6DBDF  ;">
              <!--begin::Icon-->
              <h4 class="fw-semibold me-4 mb-5 mb-sm-0 text-dark" style="font-size: 34px;">Filter
                Instructor</h4>
              <!--end::Icon-->
              <div class="mb-2"></div>
              <!--begin::Wrapper-->
              <div class="d-flex flex-column pe-0 pe-sm-5">
                <!--begin::Content-->
                <select class="form-select w-lg-300px" aria-label="Select example">
                  <option>ทุกหลักสูตร</option>
                  <option value="1">DP-MTN-04 : Mechanical System (basic)</option>
                  <option value="2">DP-MN-03 : Basic Cutting Tool & Drill</option>
                  <option value="3">DP-MN-02 : Basic CNC Machining lath/Machining Center</option>
                  <option value="3">DP-MN-01 : Machining Programing</option>
                  <option value="3">DP-DC-03 : Basic Die Casting</option>
                  <option value="3">DP-DC-02 : Pneumatic Systems (for Die Casting)</option>
                  <option value="3">DP-DC-01 : Hydraulic Systems (for Die Casting)</option>
                </select>
                <!--end::Content-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Wrapper-->
              <div class="d-flex flex-column pe-0 pe-sm-5">


                <!--begin::Content-->
                <select class="form-select w-lg-300px" aria-label="Select example">
                  <option>ทุกประเภทหลักสูตร</option>
                  <option value="1">Functional Competency</option>
                  <option value="2">Soft Skills</option>
                  <option value="3">Managerial Competency</option>
                  <option value="3">Functional Engineering</option>
                  <option value="3">Basic Engineering</option>
                </select>
                <!--end::Content-->
              </div>
              <!--end::Wrapper-->
              <!--begin::Wrapper-->
              <div class="d-flex flex-column pe-0 pe-sm-5">

                <!--begin::Content-->
                <select class="form-select w-lg-300px" aria-label="Select example">
                  <option>ทุกกลุ่มหลักสูตร</option>
                  <option value="MC">MC : Managerial Competency</option>
                  <option value="2">FC : Functional Competency</option>
                  <option value="3">MC : Managerial Competency</option>
                </select>
                <!--end::Content-->
              </div>
              <!--end::Wrapper-->

            </div>
            <!-- end::filter news -->
            <!-- begin::list instructor -->
            <!--begin::Followers toolbar-->
            <div class="d-flex flex-wrap flex-stack mb-6">
              <!--begin::Title-->
              <h1 class="text-gray-800 fw-bold my-2">Instructor
                <span class="fs-3 text-gray-500 fw-semibold ms-1">(35)</span></h1>
              <!--end::Title-->
              <!--begin::Controls-->
              <!--begin::Toolbar-->
              <div class="card-toolbar">
                <!--begin::Menu-->
                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                  data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                  <i class="ki-duotone ki-dots-square fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                  </i>
                </button>
                <!--begin::Menu 2-->
                <div
                  class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                  data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">VIEW
                      NEWS</div>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator mb-3 opacity-75"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3 fs-5">
                    <a href="Masterdata/MS_Instructor.php?view=list" class="menu-link px-3">
                      <i class="ki-duotone ki-element-5 me-2 fs-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                      List</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3 fs-5">
                    <a href="Masterdata/MS_Instructor.php?view=card" class="menu-link px-3"><i
                        class="ki-duotone ki-element-11 me-2 fs-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                      </i> Card</a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu 2-->
                <!--end::Menu-->
              </div>
              <!--end::Toolbar-->
              <!--end::Controls-->
            </div>
            <!--end::Followers toolbar-->
            <!--begin::Row-->
            <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
              <!--begin::Followers-->
              <!--begin::View list-->
              <?php
                  $view = (isset($_GET['view']) ? $_GET['view'] : '');
                  if ($view == 'card') {
                      include 'MS_InstructorViewCard.php';
                  } elseif ($view == 'list') {
                      include 'MS_InstructorViewList.php';
                  } else {
                      include 'MS_InstructorViewCard.php';
                  }
              ?>
              <!--end::View list-->
              <!--end::Followers-->
            </div>
            <!--end::Row-->
            <!--begin::Row(for show more)-->
            <div class="row g-6 mb-6 g-xl-9 mb-xl-9 d-none" id="kt_followers_show_more_cards">
              <!--begin::Followers-->
              <!--begin::Col-->
              <div class="col-md-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card">
                  <!--begin::Card body-->
                  <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-150px symbol-circle mb-5">
                      <img src="assets/media//avatars/300-11.jpg" alt="image" />
                      <div
                        class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                      </div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric
                      Watson</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                        <div class="fw-semibold text-gray-500">Earnings</div>
                      </div>
                      <!--end::Stats-->
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                        <div class="fw-semibold text-gray-500">Sales</div>
                      </div>
                      <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                      <i class="ki-duotone ki-check following fs-3"></i>
                      <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                      <!--begin::Indicator label-->
                      <span class="indicator-label">Following</span>
                      <!--end::Indicator label-->
                      <!--begin::Indicator progress-->
                      <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                  </div>
                  <!--begin::Card body-->
                </div>
                <!--begin::Card-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card">
                  <!--begin::Card body-->
                  <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-150px symbol-circle mb-5">
                      <img src="assets/media//avatars/300-6.jpg" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia
                      Larson</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                        <div class="fw-semibold text-gray-500">Earnings</div>
                      </div>
                      <!--end::Stats-->
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                        <div class="fw-semibold text-gray-500">Sales</div>
                      </div>
                      <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                      <i class="ki-duotone ki-plus follow fs-3"></i>
                      <i class="ki-duotone ki-check following fs-3 d-none"></i>
                      <!--begin::Indicator label-->
                      <span class="indicator-label">Follow</span>
                      <!--end::Indicator label-->
                      <!--begin::Indicator progress-->
                      <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                  </div>
                  <!--begin::Card body-->
                </div>
                <!--begin::Card-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card">
                  <!--begin::Card body-->
                  <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-150px symbol-circle mb-5">
                      <span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
                      <div
                        class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                      </div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam
                      Williams</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                        <div class="fw-semibold text-gray-500">Earnings</div>
                      </div>
                      <!--end::Stats-->
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                        <div class="fw-semibold text-gray-500">Sales</div>
                      </div>
                      <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                      <i class="ki-duotone ki-check following fs-3"></i>
                      <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                      <!--begin::Indicator label-->
                      <span class="indicator-label">Following</span>
                      <!--end::Indicator label-->
                      <!--begin::Indicator progress-->
                      <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                  </div>
                  <!--begin::Card body-->
                </div>
                <!--begin::Card-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card">
                  <!--begin::Card body-->
                  <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-150px symbol-circle mb-5">
                      <span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
                      <div
                        class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                      </div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul
                      Marcus</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                        <div class="fw-semibold text-gray-500">Earnings</div>
                      </div>
                      <!--end::Stats-->
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                        <div class="fw-semibold text-gray-500">Sales</div>
                      </div>
                      <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                      <i class="ki-duotone ki-check following fs-3"></i>
                      <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                      <!--begin::Indicator label-->
                      <span class="indicator-label">Following</span>
                      <!--end::Indicator label-->
                      <!--begin::Indicator progress-->
                      <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                  </div>
                  <!--begin::Card body-->
                </div>
                <!--begin::Card-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card">
                  <!--begin::Card body-->
                  <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-150px symbol-circle mb-5">
                      <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil
                      Owen</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Accountant at Numbers Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                        <div class="fw-semibold text-gray-500">Earnings</div>
                      </div>
                      <!--end::Stats-->
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                        <div class="fw-semibold text-gray-500">Sales</div>
                      </div>
                      <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                      <i class="ki-duotone ki-plus follow fs-3"></i>
                      <i class="ki-duotone ki-check following fs-3 d-none"></i>
                      <!--begin::Indicator label-->
                      <span class="indicator-label">Follow</span>
                      <!--end::Indicator label-->
                      <!--begin::Indicator progress-->
                      <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                  </div>
                  <!--begin::Card body-->
                </div>
                <!--begin::Card-->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card">
                  <!--begin::Card body-->
                  <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-150px symbol-circle mb-5">
                      <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
                      <div
                        class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3">
                      </div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean
                      Paul</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                        <div class="fw-semibold text-gray-500">Earnings</div>
                      </div>
                      <!--end::Stats-->
                      <!--begin::Stats-->
                      <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                        <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                        <div class="fw-semibold text-gray-500">Sales</div>
                      </div>
                      <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                      <i class="ki-duotone ki-plus follow fs-3"></i>
                      <i class="ki-duotone ki-check following fs-3 d-none"></i>
                      <!--begin::Indicator label-->
                      <span class="indicator-label">Follow</span>
                      <!--end::Indicator label-->
                      <!--begin::Indicator progress-->
                      <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                      <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                  </div>
                  <!--begin::Card body-->
                </div>
                <!--begin::Card-->
              </div>
              <!--end::Col-->
              <!--end::Followers-->
            </div>
            <!--end::Row-->
            <!-- end::list instructor -->
            <!-- ฟังชั่นหน้าถัดไป -->
            <ul class="pagination pagination-circle pagination-outline">
              <li class="page-item previous disabled m-1"><a href="#" class="page-link"><i class="previous"></i></a>
              </li>
              <li class="page-item active m-1"><a href="#" class="page-link">1</a></li>
              <li class="page-item m-1"><a href="#" class="page-link">2</a></li>
              <li class="page-item m-1"><a href="#" class="page-link">3</a></li>
              <li class="page-item m-1"><a href="#" class="page-link">4</a></li>
              <li class="page-item m-1"><a href="#" class="page-link">5</a></li>
              <li class="page-item m-1"><a href="#" class="page-link">6</a></li>
              <li class="page-item next m-1"><a href="#" class="page-link"><i class="next"></i></a></li>
            </ul>
          </div>
          <!--end::Content wrapper-->
          <!--begin::Footer-->
          <?php include $part . 'Template/TP_Footer.php';?>
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
  <?php include $part . "Template/TP_Js.php"?>
  <!--end::Javascript-->
</body>
<!--end::Body-->

</html>