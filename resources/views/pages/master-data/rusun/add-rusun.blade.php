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
                    <p class="text-gray-700">
                        Master Data
                    </p>
                    <span class="text-gray-400 text-sm">/</span>
                    <a class="text-gray-700 hover:text-primary" href="{{ route('viewRusun') }}">
                        Rusun
                    </a>
                    <span class="text-gray-400 text-sm">/</span>
                    <a class="text-gray-700 hover:text-primary" href="{{ route('viewAddRusun') }}">
                        Tambah Data Rusun
                    </a>
                </div>
            </div>
        </div>
        <!-- End of Container -->

        <!-- Container -->
        <div class="container-fixed pt-8">
            <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
                <div class="flex flex-col gap-2">
                    <h1 class="text-xl font-medium text-gray-900">
                        Tambah Data Rusun
                    </h1>
                </div>
            </div>

            <!-- Card -->
            <div class="card min-w-full">
                <div class="card">
                    <div class="card-body space-y-5">
                        <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-4 gap-x-0 gap-4">
                                <div class="flex flex-col lg:flex-row items-center">
                                    <label class="form-label w-56">Nama</label>
                                </div>
                                <div class="col-span-3">
                                    <input class="input w-full rounded-md" name="nama_rusun" placeholder="Nama Rusun">
                                </div>
                                <div class="flex flex-col lg:flex-row items-center">
                                    <label class="form-label w-56">Alamat</label>
                                </div>
                                <div class="col-span-3">
                                    <textarea class="textarea" name="memo" name="alamat" placeholder="Alamat Rusun" rows=3"></textarea>
                                </div>
                                <div class="flex flex-col lg:flex-row items-center">
                                    <label class="form-label w-56">Kecamatan</label>
                                </div>
                                <form id="filterForm">
                                    <div class="">
                                        <select name="kecamatan_id" id="kecamatanSelect" class="select w-full">
                                            <option value="" disabled selected>Pilih Kecamatan</option>
                                            @foreach ($kecamatanList as $kecamatan)
                                                <option value="{{ $kecamatan->id_r_area_kecamatan }}"
                                                    {{ request('kecamatan_id') == $kecamatan->id_r_area_kecamatan ? 'selected' : '' }}>
                                                    {{ $kecamatan->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>

                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                    $('#kecamatanSelect').on('change', function () {
                                        let kecamatan_id = $(this).val();
                                        let url = "{{ route('viewAddRusun') }}?kecamatan_id=" + kecamatan_id;

                                        $.get(url, function (data) {
                                            // Perbarui tampilan tanpa reload
                                            $('#yourContainer').html($(data).find('#yourContainer').html());
                                        });
                                    });
                                </script>

                                <div class="flex flex-col lg:flex-row items-center px-14">
                                    <label class="form-label w-56">Kelurahan</label>
                                </div>
                                <div class="">
                                    <select name="kelurahan_id" id="kelurahanSelect" class="select w-full">
                                        <option value="" disabled selected>Pilih Kelurahan</option>
                                    </select>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        $('#kecamatanSelect').on('change', function () {
                                            let kecamatan_id = $(this).val();

                                            // AJAX untuk mengisi dropdown kelurahan berdasarkan kecamatan yang dipilih
                                            $.get("{{ route('getKelurahan') }}?kecamatan_id=" + kecamatan_id, function (data) {
                                                let kelurahanSelect = $('select[name="kelurahan_id"]');
                                                kelurahanSelect.empty();
                                                kelurahanSelect.append('<option value="" disabled selected>Pilih Kelurahan</option>');

                                                $.each(data, function (key, kelurahan) {
                                                    kelurahanSelect.append('<option value="' + kelurahan.id_r_area_kelurahan + '">' + kelurahan.nama + '</option>');
                                                });
                                            });
                                        });
                                    });
                                </script>



                                <div class="flex flex-col lg:flex-row items-center">
                                    <label class="form-label w-56">Tahun Dibangun</label>
                                </div>
                                <div class="">
                                    <input type="number" class="input w-32" name="tahun_dibangun" placeholder="0">
                                </div>
                                <div class="flex flex-col lg:flex-row items-center px-14">
                                    <label class="form-label w-56">Tahun Direnovasi</label>
                                </div>
                                <div class="">
                                    <input type="number" class="input w-32" name="tahun_direnovasi" placeholder="0">
                                </div>
                                <div class="flex flex-col lg:flex-row items-center">
                                    <label class="form-label w-56">Luas Area</label>
                                </div>
                                <div class="">
                                    <input type="number" class="input w-32" name="luas_area" placeholder="0">
                                </div>
                                <div class="flex flex-col lg:flex-row items-center px-14">
                                    <label class="form-label w-56">Jumlah Kamar</label>
                                </div>
                                <div class="">
                                    <input type="number" class="input w-32" name="jumlah_kamar" placeholder="0">
                                </div>
                                <div class="flex flex-col lg:flex-row items-center">
                                    <label class="form-label w-56">Kapasitas Roda 2</label>
                                </div>
                                <div class="">
                                    <input type="number" class="input w-32" name="kapasitas_r2" placeholder="0">
                                </div>
                                <div class="flex flex-col lg:flex-row items-center px-14">
                                    <label class="form-label w-56">Kapasitas Roda 4</label>
                                </div>
                                <div class="">
                                    <input type="number" class="input w-32" name="kapasitas_r4"placeholder="0">
                                </div>
                                <div class="flex flex-col lg:flex-row items-center">
                                    <label class="form-label w-56">Deskripsi</label>
                                </div>
                                <div class="col-span-3">
                                    <textarea class="textarea" name="memo" name= "deskripsi" placeholder="Text" rows=3"></textarea>
                                </div>
                                <div class="flex flex-col lg:flex-row items-center">
                                    <label class="form-label w-56">Foto</label>
                                </div>
                                <div class="col-span-3">
                                    <input class="file-input" nama="Foto" type="file" />
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="flex justify-end">
                                <button class="btn btn-primary rounded-md" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- End of Container -->
    </div>
    <!-- End of Toolbar -->

    @include('layouts.footer')
@endsection
