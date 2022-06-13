@extends('index')
@section('title', 'Tabel User')
@section('content')

                        <div class="card">
                            <div class="card-header">
                                <div class="pull-left">
                                <strong class="card-title">Table User</strong>
                            </div>
                                <div class="pull-right">
                                    <a href="{{ url('master/AddUser') }}" class="btn btn-success btn-sm">
                                        <i class="fa fa-plus"></i> Add
                                    </a>
                                </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">NO.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">No Telp</th>
                                            <th scope="col">Username</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Tipe User</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $item)
                                        <tr>
                                            <th scope="row">{{$loop->index}}</th>
                                            <td>{{$item->Nama}}</td>
                                            <td>{{$item->NoTelp}}</td>
                                            <td>{{$item->Username}}</td>
                                            <td>{{$item->Password}}</td>
                                            <td>{{$item->TipeUser}}</td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
</div>
                            </div>
                        </div>
                    </div>
</div>
@endsection