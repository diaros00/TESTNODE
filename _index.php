<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
	<title>TS ACADEMY | THAISUMMIT GROUP</title>
	<?php include "Template/TP_Css.php" ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-toolbar-enabled="true" class="app-default" >
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
			<?php include 'Template/TP_Header.php'; ?>
			<!--end::Header-->
			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active ">
										<center>
										<img src="assets/media/stock/900x600/1.jpg" class="card-rounded d-block w-100" alt="...">
										<div class="carousel-caption d-none d-md-block">
											<!-- title name course -->
											<h1 class="fs-3x text-gray-100">Design Thinking & Story Telling
												<br>
												<!-- title name type course -->
												<o class="fs-4x text-gray-200">Soft Skills</o>
												<br>
												<!-- title name curriculum -->
												<o class="fs-2x text-gray-300">Managerial Competency</o>
											</h1>
											<a href="#" class="btn btn-light-info px-6" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
										</div>
										</center>
									</div>
									<div class="carousel-item">
									<center>
										<img src="assets/media/stock/900x600/2.jpg" class="card-rounded d-block w-100" alt="...">
										<div class="carousel-caption d-none d-md-block">
											<!-- title name course -->
											<h1 class="fs-3x text-gray-100">Design Thinking & Story Telling
												<br>
												<!-- title name type course -->
												<o class="fs-4x text-gray-200">Soft Skills</o>
												<br>
												<!-- title name curriculum -->
												<o class="fs-2x text-gray-300">Managerial Competency</o>
											</h1>
											<a href="#" class="btn btn-light-info px-6" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
										</div>
										</center>
									</div>
									<div class="carousel-item">
									<center>
										<img src="assets/media/stock/900x600/3.jpg" class="card-rounded d-block w-100" alt="...">
										<div class="carousel-caption d-none d-md-block">
											<!-- title name course -->
											<h1 class="fs-3x text-gray-100">Design Thinking & Story Telling
												<br>
												<!-- title name type course -->
												<o class="fs-4x text-gray-200">Soft Skills</o>
												<br>
												<!-- title name curriculum -->
												<o class="fs-2x text-gray-300">Managerial Competency</o>
											</h1>
											<a href="#" class="btn btn-light-info px-6" style="font-family: 'Noto Sans Thai', sans-serif;">ลงทะเบียนเลย</a>
										</div>
										</center>
									</div>
								</div>
								<button class="carousel-control-prev fs-5x" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden fs-5x">Previous</span>
								</button>
								<button class="carousel-control-next fs-5x" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden fs-5x">Next</span>
								</button>
							</div>
							<!--end::Content container-->
						</div>
						<!--end::Content-->
						<!--begin::Content-->
						<section id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Card-->
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Heading-->
									<div class="card-px text-center pt-15 pb-15">
										<!--begin::Title-->
										<span class="ms-3 d-inline-flex position-relative text-dark">
											<h1 class="fs-5x fw-bold mb-0">
												<o style="color: #058619;">T</o>
												<o style="color: #FE7900;">S</o> ACADEMY
											</h1>
											<img class="w-100 position-absolute bottom-0 mb-n2" src="assets/media/misc/hero-home-title-underline.svg" alt="">
										</span>
										<!--end::Title-->
										<!--begin::Description-->
										<p class="text-gray-600 fs-1 fw-semibold py-7">
											พนักงานทุกคนในเครือไทยซัมมิทมีวิธีการของตนเอง<br>
											ในการเรียนรู้และความคิดสร้างสรรค์ พัฒนาทักษะทางวิชาชีพ เทคโนโลยี<br>
											TS ACADEMY ช่วยเสริมศักยภาพให้พนักงานเรียนรู้ สร้างสรรค์
											พัฒนาทักษะทางวิชาชีพ<br>
											ด้วยความสำเร็จ ช่วยในการขับเลื่อนและพัฒนาองค์กรไปข้างหน้าด้วยกัน</p>
										<!--end::Description-->
										<!--begin::Action-->

										<!--end::Action-->
									</div>
									<!--end::Heading-->
								</div>
								<!--end::Card body-->
								<!--end::Card-->
							</div>
							<!--end::Content container-->
						</section>
						<!--end::Content-->
						<!--begin::News-->

						<section id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Home card-->
								<div class="card">
									<!--begin::Body-->
									<div class="mb-15"></div>
									<h1 class="fs-4x fw-bold mb-5 text-center">ข่าวสารและการประชาสัมพันธ์ <br>
										<span class="ms-3 d-inline-flex position-relative">
											<o class="fs-2x">NEWS INFORMATION</o>
											<img class="w-100 position-absolute bottom-0 mb-n2" src="assets/media/misc/hero-home-title-underline.svg" alt="">
										</span>

									</h1>
									<!-- Begin:: TopNews -->
									<?php
									$PageLink = 'Home';
									include "News/NS_TopNews.php";

									?>
									<!-- End:: TopNews -->
									<!--end::Body-->

								</div>
								<!--end::Home card-->
							</div>
							<!--end::Content container-->
						</section>

						<!--end::News-->
						<div class="mb-15"></div>
						<section id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Home card-->
								<div class="card">
									<!--begin::Body-->
									<div class="mb-15"></div>
									<h1 class="fs-4x fw-bold mb-5 text-center">การเรียนรู้ที่ไม่มีวันสิ้นสุด <br>
										<span class="ms-3 d-inline-flex position-relative">
											<o class="fs-2x">COURSE TS ACADEMY</o>
											<img class="w-100 position-absolute bottom-0 mb-n2" src="assets/media/misc/hero-home-title-underline.svg" alt="">
										</span>

									</h1>
									<!-- Begin:: TopNews -->
									<?php
									$PageLink = 'Home';
									include "Course/CO_TopCourse.php";

									?>
									<!-- End:: TopNews -->
									<!--end::Body-->

								</div>
								<!--end::Home card-->
							</div>
							<!--end::Content container-->
						</section>
						<section id="kt_app_content" class="app-content flex-column-fluid">
							<!--end::Card Curriculum-->
							<div class="mb-15"></div>
							<!--begin::Instructor-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<div class="card" style="background-color: #080655">
									<!--begin::Card body-->
									<div class="card-body">
										<!--begin::Heading-->
										<div class="card-px text-center pt-15 pb-15">
											<!--begin::Title-->
											<h2 class="fs-4x fw-bold mb-0 text-center text-gray-200">
												วิทยากรชั้นนำของพวกเรา<br>
												<span class="ms-3 d-inline-flex position-relative">
													<o class="fs-2x text-danger">Our Expert Instructor</o>
													<img class="w-100 position-absolute bottom-0 mb-n2" src="assets/media/misc/hero-home-title-underline.svg" alt="">
												</span>
											</h2>
											<!--end::Title-->
											<div class="mb-15"></div>
											<!--begin::Description-->
											<div class="row">
												<div class="col-lg-4 col-sm-6 hover-elevate-up">
													<div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
														<div class="card-body p-0">
															<div class="symbol-label overlay-wrapper" style="background-image:url(assets/media/avatars/300-1.jpg)">
															</div>
															<div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
																<a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i class="ki-duotone ki-profile-circle fs-2x text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i></a>
															</div>
														</div>

													</div>
													<p>
														<o class="fs-2x text-gray-100">Mirnsdo Nmdied</o><br>
														<o class="fs-4 text-gray-500">Mechanical System (basic)</o>
													</p>

												</div>
												<div class="col-lg-4 col-sm-6 hover-elevate-up">
													<div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
														<div class="card-body p-0">
															<div class="symbol-label overlay-wrapper" style="background-image:url(assets/media/avatars/300-2.jpg)">
															</div>
															<div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
																<a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i class="ki-duotone ki-profile-circle fs-2x text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i></a>
															</div>
														</div>

													</div>
													<p>
														<o class="fs-2x text-gray-100">Mirnsdo Nmdied</o><br>
														<o class="fs-4 text-gray-500">Basic Cutting Tool & Drill</o>
													</p>

												</div>
												<div class="col-lg-4 col-sm-6 hover-elevate-up">
													<div class="symbol symbol-200px symbol-circle overlay overflow-hidden">
														<div class="card-body p-0">
															<div class="symbol-label overlay-wrapper" style="background-image:url(assets/media/avatars/300-3.jpg)">
															</div>
															<div class="overlay-layer bg-dark bg-opacity-25 hover-scale">
																<a href="Masterdata/MS_InstructorProfile.php" class="btn btn-icon btn-secondary"><i class="ki-duotone ki-profile-circle fs-2x text-primary">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i></a>
															</div>
														</div>

													</div>
													<p>
														<o class="fs-2x text-gray-100">Nidns Janicds</o><br>
														<o class="fs-4 text-gray-500">Basic CNC Machining lath...</o>
													</p>
												</div>
											</div>
											<!--end::Description-->
											<!--begin::Action-->

											<!--end::Action-->
										</div>
										<!--end::Heading-->
										<!--begin::Illustration-->
										<center><a href="Masterdata/MS_Instructor.php" class="btn btn-outline btn-outline-dashed btn-outline-primary btn-active-light-primary text-center hover-scale btn-lg fs-1x">VIEW
												ALL</a>
										</center>
										<!--end::Illustration-->
									</div>
									<!--end::Card body-->
								</div>
							</div>
							<!--end::Instructor-->
							<div class="mb-15"></div>
						</section>
						<!--begin::qa-->
						<section id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Card body-->
							<div class="card-body">
								<!--begin::Heading-->
								<div class="card-px text-center pt-15 pb-15">
									<!--begin::Title-->
									<h2 class="fs-4x fw-bold mb-0 text-center text-primary">
										<img class="w-3 mb-n2" src="assets/media/icons/canvas/ic-qa.png" width="200"><br>
										เมื่อมีคำถาม<br>เราก็มีคำตอบ<br>
										<span class="ms-3 d-inline-flex position-relative">
											<o class="fs-3x text-danger">Q & A</o>
											<img class="w-100 position-absolute bottom-0 mb-n2" src="assets/media/misc/hero-home-title-underline.svg" alt="">
										</span>
									</h2>
									<!--end::Title-->
								</div>
							</div>
							<!--end::Card body-->
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Home card-->

								<!--begin::Body-->
								<div class="card-body p-lg-10">
									<!--begin::Latest posts-->
									<div class="row">
										<div class="col-lg-2">

										</div>
										<div class="col-lg-8">
											<!--begin::Accordion-->
											<div class="accordion" id="kt_accordion_1">
												<div class="accordion-item">
													<h1 class="accordion-header" id="kt_accordion_1_header_1">
														<button class="accordion-button fs-1 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-expanded="true" aria-controls="kt_accordion_1_body_1">
															ระบบ Academy คืออะไร?
														</button>
													</h1>
													<div id="kt_accordion_1_body_1" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
														<div class="accordion-body">
															<p class="fs-3">สถานที่ที่บ่มเพาะความสามารถ
																และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
																ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
																หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
																Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
																เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
																มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
																เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
																เพราะสามารถกำหนด Training Road Map และ Development
																Program ต่างๆ ได้ตรงตามจุดประสงค์ขององค์กร</p>
														</div>
													</div>
												</div>

												<div class="accordion-item">
													<h2 class="accordion-header" id="kt_accordion_1_header_2">
														<button class="accordion-button fs-1 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_2" aria-expanded="false" aria-controls="kt_accordion_1_body_2">
															เป้าหมายของการอบรม TS ACADEMY
														</button>
													</h2>
													<div id="kt_accordion_1_body_2" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_2" data-bs-parent="#kt_accordion_1">
														<div class="accordion-body">
															<p class="fs-3">สถานที่ที่บ่มเพาะความสามารถ
																และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
																ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
																หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
																Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
																เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
																มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
																เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
																เพราะสามารถกำหนด Training Road Map และ Development
																Program ต่างๆ ได้ตรงตามจุดประสงค์ขององค์กร</p>
														</div>
													</div>
												</div>

												<div class="accordion-item">
													<h2 class="accordion-header" id="kt_accordion_1_header_3">
														<button class="accordion-button fs-1 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3" aria-expanded="false" aria-controls="kt_accordion_1_body_3">
															ปีนี้เปิดหลักสูตรอะไรบ้าง ?
														</button>
													</h2>
													<div id="kt_accordion_1_body_3" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
														<div class="accordion-body">
															<p class="fs-3">สถานที่ที่บ่มเพาะความสามารถ
																และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
																ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
																หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
																Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
																เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
																มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
																เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
																เพราะสามารถกำหนด Training Road Map และ Development
																Program ต่างๆ ได้ตรงตามจุดประสงค์ขององค์กร</p>
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="kt_accordion_1_header_4">
														<button class="accordion-button fs-1 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_4" aria-expanded="false" aria-controls="kt_accordion_1_body_4">
															ทำไมถึงต้องอบรม TSACADEMY
														</button>
													</h2>
													<div id="kt_accordion_1_body_4" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_4" data-bs-parent="#kt_accordion_1">
														<div class="accordion-body">
															<p class="fs-3">สถานที่ที่บ่มเพาะความสามารถ
																และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
																ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
																หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
																Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
																เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
																มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
																เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
																เพราะสามารถกำหนด Training Road Map และ Development
																Program ต่างๆ ได้ตรงตามจุดประสงค์ขององค์กร</p>
														</div>
													</div>
												</div>
												<div class="accordion-item">
													<h2 class="accordion-header" id="kt_accordion_1_header_5">
														<button class="accordion-button fs-1 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_5" aria-expanded="false" aria-controls="kt_accordion_1_body_5">
															วิธีการแจ้งปัญหาการใช้งาน
														</button>
													</h2>
													<div id="kt_accordion_1_body_5" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_5" data-bs-parent="#kt_accordion_1">
														<div class="accordion-body">
															<p class="fs-3">สถานที่ที่บ่มเพาะความสามารถ
																และดึงศักยภาพของผู้คนออกมารับใช้เพื่อนมนุษย์
																ผ่านการทำงาน ด้วยหัวใจ Academy คือ ระบบ
																หรือเครื่องยนต์ที่จะขับเคลื่อนองค์กรไปสู่ความสำเร็จได้อย่างรวดเร็วกว่า
																Academy เป็นกลไกที่จะช่วยให้คุณสามารถบรรลุความฝัน
																เป้าหมาย และวิสัยทัศน์ขององค์กร องค์ขนาดใหญ่
																มีหน่วยงานดูแลเรื่องการพัฒนาบุคลากรโดยเฉพาะ
																เพื่อเป็นศูนย์การเรียนรู้ครบวงจรของตัวเอง
																เพราะสามารถกำหนด Training Road Map และ Development
																Program ต่างๆ ได้ตรงตามจุดประสงค์ขององค์กร</p>
														</div>
													</div>
												</div>
											</div>
											<!--end::Accordion-->
										</div>
										<div class="col-lg-2"></div>
									</div>
									<!--end::Latest posts-->
								</div>
								<!--end::Body-->

								<!--end::Home card-->
							</div>
							<!--end::Content container-->
						</section>
						<center><a href="HelpDesk/HD_QA.php" class="btn btn-outline btn-outline-dashed btn-outline-secondary btn-active-light-secondary text-center hover-scale btn-lg fs-1x">VIEW
								ALL</a></center>
						<!--end::qa-->
					</div>
					<div class="mb-15"></div>
					<section class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between mx-auto mb-10">
						<!--begin::Item-->
						<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bg-info rounded-circle overflow-hidden">
							<!--begin::Symbol-->
							<span class="mb-3 ">
								<i class="ki-duotone ki-profile-user fs-5x text-gray-100" style="font-size: 100px;">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
									<span class="path5"></span>
								</i>
							</span>
							<!--end::Symbol-->

							<!--begin::Info-->
							<div class="mb-0">
								<!--begin::Value-->
								<div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
									<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700" data-kt-countup-suffix="+">0</div>
								</div>
								<!--end::Value-->

								<!--begin::Label-->
								<span class="text-gray-300 fw-semibold fs-5 lh-0">
									VIEW VISIT TS ACADEMY
								</span>
								<!--end::Label-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::Item-->
					</section>
					<!--end::Content wrapper-->
					<!--begin::Footer-->
					<?php include 'Template/TP_Footer.php'; ?>
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
	<!--begin::Javascript-->
	<script>
		var hostUrl = "assets/";
	</script>
	<?php include "Template/TP_Js.php" ?>
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>