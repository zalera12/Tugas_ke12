@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Detail Cast</h1>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('cast.index') }}" class="btn btn-secondary float-sm-right">Kembali</a>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Detail {{ $cast->nama }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <p>{{ $cast->nama }}</p>
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur:</label>
                            <p>{{ $cast->umur }}</p>
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio:</label>
                            <p>{{ $cast->bio }}</p>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
