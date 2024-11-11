@extends('layouts.app-admin')
@section('title', 'Nilai Test | Protech')

@section('content')

<div class="container px-10 py-5">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
                <h1 class="page-header-title">Nilai Test</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{route('dashboard.dashboard.index')}}">Dashboard</a></li>
                        <li class="breadcrumb-item text-muted" aria-current="page">Nilai Test</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
    <div class="separator my-5"></div>

    <div class="card card-p-2 card-flush">
        <div class="card-header align-items-center pt-5 gap-2 gap-md-5">
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon fs-1 position-absolute ms-4"><i class="bi bi-search fs-2"></i></span>
                    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Cari Video" />
                </div>
                <!--end::Search-->
                <!--begin::Export buttons-->
                <div id="kt_datatable_example_1_export" class="d-none"></div>
                <!--end::Export buttons-->
            </div>
        </div>
        <div class="card-body">
            <style>
                /* Ensures all table cells have solid borders */
                #kt_datatable_example th, #kt_datatable_example td {
                    border: 1px solid #fff !important;
                }
            </style>
            <table class="table align-middle table-striped table-bordered fs-6 g-5 px-5" id="kt_datatable_example">
                <thead class="bg-primary">
                    <tr class="text-start text-light fw-bold fs-7 text-uppercase">
                        <th class="min-w-200px align-middle text-light" rowspan="2">Nama</th>
                        <th class="text-center text-light" colspan="4">Pre-Test</th>
                        <th class="text-center text-light" colspan="4">Post-Test</th>
                    </tr>
                    <tr class="text-start fw-bold fs-7 text-uppercase">
                        <th class="min-w-50px text-center text-light">1</th>
                        <th class="min-w-50px text-center text-light">2</th>
                        <th class="min-w-50px text-center text-light">3</th>
                        <th class="min-w-50px text-center text-light">4</th>
                        <th class="min-w-50px text-center text-light">1</th>
                        <th class="min-w-50px text-center text-light">2</th>
                        <th class="min-w-50px text-center text-light">3</th>
                        <th class="min-w-50px text-center text-light">4</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($grades as $index => $row)
                        <tr>
                            <td class="align-middle">{{ $row['name'] }}</td>
                            <td class="text-center">{{ $row['pre_1'] }}</td>
                            <td class="text-center">{{ $row['pre_2'] }}</td>
                            <td class="text-center">{{ $row['pre_3'] }}</td>
                            <td class="text-center">{{ $row['pre_4'] }}</td>
                            <td class="text-center">{{ $row['post_1'] }}</td>
                            <td class="text-center">{{ $row['post_2'] }}</td>
                            <td class="text-center">{{ $row['post_3'] }}</td>
                            <td class="text-center">{{ $row['post_4'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>




    </div>
</div>
@endsection

@section('scripts')
@endsection
