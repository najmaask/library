@extends('layout.master')
@section('content')
<!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Data Anggota</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" action="{{'simpan'}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>No Anggota</label>
                                                <input type="text" name="NoAnggota" class="form-control" placeholder="No Anggota" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Anggota</label>
                                                <input type="text" name="NamaAnggota" class="form-control" placeholder="Nama Anggota" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="TempatLahir" class="form-control" placeholder="Tempat Lahir" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="TglLahir" class="form-control" placeholder="Tanggal Lahir">
                                            </div>
                                            <div class="form-group">
                                                <label>Kelas</label>
                                                <input type="text" name="Kelas" class="form-control" placeholder="Kelas" required>
                                            </div>

                                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-default">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- /# column -->
@endsection