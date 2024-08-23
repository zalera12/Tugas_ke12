@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Cast Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <a href="/cast/create" class="btn btn-primary float-sm-right">Tambah Cast</a>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Cast</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="GET" action="{{ route('cast.index') }}" class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="search" class="form-control" placeholder="Search">
                                </div>
                                <div class="col-md-6">
                                    <!-- Filter form can go here -->
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataCast as $cast)
                                    <tr>
                                        <td>{{ $cast->nama }}</td>
                                        <td>{{ $cast->umur }}</td>
                                        <td>
                                            <!-- Tambahkan ikon "show" -->
                                            <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('cast.destroy', $cast->id) }}" method="POST"
                                                style="display:inline;" id="form-{{ $cast->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" data-id="{{ $cast->id }}"
                                                    class="btn-delete btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <script>
        let buttons_delete = document.querySelectorAll('.btn-delete');

        buttons_delete.forEach(btn => {
            btn.addEventListener('click', () => {
                let dataId = btn.getAttribute('data-id');
                let form = document.getElementById(`form-${dataId}`);
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Menghapus data ini",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus data!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            })
        });

        @if(session('success_delete'))
        Swal.fire({
                    title: 'Success!',
                    text: 'Data berhasil dihapus.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                })
        @endif
    </script>
@endsection
