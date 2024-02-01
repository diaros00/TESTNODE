<?php for($instructor = 1;  $instructor <= 21; $instructor++){ ?>
<div class="col-sm-6 col-md-4 col-lg-4 col-xxl-4">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body d-flex flex-center flex-column py-9 px-5">
            <!--begin::Avatar-->
            <a href="Instructor/IT_InstructorProfile.php" class="symbol symbol-150px symbol-circle mb-5">
                <img src="assets/media/avatars/300-<?php echo 1 ?>.png" alt="image" style="background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);"/>
            </a>
            <!--end::Avatar-->
            <!--begin::Name-->
            <a href="Instructor/IT_InstructorProfile.php" class="fs-2 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
            <!--end::Name-->
            <!--begin::course-->
            <p class="fw-semibold text-gray-500 mb-6 fs-4">การใช้งานหุ่นยนต์ในอุตสาหกรรม...
            </p>
            <!--end::course-->
            <!--begin::Info-->
            <div class="d-flex flex-center flex-wrap mb-5">
                <!--begin::Stats-->
                <div class="border border-dashed border-primary rounded min-w-90px py-3 px-4 mx-2 mb-3 text-center">
                    <div class="fs-5 fw-bold text-primary font-Noto">10</div>
                    <o class="fw-semibold text-gray-500 font-Noto">รุ่น</o>
                </div>
                <!--end::Stats-->
            </div>
            <!--end::Info-->
        </div>
        <!--begin::Card body-->
    </div>
    <!--begin::Card-->
</div>
<?php } ?>