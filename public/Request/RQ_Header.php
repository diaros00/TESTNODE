<div class="card card-flush mb-9" id="kt_user_profile_panel">
    <div class="card-body pt-9 pb-0">
        <!--begin::Details-->
        <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
            <!--begin::Image-->
            <div class="d-flex flex-center flex-shrink-0 symbol symbol-125px symbol-lg-150px symbol-fixed position-relative mt-n3 me-6">
                <img src="assets/media/avatars/300-3.jpg" alt="image" class="border border-white border-4" style="border-radius: 20px" />
            </div>


            <!--end::Image-->
            <!--begin::Wrapper-->
            <div class="flex-grow-1">
                <!--begin::Head-->
                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                    <!--begin::Details-->
                    <div class="d-flex flex-column">
                        <!--begin::Status-->
                        <div class="d-flex align-items-center mb-1">
                            <a href="#" class="text-gray-800 text-hover-primary fs-2x fw-bold me-3"><?php echo $tilte ?></a>
                        </div>
                        <!--end::Status-->
                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-500 font-Noto">Hi! คุณสมศักดิ์
                                มากเงิน (K.Somchai)
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Head-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap justify-content-start">
                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap">
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center">
                                <div class="fs-4 fw-bold font-Noto">12 รายการ</div>
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-primary"><i class="fa-solid fa-file-lines me-2 text-primary"></i>Document</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center fw-bold font-Noto fs-4">
                                <div class="fs-4 fw-bold me-2" data-kt-countup="true" data-kt-countup-value="75">0</div>
                                รายการ
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-gray-500"><i class="fa-solid fa-clock me-1"></i> Wait
                                Approve</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center fw-bold font-Noto fs-4">
                                <div class="fs-4 fw-bold font-Noto me-2" data-kt-countup="true" data-kt-countup-value="10">0</div>รายการ
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-success"><i class="fa-solid fa-circle-check me-2 text-success"></i>Approve</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                            <!--begin::Number-->
                            <div class="d-flex align-items-center fw-bold font-Noto fs-4">
                                <div class="fs-4 fw-bold font-Noto me-2" data-kt-countup="true" data-kt-countup-value="6">0</div>รายการ
                            </div>
                            <!--end::Number-->
                            <!--begin::Label-->
                            <div class="fw-semibold fs-6 text-danger"><i class="fa-solid fa-circle-xmark me-2 text-danger"></i>Reject</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Stat-->
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Details-->
    </div>
</div>

<!--begin::Nav items-->
<div id="kt_user_profile_nav" class="rounded bg-gray-200 d-flex flex-stack flex-wrap mb-9 p-2" data-kt-sticky="true" data-kt-sticky-name="sticky-profile-navs" data-kt-sticky-offset="{default: false, lg: '400px'}" data-kt-sticky-width="{target: '#kt_user_profile_panel'}" data-kt-sticky-left="auto" data-kt-sticky-top="70px" data-kt-sticky-animation="true" data-kt-sticky-zindex="95">
    <!--begin::Nav-->
    <ul class="nav flex-wrap border-transparent">
        <!--begin::Nav item-->
        <li class="nav-item my-1">
            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Request/RQ_From.php">Request Form<br>
                <o class="fw-light text-gray-500 fs-7 fs-lg-5">เอกสารขออนุมัติ</o>
            </a>
        </li>
        <!--end::Nav item-->
        <!--begin::Nav item-->
        <li class="nav-item my-1">
            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1 <?php echo $listpage; ?>" href="Request/RQ_List.php">List Request<br>
                <o class="fw-light text-gray-500 fs-7 fs-lg-5">รายการยื่นอนุมัติ</o>
            </a>
        </li>
        <!--end::Nav item-->
        <!--begin::Nav item-->
        <li class="nav-item my-1">
            <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1 <?php echo $listapprove; ?>" href="Request/RQ_Approve.php">List Approve <span class="badge badge-danger">5</span><br>
                <o class="fw-light text-gray-500 fs-7 fs-lg-5">รายการอนุมัติ</o>
            </a>
        </li>
        <!--end::Nav item-->
    </ul>
    <!--end::Nav-->
</div>