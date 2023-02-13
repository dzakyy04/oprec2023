@extends('dashboard.layouts.main')

@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h5 class="card-title">Administrasi</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-1 text-center">No</th>
                                    <th scope="col" class="col-4">Nama</th>
                                    <th scope="col" class="col-7">Lulus di Divisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($adm as $adm)
                                    <tr>
                                        <th class="text-center">{{ $loop->iteration }}</th>
                                        <td>{{ $adm->name }}</td>
                                        <td>{{ $adm->passDivision }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h5 class="card-title">Akademik</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-1 text-center">No</th>
                                    <th scope="col" class="col-4">Nama</th>
                                    <th scope="col" class="col-7">Lulus di Divisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($akademik as $akademik)
                                    <tr>
                                        <th class="text-center">{{ $loop->iteration }}</th>
                                        <td>{{ $akademik->name }}</td>
                                        <td>{{ $akademik->passDivision }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h5 class="card-title">Kastrad</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-1 text-center">No</th>
                                    <th scope="col" class="col-4">Nama</th>
                                    <th scope="col" class="col-7">Lulus di Divisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kastrad as $kastrad)
                                    <tr>
                                        <th class="text-center">{{ $loop->iteration }}</th>
                                        <td>{{ $kastrad->name }}</td>
                                        <td>{{ $kastrad->passDivision }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h5 class="card-title">Kewirausahaan</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-1 text-center">No</th>
                                    <th scope="col" class="col-4">Nama</th>
                                    <th scope="col" class="col-7">Lulus di Divisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kwu as $kwu)
                                    <tr>
                                        <th class="text-center">{{ $loop->iteration }}</th>
                                        <td>{{ $kwu->name }}</td>
                                        <td>{{ $kwu->passDivision }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h5 class="card-title">Kominfo</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-1 text-center">No</th>
                                    <th scope="col" class="col-4">Nama</th>
                                    <th scope="col" class="col-7">Lulus di Divisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kominfo as $kominfo)
                                    <tr>
                                        <th class="text-center">{{ $loop->iteration }}</th>
                                        <td>{{ $kominfo->name }}</td>
                                        <td>{{ $kominfo->passDivision }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h5 class="card-title">PMB</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-1 text-center">No</th>
                                    <th scope="col" class="col-4">Nama</th>
                                    <th scope="col" class="col-7">Lulus di Divisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pmb as $pmb)
                                    <tr>
                                        <th class="text-center">{{ $loop->iteration }}</th>
                                        <td>{{ $pmb->name }}</td>
                                        <td>{{ $pmb->passDivision }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <h5 class="card-title">PSDM</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-1 text-center">No</th>
                                    <th scope="col" class="col-4">Nama</th>
                                    <th scope="col" class="col-7">Lulus di Divisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($psdm as $psdm)
                                    <tr>
                                        <th class="text-center">{{ $loop->iteration }}</th>
                                        <td>{{ $psdm->name }}</td>
                                        <td>{{ $psdm->passDivision }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            {{ $registrars->links() }}
        </div> --}}
    </section>
@endsection
