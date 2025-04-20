<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Novedad;

/**
 * Controlador para la administración de novedades en el panel de administrador.
 */
class NovedadesController extends Controller
{
    /**
     * Aplica el middleware de autenticación.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Muestra una lista paginada de todas las novedades.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $novedades = Novedad::paginate(5);
        return view('admin.novedades.index', compact('novedades'));
    }

    /**
     * Muestra el formulario para crear una nueva novedad.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.novedades.create');
    }

    /**
     * Guarda una nueva novedad en la base de datos.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        Novedad::create($request->only(['titulo', 'contenido']));

        return redirect()->route('admin.novedades.index')->with('success', 'Novedad creada');
    }

    /**
     * Muestra el formulario para editar una novedad existente.
     *
     * @param \App\Models\Novedad $novedad
     * @return \Illuminate\View\View
     */
    public function edit(Novedad $novedad)
    {
        return view('admin.novedades.edit', compact('novedad'));
    }

    /**
     * Actualiza una novedad existente en la base de datos.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Novedad $novedad
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Novedad $novedad)
    {
        $request->validate([
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        $novedad->update($request->only(['titulo', 'contenido']));

        return redirect()->route('admin.novedades.index')->with('success', 'Actualizada');
    }

    /**
     * Elimina una novedad de la base de datos.
     *
     * @param \App\Models\Novedad $novedad
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Novedad $novedad)
    {
        $novedad->delete();

        return redirect()->route('admin.novedades.index')->with('success', 'Eliminada');
    }
}
