@extends('layout.master')
@section('content')
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Peminjaman </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>No Pinjam</th>
                                                    <th>Tanggal Pinjam</th>
                                                    <th>No Anggota</th>
                                                    <th>No Buku</th>
                                                    <th>Jumlah Buku</th>
                                                    <th>Tanggal Harus Kembali</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($pinjam as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->NoPinjam }}</td>
                                                    <td>{{$tampil->TglPinjam }}</td>
                                                    <td>{{$tampil->NoAnggota }}</td>
                                                    <td>{{$tampil->NoBuku }}</td>
                                                    <td>{{$tampil->JmlhBuku }}</td>
                                                    <td>{{$tampil->TglHrsKembali}}</td>
                                                    <td>
                                                        <form action="{{ route('pinjam.destroy', $tampil->Id) }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <a href="{{ route('pinjam.edit',$tampil->Id) }}" class=" btn btn-sm btn-primary">Edit</a>
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