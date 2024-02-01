<!-- Modal -->
<div class="modal fade" id="modal_round_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add A New Round</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body font-Noto">
                <div class="d-flex flex-column mb-8 fv-row font-Noto">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">YEAR / ปี</span>
                    </label>
                    <!--end::Label-->
                    <input type="number" class="form-control form-control-solid" placeholder="YEAR" name="subject" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row font-Noto">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">ROUND / รอบ</span>
                    </label>
                    <!--end::Label-->
                    <input type="number" class="form-control form-control-solid" placeholder="ROUND" name="title business plan" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row font-Noto">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">BUSINESS PLAN / แผนธุรกิจ</span>
                    </label>
                    <!--end::Label-->
                    <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_round_add" data-placeholder="Select business plan">
                        <option></option>
                        <option value="1">แผนธุรกิจฉบับที่ 5</option>
                        <option value="2">แผนธุรกิจฉบับที่ 6</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create Round</button>
            </div>
        </div>
    </div>
</div>