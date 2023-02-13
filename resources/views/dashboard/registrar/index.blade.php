@extends('dashboard.layouts.main')

@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body table-responsive">
                        <h5 class="card-title">Calon Staff</h5>

                        @if (count($registrars))
                            <!-- Table -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Divisi 1</th>
                                        <th scope="col">Divisi 2</th>
                                        @can('admin')
                                            <th scope="col">Lulus</th>
                                        @endcan
                                        <th scope="col" style="width: 110px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($registrars as $reg)
                                        <tr>
                                            @if (request('page'))
                                                <th scope="row">{{ $i + (request('page') - 1) * 10 }}</th>
                                            @else
                                                <th scope="row">{{ $i }}</th>
                                            @endif
                                            <td>{{ $reg->name }}</td>
                                            <td>{{ $reg->nim }}</td>
                                            <td>{{ $reg->division1 }}</td>
                                            <td>{{ $reg->division2 }}</td>
                                            @can('admin')
                                                <td class="text-center">{{ $reg->isPass }}</td>
                                            @endcan
                                            <td class="text-center">
                                                <a href="/dashboard/registrar/{{ $reg->id }}" class="badge bg-info"><i
                                                        class="bi bi-eye"></i></a>
                                                @can('admin')
                                                    <a href="/dashboard/registrar/{{ $reg->id }}/edit"
                                                        class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="/dashboard/registrar/{{ $reg->id }}" method="post"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="badge bg-danger border-0"
                                                            onclick="return(alert('Apakah anda yakin?'))"><i
                                                                class="bi bi-trash3"></i></button>
                                                    </form>
                                                @endcan
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        @else
                            <h6 class="text-center">Data tidak ditemukan</h6>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            {{ $registrars->onEachSide(0)->links() }}
        </div>
    </section>
@endsection
