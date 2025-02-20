@extends('layouts.app')

@section('title', 'Rusun')

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
                    <a class="text-gray-700 hover:text-primary" href="{{ route('viewRusun') }}">
                        rusun
                    </a>
                </div>
            </div>
        </div>
        <!-- End of Container -->

        <!-- Container -->
        <div class="container-fixed pt-8">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col justify-center gap-2">
                    <h1 class="text-xl font-medium leading-none text-gray-900">
                        Rusun
                    </h1>
                    <div class="flex items-center flex-wrap gap-1.5 font-medium">
                        <span class="text-md text-gray-700">
                            Semua rusun:
                        </span>
                        <span class="text-md text-primary font-medium me-2">
                            {{ $rusuns->total() }}
                        </span>
                    </div>
                </div>
                <div class="flex items-center gap-2.5">
                    <a class="btn btn-sm btn-primary" href="">
                        Tambah Rusun
                    </a>
                </div>
            </div>

            <!-- Table -->
            <div class="card card-grid min-w-full">
                <div class="card-header flex-wrap gap-2">
                    <h3 class="card-title font-medium text-sm">
                        Showing {{ $rusuns->count() }} of {{ $rusuns->total() }} Rusun
                    </h3>
                    <div class="flex flex-wrap gap-2 lg:gap-5">
                        <div class="flex">
                            <label class="input input-sm">
                                <i class="ki-filled ki-magnifier">
                                </i>
                                <input placeholder="Cari rusun..." type="text" value="">
                                </input>
                            </label>
                        </div>
                        <div class="flex flex-wrap gap-2.5">
                            <select class="select select-sm w-28">
                                <option value="1">
                                    Latest
                                </option>
                                <option value="2">
                                    Older
                                </option>
                                <option value="3">
                                    Oldest
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div data-datatable="true" >
                        <div class="scrollable-x-auto">
                            <table class="table table-auto table-border" >
                                <thead>
                                    <tr>
                                        <th class="min-w-[280px]">
                                            <span class="sort asc">
                                                <span class="sort-label font-normal text-gray-700">
                                                    Nama
                                                </span>
                                                <span class="sort-icon">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[300px]">
                                            <span class="sort">
                                                <span class="sort-label font-normal text-gray-700">
                                                    Alamat
                                                </span>
                                                <span class="sort-icon">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="min-w-[180px]">
                                            <span class="sort">
                                                <span class="sort-label font-normal text-gray-700">
                                                    Jumlah Kamar
                                                </span>
                                                <span class="sort-icon">
                                                </span>
                                            </span>
                                        </th>
                                        <th class="w-[60px]">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rusuns as $user)
                                        <tr>
                                            <td class="text-gray-800 font-normal">
                                                {{ $user->nama_rusun ?? '-' }}
                                            </td>                                            <td class="text-gray-800 font-normal">
                                                {{ $user->alamat ?? '-' }}
                                            </td>
                                            <td class="text-gray-800 font-normal">
                                                {{ $user->jumlah_kamar ?? '-' }}
                                            </td>
                                            <td class="text-center">
                                                <div class="menu flex-inline" data-menu="true">
                                                    <div class="menu-item" data-menu-item-offset="0, 10px"
                                                        data-menu-item-placement="bottom-end"
                                                        data-menu-item-toggle="dropdown"
                                                        data-menu-item-trigger="click|lg:click">
                                                        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                                                            <i class="ki-filled ki-dots-vertical"></i>
                                                        </button>
                                                        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                                                            <div class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <span class="menu-icon"><i class="ki-filled ki-search-list"></i></span>
                                                                    <span class="menu-title">Detail</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <span class="menu-icon"><i class="ki-filled ki-pencil"></i></span>
                                                                    <span class="menu-title">Edit</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-separator"></div>
                                                            <div class="menu-item">
                                                                <form action="#" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="menu-link text-red-600">
                                                                        <span class="menu-icon"><i class="ki-filled ki-trash"></i></span>
                                                                        <span class="menu-title">Hapus</span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
                            <div class="flex items-center gap-2 order-2 md:order-1">
                                Show
                                <select class="select select-sm w-16" name="perpage" onchange="window.location.href='?perpage='+this.value">
                                    <option value="5" {{ request('perpage', 10) == 5 ? 'selected' : '' }}>5</option>
                                    <option value="10" {{ request('perpage', 10) == 10 ? 'selected' : '' }}>10</option>
                                    <option value="20" {{ request('perpage', 10) == 20 ? 'selected' : '' }}>20</option>
                                    <option value="50" {{ request('perpage', 10) == 50 ? 'selected' : '' }}>50</option>
                                    <option value="100" {{ request('perpage', 10) == 100 ? 'selected' : '' }}>100</option>
                                </select>
                                per page
                            </div>
                            <div class="flex items-center gap-4 order-1 md:order-2">
                                <span>
                                    Showing {{ $rusuns->firstItem() }} to {{ $rusuns->lastItem() }} of {{ $rusuns->total() }} users
                                </span>
                                <div class="pagination">
                                    {{ $rusuns->appends(request()->query())->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Table -->
        </div>
    <!-- End of Container -->
    </div>
    <!-- End of Toolbar -->

    <!-- Additional JS -->
    <script>
        function changePerPage(select) {
            window.location.href = "{{ url()->current() }}?perpage=" + select.value;
        }
    </script>


    @include('layouts.footer')
@endsection
