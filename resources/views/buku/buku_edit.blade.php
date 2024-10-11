@extends('layout.master')
@section('content')
<!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1> Edit Buku</h1>
            <hr>
            @foreach($buku as $tampil)
            <form action="{{ route('buku.update', $tampil->Id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="no">No Buku:</label>
                    <input type="number" class="form-control" id="no" name="no" value="{{ $tampil->NoBuku }}">
                </div>
                <div class="form-group">
                    <label for="jdl">Judul Buku:</label>
                    <input type="text" class="form-control" id="jdl" name="jdl" value="{{ $tampil->JudulBuku }}">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit:</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $tampil->Penerbit }}">
                </div>
                <div class="form-group">
                    <label for="thn">Tahun Buku:</label>
                    <input type="text" claas="form-control" id="thn" name="thn" value="{{ $tampil->TahunBuku }}">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <input type="text" claas="form-control" id="kategori" name="kategori" value="{{ $tampil->Kategori }}">
                </div>
                <div class="form-group">
                    <label for="stok">Stok Buku:</label>
                    <input type="text" claas="form-control" id="stok" name="stok" value="{{ $tampil->StokBuku }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection