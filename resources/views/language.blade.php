@extends('layouts.app')

@section('content')
    <div class="container pb-5 ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="fw-bold text-center">My Language</h1>
                <img src="{{ asset('language.jpg') }}" class="rounded-2 d-block mx-auto mt-5"
                     width="400px" alt="CKTC">
                <div class="d-flex flex-md-row flex-sm-column justify-content-between mt-5 rounded-4 p-3" style="background-color: #e2e8f0">
                        <img src="{{ asset('indonesia.png') }}" alt="Indonesia Flag" width="200px" class="rounded-2">
                        <img src="{{ asset('english.webp') }}" alt="UK Flag" width="200px" class="rounded-2">
                </div>
            </div>
        </div>
    </div>
@endsection
