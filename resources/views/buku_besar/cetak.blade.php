@extends('layouts.blank')

@section('title')
    Buku Besar - PT. Sumo Warna Indonesia -
    @if($tanggal_mulai != '' && $tanggal_sampai != '')
        {{ fulldate($tanggal_mulai) }} s/d {{ fulldate($tanggal_sampai) }}
    @endif
@endsection

@section('content')
    <h4 class="text-center mb-0">PT. Sumo Warna Indonesia</h4>
    <p class="text-center">Jl. Margomulyo Blok J No. 19, Pergudangan Margomulyo Permai, Surabaya, Jawa Timur - Indonesia<br>email : info.sumowarna@gmail.com</p>
    <h4 class="text-center mb-0">Buku Besar</h4>
    @if($tanggal_mulai != '' && $tanggal_sampai != '')
        <h5 class="text-center mb-0">{{ fulldate($tanggal_mulai) }} &nbsp; s/d &nbsp; {{ fulldate($tanggal_sampai) }}</h5>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <hr>
                @include('buku_besar._table', ['akun' => $akun])
            </div>
        </div>
    </div>
@endsection
