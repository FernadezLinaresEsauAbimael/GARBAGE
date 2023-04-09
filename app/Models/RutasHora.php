<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RutasHora
 *
 * @property $id
 * @property $ruta_id
 * @property $horario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Horario $horario
 * @property Ruta $ruta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RutasHora extends Model
{
    
    static $rules = [
		'ruta_id' => 'required',
		'horario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ruta_id','horario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function horario()
    {
        return $this->hasOne('App\Models\Horario', 'id', 'horario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ruta()
    {
        return $this->hasOne('App\Models\Ruta', 'id', 'ruta_id');
    }
    

}
