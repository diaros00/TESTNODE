<!-- Modal -->
<div class="modal fade" id="modal_businessplan_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit : แผนธุรกิจฉบับที่ 5</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body font-Noto">
                <div class="d-flex flex-column mb-8 fv-row font-Noto">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">CODE</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="Code" value="V5" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row font-Noto">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">TITLE BUSINESS PLAN / ชื่อแผนธุรกิจ</span>
                    </label>
                    <!--end::Label-->
                    <input type="text" class="form-control form-control-solid" placeholder="TITLE BUSINESS PLAN" value="แผนธุรกิจฉบับที่ 5" />
                </div>
                <div class="d-flex flex-column mb-8 fv-row font-Noto">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">START YEAR / END YEAR | ปีที่เริ่ม / ปีที่สิ้นสุด</span>
                    </label>
                    <!--end::Label-->
                    <input class="form-control form-control-solid" placeholder="Pick date" id="datepicker_edit" value="2022 - 2025"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Edit Business plan</button>
            </div>
        </div>
    </div>
</div>