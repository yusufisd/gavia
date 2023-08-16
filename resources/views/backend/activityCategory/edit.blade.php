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
                    Kategorisi Ekle</h1>
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
                                    <a class="nav-link active" data-bs-toggle="tab"
                                        href="#tab_add_activity_category_detay">Detay</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tab_add_activity_category_seo">Seo
                                        Bilgileri</a>
                                </li>
                            </ul>

                            <form action="{{ route('admin.activityCategory.update',$data_tr->id) }}" method="POST">
                                @csrf

                                <div class="tab-content" id="TabContent_1">
                                    <div class="tab-pane fade show active" id="tab_add_activity_category_detay"
                                        role="tabpanel">
                                        <!--begin::Form-->
                                        <form id="add_activity_detail_form" class="form">
                                            <!--begin::Card body-->
                                            <div class="card-body px-3 py-9">
                                                <div class="row mb-6">
                                                    <!--begin::Tab-->
                                                    <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#tab_add_activity_category_detail_tr">
                                                                <span>
                                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                                        width="28" height="28" alt="TR"
                                                                        title="TR">
                                                                </span>

                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#tab_add_activity_category_detail_en">
                                                                <span>
                                                                    <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                                        width="28" height="28" alt="EN"
                                                                        title="EN">
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="TabContent_2">
                                                        <div class="tab-pane fade show active"
                                                            id="tab_add_activity_category_detail_tr" role="tabpanel">
                                                            <!--begin::Form-->
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
                                                                                    name="add_activity_category_name_tr"
                                                                                    onchange="create_slug_tr()" value="{{$data_tr->title}}"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    id="add_activity_category_name_tr" />
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
                                                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6">İçerik</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10 fv-row">
                                                                        <textarea name="add_activity_text_tr" id="add_activity_text_tr" onchange="create_ozet()"
                                                                            class="form-control form-control-lg form-control-solid" >{{$data_tr->description}}</textarea>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
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
                                                                                            name="add_activity_category_url_tr"
                                                                                            id="add_activity_category_url_tr" value="{{$data_tr->link}}"
                                                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" />
                                                                                    </div>
                                                                                    <div class="col-lg-2">
                                                                                        <button type="submit"
                                                                                            class="btn btn-outline btn-outline-success w-100"
                                                                                            id="add_activity_category_detail_url_btn_tr">URL
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

                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Sıralama</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="number"
                                                                                    name="add_activity_category_detail_no_tr"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="{{$data_tr->queue}}" />
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
                                                                        class="col-lg-8 col-form-label fw-bold fs-6 ps-5 ">Durum</label>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <div
                                                                            class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                                            <input class="form-check-input w-50px h-25px"
                                                                                type="checkbox"
                                                                                id="allowadd_activity_category_detail_tr"
                                                                                {{$data_tr->status == 1 ? 'checked' : ''}} />
                                                                            <label class="form-check-label"
                                                                                for="allowadd_activity_category_detail_tr"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->

                                                                
                                                            </div>
                                                            <!--end::Actions-->
                                                            <!--end::Form-->
                                                        </div>
                                                        <div class="tab-pane fade"
                                                            id="tab_add_activity_category_detail_en" role="tabpanel">
                                                            <!--begin::Form-->
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
                                                                                    name="add_activity_category_name_en"
                                                                                    id="add_activity_category_name_en"
                                                                                    onchange="create_slug_en()" value="{{$data_en->title}}"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" />
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
                                                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6">İçerik</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10 fv-row">
                                                                        <textarea name="add_activity_text_en" id="add_activity_text_en" onchange="create_ozet_en()"
                                                                            class="form-control form-control-lg form-control-solid" >{{$data_en->description}}</textarea>
                                                                    </div>
                                                                    <!--end::Col-->
                                                                </div>
                                                                <!--end::Input group-->
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
                                                                                            name="add_activity_category_url_en"
                                                                                            id="add_activity_category_url_en" value="{{$data_en->link}}"
                                                                                            class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" />
                                                                                    </div>
                                                                                    <div class="col-lg-2">
                                                                                        <button type="submit"
                                                                                            class="btn btn-outline btn-outline-success w-100"
                                                                                            id="add_activity_category_detail_url_btn_en">URL
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

                                                                <!--begin::Input group-->
                                                                <div class="row mb-6">
                                                                    <!--begin::Label-->
                                                                    <label
                                                                        class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Sıralama</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Col-->
                                                                    <div class="col-lg-10">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-12 fv-row">
                                                                                <input type="number"
                                                                                    name="add_activity_category_detail_no_en"
                                                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                    value="{{$data_en->queue}}" />
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
                                                                        class="col-lg-8 col-form-label fw-bold fs-6 ps-5 ">Durum</label>
                                                                    <div class="col-lg-4 d-flex align-items-center">
                                                                        <div
                                                                            class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                                            <input class="form-check-input w-50px h-25px"
                                                                                type="checkbox"
                                                                                id="allowadd_activity_category_detail_en"
                                                                                {{$data_en->status == 1 ? 'checked' : ''}} />
                                                                            <label class="form-check-label"
                                                                                for="allowadd_activity_category_detail_en"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Input group-->

                                                            </div>
                                                            <!--end::Actions-->
                                                            <!--end::Form-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Card body-->
                                            <!--end::Form-->
                                    </div>
                                    <div class="tab-pane fade" id="tab_add_activity_category_seo" role="tabpanel">
                                        <!--begin::Tab-->
                                        <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab"
                                                    href="#tab_add_activity_category_seo_tr">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                            width="28" height="28" alt="TR" title="TR">
                                                    </span>

                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab"
                                                    href="#tab_add_activity_category_seo_en">
                                                    <span>
                                                        <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                            width="28" height="28" alt="EN" title="EN">
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="TabContent_3">
                                            <div class="tab-pane fade show active" id="tab_add_activity_category_seo_tr"
                                                role="tabpanel">
                                                <!--begin::Form-->
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
                                                                    <input type="text"
                                                                        name="add_activity_category_seo_title_tr"
                                                                        id="add_activity_category_seo_title_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$data_tr->seo_title}}" />
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
                                                            <textarea name="add_activity_category_seo_description_tr" id="add_activity_category_seo_description_tr"
                                                                class="form-control form-control-lg form-control-solid"> {{$data_tr->seo_title}} </textarea>
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
                                                                    <input type="text"
                                                                        id="add_activity_category_seo_keywords_tr"
                                                                        name="add_activity_category_seo_keywords_tr"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$data_tr->seo_key}}" />
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
                                                                    type="checkbox" id="allowadd_activity_caetgory_seo_tr"
                                                                    {{$data_tr->seo_statu == 1 ? 'checked' :''}} />
                                                                <label class="form-check-label"
                                                                    for="allowadd_activity_caetgory_seo_tr"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Actions-->
                                                <!--end::Form-->
                                            </div>
                                            <div class="tab-pane fade" id="tab_add_activity_category_seo_en"
                                                role="tabpanel">
                                                <!--begin::Form-->
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
                                                                    <input type="text"
                                                                        name="add_activity_category_seo_title_en"
                                                                        id="add_activity_category_seo_title_en" value="{{$data_en->seo_title}}"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" />
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
                                                            <textarea name="add_activity_category_seo_description_en" id="add_activity_category_seo_description_en"
                                                                class="form-control form-control-lg form-control-solid"> {{$data_en->seo_description}} </textarea>
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
                                                                    <input type="text"
                                                                        id="add_activity_category_seo_keywords_en"
                                                                        name="add_activity_category_seo_keywords_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$data_en->seo_key}}" />
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
                                                                    type="checkbox" id="allowadd_activity_category_seo_en"
                                                                    {{$data_en->seo_statu == 1 ? 'checked' : ''}} />
                                                                <label class="form-check-label"
                                                                    for="allowadd_activity_category_seo_en"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <!--end::Actions-->
                                                <!--end::Form-->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::Tab-->
                                <div class="right" style="text-align: right">
                                    <button type="submit" class="btn btn-primary">KAYDET</button>
                                </div>

                            </form>
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
    <script>
        function create_slug_tr() {
            var Text = $("#add_activity_category_name_tr").val();
            Text2 = (slug(Text));
            $("#add_activity_category_url_tr").val(Text2);
            $("#add_activity_category_seo_title_tr").val(Text);
        }

        function create_slug_en() {
            var Text = $("#add_activity_category_name_en").val();
            Text2 = (slug(Text));
            $("#add_activity_category_url_en").val(Text2);
            $("#add_activity_category_seo_title_en").val(Text);
        }

        function create_ozet() {
            var Text = $("#add_activity_text_tr").val();
            $("#add_activity_category_seo_description_tr").val(Text);
        }

        function create_ozet_en() {
            var Text = $("#add_activity_text_en").val();
            $("#add_activity_category_seo_description_en").val(Text);
        }


        var slug = function(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from =
                "ÁÄÂÀÃÅČÇĆĎÉĚËÈÊẼĔȆĞÍÌÎÏİŇÑÓÖÒÔÕØŘŔŠŞŤÚŮÜÙÛÝŸŽáäâàãåčçćďéěëèêẽĕȇğíìîïıňñóöòôõøðřŕšşťúůüùûýÿžþÞĐđßÆa·/_,:;";
            var to =
                "AAAAAACCCDEEEEEEEEGIIIIINNOOOOOORRSSTUUUUUYYZaaaaaacccdeeeeeeeegiiiiinnooooooorrsstuuuuuyyzbBDdBAa------";
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        };
    </script>
    <script>
        var input1 = document.querySelector("#add_activity_category_seo_keywords_tr");
        new Tagify(input1);

        var input2 = document.querySelector("#add_activity_category_seo_keywords_en");
        new Tagify(input2);
    </script>
@endsection
