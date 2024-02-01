<!-- Modal -->
<div class="modal fade" id="modal_fundep_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add A New Function department</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body font-Noto">
                <div class="d-flex flex-column mb-8 fv-row font-Noto">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">NAME / ชื่อ</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="NAME" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row font-Noto">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">STATUS / สถานะ</span>
                    </label>
                    <!--end::Label-->
                    <select class="form-select form-select-solid" aria-label="Select example">
                        <option value="1">ENABLE : เปิดใช้งาน</option>
                        <option value="0">DISABLE : ปิดใช้งาน</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create function</button>
            </div>
        </div>
    </div>
</div>