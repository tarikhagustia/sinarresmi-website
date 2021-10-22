@extends('layouts.master')

@section('content')
    <div class="divider"></div>
    <div class="container">
       @if($code == "ORI")
            <h3 class="text-center">Produk yang anda punya adalah Asli!</h3>
            <div class="text-center">
                <img src="{{ asset('images/sayur.jpeg') }}" class="img-fluid mt-3" width="250">
                <h5 class="mt-3">Sayuran Komplit 500gr</h5>
                <p class="text-muted m-0">Serial Number : 38493SSD931</p>
                <div class="row justify-content-center mt-5">
                    <div class="col-sm-4">
                        <div class="d-flex flex-row justify-content-between">
                            <p>Serial No : </p>
                            <p>38493SSD931</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <p>Nama Produk :</p>
                            <p>Sayur Komplit 500gr</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <p>Tanggal Produksi : </p>
                            <p>02 Januari 2021</p>
                        </div>
                        <div class="d-flex flex-row justify-content-between">
                            <p>Expired Sampai : </p>
                            <p>02 Januari 2021</p>
                        </div>
                    </div>
                </div>
            </div>
       @else
            <h3 class="text-center">Kode Produk tidak terdaftar pada sistem kami</h3>
           <p class="text-muted">Kami mendeteksi bawah kode produk yang ada masukkan tidak valid / palsu. kami himbau untuk mendapatkan produk - produk sinar resmi original dapat didapatkan di gerai - gerai yang terdaftar atau offial online shop kami</p>
    @endif
    </div>
@stop
