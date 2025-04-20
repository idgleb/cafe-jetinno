<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NovedadSeeder extends Seeder
{
    /**
     * Inserta 12 novedades informativas sobre café y tecnología Jetinno.
     */
    public function run(): void
    {
        DB::table('novedads')->insert([
            [
                'titulo' => 'Nueva línea de cafeteras inteligentes',
                'contenido' => 'Jetinno lanza su nueva línea de máquinas inteligentes con control IoT.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Tendencias en café vending 2025',
                'contenido' => 'El futuro del café vending está en la personalización y experiencia del usuario.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Jetinno presenta interfaz táctil 2.0',
                'contenido' => 'Las nuevas pantallas mejoran la interacción y reducen el tiempo de espera.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Máquinas de café con reconocimiento facial',
                'contenido' => 'Jetinno prueba tecnología biométrica para pedidos personalizados.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Eficiencia energética en cafeteras automáticas',
                'contenido' => 'Nuevos modelos reducen el consumo eléctrico en un 30%.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Café orgánico en máquinas vending',
                'contenido' => 'Jetinno lanza cápsulas de café ecológico certificado.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Compatibilidad con pagos sin contacto',
                'contenido' => 'Ahora podés pagar tu café con QR o NFC.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Nuevo sistema de autolimpieza Jetinno',
                'contenido' => 'Mayor higiene y menor mantenimiento para los operadores.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Jetinno y el reciclaje de cápsulas',
                'contenido' => 'Campaña para fomentar el uso de materiales biodegradables.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Café personalizado vía app móvil',
                'contenido' => 'Preconfigurá tu bebida desde el celular y escaneá al llegar.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Jetinno en la Feria Internacional de Café',
                'contenido' => 'Presentación de las máquinas Pro V10 y EcoCup.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Integración con Alexa y Google Assistant',
                'contenido' => 'Comandos de voz para preparar tu café favorito.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
