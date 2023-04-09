<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ruta
 *
 * @property $id
 * @property $camion_id
 * @property $nombre
 * @property $longitud
 * @property $latitud
 * @property $created_at
 * @property $updated_at
 *
 * @property Camione $camione
 * @property RutasHora[] $rutasHoras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ruta extends Model
{
    
    static $rules = [
		'camion_id' => 'required',
		'nombre' => 'required',
		'longitud' => 'required',
		'latitud' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['camion_id','nombre','longitud','latitud'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function camione()
    {
        return $this->hasOne('App\Models\Camione', 'id', 'camion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rutasHoras()
    {
        return $this->hasMany('App\Models\RutasHora', 'ruta_id', 'id');
    }
    

}
