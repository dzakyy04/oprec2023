@extends('dashboard.layouts.main')

@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h5 class="card-title">Detail</h5>

                        <!-- Table -->
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td colspan="3">
                                        <img src="https://akademik.unsri.ac.id/images/foto_mhs/{{ $registrar->force }}/{{ $registrar->nim }}.jpg"
                                            alt="Foto {{$registrar->name}}" class="pb-3">
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama</th>
                                    <td>:</td>
                                    <td>{{ $registrar->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">NIM</th>
                                    <td>:</td>
                                    <td>{{ $registrar->nim }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Angkatan</th>
                                    <td>:</td>
                                    <td>{{ $registrar->force }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kelas</th>
                                    <td>:</td>
                                    <td>{{ $registrar->class }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>:</td>
                                    <td>{{ $registrar->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Domisili kampus</th>
                                    <td>:</td>
                                    <td>{{ $registrar->domicile }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>:</td>
                                    <td>{{ $registrar->address }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No Whatsapp</th>
                                    <td>:</td>
                                    <td>{{ $registrar->whatsapp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">ID Line</th>
                                    <td>:</td>
                                    <td>{{ $registrar->line }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Divisi 1</th>
                                    <td>:</td>
                                    <td>{{ $registrar->division1 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Divisi 2</th>
                                    <td>:</td>
                                    <td>{{ $registrar->division2 }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alasan masuk HMIF</th>
                                    <td>:</td>
                                    <td>{{ $registrar->main_reason }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alasan memilih divisi 1</th>
                                    <td>:</td>
                                    <td>{{ $registrar->division1_reason }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alasan memilih divisi 2</th>
                                    <td>:</td>
                                    <td>{{ $registrar->division2_reason }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Link postingan twibbon</th>
                                    <td>:</td>
                                    <td>
                                        <a href="{{ $registrar->twibbon }}" target="blank">{{ $registrar->twibbon }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-center">
                                        <strong class="d-block mb-2 text-start">KPM</strong>
                                        <img src="{{ asset("storage/$registrar->kpm") }}" class="card-img-top img-fluid"
                                            alt="kpm {{ $registrar->name }}" style="max-height: 480px; max-width: 270px">
                                            <br>
                                            <a href="{{ asset("storage/$registrar->kpm") }}" target="blank">Lihat KPM</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Status lulus</th>
                                    <td>:</td>
                                    <td>{{ $registrar->isPass == 0 ? 'Tidak lulus' : "Lulus divisi $registrar->isPass" }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>

            <a href="javascript:history.back()">
                <i class="bi bi-arrow-left-square-fill"></i>
                <span>Kembali</span>
            </a>
        </div>
    </section>
@endsection
