@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="fw-bold text-center">About Me</h1>
                <img src="{{ asset('foto.jpg') }}" alt="Foto Profil" class="rounded-2 d-block mx-auto mt-5"
                     width="200px">
                <div class="d-flex flex-column mt-5">
                    <div class="font-monospace" style="font-size: 16px;">
                        <p>Nama Lengkap: <span class="fw-bold">Henry Salim</span></p>
                        <p>Usia: <span class="fw-bold">17 tahun</span></p>
                        <p>Agama: <span class="fw-bold">Buddha</span></p>
                        <p>Pendidikan: <span class="fw-bold">SMKS Cinta Kasih Tzu Chi</span></p>
                        <p>Alamat: <span class="fw-bold">Villa Taman Bandara Blok G4/4, Tangerang, Banten</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
