@extends('backend.master')
@section('css')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">Personel
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
                            <!--begin::Form-->
                            <form id="add_personnel_form" class="form">
                                <!--begin::Card body-->
                                <div class="card-body px-0 py-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Personel Kapak
                                            Görseli</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-10">
                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                                style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url(../assets/media/avatars/300-1.jpg)"></div>
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Label-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Resmi Değiştir">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="add_personnel_image"
                                                        accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="add_personnel_image_remove" />
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
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Personel Adı</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="text" name="add_personnel_firstname"
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

                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row ms-10">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Personel Soyadı</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="text" name="add_personnel_surname"
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
                                        <!--begin::Label-->
                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Personel Unvanı</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-10">
                                            <!--begin::Row-->
                                            <div class="row">
                                                <!--begin::Col-->
                                                <div class="col-lg-12 fv-row">
                                                    <input type="text" name="add_personnel_job"
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

                                    <div class="separator my-10"></div>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">TC Kimlik
                                                    Numarası</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="number" name="add_personnel_tc"
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

                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row ms-10">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Doğum Tarihi</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input id="personel_birthday" name="personel_birthday"
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
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Şahsi Telefon</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="number" name="add_personnel_no"
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

                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row ms-10">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Şahsi E-Posta</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="email" name="personel_mail"
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
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Facebook</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="text" name="add_personnel_facebook"
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

                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row ms-10">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Twitter</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="text" name="personel_twitter"
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
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Linkedin</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="text" name="personel_linkedin"
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
                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row ms-10">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">Instagram</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <input type="text" name="add_personnel_instagram"
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
                                        <!--begin::Label-->
                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">Cinsiyet Durumu</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-10 fv-row">
                                            <!--begin::Options-->
                                            <div class="d-flex align-items-center mt-3">
                                                <!--begin::Option-->
                                                <label
                                                    class="form-check form-check-custom form-check-inline form-check-solid me-5">
                                                    <input class="form-check-input" name="gender[]" type="radio"
                                                        value="1" />
                                                    <span class="fw-semibold ps-2 fs-6">Erkek</span>
                                                </label>
                                                <!--end::Option-->
                                                <!--begin::Option-->
                                                <label
                                                    class="form-check form-check-custom form-check-inline form-check-solid">
                                                    <input class="form-check-input" name="gender[]" type="radio"
                                                        value="2" />
                                                    <span class="fw-semibold ps-2 fs-6">Kadın</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <div class="separator my-10"></div>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-12 col-form-label fw-bold fs-6 mb-5 ps-5">
                                            <span>Personel Biyografisi</span>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row mb-5 ps-5">
                                            <textarea name="tinymce_add_personnel_biography" id="editor">
                                                 <h1>Quick and Simple TinyMCE 5 Integration</h1>
<h3 style="text-align: right;">Flexible &amp; Powerful</h3>
<p style="text-align: right;"><strong>Lorem Ipsum has been the industry's</strong>&nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
<ul>
<li>List item 1</li>
<li>List item 2</li>
<li>List item 3</li>
<li>List item 4</li>
</ul>
                                            </textarea>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <div class="separator my-10"></div>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">

                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">İşe Başlangıç Tarih -
                                                    Saat</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <div class="input-group" id="add_personel_start_calendar"
                                                                data-td-target-input="nearest"
                                                                data-td-target-toggle="nearest">
                                                                <input id="add_personel_date" type="text"
                                                                    class="form-control"
                                                                    data-td-target="#add_personel_start_calendar" />
                                                                <span class="input-group-text"
                                                                    data-td-target="#add_personel_start_calendar"
                                                                    data-td-toggle="datetimepicker">
                                                                    <i class="bi bi-calendar2-week fs-2"><span
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

                                        <div class="col-lg-6 fv-row fv-plugins-icon-container ps-5">
                                            <div class="row ms-10">
                                                <!--begin::Label-->
                                                <label class="col-lg-4 col-form-label fw-bold fs-6">İşi Bitiş Tarih -
                                                    Saat</label>
                                                <!--end::Label-->
                                                <!--begin::Col-->
                                                <div class="col-lg-8">
                                                    <!--begin::Row-->
                                                    <div class="row">
                                                        <!--begin::Col-->
                                                        <div class="col-lg-12 fv-row">
                                                            <div class="input-group" id="add_personel_end_calendar"
                                                                data-td-target-input="nearest"
                                                                data-td-target-toggle="nearest">
                                                                <input id="add_personel_date" type="text"
                                                                    class="form-control"
                                                                    data-td-target="#add_personel_end_calendar" />
                                                                <span class="input-group-text"
                                                                    data-td-target="#add_personel_end_calendar"
                                                                    data-td-toggle="datetimepicker">
                                                                    <i class="bi bi-calendar2-week fs-2"><span
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


                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-2 col-form-label ps-5 fw-bold fs-6">CV</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-10 fv-row">
                                            <!--begin::Options-->
                                            <div class="d-flex align-items-center mt-3">
                                                <input class="form-control" type="file" id="cv_file_input">
                                            </div>
                                            <!--end::Options-->
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
                                        <label class="col-lg-8 col-form-label fw-bold fs-6 ps-5">Durum</label>
                                        <div class="col-lg-4 d-flex align-items-center">
                                            <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                                <input class="form-check-input w-50px h-25px" type="checkbox"
                                                    id="allowadd_personnel" checked="checked" />
                                                <label class="form-check-label" for="allowadd_personnel"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Input group-->

                                    <button type="submit" class="btn btn-outline btn-outline-success"
                                        id="btn_submit_add_personnel"><i class="fa-solid fa-check ps-1"></i>
                                        KAYDET</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
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
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        $(document).ready(function() {
            tinymce.init({
                selector: "#tinymce_add_personnel_biography",
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

        new tempusDominus.TempusDominus(document.getElementById("add_personel_start_calendar"), {
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

        new tempusDominus.TempusDominus(document.getElementById("add_personel_end_calendar"), {
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
