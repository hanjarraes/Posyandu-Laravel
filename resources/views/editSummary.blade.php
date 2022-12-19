<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title }}</title>
</head>

<body>
    @auth
        <main>
            <div class="d-flex flex-column flex-shrink-0 bg-light custom-sidebar">
                <a href="/dashboard" class="d-flex justify-content-center" style="font-size: 28px;" title="Icon-only"
                    data-bs-toggle="tooltip" data-bs-placement="right">
                    <img src="../img/output-onlinegiftools.gif" alt="icon" width="100">
                </a>
                <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link {{ $title == 'dasboard' ? 'active' : '' }}  py-3 border-bottom"
                            style="font-size: 28px;" aria-current="page" title="Home" data-bs-toggle="tooltip"
                            data-bs-placement="right">
                            <i class="ri-home-3-line"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/posyanduSummary"
                            class="nav-link py-3 border-bottom {{ $title == 'posyanduSummary' ? 'active' : '' }} "
                            title="Dashboard" style="font-size: 28px;" data-bs-toggle="tooltip" data-bs-placement="right">
                            <i class="ri-hospital-line"></i>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#" class="nav-link py-3 border-bottom {{ $title == 'home' ? 'active' : '' }} "
                            title="Orders" style="font-size: 28px;" data-bs-toggle="tooltip" data-bs-placement="right">
                            <i class="ri-user-line"></i>
                        </a>
                    </li> --}}
                </ul>
                <div class="border-top d-flex justify-content-center">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link py-3 logoutBtn" data-bs-toggle="tooltip"
                            data-bs-placement="right">
                            <i class="ri-logout-box-line"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="tableCustom">
                <div style="font-size: 64px;font-weight: 500;">Edit Data Summary</div>
                <form method="post" action="/editData/{{ $idEdit->id }}">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="pb-3">
                                <div class="titleField">Nama Posyandu</div>
                                <div>
                                    <input type="text" class="inputFields" name="nama_posyandu" required
                                        value="{{ old('nama_posyandu', $idEdit->nama_posyandu) }}" />
                                </div>
                            </div>
                            @error('nama_posyandu')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">Email</div>
                                <div>
                                    <input type="text" class="inputFields" name="email" required
                                        value="{{ old('email', $idEdit->email) }}" />
                                </div>
                            </div>
                            @error('email')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">Kader</div>
                                <div>
                                    <input type="text" class="inputFields" name="kader" required
                                        value="{{ old('kader', $idEdit->kader) }}" />
                                </div>
                            </div>
                            @error('kader')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">No Handphone</div>
                                <div>
                                    <input type="text" class="inputFields" name="no" required
                                        value="{{ old('no', $idEdit->no) }}" />
                                </div>
                            </div>
                            @error('no')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">No Telepon</div>
                                <div>
                                    <input type="text" class="inputFields" name="no_telp" required
                                        value="{{ old('no_telp', $idEdit->no_telp) }}" />
                                </div>
                            </div>
                            @error('no_telp')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="pb-3">
                                <div class="titleField">Provinsi</div>
                                <div>
                                    <select type="text" class="inputFields" id="provinsi" name="id_provinsi"
                                        placeholder="Provinsi">
                                        <option value="">-- Select --</option>
                                        @foreach ($provinsiData as $dataProvinsi)
                                            @if (old('id_provinsi', $idEdit->id_provinsi) == $dataProvinsi->id)
                                                <option value="{{ $dataProvinsi->id }}" selected>
                                                    {{ $dataProvinsi->provinsi }}
                                                </option>
                                            @else
                                                <option value="{{ $dataProvinsi->id }}">{{ $dataProvinsi->provinsi }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('id_provinsi')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">Kabupaten</div>
                                <div>
                                    <select type="text" class="inputFields" id="kabupaten" name="id_kabupaten"
                                        placeholder="Kabupaten">
                                        <option value="">-- Select --</option>
                                        @foreach ($kabupatenData as $dataKabupaten)
                                            @if (old('id_kabupaten', $idEdit->id_kabupaten) == $dataKabupaten->id)
                                                <option value="{{ $dataKabupaten->id }}" selected>
                                                    {{ $dataKabupaten->kabupaten }}
                                                </option>
                                            @else
                                                <option value="{{ $dataKabupaten->id }}">{{ $dataKabupaten->kabupaten }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('id_kabupaten')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">Kecamatan</div>
                                <div>
                                    <select type="text" class="inputFields" id="kecamatan" name="id_kecamatan"
                                        placeholder="Kecamatan">
                                        <option value="">-- Select --</option>
                                        @foreach ($kecamatanData as $dataKecamatan)
                                            @if (old('id_kecamatan', $idEdit->id_kecamatan) == $dataKecamatan->id)
                                                <option value="{{ $dataKecamatan->id }}" selected>
                                                    {{ $dataKecamatan->kecamatan }}
                                                </option>
                                            @else
                                                <option value="{{ $dataKecamatan->id }}">{{ $dataKecamatan->kecamatan }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('id_kecamatan')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">Alamat Lengkap</div>
                                <div>
                                    <textarea id="w3review" class="inputFieldsArea" name="alamat_lengkap">{{ old('alamat_lengkap', $idEdit->alamat_lengkap) }}</textarea>
                                </div>
                            </div>
                            @error('alamat_lengkap')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="pb-3">
                                <div class="titleField">Jam Operasi</div>
                                <div>
                                    <input type="text" class="inputFields" name="jam_operasi" required
                                        value="{{ old('jam_operasi', $idEdit->jam_operasi) }}" />
                                </div>
                            </div>
                            @error('jam_operasi')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">Link Gambar</div>
                                <div>
                                    <input type="text" class="inputFields" name="img" required
                                        value="{{ old('img', $idEdit->img) }}" />
                                </div>
                            </div>
                            @error('img')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">Link Google Map</div>
                                <div>
                                    <input type="text" class="inputFields" name="map" required
                                        value="{{ old('map', $idEdit->map) }}" />
                                </div>
                            </div>
                            @error('map')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                            <div class="pb-3">
                                <div class="titleField">Keteranan</div>
                                <div>
                                    <textarea id="w3review" class="inputFieldsArea" name="keterangan"> {{ old('keterangan', $idEdit->keterangan) }}</textarea>
                                </div>
                            </div>
                            @error('keterangan')
                                <div class="validasiError">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="/posyanduSummary" class="btn btnCreateData  d-flex align-items-center px-3"> <i
                                class="ri-arrow-go-back-line"></i></a>
                        <button class="btn btnCreateData" style="font-size: 24px;" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    @endauth
</body>

</html>
