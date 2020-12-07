@extends('layouts.administrative.app')
@push('title') {{ __('Identity Setup') }} @endpush
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
                                <a href="javascript:0;" class="text-muted">Setting</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:0;" class="text-muted">Identity</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <!--begin::Status btn-->
                        <div class="card card-custom">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Image
                                </h3>
                            </div>
                            <!--begin::Form-->
                            <form>
                                <div class="card-body">
                                    <div class="form-group mb-8">
                                        <div class="alert alert-custom alert-default" role="alert">
                                            <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                            <div class="alert-text">
                                                Permission notes
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row rounded ">
                                        <div class="col-12 text-center">
                                            <div class="overlay">
                                                <div class="overlay-wrapper rounded bg-success text-center">
                                                    <img src="{{ asset('assets/administrative/media/products/1.png') }}" alt="" id="image-display" class="mw-100 w-200px image-display">
                                                </div>
                                                <div class="overlay-layer">
                                                    <input style="display: none" type="file" accept="image/*" class="image-importer">
                                                    <button class="btn font-weight-bolder btn-sm btn-primary mr-2 image-chose-btn">Chose</button>
                                                    <button class="btn font-weight-bolder btn-sm btn-primary mr-2 image-reset-btn" value="{{ asset('assets/administrative/media/products/1.png') }}">Reset</button>
                                                    <button class="btn font-weight-bolder btn-sm btn-light-primary">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row rounded ">
                                        <div class="col-12 text-center">
                                            <div class="overlay">
                                                <div class="overlay-wrapper rounded bg-success text-center">
                                                    <img src="{{ asset('assets/administrative/media/products/1.png') }}" alt="" id="image-display" class="mw-100 w-200px image-display">
                                                </div>
                                                <div class="overlay-layer">
                                                    <input style="display: none" type="file" accept="image/*" class="image-importer">
                                                    <button class="btn font-weight-bolder btn-sm btn-primary mr-2 image-chose-btn">Chose</button>
                                                    <button class="btn font-weight-bolder btn-sm btn-primary mr-2 image-reset-btn" value="{{ asset('assets/administrative/media/products/1.png') }}">Reset</button>
                                                    <button class="btn font-weight-bolder btn-sm btn-light-primary">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row bg-light-success rounded ">
                                         <div class="col-6 text-right">
                                            <label for="example-search-input" class="col-form-label ">Favicon</label>
                                            <br>
                                            <a href="#" class="btn btn-info font-weight-bold mr-2">
                                                <i class="flaticon-upload-1"></i>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <div class="image-input image-input-outline" id="favicon">
                                                <div class="image-input-wrapper" style="background-image: url({{ asset('assets/administrative/media/users/100_1.jpg') }})"></div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="profile_avatar_remove"/>
                                                </label>
                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                  <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row bg-light-success rounded ">
                                         <div class="col-6 text-right">
                                            <label for="example-search-input" class="col-form-label ">Breadcrumb Image</label>
                                            <br>
                                            <a href="#" class="btn btn-info font-weight-bold mr-2">
                                                <i class="flaticon-upload-1"></i>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper" style="background-image: url({{ asset('assets/administrative/media/users/100_1.jpg') }})"></div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="profile_avatar_remove"/>
                                                </label>
                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                  <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row bg-light-success rounded ">
                                         <div class="col-6 text-right">
                                            <label for="example-search-input" class="col-form-label ">We Accept</label>
                                            <br>
                                            <a href="#" class="btn btn-info font-weight-bold mr-2">
                                                <i class="flaticon-upload-1"></i>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <div class="image-input image-input-outline" id="kt_image_1">
                                                <div class="image-input-wrapper" style="background-image: url({{ asset('assets/administrative/media/users/100_1.jpg') }})"></div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg"/>
                                                    <input type="hidden" name="profile_avatar_remove"/>
                                                </label>
                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                  <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Status btn-->
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <!--begin::Form-->
                        <div class="card card-custom">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Color
                                </h3>
                            </div>
                            <!--begin::Form-->
                            <div class="card-body">
                                <div class="form-group mb-8">
                                    <div class="alert alert-custom alert-default" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                        <div class="alert-text">
                                            Note about color setup..
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('administrative.mail.smtp.update') }}" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="hero-bg-color" class="col-2 col-form-label">Hero bg</label>
                                        <div class="col-10">
                                            <input class="form-control" type="color" value="{{ get_static_option('website_hero_bg_color') }}" id="hero-bg-color"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                        <div class="col-10">
                                            <input class="form-control" type="color" value="#563d7c" id="example-color-input"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                        <div class="col-10">
                                            <input class="form-control" type="color" value="#563d7c" id="example-color-input"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                        <div class="col-10">
                                            <input class="form-control" type="color" value="#563d7c" id="example-color-input"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                        <div class="col-10">
                                            <input class="form-control" type="color" value="#563d7c" id="example-color-input"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                        <div class="col-10">
                                            <input class="form-control" type="color" value="#563d7c" id="example-color-input"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                        <div class="col-10">
                                            <input class="form-control" type="color" value="#563d7c" id="example-color-input"/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-color-input" class="col-2 col-form-label">Color</label>
                                        <div class="col-10">
                                            <input class="form-control" type="color" value="#563d7c" id="example-color-input"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Submit SMTP configuration</button>
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Form-->
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
    @include('includes.image-upload-helper')
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/administrative/js/pages/crud/file-upload/image-input.js') }}"></script>
    <!--end::Page Scripts-->
@endpush
