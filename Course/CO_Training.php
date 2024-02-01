<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-18">
                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column justify-content-center me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            DP-RDPD-01 : ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="Course/CO_Home.php" class="text-muted text-hover-primary">Course</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <i class="ki-duotone ki-right fs-6"></i>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="Course/CO_Detail.php" class="text-muted text-hover-primary">Detail</a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <i class="ki-duotone ki-right fs-6"></i>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="Course/CO_Enroll.php" class="text-muted text-hover-primary">Enroll</a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <i class="ki-duotone ki-right fs-6"></i>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Confirm</li>
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
                    <!--begin::Post card-->
                    <div class="card">
                        <!--begin::Body-->
                        <div class="card-body p-lg-12 pb-lg-0">
                            <!--begin::Layout-->
                            <div class="d-flex flex-column flex-xl-row">
                                <!--begin::Content-->
                                <div class="flex-lg-row-fluid me-xl-15">
                                    <!--begin::Post content-->
                                    <h1 class="page-heading d-flex text-gray-500 fw-light fs-2x flex-column justify-content-center my-0 mb-5">
                                        DP-RDPD-01 : ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น <br>
                                        <o class="fs-2 text-gray-900">ประกาศโดย : TS Academy Admin</o>
                                    </h1>
                                    <div class="mb-17">
                                        <!--begin::Wrapper-->
                                        <div class="mb-8">
                                            <!--begin::Container-->
                                            <div class="overlay mt-0">
                                                <!--begin::Video-->
                                                <div class="videoWrapper mb-8">
                                                    <center>
                                                        <iframe class="card-rounded" src="https://www.youtube.com/embed/Rn99yQ8ApGA?si=rLlEipE_5kZx7FKa" allowfullscreen></iframe>
                                                    </center>
                                                </div>
                                                <!--end::Video-->
                                            </div>
                                            <ul class="nav nav-tabs nav-pills mb-5 fs-7 fs-lg-3 ">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab_unit">บทเรียน</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tab_manual">คู่มือและเอกสารอบรม</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#tab_course_detail">รายละเอียดหลักสูตร</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content mb-12" id="myTabContent">
                                                <div class="tab-pane fade show active" id="tab_unit" role="tabpanel">
                                                    <?php for ($data = 1; $data <= 5; $data++) { ?>
                                                        <div class="card-body pt-5">
                                                            <!--begin::Item-->
                                                            <div>
                                                                <div class="ribbon ribbon-top">
                                                                    <!-- <div class="ribbon-label bg-primary font-Noto">ลงทะเบียนได้</div> -->
                                                                    <div class="ribbon-label bg-success font-Noto">สำเร็จ</div>
                                                                    <!-- <div class="ribbon-label bg-warning font-Noto">ลงทะเบียนด่วน</div> -->
                                                                    <div class="row">
                                                                        <div class="col-sm-12 col-lg-3">
                                                                            <img src="assets/media/stock/600x400/img-<?php echo $data ?>.jpg" alt="" class="rounded w-100 w-lg-100" />
                                                                        </div>
                                                                        <div class="col-sm-12 col-lg-9">
                                                                            <a href="Course/CO_Detail.php" class="text-gray-800 text-hover-primary fs-3 fs-lg-5 fw-bold fs-2">Part <?php echo $data ?> - ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น</a>
                                                                            <p>
                                                                                <o class="me-3 text-gray-500 fs-6 fs-lg-5">Video (17:56 mins)</o>

                                                                            </p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Item-->
                                                            <!--begin::Separator-->
                                                            <div class="separator separator-dashed my-3"></div>
                                                            <!--end::Separator-->
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="tab-pane fade" id="tab_manual" role="tabpanel">
                                                    <h4 class="fs-3 border-2 border-dark mb-5">คู่มืออบรมและเอกสารอบรม</h4>
                                                    <div class="separator mb-6 "></div>
                                                    <!--begin::Alert-->
                                                    <div class="alert alert-danger d-flex align-items-center p-5">
                                                        <!--begin::Icon-->
                                                        <i class="fa-solid fa-file-pdf fs-2hx text-danger me-4"></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column">
                                                            <!--begin::Title-->
                                                            <h4 class="mb-1 text-dark">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 1</h4>
                                                            <!--end::Title-->

                                                            <!--begin::Content-->
                                                            <span class="font-Noto">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 1.pdf</span>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Alert-->
                                                    <!--begin::Alert-->
                                                    <div class="alert alert-danger d-flex align-items-center p-5">
                                                        <!--begin::Icon-->
                                                        <i class="fa-solid fa-file-pdf fs-2hx text-danger me-4"></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column">
                                                            <!--begin::Title-->
                                                            <h4 class="mb-1 text-dark">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 2</h4>
                                                            <!--end::Title-->

                                                            <!--begin::Content-->
                                                            <span class="font-Noto">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 2.pdf</span>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Alert-->
                                                    <!--begin::Alert-->
                                                    <div class="alert alert-danger d-flex align-items-center p-5">
                                                        <!--begin::Icon-->
                                                        <i class="fa-solid fa-file-pdf fs-2hx text-danger me-4"></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column">
                                                            <!--begin::Title-->
                                                            <h4 class="mb-1 text-dark">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 3</h4>
                                                            <!--end::Title-->

                                                            <!--begin::Content-->
                                                            <span class="font-Noto">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 3.pdf</span>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Alert-->
                                                    <!--begin::Alert-->
                                                    <div class="alert alert-danger d-flex align-items-center p-5">
                                                        <!--begin::Icon-->
                                                        <i class="fa-solid fa-file-pdf fs-2hx text-danger me-4"></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column">
                                                            <!--begin::Title-->
                                                            <h4 class="mb-1 text-dark">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 4</h4>
                                                            <!--end::Title-->

                                                            <!--begin::Content-->
                                                            <span class="font-Noto">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 4.pdf</span>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Alert-->
                                                    <!--begin::Alert-->
                                                    <div class="alert alert-danger d-flex align-items-center p-5">
                                                        <!--begin::Icon-->
                                                        <i class="fa-solid fa-file-pdf fs-2hx text-danger me-4"></i>
                                                        <!--end::Icon-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-column">
                                                            <!--begin::Title-->
                                                            <h4 class="mb-1 text-dark">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 5</h4>
                                                            <!--end::Title-->

                                                            <!--begin::Content-->
                                                            <span class="font-Noto">คู่มือหลักสูตร ความรู้เกี่ยวกับการอ่านแบบเบื้องต้น ฉบับที่ 5.pdf</span>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Alert-->
                                                </div>
                                                <div class="tab-pane fade" id="tab_course_detail" role="tabpanel">
                                                    <div class="p-0">
                                                        <!--begin::หัวข้อข่าว-->
                                                        <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                            เกี่ยวกับหลักสูตร</div>
                                                        <!--end::หัวข้อข่าว-->
                                                        <!--begin::Text-->
                                                        <div class="fs-5 fw-semibold text-gray-600 mt-4">
                                                            <!--begin::รายละเอียดข่าว-->
                                                            <p class="mb-8">First, a disclaimer – the entire process of
                                                                writing a blog post often takes more than a couple of
                                                                hours, even if you can type eighty words per minute and
                                                                your writing skills are sharp. From the seed of the idea
                                                                to finally hitting “Publish,” you might spend several
                                                                days or maybe even a week “writing” a blog post, but
                                                                it’s important to spend those vital hours planning your
                                                                post and even thinking about
                                                                <a href="pages/blog/post.html" class="link-primary pe-1">Your
                                                                    Post</a>(yes,
                                                                thinking counts as working if you’re a blogger) before
                                                                you actually write it.
                                                            </p>
                                                            <!--end::Text-->
                                                            <!--begin::Text-->
                                                            <p class="mb-8">There’s an old maxim that states,
                                                                <span class="text-gray-800 pe-1">“No fun for the writer,
                                                                    no fun for the reader.”</span>No matter what
                                                                industry you’re working in, as a blogger, you should
                                                                live and die by this statement.
                                                            </p>

                                                            <div class="separator border-gray-400 mb-12"></div>
                                                            <!--end::Text-->
                                                            <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                                ข้อมูลทั่วไป</div>
                                                            <div class="row mb-10">
                                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                                    <p><span class="text-gray-800 pe-1">Competency : </span>Core Competency</p>
                                                                    <p><span class="text-gray-800 pe-1">Cost Center : </span>H500000 , H400000</p>
                                                                    <p><span class="text-gray-800 pe-1">จำนวนรุ่น :</span>6 รุ่น</p>
                                                                    <p><span class="text-gray-800 pe-1">วันที่เริ่มอบรม :</span>10/09/2023</p>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                                    <p><span class="text-gray-800 pe-1">Type : </span>Functional Competency</p>
                                                                    <p><span class="text-gray-800 pe-1">Level : </span>ทุกระดับ</p>
                                                                    <p><span class="text-gray-800 pe-1">จำนวนผู้เรียนต่อรุ่น : </span>40 คน</p>
                                                                    <p><span class="text-gray-800 pe-1">ชั่วโมงเรียน : </span>ทั้งวัน</p>
                                                                </div>

                                                            </div>
                                                            <div class="separator border-gray-400 mb-12"></div>
                                                            <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                                คำอธิบาย</div>
                                                            <p class="mb-8">The material of this course is also covered in my other course about web design and development with HTML5 & CSS3. Scroll to the bottom of this page to check out that course, too! If you're already taking my other course, you already have all it takes to start designing beautiful websites today!
                                                                "Best web design course: If you're interested in web design, but want more than just a "how to use WordPress" course,I highly recommend this one." — Florian Giusti
                                                                "Very helpful to us left-brained people: I am familiar with HTML, CSS, JQuery, and Twitter Bootstrap, but I needed instruction in web design. This course gave me practical, impactful techniques for making websites more beautiful and engaging." — Susan Darlene Cain
                                                            </p>
                                                            <div class="separator border-gray-400 mb-12"></div>
                                                            <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                                วิทยาการ</div>
                                                            <a href="Masterdata/MS_InstructorProfile.php" class="d-flex align-items-center mb-8">
                                                                <div class="symbol symbol-circle symbol-50px me-3">
                                                                    <img src="assets/media/avatars/300-6.jpg" class="" alt="" />
                                                                </div>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-gray-500 fw-semibold d-block fs-5 fw-light text-hover-primary">Mustakeam Thoha</span>
                                                                </div>
                                                            </a>
                                                            <div class="separator border-gray-400 mb-12"></div>
                                                            <div class="fw-bold text-gray-900 mb-3 fs-2 lh-sm font-Noto fw-light">
                                                                การจัดอันดับ</div>
                                                            <o class="fs-4x">5
                                                                <o class="fs-2 me-3 font-Noto">จาก 5</o>
                                                            </o>
                                                            <div class="rating">
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-1"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-1"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-1"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-1"></i>
                                                                </div>
                                                                <div class="rating-label checked">
                                                                    <i class="ki-duotone ki-star fs-1"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::รายละเอียดข่าว-->
                                                        <!--end::Body-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Body-->
                                        <div class="d-flex flex-row flex-column-fluid mb-6">
                                            <div class="d-flex flex-row-fluid flex-center">
                                                <a href="Course/CO_Train.php?category=PostTest" class="btn btn-lg btn-block  btn-primary mb-12 hover-scale card-p-2 fs-2 pulse pulse-primary w-400px" style="font-family: 'Noto Sans Thai', sans-serif;">ทำแบบทดสอบหลังอบรม (PRE-TEST)</a>
                                            </div>
                                        </div>
                                        <!--end::Post content-->
                                        <!--begin::Block-->
                                        <!--end::Block-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Layout-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Post card-->
                    </div>
                    <!--end::Content container-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Content wrapper-->
        </div>
    </div>
    <!--end::Content wrapper-->
    <!--begin::Footer-->
    <?php include $part . 'Template/TP_Footer.php'; ?>
    <!--end::Footer-->
</div>