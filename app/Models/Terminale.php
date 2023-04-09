<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Terminale
 *
 * @property $id
 * @property $estado_id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Camione[] $camiones
 * @property Estado $estado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Terminale extends Model
{
    
    static $rules = [
		'estado_id' => 'required',
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estado_id','nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function camiones()
    {
        return $this->hasMany('App\Models\Camione', 'terminal_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estado_id');
    }
    

}
