@extends('layout.master')

@section('css_menu')
<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="{{ URL::asset('assets/vendor/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
@endsection

@section('title')
Master Agama
@endsection

@section('content')
<!-- Start: Form Input Master-->
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="fa fa-caret-down"></a>
    </div>
    <h2 class="panel-title">Tambah Master Agama</h2>
  </header>
<div class="panel-body">
  {!! Form::open(['url' => 'master/agama','method' => 'POST']) !!}
    <div class="form-group">
        Kode Agama:
      <input	type = "text" size = "10%" name='kode_pejabat'>
    </div>
    <div class="form-group">
        Nama Agama:
      <input	type = "text" size = "40%" name='kode_fakultas'>
    </div>
    <div class="form-group">
      <input type="submit" value="Simpan" name = 'simpan' class = 'btn btn-primary'>
    </div>
  {!! Form::close() !!}
	</div>
</section>
<!-- End: Form Input Master-->
<br>

<!-- Memasukkan table kedalam panel -->
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
      </div>
      <h2 class="panel-title">Daftar Master Agama</h2>
    </header>
    <div class="panel-body">

          <!-- Start: Isi Halaman -->
  								<table class="table table-bordered table-striped mb-none" id="datatable-default">
  									<thead>
  										<tr>
  											<th>Kode Agama</th>
                        <th>Nama Agama</th>
                        <th></th>
                        <th></th>
  										</tr>
  									</thead>
                    <tbody>
                      @foreach($agamas as $key => $agama)
  										<tr class="gradeX">
  											<td>{{$agama->kode_agama}}</td>
  											<td>{{$agama->nama_agama}}</td>
                        <td><a href="{{url('master/agama',$agama->kode_agama)}}" class="btn btn-primary">Lihat</a></td>
                        <td><a class="popup-with-form btn btn-warning" href="#demo-form">Ubah</a></td>
  										</tr>
                     @endforeach
  									</tbody>
  								</table>
                  {!! Form::open(['routes' => 'master/agama','method' => 'POST', 'id'=>'demo-form', 'class'=>'white-popup-block mfp-hide form-horizontal']) !!}
                      <div class="row">
                        <div class="col-sm-12">
                          <h3>Ubah Data Agama</h3>
                        </div>
                      </div>
                      <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Kode Agama</label>
                        <div class="col-sm-9">
                          <input type="text" name="kode_agama" class="form-control" value={{$agama->kode_agama}} required/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Agama</label>
                        <div class="col-sm-9">
                          <input type="email" name="nama_agama" class="form-control" value={{$agama->nama_agama}} required/>
                        </div>
                      </div>
                      <div class="row mb-lg">
                        <div class="col-sm-9 col-sm-offset-3">
                          <button class="btn btn-primary">Ubah</button>
                        </div>
                      </div>
                  {!! Form::close() !!}

                  <!-- END: Isi Halaman -->
  <!-- Penutup Panel -->
	</div>
@endsection

    @section('css_footer')

    <!-- Specific Page Vendor -->
    <script src="{{ URL::asset('assets/vendor/select2/select2.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js') }}"></script>
    <script src="{{ URL::asset('assets/vendor/pnotify/pnotify.custom.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ URL::asset('assets/javascripts/theme.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ URL::asset('assets/javascripts/theme.custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ URL::asset('assets/javascripts/theme.init.js') }}"></script>

    <!-- Examples -->
    <script src="{{ URL::asset('assets/javascripts/tables/examples.datatables.default.js') }}"></script>
    <script src="{{ URL::asset('assets/javascripts/tables/examples.datatables.row.with.details.js') }}"></script>
    <script src="{{ URL::asset('assets/javascripts/tables/examples.datatables.tabletools.js') }}"></script>
    <script src="{{ URL::asset('assets/javascripts/ui-elements/examples.lightbox.js') }}"></script>

    @endsection
