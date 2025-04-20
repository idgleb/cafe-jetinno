<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Clase Categoria
 *
 * Representa una categoría de productos Jetinno.
 *
 * @property int $id
 * @property string $nombre
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Producto[] $productos
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 */
class Categoria extends Model
{
    protected $fillable = ['nombre'];

    /**
     * Relación: una categoría tiene muchos productos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
