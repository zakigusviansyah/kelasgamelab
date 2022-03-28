@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Tambah Mapel</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
					<li class="breadcrumb-item active">Tambah Mapel</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
        <div class="card">
            <div class="card-body">
                <form action="{{ route('storeMapel') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="id_hari">Nama Hari</label>
                    <select class="form-control" name="id_hari" id="id_hari" required="required">
                    @foreach($haris as $hari)
                            <option value="{{ $hari->id }}">{{ $hari->nama }}</option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Pelajaran</label>
                        <input type="text" name="nama" id="nama" class="form-control" required="required" placeholder="Masukan Nama Mata Pelajaran">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" required="required" placeholder="Masukan Deskripsi Hari"></textarea>
                    </div>

                    <div class="text-right">
                        <a href="{{ route('daftarHari') }}" class="btn-outline-secondary mr-2" role="button">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

<div class="content">
	<div class="container-fluid">
		{{-- main content here --}}
        
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection