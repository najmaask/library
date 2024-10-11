@extends('layout.master')
@section('content')
<!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Data Petugas</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" action="">
                                            <div class="form-group">
                                                <label>NIK</label>
                                                <input type="text" name="NIK" class="form-control" placeholder="NIK" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Petugas</label>
                                                <input type="text" name="NamaPetugas" class="form-control" placeholder="Nama Petugas" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="TempatLahir" class="form-control" placeholder="Tempat Lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="TanggalLahir" class="form-control" placeholder="Tanggal Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="Alamat" class="form-control" placeholder="Alamat" required>
                                            </div>
                                            <div class="form-group">
                                                <label>No Telepon</label>
                                                <input type="text" name="NoTelepon" class="form-control" placeholder="No Telepon" required>
                                            </div>

                                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-default">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- /# column -->
@endsection