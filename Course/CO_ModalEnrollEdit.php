<div class="modal fade" tabindex="-1" id="modal_enroll_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit enroll : 000002 สุภาภร ครื้นจิต</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">

                <div class="d-flex flex-column mb-8 fv-row font-Noto">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">FORMAT REGISTER / รูปแบบการลงทะเบียน</span>
                    </label>
                    <!--end::Label-->
                    <select class="form-select form-select-solid" aria-label="Select example" onchange="setReplacementsModal(this)">
                        <option>SELECT FORMAT REGISTER</option>
                        <option value="1">เพิ่มรายชื่อ</option>
                        <option value="2">ทดแทด</option>
                        <option value="3">ปกติ</option>
                    </select>
                </div>

                <div id="hidden_div_modal_replacement" style="display:none;">
                    <div class="d-flex flex-column mb-8 fv-row font-Noto">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">ENROLL REPLACEMENTS / ทดแทนพนักงาน</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-select form-select-solid" data-control="select2" data-placeholder="SELECT EMPLOYEES ENROLL REPLACEMENTS" data-dropdown-parent="#modal_enroll_edit">
                            <option></option>
                            <option value="1">000010 : อนันต์ งามเฉลียว</option>
                            <option value="2">000002 : สุภาภร ครื้นจิต</option>
                            <option value="2">000003 : ธัญญรัชต์ สาระชาติ</option>
                            <option value="2">000004 : วสุ กัญญา</option>
                            <option value="2">000005 : วชิรวิทย์ แสนพระวัง</option>
                            <option value="2">000006 : แพรพลอย สิงห์ทองชัย</option>
                            <option value="2">000007 : เสกสิทธิ์ เหลืองประดับใจ</option>
                            <option value="2">000008 : แพรพลอย สินธุสาร</option>
                            <option value="2">000009 : อัจจนา ฮวดหิน</option>
                            <option value="2">000010 : เกศราภรณ์ ศรีสำราญ</option>
                        </select </div>
                    </div>
                    <div class="col-12"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Edit enroll</button>
            </div>
        </div>
    </div>
</div>