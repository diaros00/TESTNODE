<div class="modal bg-body fade" tabindex="-1" id="kt_modal_add_instructor">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h5 class="modal-title">Add Instructor</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-200px">
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 active btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_profile">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Profile</span>
                                        <span class="fs-7">ข้อมูลโปรไฟล์</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_company">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Organization</span>
                                        <span class="fs-7">ข้อมูลองค์กร</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_contact">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Contact</span>
                                        <span class="fs-7">การติดต่อ</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_experiences">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Experiences</span>
                                        <span class="fs-7">ประสบการณ์ในการทำงาน</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_education">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Education</span>
                                        <span class="fs-7">การศึกษา</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_skills">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start text-start">
                                        <span class="fs-8 fs-lg-6  fw-bold">Skills</span>
                                        <span class="fs-9 fs-lg-7">ผลงาน / ทักษะชำนาญการ / ใบรับรอง</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_quality">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start text-start">
                                        <span class="fs-8 fs-lg-6 fw-bold">My Quality Declaration</span>
                                        <span class="fs-9 fs-lg-7">คำประกาศคุณภาพของฉัน</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_system">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">System</span>
                                        <span class="fs-7">ข้อมูลระบบ</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-10">

                        <div class="tab-content" id="myTabContent">

                            <!-- begin::Profile -->
                            <div class="tab-pane fade show active" id="tab_profile" role="tabpanel">
                                <span class="font-Noto fs-3">ข้อมูลโปรไฟล์</span>
                                <div class="separator mb-10"></div>
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="d-block fw-semibold fs-6 mb-5 font-Noto">Profile Picture</label>
                                    <!--end::Label-->
                                    <!--begin::Image placeholder-->
                                    <style>
                                        .image-input-placeholder {
                                            background-image: url('assets/media/svg/files/blank-image.svg');
                                        }

                                        [data-bs-theme="dark"] .image-input-placeholder {
                                            background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                        }
                                    </style>
                                    <!--end::Image placeholder-->
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/svg/files/blank-image.svg);"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <i class="ki-duotone ki-pencil fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text font-Noto">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group-->
                                <div class="row mb-8">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input first name-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Firstname-TH / ชื่อจริง-ไทย</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="first_name" id="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="First name TH" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input first name-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Lastname-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Lastname-TH / นามสกุล-ไทย</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="first_name" id="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Lastname TH" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Lastname-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input first name-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Firstname-ENG / ชื่อจริง-อังกฤษ</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="first_name" id="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Firstname ENG" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input first name-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Lastname-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Lastname-ENG / นามสกุล-อังกฤษ</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="first_name" id="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Lastname ENG" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Lastname-->
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!--begin::Input first name-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fw-semibold fs-6 mb-2 font-Noto">Personal record / ประวัติส่วนตัวแบบย่อ</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="form-floating">
                                                <textarea class="form-control form-control-solid" placeholder="Address" id="floatingTextarea1" style="height: 200px"></textarea>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Input first name-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::Profile -->

                            <!-- begin::company -->
                            <div class="tab-pane fade" id="tab_company" role="tabpanel">
                                <span class="font-Noto fs-3">ข้อมูลองค์กร</span>
                                <div class="separator mb-10"></div>
                                <div class="row mb-8">
                                    <div class="col-sm-12 col-mb-6 col-lg-6">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Position / ตำแหน่งงาน</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_add_instructor" data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">เจ้าหน้าที่</option>
                                                <option value="1">ผู้จัดการส่วน</option>
                                                <option value="1">ผู้จัดการทั่วไป</option>
                                                <option value="1">หัวหน้าแผนก</option>
                                                <option value="1">หัวหน้ากลุ่ม</option>
                                                <option value="1">วิศวกรประจำฝ่าย</option>
                                                <option value="1">ประธานกิตติมศักดิ์</option>
                                                <option value="1">ช่างเทคนิค</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Company / บริษัท</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_add_instructor" data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Thai Summit Automotive Co., Ltd. (Headquarter)</option>
                                                <option value="1">Thai Summit Eastern Seaboard Autoparts Industry Co., Ltd.</option>
                                                <option value="1">Thai Summit Autoparts Co., Ltd.</option>
                                                <option value="1">Thai Summit Auto Press Co., Ltd.</option>
                                                <option value="1">Thai Summit Laemchabang Autoparts Co., Ltd.</option>
                                                <option value="1">Thai Summit Banpho Co., Ltd.</option>
                                                <option value="1">Thai Summit Plastech Co., Ltd. (Branch 2)</option>
                                                <option value="1">Thai Summit Rayong Autoparts Industry Co., Ltd.</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Office / สำนัก</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_add_instructor" data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                <option value="H000000">H000000 : TSH CENTER</option>
                                                <option value="H100000">H100000 : MARKETING & NEW PROJECT OFFICE</option>
                                                <option value="H200000">H200000: ACCOUNT&FINANCE OFFICE</option>
                                                <option value="H300000">H300000: SUPPLY CHAIN MANAGEMENT OFFICE</option>
                                                <option value="H400000">H400000: ORGANIZATION DEVELOPMENT OFFICE</option>
                                                <option value="H500000">H500000: ENGINEERING OFFICE</option>
                                                <option value="H600000">H600000: MANUFACTURING OFFICE</option>
                                                <option value="H700000">H700000: RESERCH & DEVELOPMENT OFFICE</option>
                                                <option value="H800000">H800000: ENGINEERING & QUALITY ASSURANCE</option>
                                                <option value="H900000">H900000: BOARD OF DIRECT OFFICE</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Department / ฝ่าย</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_add_instructor" data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                <option value="H000000">H000000 : TSH CENTER</option>
                                                <option value="H100000">H100000 : MARKETING & NEW PROJECT OFFICE</option>
                                                <option value="H200000">H200000: ACCOUNT&FINANCE OFFICE</option>
                                                <option value="H300000">H300000: SUPPLY CHAIN MANAGEMENT OFFICE</option>
                                                <option value="H400000">H400000: ORGANIZATION DEVELOPMENT OFFICE</option>
                                                <option value="H500000">H500000: ENGINEERING OFFICE</option>
                                                <option value="H600000">H600000: MANUFACTURING OFFICE</option>
                                                <option value="H700000">H700000: RESERCH & DEVELOPMENT OFFICE</option>
                                                <option value="H800000">H800000: ENGINEERING & QUALITY ASSURANCE</option>
                                                <option value="H900000">H900000: BOARD OF DIRECT OFFICE</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Division / ส่วน</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_add_instructor" data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                <option value="H000000">H000000 : TSH CENTER</option>
                                                <option value="H100000">H100000 : MARKETING & NEW PROJECT OFFICE</option>
                                                <option value="H200000">H200000: ACCOUNT&FINANCE OFFICE</option>
                                                <option value="H300000">H300000: SUPPLY CHAIN MANAGEMENT OFFICE</option>
                                                <option value="H400000">H400000: ORGANIZATION DEVELOPMENT OFFICE</option>
                                                <option value="H500000">H500000: ENGINEERING OFFICE</option>
                                                <option value="H600000">H600000: MANUFACTURING OFFICE</option>
                                                <option value="H700000">H700000: RESERCH & DEVELOPMENT OFFICE</option>
                                                <option value="H800000">H800000: ENGINEERING & QUALITY ASSURANCE</option>
                                                <option value="H900000">H900000: BOARD OF DIRECT OFFICE</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Section / แผนก</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_add_instructor" data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                <option value="H000000">H000000 : TSH CENTER</option>
                                                <option value="H100000">H100000 : MARKETING & NEW PROJECT OFFICE</option>
                                                <option value="H200000">H200000: ACCOUNT&FINANCE OFFICE</option>
                                                <option value="H300000">H300000: SUPPLY CHAIN MANAGEMENT OFFICE</option>
                                                <option value="H400000">H400000: ORGANIZATION DEVELOPMENT OFFICE</option>
                                                <option value="H500000">H500000: ENGINEERING OFFICE</option>
                                                <option value="H600000">H600000: MANUFACTURING OFFICE</option>
                                                <option value="H700000">H700000: RESERCH & DEVELOPMENT OFFICE</option>
                                                <option value="H800000">H800000: ENGINEERING & QUALITY ASSURANCE</option>
                                                <option value="H900000">H900000: BOARD OF DIRECT OFFICE</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::company -->

                            <!-- begin::contact -->
                            <div class="tab-pane fade" id="tab_contact" role="tabpanel">
                                <span class="font-Noto fs-3">ข้อมูลการติดต่อ</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input first name-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fw-semibold fs-6 mb-2 font-Noto">Email / อีเมล์</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Input first name-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Lastname-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">PHONE / เบอร์โทร</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="first_name" id="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Phone" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Lastname-->
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!--begin::Input first name-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fw-semibold fs-6 mb-2 font-Noto">Address / ที่อยู่</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="form-floating">
                                                <textarea class="form-control form-control-solid" placeholder="Address" id="floatingTextarea1" style="height: 200px"></textarea>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Input first name-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::contact -->

                            <!-- begin::experiences -->
                            <div class="tab-pane fade" id="tab_experiences" role="tabpanel">
                                <span class="font-Noto fs-3">ประสบการณ์ในการทำงาน</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!--begin::Input first name-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fw-semibold fs-6 mb-2 font-Noto">Experiences Description / คำอธิบาย</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="form-floating">
                                                <textarea class="form-control form-control-solid" placeholder="Address" id="floatingTextarea1" style="height: 200px"></textarea>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Input first name-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::experiences -->

                            <!-- begin::education -->
                            <div class="tab-pane fade" id="tab_education" role="tabpanel">
                                <span class="font-Noto fs-3">การศึกษา</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input first name-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Education level / วุฒิการศึกษา</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="first_name" id="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Firstname ENG" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input first name-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Lastname-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Major / สาขาการศึกษา</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="first_name" id="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Lastname ENG" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Lastname-->
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <!--begin::Input first name-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fw-semibold fs-6 mb-2 font-Noto">Education Description / คำอธิบาย</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="form-floating">
                                            <textarea class="form-control form-control-solid" placeholder="Address" id="floatingTextarea1" style="height: 200px"></textarea>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--end::Input first name-->
                                </div>
                            </div>
                            <!-- end::education -->

                            <!-- begin::skills -->
                            <div class="tab-pane fade" id="tab_skills" role="tabpanel">
                                <span class="font-Noto fs-3">ผลงาน / ทักษะชำนาญการ / ใบรับรอง</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!--begin::Input first name-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fw-semibold fs-6 mb-2 font-Noto">Description / คำอธิบาย</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="form-floating">
                                                <textarea class="form-control form-control-solid" placeholder="Address" id="floatingTextarea1" style="height: 200px"></textarea>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Input first name-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::skills -->

                            <!-- begin::quality -->
                            <div class="tab-pane fade" id="tab_quality" role="tabpanel">
                                <span class="font-Noto fs-3 ">My Quality Declaration</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!--begin::Input first name-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fw-semibold fs-6 mb-2 font-Noto">Description / คำอธิบาย</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="form-floating">
                                                <textarea class="form-control form-control-solid" placeholder="My Quality Declaration" id="floatingTextarea1" style="height: 200px"></textarea>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Input first name-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::quality -->

                            <!-- begin::system -->
                            <div class="tab-pane fade" id="tab_system" role="tabpanel">
                                <span class="font-Noto fs-3">ข้อมูลระบบ</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <!--begin::Input first name-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">TYPE / ประเภทวิทยากร</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid">
                                                <option>Select type</option>
                                                <option value="1">ภายใน</option>
                                                <option value="2">ภายนอก</option>
                                            </select>
                                            <!--end::Input-->
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Input first name-->
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <!--begin::Input first name-->
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">STATUS / สถานะใช้งาน</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid">
                                                <option>Select status</option>
                                                <option value="1">Active : ใช้งาน</option>
                                                <option value="2">Lock : บล็อกใช้งาน</option>
                                                <option value="3">Resign : พ้นสภาพ</option>
                                            </select>
                                            <!--end::Input-->
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Input first name-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::system -->

                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>