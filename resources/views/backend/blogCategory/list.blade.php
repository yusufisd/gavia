@extends('backend.master')
@section('content')
   <!--begin::Toolbar-->
   <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-10">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-primary fw-bold fs-3 flex-column justify-content-center my-0">Blog Kategorileri</h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
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
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                    <!--begin::Add user-->
                                    <a type="button" class="btn btn-outline btn-outline-success" href="{{route('admin.blogCategory.add')}}">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Yeni Ekle</a>
                                    <!--end::Add user-->
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Card toolbar-->
                            
                        
                    </div>
                    <!--end::Card header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-5">
                        <!--begin::Table container-->
                        <div class="table-responsive with_search_table">
                            <table id="blog_categories_table" class="table gy-7 gx-7">
                                <thead>
                                    <tr class="fw-bold fs-6 text-gray-800">
                                        <th class="w-10px">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#blog_categories_table .my-input " value="1" />
                                            </div>
                                        </th>
                                        <th>Kategori Adı<i class="fa fa-sort ms-3"></i></th>
                                        <th class="text-center">Sıralama<i class="fa fa-sort ms-3"></i></th>
                                        <th class="text-center pe-7">Durum<i class="fa fa-sort ms-3"></i></th>
                                        <th class="text-center">İşlem<i class="fa fa-sort ms-3"></i></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item)
                                    <tr class="align-middle">
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input my-input" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td class="w-40">{{$item->title}}</td>
                                        <td class="text-center">{{$item->queue}}</td>
                                        <td>
                                            <div class="form-check form-check-solid form-switch form-check-custom fv-row justify-content-center">
                                                <input class="form-check-input w-50px h-25px" type="checkbox" id="blog_status_1" checked="checked">
                                                <label class="form-check-label" for="blog_status_1"></label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="" class="px-2 btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="Görüntüle">
                                                <i class="fa-solid fa-eye fs-3"></i>
                                            </a>
                                            <a href="{{route('admin.blogCategory.edit',$item->id)}}" class="px-2 btn btn-icon btn-bg-light btn-active-color-secondary btn-sm me-1" title="Düzenle">
                                                <i class="fa-regular fa-pen-to-square fs-3"></i>
                                            </a>
                                            <a href="" class="px-2 btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#delete_modal" title="Sil">
                                                <i class="fa-regular fa-trash-can fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach

                                    
                                </tbody>
                            </table>
                        </div>
                        <!--end::Table container-->
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
        // begin: DataTable Scripts
        $("#blog_categories_table").DataTable({
			"ordering": true,
				"order": [[ 0, "asc" ]],
				"language": {
				"sEmptyTable": "Tabloda herhangi bir veri mevcut değil",
				"sInfo": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
				"sInfoEmpty": "Kayıt yok",
				"sInfoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
				"sInfoPostFix": "",
				"sInfoThousands": ".",
				"sLengthMenu": "Sayfada _MENU_ kayıt göster",
				"sLoadingRecords": "Yükleniyor...",
				"sProcessing": "İşleniyor...",
				"sSearch": "Ara:",
				"sZeroRecords": "Eşleşen kayıt bulunamadı",
				"oPaginate": {
					"sFirst": "İlk",
					"sLast": "Son",
					"sNext": "Sonraki",
					"sPrevious": "Önceki"
				},
				"oAria": {
					"sSortAscending": ": artan sütun sıralamasını aktifleştir",
					"sSortDescending": ": azalan sütun sıralamasını aktifleştir"
				},
				"columnDefs": [ {
					"targets": 0,
					"orderable": false,
					"searchable": false,
					"className": "no-sort"
					} ],
				},
				dom: 'Qfrtip'
		});
		// end: DataTable Scripts
        // end: DataTable Scripts
    </script>
@endsection
