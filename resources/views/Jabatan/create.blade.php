@extends('layout.master')

@section('title')
Master Pejabat
@endsection

@section('title2')
Master Pejabat
@endsection

@section('header_title')
Isi Data Pejabat
@endsection


@section('content')
	{!! Form::open(['url' => 'jabatan']) !!}
		<div class="form-group">
		    Kode Pejabat:
			<input	type = "text" name='kode_pejabat' class='form-control'>
		</div>
		<div class="form-group">
		    Kode Fakultas:
			<input	type = "text" name='kode_fakultas' class='form-control'>
		</div>
    <div class="form-group">
        Nama Pejabat:
      <input	type = "text" name='nama_pejabat' class='form-control'>
    </div>
    <div class="form-group">
        Keterangan Jabatan:
      <input	type = "text" name='keterangan_jabatan' class='form-control'>
    </div>
    <div class="form-group">
        Status Aktif:
      <input	type = "text" name='status_aktif' class='form-control'>
    </div>
    <div class="form-group">
        Kode Jabatan:
      <input	type = "text" name='kode_jabatan' class='form-control'>
    </div>
    <div class="form-group">
        NIP:
      <input	type = "text" name='nip' class='form-control'>
    </div>
    <div class="form-group">
        NIP18:
      <input	type = "text" name='nip18' class='form-control'>
    </div>
		<div class="form-group">
			<input type="submit" value="Simpan" name = 'simpan' class = 'btn btn-primary'>
      <input type="submit" value="Kembali" name = 'kembali' class = 'btn btn-primary'>
		</div>
	{!! Form::close() !!}
@endsection
