<div class="modal bg-body fade" tabindex="-1" id="kt_modal_add_news">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h5 class="modal-title">Add Account</h5>

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
                                <a class="nav-link w-100 active btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_info">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Information</span>
                                        <span class="fs-7">ข้อมูลทั่วไป</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#tab_multimedia">
                                    <span class="svg-icon fs-2"><svg>...</svg></span>
                                    <span class="d-flex flex-column align-items-start">
                                        <span class="fs-4 fw-bold">Multimedia</span>
                                        <span class="fs-7">สื่อและรูปภาพ</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-10 col-lg-10">
                        <div class="tab-content" id="myTabContent">

                            <!-- begin::Profile -->
                            <div class="tab-pane fade show active" id="tab_info" role="tabpanel">
                                <span class="font-Noto fs-3">ข้อมูลโปรไฟล์</span>
                                <div class="separator mb-10"></div>
                                <div class="row mb-8">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!--begin::Input first name-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">TITLE NEWS / พาดหัวข่าว</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" name="title_news" id="title_news" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="TITLE NEWS" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input first name-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Lastname-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">TYPE NEWS / ประเภทข่าวสาร</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select onchange="showCourseDiv(this)" class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_add_news" data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                <option value="public">ประชาสัมพันธ์</option>
                                                <option value="vision">นโยบาย</option>
                                                <option value="course">หลักสูตร</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Lastname-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input first name-->
                                        <div class="fv-row mb-7" id="div_course" style="display:none;">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Course / หลักสูตร </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" data-control="select2" data-dropdown-parent="#kt_modal_add_news" data-placeholder="Select an option" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">การวางแผนการผลิตทั้งภายใน(บริษัท)และภายนอก(Supplier)</option>
                                                <option value="2">Mechanical System (basic)</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input first name-->
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Status / สถานะข่าว</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select class="form-select form-select-solid" aria-label="Select example" placeholder="Select status news">
                                                <option>Select status news</option>
                                                <option value="1">ENABLE</option>
                                                <option value="0">DISABLE</option>
                                            </select>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Detail / รายละเอียดข่าวสาร</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div class="py-5" data-bs-theme="light">
                                                <textarea name="detailNews" id="detailNews">
                                                    <h1>หัวข่าวเรื่อง</h1>
                                                    <p>เนื้อหา</p>
                                                    <h1>หัวข้อวิดีโอ</h1>
                                                    <figure class="symbol">
                                                        <oembed url="https://www.youtube.com/watch?v=d-pSVf8Xazk"></oembed>
                                                    </figure>
                                                    <p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.</p>
                                                </textarea>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::Profile -->

                            <!-- begin::multimedia -->
                            <div class="tab-pane fade" id="tab_multimedia" role="tabpanel">
                                <span class="font-Noto fs-3">สื่อและรูปภาพ</span>
                                <div class="separator mb-10"></div>
                                <div class="row mb-8">
                                    <div class="col-sm-12 col-mb-6 col-lg-6">
                                        <!--begin::Input Level-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fw-semibold fs-6 mb-2 font-Noto">Image card / ภาพปกข่าวสาร <o class="text-danger fs-7">(SIZE : 600x400px)</o></label>
                                            <br>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <!--begin::Image placeholder-->
                                            <style>
                                                .image-input-placeholder {
                                                    background-image: url('assets/media/svg/files/blank-image.svg');
                                                }

                                                [data-bs-theme="dark"] .image-input-placeholder {
                                                    background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                                }
                                            </style>
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-600px h-400px" style="background-image: url(assets/media/svg/files/blank-image.svg);"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                    <i class="ki-duotone ki-pencil fs-7">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                    <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                                    <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input Level-->
                                    </div>
                                </div>
                            </div>
                            <!-- end::multimedia -->

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