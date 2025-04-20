@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Panel de Administración de Novedades</h1>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('admin.novedades.create') }}" class="btn btn-success">+ Nueva Novedad</a>
        </div>

        @forelse($novedades as $novedad)
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title">{{ $novedad->titulo }}</h4>
                    <p class="card-text">{{ $novedad->contenido }}</p>
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.novedades.edit', $novedad) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('admin.novedades.destroy', $novedad) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta novedad?')">Eliminar</button>
                        </form>
                    </div>
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
