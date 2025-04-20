@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Novedades del Mundo del Café</h1>

        @forelse($novedades as $novedad)
            <div class="card mb-4 shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title">{{ $novedad->titulo }}</h4>
                    <p class="text-muted mb-2" style="font-size: 0.9rem;">
                        Publicado el {{ $novedad->created_at->format('d/m/Y') }}
                    </p>
                    <p class="card-text">{{ $novedad->contenido }}</p>
                </div>
            </div>
        @empty
            <div class="alert alert-info text-center">
                No hay novedades disponibles por el momento.
            </div>
        @endforelse

        <div class="d-flex justify-content-center mt-4">
            {{ $novedades->links() }}
        </div>

    </div>
@endsection
