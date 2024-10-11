@extends('layout.master')
@section('content')
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Petugas </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>NIK</th>
                                                    <th>Nama Petugas</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Alamat</th>
                                                    <th>No Telepon</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($petugas as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->NIK }}</td>
                                                    <td>{{$tampil->NamaPetugas }}</td>
                                                    <td>{{$tampil->TempatLahir }}</td>
                                                    <td>{{$tampil->TglLahir }}</td>
                                                    <td>{{$tampil->Alamat }}</td>
                                                    <td>{{$tampil->NoTelpon }}</td>
                                                    <td>
                                                        <form action="{{ route('petugas.destroy', $tampil->Id) }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <a href="{{ route('petugas.edit',$tampil->Id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                                            |
                                                            <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                                        </form>
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