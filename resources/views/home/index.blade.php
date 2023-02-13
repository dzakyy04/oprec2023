@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="/css/home.css">
@endsection

@section('content')
    <div class="jumbotron py-4" id="about">
        <section class="header d-flex justify-content-between">
            <img src="/img/pita-lancip-pendek-kanan.png" class="ms-5">
            <img src="/img/pita-lancip-pendek.png" class="me-5">
        </section>
        <section class="logo d-flex justify-content-center">
            <img src="/img/logo-hmif.png" alt="">
        </section>
        <section class="content d-flex justify-content-between align-items-center mt-3">
            <img src="/img/pita.png">
            <div class="desc text-center mx-5 p3-5 d-flex flex-column justify-content-center">
                <h2 class="hmif">HMIF</h2>
                <h2 class="oprec">OPEN RECRUITMENT</h2>
                <p class="mt-2">Himpunan Mahasiswa Teknik Informatika alias HMIF adalah sebuah Organisasi Kemahasiswaan
                    khusus Jurusan
                    Teknik Informatika yang bergerak dalam bidang Akademik maupun Non-Akademik yang dapat menjadi wadah bagi
                    para Mahasiswa Jurusan Teknik Informatika</p>
                <div class="button">
                    <a href="/daftar" class="btn btn-pink rounded-5 mt-1">Daftar Sekarang</a>
                    <a href="https://www.canva.com/design/DAFXLZVHVKU/u9cGzRGWYWIO_VcCj6-Ezw/view?website#2:hmif-2023" class="btn btn-purple rounded mt-1" target="blank">Lihat Dinas</a>
                </div>
            </div>
            <img src="/img/pita.png" style="rotate: 180deg;">
        </section>
        <section class="footer text-center mt-5">
            <h6 class="hmif fw-bold">HMIF UNSRI</h6>
            <h6 class="fw-bold jargon">Ciptakan Sinergi Bangkitkan Ambisi</h6>
        </section>
    </div>

    <div class="container">
        <div class="timeline" style="border-radius: 10px">
            <h1 class="text-center fw-bold mt-5 pt-4 mb-3 poppins purple" id="timeline">Timeline OPREC HMIF</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="horizontal-timeline">
                        <ul class="list-inline items">
                            <li class="list-inline-item items-list">
                                <div class="px-4">
                                    <div class="event-date badge bg-info">20 Jan</div>
                                    <h5 class="pt-2 poppins">Pendaftaran</h5>
                                    <p class="text-muted">Pendaftaran dibuka pada tanggal sampai 20 - 27 Januari 2023 pukul
                                        23:59 WIB</p>
                                </div>
                            </li>
                            <li class="list-inline-item items-list">
                                <div class="px-4">
                                    <div class="event-date badge bg-success">28 Jan</div>
                                    <h5 class="pt-2 poppins">Wawancara</h5>
                                    <p class="text-muted">Sesi wawancara dilakukan semi-offline dan terdiri dari 2 tahap,
                                        yaitu wawancara inti dan
                                        wawancara resmi
                                    </p>
                                </div>
                            </li>
                            <li class="list-inline-item items-list">
                                <div class="px-4">
                                    <div class="event-date badge bg-danger">29 Jan</div>
                                    <h5 class="pt-2 poppins">FGD</h5>
                                    <p class="text-muted">Focus Group Discussion dilakukan secara daring melalui media
                                        aplikasi Zoom</p>
                                </div>
                            </li>
                            <li class="list-inline-item items-list">
                                <div class="px-4">
                                    <div class="event-date badge bg-warning">3 Feb</div>
                                    <h5 class="pt-2 poppins">Pengumuman</h5>
                                    <p class="text-muted">Pengumuman akan disampaikan melalui oprec global whatsapp group,
                                        dan website HMIF
                                    </p>
                                </div>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>

        </div>

        {{-- FAQ --}}
        <div class="mt-5" id="faq">
            <div class="accordion" id="myAccordion">
                <h1 class="text-center pt-3 fw-bold poppins purple">Frequently Asked Questions</h1>
                <span></span>
                <p class="text-center">Pertanyaan yang sering ditanyakan disini</p>
            </div>

            <div class="accordion" id="accordionExample" >
                @for ($i = 0; $i < count($faq['questions']); $i++)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $i }}">
                            <button class="accordion-button collapsed"  type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $i }}" aria-expanded="false"
                                aria-controls="collapse{{ $i }}">
                                <strong>{{ $faq['questions'][$i] }}</strong>
                            </button>
                        </h2>
                        <div id="collapse{{ $i }}" class="accordion-collapse collapse"
                            aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>{{ $faq['answers'][$i] }}</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <!-- END FAQ-->
    </div>

    <footer class="bg-purple mt-5">
        <div class="footer-content container d-flex justify-content-between py-3">
            <p class="text-white m-0">&copy; 2023 HMIF UNSRI</p>
            <div class="links">
                <a href="/#navbar" class="text-decoration-none text-white me-3">About</a>
                <a href="/#timeline" class="text-decoration-none text-white me-3">Timeline</a>
                <a href="/#faq" class="text-decoration-none text-white">FAQs</a>
            </div>
        </div>
    </footer>
@endsection
