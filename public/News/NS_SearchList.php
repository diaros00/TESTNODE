<?php  for($data = 1; $data <=20; $data++){?>
<div class="card-body pt-5">
    <!--begin::Item-->
    <div class="row">
        <div class="col-sm-12 col-lg-4">
            <img src="assets/media/stock/600x400/img-<?php echo $data ?>.jpg" alt="" class="rounded" width="250" />
        </div>
        <div class="col-sm-12 col-lg-8">
            <a href="News/NS_Post.php" class="text-gray-800 text-hover-primary fs-6 fw-bold fs-2">เปิดลงทะเบียนหลักสูตร
                Effective Communicative</a>
            <h1 class="text-muted fw-semibold d-block fs-3">
                ในหลักสูตรนี้ได้เปิดรับสมัครจำนวน 20 คน อบรมในวันที่ 10 มกราคม
                2566 เวลา 08.00 - 17.00 ณ TS ACADEMY</h1>
            <p><i class="fa-regular fa-calendar-days"></i> Dec 27, 2021 <i class="fa-regular fa-eye"></i> 1,000</p>
            <span class="badge badge-light-info fw-bold my-2">COURSE</span>
        </div>
    </div>
    <!--end::Item-->
    <!--begin::Separator-->
    <div class="separator separator-dashed my-4"></div>
    <!--end::Separator-->
</div>
<?php } ?>