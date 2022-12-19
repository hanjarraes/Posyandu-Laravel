@extends('layouts.sideBar')

@section('container')
    <div class="tableCustom">
        @if (session()->has('success'))
            <div class="alert alert-primary">{{ session('success') }}</div>
        @endif
        <div class="d-flex justify-content-between align-items-start">
            <div style="width: 500px;">
                <form action="/posyanduSummary" method="get">
                    <div class="input-group">
                        <div class="form-control searchInputIcon">
                            <i class="ri-search-line"></i>
                            <input type="text" placeholder="Search Your Posyandu ....." aria-label="Search"
                                aria-describedby="search-addon" name="search" value="{{ request('search') }}" />
                        </div>
                    </div>
                </form>
            </div>
            <a href="createSummary" class="btn btnCreateData">Create New Data</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama Posyandu</th>
                    <th scope="col">Email</th>
                    <th scope="col">no Telepon</th>
                    <th scope="col">Kader</th>
                    <th scope="col">Jam Operasi</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posyandu as $data)
                    <tr>
                        <td>{{ $data->nama_posyandu }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->no_telp }}</td>
                        <td>{{ $data->kader }}</td>
                        <td>{{ $data->jam_operasi }}</td>
                        <td class="d-flex">
                            <i class="ri-eye-line" data-bs-toggle="modal"
                                data-bs-target="#ModalDetail{{ $data->id }}"></i>
                            <form action="editData/{{ $data->id }}">
                                <button type="submit" style="background-color: transparent;border: none;outline: none;">
                                    <i class="ri-pencil-line ml-3"></i>
                                </button>
                            </form>
                            <form action="/posyanduSummary/{{ $data->id }}" method="get">
                                @csrf
                                <button type="submit" style="background-color: transparent;border: none;outline: none;"
                                    onclick="return confirm('are you sure?')">
                                    <i class="ri-delete-bin-5-line"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <div class="modal fade" id="ModalDetail{{ $data->id }}" tabindex="-1"
                        aria-labelledby="ModalDetail{{ $data->id }}Label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content" style="background: #d8e1e3; border-radius: 20px;">
                                <div class="modal-header modal-header-detail">
                                    <h5 class="modal-title" id="ModalDetail{{ $data->id }}Label">
                                        {{ $data->nama_posyandu }}
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" />
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
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {{ $posyandu->links() }}
        </div>
    </div>
@endsection
