@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Hari</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Hari</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}
		<div class="card">
			<div class="card-body p-0">
				<table class="table table-hover mb-0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Hari</th>
							<th>Deskripsi</th>
                            <th>Mapel</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							@foreach($haris as $hari)
						<tr>
							<td> {{ $loop->index + 1 }}</td>
							<td> {{ $hari->nama }}</td>
							<td> {{ $hari->deskripsi }}</td>
                            <td><a href="{{ route('daftarMapel') }}" class="btn btn-primary" role="button">DATA</a></td>
						</tr>

						@endforeach
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection