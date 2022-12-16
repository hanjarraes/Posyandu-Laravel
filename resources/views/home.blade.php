@extends('layouts.main')

@section('container')
    <div class="container mb-4 px-0">
        @if (!$trigger)
            <form action="/" method="get">
                <div style="height: 60vh;" class="d-flex align-items-center flex-column justify-content-center">
                    <img src="img/output-onlinegiftools.gif" alt="icon" width="200">
                    <div class="titleHome d-flex align-items-center">
                        Search Posyandu
                    </div>
                    <div style="width: 850px; z-index: 100;">
                        <div class="input-group">
                            <div class="form-control searchInputIcon">
                                <i class="ri-search-line"></i>
                                <input type="text" placeholder="Search Your Posyandu ....." aria-label="Search"
                                    aria-describedby="search-addon" name="search" value="{{ request('search') }}" />
                            </div>
                        </div>
                        <div class="group-dropdown">
                            <select type="text" class="desainDropdown mx-2" id="provinsi" name="provinsi"
                                placeholder="Provinsi">
                                <option value="">Provinsi</option>
                                @foreach ($provinsiData as $dataProvinsi)
                                    @if (old('id_provinsi') == $dataProvinsi->id)
                                        <option value="{{ $dataProvinsi->id }}" selected>{{ $dataProvinsi->provinsi }}
                                        </option>
                                    @else
                                        <option value="{{ $dataProvinsi->id }}">{{ $dataProvinsi->provinsi }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <select type="text" class="desainDropdown mx-2" id="kabupaten" name="kabupaten"
                                placeholder="Kabupaten">
                                <option value="">Kabupaten</option>
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
                            <select type="text" class="desainDropdown mx-2" id="kecamatan" name="kecamatan"
                                placeholder="Kecamatan">
                                <option value="">Kecamatan</option>
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
                </div>
            </form>
        @else
            <form action="/">
                <div style="height: 90vh;">
                    <div style="width: 1050px;" class="pt-2">
                        <div class="d-flex align-items-end">
                            <div class="input-group pe-3">
                                <div class="form-control searchInputIcon" style="z-index: 100;">
                                    <i class="ri-search-line"></i>
                                    <input type="text" placeholder="Search Your Posyandu ....." aria-label="Search"
                                        aria-describedby="search-addon" name="search" value="{{ request('search') }}" />
                                </div>
                            </div>
                            <div class="group-dropdown">
                                <select type="text" class="desainDropdown mx-2" id="provinsi" name="provinsi"
                                    placeholder="Provinsi">
                                    <option value="">Provinsi</option>
                                    @foreach ($provinsiData as $dataProvinsi)
                                        @if (old('id_provinsi') == $dataProvinsi->id)
                                            <option value="{{ $dataProvinsi->id }}" selected>{{ $dataProvinsi->provinsi }}
                                            </option>
                                        @else
                                            <option value="{{ $dataProvinsi->id }}">{{ $dataProvinsi->provinsi }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <select type="text" class="desainDropdown mx-2" id="kabupaten" name="kabupaten"
                                    placeholder="Kabupaten">
                                    <option value="">Kabupaten</option>
                                    @foreach ($kabupatenData as $dataKabupaten)
                                        @if (old('id_kabupaten') == $dataKabupaten->id)
                                            <option value="{{ $dataKabupaten->id }}" selected>
                                                {{ $dataKabupaten->kabupaten }}
                                            </option>
                                        @else
                                            <option value="{{ $dataKabupaten->id }}">{{ $dataKabupaten->kabupaten }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                <select type="text" class="desainDropdown mx-2" id="kecamatan" name="kecamatan"
                                    placeholder="Kecamatan">
                                    <option value="">Kecamatan</option>
                                    @foreach ($kecamatanData as $dataKecamatan)
                                        @if (old('id_kecamatan') == $dataKecamatan->id)
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
                    </div>
                    <div class="d-flex justify-content-around flex-wrap pt-3">
                        @if ($posyandu->count())
                            @foreach ($posyandu as $data)
                                <div class="cardComponent">
                                    <figure class="card__thumb m-2">
                                        <img src="{{ $data->img }}" alt="Picture by Kyle Cottrell" class="card__image">
                                        <figcaption class="card__caption">
                                            <h2 class="card__title">{{ $data->nama_posyandu }}</h2>
                                            <p class="card__snippet">{{ $data->alamat_lengkap }}</p>
                                            <p class="card__snippet">{{ $data->jam_operasi }}</p>
                                            <button type="button" class="card__button" data-bs-toggle="modal"
                                                data-bs-target="#ModalDetail{{ $data->id }}">Read more</button>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="modal fade" id="ModalDetail{{ $data->id }}" tabindex="-1"
                                    aria-labelledby="ModalDetail{{ $data->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                        <div class="modal-content" style="background: #d8e1e3; border-radius: 20px;">
                                            <div class="modal-header modal-header-detail">
                                                <h5 class="modal-title" id="ModalDetail{{ $data->id }}Label">
                                                    {{ $data->nama_posyandu }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" />
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex">
                                                    <div class="cardComponent">
                                                        <figure class="card__thumb m-2">
                                                            <img src="{{ $data->img }}" alt="Picture by Kyle Cottrell"
                                                                class="card__image">
                                                        </figure>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="modalCardTitle mb-3">
                                                            {{ $data->nama_posyandu }}
                                                            <a href="{{ $data->map }}" target="_blank"><i
                                                                    class="ri-road-map-line"></i></a>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div>
                                                                <div class="d-flex">
                                                                    <div class="modalCardContentField">Kader </div>
                                                                    <div>{{ $data->kader }}</div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="modalCardContentField">Email </div>
                                                                    <div>{{ $data->email }}</div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="modalCardContentField">No </div>
                                                                    <div>{{ $data->no }}</div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="modalCardContentField">No Telepon </div>
                                                                    <div>{{ $data->no_telp }}</div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="modalCardContentField">Alamat Lengkap
                                                                    </div>
                                                                    <div>{{ $data->alamat_lengkap }}</div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="modalCardContentField">Jam Operasi</div>
                                                                    <div>{{ $data->jam_operasi }}</div>
                                                                </div>
                                                                <div class="d-flex">
                                                                    <div class="modalCardContentField">Keterangan</div>
                                                                    <div>{{ $data->keterangan }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p class="text-center fs-4">No post found.</p>
                        @endif
                    </div>
                </div>
            </form>
        @endif
    </div>
@endsection
