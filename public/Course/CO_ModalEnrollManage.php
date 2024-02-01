<div class="modal bg-body fade" tabindex="-1" id="modal_enroll_manage">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h5 class="modal-title">Enrollment Manage</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-2 col-lg-2">
                        <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-200px">
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 active btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_enroll">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Enrollment employee</span>
                                        <span class="fs-7">ลงทะเบียนพนักงาน</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_score">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Score Manual</span>
                                        <span class="fs-7">ลงคะแนน</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-10">

                        <div class="tab-content" id="myTabContent">
                            <!-- begin::Information -->
                            <div class="tab-pane fade show active" id="tab_enroll" role="tabpanel">
                                <span class="font-Noto fs-3">ลงทะเบียนพนักงาน</span>
                                <div class="separator mb-10"></div>
                                <!--begin::Accordion-->
                                <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_1">
                                            <span class="accordion-icon">
                                                <i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Enroll of personnel | ลงทะเบียนแบบรายบุคคล</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_2_item_1" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_2">
                                            <div class="border rounded border-active active p-5">
                                                <div class="mb-4"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                <span class="required">FORMAT REGISTER / รูปแบบการลงทะเบียน</span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <select class="form-select form-select-solid" aria-label="Select example" onchange="setReplacements(this)">
                                                                <option>SELECT FORMAT REGISTER</option>
                                                                <option value="1">เพิ่มรายชื่อ</option>
                                                                <option value="2">ทดแทด</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6 col-lg-6" id="hidden_div_replacement" style="display:none;">
                                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                <span class="required">ENROLL REPLACEMENTS / ทดแทนพนักงาน</span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="SELECT EMPLOYEES ENROLL REPLACEMENTS" data-dropdown-parent="#modal_enroll_manage">
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
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                <span class="required">ENROLL EMPLOYEE / ลงทะเบียนพนักงาน</span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="SELECT EMPLOYEES ENROLL REPLACEMENTS" data-dropdown-parent="#modal_enroll_manage">
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
                                                            </select>
                                                        </div>
                                                        <div class="col-12"></div>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row flex-column-fluid">
                                                    <div class="d-flex flex-row-fluid flex-center">
                                                        <button class="btn btn-primary text-center w-200px">Enroll</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_2">
                                            <span class="accordion-icon">
                                                <i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Enroll all | ลงทะเบียนแบบจำนวนมาก</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_2_item_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                                            <div class="border rounded border-active active p-5">
                                                <div class="mb-4"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                <span class="required">FORMAT REGISTER / รูปแบบการลงทะเบียน</span>
                                                            </label>
                                                            <!--end::Label-->
                                                            <select class="form-select form-select-solid" aria-label="Select example" onchange="setReplacements(this)">
                                                                <option>SELECT FORMAT REGISTER</option>
                                                                <option value="1">เพิ่มรายชื่อ</option>
                                                                <option value="2">ทดแทด</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-6 fw-semibold font-Noto">
                                                                <span class="required mb-3">ENROLL EMPLOYEE / ลงทะเบียนพนักงาน</span>

                                                            </label>
                                                            <!--end::Label-->
                                                            <span class="fs-5 mb-3 text-info">กรุณากรอกรหัสพนักงาน 1 บรรทัด / คน:<br>
                                                                <o class="fs-6 mb-3 text-danger">ตัวอย่าง : ชื่อย่อบริษัท , รหัสพนักงาน</o><br>
                                                                <o class="fs-6 mb-3 text-gray-600">TSH,012613</o>
                                                            </span>


                                                            <div class="form-floating">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
                                                                <label for="floatingTextarea2">ENROLL EMPLOYEE</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12"></div>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row flex-column-fluid">
                                                    <div class="d-flex flex-row-fluid flex-center">
                                                        <button class="btn btn-primary text-center w-200px">Enroll</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_3">
                                            <span class="accordion-icon">
                                                <i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Enroll Upload | ลงทะเบียนแบบอัพโหลดไฟล์</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_2_item_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                                            <div class="border rounded border-active active p-5">
                                                <div class="mb-4"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-mb-3 col-lg-2">
                                                        <p class="fs-5">Example text file</p>
                                                    </div>
                                                    <div class="col-sm-12 col-mb-9 col-lg-10">
                                                        <div class="alert alert-primary d-flex align-items-center p-5 mb-5">
                                                            <!--begin::Icon-->
                                                            <i class="fa-solid fa-file-excel fs-2hx text-success me-4"></i>
                                                            <!--end::Icon-->
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex flex-column">
                                                                <!--begin::Title-->
                                                                <h4 class="mb-1 text-dark">Template upload file</h4>
                                                                <!--end::Title-->

                                                                <!--begin::Content-->
                                                                <span><i class="fa-solid fa-circle-down me-2 text-primary"></i>Download File.csv</span>
                                                                <!--end::Content-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator my-10"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-mb-3 col-lg-2">
                                                        <p class="fs-5">File</p>
                                                    </div>
                                                    <div class="col-sm-12 col-mb-9 col-lg-10 p-10">
                                                        <div class="border-success border-dotted text-center">
                                                            <div class="mb-6"></div>
                                                            <i class="fa-solid fa-file-arrow-up fs-5x text-success"></i><br>
                                                            <p class="fs-3 text-success">Upload employee enroll .csv</p>
                                                            <div class="mb-3"></div>
                                                            <a href="#" class="btn btn-primary">Choose File</a>
                                                            <div class="mb-6"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-mb-3 col-lg-2">
                                                        <p class="fs-5"></p>
                                                    </div>
                                                    <div class="col-sm-12 col-mb-9 col-lg-10 p-10 text-center">
                                                        <button class="btn btn-primary w-200px w-lg-500px" onclick="checkStatusUpload()">Enroll</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Accordion-->
                            </div>
                            <!-- end::Information -->
                            <!-- begin::Information -->
                            <div class="tab-pane fade" id="tab_score" role="tabpanel">
                                <span class="font-Noto fs-3">ลงคะแนน</span>
                                <div class="separator mb-10"></div>
                                <!--begin::Accordion-->
                                <div class="accordion accordion-icon-toggle" id="kt_accordion_2">
                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_1">
                                            <span class="accordion-icon">
                                                <i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Input Score | ลงคะแนนพนักงาน</h3>
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Body-->
                                        <div id="kt_accordion_2_item_1" class="fs-6 collapse ps-10" data-bs-parent="#kt_accordion_2">
                                            <div class="border rounded border-active active p-5">
                                                <div class="mb-4"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                                            <!--begin::Label-->
                                                            <label class="d-flex align-items-center fs-6 fw-semibold font-Noto">
                                                                <span class="required mb-3">Input Score / ลงคะแนนพนักงาน</span>

                                                            </label>
                                                            <!--end::Label-->
                                                            <span class="fs-5 mb-3 text-info">กรุณากรอกรหัสพนักงาน 1 บรรทัด / คน:<br>
                                                                <o class="fs-6 mb-3 text-danger">ตัวอย่าง : ชื่อย่อบริษัท , รหัสพนักงาน , คะแนน</o><br>
                                                                <o class="fs-6 mb-3 text-gray-600">TSH,012613,5</o>
                                                            </span>
                                                            <div class="form-floating">
                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
                                                                <label for="floatingTextarea2">INPUT SCORE EMPLOYEE</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12"></div>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row flex-column-fluid">
                                                    <div class="d-flex flex-row-fluid flex-center">
                                                        <button class="btn btn-primary text-center w-200px">Summit</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="mb-5">
                                        <!--begin::Header-->
                                        <div class="accordion-header py-3 d-flex collapsed" data-bs-toggle="collapse" data-bs-target="#kt_accordion_2_item_2">
                                            <span class="accordion-icon">
                                                <i class="ki-duotone ki-arrow-right fs-4"><span class="path1"></span><span class="path2"></span></i>
                                            </span>
                                            <h3 class="fs-4 fw-semibold mb-0 ms-4">Import file score | อัพโหลดไฟล์คะแนนพนักงาน</h3>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div id="kt_accordion_2_item_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                                            <div class="border rounded border-active active p-5">
                                                <div class="mb-4"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-mb-3 col-lg-2">
                                                        <p class="fs-5">Example text file</p>
                                                    </div>
                                                    <div class="col-sm-12 col-mb-9 col-lg-10">
                                                        <div class="alert alert-primary d-flex align-items-center p-5 mb-5">
                                                            <!--begin::Icon-->
                                                            <i class="fa-solid fa-file-excel fs-2hx text-success me-4"></i>
                                                            <!--end::Icon-->
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex flex-column">
                                                                <!--begin::Title-->
                                                                <h4 class="mb-1 text-dark">Template upload file</h4>
                                                                <!--end::Title-->

                                                                <!--begin::Content-->
                                                                <span><i class="fa-solid fa-circle-down me-2 text-primary"></i>Download File.csv</span>
                                                                <!--end::Content-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator my-10"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-mb-3 col-lg-2">
                                                        <p class="fs-5">File</p>
                                                    </div>
                                                    <div class="col-sm-12 col-mb-9 col-lg-10 p-10">
                                                        <div class="border-success border-dotted text-center">
                                                            <div class="mb-6"></div>
                                                            <i class="fa-solid fa-file-arrow-up fs-5x text-success"></i><br>
                                                            <p class="fs-3 text-success">Upload employee score .csv</p>
                                                            <div class="mb-3"></div>
                                                            <a href="#" class="btn btn-primary">Choose File</a>
                                                            <div class="mb-6"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator"></div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-mb-3 col-lg-2">
                                                        <p class="fs-5"></p>
                                                    </div>
                                                    <div class="col-sm-12 col-mb-9 col-lg-10 p-10 text-center">
                                                        <button class="btn btn-primary w-200px w-lg-500px" onclick="checkStatusUpload()">Upload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Accordion-->
                            </div>
                            <!-- end::Information -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>