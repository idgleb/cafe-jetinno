@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4 text-center">Máquinas de Café Jetinno</h1>

        <form method="GET" action="{{ url('/productos') }}" class="mb-4">
            <div class="row g-2 align-items-end">
                <div class="col-md-4">
                    <label for="categoria" class="form-label">Filtrar por categoría:</label>
                    <select name="categoria" id="categoria" class="form-select select-elegante">
                        <option value="">Todas</option>
                        @foreach($categorias as $cat)
                            <option value="{{ $cat->id }}" {{ request('categoria') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </form>

        @if($productos->isEmpty())
            <div class="alert alert-warning text-center">
                No se encontraron productos para esta categoría.
            </div>
        @endif

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($productos as $producto)
                <div class="col">
                    <div class="card h-100 shadow-sm pt-3">

                        <img src="{{ asset('img/' . $producto->img) }}" class="card-img-top"
                             alt="{{ $producto->nombre }}" style="max-height: 300px; width: auto; margin: auto; object-fit: contain;">

                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-subtitle text-muted mb-2">
                                Categoría: {{ $producto->categoria->nombre ?? 'Sin categoría' }}
                            </p>

                            <p class="card-text">{{ $producto->caracteristicas }}</p>
                        </div>
                        <div class="card-footer text-muted">
                            <p class="mb-1"><strong>Precio:</strong> ${{ $producto->precio }}</p>
                            <p class="mb-0"><strong>Stock:</strong> {{ $producto->stock }}</p>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $productos->links() }}
        </div>
    </div>
@endsection
