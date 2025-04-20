<?php

namespace App\Http\Controllers;

use App\Models\Novedad;

/**
 * Controlador para mostrar las novedades públicas en el sitio.
 */
class NovedadController extends Controller
{
    /**
     * Muestra un listado paginado de novedades para los usuarios.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $novedades = Novedad::paginate(5); // Mostramos 5 por página
        return view('novedades', compact('novedades'));
    }
}
