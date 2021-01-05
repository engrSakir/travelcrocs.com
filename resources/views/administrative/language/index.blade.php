@extends('administrative.layout.app')

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ config('app.name') }}</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item">
                                <a href="javascript:0;" class="text-muted">Applications</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:0;" class="text-muted">Languages</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::Actions-->
                    <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">Actions</a>
                    <!--end::Actions-->
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                        <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-success svg-icon-2x">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover">
                                <li class="navi-header font-weight-bold py-4">
                                    <span class="font-size-lg">Choose Label:</span>
                                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                </li>
                                <li class="navi-separator mb-3 opacity-70"></li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-success">Customer</span>
														</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-danger">Partner</span>
														</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-warning">Suplier</span>
														</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-primary">Member</span>
														</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-dark">Staff</span>
														</span>
                                    </a>
                                </li>
                                <li class="navi-separator mt-3 opacity-70"></li>
                                <li class="navi-footer py-4">
                                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                        <i class="ki ki-plus icon-sm"></i>Add new</a>
                                </li>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                    <!--end::Dropdown-->
                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="card card-custom">
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h3 class="card-label">Languages
                                <span class="d-block text-muted pt-2 font-size-sm">*Language note</span></h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Bootstrap table-->
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th title="Field #1">Order ID</th>
                                <th title="Field #2">Name</th>
                                <th title="Field #3">Code</th>
                                <th title="Field #4">Status</th>
                                <th title="Field #5">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($languages as $language)
                                <tr>
                                    <td>{{ $loop->iteration  }}</td>
                                    <td>{{ $language->name }}</td>
                                    <td>{{ $language->code }}</td>
                                    <td>
                                        @if($language->status == 1)
                                        <span class="label label-inline label-light-success font-weight-bold">
                                            Activated
                                        </span>
                                        @else
                                        <span class="label label-inline label-light-danger font-weight-bold">
                                            Inactivated
                                        </span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('administrative.language.edit', $language->id) }}" class="btn btn-shadow btn-icon btn-warning">
                                            <i class="flaticon2-edit"></i>
                                        </a>
                                        <a href="{{ route('administrative.language.show', $language->id) }}" class="btn btn-shadow btn-icon btn-info">
                                            <i class="flaticon-medical icon-lg"></i>
                                        </a>
                                        <button type="button" class="btn btn-shadow btn-icon btn-danger delete-btn" value="{{ route('administrative.language.destroy',$language->id ) }}">
                                            <i class="flaticon-delete-1 icon-lg"></i>
                                        </button>
                                        <form action="{{ route('administrative.language.destroy',$language->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!--end: Bootstrap table-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
@push('js')
    <!--begin::Page Scripts(used by this page)-->
    <script>
        $(document).ready(function() {
            $('.delete-btn').click(function(){
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: 'DELETE',
                            url: $(this).val(),
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            beforeSend: function (){
                                //$("#kt_login_signin_submit").addClass('spinner spinner-right spinner-white pr-15').prop("disabled",true);
                            },
                            complete: function (){
                                //$("#kt_login_signin_submit").removeClass('spinner spinner-right spinner-white pr-15').prop("disabled",false);
                            },
                            success: function (data) {
                                if (data.type == 'success'){
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    )
                                    setTimeout(function() {
                                        location.reload();
                                    }, 800);//
                                }else{
                                    still_alert(data.type, data.message, 'alert-display');
                                }
                            },
                        })
                    }
                })

            });
        });
    </script>
    <!--end::Page Scripts-->
@endpush
