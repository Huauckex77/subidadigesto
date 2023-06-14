<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autoridade
 *
 * @property $id
 * @property $autoridad
 * @property $codigo
 * @property $created_at
 * @property $updated_at
 *
 * @property Documento[] $documentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autoridade extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['autoridad','codigo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentos()
    {
        return $this->hasMany('App\Models\Documento', 'autoridad_id', 'id');
    }
    

}
