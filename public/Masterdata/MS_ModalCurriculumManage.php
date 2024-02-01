<div class="modal bg-body fade" tabindex="-1" id="modal_curriculum_manage">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h5 class="modal-title">Manage Group : D1-D3</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!--begin::Accordion-->
                <div class="accordion" id="manage_level">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="manage_level_header_1">
                            <button class="accordion-button fs-4 fw-semibold text-hover-primary" type="button" data-bs-toggle="collapse" data-bs-target="#manage_level_body_1" aria-expanded="true" aria-controls="manage_level_body_1">
                                <i class="fa-solid fa-plus me-2 fs-3 fw-semibold"></i>Add Join Course Type
                            </button>
                        </h2>
                        <div id="manage_level_body_1" class="accordion-collapse collapse" aria-labelledby="manage_level_header_1" data-bs-parent="#kt_accordion_1">
                            <div class="accordion-body">
                                <div class="border border-primary p-10 mb-2 rounded">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <!--begin::Input Lastname-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fw-semibold fs-6 mb-2 font-Noto">COURSE TYPE / ประเภทหลักสูตร</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_curriculum_manage" data-placeholder="Select level" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Functional Competency</option>
                                                    <option value="2">Soft Skills</option>
                                                    <option value="3">Managerial Competency</option>
                                                    <option value="7">Functional Engineering</option>
                                                    <option value="7">Basic Engineering</option>
                                                    <option value="7">หลักสูตรด้านระบบคุณภาพ</option>
                                                    <option value="4">หลักสูตรด้านความปลอดภัย</option>
                                                    <option value="5">Power Skills</option>
                                                    <option value="6">Quality Skills</option>
                                                    <option value="7">Basic Operation Skill</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input Lastname-->
                                        </div>
                                        <a href="#" class="btn btn-primary">Join Curriculum</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Accordion-->
                <div class="table-responsive p-13">
                    <table class="table align-middle table-row-dashed fs-6 mb-0" id="kt_manage_curriculum_table">
                        <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-1px">NO.</th>
                                <th class="min-w-300px text-center">COURSE TYPE</th>
                                <th class="min-w-50px text-center">CURRICULUM</th>
                                <th class="min-w-1px text-end">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr class="fs-5">
                                <td class="fs-lg-2 font-Noto">1</td>
                                <td class="text-primary font-Noto">Soft Skills</td>
                                <td class="text-center text-dark font-Noto fs-3">Managerial Competency</td>
                                <td class="text-gray-800 text-end">
                                    <div class="btn btn-primary btn-sm btn-group" role="group">
                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-list me-1"></i>Option
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="fs-5">
                                <td class="fs-lg-2 font-Noto">2</td>
                                <td class="text-primary font-Noto">Managerial Competency</td>
                                <td class="text-center text-dark font-Noto fs-3">Managerial Competency</td>
                                <td class="text-gray-800 text-end">
                                    <div class="btn btn-primary btn-sm btn-group" role="group">
                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-list me-1"></i>Option
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>