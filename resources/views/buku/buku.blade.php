@extends('layout.master')
@section('content')
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Buku </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>No Buku</th>
                                                    <th>Judul Buku</th>
                                                    <th>Penerbit</th>
                                                    <th>Tahun Buku</th>
                                                    <th>Kategori</th>
                                                    <th>Stok Buku</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($buku as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->NoBuku }}</td>
                                                    <td>{{$tampil->JudulBuku }}</td>
                                                    <td>{{$tampil->Penerbit }}</td>
                                                    <td>{{$tampil->TahunBuku }}</td>
                                                    <td>{{$tampil->Kategori }}</td>
                                                    <td>{{$tampil->StokBuku }}</td>
                                                    <td>
                                                        <form action="{{ route('buku.destroy', $tampil->Id) }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <a href="{{ route('buku.edit',$tampil->Id) }}" class=" btn btn-sm btn-primary">Edit</a>
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