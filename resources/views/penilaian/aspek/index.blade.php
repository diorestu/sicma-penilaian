@extends('layouts.app')

@section('custom_styles')
@endsection

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none d-flex flex-row justify-content-between align-items-center">
            <h2 class="page-title text-white">
                {{ __('Aspek Penilaian') }}
            </h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-orange rounded-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah
            </button>

            <!-- Modal -->
            <div class="modal fade" tabindex="-1" class="modal fade" id="exampleModal" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Pengguna</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="post">
                            @csrf
                            @method('POST')
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Nama Aspek</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label class="form-label">Nama Pengguna</label>
                                            <input type="text" class="form-control" name="username"
                                                placeholder="Nama Pengguna">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label class="form-label">Kata Sandi</label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Kata Sandi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                    Batal
                                </button>
                                <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                                    Simpan Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Cabang</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td data-label="Name">
                                        <div class="font-weight-medium">{{ $item->nama_aspek }}</div>
                                    </td>
                                    <td class="text-muted" data-label="Role">
                                        {{ $item->keterangan_aspek }}
                                    </td>
                                    <td class="text-muted" data-label="Role">
                                        {{ $item->bobot }} %
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">

                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn rounded-3" data-bs-toggle="modal"
                                                data-bs-target="#data{{ $item->id }}">
                                                Detail
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" tabindex="-1" class="modal fade"
                                                id="data{{ $item->id }}" tabindex="-1"
                                                aria-labelledby="data{{ $item->id }}Label" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Detail Aspek</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form action="" method="post">
                                                            @csrf
                                                            @method('POST')
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6 col-xl-8">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Nama Aspek</label>
                                                                            <input type="text" class="form-control"
                                                                                name="nama_aspek"
                                                                                value="{{ $item->nama_aspek }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 col-xl-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Bobot</label>
                                                                            <input type="number" class="form-control"
                                                                                name="bobot"
                                                                                value="{{ $item->bobot }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="reset" class="btn btn-link link-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    Batal
                                                                </button>
                                                                <button type="submit" class="btn btn-primary ms-auto"
                                                                    data-bs-dismiss="modal">
                                                                    Simpan Data
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <form method="POST" action="">
                                                @csrf
                                                <a href="" class="btn btn-outline-danger rounded-3"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                    {{ __('Hapus') }}
                                                </a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td data-label="Name" colspan="6">
                                        <div class="font-weight-medium">Thatcher Keel</div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
