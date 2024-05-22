@extends('welcome')

@section('content')
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="images/login.png" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form1Example13" name="email" class="form-control form-control-lg"
                            placeholder="Email address" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example23" name="password" class="form-control form-control-lg"
                            placeholder="Password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                    </div>
                    <br>
                    <!-- Submit button -->
                    <div class="d-grid gap-2 col-6 mx-auto">

                        <x-primary-button class="btn btn-primary">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                    <div class="d-flex align-items-center mb-10">
                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                    </div>


                    <div class="d-grid gap-2 col-6 mx-auto">

                        <button type="button" class="btn btn-primary fw-bolder w-100 mb-3"
                            style="background-color: #ffffff; color: #4285f4; border-color: #4285f4;">
                            <img src="images/google.svg" alt="Google Logo" class="h-16px me-2" style="height: 16px;" />Sign
                            in with Google
                        </button>

                    </div>
                    
                    <p><a href="{{ route('admin.login') }}" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Admin Login</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
