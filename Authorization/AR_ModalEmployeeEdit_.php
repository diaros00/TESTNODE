<div class="modal fade modal-dialog-scrollable modal-lg" tabindex="-1" id="kt_modal_edit_user" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <form id="kt_modal_edit_user_form" class="form" action="#">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_edit_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Edit Account</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body px-5 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_edit_user_form" class="form" action="#">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_edit_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_edit_user_header" data-kt-scroll-wrappers="#kt_modal_edit_user_scroll" data-kt-scroll-offset="300px">
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
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg);"></div>
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
                                        <label class="required fw-semibold fs-6 mb-2 font-Noto">Firstname / ชื่อจริง</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="first_name" id="first_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="First name" value="พัฒนากร" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input first name-->
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <!--begin::Input Lastname-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2 font-Noto">Lastname / นามสกุล</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="last_name" id="last_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Last name" value="สุววณรักษ์" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input Lastname-->
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <!--begin::Input Level-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2 font-Noto">Level / ระดับตำแหน่งงาน</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">D1</option>
                                            <option value="1">D2</option>
                                            <option value="1">D3</option>
                                            <option value="1" selected>M1</option>
                                            <option value="1">M2</option>
                                            <option value="1">M3</option>
                                            <option value="1">EN</option>
                                            <option value="1">S1</option>
                                            <option value="1">S2</option>
                                            <option value="1">S3</option>
                                            <option value="1">T1</option>
                                            <option value="1">T2</option>
                                            <option value="1">T3</option>
                                            <option value="1">T7</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input Level-->
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <!--begin::Input Level-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2 font-Noto">function / ฟังชั่นการอบรม</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">IT (Programmer)</option>
                                            <option value="2">IT</option>
                                            <option value="2">Planning</option>
                                            <option value="2">Maintenance</option>
                                            <option value="2">Quality Assurance</option>
                                            <option value="2">QC</option>
                                            <option value="2">Production Engineering</option>
                                            <option value="2">R&D LAB</option>
                                            <option value="2">R&D Product Design</option>
                                            <option value="2" selected>Management</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input Level-->
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <!--begin::Input Level-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2 font-Noto">TARGET / การเข้างาน</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="1" selected>2022 : พนักงานเริ่มเข้างานก่อน (30 มิถุนายน 2022)</option>
                                            <option value="1">2023 : พนักงานเริ่มเข้างานหลัง (1 กรกฏาคม 2022)</option>
                                            <option value="1">2024 : พนักงานเริ่มเข้างานหลัง (1 กรกฏาคม 2023)</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input Level-->
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <!--begin::Input Level-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2 font-Noto">KPI / การนับ KPI</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="1" selected>KPI : นับ KPI</option>
                                            <option value="1">NON-KPI : ไม่นับ KPI</option>
                                            <option value="1">NON-KPI THIS YEAR : ไม่นับ KPI ในปีปัจจุบัน</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input Level-->
                                </div>
                            </div>
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
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">เจ้าหน้าที่</option>
                                            <option value="1">ผู้จัดการส่วน</option>
                                            <option value="1" selected>ผู้จัดการทั่วไป</option>
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
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Thai Summit Automotive Co., Ltd. (Headquarter)</option>
                                            <option value="1" selected>Thai Summit Eastern Seaboard Autoparts Industry Co., Ltd.</option>
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
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="H000000">H000000 : TSH CENTER</option>
                                            <option value="H100000">H100000 : MARKETING & NEW PROJECT OFFICE</option>
                                            <option value="H200000" selected>H200000: ACCOUNT&FINANCE OFFICE</option>
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
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="H000000">H000000 : TSH CENTER</option>
                                            <option value="H100000">H100000 : MARKETING & NEW PROJECT OFFICE</option>
                                            <option value="H200000" selected>H200000: ACCOUNT&FINANCE OFFICE</option>
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
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="H000000">H000000 : TSH CENTER</option>
                                            <option value="H100000">H100000 : MARKETING & NEW PROJECT OFFICE</option>
                                            <option value="H200000" selected>H200000: ACCOUNT&FINANCE OFFICE</option>
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
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="H000000">H000000 : TSH CENTER</option>
                                            <option value="H100000">H100000 : MARKETING & NEW PROJECT OFFICE</option>
                                            <option value="H200000" selected>H200000: ACCOUNT&FINANCE OFFICE</option>
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
                            <span class="font-Noto fs-3">ข้อมูลระบบ</span>
                            <div class="separator mb-10"></div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <!--begin::Input first name-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2 font-Noto">USERNAME / ชื่อผู้ใช้งาน</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="username" id="username" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="012613" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input first name-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <!--begin::Input first name-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2 font-Noto">PASSWORD / รหัสผ่าน</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="password" name="password" id="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Password" value="123456789"  />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input first name-->
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                    <!--begin::Input first name-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-2 font-Noto">CONFIRM PASSWORD / ยืนยันรหัสผ่าน</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="password" name="conpass" id="conpass" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Confirm password" value="123456789" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input first name-->
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <!--begin::Input first name-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fw-semibold fs-6 mb-2 font-Noto">Email / อีเมล์</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com"/ value="012613@thaisummit.co.th">
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
                                        <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_edit_user" data-placeholder="Select an option" data-allow-clear="true">
                                            <option></option>
                                            <option value="1" selected>Active : ใช้งาน</option>
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
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-10">
                            <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">Edit Account</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </form>
    </div>
</div>