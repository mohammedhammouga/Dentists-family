@extends('welcome')
@section('content')
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="fw-bold mb-3">Sign up now</h2>
                    <br>
                    <img src="images/Sign.png" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-9 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-10">Create an Account</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Already have an account?
                                <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Action-->
                        <button type="button" class="btn btn-primary fw-bolder w-100 mb-3"
                            style="background-color: #ffffff; color: #4285f4; border-color: #4285f4;">
                            <img src="images/google.svg" alt="Google Logo" class="h-16px me-2" style="height: 16px;" />Sign
                            in with Google
                        </button>
                        <!--end::Action-->
                        <!--begin::Separator-->
                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!-- Name -->
                        <div class="row fv-row mb-7">
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6" for="name">Name</label>
                                <input id="name"
                                    class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror"
                                    type="text" name="name" value="{{ old('name') }}" required autofocus
                                    autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Prénom -->
                            <div class="col-xl-6">
                                <label class="form-label fw-bolder text-dark fs-6" for="prenom">Prénom</label>
                                <input id="prenom"
                                    class="form-control form-control-lg form-control-solid @error('prenom') is-invalid @enderror"
                                    type="text" name="prenom" value="{{ old('prenom') }}" required autofocus
                                    autocomplete="prenom">
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- Téléphone -->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6 "for="telephone">Téléphone</label>
                            <input id="telephone"
                                class="form-control form-control-lg form-control-solid @error('telephone') is-invalid @enderror"
                                type="text" name="telephone" value="{{ old('telephone') }}" required
                                autocomplete="telephone">
                            @error('telephone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Région -->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6 "for="region">Région</label>
                            <select id="region"
                                class="form-control form-control-lg form-control-solid @error('region') is-invalid @enderror"
                                name="region" required autocomplete="region">
                                <option selected value="0">Région</option>
                                <option value="Chaouia-Ouardigha">Chaouia-Ouardigha</option>
                                <option value="Doukkala-Abda">Doukkala-Abda</option>
                                <option value="Fès-Boulemane">Fès-Boulemane</option>
                                <option value="Gharb-Chrarda-Beni Hssen">Gharb-Chrarda-Beni Hssen</option>
                                <option value="Tadla-Azilal">Tadla-Azilal</option>
                                <option value="Guelmim-Es Semara">Guelmim-Es Semara</option>
                                <option value="Laâyoune-Boujdour-Sakia el Hamra">Laâyoune-Boujdour-Sakia el Hamra</option>
                                <option value="Marrakech-Tensift-Al Haouz">Marrakech-Tensift-Al Haouz</option>
                                <option value="Meknès-Tafilalet">Meknès-Tafilalet</option>
                                <option value="Souss-Massa-Drâa">Souss-Massa-Drâa</option>
                                <option value="Oued ed Dahab-Lagouira">Oued ed Dahab-Lagouira</option>
                                <option value="Rabat-Salé-Zemmour-Zaër">Rabat-Salé-Zemmour-Zaër</option>
                                <!-- Add more options as needed -->
                            </select>
                            @error('region')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6" for="ville">ville</label>
                            <input id="ville"
                                class="form-control form-control-lg form-control-solid @error('ville') is-invalid @enderror"
                                type="text" name="ville" value="{{ old('ville') }}" required autofocus
                                autocomplete="ville">
                            @error('ville')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6" for="adresse">adresse</label>
                            <input id="adresse"
                                class="form-control form-control-lg form-control-solid @error('adresse') is-invalid @enderror"
                                type="text" name="adresse" value="{{ old('adresse') }}" required autofocus
                                autocomplete="adresse">
                            @error('adresse')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Email Address -->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6" for="email">Email</label>
                            <input id="email"
                                class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <!-- Profile Photo -->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6" for="profile_photo">Profile Photo</label>
                            <input id="profile_photo"
                                class="form-control form-control-lg form-control-solid @error('profile_photo') is-invalid @enderror"
                                type="file" name="profile_photo" accept="image/*">
                            @error('profile_photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <!-- Password -->
                        <div class="mb-10 fv-row">
                            <label class="form-label fw-bolder text-dark fs-6">Password</label>
                            <input id="password"
                                class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                type="password" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- Confirm Password -->
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bolder text-dark fs-6" for="password_confirmation">Confirm
                                Password</label>
                            <input id="password_confirmation" class="form-control form-control-lg form-control-solid"
                                type="password" name="password_confirmation" required autocomplete="new-password">
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <br>
                        <div class="fv-row mb-7">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                                <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                    <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                            </label>
                        </div>
                        <div class="text-center text-muted mt-5 mb-0">
                            <button type="submit" class="btn btn-primary btn-lg">Register</button>

                        </div>
                    </form>
                    <!--begin::Links-->
                    <div class="text-center text-muted mt-5 mb-0">
                        <a href="{{ route('home.index') }}" class="text-muted text-decoration-none mx-2">Home</a>
                        <a href="{{ route('contact.create') }}" class="text-muted text-decoration-none mx-2">Contact</a>
                        <a href="{{ route('search.index') }}" class="text-muted text-decoration-none mx-2">Search</a>
                    </div>
                    <!--end::Links-->
                </div>
            </div>
        </div>
    </div>
@endsection
