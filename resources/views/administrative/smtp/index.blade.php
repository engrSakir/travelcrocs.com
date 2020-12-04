@extends('layouts.administrative.app')

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
                                <a href="{{ route('administrative.language.index') }}" class="text-muted">Languages</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:0;" class="text-muted">Create</a>
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
                   <div class="col-6">
                       <!--begin::Status btn-->
                       <div class="card card-custom">
                           <div class="card-header">
                               <h3 class="card-title">
                                   Mail permissions
                               </h3>
                               <div class="card-toolbar">
                                   <div class="example-tools justify-content-center">
                                       <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                       <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                   </div>
                               </div>
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
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group row bg-light-success rounded ">
                                       <label for="example-search-input" class="col-6 col-form-label text-right">Permission name</label>
                                       <div class="col-6">
                                           <div class="switch">
                                               <label>
                                                   <input type="checkbox" checked>
                                                   <span class="lever"></span>
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="card-footer">
                                   <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                   <button type="reset" class="btn btn-secondary">Cancel</button>
                               </div>
                           </form>
                           <!--end::Form-->
                       </div>
                       <!--end::Status btn-->
                   </div>
                   <div class="col-6">
                       <!--begin::Form-->
                       <div class="card card-custom">
                           <div class="card-header">
                               <h3 class="card-title">
                                   SMTP Setup
                               </h3>
                               <div class="card-toolbar">
                                   <div class="example-tools justify-content-center">
                                       <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                       <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                   </div>
                               </div>
                           </div>
                           <!--begin::Form-->
                           <form>
                               <div class="card-body">
                                   <div class="form-group mb-8">
                                       <div class="alert alert-custom alert-default" role="alert">
                                           <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                           <div class="alert-text">
                                               Note about smt setup..
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label>Email host <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control"  placeholder="mail@domain.com"/>
                                   </div>
                                   <div class="form-group">
                                       <label>Email port <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control"  placeholder="465"/>
                                   </div>
                                   <div class="form-group">
                                       <label>Email username <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control"  placeholder="mail@domain.com"/>
                                   </div>
                                   <div class="form-group">
                                       <label>Email password <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control"  placeholder="your smtp password"/>
                                   </div>
                                   <div class="form-group">
                                       <label for="exampleSelect1">Mail encryption <span class="text-danger">*</span></label>
                                       <select class="form-control" id="exampleSelect1">
                                           <option>ssl</option>
                                           <option>tls</option>
                                           <option>none</option>
                                       </select>
                                   </div>
                                   <div class="form-group">
                                       <label>From name<span class="text-danger">*</span></label>
                                       <input type="text" class="form-control"  placeholder="brand name"/>
                                   </div>
                                   <div class="form-group">
                                       <label>From email<span class="text-danger">*</span></label>
                                       <input type="text" class="form-control"  placeholder="mail@domain.com"/>
                                   </div>
                               </div>
                               <div class="card-footer">
                                   <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                   <button type="reset" class="btn btn-secondary">Cancel</button>
                               </div>
                           </form>
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
    <!--begin::Page Scripts(used by this page)-->

    <!--end::Page Scripts-->
@endpush
