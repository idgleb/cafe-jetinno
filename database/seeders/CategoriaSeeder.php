<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Ejecuta el seeder para cargar categorías iniciales.
     */
    public function run(): void
    {
        $categorias = [
            'Máquinas Espresso',
            'Máquinas Vending',
            'Café en cápsulas',
            'Máquinas inteligentes',
            'Super Puper Vending',
        ];

        foreach ($categorias as $nombre) {
            Categoria::create(['nombre' => $nombre]);
        }
    }
}
