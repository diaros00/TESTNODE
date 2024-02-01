<div class="modal bg-body fade" tabindex="-1" id="modal_round_manage">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h5 class="modal-title">Plan round 1/2022</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!--begin::Accordion-->
                <div class="accordion" id="create_new_role">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="create_new_role_header_1">
                            <button class="accordion-button fs-4 fw-semibold text-hover-primary" type="button" data-bs-toggle="collapse" data-bs-target="#create_new_role_body_1" aria-expanded="true" aria-controls="create_new_role_body_1">
                                <i class="fa-solid fa-plus me-2 fs-3 fw-semibold"></i>Add Plan round 
                            </button>
                        </h2>
                        <div id="create_new_role_body_1" class="accordion-collapse collapse" aria-labelledby="create_new_role_header_1" data-bs-parent="#kt_accordion_1">
                            <div class="accordion-body">
                                <div class="border border-primary p-10 mb-2 rounded">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <!--begin::Input first name-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fw-semibold fs-6 mb-2 font-Noto">GROUP / กลุ่มระดับตำแหน่ง</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_round_manage" data-placeholder="Select an option" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">D1-D3</option>
                                                    <option value="2">G1-G3</option>
                                                    <option value="3">M1-M3</option>
                                                    <option value="4">Engineers</option>
                                                    <option value="5">S1-S3</option>
                                                    <option value="6">T1-T3</option>
                                                    <option value="7">T7</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input first name-->
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <!--begin::Input Lastname-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="required fw-semibold fs-6 mb-2 font-Noto">LIMIT</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <input type="number" class="form-control form-control-solid" placeholder="LIMIT" name="title business plan" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input Lastname-->
                                        </div>
                                        <a href="#" class="btn btn-primary">Create role</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Accordion-->
                <div class="table-responsive p-13">
                    <table class="table align-middle table-row-dashed fs-6 mb-0" id="kt_manage_round_table">
                        <thead>
                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-1px">NO.</th>
                                <th class="min-w-200px text-center">GROUP</th>
                                <th class="min-w-50px">ROUND/YEAR</th>
                                <th class="min-w-10px">LIMIT</th>
                                <th class="min-w-1px text-end">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            <tr class="fs-5">
                                <td class="fs-lg-2 font-Noto">1</td>
                                <td class="text-center text-center font-Noto">D1-D3</td>
                                <td class="text-primary ">1/2022</td>
                                <td class="text-danger">1</td>
                                <td class="text-gray-800 text-end">
                                    <div class="btn btn-primary btn-sm btn-group" role="group">
                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-list me-1"></i>Option
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_roundmange_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="fs-5">
                                <td class="fs-lg-2 font-Noto">2</td>
                                <td class="text-center text-center font-Noto">G1-G3</td>
                                <td class="text-primary ">1/2022</td>
                                <td class="text-danger">2</td>
                                <td class="text-gray-800 text-end">
                                    <div class="btn btn-primary btn-sm btn-group" role="group">
                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-list me-1"></i>Option
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_roundmange_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="fs-5">
                                <td class="fs-lg-2 font-Noto">3</td>
                                <td class="text-center text-center font-Noto">M1-M3</td>
                                <td class="text-primary ">1/2022</td>
                                <td class="text-danger">3</td>
                                <td class="text-gray-800 text-end">
                                    <div class="btn btn-primary btn-sm btn-group" role="group">
                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-list me-1"></i>Option
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_roundmange_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="fs-5">
                                <td class="fs-lg-2 font-Noto">4</td>
                                <td class="text-center text-center font-Noto">Engineers</td>
                                <td class="text-primary ">1/2022</td>
                                <td class="text-danger">6</td>
                                <td class="text-gray-800 text-end">
                                    <div class="btn btn-primary btn-sm btn-group" role="group">
                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-list me-1"></i>Option
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_roundmange_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="fs-5">
                                <td class="fs-lg-2 font-Noto">5</td>
                                <td class="text-center text-center font-Noto">S1-S3</td>
                                <td class="text-primary ">1/2022</td>
                                <td class="text-danger">3</td>
                                <td class="text-gray-800 text-end">
                                    <div class="btn btn-primary btn-sm btn-group" role="group">
                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-list me-1"></i>Option
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_roundmange_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="fs-5">
                                <td class="fs-lg-2 font-Noto">6</td>
                                <td class="text-center text-center font-Noto">T1-T3</td>
                                <td class="text-primary ">1/2022</td>
                                <td class="text-danger">3</td>
                                <td class="text-gray-800 text-end">
                                    <div class="btn btn-primary btn-sm btn-group" role="group">
                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-list me-1"></i>Option
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_roundmange_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#"><i class="fa-solid fa-trash-can me-2 text-gray-700 fs-3"></i>Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr class="fs-5">
                                <td class="fs-lg-2 font-Noto">7</td>
                                <td class="text-center text-center font-Noto">T7</td>
                                <td class="text-primary ">1/2022</td>
                                <td class="text-danger">2</td>
                                <td class="text-gray-800 text-end">
                                    <div class="btn btn-primary btn-sm btn-group" role="group">
                                        <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-list me-1"></i>Option
                                        </div>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item text-gray-700 fs-5" href="#" data-bs-toggle="modal" data-bs-target="#modal_roundmange_edit"><i class="fa-solid fa-pen-to-square me-2 text-gray-700 fs-3"></i>Edit</a></li>
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