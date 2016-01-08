@extends('layout.master')

@section('css')
<!-- Specific Page Vendor CSS -->
<link rel="stylesheet" href="assets/vendor/select2/select2.css" />
<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
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

  <!-- Table Details -->
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
                      <td><a href="{{url('jabatan',$table->kode_pejabat)}}" class="btn btn-primary">Lihat</a></td>
                      <td><a href="{{route('jabatan.edit',$table->kode_pejabat)}}" class="btn btn-warning">Ubah</a></td>
                      <td>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['jabatan.destroy', $table->kode_pejabat]]) !!}
                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                      </td>
										</tr>
                    @endforeach
									</tbody>
								</table>

            <!-- END Table Details -->
					<!-- end: page -->

    @endsection

    @section('css_footer')

    <!-- Specific Page Vendor -->
    <script src="assets/vendor/select2/select2.js"></script>
    <script src="assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

    <!-- Examples -->
    <script src="assets/javascripts/tables/examples.datatables.default.js"></script>
    <script src="assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
    <script src="assets/javascripts/tables/examples.datatables.tabletools.js"></script>

    @endsection
