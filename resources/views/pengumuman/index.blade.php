@extends('layouts.main')

@section('css')
    <link rel="stylesheet" href="/css/announcement.css">
@endsection

@section('content')
    <div class="content d-flex flex-column justify-content-between">
        <div class="header">
            <div class="image text-end pt-5">
                <img src="/img/pita-lancip.png" class="panjang">
                <img src="/img/pita-lancip-pendek.png" class="pendek" style="display: none">
            </div>
            <div class="main container d-flex justify-content-between mt-5">
                <div class="left-side d-flex flex-column justify-content-center">
                    <h1 class="poppins pink fw-bold">COMING SOON</h1>
                    <p>Pengumuman kelulusan Open Recruitment HMIF 2023 akan diumukan dalam : </p>
                    <div class="countdown d-flex">
                        <div class="square first">
                            <div class="time" id="days">0</div>
                            <div class="desc">Hari</div>
                        </div>
                        <div class="square">
                            <div class="time" id="hours">0</div>
                            <div class="desc">Jam</div>
                        </div>
                        <div class="square">
                            <div class="time" id="minutes">0</div>
                            <div class="desc">Menit</div>
                        </div>
                        <div class="square">
                            <div class="time" id="seconds">0</div>
                            <div class="desc">Detik</div>
                        </div>
                    </div>
                    <div id="form" class="mt-4"></div>
                </div>
                <div class="right-side text-center">
                    <img src="/img/logo-hmif.png" alt="logo-hmif">
                </div>
            </div>
        </div>
        <div class="footer text-center mt-5 pb-1">
            <h6 class="fw-bold pink">HMIF UNSRI</h6>
            <h6 class="fw-bold purple">Ciptakan Sinergi Bangkitkan Ambisi</h6>
        </div>
    </div>

    @php
        date_default_timezone_set('Asia/Jakarta');
    @endphp
    @if (date(date('Y-m-d H:i:s') >= '2023-02-03 00:00:00'))
        @if (session()->has('message'))
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 purple poppins fw-bold" id="staticBackdropLabel">Pengumuman OPREC HMIF 2023
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {!! session('message') !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            @if (session('isPass') == 1)
                                <a href="https://chat.whatsapp.com/Hy9dba5DVqr4EeGZ3GrFI0" type="button" class="btn bg-purple text-white">Link Group WA</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.3.min.js"
                integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

            <script>
                $(document).ready(function() {
                    $('#staticBackdrop').modal('show');
                });
            </script>
        @endif
    @endif
@endsection

@section('script')
    <script src="/js/announcement.js"></script>
    <script>
        let countDownDate = new Date("Feb 03, 2023 00:00:00").getTime();
        let now = new Date().getTime();

        if (countDownDate - now <= 0) {
            createForm("{{ $token }}");
        } else {
            let x = setInterval(function() {
                now = new Date().getTime();

                let distance = countDownDate - now;

                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor(
                    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                );
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                if (distance <= 0) {
                    clearInterval(x);
                    document.getElementById("days").innerHTML = 0;
                    document.getElementById("hours").innerHTML = 0;
                    document.getElementById("minutes").innerHTML = 0;
                    document.getElementById("seconds").innerHTML = 0;

                    createForm("{{ $token }}");
                }

            }, 1000);
        }
    </script>
@endsection
