<div id="kt_app_content_container" class="app-container container-xxl">
    <!--begin::Home card-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-10">
            <!--begin::Posts-->
            <div class="row g-10">
                <!--begin::Col-->
                <?php for($news = 1; $news <= 21; $news++){ ?>
                <div class="col-md-4">
                    <!--begin::Feature post-->
                    <div class="card-xl-stretch me-md-6">
                        <!--begin::Overlay-->
                        <!--begin::Image-->
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                            style="background-image:url('assets/media/stock/600x400/img-<?php echo $news ?>.jpg')">
                        </div>
                        <!--end::Image-->

                        <!--end::Overlay-->
                        <!--begin::Body-->
                        <div class="mt-5">
                            <!--begin::หัวข้อข่าว-->
                            <a href="News/NS_Post.php?category=course"
                                class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Bootstrap
                                Admin - How To Started the Dashboard Tutorial</a>
                            <!--end::หัวข้อข่าว-->
                            <!--begin::รายละเอียดข่าว-->
                            <div class="fw-semibold fs-5 text-gray-600 my-3">We’ve been
                                focused on making a the from also not been afraid to and
                                step away</div>
                            <!--end::รายละเอียดข่าว-->
                            <!--begin::Content-->
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="fs-6 fw-bold">
                                    <!--begin::วันที่และยอดวิว-->
                                    <span class="text-gray-500"><i class="fa-regular fa-calendar-days"></i> Dec 27,
                                        2021 <i class="fa-regular fa-eye"></i> 1,230</span>
                                    <!--end::วันที่และยอดวิว-->
                                </div>
                                <!--end::Content-->
                                <!--begin::หมวด-->
                                <span class="badge badge-light-info fw-bold my-2">COURSE</span>
                                <!--end::หมวด-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feature post-->
                </div>
                <?php } ?>
                <!--end::Col-->
            </div>
            <!--end::Posts-->
            <div class="mb-15"></div>
            <!-- ฟังชั่นเปลี่ยนหน้าข่าว -->
            <ul class="pagination pagination-circle pagination-outline">
                <li class="page-item first disabled m-1">
                    <a href="#" class="page-link px-0">
                        <i class="ki-duotone ki-double-left fs-2"><span class="path1"></span><span
                                class="path2"></span></i>
                    </a>
                </li>
                <li class="page-item previous disabled m-1">
                    <a href="#" class="page-link px-0">
                        <i class="ki-duotone ki-left fs-2"></i>
                    </a>
                </li>
                <li class="page-item active m-1"><a href="#" class="page-link">1</a></li>
                <li class="page-item m-1"><a href="#" class="page-link">2</a></li>
                <li class="page-item m-1"><a href="#" class="page-link">3</a></li>
                <li class="page-item m-1"><a href="#" class="page-link">4</a></li>
                <li class="page-item m-1"><a href="#" class="page-link">5</a></li>
                <li class="page-item m-1"><a href="#" class="page-link">6</a></li>
                <li class="page-item next m-1">
                    <a href="#" class="page-link px-0">
                        <i class="ki-duotone ki-right fs-2"></i>
                    </a>
                </li>
                <li class="page-item last m-1">
                    <a href="#" class="page-link px-0">
                        <i class="ki-duotone ki-double-right fs-2"><span class="path1"></span><span
                                class="path2"></span></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!--end::Home card-->
</div>