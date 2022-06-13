@extends('index')
@section('content')
<div classs="content">
<div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Tambah Pemasukan</strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jumlah</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Jumlah" class="form-control"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tanggal</label></div>
                                                                <div class="col-12 col-md-9"><input type="email" id="email-input" name="email-input" placeholder="dd/mm/yyyy" class="form-control"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Perincian</label></div>
                                                                <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" class="form-control"></textarea></div>
                                                            </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>
                                                </div>
</div>
@endsection