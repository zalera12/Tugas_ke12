@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Halaman Tambah Cast</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Cast</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('cast.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror" id="umur" value="{{ old('umur') }}">
                            @error('umur')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea name="bio" class="form-control @error('bio') is-invalid @enderror" id="bio" rows="4">{{ old('bio') }}</textarea>
                            @error('bio')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
<script>
    @if(session('success'))
         Swal.fire({
                    title: 'Success!',
                    text: 'Data berhasil ditambahkan.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {                
                        window.location.href = '/cast';
                });
    @endif
</script>
@endsection

@section('styles')
<style>
    .is-invalid {
        border-color: #dc3545;
    }
</style>
@endsection
