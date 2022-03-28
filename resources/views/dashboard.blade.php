@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Dashboard</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div><!-- /.col -->
			<div class="col1-x1-3 col-md-2">

                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body"><h4 class="mb-0">MataPelajaran</h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('daftarMapel') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                        </div>
						
                    </div>

                </div>
				<div class="card bg-primary text-white mb-4">
                        <div class="card-body"><h4 class="mb-0">Hari</h4>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('daftarHari') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angel-right"></i></div>
                        </div>
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
		
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection