@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="text-center">

            <h1 class="display-4 fw-bold text-primary mb-3">Bienvenidos a Jetinno</h1>
            <p class="lead text-muted">
                Jetinno es una empresa innovadora dedicada a la fabricación de <strong>máquinas de café inteligentes, automáticas y conectadas</strong>.
                Descubrí la mejor tecnología en vending, diseño elegante y experiencia de usuario premium.
            </p>

            <hr class="my-5" style="border-top: 2px solid #ccc; width: 60%; margin: auto;">

            <div class="mt-5">
                <a href="{{ url('/productos') }}" class="btn btn-primary btn-lg me-3">Explorar Productos</a>
                <a href="{{ url('/novedades') }}" class="btn btn-outline-secondary btn-lg">Últimas Novedades</a>
            </div>
        </div>
    </div>
@endsection
