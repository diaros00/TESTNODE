<div class="modal fade" id="modal_curriculum_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add A New Curriculum</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-9 py-6">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">CODE</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Code" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">TITLE / ชื่อกลุ่มหลักสูตร</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="TITLE" />
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
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">DESCRIPTION / คำอธิบาย</span>
                            </label>
                            <!--end::Label-->
                            <div class="form-floating">
                                <textarea class="form-control form-control-solid" row="4" placeholder="Leave a comment here" id="floatingTextarea1" style="height: 200px"></textarea>
                                <label for="floatingTextarea1">DESCRIPTION</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">REMARK / รายละเอียด</span>
                            </label>
                            <!--end::Label-->
                            <div class="form-floating">
                                <textarea class="form-control form-control-solid" row="4" placeholder="Leave a comment here" id="floatingTextarea1" style="height: 200px"></textarea>
                                <label for="floatingTextarea1">REMARK</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create Curriculum</button>
            </div>
        </div>
    </div>
</div>