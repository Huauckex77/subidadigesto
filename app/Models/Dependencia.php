<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dependencia
 *
 * @property $id
 * @property $dependencia
 * @property $created_at
 * @property $updated_at
 *
 * @property Documento[] $documentos
 * @property Documento[] $documentos
 * @property Documento[] $documentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dependencia extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dependencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentosuno()
    {
        return $this->hasMany('App\Models\Documento', 'dependenciaaplicacion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentosdos()
    {
        return $this->hasMany('App\Models\Documento', 'dependenciagenera_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentostres()
    {
        return $this->hasMany('App\Models\Documento', 'dependencia_id', 'id');
    }
    

}
