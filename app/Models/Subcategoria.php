<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcategoria
 *
 * @property $id
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property CategoriaSubcategorium[] $categoriaSubcategorias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subcategoria extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoriaSubcategorias()
    {
        return $this->hasMany('App\Models\CategoriaSubcategorium', 'subcategoria_id', 'id');
    }
    

}
