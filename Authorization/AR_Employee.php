<?php
session_start();
$part = '../'; 
$ARSW = 'here show menu-here-bg';
$textAR = 'text-primary';
$AR_employee = 'active';
$textAR_employee = 'text-primary';

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
	<div class="d-flex flex-column  flex-root app-root" id="kt_app_root">
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
							<!--begin::Toolbar container-->
							<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column justify-content-center me-3">
									<!--begin::Title-->
									<h1 class="page-heading d-flex text fw-bold fs-2x flex-column justify-content-center my-0">List of Account</h1>
									<!--end::Title-->
									<span class="font-Noto text-gray-600 fs-5">การจัดการบัญชีผู้ใช้</span>
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center">
									<a href="#" class="btn btn-icon btn-primary w-200px h-55px" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
										<i class="fa-solid fa-user-plus me-1 fs-5"></i>Add a new account
									</a>
									<a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="right" title="New Campaign"></a>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header mt-6">
										<!--begin::Card title-->
										<div class="card-title d-flex flex-column flex-end">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1 me-5 ">
												<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
												<input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-300px w-lg-500px ps-13" placeholder="Search " />
											</div>
											<!--end::Search-->
										</div>
										<!--end::Card title-->
										<!--begin::Card title-->
										<div class="card-title d-flex flex-column flex-end">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1 me-5 ">
												<div class="d-flex flex-row-fluid flex-end">
													<!--begin::Title-->
													<div class="btn btn-primary btn-group" role="group">
														<div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															View Option
														</div>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item text-gray-700 fs-3" href="#" data-bs-toggle="modal" data-bs-target="#filter_employee"><i class="fa-solid fa-filter text-gray-700 me-2 fs-3"></i>Filter data</a></li>
															<li><a class="dropdown-item text-gray-700 fs-3" href="#"><i class="fa-solid fa-file-excel me-2 text-gray-700 fs-3"></i>Export report</a></li>
														</ul>
													</div>
													<!--end::Title-->
												</div>
											</div>
											<!--end::Search-->
										</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<div class="table-responsive">
											<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_employee_table">
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-1px">NO.</th>
														<th class="min-w-50px text-center">USERNAME</th>
														<th class="min-w-200px text-center">NAME</th>
														<th class="min-w-50px">DEPARTMENT</th>
														<th class="min-w-100px">FUNCTION</th>
														<th class="min-w-50px">COMPANY</th>
														<th class="min-w-1px">STATUS</th>
														<th class="min-w-1px">ACTION</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
													<?php for ($list = 2; $list <= 21; $list++) { ?>
														<tr>
															<td class="fs-5 fs-lg-2 font-Noto"><?php echo $list ?></td>
															<td class="text-primary text-center fs-3 font-Noto">01260<?php echo $list ?></td>
															<td>
																<div class="d-flex flex-stack">
																	<!--begin::Symbol-->
																	<div class="overlay-wrapper me-1">
																		<div class="symbol symbol-50px symbol-circle mb-5">
																			<img src="assets/media/avatars/300-<?php echo $list ?>.jpg" alt="image" />
																		</div>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<!--begin:Author-->
																		<div class="flex-grow-1 me-1">
																			<div class="text-primary text-hover-primary fs-6 fw-bold">นันทนัช แกวสิงห์</div>
																			<h1 class="text-muted fw-semibold d-block fs-6">NANTANAT KAEWSINGHA</h1>
																		</div>
																		<!--end:Author-->
																	</div>
																	<!--end::Section-->
																</div>
															</td>
															<td class="text-danger fs-4">MARKTING 4 DEPT.</td>
															<td>Marketing</td>
															<td class="text-info fs-4">TSH</td>
															<td class="text-success"><span class="badge badge-light-success fs-5">Active</span></td>
															<td>
																<div class="btn btn-primary btn-sm btn-group" role="group">
																	<div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="fa-solid fa-eye me-1"></i>View
																	</div>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_permission_user"><i class="fa-solid fa-user-lock me-2 text-gray-700 fs-3"></i>Permission</a></li>
																		<li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_user"><i class="fa-solid fa-user-pen me-2 text-gray-700 fs-3"></i>Edit</a></li>
																		<li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
																	</ul>
																</div>
															</td>
														</tr>
														<?php $list = ($list + 1); ?>
														<tr>
															<td class="fs-5 fs-lg-2 font-Noto"><?php echo $list ?></td>
															<td class="text-primary text-center fs-3 font-Noto">01260<?php echo $list ?></td>
															<td>
																<div class="d-flex flex-stack">
																	<!--begin::Symbol-->
																	<div class="overlay-wrapper me-1">
																		<div class="symbol symbol-50px symbol-circle mb-5">
																			<img src="assets/media/avatars/300-<?php echo $list ?>.jpg" alt="image" />
																		</div>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<!--begin:Author-->
																		<div class="flex-grow-1 me-1">
																			<div class="text-primary text-hover-primary fs-6 fw-bold">สมรักษ์ สุขมาหา</div>
																			<h1 class="text-muted fw-semibold d-block fs-6">NANTANAT KAEWSINGHA</h1>
																		</div>
																		<!--end:Author-->
																	</div>
																	<!--end::Section-->
																</div>
															</td>
															<td class="text-danger fs-4">PRODUCTION CONTROL DEPT.</td>
															<td>Marketing</td>
															<td class="text-info fs-4">TSH</td>
															<td class="text-success"><span class="badge badge-light-dark fs-5">Resign</span></td>
															<td>
																<div class="btn btn-primary btn-sm btn-group" role="group">
																	<div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
																		<i class="fa-solid fa-eye me-1"></i>View
																	</div>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_permission_user"><i class="fa-solid fa-user-lock me-2 text-gray-700 fs-3"></i>Permission</a></li>
																		<li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_user"><i class="fa-solid fa-user-pen me-2 text-gray-700 fs-3"></i>Edit</a></li>
																		<li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
																	</ul>
																</div>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
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
	<!-- begin::modal -->
	<!-- begin::request -->
	<?php include "AR_ModalEmployeeFilter.php" ?>
	<?php include "AR_ModalEmployeeAdd.php" ?>
	<?php include "AR_ModalEmployeeEdit.php" ?>
	<?php include "AR_ModalEmployeePermission.php" ?>
	<!-- end::request -->
	<!-- end::modal -->
	<!--begin::Javascript-->

	<?php include $part . "Template/TP_Js.php" ?>
	<script src="Authorization/AR_Employee.js"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>