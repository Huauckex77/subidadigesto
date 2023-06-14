<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programa
 *
 * @property $id
 * @property $programa
 * @property $created_at
 * @property $updated_at
 *
 * @property Documento[] $documentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programa extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['programa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentos()
    {
        return $this->hasMany('App\Models\Documento', 'programa_id', 'id');
    }
    

}
