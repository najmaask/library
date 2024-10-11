@extends('layout.master')
@section('content')
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Santri </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>No Santri</th>
                                                    <th>Nama Santri</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Kelas</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($santri as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->NoSantri }}</td>
                                                    <td>{{$tampil->NamaSantri }}</td>
                                                    <td>{{$tampil->TempatLahir }}</td>
                                                    <td>{{$tampil->TglLahir }}</td>
                                                    <td>{{$tampil->Kelas }}</td>
                                                    <td>
                                                        <form action="{{ route('santri.destroy', $tampil->Id) }}" method="post">
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <a href="{{ route('santri.edit',$tampil->Id) }}" class=" btn btn-sm btn-primary">Edit</a>
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