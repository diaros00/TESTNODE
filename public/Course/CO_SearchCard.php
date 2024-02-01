<div class="card-body pt-5">
    <div class="row g-10">
        <!--begin::Col-->
        <?php for ($news = 1; $news <= 21; $news++) { ?>
            <div class="col-md-4">
                <!--begin::Feature post-->
                <div class="card-xl-stretch me-md-6">
                    <div class="ribbon ribbon-top">
                        <!--begin::Image-->
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-<?php echo $news ?>.jpg')">
                        </div>
                        <!--end::Image-->
                        <div class="ribbon-label bg-primary font-Noto">ลงทะเบียนได้</div>
                        <!--begin::Overlay-->

                        <!--end::Overlay-->
                        <!--begin::Body-->
                        <div class="mt-5">
                            <!--begin::หัวข้อข่าว-->
                            <a href="Course/CO_Detail.php?category=Register" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">วิธีการรับวัตถุดิบและชิ้นส่วนภายใน-นอก
                                และงานจัดจ้าง</a>
                            <!--end::หัวข้อข่าว-->
                            <!--begin::รายละเอียดข่าว-->
                            <div class="fw-semibold fs-5 text-gray-600 my-3">
                                <!-- <span class="badge badge-light-info fw-bold my-2">Core Competency</span>
                            <span class="badge badge-light-primary fw-bold my-2">Power Skills</span>
                            <span class="badge badge-light-success fw-bold my-2">LEVEL : T7...</span>
                            <span class="badge badge-light-warning fw-bold my-2">H420000...</span>
                            <span class="badge badge-light-danger fw-bold my-2">TSH</span> -->
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-30px me-3">
                                        <img src="assets/media/avatars/300-6.jpg" class="" alt="" />
                                    </div>
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Mustakeam Thoha</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::รายละเอียดข่าว-->
                            <!--begin::Content-->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fs-6 fw-bold">
                                    <!--begin::วันที่และยอดวิว-->
                                    <span class="text-gray-500"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                        2021
                                        <!--end::วันที่และยอดวิว-->
                                </div>
                                <!--end::Content-->
                                <!--begin::หมวด-->
                                <span class="fw-bold my-2 font-Noto"><i class="text-dark fa-solid fa-chalkboard-user"></i> 1
                                    รุ่น</span>
                                <!--end::หมวด-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>

                </div>
                <!--end::Feature post-->
            </div>
        <?php } ?>
        <!--end::Col-->
    </div>
</div>