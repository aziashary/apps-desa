@extends('layouts.main')
@section('judul')
<title>Edit Surat Keterangan Usaha - Aplikasi Surat Desa</title>
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset ('assets/extensions/choices.js/public/assets/styles/choices.css') }}">
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admindesa/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('admindesa/SKU') }}">Data Surat Keterangan Usaha</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Surat Keterangan Usaha</li>
            </ol>
      

        <div class="card">
            <h4 class="card-header">Tambah Surat Keterangan Usaha</h4>
                @foreach($data as $sku)
                <div class="card-body">
                    <form method="POST" action="{{ url('admindesa/SKU/update/'. $sku->id_sku) }}" enctype="multipart/form-data">
                        @csrf {{ method_field('PATCH') }}
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h6>Nama Warga / yang Mengajukan Surat</h6>
                            <div class="form-group">
                                <select class="choices form-select" name="id_warga" required>
                                    <option value="{{ $sku->wargas->id_warga }}">{{ $sku->wargas->nama_warga }}</option>
                                        @endforeach
                                        @foreach($item as $warga)
                                    <option value="{{ $warga->id_warga }}">{{ $warga->nama_warga }}</option>
                                        @endforeach
                                        @foreach($data as $sku)
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">                
                                <h6>Keterangan Bahwa Pengaju Surat ini :</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" value="{{ $sku->jenis_usaha }}" required>
                                </div>
                            <br>               
                                <h6>Usulan Surat Keterangan Ini Dipergunakan Untuk :</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="alamat_usaha" name="alamat_usaha" value="{{ $sku->alamat_usaha }}" required>
                                </div>
                            <br> 
                                <button type="submit" class="btn btn-success me-1 mb-1">Submit</button>
                                <a type="button" class="btn btn-secondary me-1 mb-1" href="{{ url('SKU') }}">Cancel</a>
                                @endforeach
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script src="{{ asset ('assets/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
<script src="{{ asset ('assets/js/pages/form-element-select.js') }}"></script>
@endpush