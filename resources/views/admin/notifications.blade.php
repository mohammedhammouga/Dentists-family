@extends('admin.dashboard')

@section('content')
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card mt-4">
                    <div class="card-header p-3">
                        <h5 class="mb-0">Notifications</h5>
                        
                    </div>
                    <div class="card-body p-3 pb-0">
                        <div class="alert alert-primary alert-dismissible text-white" role="alert" style="background-color: #7babfd;">
                            <span class="text-sm">Enregistrez 3 nouveaux utilisateurs <a href="javascript:;"
                                    class="alert-link text-white"></a>
                                </span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible text-white" role="alert" style="background-color: #83a3d9;">
                            <span class="text-sm">22 recherches <a href="javascript:;"
                                    class="alert-link text-white"></a></span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible text-white" role="alert" style="background-color: #7ce9a2;">
                            <span class="text-sm">50 visiteurs <a href="javascript:;"
                                    class="alert-link text-white"></a></span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" 
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible text-white" role="alert" style="background-color: #ff90e5;">
                            <span class="text-sm">2 Supprimer le compte<a href="javascript:;"
                                    class="alert-link text-white"></a></span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-warning alert-dismissible text-white" role="alert" style="background-color: #f1ab4e;">
                            <span class="text-sm">A simple warning alert with <a href="javascript:;"
                                    class="alert-link text-white">an example link</a>. Give it a click if you
                                like.</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-info alert-dismissible text-white" role="alert" style="background-color: #05d6f2;">
                            <span class="text-sm">A simple info alert with <a href="javascript:;"
                                    class="alert-link text-white">an example link</a>. Give it a click if you
                                like.</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-light alert-dismissible text-white" role="alert" style="background-color: #d3ca26;">
                            <span class="text-sm">A simple light alert with <a href="javascript:;"
                                    class="alert-link text-white">an example link</a>. Give it a click if you
                                like.</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="alert alert-dark alert-dismissible text-white" role="alert" style="background-color: #492d5a;">
                            <span class="text-sm">A simple dark alert with <a href="javascript:;"
                                    class="alert-link text-white">an example link</a>. Give it a click if you
                                like.</span>
                            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header p-3">
                        <h5 class="mb-0">Alerts</h5>
                        <p class="text-sm mb-0">
                            Other alerts <a
                                href="https://getbootstrap.com/docs/5.0/components/toasts/" target="">Découvrir</a>.
                        </p>
                    </div>
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <button class="btn bg-gradient-success w-100 mb-0 toast-btn" type="button"
                                    data-target="successToast" style="background-color: #239b0b;">10 Success</button>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 mt-sm-0 mt-2">
                                <button class="btn bg-gradient-info w-100 mb-0  toast-btn" type="button"
                                    data-target="infoToast" style="background-color: #4848fc;">0 Info</button>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                                <button class="btn bg-gradient-warning w-100 mb-0 toast-btn" type="button"
                                    data-target="warningToast" style="background-color: #ebf73e;">0 Warning</button>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 mt-lg-0 mt-2">
                                <button class="btn bg-gradient-danger w-100 mb-0 toast-btn" type="button"
                                    data-target="dangerToast" style="background-color: #ee3434;">0 Danger</button> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection