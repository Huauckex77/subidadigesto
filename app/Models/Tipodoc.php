<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipodoc
 *
 * @property $id
 * @property $codigo
 * @property $documento
 * @property $created_at
 * @property $updated_at
 *
 * @property Documento[] $documentos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipodoc extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','documento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documentos()
    {
        return $this->hasMany('App\Models\Documento', 'tipodoc_id', 'id');
    }
    

}
