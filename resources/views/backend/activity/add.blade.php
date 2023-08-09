@extends('backend.master')
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">Etkinlik
                    Ekle</h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Back-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <a href="javascript:history.back()"
                    class="page-heading d-flex text-dark fw-bold fs-3 justify-content-center my-0 text-hover-success">
                    <i class="fa fa-arrow-left my-auto mx-2"></i>
                    Geri Dön
                </a>
                <!--end::Title-->
            </div>
            <!--end::Back-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <!--begin::Col-->
                <div class="col-xl-12 mb-5 mb-xl-8">
                    <div class="card card-flush h-xl-100 mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <!--<div class="ps-12 pt-12"></div>-->
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-5">
                            <!--begin::Tab-->
                            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab_activity_detay">Detay</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab_activity_seo">Seo Bilgileri</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="TabContent_1">
                                <div class="tab-pane fade show active" id="tab_activity_detay" role="tabpanel">
                                    <!--begin::Form-->
                                    <form id="activity_detail_form" class="form">
                                        <!--begin::Card body-->
                                        <div class="card-body px-3 py-9">
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Etkinlik Kapak
                                                    Görseli</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-10">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline" data-kt-image-input="true"
                                                        style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px"
                                                            style="background-image: url(../assets/media/avatars/300-1.jpg)">
                                                        </div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                            title="Resmi Değiştir">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="activity_image"
                                                                accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="activity_image_remove" />
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Cancel-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                            title="Resmi Sil">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Cancel-->
                                                        <!--begin::Remove-->
                                                        <span
                                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                            title="Resmi Kaldır">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->
                                                    <!--begin::Hint-->
                                                    <div class="form-text">png, jpg, jpeg - (20x20)</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">
                                                    <span class="required">Kategori</span>
                                                </label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-10 fv-row">
                                                    <select name="category" aria-label="Seçiniz" data-control="select2"
                                                        data-placeholder="Seçiniz..."
                                                        class="form-select form-select-solid form-select-lg fw-semibold"
                                                        multiple>
                                                        <option value="">Seçiniz...</option>
                                                        <option value="category 1">Kategori 1</option>
                                                        <option value="category 2">Kategori 2</option>
                                                        <option value="category 3">Kategori 3</option>
                                                        <option value="category 4">Kategori 4</option>
                                                        <option value="category 5">Kategori 5</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Tab-->
                                                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab"
                                                            href="#tab_activity_tr">
                                                            <span>
                                                                <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                                    width="28" height="28" alt="TR"
                                                                    title="TR">
                                                            </span>

                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tab_activity_en">
                                                            <span>
                                                                <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                                    width="28" height="28" alt="EN"
                                                                    title="EN">
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="TabContent_2">
                                                    <div class="tab-pane fade show active" id="tab_activity_tr"
                                                        role="tabpanel">
                                                        <!--begin::Form-->
                                                        <form id="activity_detail_tr_form" class="form">
                                                            <!--begin::Card body-->
                                                            <div class="card-body px-0 py-9">
                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-2 col-form-label ps-5 required fw-bold fs-6">Başlık</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="text"
                                                                                    name="activity_name_tr"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Özet</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10 fv-row">
                                                                        <textarea name="activity_summary_tr" class="form-control form-control-lg form-control-solid" value=""></textarea>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-12 col-form-label fw-bold fs-6 mb-5 ps-5">
                                                                        <span>İçerik</span>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-12 fv-row mb-5 ps-5">

                                                                        <textarea id="tinymce_activity_detail_tr" name="tinymce_activity_detail_tr" class="tox-target">
                                                                            
                                                                        </textarea>





                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->

                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6">Konum</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <input type="text"
                                                                                            name="activity_location_tr"
                                                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                            value="" />
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>

                                                                    </div>

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row ms-10">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6">Bulunduğu
                                                                                Yer</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <input type="text"
                                                                                            name="activity_on_location_tr"
                                                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                            value="" />
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->

                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6"
                                                                                style="padding-top: 0px;">Etkinlik
                                                                                Başlangıç <br> Tarihi - Saati</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <div class="input-group"
                                                                                            id="add_activity_start_date_tr"
                                                                                            data-td-target-input="nearest"
                                                                                            data-td-target-toggle="nearest">
                                                                                            <input
                                                                                                id="add_activity_start_date_input_tr"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                data-td-target="#add_activity_start_date_tr" />
                                                                                            <span class="input-group-text"
                                                                                                data-td-target="#add_activity_start_date_tr"
                                                                                                data-td-toggle="datetimepicker">
                                                                                                <i
                                                                                                    class="bi bi-calendar2-week fs-2"><span
                                                                                                        class="path1"></span><span
                                                                                                        class="path2"></span></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>

                                                                    </div>
                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row ms-10">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6"
                                                                                style="padding-top: 0px;">Etkinlik Bitiş
                                                                                <br> Tarihi - Saati</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <div class="input-group"
                                                                                            id="add_activity_end_date_tr"
                                                                                            data-td-target-input="nearest"
                                                                                            data-td-target-toggle="nearest">
                                                                                            <input
                                                                                                id="add_activity_end_date_input_tr"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                data-td-target="#add_activendtart_date_tr" />
                                                                                            <span class="input-group-text"
                                                                                                data-td-target="#add_activendtart_date_tr"
                                                                                                data-td-toggle="datetimepicker">
                                                                                                <i
                                                                                                    class="bi bi-calendar2-week fs-2"><span
                                                                                                        class="path1"></span><span
                                                                                                        class="path2"></span></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>

                                                                    </div>


                                                                </div>
                                                                <!--end::Input group-->

                                                                <div class="separator my-10"></div>

                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6"
                                                                                style="padding-top: 0px;">Yayın Başlangıç
                                                                                <br>Tarihi - Saati</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <div class="input-group"
                                                                                            id="add_activity_puslish_start_date_tr"
                                                                                            data-td-target-input="nearest"
                                                                                            data-td-target-toggle="nearest">
                                                                                            <input
                                                                                                id="add_activity_puslish_start_date_date_input_tr"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                data-td-target="#add_activity_puslish_start_date_tr" />
                                                                                            <span class="input-group-text"
                                                                                                data-td-target="#add_activity_puslish_start_date_tr"
                                                                                                data-td-toggle="datetimepicker">
                                                                                                <i
                                                                                                    class="bi bi-calendar2-week fs-2"><span
                                                                                                        class="path1"></span><span
                                                                                                        class="path2"></span></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row ms-10">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6"
                                                                                style="padding-top: 0px;">Yayın Bitiş <br>
                                                                                Tarihi - Saati</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <div class="input-group"
                                                                                            id="activity_puslish_end_tr"
                                                                                            data-td-target-input="nearest"
                                                                                            data-td-target-toggle="nearest">
                                                                                            <input
                                                                                                id="activity_puslish_end_date_input_tr"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                data-td-target="#activity_puslish_end_tr" />
                                                                                            <span class="input-group-text"
                                                                                                data-td-target="#activity_puslish_end_tr"
                                                                                                data-td-toggle="datetimepicker">
                                                                                                <i
                                                                                                    class="bi bi-calendar2-week fs-2"><span
                                                                                                        class="path1"></span><span
                                                                                                        class="path2"></span></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <!--end::Input group-->

                                                                <div class="separator my-10"></div>

                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-2 col-form-label ps-5 required fw-bold fs-6">Url</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <div class="row">
                                                                                    <div class="col-lg-10">
                                                                                        <input type="text"
                                                                                            name="activity_url_tr"
                                                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                            value="" />
                                                                                    </div>
                                                                                    <div class="col-lg-2">
                                                                                        <button type="submit"
                                                                                            class="btn btn-outline btn-outline-success w-100"
                                                                                            id="activity_detail_url_btn_tr">URL
                                                                                            ÜRET</button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->

                                                            </div>
                                                            <!--end::Card body-->
                                                            <!--begin::Actions-->
                                                            <div
                                                                class="card-footer d-flex justify-content-between py-6 px-0">

                                                                <!--begin::Input group-->
                                                                <div class="row mb-0">
                                                                    <label
                                                                        class="col-lg-8 col-form-label fw-bold fs-6 ps-5">Durum</label>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <div
                                                                            class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                                            <input class="form-check-input w-50px h-25px"
                                                                                type="checkbox"
                                                                                id="allowactivity_detail_tr"
                                                                                checked="checked" />
                                                                            <label class="form-check-label"
                                                                                for="allowactivity_detail_tr"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->
                                                                <button type="submit"
                                                                    class="btn btn-outline btn-outline-success"
                                                                    id="btn_submit_activity_detail_tr"><i
                                                                        class="fa-solid fa-check ps-1"></i> KAYDET</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <div class="tab-pane fade" id="tab_activity_en" role="tabpanel">
                                                        <!--begin::Form-->
                                                        <form id="activity_detail_en_form" class="form">
                                                            <!--begin::Card body-->
                                                            <div class="card-body px-0 py-9">
                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-2 col-form-label ps-5 required fw-bold fs-6">Başlık</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="text"
                                                                                    name="activity_name_en"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="" />
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Özet</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10 fv-row">
                                                                        <textarea name="activity_summary_en" class="form-control form-control-lg form-control-solid" value=""></textarea>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-12 col-form-label fw-bold fs-6 mb-5 ps-5">
                                                                        <span>İçerik</span>
                                                                    </label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-12 fv-row mb-5 ps-5">

                                                                        <textarea id="tinymce_activity_detail_en" name="tinymce_activity_detail_en" class="tox-target">
                                                                            
                                                                        </textarea>


                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->

                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6">Konum</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <input type="text"
                                                                                            name="activity_location_en"
                                                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                            value="" />
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>

                                                                    </div>

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row ms-10">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6">Bulunduğu
                                                                                Yer</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <input type="text"
                                                                                            name="activity_on_location_en"
                                                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                            value="" />
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->


                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6"
                                                                                style="padding-top: 0px;">Etkinlik
                                                                                Başlangıç <br> Tarihi - Saati</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <div class="input-group"
                                                                                            id="add_activity_start_date_en"
                                                                                            data-td-target-input="nearest"
                                                                                            data-td-target-toggle="nearest">
                                                                                            <input
                                                                                                id="add_activity_start_date_input_tr"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                data-td-target="#add_activity_start_date_en" />
                                                                                            <span class="input-group-text"
                                                                                                data-td-target="#add_activity_start_date_en"
                                                                                                data-td-toggle="datetimepicker">
                                                                                                <i
                                                                                                    class="bi bi-calendar2-week fs-2"><span
                                                                                                        class="path1"></span><span
                                                                                                        class="path2"></span></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>

                                                                    </div>
                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row ms-10">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6"
                                                                                style="padding-top: 0px;">Etkinlik Bitiş
                                                                                <br> Tarihi - Saati</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <div class="input-group"
                                                                                            id="add_activity_end_date_en"
                                                                                            data-td-target-input="nearest"
                                                                                            data-td-target-toggle="nearest">
                                                                                            <input
                                                                                                id="add_activity_end_date_input_en"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                data-td-target="#add_activendtart_date_en" />
                                                                                            <span class="input-group-text"
                                                                                                data-td-target="#add_activendtart_date_en"
                                                                                                data-td-toggle="datetimepicker">
                                                                                                <i
                                                                                                    class="bi bi-calendar2-week fs-2"><span
                                                                                                        class="path1"></span><span
                                                                                                        class="path2"></span></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>

                                                                    </div>


                                                                </div>
                                                                <!--end::Input group-->

                                                                <div class="separator my-10"></div>

                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6"
                                                                                style="padding-top: 0px;">Yayın Başlangıç
                                                                                <br>Tarihi - Saati</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <div class="input-group"
                                                                                            id="add_activity_puslish_start_date_en"
                                                                                            data-td-target-input="nearest"
                                                                                            data-td-target-toggle="nearest">
                                                                                            <input
                                                                                                id="add_activity_puslish_start_date_date_input_en"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                data-td-target="#add_activity_puslish_start_date_en" />
                                                                                            <span class="input-group-text"
                                                                                                data-td-target="#add_activity_puslish_start_date_en"
                                                                                                data-td-toggle="datetimepicker">
                                                                                                <i
                                                                                                    class="bi bi-calendar2-week fs-2"><span
                                                                                                        class="path1"></span><span
                                                                                                        class="path2"></span></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                        <div class="row ms-10">
                                                                            <!--begin::Label-->
                                                                            <label
                                                                                class="col-lg-4 col-form-label fw-bold fs-6">Yayın
                                                                                Bitiş <br> Tarihi - Saati</label>
                                                                            <!--end::Label-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-8">
                                                                                <!--begin::Row-->
                                                                                <div class="row">
                                                                                    <!--begin::Col-->
                                                                                    <div class="col-lg-12 fv-row">
                                                                                        <div class="input-group"
                                                                                            id="activity_puslish_end_en"
                                                                                            data-td-target-input="nearest"
                                                                                            data-td-target-toggle="nearest">
                                                                                            <input
                                                                                                id="activity_puslish_end_date_input_en"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                data-td-target="#activity_puslish_end_en" />
                                                                                            <span class="input-group-text"
                                                                                                data-td-target="#activity_puslish_end_en"
                                                                                                data-td-toggle="datetimepicker">
                                                                                                <i
                                                                                                    class="bi bi-calendar2-week fs-2"><span
                                                                                                        class="path1"></span><span
                                                                                                        class="path2"></span></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!--end::Col-->
                                                                                </div>
                                                                                <!--end::Row-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <!--end::Input group-->

                                                                <div class="separator my-10"></div>

                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-2 col-form-label ps-5 required fw-bold fs-6">Url</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <div class="row">
                                                                                    <div class="col-lg-10">
                                                                                        <input type="text"
                                                                                            name="activity_url_en"
                                                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                            value="" />
                                                                                    </div>
                                                                                    <div class="col-lg-2">
                                                                                        <button type="submit"
                                                                                            class="btn btn-outline btn-outline-success w-100"
                                                                                            id="activity_detail_url_btn_en">URL
                                                                                            ÜRET</button>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->

                                                            </div>
                                                            <!--end::Card body-->
                                                            <!--begin::Actions-->
                                                            <div
                                                                class="card-footer d-flex justify-content-between py-6 px-0">

                                                                <!--begin::Input group-->
                                                                <div class="row mb-0">
                                                                    <label
                                                                        class="col-lg-8 col-form-label fw-bold fs-6 ps-5">Durum</label>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <div
                                                                            class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                                            <input class="form-check-input w-50px h-25px"
                                                                                type="checkbox"
                                                                                id="allowactivity_detail_en"
                                                                                checked="checked" />
                                                                            <label class="form-check-label"
                                                                                for="allowactivity_detail_en"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->
                                                                <button type="submit"
                                                                    class="btn btn-outline btn-outline-success"
                                                                    id="btn_submit_activity_detail_en"><i
                                                                        class="fa-solid fa-check ps-1"></i> KAYDET</button>
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Card body-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <div class="tab-pane fade" id="tab_activity_seo" role="tabpanel">
                                    <!--begin::Tab-->
                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_seo_tr">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                        width="28" height="28" alt="TR" title="TR">
                                                </span>

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tab_seo_en">
                                                <span>
                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                        width="28" height="28" alt="EN" title="EN">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="TabContent_3">
                                        <div class="tab-pane fade show active" id="tab_seo_tr" role="tabpanel">
                                            <!--begin::Form-->
                                            <form id="activity_seo_tr_form" class="form">
                                                <!--begin::Card body-->
                                                <div class="card-body px-3 py-9">
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Site
                                                            Başlığı</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="activity_seo_title_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Site
                                                            Açıklaması</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10 fv-row">
                                                            <textarea name="activity_seo_description_tr" class="form-control form-control-lg form-control-solid" value=""></textarea>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Site
                                                            Anahtar Kelimeleri</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" id="activity_seo_keywords_tr"
                                                                        name="activity_seo_keywords_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                <div class="card-footer d-flex justify-content-between py-6 px-0">
                                                    <!--begin::Input group-->
                                                    <div class="row mb-0">
                                                        <label class="col-lg-8 col-form-label fw-bold fs-6 ">Durum</label>
                                                        <div class="col-lg-4 d-flex align-items-center">
                                                            <div
                                                                class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                                <input class="form-check-input w-50px h-25px"
                                                                    type="checkbox" id="allowactivity_seo_tr"
                                                                    checked="checked" />
                                                                <label class="form-check-label"
                                                                    for="allowactivity_seo_tr"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <button type="submit" class="btn btn-outline btn-outline-success"
                                                        id="btn_submit_seo_tr"><i class="fa-solid fa-check ps-1"></i>
                                                        KAYDET</button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <div class="tab-pane fade" id="tab_seo_en" role="tabpanel">
                                            <!--begin::Form-->
                                            <form id="activity_seo_en_form" class="form">
                                                <!--begin::Card body-->
                                                <div class="card-body px-3 py-9">
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Site
                                                            Başlığı</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" name="activity_seo_title_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Site
                                                            Açıklaması</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10 fv-row">
                                                            <textarea name="activity_seo_description_en" class="form-control form-control-lg form-control-solid" value=""></textarea>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                    <!--begin::Input group-->
                                                    <div class="row mb-6">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Site
                                                            Anahtar Kelimeleri</label>
                                                        <!--end::Label-->
                                                        <!--begin::Col-->
                                                        <div class="col-lg-10">
                                                            <!--begin::Row-->
                                                            <div class="row">
                                                                <!--begin::Col-->
                                                                <div class="col-lg-12 fv-row">
                                                                    <input type="text" id="activity_seo_keywords_en"
                                                                        name="activity_seo_keywords_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="" />
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Row-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Input group-->

                                                </div>
                                                <!--end::Card body-->
                                                <!--begin::Actions-->
                                                <div class="card-footer d-flex justify-content-between py-6 px-0">

                                                    <!--begin::Input group-->
                                                    <div class="row mb-0">
                                                        <label class="col-lg-8 col-form-label fw-bold fs-6 ">Durum</label>
                                                        <div class="col-lg-4 d-flex align-items-center">
                                                            <div
                                                                class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                                <input class="form-check-input w-50px h-25px"
                                                                    type="checkbox" id="allowactivity_seo_en"
                                                                    checked="checked" />
                                                                <label class="form-check-label"
                                                                    for="allowactivity_seo_en"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->
                                                    <button type="submit" class="btn btn-outline btn-outline-success"
                                                        id="btn_submit_seo_en"><i class="fa-solid fa-check ps-1"></i>
                                                        KAYDET</button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--end::Tab-->
                        </div>
                        <!--begin::Body-->
                    </div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection
@section('script')
    <!--begin:: extra js-->
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
    <script src="../assets/plugins/custom/tinymce/langs/tr.js"></script>

    <script>
        var input1 = document.querySelector("#activity_seo_keywords_tr");
        new Tagify(input1);

        var input2 = document.querySelector("#activity_seo_keywords_en");
        new Tagify(input2);

        $(document).ready(function() {
            tinymce.init({
                selector: "#tinymce_activity_detail_tr",
                height: "480",
                language: 'tr',
                menubar: false,
                toolbar: ["styleselect fontselect fontsizeselect",
                    "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
                    "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"
                ],
                plugins: "advlist autolink link image lists charmap print preview code"
            });

            tinymce.init({
                selector: "#tinymce_activity_detail_en",
                height: "480",
                language: 'tr',
                menubar: false,
                toolbar: ["styleselect fontselect fontsizeselect",
                    "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
                    "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"
                ],
                plugins: "advlist autolink link image lists charmap print preview code"
            });

        });


        new tempusDominus.TempusDominus(document.getElementById("add_activity_start_date_tr"), {
            display: {
                icons: {
                    time: "bi bi-clock-fill fs-1",
                    date: "bi bi-calendar2-week-fill fs-1",
                    up: "bi bi-chevron-up fs-1",
                    down: "bi bi-chevron-down fs-1",
                    previous: "bi bi-chevron-left fs-1",
                    next: "bi bi-chevron-right fs-1",
                    today: "bi bi-calendar-check-fill fs-1",
                    clear: "bi bi-trash-fill fs-1",
                    close: "bi bi-x-circle-fill fs-1",
                },
                buttons: {
                    today: true,
                    clear: true,
                    close: true,
                },
            }
        });

        new tempusDominus.TempusDominus(document.getElementById("add_activity_end_date_tr"), {
            display: {
                icons: {
                    time: "bi bi-clock-fill fs-1",
                    date: "bi bi-calendar2-week-fill fs-1",
                    up: "bi bi-chevron-up fs-1",
                    down: "bi bi-chevron-down fs-1",
                    previous: "bi bi-chevron-left fs-1",
                    next: "bi bi-chevron-right fs-1",
                    today: "bi bi-calendar-check-fill fs-1",
                    clear: "bi bi-trash-fill fs-1",
                    close: "bi bi-x-circle-fill fs-1",
                },
                buttons: {
                    today: true,
                    clear: true,
                    close: true,
                },
            }
        });

        new tempusDominus.TempusDominus(document.getElementById("add_activity_puslish_start_date_tr"), {
            display: {
                icons: {
                    time: "bi bi-clock-fill fs-1",
                    date: "bi bi-calendar2-week-fill fs-1",
                    up: "bi bi-chevron-up fs-1",
                    down: "bi bi-chevron-down fs-1",
                    previous: "bi bi-chevron-left fs-1",
                    next: "bi bi-chevron-right fs-1",
                    today: "bi bi-calendar-check-fill fs-1",
                    clear: "bi bi-trash-fill fs-1",
                    close: "bi bi-x-circle-fill fs-1",
                },
                buttons: {
                    today: true,
                    clear: true,
                    close: true,
                },
            }
        });

        new tempusDominus.TempusDominus(document.getElementById("activity_puslish_end_tr"), {
            display: {
                icons: {
                    time: "bi bi-clock-fill fs-1",
                    date: "bi bi-calendar2-week-fill fs-1",
                    up: "bi bi-chevron-up fs-1",
                    down: "bi bi-chevron-down fs-1",
                    previous: "bi bi-chevron-left fs-1",
                    next: "bi bi-chevron-right fs-1",
                    today: "bi bi-calendar-check-fill fs-1",
                    clear: "bi bi-trash-fill fs-1",
                    close: "bi bi-x-circle-fill fs-1",
                },
                buttons: {
                    today: true,
                    clear: true,
                    close: true,
                },
            }
        });



        new tempusDominus.TempusDominus(document.getElementById("add_activity_start_date_en"), {
            display: {
                icons: {
                    time: "bi bi-clock-fill fs-1",
                    date: "bi bi-calendar2-week-fill fs-1",
                    up: "bi bi-chevron-up fs-1",
                    down: "bi bi-chevron-down fs-1",
                    previous: "bi bi-chevron-left fs-1",
                    next: "bi bi-chevron-right fs-1",
                    today: "bi bi-calendar-check-fill fs-1",
                    clear: "bi bi-trash-fill fs-1",
                    close: "bi bi-x-circle-fill fs-1",
                },
                buttons: {
                    today: true,
                    clear: true,
                    close: true,
                },
            }
        });

        new tempusDominus.TempusDominus(document.getElementById("add_activity_end_date_en"), {
            display: {
                icons: {
                    time: "bi bi-clock-fill fs-1",
                    date: "bi bi-calendar2-week-fill fs-1",
                    up: "bi bi-chevron-up fs-1",
                    down: "bi bi-chevron-down fs-1",
                    previous: "bi bi-chevron-left fs-1",
                    next: "bi bi-chevron-right fs-1",
                    today: "bi bi-calendar-check-fill fs-1",
                    clear: "bi bi-trash-fill fs-1",
                    close: "bi bi-x-circle-fill fs-1",
                },
                buttons: {
                    today: true,
                    clear: true,
                    close: true,
                },
            }
        });

        new tempusDominus.TempusDominus(document.getElementById("add_activity_puslish_start_date_en"), {
            display: {
                icons: {
                    time: "bi bi-clock-fill fs-1",
                    date: "bi bi-calendar2-week-fill fs-1",
                    up: "bi bi-chevron-up fs-1",
                    down: "bi bi-chevron-down fs-1",
                    previous: "bi bi-chevron-left fs-1",
                    next: "bi bi-chevron-right fs-1",
                    today: "bi bi-calendar-check-fill fs-1",
                    clear: "bi bi-trash-fill fs-1",
                    close: "bi bi-x-circle-fill fs-1",
                },
                buttons: {
                    today: true,
                    clear: true,
                    close: true,
                },
            }
        });

        new tempusDominus.TempusDominus(document.getElementById("activity_puslish_end_en"), {
            display: {
                icons: {
                    time: "bi bi-clock-fill fs-1",
                    date: "bi bi-calendar2-week-fill fs-1",
                    up: "bi bi-chevron-up fs-1",
                    down: "bi bi-chevron-down fs-1",
                    previous: "bi bi-chevron-left fs-1",
                    next: "bi bi-chevron-right fs-1",
                    today: "bi bi-calendar-check-fill fs-1",
                    clear: "bi bi-trash-fill fs-1",
                    close: "bi bi-x-circle-fill fs-1",
                },
                buttons: {
                    today: true,
                    clear: true,
                    close: true,
                },
            }
        });
    </script>
    <!--end:: extra js-->
@endsection
