<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Camione
 *
 * @property $id
 * @property $terminal_id
 * @property $usuario_id
 * @property $modelo
 * @property $placas
 * @property $created_at
 * @property $updated_at
 *
 * @property Ruta[] $rutas
 * @property Terminale $terminale
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Camione extends Model
{
    
    static $rules = [
		'terminal_id' => 'required',
		'usuario_id' => 'required',
		'modelo' => 'required',
		'placas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['terminal_id','usuario_id','modelo','placas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rutas()
    {
        return $this->hasMany('App\Models\Ruta', 'camion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function terminale()
    {
        return $this->hasOne('App\Models\Terminale', 'id', 'terminal_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'usuario_id');
    }
    

}
