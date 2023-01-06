@extends('layouts.app')

@section('custom_styles')
@endsection

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none d-flex flex-row justify-content-between align-items-center">
            <h2 class="page-title text-white">
                {{ __('Input Penilaian') }}
            </h2>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('audit.store') }}" method="post" enctype="multipart/form-data" class="py-3">
                        @csrf
                        @method('POST')
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label required">Tanggal
                                Penilaian</label>
                            <div class="col">
                                <input type="date" name="tanggal_audit" id="" class="form-control"
                                    value="{{ date('Y-m-d') }}">
                                {{-- <small class="form-hint">We'll never share your email with anyone else.</small> --}}
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label">Uraian Pekerjaan</label>
                            <div class="col">
                                <select class="form-select" name='uraian_id'>
                                    @forelse ($data as $item)
                                        <option value="{{ $item->id }}">{{ $item->teks_uraian }}</option>
                                    @empty
                                        <option value="0" disabled selected>Tidak Ada Uraian</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-3 col-form-label pt-0">Skor Penilaian</label>
                            <div class="col">
                                <input type="number" class="form-control" name="skor">
                            </div>
                        </div>
                        <button type="submit" class="btn w-100 btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
