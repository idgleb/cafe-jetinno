<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Clase Producto
 *
 * Representa una máquina de café Jetinno disponible en el sitio.
 *
 * @property int $id
 * @property string $nombre
 * @property string $img
 * @property string $caracteristicas
 * @property float $precio
 * @property int $stock
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 */
class Producto extends Model
{
    /**
     * Los atributos que se pueden asignar masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'img',
        'caracteristicas',
        'precio',
        'stock',
    ];

    /**
     * Relación: un producto pertenece a una categoría.
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}
