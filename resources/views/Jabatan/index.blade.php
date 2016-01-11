@extends('layout.master')

@section('css')
<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="{{ URL::asset('assets/vendor/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css') }}" />
@endsection

@section('title')
Master Pejabat
@endsection

@section('title2')
Master Pejabat
@endsection

@section('header_title')
List Master Pejabat
@endsection

@section('content')
<!-- Memasukkan table kedalam panel -->
  <section class="panel">
    <header class="panel-heading">
      <div class="panel-actions">
        <a href="#" class="fa fa-caret-down"></a>
        <a href="#" class="fa fa-times"></a>
      </div>
      <h2 class="panel-title">List Master Pejabat</h2>
    </header>
    <div class="panel-body">

          <!-- Start: Isi Halaman -->
                <a href="{{url('/jabatan/create')}}" class="btn btn-success">Tambah Data</a>
  							<br>
  							<br>
  								<table class="table table-bordered table-striped mb-none" id="datatable-default">
  									<thead>
  										<tr>
  											<th>Kode Pejabat</th>
                        <th>Kode Fakultas</th>
  											<th>Nama Pejabat</th>
  											<th>Keterangan Jabatan</th>
  											<th>Status Aktif</th>
  											<th>Kode Jabatan</th>
                        <th>NIP</th>
                        <th>NIP 18</th>
                        <th></th>
                        <th></th>
                        <th></th>
  										</tr>
  									</thead>
  									<tbody>
                      @foreach($tables as $key => $table)
  										<tr class="gradeX">
  											<td>{{$table->kode_pejabat}}</td>
  											<td>{{$table->kode_fakultas}}</td>
  											<td>{{$table->nama_pejabat}}</td>
  											<td>{{$table->keterangan_jabatan}}</td>
                        <td>{{$table->status_aktif}}</td>
                        <td>{{$table->kode_jabatan}}</td>
                        <td>{{$table->nip}}</td>
                        <td>{{$table->nip18}}</td>
                        <td><a href="{{url('jabatan',$table->kode_pejabat.'_'.$table->status_aktif)}}" class="btn btn-primary">Lihat</a></td>
                        <td><a href="{{route('jabatan.edit',$table->kode_pejabat.'_'.$table->status_aktif)}}" class="btn btn-warning">Ubah</a></td>
                        <td>
                          {!! Form::open(['method' => 'DELETE', 'route'=>['jabatan.destroy', $table->kode_pejabat]]) !!}
                          {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                        </td>
  										</tr>
                      @endforeach
  									</tbody>
  								</table>
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

    @endsection
