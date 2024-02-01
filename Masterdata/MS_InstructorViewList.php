<div class="card">
    <div class="card-body pt-5">
        <?php  for($instructor = 1; $instructor <=20; $instructor++){?>
        <div class="d-flex flex-stack">
            <!--begin::Symbol-->
            <div class="overlay-wrapper me-8">
                <a href="Masterdata/MS_InstructorProfile.php" class="symbol symbol-150px symbol-circle mb-5">
                    <img src="assets/media/avatars/300-<?php echo $instructor ?>.jpg" alt="image" />
                </a>
            </div>
            <!--end::Symbol-->
            <!--begin::Section-->
            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                <!--begin:Author-->
                <div class="flex-grow-1 me-2">
                    <a href="Masterdata/MS_InstructorProfile.php"
                        class="text-gray-800 text-hover-primary fs-6 fw-bold fs-2">Patric Watson</a>
                    <h1 class="text-muted fw-semibold d-block fs-3">
                    การใช้งานหุ่นยนต์ในอุตสาหกรรม...</h1>
                    <p class="fs-5 fw-bold text-primary font-Noto">10
                    <o class="fw-semibold text-gray-500 font-Noto">รุ่น</o></p>
                </div>
                <!--end:Author-->
            </div>
            <!--end::Section-->
        </div>
        <!--begin::Separator-->
        <div class="separator separator-dashed my-4"></div>
        <!--end::Separator-->

        <?php } ?>
    </div>
</div>