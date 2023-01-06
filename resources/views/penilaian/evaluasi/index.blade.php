@extends('layouts.app')

@section('custom_styles')
@endsection

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none d-flex flex-row justify-content-between align-items-center">
            <h2 class="page-title text-white">
                {{ __('Uraian Pekerjaan') }}
            </h2>
            <!-- Button trigger modal -->
            <a href="{{ route('audit.create') }}" class="btn btn-orange rounded-3">
                Tambah
            </a>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th>Aspek Penilaian</th>
                                <th>Tanggal</th>
                                <th>Uraian Pekerjaan</th>
                                <th>Skor</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td class="text-muted" data-label="Role">
                                        <span
                                            class="alert alert-{{ $item->uraian->aspek->label }}">{{ $item->uraian->aspek->nama_aspek }}</span>
                                    </td>
                                    <td data-label="Name">
                                        <div class="font-weight-medium">{{ $item->uraian->teks_uraian }}</div>
                                    </td>
                                    <td data-label="Name">
                                        <div class="font-weight-medium">{{ $item->tanggal_audit }}</div>
                                    </td>
                                    <td class="text-muted" data-label="Role">
                                        {{ ucwords($item->skor) }}
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
                                                            <h5 class="modal-title">Edit uraian pekerjaan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form action="" method="post">
                                                            @csrf
                                                            @method('POST')
                                                            <div class="modal-body">
                                                                <div class="row mb-2">
                                                                    <div class="col-12 col-md-6 col-xl-8">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Aspek
                                                                                Penilaian</label>
                                                                            <select name="aspek_id" id=""
                                                                                class='form-select'>
                                                                                <option value="1">Kinerja</option>
                                                                                <option value="1">Pribadi</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-6 col-xl-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Bobot</label>
                                                                            <input type="number" class="form-control"
                                                                                name="bobot" value="{{ $item->bobot }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Uraian Pekerjaan</label>
                                                                    <textarea name="" class="form-control" id="" rows="3">{{ $item->teks_uraian }}</textarea>
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
                                    <td data-label="Name" colspan="4">
                                        <div class="font-weight-medium">Tidak ada data</div>
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
