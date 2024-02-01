<div class="modal bg-body fade" tabindex="-1" id="modal_class_add">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h5 class="modal-title">ADD CLASS TRAIN</h5>

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
                                <a class="nav-link w-100 active btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_information">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Information</span>
                                        <span class="fs-7">ข้อมูลทั่วไป</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_schedule">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Schedule</span>
                                        <span class="fs-7">กำหนดการ</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_expenses">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Expenses</span>
                                        <span class="fs-7">ค่าใช้จ่าย</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-10">

                        <div class="tab-content" id="myTabContent">
                            <!-- begin::Information -->
                            <div class="tab-pane fade show active" id="tab_information" role="tabpanel">
                                <span class="font-Noto fs-3">ข้อมูลทั่วไป</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">CLASS NUMBER / รุ่นที่</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="number" class="form-control form-control-solid" placeholder="CLASS NUMBER" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-8">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">TRAINING TYPE / รูปแบบการอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" aria-label="Select example">
                                                <option>SELECT TRAINING TYPE</option>
                                                <option value="1">ภายใน</option>
                                                <option value="2">ภายนอก</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">TRAINING SYSTEM / ระบบการจัดอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" aria-label="Select example">
                                                <option>SELECT TRAINING SYSTEM</option>
                                                <option value="1">Onsite - การอบรมในรูปแบบ Classroom </option>
                                                <option value="2">Online - การอบรมผ่านโปรแกรมออนไลน์ เช่น Zoom , Microsoft team</option>
                                                <option value="3">E-learning - อบรมผ่านสื่อวีดีโอสำเร็จรูป</option>
                                                <option value="4">Hybrid - อบรมในรูปแบบ Calassroom และ Online</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">TYPE APPROVE / วิธีอนุมัติ (โควต้า/คัดเลือก)</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" aria-label="Select example">
                                                <option>SELECT TYPE APPROVE</option>
                                                <option value="1">โควต้า</option>
                                                <option value="2">คัดเลือก</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">INSTRUCTOR / วิทยากร</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_class_add" data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">นันทนัช แกวสิงห์</option>
                                                <option value="2">คีตกาล บุญชัย</option>
                                                <option value="3">จรินดา ธงชัย</option>
                                                <option value="4">จิรกิตติ์ อัครพิพัฒน์กุล</option>
                                                <option value="5">ชลสิรี ชินสมบูรณ์</option>
                                                <option value="6">ชวิน ศฤงคารินทร์</option>
                                                <option value="7">ณพสร ชุติพิมลกุล</option>
                                                <option value="8">ณัฐรุจี สายแสง</option>
                                                <option value="9">ตุลธร พึ่งพา</option>
                                                <option value="10">ทัตเทพ สุขสมัย</option>
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
                                            <textarea name="description" id="description">
                                                <p>คำอธิบาย</p>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::Information -->
                            <!-- begin::Information -->
                            <div class="tab-pane fade" id="tab_schedule" role="tabpanel">
                                <span class="font-Noto fs-3">กำหนดการ</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">NUMBER OR PARTICIPANT / จำนวนผู้เข้าอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="number" class="form-control form-control-solid" placeholder="NUMBER OR PARTICIPANT" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-8">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label for="kt_td_picker_linked_1_input" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">BEGIN ENROLL DATETIME / เริ่มเปิดให้ลงทะเบียน</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="input-group log-event" id="register_start" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                <input id="kt_td_picker_linked_1_input" type="text" class="form-control form-select-solid" data-td-target="#kt_td_picker_linked_1" />
                                                <span class="input-group-text" data-td-target="#kt_td_picker_linked_1" data-td-toggle="datetimepicker">
                                                    <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label for="kt_td_picker_linked_2_input" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">END ENROLL DATETIME / สิ้นสุดให้ลงทะเบียน</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="input-group log-event" id="register_end" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                <input id="kt_td_picker_linked_2_input" type="text" class="form-control form-select-solid" data-td-target="#kt_td_picker_linked_2" />
                                                <span class="input-group-text" data-td-target="#kt_td_picker_linked_2" data-td-toggle="datetimepicker">
                                                    <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">BEGIN CLASS DATETIME / เริ่มเรียน</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="input-group log-event" id="class_start" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                <input id="kt_td_picker_linked_1_input" type="text" class="form-control form-select-solid" data-td-target="#kt_td_picker_linked_1" />
                                                <span class="input-group-text" data-td-target="#kt_td_picker_linked_1" data-td-toggle="datetimepicker">
                                                    <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">END CLASS DATETIME / สิ้นสุดเรียน</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="input-group log-event" id="class_end" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                <input id="kt_td_picker_linked_2_input" type="text" class="form-control form-select-solid" data-td-target="#kt_td_picker_linked_2" />
                                                <span class="input-group-text" data-td-target="#kt_td_picker_linked_2" data-td-toggle="datetimepicker">
                                                    <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="font-Noto fs-3">สถานที่จัดอบรม</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">COMPANY / บริษัทที่จัดอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_class_add" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">TSA : Thai Summit Auto Press Co, Ltd.</option>
                                                <option value="2">TSLA : Thai Summit Laemchabang Autoparts Co, Ltd.</option>
                                                <option value="2">TSB : Thai Summit Banpho Co, Ltd.</option>
                                                <option value="2">TSP : Thai Summit Plastech Co., Ltd.</option>
                                                <option value="2">TSRA : Thai Summit Rayong Autoparts Industry Co., Ltd</option>
                                                <option value="2">TSI : Thai Summit Interseats Co., Ltd</option>
                                                <option value="2">TSH : Thai Summit Harness Public Co., Ltd</option>
                                                <option value="2">TSCP : Thai Summit Cable & Part Co., Ltd</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">PLACE / สถานที่จัดอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_class_add" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="2">TS ACADEMY</option>
                                                <option value="1">Online Training</option>
                                                <option value="2">Website Thaimooc (E-Learning)</option>
                                                <option value="2">Training Center ABB Automation (Thailand) Co., Ltd</option>
                                                <option value="2">บริษัท ไทยซัมมิท แหลมฉบัง โอโตพาร์ท จำกัด</option>
                                                <option value="2">บริษัท ทีเอส อินเตอร์เทค จำกัด</option>
                                                <option value="2">บริษัทไทยชนาธร อุตสาหกรรม จำกัด</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">ROOM / ห้องจัดอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Theater</option>
                                                <option value="2">3D Room</option>
                                                <option value="2">Robot</option>
                                                <option value="2">Arduino</option>
                                                <option value="2">Pnuematic & HYD</option>
                                                <option value="2">THE FUTURE</option>
                                                <option value="2">THE POWER</option>
                                                <option value="2">THE SPACE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::Information -->
                            <!-- begin::Information -->
                            <div class="tab-pane fade" id="tab_schedule" role="tabpanel">
                                <span class="font-Noto fs-3">กำหนดการ</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">NUMBER OR PARTICIPANT / จำนวนผู้เข้าอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <input type="number" class="form-control form-control-solid" placeholder="NUMBER OR PARTICIPANT" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-8">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label for="kt_td_picker_linked_1_input" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">BEGIN ENROLL DATETIME / เริ่มเปิดให้ลงทะเบียน</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="input-group log-event" id="register_start" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                <input id="kt_td_picker_linked_1_input" type="text" class="form-control form-select-solid" data-td-target="#kt_td_picker_linked_1" />
                                                <span class="input-group-text" data-td-target="#kt_td_picker_linked_1" data-td-toggle="datetimepicker">
                                                    <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label for="kt_td_picker_linked_2_input" class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">END ENROLL DATETIME / สิ้นสุดให้ลงทะเบียน</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="input-group log-event" id="register_end" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                <input id="kt_td_picker_linked_2_input" type="text" class="form-control form-select-solid" data-td-target="#kt_td_picker_linked_2" />
                                                <span class="input-group-text" data-td-target="#kt_td_picker_linked_2" data-td-toggle="datetimepicker">
                                                    <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">BEGIN CLASS DATETIME / เริ่มเรียน</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="input-group log-event" id="class_start" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                <input id="kt_td_picker_linked_1_input" type="text" class="form-control form-select-solid" data-td-target="#kt_td_picker_linked_1" />
                                                <span class="input-group-text" data-td-target="#kt_td_picker_linked_1" data-td-toggle="datetimepicker">
                                                    <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">END CLASS DATETIME / สิ้นสุดเรียน</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="input-group log-event" id="class_end" data-td-target-input="nearest" data-td-target-toggle="nearest">
                                                <input id="kt_td_picker_linked_2_input" type="text" class="form-control form-select-solid" data-td-target="#kt_td_picker_linked_2" />
                                                <span class="input-group-text" data-td-target="#kt_td_picker_linked_2" data-td-toggle="datetimepicker">
                                                    <i class="ki-duotone ki-calendar fs-2"><span class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="font-Noto fs-3">สถานที่จัดอบรม</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">COMPANY / บริษัทที่จัดอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_class_add" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">TSA : Thai Summit Auto Press Co, Ltd.</option>
                                                <option value="2">TSLA : Thai Summit Laemchabang Autoparts Co, Ltd.</option>
                                                <option value="2">TSB : Thai Summit Banpho Co, Ltd.</option>
                                                <option value="2">TSP : Thai Summit Plastech Co., Ltd.</option>
                                                <option value="2">TSRA : Thai Summit Rayong Autoparts Industry Co., Ltd</option>
                                                <option value="2">TSI : Thai Summit Interseats Co., Ltd</option>
                                                <option value="2">TSH : Thai Summit Harness Public Co., Ltd</option>
                                                <option value="2">TSCP : Thai Summit Cable & Part Co., Ltd</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">PLACE / สถานที่จัดอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#modal_class_add" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="2">TS ACADEMY</option>
                                                <option value="1">Online Training</option>
                                                <option value="2">Website Thaimooc (E-Learning)</option>
                                                <option value="2">Training Center ABB Automation (Thailand) Co., Ltd</option>
                                                <option value="2">บริษัท ไทยซัมมิท แหลมฉบัง โอโตพาร์ท จำกัด</option>
                                                <option value="2">บริษัท ทีเอส อินเตอร์เทค จำกัด</option>
                                                <option value="2">บริษัทไทยชนาธร อุตสาหกรรม จำกัด</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">ROOM / ห้องจัดอบรม</span>
                                            </label>
                                            <!--end::Label-->
                                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Theater</option>
                                                <option value="2">3D Room</option>
                                                <option value="2">Robot</option>
                                                <option value="2">Arduino</option>
                                                <option value="2">Pnuematic & HYD</option>
                                                <option value="2">THE FUTURE</option>
                                                <option value="2">THE POWER</option>
                                                <option value="2">THE SPACE</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::Information -->
                            <!-- begin::Information -->
                            <div class="tab-pane fade" id="tab_expenses" role="tabpanel">
                                <span class="font-Noto fs-3">ค่าใช้จ่าย</span>
                                <div class="separator mb-10"></div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class="d-flex flex-column mb-8 fv-row font-Noto">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                <span class="required">EXPENSES / ค่าใช้จ่าย <o class="text-info">คิดเป็นรายชั่วโมง</o></span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="input-group input-group-solid mb-5">
                                                <span class="input-group-text">฿</span>
                                                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::Information -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>