<div class="modal fade" tabindex="-1" id="filter_instructor" tabindex="-1" id="filter_instructor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Filter Instructor</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p class="mb-1 fs-5 text-gray-600">TYPE / ประเภทวิทยากร</p>
                <!--end::Text-->
                <!--begin::select class-->
                <select class="form-select form-select-solid" aria-label="Select option">
                    <option>Select Type</option>
                    <option value="1">ภายใน</option>
                    <option value="2">ภายนอก</option>
                </select>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                    <span class="indicator-label">Search</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>