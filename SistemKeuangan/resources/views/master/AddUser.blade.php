@extends('index')
@section('content')

                        <div class="card">
                            <div class="card-header">
                                <div class="pull-left">
                                <strong class="card-title">Table User</strong>
                            </div>
                                <div class="pull-right">
                                    <a href="" class="btn btn-success btn-sm">
                                        <i class="fa fa-undo"></i> Back
                                    </a>
                                </div>
                        </div>
                        <div class="card-body">

                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <form action="{{ url('users') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" autofocus required>                
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="text" name="nama" class="form-control" autofocus required>                
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="nama" class="form-control" autofocus required>                
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="nama" class="form-control" autofocus required>                
                                </div>
                                <div class="form-group">
                                    <label>Tipe User</label>
                                    <input type="text" name="nama" class="form-control" autofocus required>                
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
</div>
@endsection