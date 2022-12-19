@extends('layouts.sideBar')

@section('container')
    <div class="tableCustom">
        <div style="font-size: 64px;font-weight: 500;">Create New Data Summary</div>
        <form method="post" action="/createSummary">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="pb-3">
                        <div class="titleField">Nama Posyandu</div>
                        <div>
                            <input type="text" class="inputFields" name="nama_posyandu" required
                                value="{{ old('nama_posyandu') }}" />
                        </div>
                    </div>
                    @error('nama_posyandu')
                        <div class="validasiError">{{ $message }}</div>
                    @enderror
                    <div class="pb-3">
                        <div class="titleField">Email</div>
                        <div>
                            <input type="text" class="inputFields" name="email" required value="{{ old('email') }}" />
                        </div>
                    </div>
                    @error('email')
                        <div class="validasiError">{{ $message }}</div>
                    @enderror
                    <div class="pb-3">
                        <div class="titleField">Kader</div>
                        <div>
                            <input type="text" class="inputFields" name="kader" required value="{{ old('kader') }}" />
                        </div>
                    </div>
                    @error('kader')
                        <div class="validasiError">{{ $message }}</div>
                    @enderror
                    <div class="pb-3">
                        <div class="titleField">No Handphone</div>
                        <div>
                            <input type="text" class="inputFields" name="no" required value="{{ old('no') }}" />
                        </div>
                    </div>
                    @error('no')
                        <div class="validasiError">{{ $message }}</div>
                    @enderror
                    <div class="pb-3">
                        <div class="titleField">No Telepon</div>
                        <div>
                            <input type="text" class="inputFields" name="no_telp" required
                                value="{{ old('no_telp') }}" />
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
                                    @if (old('id_provinsi') == $dataProvinsi->id)
                                        <option value="{{ $dataProvinsi->id }}" selected>{{ $dataProvinsi->provinsi }}
                                        </option>
                                    @else
                                        <option value="{{ $dataProvinsi->id }}">{{ $dataProvinsi->provinsi }}</option>
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
                                    @if (old('id_kabupaten') == $dataKabupaten->id)
                                        <option value="{{ $dataKabupaten->id }}" selected>{{ $dataKabupaten->kabupaten }}
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
                                    @if (old('id_kecamatan') == $dataKecamatan->id)
                                        <option value="{{ $dataKecamatan->id }}" selected>{{ $dataKecamatan->kecamatan }}
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
                            <textarea id="w3review" class="inputFieldsArea" name="alamat_lengkap">{{ old('alamat_lengkap') }}</textarea>
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
                                value="{{ old('jam_operasi') }}" />
                        </div>
                    </div>
                    @error('jam_operasi')
                        <div class="validasiError">{{ $message }}</div>
                    @enderror
                    <div class="pb-3">
                        <div class="titleField">Link Gambar</div>
                        <div>
                            <input type="text" class="inputFields" name="img" required
                                value="{{ old('img') }}" />
                        </div>
                    </div>
                    @error('img')
                        <div class="validasiError">{{ $message }}</div>
                    @enderror
                    <div class="pb-3">
                        <div class="titleField">Link Google Map</div>
                        <div>
                            <input type="text" class="inputFields" name="map" required
                                value="{{ old('map') }}" />
                        </div>
                    </div>
                    @error('map')
                        <div class="validasiError">{{ $message }}</div>
                    @enderror
                    <div class="pb-3">
                        <div class="titleField">Keteranan</div>
                        <div>
                            <textarea id="w3review" class="inputFieldsArea" name="keterangan"> {{ old('keterangan') }}</textarea>
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
@endsection
