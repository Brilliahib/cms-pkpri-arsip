@extends('layouts.app')

@section('title', 'Panduan Penggunaan - Sistem Kearsipan PKPRI Surakarta')

@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="font-paytone">Panduan Penggunaan</h1>
        <p class="text-muted">Berisikan panduan penggunaan sistem kearsipan data.</p>
    </div>

    {{-- Iframe untuk preview PDF --}}
    <div class="mb-4">
        <iframe
            src="{{ asset('images/guidebook.pdf') }}"
            width="100%"
            height="600px"
            style="border: 1px solid #ccc;">
        </iframe>
    </div>

    {{-- Tombol Download --}}
    <div class="text-center">
        <a href="{{ asset('images/guidebook.pdf') }}" download class="btn btn-success">
            Download Panduan
        </a>
    </div>
</div>
@endsection