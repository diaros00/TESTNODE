<div class="modal fade" tabindex="-1" id="kt_modal_add_role">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Role</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <div class="modal-body">

                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2 font-Noto">CODE / รหัส</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="code" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="CODE" value="" />
                    <!--end::Input-->
                </div>
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2 font-Noto">NAME / ชื่อ</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input type="text" name="code" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="NAME" value="" />
                    <!--end::Input-->
                </div>
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2 font-Noto">STATUS / สถานะ</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select class="form-select form-select-solid" aria-label="Select example">
                        <option>Open this select menu</option>
                        <option value="1">Enable : เปิดใช้งาน</option>
                        <option value="2">Disable : ปิดใช้งาน</option>
                    </select>
                    <!--end::Input-->
                </div>
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2 font-Noto">DESCRIPTION / คำอธิบายสิทธิการเข้าใช้งาน</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-floating">
                        <textarea class="form-control form-control-solid" placeholder="Address" id="floatingTextarea1" style="height: 200px"></textarea>
                    </div>
                    <!--end::Input-->
                </div>
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-2 font-Noto">POLICY / นโยบาย</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-floating">
                        <textarea class="form-control form-control-solid" placeholder="Address" id="floatingTextarea1" style="height: 200px"></textarea>
                    </div>
                    <!--end::Input-->
                </div>
                <div class="mb-3"></div>
                <div class="mb-5">
                    <!--begin::Label-->
                    <label class="required fw-semibold fs-6 mb-5">Function</label>
                    <div class="form-check form-check-custom form-check-solid form-check-sm mb-5">
                        <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                        <label class="form-check-label font-Noto" for="flexRadioLg">
                            เลือกทั้งหมด
                        </label>
                    </div>
                    <!--end::Label-->
                    <!--begin::Roles-->
                    <!--begin::Input row-->
                    <div class="d-flex fv-row">
                        <!--begin::checkbox-->
                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                            <!--begin::Input-->
                            <input class="form-check-input me-3" name="checkItem" id="checkItem" type="checkbox" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                <div class="fw-bold text-gray-800">View</div>
                                <div class="text-gray-600 font-Noto">สามารถดูข้อมูลในระบบได้</div>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::checkbox-->
                    </div>
                    <!--end::Input row-->
                    <div class='separator separator-dashed my-5'></div>
                    <!--begin::Input row-->
                    <div class="d-flex fv-row">
                        <!--begin::checkbox-->
                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                            <!--begin::Input-->
                            <input class="form-check-input me-3" name="checkItem" id="checkItem" type="checkbox" value="1" id="kt_modal_update_role_option_1" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                <div class="fw-bold text-gray-800">Create</div>
                                <div class="text-gray-600 font-Noto">สามารถสร้างข้อมูลหรือเพิ่มข้อมูลในระบบได้</div>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::checkbox-->
                    </div>
                    <!--end::Input row-->
                    <div class='separator separator-dashed my-5'></div>
                    <!--begin::Input row-->
                    <div class="d-flex fv-row">
                        <!--begin::checkbox-->
                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                            <!--begin::Input-->
                            <input class="form-check-input me-3" name="checkItem" id="checkItem" type="checkbox" value="2" id="kt_modal_update_role_option_2" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                <div class="fw-bold text-gray-800">Update</div>
                                <div class="text-gray-600 font-Noto">สามารถอัพเดพแก้ไขข้อมูลในระบบได้</div>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::checkbox-->
                    </div>
                    <!--end::Input row-->
                    <div class='separator separator-dashed my-5'></div>
                    <!--begin::Input row-->
                    <div class="d-flex fv-row">
                        <!--begin::checkbox-->
                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                            <!--begin::Input-->
                            <input class="form-check-input me-3" name="checkItem" id="checkItem" type="checkbox" value="3" id="kt_modal_update_role_option_3" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <label class="form-check-label" for="kt_modal_update_role_option_3">
                                <div class="fw-bold text-gray-800">Approve</div>
                                <div class="text-gray-600 font-Noto">สามารถอนุมัติเอกสารในระบบได้</div>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::checkbox-->
                    </div>
                    <!--end::Input row-->
                    <div class='separator separator-dashed my-5'></div>
                    <!--begin::Input row-->
                    <div class="d-flex fv-row">
                        <!--begin::checkbox-->
                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                            <!--begin::Input-->
                            <input class="form-check-input me-3" name="checkItem" id="checkItem" type="checkbox" value="4" id="flexCheckboxLg" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <label class="form-check-label" for="flexCheckboxLg">
                                <div class="fw-bold text-gray-800">Delete</div>
                                <div class="text-gray-600 font-Noto">สามารถถอน ยกเลิก และลบข้อมูลในระบบได้</div>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::checkbox-->
                    </div>
                    <!--end::Input row-->
                    <div class='separator separator-dashed my-5'></div>
                    <!--begin::Input row-->
                    <div class="d-flex fv-row">
                        <!--begin::checkbox-->
                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                            <!--begin::Input-->
                            <input class="form-check-input me-3" name="checkItem" id="checkItem" type="checkbox" value="4" id="flexCheckboxLg" />
                            <!--end::Input-->
                            <!--begin::Label-->
                            <label class="form-check-label" for="flexCheckboxLg">
                                <div class="fw-bold text-gray-800">Report</div>
                                <div class="text-gray-600 font-Noto">สามารถดึง Report เอกสารในระบบได้</div>
                            </label>
                            <!--end::Label-->
                        </div>
                        <!--end::checkbox-->
                    </div>
                    <!--end::Input row-->
                    <!--end::Roles-->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
