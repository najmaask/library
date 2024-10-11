@extends('layout.master')
@section('content')
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Anggota </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>No Anggota</th>
                                                    <th>Nama Anggota</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Kelas</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($data as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->NoAnggota }}</td>
                                                    <td>{{$tampil->NamaAnggota }}</td>
                                                    <td>{{$tampil->TempatLahir }}</td>
                                                    <td>{{$tampil->TglLahir }}</td>
                                                    <td>{{$tampil->Kelas }}</td>
                                                    <td>
                                                            <a href='{{ ("editanggota$tampil->Id ") }}' class=" btn btn-sm btn-primary">Edit</a>
                                                            |
                                                            <a href='{{ ("deleteanggota$tampil->Id ") }}' class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                        
@endsection