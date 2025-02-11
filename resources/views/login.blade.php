<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: MetronicProduct Version: 8.2.9
Purchase: https://1.envato.market/Vm7VRE
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <title>Inawa - Login</title>
    <meta charset="utf-8" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    @vite(['resources/css/style.bundle.css', 'resources/css/plugins.bundle.css'])
    <!--end::Global Stylesheets Bundle-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-52YZ3XGZJ6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-52YZ3XGZJ6');
    </script>
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('assets/media/images/2600x1200/bg-12.png');
            }
        </style>
        <!--end::Page bg image-->

        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <!--begin::Image-->
                    <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                        src="{{ asset('assets/media/illustrations/agency.png') }}" alt="" />
                    <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                        src="{{ asset('assets/media/illustrations/agency.pngz') }}" alt="" />
                    <!--end::Image-->

                    <!--begin::Title-->
                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">
                        Fast, Efficient and Productive
                    </h1>
                    <!--end::Title-->

                    <!--begin::Text-->
                    <div class="text-gray-600 fs-base text-center fw-semibold">
                        In this kind of post, <a href="#" class="opacity-75-hover text-primary me-1">the
                            blogger</a>

                        introduces a person they’ve interviewed <br /> and provides some background information about

                        <a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>
                        and their <br /> work following this is a transcript of the interview.
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Content-->
            </div>
            <!--begin::Aside-->

            <!--begin::Body-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <!--begin::Wrapper-->
                <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column flex-column-fluid pb-15 pb-lg-20">

                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                                action="{{ route('login') }}" method="POST">
                                @csrf

                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <img class="object-contain mb-4" src="{{ asset('assets/media/images/logokotacimahi.png') }}" style="width: 64px" />
                                    <h1 class="text-gray-900 fw-bolder mb-3">Sign In</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">DPKP Rusunawa</div>
                                </div>
                                <!--end::Heading-->

                                <!-- Menampilkan error validasi -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!--begin::Input group--->
                                <div class="fv-row mb-8">
                                    <input type="email" placeholder="Email" name="email" autocomplete="off"
                                        class="form-control bg-transparent" value="{{ old('email') }}" />
                                </div>

                                <div class="fv-row mb-3">
                                    <input type="password" placeholder="Password" name="password" autocomplete="off"
                                        class="form-control bg-transparent" />
                                </div>
                                <!--end::Input group--->

                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-primary mt-8">
                                        <span class="indicator-label">Sign In</span>
                                    </button>
                                </div>
                            </form>
                            <!--end::Form-->

                        </div>
                        <!--end::Wrapper-->

                        <!--begin::Footer-->
                        <div class="d-flex w-full justify-content-center align-items-center text-center">
                            <p class="text-color-gray-700">
                                <span data-kt-element="current-lang-name">©2022 DPKP Kota Cimahi</span>
                            </p>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->

    @if(session()->has('user'))
        <script>
            window.location.href = "{{ route('index') }}";
        </script>
    @endif

</body>
<!--end::Body-->

</html>
