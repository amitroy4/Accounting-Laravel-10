<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <link rel="icon" href="{{ asset('storage/' . $websetting->favicon) }}" type="image/x-icon" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('admin')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        #kt_app_root{
            background: #FFEFBA;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        .login-body{
            background-color: #0000008f;
        }
        .login-body-bg{
            background: #ffffff69;
        }
    </style>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Logo-->
            <a href="{{('/')}}" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="{{ asset('storage/' . $websetting->logo) }}" class="theme-light-show h-25px" />
                <img alt="Logo" src="{{ asset('storage/' . $websetting->system_logo) }}"
                    class="theme-dark-show h-25px" />
            </a>
            <!--end::Logo-->
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
            style="background-image: url({{asset('admin')}}/assets/img/dynam.webp)">
                 <!--begin::Aside-->
                 <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10 login-body">
                    <!--begin::Wrapper-->
                    <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px" style="margin-top: 140px;">
                        <!--begin::Body-->
                        <div class="border-secondary shadow p-6 rounded login-body-bg">
                            <!--begin::Form-->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!--begin::Body-->
                                <div class="card-body border-1">
                                    <!--begin::Heading-->

                                    <div class="text-center mb-10">
                                        <!--begin::Title-->
                                        <h1 class="text-black mb-3 fs-3x" data-kt-translate="sign-in-title">
                                            Sign In
                                        </h1>
                                        <!--end::Title-->

                                        <!--begin::Text-->
                                        <div class="text-black fw-semibold fs-6" data-kt-translate="general-desc">
                                            Get unlimited access & earn money
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--begin::Heading-->


                                    <!--begin::Input group--->
                                    <div class="fv-row mb-8">
                                        <!--begin::userId-->
                                        <label for="username" class="form-label fw-bold">User Id</label>
                                        <input type="text" id="username" placeholder="User Id" name="username" required autofocus autocomplete="off"
                                            data-kt-translate="sign-in-input-userId"
                                            class="form-control form-control-solid border-secondary" />
                                        <!--end::userId-->
                                        @error('username')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <!--end::Input group--->
                                    <div class="fv-row mb-7">
                                        <!--begin::Password-->
                                        <label for="password" class="form-label fw-bold">Password</label>
                                        <input type="password" id="password" placeholder="Password" name="password" required autocomplete="current-password"
                                            data-kt-translate="sign-in-input-password"
                                            class="form-control form-control-solid border-secondary" />
                                        <!--end::Password-->
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input group--->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                                        <div></div>
                                        <!--begin::Link-->
                                        {{-- <a href="{{asset('admin')}}/authentication/layouts/fancy/reset-password.html"
                                            class="link-primary" data-kt-translate="sign-in-forgot-password">
                                            Forgot Password?
                                        </a> --}}
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-center" >
                                        <!--begin::Submit-->
                                        <button id="kt_sign_in_submit" class="btn btn-primary me-2 flex-shrink-0">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label" data-kt-translate="sign-in-submit">
                                                Sign In
                                            </span>
                                            <!--end::Indicator label-->

                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">
                                                <span data-kt-translate="general-progress">Please wait...</span>
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                            <!--end::Indicator progress-->
                                        </button>
                                        <!--end::Submit-->
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--begin::Body-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Aside-->
                <!--begin::Body-->

            </div>
            <!--begin::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "{{asset('admin')}}/assets/";

    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{asset('admin')}}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{asset('admin')}}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->


    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{asset('admin')}}/assets/js/custom/authentication/sign-in/general.js"></script>
    <script src="{{asset('admin')}}/assets/js/custom/authentication/sign-in/i18n.js"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
