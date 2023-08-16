@extends('backend.master')
@section('content')
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">Blog Ekle
                </h1>
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

    <form action="{{ route('admin.blog.update',$data_tr->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

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
                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_blog_detay">Detay</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab_blog_seo">Seo Bilgileri</a>
                                    </li>
                                </ul>



                                <div class="tab-content" id="TabContent_1">
                                    <div class="tab-pane fade show active" id="tab_blog_detay" role="tabpanel">
                                        <!--begin::Form-->
                                        <!--begin::Card body-->
                                        <div class="card-body px-3 py-9">
                                            <div id="form_alert_blog_detail_tr" tabindex="0">
                                            </div>
                                            <div id="form_alert_blog_detail_en" tabindex="0">
                                            </div>
                                            <!--begin::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Label-->
                                                <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Blog Kapak
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
                                                            <input type="file" name="blog_image"
                                                                accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="blog_image_remove" />
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
                                                    <select name="category[]" aria-label="Seçiniz" data-control="select2"
                                                        data-placeholder="Seçiniz..."
                                                        class="form-select form-select-solid form-select-lg fw-semibold"
                                                        multiple>
                                                        <option value="">Seçiniz...</option>

                                                        @foreach ($categories as $category)
                                                            <option {{array_search($category->id,$data_tr->category_id) == 0 ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Input group-->
                                            <div class="row mb-6">
                                                <!--begin::Tab-->
                                                <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#tab_blog_tr">
                                                            <span>
                                                                <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/turkey.svg"
                                                                    width="28" height="28" alt="TR"
                                                                    title="TR">
                                                            </span>

                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#tab_blog_en">
                                                            <span>
                                                                <img src="https://gaviapanel.gaviaworks.org/assets/images/svg/england.svg"
                                                                    width="28" height="28" alt="EN"
                                                                    title="EN">
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="TabContent_2">
                                                    <div class="tab-pane fade show active" id="tab_blog_tr"
                                                        role="tabpanel">
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
                                                                                onchange="create_slug_tr()" value="{{$data_tr->title}}"
                                                                                name="blog_name_tr" id="blog_name_tr"
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
                                                                    class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Özet</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-10 fv-row">
                                                                    <textarea id="blog_summary_tr" onchange="create_ozet()" name="blog_summary_tr" class="form-control form-control-lg form-control-solid">{{$data_tr->short_description}}</textarea>
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

                                                                    <textarea id="tinymce_blog_detail_tr" name="tinymce_blog_detail_tr" class="tox-target">
                                                                        {{$data_tr->description}}
                                                                    </textarea>


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
                                                                                    <input type="text" value="{{$data_tr->link}}"
                                                                                        name="blog_url_tr"
                                                                                        id="blog_url_tr"
                                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" />
                                                                                </div>
                                                                                <div class="col-lg-2">
                                                                                    <button type="submit"
                                                                                        class="btn btn-outline btn-outline-success w-100"
                                                                                        id="blog_detail_url_btn_tr">URL
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
                                                                    class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Sıra</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-10">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="number" name="blog_detail_tr_no"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$data_tr->queue}}"/>
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <div class="separator my-10"></div>

                                                            <!--begin::Input group-->
                                                            <div class="row mb-6">

                                                                <div
                                                                    class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                    <div class="row">
                                                                        <!--begin::Label-->
                                                                        <label class="col-lg-4 col-form-label fw-bold fs-6"
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
                                                                                        id="add_blog_start_calendar_tr"
                                                                                        data-td-target-input="nearest"
                                                                                        data-td-target-toggle="nearest">
                                                                                        <input id="add_blog_date_tr"
                                                                                            type="text"
                                                                                            name="add_start_blog_date_tr"
                                                                                            class="form-control"
                                                                                            data-td-target="#add_blog_start_calendar_tr" />
                                                                                        <span class="input-group-text"
                                                                                            data-td-target="#add_blog_start_calendar_tr"
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
                                                                        <label class="col-lg-4 col-form-label fw-bold fs-6"
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
                                                                                        id="add_blog_end_calendar_tr"
                                                                                        data-td-target-input="nearest"
                                                                                        data-td-target-toggle="nearest">
                                                                                        <input id="add_blog_date_tr"
                                                                                            type="text"
                                                                                            name="add_finish_blog_date_tr"
                                                                                            class="form-control"
                                                                                            data-td-target="#add_blog_end_calendar_tr" />
                                                                                        <span class="input-group-text"
                                                                                            data-td-target="#add_blog_end_calendar_tr"
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

                                                        </div>
                                                        <!--end::Card body-->
                                                        <!--begin::Actions-->
                                                        <div class="card-footer d-flex justify-content-between py-6 px-0">
                                                            <!--begin::Input group-->
                                                            <div class="row mb-0">
                                                                <label
                                                                    class="col-lg-8 col-form-label fw-bold fs-6 ps-5">Durum</label>
                                                                <div class="col-lg-4 d-flex align-items-center">
                                                                    <div
                                                                        class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                                        <input class="form-check-input w-50px h-25px"
                                                                            type="checkbox" id="allowblog_detail_tr"
                                                                            {{$data_tr->status == 1 ? 'selected' : ''}} />
                                                                        <label class="form-check-label"
                                                                            for="allowblog_detail_tr"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Input group-->

                            
                                                        </div>
                                                        <!--end::Actions-->
                                                        <!--end::Form-->
                                                    </div>
                                                    <div class="tab-pane fade" id="tab_blog_en" role="tabpanel">
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
                                                                            <input type="text" name="blog_name_en" id="blog_name_en" onchange="create_slug_en()"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$data_en->title}}" />
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
                                                                    <textarea name="blog_summary_en" id="blog_summary_en" onchange="create_ozet_en()" class="form-control form-control-lg form-control-solid" value="">{{$data_en->short_description}}</textarea>
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

                                                                    <textarea id="tinymce_blog_detail_en" name="tinymce_blog_detail_en" class="tox-target">
                                                                        {{$data_en->description}}
                                                                    </textarea>


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
                                                                                        name="blog_url_en" id="blog_url_en"
                                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                        value="{{$data_en->link}}" />
                                                                                </div>
                                                                                <div class="col-lg-2">
                                                                                    <button type="submit"
                                                                                        class="btn btn-outline btn-outline-success w-100"
                                                                                        id="blog_detail_url_btn_en">URL
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
                                                                    class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Sıra</label>
                                                                <!--end::Label-->
                                                                <!--begin::Col-->
                                                                <div class="col-lg-10">
                                                                    <!--begin::Row-->
                                                                    <div class="row">
                                                                        <!--begin::Col-->
                                                                        <div class="col-lg-12 fv-row">
                                                                            <input type="number" name="blog_detail_en_no"
                                                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                                value="{{$data_en->queue}}"/>
                                                                        </div>
                                                                        <!--end::Col-->
                                                                    </div>
                                                                    <!--end::Row-->
                                                                </div>
                                                                <!--end::Col-->
                                                            </div>
                                                            <!--end::Input group-->

                                                            <div class="separator my-10"></div>

                                                            <!--begin::Input group-->
                                                            <div class="row mb-6">

                                                                <div
                                                                    class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                                                    <div class="row">
                                                                        <!--begin::Label-->
                                                                        <label class="col-lg-4 col-form-label fw-bold fs-6"
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
                                                                                        id="add_blog_start_calendar_en"
                                                                                        data-td-target-input="nearest"
                                                                                        data-td-target-toggle="nearest">
                                                                                        <input id="add_blog_date_en"
                                                                                            type="text"
                                                                                            name="add_start_blog_date_en"
                                                                                            class="form-control"
                                                                                            data-td-target="#add_blog_start_calendar_en" />
                                                                                        <span class="input-group-text"
                                                                                            data-td-target="#add_blog_start_calendar_en"
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
                                                                        <label class="col-lg-4 col-form-label fw-bold fs-6"
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
                                                                                        id="add_blog_end_calendar_en"
                                                                                        data-td-target-input="nearest"
                                                                                        data-td-target-toggle="nearest">
                                                                                        <input id="add_blog_date_en"
                                                                                            type="text"
                                                                                            name="add_finish_blog_date_en"
                                                                                            class="form-control"
                                                                                            data-td-target="#add_blog_end_calendar_en" />
                                                                                        <span class="input-group-text"
                                                                                            data-td-target="#add_blog_end_calendar_en"
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

                                                        </div>
                                                        <!--end::Card body-->
                                                        <!--begin::Actions-->
                                                        <div class="card-footer d-flex justify-content-between py-6 px-0">
                                                            <!--begin::Input group-->
                                                            <div class="row mb-0">
                                                                <label
                                                                    class="col-lg-8 col-form-label fw-bold fs-6 ps-5">Durum</label>
                                                                <div class="col-lg-4 d-flex align-items-center">
                                                                    <div
                                                                        class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                                        <input class="form-check-input w-50px h-25px"
                                                                            type="checkbox" id="allowblog_detail_en"
                                                                            {{$data_en->status == 1 ? 'checked' : ''}} />
                                                                        <label class="form-check-label"
                                                                            for="allowblog_detail_en"></label>
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
                                    <div class="tab-pane fade" id="tab_blog_seo" role="tabpanel">
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
                                                                    <input type="text" name="blog_seo_title_tr" id="blog_seo_title_tr" value="{{$data_tr->seo_title}}"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                       />
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
                                                            <textarea id="blog_seo_description_tr" name="blog_seo_description_tr" class="form-control form-control-lg form-control-solid">{{$data_tr->seo_description}}</textarea>
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
                                                                    <input type="text" id="blog_seo_keywords_tr"
                                                                        name="blog_seo_keywords_tr"
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
                                                                    type="checkbox" id="allowblog_seo_tr"
                                                                   {{$data_tr->seo_statu == 1 ? 'checked' : ''}} />
                                                                <label class="form-check-label"
                                                                    for="allowblog_seo_tr"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Input group-->

                                                    
                                                </div>
                                                <!--end::Actions-->
                                                <!--end::Form-->
                                            </div>
                                            <div class="tab-pane fade" id="tab_seo_en" role="tabpanel">
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
                                                                    <input type="text" name="blog_seo_title_en" id="blog_seo_title_en"
                                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                                        value="{{$data_en->seo_title}}" />
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
                                                            <textarea name="blog_seo_description_en" id="blog_seo_description_en" class="form-control form-control-lg form-control-solid" >{{$data_en->seo_description}}</textarea>
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
                                                                    <input type="text" id="blog_seo_keywords_en"
                                                                        name="blog_seo_keywords_en"
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
                                                                    type="checkbox" id="allowblog_seo_en"
                                                                    {{$data_en->seo_statu == 1 ? 'checked' : ''}}/>
                                                                <label class="form-check-label"
                                                                    for="allowblog_seo_en"></label>
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
                                <!--end::Tab-->


                            </div>
                            <!--begin::Body-->

                        </div>

                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
                <div class="right" style="text-align: right">
                    <button type="submit" class="btn btn-primary">
                        KAYDET
                    </button>
                </div>

            </div>
            <!--end::Content container-->
        </div>
    </form>
@endsection
@section('script')
    <!--begin:: extra js-->
    <script>
        function create_slug_tr() {
            var Text = $("#blog_name_tr").val();
            Text2 = (slug(Text));
            $("#blog_url_tr").val(Text2);
            $("#blog_seo_title_tr").val(Text);
        }

        function create_slug_en() {
            var Text = $("#blog_name_en").val();
            Text2 = (slug(Text));
            $("#blog_url_en").val(Text2);
            $("#blog_seo_title_en").val(Text);
        }

        function create_ozet(){
            var Text = $("#blog_summary_tr").val();
            $("#blog_seo_description_tr").val(Text);
        }
        function create_ozet_en(){
            var Text = $("#blog_summary_en").val();
            $("#blog_seo_description_en").val(Text);
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
        $(document).ready(function() {
            var input1 = document.querySelector("#blog_seo_keywords_tr");
            new Tagify(input1);

            var input2 = document.querySelector("#blog_seo_keywords_en");
            new Tagify(input2);

            new tempusDominus.TempusDominus(document.getElementById("add_blog_start_calendar_tr"), {
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

            new tempusDominus.TempusDominus(document.getElementById("add_blog_end_calendar_tr"), {
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

            new tempusDominus.TempusDominus(document.getElementById("add_blog_start_calendar_en"), {
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

            new tempusDominus.TempusDominus(document.getElementById("add_blog_end_calendar_en"), {
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

            ClassicEditor
                .create(document.querySelector('#tinymce_blog_detail_tr'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#tinymce_blog_detail_en'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });


            tinymce.init({
                selector: "#tinymce_blog_detail_tr",
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
                selector: "#tinymce_blog_detail_en",
                height: "480",
                language: 'tr',
                menubar: false,
                toolbar: ["styleselect fontselect fontsizeselect",
                    "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
                    "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"
                ],
                plugins: "advlist autolink link image lists charmap print preview code"
            });

            // form alerts
            $("#btn_submit_blog_detail_tr").click(function(e) {
                e.preventDefault();
                $("#form_alert_blog_detail_tr").append(
                    '<div class="alert alert-dismissible bg-success d-flex flex-column flex-sm-row p-5 mb-10">' +
                    '<i class="fa-solid fa-check fs-2hx text-light me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>' +
                    '<div class="d-flex flex-column text-light pe-0 pe-sm-10">' +
                    '<h4 class="mb-2 light text-white">Başarılı !</h4>' +
                    '<span class="text-white">Blog içeriği başarılı bir şekilde kaydedildi.</span>' +
                    '</div>' +
                    '</div>'
                );
                $('#form_alert_blog_detail_tr').focus();
                window.scrollTo(0, 0);
                setTimeout(function() {
                    $('#form_alert_blog_detail_tr').fadeOut().html("");
                }, 5000);
            });

            $("#btn_submit_blog_detail_en").click(function(e) {
                e.preventDefault();
                $("#form_alert_blog_detail_en").append(
                    '<div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">' +
                    '<i class="fa-solid fa-check fs-2hx text-light me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>' +
                    '<div class="d-flex flex-column text-light pe-0 pe-sm-10">' +
                    '<h4 class="mb-2 light text-white">Başarısız !</h4>' +
                    '<span class="text-white">Blog içeriği kaydedilemedi.</span>' +
                    '</div>' +
                    '</div>'
                );
                $('#form_alert_blog_detail_en').focus();
                window.scrollTo(0, 0);
                setTimeout(function() {
                    $('#form_alert_blog_detail_en').fadeOut().html("");
                }, 5000);
            });



        });
    </script>
    <!--end:: extra js-->
@endsection
