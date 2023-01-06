@extends('layouts.app')

@section('custom_styles')
@endsection

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none d-flex flex-row justify-content-between align-items-center">
            <h2 class="page-title text-white">
                {{ __('Petugas') }}
            </h2>
        </div>
        <div class="page-body">
            <div class="card">
                <div class="card-body"></div>
            </div>
        </div>
    </div>
@endsection
