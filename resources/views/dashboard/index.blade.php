@extends('dashboard.layouts.main')

@section('main')
    <div class="row d-flex justify-content-center">
        <div class="card mx-2" style="width: 18rem;">
            <a href="/dashboard/registrar">
                <div class="card-body">
                    <h5 class="card-title">Pendaftar</h5>
                    <div class="d-flex align-items-center">
                        <p class="card-subtitle square bg-dongker text-white"><i class="bi bi-people-fill"></i></p>
                        <h5 class="card-subtitle ms-2">{{ $registrars }} Orang</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <a href="/dashboard/passregistrars">
                <div class="card-body">
                    <h5 class="card-title">Pendaftar Diterima</h5>
                    <div class="d-flex align-items-center">
                        <p class="card-subtitle square text-white" style="background-color: blueviolet"><i
                                class="bi bi-people-fill"></i></p>
                        <h5 class="card-subtitle ms-2">{{ $isPass }} Orang</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <a href="/dashboard/registrar?search=Administrasi">
                <div class="card-body">
                    <h5 class="card-title">Administrasi</h5>
                    <div class="d-flex align-items-center">
                        <p class="card-subtitle square bg-primary text-white"><i class="bi bi-people-fill"></i></p>
                        <h5 class="card-subtitle ms-2">{{ $administrasi }} Orang</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <a href="/dashboard/registrar?search=Akademik">
                <div class="card-body">
                    <h5 class="card-title">Akademik</h5>
                    <div class="d-flex align-items-center">
                        <p class="card-subtitle square bg-warning text-white"><i class="bi bi-people-fill"></i></p>
                        <h5 class="card-subtitle ms-2">{{ $akademik }} Orang</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <a href="/dashboard/registrar?search=Kajian Strategi dan Advokasi ">
                <div class="card-body">
                    <h5 class="card-title">Kastrad</h5>
                    <div class="d-flex align-items-center">
                        <p class="card-subtitle square bg-danger text-white"><i class="bi bi-people-fill"></i></p>
                        <h5 class="card-subtitle ms-2">{{ $kastrad }} Orang</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <a href="/dashboard/registrar?search=Kewirausahaan">
                <div class="card-body">
                    <h5 class="card-title">KWU</h5>
                    <div class="d-flex align-items-center">
                        <p class="card-subtitle square bg-success text-white"><i class="bi bi-people-fill"></i></p>
                        <h5 class="card-subtitle ms-2">{{ $kwu }} Orang</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <a href="/dashboard/registrar?search=Komunikasi dan Informasi">
                <div class="card-body">
                    <h5 class="card-title">Kominfo</h5>
                    <div class="d-flex align-items-center">
                        <p class="card-subtitle square bg-info text-white"><i class="bi bi-people-fill"></i></p>
                        <h5 class="card-subtitle ms-2">{{ $kominfo }} Orang</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <a href="/dashboard/registrar?search=Pengembangan Minat dan Bakat">
                <div class="card-body">
                    <h5 class="card-title">PMB</h5>
                    <div class="d-flex align-items-center">
                        <p class="card-subtitle square bg-dark text-white"><i class="bi bi-people-fill"></i></p>
                        <h5 class="card-subtitle ms-2">{{ $pmb }} Orang</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="card mx-2" style="width: 18rem;">
            <a href="/dashboard/registrar?search=Pengembangan Sumber Daya Manusia">
                <div class="card-body">
                    <h5 class="card-title">PSDM</h5>
                    <div class="d-flex align-items-center">
                        <p class="card-subtitle square bg-secondary text-white"><i class="bi bi-people-fill"></i></p>
                        <h5 class="card-subtitle ms-2">{{ $psdm }} Orang</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
