@extends('layouts.app')

@section('title', 'Daftar Dokumen')

@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="font-paytone">Daftar Dokumen</h1>
        <p class="text-muted">Cari dan akses arsip dokumen PKPRI Surakarta dengan mudah.</p>
    </div>

    <!-- Search Form -->
    <form action="{{ route('documents.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Cari dokumen berdasarkan judul...">
            <button class="btn btn-success" type="submit">
                <i class="bi bi-search"></i> Cari
            </button>
        </div>
    </form>

    <!-- Document List -->
    <div class="row g-4">
        @forelse ($documents as $document)
        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h6 class="card-title fw-semibold">
                        {{ $document->title }}
                    </h6>
                    <a href="{{ asset('storage/' . $document->file_path) }}" target="_blank" class="btn btn-outline-success mt-2">
                        <i class="bi bi-file-pdf-fill"></i> Lihat Dokumen
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <p class="text-muted text">Tidak ada dokumen yang ditemukan.</p>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $documents->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection