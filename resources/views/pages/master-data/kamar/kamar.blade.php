@extends('layouts.app')

@section('title', 'Kamar')

@section('content')
    <!-- Toolbar -->
    <div class="pb-5">
        <!-- Container -->
        <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
            <div class="flex items-center flex-wrap gap-1 lg:gap-5">
                <h1 class="font-medium text-base text-gray-900">
                    Inawa
                </h1>
                <div class="flex items-center flex-wrap gap-1 text-sm">
                    <p class="text-gray-700" href="#">
                        Master Data
                    </p>
                    <span class="text-gray-400 text-sm">
                        /
                    </span>
                    <a class="text-gray-700 hover:text-primary" href="{{ route('viewKamar') }}">
                        Kamar
                    </a>
                    {{-- <span class="text-gray-400 text-sm">
                        /
                    </span>
                    <span class="text-gray-700">
                        Configuration
                    </span>
                    <span class="text-gray-400 text-sm">
                        /
                    </span>
                    <span class="text-gray-900">
                        Team Settings
                    </span> --}}

                </div>
            </div>
        </div>
        <!-- End of Container -->
    </div>
    <!-- End of Toolbar -->
    <!-- Container -->
    <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
            <!-- begin: grid -->
            <div class="grid lg:grid-cols-2 gap-5 lg:gap-7.5 items-stretch">
                <div class="lg:col-span-2">
                    <div class="card h-full">
                        <div class="card-body flex flex-col place-content-center gap-5">
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col gap-3 text-center">
                                    <h2 class="text-1.5xl font-semibold text-gray-900">
                                        Inih buat KAMARRR
                                    </h2>
                                    <p class="text-sm font-medium text-gray-700">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum eius vel dolores tempora debitis qui repudiandae, magni voluptates deserunt recusandae maxime ullam obcaecati. Delectus fugit perferendis, saepe minus minima consequatur.
                                    </p>
                                </div>
                                <div class="flex justify-center">
                                    <a class="btn btn-dark" href="html/demo8/public-profile/teams.html">
                                        it's 03:16 AM
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: grid -->
            
        </div>
    </div>
    <!-- End of Container -->

    @include('layouts.footer')
@endsection
