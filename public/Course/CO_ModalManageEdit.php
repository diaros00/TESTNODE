<div class="modal bg-body fade" tabindex="-1" id="modal_course_edit">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h5 class="modal-title">Setting Course</h5>

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
                                        <span class="fs-4 fw-bold">Information</span>
                                        <span class="fs-7">ข้อมูลทั่วไป</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_description">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Description&Image</span>
                                        <span class="fs-7">คำอธิบายและรูปภาพ</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_matrix">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Course Matrix</span>
                                        <span class="fs-7">หลักสูตรระดับตำแหน่ง</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_media">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Manuals&Media</span>
                                        <span class="fs-7">คู่มือและสื่อการเรียน</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-10">

                        <div class="tab-content" id="myTabContent">

                            <!-- begin::Information -->
                            <div class="tab-pane fade show active" id="tab_profile" role="tabpanel">
                                <span class="font-Noto fs-3">ข้อมูลทั่วไป</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">CODE</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid" placeholder="CODE" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-8">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">NAME THAI / ชื่อภาษาไทย</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid" placeholder="TITLE TH" value="Mechanical System (basic)" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">NAME ENGLISH / ชื่อภาษาอังกฤษ</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid" placeholder="TITLE ENG" value="Mechanical System (basic)" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">CURRICULUM TYPE / ประเภทหลักสูตร</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_course_add" data-placeholder="SELECT COURSE TYPE" data-allow-clear="true">
                                                <option></option>
                                                <option value="1" selected>Functional Competency</option>
                                                <option value="2">Soft Skills</option>
                                                <option value="3">Managerial Competency</option>
                                                <option value="4">Functional Engineeringy</option>
                                                <option value="5">Basic Engineering</option>
                                                <option value="6">หลักสูตรด้านระบบคุณภาพ</option>
                                                <option value="7">หลักสูตรด้านความปลอดภัย</option>
                                                <option value="8">Power Skills</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">STATUS / สถานะ</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" aria-label="Select example">
                                                <option value="1" selected>ENABLE : เปิดใช้งาน</option>
                                                <option value="0">DISABLE : ปิดใช้งาน</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">PARTICIPANT OF CLASS / จำนวนผู้เข้าอบรมต่อหลักสูตร</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="text" class="form-control form-control-solid" placeholder="PARTICIPANT OF CLASS" value="30" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::Information -->

                            <!-- begin::company -->
                            <div class="tab-pane fade" id="tab_description" role="tabpanel">
                                <span class="font-Noto fs-3">คำอธิบายและรูปภาพ</span>
                                <div class="separator mb-10"></div>
                                <div class="row mb-8">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">DESCRIPTION / คำอธิบาย</span>
                                            </label>
                                            <!--end::Label-->
                                            <textarea name="description_edit" id="description_edit"><p>-</p></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Image card / ภาพปกหลักสูตร <o class="text-danger fs-7">(SIZE : 600x400px)</o></label>
                                            <br>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <!--begin::Image placeholder-->
                                            <style>
                                                .image-input-placeholder {
                                                    background-image: url('assets/media/svg/files/blank-image.svg');
                                                }

                                                [data-bs-theme="dark"] .image-input-placeholder {
                                                    background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                                }
                                            </style>
                                            <!--begin::Image input-->
                                            <center>
                                                <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                    <!--begin::Preview existing avatar-->
                                                    <div class="image-input-wrapper w-250px w-lg-600px h-200px h-lg-400px" style="background-image: url(assets/media/stock/600x400/img-2.jpg);"></div>
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
                                            </center>
                                            <!--end::Image input-->
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::company -->
                            <!-- begin::system -->
                            <div class="tab-pane fade" id="tab_matrix" role="tabpanel">
                                <span class="font-Noto fs-3">การจัดการ Course matrix</span>
                                <div class="separator mb-10"></div>
                                <div class="border rounded p-10 mb-8">
                                    <div class="row mb-5">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <!--begin::Input first name-->
                                            <div class="fv-row mb-3">
                                                <!--begin::Label-->
                                                <label class="required fw-semibold fs-6 mb-2 font-Noto">COMPANY / บริษัท</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_course_edit" data-placeholder="Select an option" data-allow-clear="true">
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
                                            <!--end::Input first name-->
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <!--begin::Input first name-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fw-semibold fs-6 mb-2 font-Noto">FUNCTION DEPARTMNET / ฟังชั่น</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_course_edit" data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">IT (Programmer)</option>
                                                    <option value="1">IT</option>
                                                    <option value="1">Planning</option>
                                                    <option value="1">Maintenance</option>
                                                    <option value="1">Quality Assurance</option>
                                                    <option value="1">QC</option>
                                                    <option value="1">Production Engineering</option>
                                                    <option value="1">R&D LAB</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input first name-->
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <!--begin::Input first name-->
                                            <div class="fv-row mb-3">
                                                <!--begin::Label-->
                                                <label class="required fw-semibold fs-6 mb-2 font-Noto">LEVEL / ระดับตำแหน่ง</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_course_edit" data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">D1</option>
                                                    <option value="1">D2</option>
                                                    <option value="1">D3</option>
                                                    <option value="1">G1</option>
                                                    <option value="1">G2</option>
                                                    <option value="1">G3</option>
                                                    <option value="1">M1</option>
                                                    <option value="1">M2</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input first name-->
                                        </div>
                                    </div>
                                    <center><button class="btn btn-primary text-center">Create course matrix</button></center>
                                </div>
                                <div class="btn-option-data" style="display: none">
                                    <div class="d-flex flex-row flex-column-fluid mb-4">
                                        <div class="d-flex flex-row-fluid flex-end">
                                            <button class="btn btn-light-danger flex-end">Delete selected join</button>
                                        </div>
                                    </div>
                                    <div class="separator mb-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!--begin::Input first name-->
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_coursematrix_table">
                                                <thead>
                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="min-w-1px">
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" />
                                                            </div>
                                                        </th>
                                                        <th class="min-w-1px text-center">LEVEL</th>
                                                        <th class="min-w-20px text-center">COMPANY</th>
                                                        <th class="min-w-300px text-center">FUNCTION DEPARTMNET</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="fw-semibold text-gray-600">
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-danger text-center fs-3 font-Noto">S1</td>
                                                        <td class="text-primary fs-3 text-center">TSH</td>
                                                        <td class="fs-3">Production</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-danger text-center fs-3 font-Noto">S2</td>
                                                        <td class="text-primary fs-3 text-center">TSH</td>
                                                        <td class="fs-3">Production</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-danger text-center fs-3 font-Noto">S3</td>
                                                        <td class="text-primary fs-3 text-center">TSH</td>
                                                        <td class="fs-3">Production</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-danger text-center fs-3 font-Noto">T1</td>
                                                        <td class="text-primary fs-3 text-center">TSH</td>
                                                        <td class="fs-3">Production</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fs-5 fs-lg-2 font-Noto">
                                                            <div class="form-check form-check-custom form-check-solid form-check-sm">
                                                                <input class="form-check-input" type="checkbox" id="checkItem" />
                                                            </div>
                                                        </td>
                                                        <td class="text-danger text-center fs-3 font-Noto">T2</td>
                                                        <td class="text-primary fs-3 text-center">TSH</td>
                                                        <td class="fs-3">Production</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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