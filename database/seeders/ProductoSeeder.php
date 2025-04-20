<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Categoria;

/**
 * Seeder de productos Jetinno.
 *
 * Inserta 18 productos con imágenes reales, nombres únicos, características variadas,
 * precios aleatorios, stock aleatorio y categorías aleatorias.
 */
class ProductoSeeder extends Seeder
{
    /**
     * Ejecuta el seeder para poblar la tabla productos.
     *
     * @return void
     */
    public function run(): void
    {
        $imagenes = [
            ['img' => '00.webp', 'nombre' => 'Jetinno EcoXpress'],
            ['img' => '11.webp', 'nombre' => 'Jetinno ProBrew'],
            ['img' => '22.webp', 'nombre' => 'Jetinno SmartCafe'],
            ['img' => '33.png',  'nombre' => 'Jetinno MiniTouch'],
            ['img' => '44.webp', 'nombre' => 'Jetinno MaxPress'],
            ['img' => '45.webp', 'nombre' => 'Jetinno EcoCup'],
            ['img' => '55.webp', 'nombre' => 'Jetinno CompactBar'],
            ['img' => '66.webp', 'nombre' => 'Jetinno QuickShot'],
            ['img' => '77.webp', 'nombre' => 'Jetinno V10 Classic'],
            ['img' => '88.webp', 'nombre' => 'Jetinno X-Touch'],
            ['img' => '98.webp', 'nombre' => 'Jetinno BaristaGo'],
            ['img' => '99.webp', 'nombre' => 'Jetinno UltraMix'],
            ['img' => 'prod1.png', 'nombre' => 'Jetinno SmartEspresso'],
            ['img' => 'prod2.png', 'nombre' => 'Jetinno SlimLine'],
            ['img' => 'prod3.png', 'nombre' => 'Jetinno DualServe'],
            ['img' => 'prod4.png', 'nombre' => 'Jetinno PureBrew'],
            ['img' => 'prod5.png', 'nombre' => 'Jetinno Cube'],
            ['img' => 'prod6.png', 'nombre' => 'Jetinno MiniVibe'],
        ];

        $caracteristicas = [
            'Pantalla táctil, sistema de autolimpieza',
            'Modo ahorro de energía y configuración por app',
            'Compatibilidad con cápsulas ecológicas',
            'Interfaz intuitiva y tanque de alta capacidad',
            'Molienda integrada y múltiples perfiles de usuario',
            'Diseño modular y conectividad IoT',
        ];

        foreach ($imagenes as $item) {
            DB::table('productos')->insert([
                'nombre' => $item['nombre'],
                'img' => $item['img'],
                'caracteristicas' => $caracteristicas[array_rand($caracteristicas)],
                'precio' => rand(78000, 185000),
                'stock' => rand(1, 25),
                'categoria_id' => Categoria::inRandomOrder()->first()->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
