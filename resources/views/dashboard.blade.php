@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <section class="page-header">
                    <h2>Welcome, {{ auth()->user()->name }}</h2>
                    <h5>Here is the history of blood sugar readings</h5>
                </section>
                <section class="career-section">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Glucose History</h5>
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0 align-middle table-striped">
                                    <thead class="text-dark fs-4">
                                        <tr>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">No.</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Glucose</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Status</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Saran</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Tanggal</h6>
                                            </th>
                                            <th class="border-bottom-0">
                                                <h6 class="fw-semibold mb-0">Jam</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="border-bottom-0 text-center">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="border-bottom-0">
                                                    {{ $item['glucose'] }}
                                                </td>
                                                <td class="border-bottom-0">
                                                    {{ $item['status']}}
                                                </td>
                                                <td class="border-bottom-0">
                                                    {{ $item['saran'] }}
                                                </td>
                                                <td class="border-bottom-0">
                                                    {{ $item['date'] }}
                                                </td>
                                                <td class="border-bottom-0">
                                                    {{ $item['time'] }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection