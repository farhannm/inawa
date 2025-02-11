<!doctype html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">

<head><base href="../../">
    <meta charset="UTF-8">

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" class="object-contain"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inawa @isset($title)
            - {{ $title }}
        @endisset
    </title>

    <!-- CSS & JS Assets -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    <meta content="follow, index" name="robots"/>
    <link href="https://keenthemes.com/metronic" rel="canonical"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="@keenthemes" name="twitter:site"/>
    <meta content="@keenthemes" name="twitter:creator"/>
    <meta content="summary_large_image" name="twitter:card"/>
    <meta content="Metronic - Tailwind CSS " name="twitter:title"/>
    <meta content="" name="twitter:description"/>
    <meta content="assets/media/app/og-image.png" name="twitter:image"/>
    <meta content="https://keenthemes.com/metronic" property="og:url"/>
    <meta content="en_US" property="og:locale"/>
    <meta content="website" property="og:type"/>
    <meta content="@keenthemes" property="og:site_name"/>
    <meta content="Metronic - Tailwind CSS " property="og:title"/>
    <meta content="" property="og:description"/>
    <meta content="assets/media/app/og-image.png" property="og:image"/>
    <link href="assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180"/>
    <link href="assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png"/>
    <link href="assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png"/>
    <link href="assets/media/app/favicon.ico" rel="shortcut icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="assets/vendors/apexcharts/apexcharts.css" rel="stylesheet"/>
    <link href="assets/vendors/keenicons/styles.bundle.css" rel="stylesheet"/>
    <link href="assets/css/styles.css" rel="stylesheet"/>

</head>

<body class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#F6F6F9] [--tw-page-bg-dark:var(--tw-coal-200)] [--tw-content-bg:var(--tw-light)] [--tw-content-bg-dark:var(--tw-coal-500)] [--tw-header-height:60px] [--tw-sidebar-width:90px] bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]">
    <!-- Theme Mode -->
    <script>
        const defaultThemeMode = 'light'; // light|dark|system
            let themeMode;
    
            if ( document.documentElement ) {
                if ( localStorage.getItem('theme')) {
                        themeMode = localStorage.getItem('theme');
                } else if ( document.documentElement.hasAttribute('data-theme-mode')) {
                    themeMode = document.documentElement.getAttribute('data-theme-mode');
                } else {
                    themeMode = defaultThemeMode;
                }
    
                if (themeMode === 'system') {
                    themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
                }
    
                document.documentElement.classList.add(themeMode);
            }
    </script>
   <!-- End of Theme Mode -->

   

</body>

</html>