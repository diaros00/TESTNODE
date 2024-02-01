<?php 
session_start();
$part = '../'; 
$CourseSW = 'here show menu-here-bg';
$textCourse = 'text-primary';
$CO_Profile = 'active';
$textCO_Profile = 'text-primary';
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../" />
	<title>TS ACADEMY | THAISUMMIT GROUP</title>
	<?php include $part . "Template/TP_Css.php" ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			<?php include $part . 'Template/TP_Header.php'; ?>
			<!--end::Header-->
			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-8">
						</div>
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Navbar-->
								<?php include "CO_ProHeader.php" ?>
								<!--end::Navbar-->
								<!--begin::Nav items-->
								<div id="kt_user_profile_nav" class="rounded bg-gray-200 d-flex flex-stack flex-wrap mb-9 p-2" data-kt-sticky="true" data-kt-sticky-name="sticky-profile-navs" data-kt-sticky-offset="{default: false, lg: '400px'}" data-kt-sticky-width="{target: '#kt_user_profile_panel'}" data-kt-sticky-left="auto" data-kt-sticky-top="70px" data-kt-sticky-animation="true" data-kt-sticky-zindex="95">
									<!--begin::Nav-->
									<ul class="nav flex-wrap border-transparent">
										<!--begin::Nav item-->
										<li class="nav-item my-1">
											<a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1 active" href="Course/CO_Profile.php">My Enrolled Courses<br>
												<o class="fw-light text-gray-500 fs-7 fs-lg-5">ลงทะเบียนหลักสูตรของฉัน</o>
											</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item my-1">
											<a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Course/CO_ProActive.php">Active Courses<br>
												<o class="fw-light text-gray-500 fs-7 fs-lg-5">กำลังอบรมหลักสูตร</o>
											</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item my-1">
											<a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Course/CO_ProCompleted.php">Completed Course<br>
												<o class="fw-light text-gray-500 fs-7 fs-lg-5">สำเร็จหลักสูตร</o>
											</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item my-1">
											<a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Course/CO_ProRequest.php">Request Course <span class="badge badge-dark">6 รายการ</span><br>
												<o class="fw-light text-gray-500 fs-7 fs-lg-5">คำสั่งอนุมัติลงทะเบียน</o>
											</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item my-1">
											<a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-7 fs-lg-3 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="Course/CO_ProReport.php">Grade report<br>
												<o class="fw-light text-gray-500 fs-7 fs-lg-5">ผลคะแนนอบรมหลักสูตร</o>
											</a>
										</li>
										<!--end::Nav item-->
									</ul>
									<!--end::Nav-->
								</div>
								<!--end::Nav items-->
								<!--begin::details View-->
								<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bold m-0">ทั้งหมด 12 หลักสูตร</h3>
										</div>
										<!--end::Card title-->
										<!--begin::Action-->
										<a href="account/settings.html" class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
										<!--end::Action-->
									</div>
									<!--begin::Card header-->
									<!--begin::Card body-->
									<div class="card-body p-9">
										<div class="row g-10">
											<!--begin::Col-->
											<?php for ($news = 1; $news <= 1; $news++) { ?>
												<div class="col-md-4">
													<!--begin::Feature post-->
													<div class="card-xl-stretch me-md-6">
														<div class="ribbon ribbon-top">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-<?php echo $news ?>.jpg')">
															</div>
															<!--end::Image-->
															<div class="ribbon-label bg-secondary font-Noto text-dark">รอกำหนดการอบรม
															</div>
															<!--begin::Overlay-->

															<!--end::Overlay-->
															<!--begin::Body-->
															<div class="mt-5">
																<!--begin::หัวข้อข่าว-->
																<a href="Course/CO_Train.php?category=Wait" class="fs-4 text-gray-500 fw-bold text-hover-primary lh-base">วิธีการรับวัตถุดิบและชิ้นส่วนภายใน-นอก
																	และงานจัดจ้าง</a>
																<!--end::หัวข้อข่าว-->
																<!--begin::รายละเอียดข่าว-->
																<div class="fw-semibold fs-5 text-gray-600 my-3">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-circle symbol-30px me-3">
																			<img src="assets/media/avatars/300-6.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<span class="text-gray-500 fw-semibold d-block fs-7">Mustakeam
																				Thoha</span>
																		</div>
																	</div>
																</div>
																<!--end::รายละเอียดข่าว-->
																<!--begin::Content-->
																<div class="d-flex justify-content-between align-items-center">
																	<div class="fs-6 fw-bold">
																		<!--begin::วันที่และยอดวิว-->
																		<span class="text-gray-500"><i class="fa-regular fa-calendar-days"></i> Dec
																			27,
																			2021
																			<!--end::วันที่และยอดวิว-->
																	</div>
																	<!--end::Content-->
																	<!--begin::หมวด-->
																	<span class="fw-bold my-2 font-Noto"><i class="text-dark fa-solid fa-chalkboard-user me-1"></i>
																		1 รุ่น</span>
																	<!--end::หมวด-->
																</div>
															</div>
															<!--end::Body-->
														</div>

													</div>
													<!--end::Feature post-->
												</div>
											<?php } ?>
											<?php for ($news = 2; $news <= 3; $news++) { ?>
												<div class="col-md-4">
													<!--begin::Feature post-->
													<div class="card-xl-stretch me-md-6">
														<div class="ribbon ribbon-top">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-<?php echo $news ?>.jpg')">
															</div>
															<!--end::Image-->
															<div class="ribbon-label bg-primary font-Noto">เข้าชั้นเรียน
															</div>
															<!--begin::Overlay-->

															<!--end::Overlay-->
															<!--begin::Body-->
															<div class="mt-5">
																<!--begin::หัวข้อข่าว-->
																<a href="Course/CO_Train.php" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">วิธีการรับวัตถุดิบและชิ้นส่วนภายใน-นอก
																	และงานจัดจ้าง</a>
																<!--end::หัวข้อข่าว-->
																<!--begin::รายละเอียดข่าว-->
																<div class="fw-semibold fs-5 text-gray-600 my-3">
																	<div class="d-flex align-items-center">
																		<div class="symbol symbol-circle symbol-30px me-3">
																			<img src="assets/media/avatars/300-6.jpg" class="" alt="" />
																		</div>
																		<div class="d-flex justify-content-start flex-column">
																			<span class="text-gray-500 fw-semibold d-block fs-7">Mustakeam
																				Thoha</span>
																		</div>
																	</div>
																</div>
																<!--end::รายละเอียดข่าว-->
																<!--begin::Content-->
																<div class="d-flex justify-content-between align-items-center">
																	<div class="fs-6 fw-bold">
																		<!--begin::วันที่และยอดวิว-->
																		<span class="text-gray-500"><i class="fa-regular fa-calendar-days"></i> Dec
																			27,
																			2021
																			<!--end::วันที่และยอดวิว-->
																	</div>
																	<!--end::Content-->
																	<!--begin::หมวด-->
																	<span class="fw-bold my-2 font-Noto"><i class="text-dark fa-solid fa-chalkboard-user me-1"></i>
																		1 รุ่น</span>
																	<!--end::หมวด-->
																</div>
															</div>
															<!--end::Body-->
														</div>

													</div>
													<!--end::Feature post-->
												</div>
											<?php } ?>
											<?php for ($news = 5; $news <= 6; $news++) { ?>
												<div class="col-md-4">
													<!--begin::Feature post-->
													<div class="card-xl-stretch me-md-6">
														<div class="ribbon ribbon-top">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-<?php echo $news ?>.jpg')">
															</div>
															<!--end::Image-->
															<div class="ribbon-label bg-warning font-Noto">ทำแบบทดสอบไม่สำเร็จ
															</div>
															<!--begin::Overlay-->

															<!--end::Overlay-->
															<!--begin::Body-->
															<div class="mt-5">
																<!--begin::หัวข้อข่าว-->
																<a href="Course/CO_Train.php?category=PostTest&status=Fail" class="fs-4 fw-bold text-hover-primary lh-base" style="color: #FF5631;"><i class="fa-solid fa-circle-exclamation fs-2 text-warning me-2"></i>
																	วิธีการรับวัตถุดิบและชิ้นส่วนภายใน-นอก และงานจัดจ้าง</a>
																<!--end::หัวข้อข่าว-->
																<!--begin::รายละเอียดข่าว-->
																<div class="d-flex progress mb-3" style="height: 15px;">
																	<div class="progress-bar bg-warning fs-7" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">50%</div>
																</div>
																<!--end::รายละเอียดข่าว-->
																<!--begin::Content-->
																<div class="d-flex justify-content-between align-items-center">
																	<div class="fs-6 fw-bold">
																		<!--begin::วันที่และยอดวิว-->
																		<span class="text-gray-500"><i class="fa-regular fa-calendar-days"></i> Dec 27,2021
																			<!--end::วันที่และยอดวิว-->
																	</div>
																	<!--end::Content-->
																	<!--begin::หมวด-->
																	<span class="fw-bold my-2 font-Noto"><i class="text-dark fa-solid fa-chalkboard-user me-1"></i>
																		1 รุ่น</span>
																	<!--end::หมวด-->
																</div>
															</div>
															<!--end::Body-->
														</div>

													</div>
													<!--end::Feature post-->
												</div>
											<?php } ?>
											<?php for ($news = 7; $news <= 8; $news++) { ?>
												<div class="col-md-4">
													<!--begin::Feature post-->
													<div class="card-xl-stretch me-md-6">
														<div class="ribbon ribbon-top">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-<?php echo $news ?>.jpg')">
															</div>
															<!--end::Image-->
															<div class="ribbon-label bg-warning font-Noto">ประเมินความพึงพอใจไม่สำเร็จ
															</div>
															<!--begin::Overlay-->

															<!--end::Overlay-->
															<!--begin::Body-->
															<div class="mt-5">
																<!--begin::หัวข้อข่าว-->
																<a href="Course/CO_Train.php?category=Assessment&status=Fail" class="fs-4 fw-bold text-hover-primary lh-base" style="color: #FF5631;"><i class="fa-solid fa-circle-exclamation fs-2 text-warning me-2"></i>
																	วิธีการรับวัตถุดิบและชิ้นส่วนภายใน-นอก และงานจัดจ้าง</a>
																<!--end::หัวข้อข่าว-->
																<!--begin::รายละเอียดข่าว-->
																<div class="d-flex progress mb-3" style="height: 15px;">
																	<div class="progress-bar bg-warning fs-7" role="progressbar" style="width: 75%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">75%</div>
																</div>
																<!--end::รายละเอียดข่าว-->
																<!--begin::Content-->
																<div class="d-flex justify-content-between align-items-center">
																	<div class="fs-6 fw-bold">
																		<!--begin::วันที่และยอดวิว-->
																		<span class="text-gray-500"><i class="fa-regular fa-calendar-days"></i> Dec 27,2021
																			<!--end::วันที่และยอดวิว-->
																	</div>
																	<!--end::Content-->
																	<!--begin::หมวด-->
																	<span class="fw-bold my-2 font-Noto"><i class="text-dark fa-solid fa-chalkboard-user me-1"></i>
																		1 รุ่น</span>
																	<!--end::หมวด-->
																</div>
															</div>
															<!--end::Body-->
														</div>

													</div>
													<!--end::Feature post-->
												</div>
											<?php } ?>
											<?php for ($news = 9; $news <= 10; $news++) { ?>
												<div class="col-md-4">
													<!--begin::Feature post-->
													<div class="card-xl-stretch me-md-6">
														<div class="ribbon ribbon-top">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('assets/media/stock/600x400/img-<?php echo $news ?>.jpg')">
															</div>
															<!--end::Image-->
															<div class="ribbon-label bg-success font-Noto">สำเร็จหลักสูตร
															</div>
															<!--begin::Overlay-->

															<!--end::Overlay-->
															<!--begin::Body-->
															<div class="mt-5">
																<!--begin::หัวข้อข่าว-->
																<a href="Course/CO_Train.php?category=Complete" class="fs-4 fw-bold text-hover-primary lh-base" style="color: #1D8348;"><i class="fa-solid fa-circle-check fs-2 text-success me-2"></i>
																	วิธีการรับวัตถุดิบและชิ้นส่วนภายใน-นอก และงานจัดจ้าง</a>
																<!--end::หัวข้อข่าว-->
																<!--begin::รายละเอียดข่าว-->
																<div class="d-flex progress mb-3" style="height: 15px;">
																	<div class="progress-bar bg-success fs-7" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">100%</div>
																</div>
																<!--end::รายละเอียดข่าว-->
																<!--begin::Content-->
																<div class="d-flex justify-content-between align-items-center">
																	<div class="fs-6 fw-bold">
																		<!--begin::วันที่และยอดวิว-->
																		<span class="text-gray-500"><i class="fa-regular fa-calendar-days"></i> Dec 27,2021
																			<!--end::วันที่และยอดวิว-->
																	</div>
																	<!--end::Content-->
																	<!--begin::หมวด-->
																	<span class="fw-bold my-2 font-Noto"><i class="text-dark fa-solid fa-chalkboard-user me-1"></i>
																		1 รุ่น</span>
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
									<!--end::Card body-->
								</div>
								<!--end::details View-->

							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Content wrapper-->
					<!--begin::Footer-->
					<?php include $part . 'Template/TP_Footer.php'; ?>
					<!--end::Footer-->
				</div>
				<!--end:::Main-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::App-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<i class="ki-duotone ki-arrow-up">
			<span class="path1"></span>
			<span class="path2"></span>
		</i>
	</div>
	<!--end::Scrolltop-->
	<!-- begin::filter group -->
	<?php include "DS_GroupModelFilter.php" ?>
	<!-- end::filter group -->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used for this page only)-->
	<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used for this page only)-->
	<script src="assets/js/custom/pages/social/feeds.js"></script>
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>
	<script src="Course/DS_Department.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>