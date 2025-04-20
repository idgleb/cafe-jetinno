<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;

/**
 * Controlador para mostrar la lista de productos en el sitio.
 */
class ProductoController extends Controller
{
    /**
     * Muestra todos los productos disponibles en la vista pública, con filtro por categoría y paginación.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $categorias = Categoria::all();

        $query = Producto::with('categoria');

        if ($request->filled('categoria')) {
            $query->where('categoria_id', $request->categoria);
        }

        // Aplicamos paginación (X productos por página)
        $productos = $query->paginate(6)->withQueryString();

        return view('productos', compact('productos', 'categorias'));
    }
}
