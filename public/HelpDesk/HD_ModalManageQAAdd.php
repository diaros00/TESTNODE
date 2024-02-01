<!--begin::Modal - Support Center - Create Ticket-->
<div class="modal fade" id="modal_manageqa_add" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_manageqa_add_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Create Question Q&A</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-gray-500 fw-semibold fs-5 font-Noto">สร้างคำถามสำหรับ Q&A</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row font-Noto">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">เรื่อง / Subject</span>
                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a subject for your issue">
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid"
                            placeholder="Enter subject" name="subject" />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row g-9 mb-8 font-Noto">
                        <!--begin::Col-->
                        <div class="col-md-12 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">หมวด / Category</label>
                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Category"
                                data-hide-search="true">
                                <option></option>
                                <option value="1">ทั่วไป</option>
                                <option value="2">หลักสูตร</option>
                                <option value="3">ปัญหาการใช้งาน</option>
                                <option value="4">คำถามยอดฮิต</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row font-Noto">
                        <label class="fs-6 fw-semibold mb-2">คำอธิบาย / Description</label>
                        <textarea class="form-control form-control-solid" rows="4" name="description"
                            placeholder="Type your question description"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">Cancel</button>
                        <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Support Center - Create Ticket-->