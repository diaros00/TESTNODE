<div class="modal fade" id="Model-DS-Group-Filter" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
                <form id="Model-DS-Dep-Filter_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Choose Your Business unit</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5 font-Noto">เลือกข้อมูลทางธุรกิจบริษัทของคุณ</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group company-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Company</span>
                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <div class="border rounded">
                            <select id="select2-company" class="form-select form-select-transparent" name="Select Thai summit group" data-placeholder="Select Thai summit group">
                                <option></option>
                                <option value="0" data-kt-rich-content-subcontent="บริษัท ไทยซัมมิท โอโตโมทีฟ จำกัด" data-kt-rich-content-icon="assets/media/logo/thaisummit/thaisummit.jpg">Thai Summit Automotive Co., Ltd. (Headquarter)</option>
                                <option value="1" data-kt-rich-content-subcontent="บริษัท ไทยซัมมิทอีสเทิร์นซีบอร์ดออโตพาร์ทอินดัสตรี จำกัด" data-kt-rich-content-icon="assets/media/logo/thaisummit/thaisummit.jpg">Thai Summit Eastern Seaboard Autoparts Industry Co., Ltd.</option>
                                <option value="0" data-kt-rich-content-subcontent="บริษัท ไทยซัมมิท โอโตพาร์ท จำกัด" data-kt-rich-content-icon="assets/media/logo/thaisummit/thaisummit.jpg">Thai Summit Autoparts Co., Ltd.</option>
                                <option value="1" data-kt-rich-content-subcontent="บริษัท ไทยซัมมิท โอโต เพรส จำกัด" data-kt-rich-content-icon="assets/media/logo/thaisummit/thaisummit.jpg">Thai Summit Auto Press Co., Ltd.</option>
                                <option value="0" data-kt-rich-content-subcontent="บริษัท ไทยซัมมิท แหลมฉบัง โอโตพาร์ท จำกัด" data-kt-rich-content-icon="assets/media/logo/thaisummit/thaisummit.jpg">Thai Summit Laemchabang Autoparts Co., Ltd.</option>
                                <option value="1" data-kt-rich-content-subcontent="บริษัท ไทยซัมมิท บ้านโพธิ์ จำกัด" data-kt-rich-content-icon="assets/media/logo/thaisummit/thaisummit.jpg">Thai Summit Banpho Co., Ltd.</option>
                                <option value="0" data-kt-rich-content-subcontent="บริษัท ไทยซัมมิท พลาสเทค จำกัด" data-kt-rich-content-icon="assets/media/logo/thaisummit/thaisummit.jpg">Thai Summit Plastech Co., Ltd. (Branch 2)</option>
                                <option value="1" data-kt-rich-content-subcontent="บริษัท ไทยซัมมิท ระยอง โอโตพาร์ท อินดัสตรี จำกัด" data-kt-rich-content-icon="assets/media/logo/thaisummit/thaisummit.jpg">Thai Summit Rayong Autoparts Industry Co., Ltd.</option>
                                ...
                            </select>
                        </div>
                    </div>
                    <!--end::Input group company-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="submit" id="Model-DS-Dep-Filter_submit" class="btn btn-primary">
                            <span class="indicator-label">Find</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button type="reset" id="Model-DS-Dep-Filter_cancel" class="btn btn-light me-3">Cancel</button>
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