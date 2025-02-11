<!-- Sidebar -->
<div class="fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0 bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]"
    data-drawer="true" data-drawer-class="drawer drawer-start flex" data-drawer-enable="true|lg:false" id="sidebar">
    <div class="hidden lg:flex items-center justify-center shrink-0 pt-8 pb-3.5" id="sidebar_header">
        <a href="{{ route('index')}}">
            {{-- <img class="dark:hidden min-h-[42px]" src="{{ asset('assets/media/images/logokotacimahi.png') }}" />
            <img class="hidden dark:block min-h-[42px]" src="{{ asset('assets/media/images/logokotacimahi.png') }}" /> --}}

            <img class="w-12 h-12 rounded-lg border border-gray-300 p-2" src="{{ asset('assets/media/images/logokotacimahi.png') }}" />

        </a>
    </div>
    <div class="scrollable-y-hover grow gap-2.5 shrink-0 flex items-center pt-5 lg:pt-0 ps-3 pe-3 lg:pe-0 flex-col"
        data-scrollable="true" data-scrollable-dependencies="#sidebar_header,#sidebar_footer"
        data-scrollable-height="auto" data-scrollable-offset="80px" data-scrollable-wrappers="#sidebar_menu_wrapper"
        id="sidebar_menu_wrapper">
        <!-- Sidebar Menu -->
        <div class="menu flex flex-col gap-2.5 grow mt-4" data-menu="true" id="sidebar_menu">
            <div class="menu-item">
                <a class="menu-link rounded-[9px] border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2"
                    href="{{ route('index') }}">
                    <span
                        class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                        <i class="ki-filled ki-chart-line-star text-1.5xl">
                        </i>
                    </span>
                    <span
                        class="menu-title text-xs menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600 font-medium">
                        Dashboard
                    </span>
                </a>
            </div>

            <!-- Master Data -->
            <div class="menu-item" data-menu-item-offset="-10px, 14px" data-menu-item-overflow="true"
                data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                data-menu-item-trigger="click|lg:hover">

                <div class="menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow">
                    <span
                        class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                        <i class="ki-filled ki-data text-1.5xl">
                        </i>
                    </span>
                    <span
                        class="menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600">
                        Master
                    </span>
                </div>
                <div class="menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewPenghuni') }}">
                            <span class="menu-title">
                                Penghuni
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewRusun') }}">
                            <span class="menu-title">
                                Rusun
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewTipe') }}">
                            <span class="menu-title">
                                Tipe
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewTarif') }}">
                            <span class="menu-title">
                                Tarif
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewKamar') }}">
                            <span class="menu-title">
                                Kamar
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewBank') }}">
                            <span class="menu-title">
                                Bank
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewKendaraan') }}">
                            <span class="menu-title">
                                Kendaraan
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Transaksi -->
            <div class="menu-item" data-menu-item-offset="-10px, 14px" data-menu-item-overflow="true"
                data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                data-menu-item-trigger="click|lg:hover">

                <div class="menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow">
                    <span
                        class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                        <i class="ki-filled ki-cheque text-1.5xl"></i>
                    </span>
                    <span
                        class="menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600">
                        Transaksi
                    </span>
                </div>
                <div class="menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewPengajuan') }}">
                            <span class="menu-title">
                                Pengajuan
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewWawancara')}}">
                            <span class="menu-title">
                                Wawancara
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewPersetujuan') }}">
                            <span class="menu-title">
                                Persetujuan
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewKontrak')}}">
                            <span class="menu-title">
                                Kontrak
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewPutusKontrak') }}">
                            <span class="menu-title">
                                Putus Kontrak
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewTagihan') }}">
                            <span class="menu-title">
                                Tagihan
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewPemeriksaanProperti') }}">
                            <span class="menu-title">
                                Pemeriksaan Properti
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Laporan -->
            <div class="menu-item" data-menu-item-offset="-10px, 14px" data-menu-item-overflow="true"
                data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                data-menu-item-trigger="click|lg:hover">

                <div class="menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow">
                    <span
                        class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                        <i class="ki-filled ki-document text-1.5xl"></i>
                    </span>
                    <span
                        class="menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600">
                        Laporan
                    </span>
                </div>
                <div class="menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]">
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewLaporanTransaksi') }}">
                            <span class="menu-title">
                                Laporan Transaksi
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewLaporanDataPenghuni') }}">
                            <span class="menu-title">
                                Laporan Data Penghuni
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="{{ route('viewLaporanAktivitasUser') }}">
                            <span class="menu-title">
                                Laporan Aktivitas 
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Bantuan -->
            {{-- <div class="menu-item" data-menu-item-offset="-10px, 14px" data-menu-item-overflow="true"
                data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                data-menu-item-trigger="click|lg:hover">
                <div
                    class="menu-link rounded-[9px] border border-transparent menu-item-here:border-gray-200 menu-item-here:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200 w-[62px] h-[60px] flex flex-col justify-center items-center gap-1 p-2 grow">
                    <span
                        class="menu-icon menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary text-gray-600">
                        <i class="ki-filled ki-share text-1.5xl">
                        </i>
                    </span>
                    <span
                        class="menu-title menu-item-here:text-primary menu-item-active:text-primary menu-link-hover:text-primary font-medium text-xs text-gray-600">
                        Bantuan
                    </span>
                </div>
                <div
                    class="menu-default menu-dropdown gap-0.5 w-[220px] scrollable-y-auto lg:overflow-visible max-h-[50vh]">
                    <div class="menu-item">
                        <a class="menu-link"
                            href="https://keenthemes.com/metronic/tailwind/docs/getting-started/installation">
                            <span class="menu-title">
                                Getting Started
                            </span>
                        </a>
                    </div>
                    <div class="menu-item" data-menu-item-placement="right-start"
                        data-menu-item-toggle="accordion|lg:dropdown" data-menu-item-trigger="click|lg:hover">
                        <div class="menu-link grow cursor-pointer">
                            <span class="menu-title">
                                Support Forum
                            </span>
                            <span class="menu-arrow">
                                <i class="ki-filled ki-right text-3xs">
                                </i>
                            </span>
                        </div>
                        <div class="menu-default menu-dropdown gap-0.5 w-[220px]">
                            <div class="menu-item">
                                <a class="menu-link" href="https://devs.keenthemes.com">
                                    <span class="menu-title">
                                        All Questions
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="https://devs.keenthemes.com/popular">
                                    <span class="menu-title">
                                        Popular Questions
                                    </span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="https://devs.keenthemes.com/question/create">
                                    <span class="menu-title">
                                        Ask Question
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link"
                            href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                            <span class="menu-title">
                                Licenses & FAQ
                            </span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="https://keenthemes.com/metronic/tailwind/docs">
                            <span class="menu-title">
                                Documentation
                            </span>
                        </a>
                    </div>
                    <div class="menu-separator">
                    </div>
                    <div class="menu-item">
                        <a class="menu-link" href="https://keenthemes.com/contact">
                            <span class="menu-title">
                                Contact Us
                            </span>
                        </a>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- End of Sidebar Menu -->
    </div>
    <div class="flex flex-col gap-5 items-center shrink-0 pb-4" id="sidebar_footer">
        <div class="menu" data-menu="true">
            <div class="menu-item" data-menu-item-offset="-20px, 28px" data-menu-item-overflow="true"
                data-menu-item-placement="right-end" data-menu-item-toggle="dropdown"
                data-menu-item-trigger="click|lg:click">
                <div class="menu-toggle btn btn-icon">
                    <img alt="" class="size-8 justify-center rounded-lg border border-gray-500 shrink-0"
                        src="assets/media/avatars/gray/5.png">
                    </img>
                </div>
                <div class="menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]">
                    <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
                        <div class="flex items-center gap-2">
                            <img alt="" class="size-9 rounded-full border-2 border-success"
                                src="assets/media/avatars/300-2.png">
                            <div class="flex flex-col gap-1.5">
                                <span class="text-sm text-gray-800 font-semibold leading-none">
                                    {{ Auth::user()->nama }}
                                </span>
                                <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none"
                                    href="html/demo8/account/home/get-started.html">
                                    {{ Auth::user()->email }}
                                </a>
                            </div>
                            </img>
                        </div>
                        {{-- <span class="badge badge-xs badge-primary badge-outline">
                            Pro
                        </span> --}}
                    </div>
                    <div class="menu-separator">
                    </div>
                    <div class="flex flex-col">
                        <div class="menu-item mb-0.5">
                            <div class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-filled ki-moon">
                                    </i>
                                </span>
                                <span class="menu-title">
                                    Dark Mode
                                </span>
                                <label class="switch switch-sm">
                                    <input data-theme-state="dark" data-theme-toggle="true" name="check"
                                        type="checkbox" value="1">
                                    </input>
                                </label>
                            </div>
                        </div>

                        <div class="menu-item px-4 py-1.5">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-light justify-center w-full">
                                    Log out
                                </button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Sidebar -->
