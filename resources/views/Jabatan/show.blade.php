@extends('layout/master')
@section('content')
    <h1>Biodata Mahasiswa</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Kode Pejabat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Nomor" placeholder= '{{$jabatan->kode_pejabat}}' readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Kode Fakultas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nim" placeholder='{{$jabatan->kode_fakultas}}' readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Nama Pejabat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder='{{$jabatan->nama_pejabat}}' readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{url('jabatan')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@stop
