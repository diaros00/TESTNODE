<div class="card mb-12">
    <!--begin::Hero body-->
    <div class="card-body flex-column p-5">
        <!--begin::Hero content-->
        <div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                <!--begin::Title-->
                <h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10 animate__animated animate__fadeInUp">
                    เมื่อมีคำถาม <br>
                    <o class="fs-4x animate__animated animate__bounceIn animate__slower animate__delay-1s">
                        เราก็มีคำตอบ?</o>
                </h1>
                <!--end::Title-->
                <!--begin::Input group-->
                <div class="position-relative w-100">
                    <i class="ki-duotone ki-magnifier fs-2 text-primary position-absolute top-50 translate-middle ms-8">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-500 mw-500px"
                        name="search" value="" placeholder="Ask a question" />
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Wrapper-->
            <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                <!--begin::Illustration-->
                <img src="assets/media/icons/canvas/ic-q-and-a.png" alt=""
                    class="mw-100 mh-125px mh-lg-275px mb-lg-n12 animate__animated animate__bounceIn" />
                <!--end::Illustration-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Hero content-->
        <!--begin::Hero nav-->
        <?php if ($_SESSION['username'] == 'admin') { ?>
        <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
            <!--begin::Nav-->
            <ul class="nav flex-wrap border-transparent fw-bold">
                <!--begin::Nav item-->
                <li class="nav-item my-1">
                    <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase <?php echo $activeQA ?>"
                        href="HelpDesk/HD_QA.php">Q&A</a>
                </li>
                <!--end::Nav item-->
                <!--begin::Nav item-->
                <li class="nav-item my-1">
                    <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase <?php echo $activeHelp ?>"
                        href="HelpDesk/HD_Help.php">Help</a>
                </li>
                <!--end::Nav item-->
            </ul>
            <!--end::Nav-->
            <!--begin::Action-->

            <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket"
                class="btn btn-primary fw-bold fs-8 fs-lg-base"
                style="font-family: 'Noto Sans Thai', sans-serif;">คำถามและขอความช่วยเหลือ</a>

                
            <!--end::Action-->
        </div>
        <?php } ?>
        <!--end::Hero nav-->
    </div>
    <!--end::Hero body-->
</div>