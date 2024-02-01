<?php for ($data = 1; $data <= 20; $data++) { ?>
    <div class="card-body pt-5">
        <!--begin::Item-->
        <div>
            <div class="ribbon ribbon-top">
                <!-- <div class="ribbon-label bg-primary font-Noto">ลงทะเบียนได้</div> -->
                <div class="ribbon-label bg-danger font-Noto">เต็ม</div>
                <!-- <div class="ribbon-label bg-warning font-Noto">ลงทะเบียนด่วน</div> -->
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <img src="assets/media/stock/600x400/img-<?php echo $data ?>.jpg" alt="" class="rounded" width="250" />
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <a href="Course/CO_Detail.php?category=Full" class="text-gray-800 text-hover-primary fs-6 fw-bold fs-2">การวางแผนการผลิตทั้งภายใน(บริษัท)และภายนอก(Supplier)</a>
                        <p>
                            <o class="me-3">BY ADMIN TS ACADEMY </o>
                            <o class="me-3"><i class="fa-regular fa-calendar-days"></i> Dec 27, 2021 </o><i class="fa-solid fa-chalkboard-user"></i> 1,000
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-circle symbol-30px me-3">
                                <img src="assets/media/avatars/300-6.jpg" class="" alt="" />
                            </div>
                            <div class="d-flex justify-content-start flex-column">
                                <span class="text-gray-500 fw-semibold d-block fs-7">Mustakeam Thoha</span>
                            </div>
                        </div>

                        </p>
                        <span class="badge badge-light-info fw-bold my-2">Core Competency</span>
                        <span class="badge badge-light-primary fw-bold my-2">Power Skills</span>
                        <span class="badge badge-light-success fw-bold my-2">LEVEL : T7...</span>
                        <span class="badge badge-light-warning fw-bold my-2">H420000...</span>
                        <span class="badge badge-light-danger fw-bold my-2">TSH</span>

                    </div>
                </div>
            </div>
        </div>
        <!--end::Item-->
        <!--begin::Separator-->
        <div class="separator separator-dashed my-4"></div>
        <!--end::Separator-->
    </div>
<?php } ?>