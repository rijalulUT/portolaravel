@extends('layout.master')

@section('title')
Master Pejabat
@endsection

@section('title2')
Master Pejabat
@endsection

@section('header_title')
Ubah Data Pejabat
@endsection

@section('content')
<section class="panel">
    <h1>Data Pejabat</h1>
      {!! Form::model($jabatan,['route'=>['jabatan.update', $jabatan->kode_pejabat],'method' => 'PATCH']) !!}
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Kode Pejabat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_pejabat" value= '{{$jabatan->kode_pejabat}}' readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Kode Fakultas</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_fakultas" value='{{$jabatan->kode_fakultas}}'>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Nama Pejabat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_pejabat" value='{{$jabatan->nama_pejabat}}'>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Keterangan Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="keterangan_jabatan" value='{{$jabatan->keterangan_jabatan}}' >
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Status Aktif</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="status_aktif" value='{{$jabatan->status_aktif}}'>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Kode Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kode_jabatan" value='{{$jabatan->kode_jabatan}}'>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">NIP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nip" value='{{$jabatan->nip}}'>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">NIP 18</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nip18" value='{{$jabatan->nip18}}'>
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-10">
    			<input type="submit" value="Ubah" name = 'ubah' class = 'btn btn-primary'>
          <input type="submit" value="Kembali" name = 'kembali' class = 'btn btn-primary'>

    		</div>
    	{!! Form::close() !!}
</section>
@endsection
