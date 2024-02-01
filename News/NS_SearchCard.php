<div class="card-body pt-5">
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
</div>
