@extends('template.admin')
 
@section('title', 'Penjualan')
@section('content')

{{-- modal laporan motor --}}
@foreach ($motor as $lmotor)
<div class="modal fade" id="modal-lmotor{{$lmotor->id}}">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Keuangan Motor</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body table-responsive">
            <table class="table table-borderless">
            <tr>
                <td>Mesin : {{$lmotor->mesin}}</td>
                <td>Tahun Keluaran : {{$lmotor->kendaraan->tahun_keluaran}}</td>
            </tr>
            <tr>
                <td>Tipe Suspensi : {{$lmotor->tipe_suspensi}}</td>
                <td>Warna : {{$lmotor->kendaraan->warna}}</td>
            </tr>
            <tr>
                <td>Tipe Transmisi : {{$lmotor->tipe_transmisi}}</td>
                <td>Harga : {{$lmotor->kendaraan->harga}}</td>
            </tr>
            <tr>
                <td>Waktu Pembelian : {{Carbon\Carbon::parse($lmotor->updated_at)->format('l, j F Y H:i') ?? '' }}</td>
            </tr>
            </table>
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- modal laporan mobil --}}
@foreach ($mobil as $lmobil)
<div class="modal fade" id="modal-lmobil{{$lmobil->id}}">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Laporan Keuangan Mobil</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body table-responsive">
            <table class="table table-borderless">
            <tr>
                <td>Mesin : {{$lmobil->mesin}}</td>
                <td>Tahun Keluaran : {{$lmobil->kendaraan->tahun_keluaran}}</td>
            </tr>
            <tr>
                <td>Kapasitas Penumpang : {{$lmobil->kapasitas_penumpang}}</td>
                <td>Warna : {{$lmobil->kendaraan->warna}}</td>
            </tr>
            <tr>
                <td>Tipe Mobil : {{$lmobil->tipe}}</td>
                <td>Harga : {{$lmobil->kendaraan->harga}}</td>
            </tr>
            <tr>
                <td>Waktu Pembelian : {{Carbon\Carbon::parse($lmobil->updated_at)->format('l, j F Y H:i') ?? '' }}</td>
            </tr>
            </table>
            </div>
        </div>
    </div>
</div>
@endforeach

<div>
    <h1>Penjualan Kendaraan</h1>

    <div class="container">
        {{-- Table Motor --}}
        <div class="card border-0 shadow-lg mb-4">
            <div class="card-header bg-success">
                <h6 class="m-0  text-white">Penjualan Motor</h6>
            </div>
            <div class="card-body ">
                <table class="table table-borderless table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mesin</th>
                            <th>Tipe Suspensi</th>
                            <th>Tipe Transmisi</th>
                            <th>Tahun Keluaran</th>
                            <th>Warna</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($motor as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->mesin}}</td>
                            <td>{{$item->tipe_suspensi}}</td>
                            <td>{{$item->tipe_transmisi}}</td>
                            <td>{{$item->kendaraan->tahun_keluaran}}</td>
                            <td>{{$item->kendaraan->warna}}</td>
                            <td>{{$item->kendaraan->harga}}</td>
                            <td>
                                 <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal-lmotor{{$item->id}}">
                                    <i class="fa fa-info" aria-hidden="true"></i> Detail
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        {{-- Table mobil --}}
        <div class="card border-0 shadow-lg mb-4">
            <div class="card-header bg-success">
                <h6 class="m-0  text-white">Penjualan mobil</h6>
            </div>
            <div class="card-body ">
                <table class="table table-borderless table-hover text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mesin</th>
                            <th>Kapasitas Penumpang</th>
                            <th>Tipe</th>
                            <th>Tahun Keluaran</th>
                            <th>Warna</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mobil as $mobil)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$mobil->mesin}}</td>
                            <td>{{$mobil->kapasitas_penumpang}}</td>
                            <td>{{$mobil->tipe}}</td>
                            <td>{{$mobil->kendaraan->tahun_keluaran}}</td>
                            <td>{{$mobil->kendaraan->warna}}</td>
                            <td>{{$mobil->kendaraan->harga}}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modal-lmobil{{$mobil->id}}">
                                   <i class="fa fa-info" aria-hidden="true"></i> Detail
                               </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection