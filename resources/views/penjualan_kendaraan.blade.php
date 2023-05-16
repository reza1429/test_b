@extends('template.admin')
 
@section('title', 'Penjualan')
@section('content')
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
                            <th>Tanggal Keluaran</th>
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
                                <a href="{{ route('stok.updatemotor', $item->id)  }}" class="btn btn-sm btn-outline-primary">Laporan Motor</a>
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
                            <th>Tanggal Keluaran</th>
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
                            <a href="{{ route('stok.updatemobil', $mobil->id)  }}" class="btn btn-sm btn-outline-primary">Laporan Mobil</a>
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