@extends('layouts.main')

@section('css')
    <style>
        .container form {
            background-color: white;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h1 class="fw-bold poppins">Lembar Pendaftaran</h1>
                <p class="text-secondary mt-3">Silahkan isi formulir dengan baik dan benar</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form class="container py-5 rounded-3 needs-validation" action="/daftar" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <h6 class="fw-bold mb-4 text-center">Biodata Diri</h6>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input maxlength="99" type="text" value="{{ old('name') }}" name="name" class="form-control"
                            id="name" placeholder="Nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" value="{{ old('nim') }}" name="nim"
                            class="form-control @error('nim') is-invalid @enderror" id="nim"
                            placeholder="Nomor induk mahasiswa" required>
                        @error('nim')
                            <p class="text-danger mt-1">{{ $message }}</p>
                            <strong>Silahkan bergabung di grub whatsapp global, dinas pilihan 1, dan dinas pilihan 2. Link : <a href="https://linktr.ee/OPREC_HMIF23">Group Whatsapp</a></strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Angkatan</label>
                        <select name="force" class="form-select" required>
                            <option disabled selected value="">Pilih angkatan</option>
                            @foreach ($forces as $force)
                                @if (old('force') == $force)
                                    <option value="{{ $force }}" selected>{{ $force }}</option>
                                @else
                                    <option value="{{ $force }}">{{ $force }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select name="class" class="form-select" required>
                            <option disabled selected value="">Pilih kelas</option>
                            @foreach ($classes as $class)
                                @if (old('class') == $class)
                                    <option value="{{ $class }}" selected>{{ $class }}</option>
                                @else
                                    <option value="{{ $class }}">{{ $class }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                            id="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="domicile" class="form-label">Domisili Kampus</label>
                        <select name="domicile" class="form-select" required id="domicile">
                            <option disabled selected value="">Pilih domisili</option>
                            @foreach ($domiciles as $domicile)
                                @if (old('domicile') == $domicile)
                                    <option value="{{ $domicile }}" selected>{{ $domicile }}</option>
                                @else
                                    <option value="{{ $domicile }}">{{ $domicile }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Lengkap</label>
                        <textarea maxlength="699" class="form-control" name="address" id="address" rows="3" required>{{ old('address') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="whatsapp" class="form-label">Nomor Whatsapp</label>
                        <input maxlength="24" type="number" value="{{ old('whatsapp') }}" name="whatsapp"
                            class="form-control" id="whatsapp" placeholder="Nomor Whatsapp" required>
                    </div>
                    <div class="mb-5">
                        <label for="line" class="form-label">ID Line</label>
                        <input maxlength="29" type="text" value="{{ old('line') }}" name="line"
                            class="form-control" id="line" placeholder="Line" required>
                    </div>

                    <h6 class="fw-bold mb-4">Pemilihan divisi</h6>

                    <div class="mb-3">
                        <label class="form-label">Divisi 1</label>
                        <select id="division1" name="division1" class="form-select" required>
                            <option disabled selected value="">Pilih divisi 1</option>
                            @foreach ($divisions as $div1)
                                @if (old('division1') == $div1)
                                    <option value="{{ $div1 }}" selected>{{ $div1 }}</option>
                                @else
                                    <option value="{{ $div1 }}">{{ $div1 }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Divisi 2</label>
                        <select id="division2" name="division2" class="form-select" required>
                            <option disabled selected value="">Pilih divisi 2</option>
                            @foreach ($divisions as $div2)
                                @if (old('division2') == $div2)
                                    <option value="{{ $div2 }}" selected>{{ $div2 }}</option>
                                @else
                                    <option value="{{ $div2 }}">{{ $div2 }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="main_reason" class="form-label">Alasan bergabung HMIF</label>
                        <textarea class="form-control" name="main_reason" id="main_reason" rows="3" required>{{ old('main_reason') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="division1_reason" id="division1_reason_label" class="form-label">Alasan memilih
                            Divisi
                            1</label>
                        <textarea class="form-control" name="division1_reason" id="division1_reason" rows="3" required>{{ old('division1_reason') }}</textarea>
                    </div>

                    <div class="mb-5">
                        <label for="division2_reason" id="division2_reason_label" class="form-label">Alasan memilih
                            Divisi
                            2</label>
                        <textarea class="form-control" name="division2_reason" id="division2_reason" rows="3" required>{{ old('division2_reason') }}</textarea>
                    </div>

                    <h6 class="fw-bold mb-3">Bukti persyaratan</h6>

                    <div class="mb-3">
                        <label for="twibbon" class="form-label">Link postingan Instagram upload twibbon. Link : <a
                                href="https://www.twibbonize.com/oprechmif2023" target="blank">Twibbon OPREC HMIF 2023</a><br>
                                Note : Akun ig jangan di private dan jangan lupa tag ig @hmif.unsri</label>
                        <textarea class="form-control" name="twibbon" id="twibbon" rows="3" required>{{ old('twibbon') }}</textarea>
                    </div>

                    <div class="mb-5">
                        <label for="kpm" class="form-label">Kartu Pengenal Mahasiswa (KPM/Sementara). Maksimal 4MB,
                            Format :
                            jpg, jpeg, png.</label>
                        <img class="img-fluid col-5 mb-3" id="img-preview1" style="display: none">
                        <input class="form-control" value="{{ old('kpm') }}" name="kpm" type="file"
                            id="kpm" accept="image/*" onchange="previewKpm()" required>
                        @error('kpm')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-check mb-5">
                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                        <label class="form-check-label text-secondary" for="invalidCheck">
                            Saya sudah membaca persyaratan dan menerima untuk mengikuti semua rangkaian acara pendaftaran
                            staff
                            HMIF UNSRI.
                        </label>
                        <div class="invalid-feedback mt-2">
                            Kamu harus setuju sebelum mengirimkan formulir pendaftaran
                        </div>
                    </div>

                    <button type="submit" class="btn text-white bg-purple">
                        Kirim
                    </button>
                </form>
            </div>
        </div>
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

@section('script')
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        const division1 = document.getElementById("division1");
        const division2 = document.getElementById("division2");

        const division1Reason = document.getElementById("division1_reason_label");
        const division2Reason = document.getElementById("division2_reason_label");

        division1.addEventListener("change", function(event) {
            console.info(division1.value);
            division1Reason.innerText = `Alasan memilih ${division1.value}`;
        })

        division2.addEventListener("change", function(event) {
            division2Reason.innerText = `Alasan memilih Divisi ${division2.value}`;
        })

        function previewKpm() {
            const kpm = document.querySelector("#kpm");
            const imgPreview1 = document.querySelector("#img-preview1");

            imgPreview1.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(kpm.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview1.src = oFREvent.target.result;
            }
        }

        function previewTwibbon() {
            const twibbon = document.querySelector("#twibbon");
            const imgPreview2 = document.querySelector("#img-preview2");

            imgPreview2.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(twibbon.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview2.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
