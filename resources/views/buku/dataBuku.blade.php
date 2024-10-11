@extends('layout.master')
@section('content')
<!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Data Buku</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" action="">
                                            <div class="form-group">
                                                <label>No Buku</label>
                                                <input type="text" name="NoBuku" class="form-control" placeholder="No Buku" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Judul Buku</label>
                                                <input type="text" name="JudulBuku" class="form-control" placeholder="Judul Buku" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Penerbit</label>
                                                <input type="text" name="Penerbit" class="form-control" placeholder="Penerbit" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Buku</label>
                                                <input type="date" name="TahunBuku" class="form-control" placeholder="Tahun Buku">
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Stok Buku</label>
                                                <input type="text" name="StokBuku" class="form-control" placeholder="Stok Buku" required>
                                            </div>

                                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-default">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- /# column -->
@endsection