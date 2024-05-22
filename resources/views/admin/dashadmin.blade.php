@extends('admin.dashboard')

@section('content')
    <div class="menu-item px-3">
        <div class="menu-content px-3">
            <!--begin::Switch-->
            <label class="form-check form-switch form-check-custom form-check-solid">
                <!--begin::Input-->
                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked"
                    name="notifications" />
                <!--end::Input-->
                <!--end::Label-->
                <span class="form-check-label text-muted fs-6">Recuring</span>
                <!--end::Label-->
            </label>
            <!--end::Switch-->
        </div>
    </div>


    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="spinner-border text-success" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div class="col order-5">
                <div class="spinner-border text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div class="col order-1">
                <div class="spinner-border text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
@endsection
