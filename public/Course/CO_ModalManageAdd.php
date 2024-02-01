<div class="modal fade" id="modal_course_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add A New Course</h1>
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
                            <input type="text" class="form-control form-control-solid" placeholder="CODE" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">NAME THAI / ชื่อภาษาไทย</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="TITLE TH" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">NAME ENGLISH / ชื่อภาษาอังกฤษ</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="TITLE ENG" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">CURRICULUM TYPE / ประเภทหลักสูตร</span>
                            </label>
                            <!--end::Label-->
                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_course_add" data-placeholder="SELECT COURSE TYPE" data-allow-clear="true">
                                <option></option>
                                <option value="1">Functional Competency</option>
                                <option value="2">Soft Skills</option>
                                <option value="3">Managerial Competency</option>
                                <option value="4">Functional Engineeringy</option>
                                <option value="5">Basic Engineering</option>
                                <option value="6">หลักสูตรด้านระบบคุณภาพ</option>
                                <option value="7">หลักสูตรด้านความปลอดภัย</option>
                                <option value="8">Power Skills</option>
                            </select>
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
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">PARTICIPANT OF CLASS / จำนวนผู้เข้าอบรมต่อหลักสูตร</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="PARTICIPANT OF CLASS" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">DESCRIPTION / คำอธิบาย</span>
                            </label>
                            <!--end::Label-->
                            <textarea name="description" id="description">
                                <p>คำอธิบาย</p>
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create Course</button>
            </div>
        </div>
    </div>
</div>