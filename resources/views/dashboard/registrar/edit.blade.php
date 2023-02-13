@extends('dashboard.layouts.main')

@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Calon Staff</h5>
                        <form class="px-3 needs-validation" action="/dashboard/registrar/{{ $registrar->id }}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input maxlength="99" type="text" value="{{ old('name', $registrar->name) }}"
                                    name="name" class="form-control" id="name" placeholder="Nama lengkap" required>
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">Nomor Induk Mahasiswa</label>
                                <input type="text" value="{{ old('nim', $registrar->nim) }}" name="nim"
                                    class="form-control" id="nim" placeholder="Nomor induk mahasiswa" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Angkatan</label>
                                <select name="force" class="form-select" required>
                                    <option disabled selected value="">Pilih angkatan</option>
                                    @foreach ($forces as $force)
                                        @if (old('force', $registrar->force) == $force)
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
                                        @if (old('class', $registrar->class) == $class)
                                            <option value="{{ $class }}" selected>{{ $class }}</option>
                                        @else
                                            <option value="{{ $class }}">{{ $class }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{ old('email', $registrar->email) }}" name="email"
                                    class="form-control" id="email" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Domisili</label>
                                <select name="domicile" class="form-select" required>
                                    <option disabled selected value="">Pilih domisili</option>
                                    @foreach ($domiciles as $domicile)
                                        @if (old('domicile', $registrar->domicile) == $domicile)
                                            <option value="{{ $domicile }}" selected>{{ $domicile }}</option>
                                        @else
                                            <option value="{{ $domicile }}">{{ $domicile }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat Lengkap</label>
                                <textarea maxlength="699" class="form-control" name="address" id="address" rows="3" required>{{ old('address', $registrar->address) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp</label>
                                <input maxlength="24" type="text" value="{{ old('whatsapp', $registrar->whatsapp) }}"
                                    name="whatsapp" class="form-control" id="whatsapp" placeholder="Whatsapp" required>
                            </div>
                            <div class="mb-3">
                                <label for="line" class="form-label">ID Line</label>
                                <input maxlength="29" type="text" value="{{ old('line', $registrar->line) }}"
                                    name="line" class="form-control" id="line" placeholder="Line" required>
                            </div>

                            <h6 class="card-title">Pemilihan divisi</h6>

                            <div class="mb-3">
                                <label class="form-label">Divisi 1</label>
                                <select id="division1" name="division1" class="form-select" required>
                                    <option disabled selected value="">Pilih divisi 1</option>
                                    @foreach ($divisions as $div1)
                                        @if (old('division1', $registrar->division1) == $div1)
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
                                        @if (old('division2', $registrar->division2) == $div2)
                                            <option value="{{ $div2 }}" selected>{{ $div2 }}</option>
                                        @else
                                            <option value="{{ $div2 }}">{{ $div2 }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="main_reason" class="form-label">Alasan bergabung HMIF</label>
                                <textarea class="form-control" name="main_reason" id="main_reason" rows="3" required>{{ old('main_reason', $registrar->main_reason) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="division1_reason" id="division1_reason_label" class="form-label">Alasan
                                    memilih Divisi
                                    1</label>
                                <textarea class="form-control" name="division1_reason" id="division1_reason" rows="3" required>{{ old('division1_reason', $registrar->division1_reason) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="division2_reason" id="division2_reason_label" class="form-label">Alasan
                                    memilih Divisi
                                    2</label>
                                <textarea class="form-control" name="division2_reason" id="division2_reason" rows="3" required>{{ old('division2_reason', $registrar->division2_reason) }}</textarea>
                            </div>

                            <h6 class="card-title">Bukti persyaratan</h6>
                            <div class="mb-3">
                                <label for="twibbon" class="form-label">Link postingan Instagram upload twibbon</label>
                                <input type="text" value="{{ old('twibbon', $registrar->twibbon) }}"
                                    name="twibbon" class="form-control" id="twibbon" placeholder="Link postingan"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="kpm" class="form-label d-block">Kartu Pengenal Mahasiswa (KPM/Sementara).
                                    Maksimal 4MB,
                                    Format :
                                    jpg, jpeg, png</label>
                                <img src="{{ asset("storage/$registrar->kpm") }}" alt="kpm {{ $registrar->name }}"
                                    id="img-preview1" class="img-fluid col-5 mb-3">
                                <input class="form-control" value="{{ old('kpm', $registrar->kpm) }}" name="kpm"
                                    type="file" id="kpm" accept="image/*" onchange="previewKpm()">
                                @error('kpm')
                                    <p class="text-danger mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <h6 class="card-title">Lulus</h6>
                            <div class="mb-3">
                                <label class="form-label" for="isPass">Status lulus</label>
                                <select id="isPass" name="isPass" class="form-select" required>
                                    <option disabled selected>Pilih status lulus</option>
                                    <option value="0" {{ $registrar->isPass == 0 ? 'selected' : '' }}>Tidak lulus
                                    </option>
                                    <option value="1" {{ $registrar->isPass == 1 ? 'selected' : '' }}>Lulus divisi 1
                                    </option>
                                    <option value="2" {{ $registrar->isPass == 2 ? 'selected' : '' }}>Lulus divisi 2
                                    </option>

                                </select>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary border-0 bg-dongker text-white mt-3">
                                    Edit Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
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
    </script>
@endsection
